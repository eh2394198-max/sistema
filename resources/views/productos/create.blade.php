@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h3>Registrar Nueva Refacción</h3>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nombre de la Pieza</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ej. Amortiguador" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Marca</label>
                    <input type="text" name="marca" class="form-control" placeholder="Ej. Monroe" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" step="0.01" name="precio" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Cantidad en Stock</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar en Inventario</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection