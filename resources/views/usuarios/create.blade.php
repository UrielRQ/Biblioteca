@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Agregar Nuevo Usuario</h1>

        <form action="{{ route('usuarios.store') }}" method="POST" class="bg-gray-800 shadow-md rounded-lg p-6">
            @csrf
            
            <div class="mb-4">
                <label for="nombre" class="block text-white font-bold mb-2">Nombre del Usuario:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('nombre')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            

            <div class="mb-4">
                <label for="email" class="block text-white font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" value="{{old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-white font-bold mb-2">Contraseña:</label>
                <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-white font-bold mb-2">Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('password_confirmation')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="user_type" class="block text-white font-bold mb-2">Tipo de Usuario:</label>
                <select name="user_type" id="user_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Selecciona un tipo</option>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
            </div>

            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar Usuario</button>
                <a href="{{ route('usuarios.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
            </div>
            
        </form>
</div>

    <!-- <div class="container mx-auto px-4 py-8 animate-fade-in-down">
        <h2 class="text-2xl font-bold text-gray-100 mb-6">Crear nuevo usuario</h2>
        
        <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 w-full p-6">
            <form action="{{ route('usuarios.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-100">Nombre</label>
                    <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-100 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-100">Email</label>
                    <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-100 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-100">Contraseña</label>
                    <input type="password" name="password" id="password" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-100 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="user_type" class="block text-sm font-medium text-gray-100">Tipo de usuario</label>
                    <select name="user_type" id="user_type" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-100 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Selecciona un tipo</option>
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-800 text-white rounded-md transition-colors">Crear usuario</button> -->
@endsection