@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h3>Registrar Nuevo Usuario</h3>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre Completo</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar Usuario</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</div>
@endsection