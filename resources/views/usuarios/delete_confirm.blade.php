@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8 animate-fade-in-down">
    <h1 class="text-2xl font-bold text-gray-100 mb-6">Confirmar Eliminación de Usuario</h1>
    <p class="text-lg text-gray-200 mb-6">
        ¿Estás seguro de que quieres eliminar al usuario <span class="font-semibold text-white">"{{ $usuario->name }}"</span>?
    </p>

    <div class="bg-gray-800 rounded-lg shadow-md border border-gray-600 w-full max-w-4xl overflow-hidden p-6">
        
        <div class="overflow-x-auto w-full mb-8">
            <table class="w-full text-left border-collapse whitespace-nowrap text-gray-200">
                <tbody>
                    <tr class="border-b border-gray-700/50">
                        <th class="py-3 px-2 font-bold w-32">ID</th>
                        <td class="py-3 px-2">{{ $usuario->id }}</td>
                    </tr>
                    <tr class="border-b border-gray-700/50">
                        <th class="py-3 px-2 font-bold">Nombre</th>
                        <td class="py-3 px-2">{{ $usuario->name }}</td>
                    </tr>
                    <tr class="border-b border-gray-700/50">
                        <th class="py-3 px-2 font-bold">Email</th>
                        <td class="py-3 px-2">{{ $usuario->email }}</td>
                    </tr>
                    <tr>
                        <th class="py-3 px-2 font-bold">Tipo</th>
                        <td class="py-3 px-2">{{ $usuario->user_type }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex items-center gap-3">
            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="m-0">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                    Eliminar
                </button>
            </form>
            <a href="{{ route('usuarios.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded transition-colors duration-200 text-center focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                Cancelar
            </a>
        </div>
        
    </div>
</div>
@endsection