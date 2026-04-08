@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <h4 class="mb-0">Registrar Nueva Venta - AutoPartes</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('ventas.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="form-label font-weight-bold">Seleccionar Cliente</label>
                <select name="cliente_id" class="form-select" required>
                    <option value="">-- Selecciona un cliente --</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <hr>
            <h5>Productos / Refacciones</h5>
            
            <table class="table" id="tabla_productos">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th width="150">Cantidad</th>
                        <th width="50"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="productos[]" class="form-select" required>
                                <option value="">-- Elige producto --</option>
                                @foreach($productos as $producto)
                                    <option value="{{ $producto->id }}">
                                        {{ $producto->nombre }} ({{ $producto->marca }}) - ${{ $producto->precio }} [Stock: {{ $producto->stock }}]
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="number" name="cantidades[]" class="form-control" min="1" value="1" required>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <button type="button" class="btn btn-outline-info btn-sm mb-4" id="btn_agregar">
                + Agregar otro producto
            </button>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success btn-lg">Finalizar Venta y Actualizar Stock</button>
                <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<script>
    // Script sencillo para agregar más filas de productos
    document.getElementById('btn_agregar').addEventListener('click', function() {
        let tabla = document.getElementById('tabla_productos').getElementsByTagName('tbody')[0];
        let nuevaFila = tabla.insertRow();
        nuevaFila.innerHTML = `
            <td>
                <select name="productos[]" class="form-select" required>
                    <option value="">-- Elige producto --</option>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}">
                            {{ $producto->nombre }} ({{ $producto->marca }}) - ${{ $producto->precio }}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <input type="number" name="cantidades[]" class="form-control" min="1" value="1" required>
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.parentElement.remove()">X</button>
            </td>
        `;
    });
</script>
@endsection