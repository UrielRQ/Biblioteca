@extends('layout.admin')
@section('content')

<div class="container mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6">Perfil del Usuario</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="container mx-auto px-4 py-4">
    <form action="{{ route('usuarios.update_profile') }}" method="POST" class="bg-gray-800 shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-white font-bold mb-2">Nombre del Usuario:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $usuario->name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
            @error('nombre')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar Nombre</button>
            <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
        </div>
    </form>
    </div>

    <div class="container mx-auto px-4 py-4">
    <form action="{{ route('usuarios.update_password') }}" method="POST" class="bg-gray-800 shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
                <label for="current_password" class="block text-white font-bold mb-2">Contraseña actual:</label>
                <input type="password" name="current_password" id="current_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('current_password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
                <label for="new_password" class="block text-white font-bold mb-2">Nueva contraseña:</label>
                <input type="password" name="new_password" id="new_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('new_password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
        </div>

        <div class="mb-4">
                <label for="new_password_confirmation" class="block text-white font-bold mb-2">Confirmar nueva contraseña:</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                @error('new_password_confirmation')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
        </div>

        <div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar Contraseña</button>
            <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
        </div>
    </form>
    </div>
</div>


@endsection