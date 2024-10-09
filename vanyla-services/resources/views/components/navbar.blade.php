
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white">
            <a href="{{ url('/') }}" class="font-bold text-xl">Catering Services</a>
        </div>
        <div class="flex items-center">
            @guest
                <a href="{{ route('login') }}" class="text-white px-3">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="text-white px-3">Registrarse</a>
            @endguest
            @auth
                <span class="text-white px-3">Bienvenido, {{ Auth::user()->name }}</span>
                @if(Auth::user()->isAdmin())
                    <a href="{{ route('admin.users.index') }}" class="text-white px-3">Gestión de Usuarios</a>
                @endif
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-white px-3">Cerrar Sesión</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
