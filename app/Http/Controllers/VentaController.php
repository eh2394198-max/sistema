<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Producto;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('cliente')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $productos = Producto::where('stock', '>', 0)->get();
        return view('ventas.create', compact('clientes', 'productos'));
    }

    public function store(Request $request)
    {
        // ✅ Validación
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'productos' => 'required|array',
            'cantidades' => 'required|array'
        ]);

        DB::transaction(function () use ($request) {

            $venta = Venta::create([
                'cliente_id' => $request->cliente_id,
                'total' => 0
            ]);

            $totalVenta = 0;

            foreach ($request->productos as $key => $producto_id) {

                $producto = Producto::findOrFail($producto_id);
                $cantidad = $request->cantidades[$key];

                // ✅ Validar stock
                if ($producto->stock < $cantidad) {
                    throw new \Exception("Stock insuficiente para {$producto->nombre}");
                }

                DetalleVenta::create([
                    'venta_id' => $venta->id,
                    'producto_id' => $producto_id,
                    'cantidad' => $cantidad,
                    'precio_unitario' => $producto->precio
                ]);

                // Restar stock
                $producto->decrement('stock', $cantidad);

                $totalVenta += $producto->precio * $cantidad;
            }

            $venta->update(['total' => $totalVenta]);
        });

        return redirect()->route('ventas.index')
            ->with('success', '¡Venta realizada con éxito!');
    }
}