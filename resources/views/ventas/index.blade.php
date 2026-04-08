@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Historial de Ventas</h1>
    <a href="{{ route('ventas.create') }}" class="btn btn-primary">Nueva Venta</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>Folio</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Total Cobrado</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ventas as $venta)
        <tr>
            <td>#00{{ $venta->id }}</td>
            <td>{{ $venta->created_at->format('d/m/Y H:i') }}</td>
            <td>{{ $venta->cliente->nombre }}</td>
            <td><strong>${{ number_format($venta->total, 2) }}</strong></td>
            <td><span class="badge bg-success">Completada</span></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection