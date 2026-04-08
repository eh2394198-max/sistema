@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h3>Editar Usuario: {{ $usuario->nombre }}</h3>
        <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
            @csrf
            @method('PUT') {{-- Esto es vital para que Laravel sepa que es una actualización --}}
            
            <div class="mb-3">
                <label class="form-label">Nombre Completo</label>
                <input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar Datos</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection