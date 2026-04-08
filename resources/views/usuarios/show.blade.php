@extends('layouts.app')

@section('content')
<div class="card shadow" style="max-width: 500px;">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Detalles del Usuario</h4>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $usuario->id }}</p>
        <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>
        <p><strong>Creado el:</strong> {{ $usuario->created_at->format('d/m/Y H:i') }}</p>
        <hr>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver a la lista</a>
        <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning">Editar</a>
    </div>
</div>
@endsection