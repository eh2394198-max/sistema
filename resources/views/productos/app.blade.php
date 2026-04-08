<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fas fa-car-side"></i> AutoPartes
        </a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('productos.index') }}">Inventario</a>
            <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
            <a class="nav-link" href="{{ route('ventas.index') }}">Ventas</a>
            <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
        </div>
    </div>
</nav>