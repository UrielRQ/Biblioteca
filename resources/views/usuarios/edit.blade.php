@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Editar Usuario</h1>

        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="bg-gray-800 shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-white font-bold mb-2">Nombre del Usuario:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $usuario->name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('nombre')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            

            <div class="mb-4">
                <label for="email" class="block text-white font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $usuario->email) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="user_type" class="block text-white font-bold mb-2">Tipo de Usuario:</label>
                <select name="user_type" id="user_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Selecciona un tipo</option>
                    <option value="admin" {{ old('user_type', $usuario->user_type) == 'admin' ? 'selected' : '' }}>Administrador</option>
                    <option value="user" {{ old('user_type', $usuario->user_type) == 'user' ? 'selected' : '' }}>Usuario</option>
                </select>
            </div>

            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar Usuario</button>
                <a href="{{ route('usuarios.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
            </div>
            
        </form>
    </div>
@endsection