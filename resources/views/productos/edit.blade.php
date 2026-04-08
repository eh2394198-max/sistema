@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h3>Editar Refacción: {{ $producto->nombre }}</h3>
        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nombre de la Pieza</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Marca</label>
                    <input type="text" name="marca" class="form-control" value="{{ $producto->marca }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Cantidad en Stock</label>
                    <input type="number" name="stock" class="form-control" value="{{ $producto->stock }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar Producto</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection