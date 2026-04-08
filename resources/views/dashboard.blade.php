@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2 class="display-5">Bienvenida al Sistema AutoPartes, Emma</h2>
        <p class="text-muted">Aquí tienes el resumen actual de tu negocio.</p>
    </div>

    <div class="col-md-3">
        <div class="card bg-primary text-white shadow">
            <div class="card-body">
                <h5>Refacciones</h5>
                <h3>{{ $totalProductos }}</h3>
                <a href="{{ route('productos.index') }}" class="text-white">Ver inventario →</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-success text-white shadow">
            <div class="card-body">
                <h5>Clientes</h5>
                <h3>{{ $totalClientes }}</h3>
                <a href="{{ route('clientes.index') }}" class="text-white">Ver directorio →</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-info text-white shadow">
            <div class="card-body">
                <h5>Ventas Realizadas</h5>
                <h3>{{ $totalVentas }}</h3>
                <a href="{{ route('ventas.index') }}" class="text-white">Historial →</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-warning text-dark shadow">
            <div class="card-body">
                <h5>Total en Caja</h5>
                <h3>${{ number_format($dineroVentas, 2) }}</h3>
                <p>Ingresos totales</p>
            </div>
        </div>
    </div>
</div>
@endsection