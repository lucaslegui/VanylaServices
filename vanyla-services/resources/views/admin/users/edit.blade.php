<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edicion de usuario</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-navbar />
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-bold mb-4">Editar Usuario</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="name" class="block font-medium text-sm">Nombre</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium text-sm">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label for="role" class="block font-medium text-sm">Rol</label>
            <select name="role" class="w-full border p-2" required>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>Usuario</option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrador</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Guardar</button>
    </form>
</div>
</body>
</html>


