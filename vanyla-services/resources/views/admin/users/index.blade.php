<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Gestión de Usuarios</title>
</head>
<body>
<x-navbar />
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-bold mb-4">Gestión de Usuarios</h1>
    <table class="min-w-full bg-white">
        <thead>
        <tr>
            <th class="py-2 px-4 border-b">ID</th>
            <th class="py-2 px-4 border-b">Nombre</th>
            <th class="py-2 px-4 border-b">Email</th>
            <th class="py-2 px-4 border-b">Rol</th>
            <th class="py-2 px-4 border-b">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                <td class="py-2 px-4 border-b">{{ $user->role }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-500">Editar</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="deleteButton text-red-500 ml-2">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
    document.querySelectorAll('.deleteButton').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const form = this.closest('form');
            alertify.confirm('Confirmar eliminación', '¿Estás seguro de que deseas eliminar este usuario?',
                function() {
                    form.submit();
                },
                function() {
                    alertify.error('Cancelado');
                });
        });
    });
</script>
</body>
</html>

