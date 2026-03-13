@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8 animate-fade-in-down">
        <h2 class="text-2xl font-bold text-gray-100 mb-6">Crear Préstamo</h2>

        <div class="bg-gray-800 rounded-lg shadow-sm  border-gray-100 w-full overflow-hidden p-6">
            <form action="{{ route('prestamos.buscar_usuario') }}" method = "POST">
                @csrf
                <label for="usuario_id" class="block text-white font-bold py-2">ID del Usuario:</label>
                <input type="text" name="usuario_id" id="usuario_id" value="{{ old('usuario_id') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline">
                <label for="usuario_nombre" class="block text-white font-bold py-2">Nombre del Usuario:</label>
                <input type="text" name="usuario_nombre" id="usuario_nombre" value="{{ old('usuario_nombre') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline">
            

                <div class="mt-4">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ">Buscar Usuario</button>
                    <a href="{{ route('prestamos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
                </div>
            </form>
            @isset($usuario)
            <div class="mt-6">
                <h2 class="text-xl font-bold text-gray-100">Usuario Encontrado:</h2>
                <p class="text-gray-300">ID: {{ $usuario->id }}</p>
                <p class="text-gray-300">Nombre: {{ $usuario->name }}</p>
                <p class="text-gray-300">Email: {{ $usuario->email }}</p>
            </div>

            <form action="{{route('prestamos.select_libro')}}" method="POST">
                @csrf
                <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
                <input type="submit" value="Seleccionar libro" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
            </form>
            @endisset

        </div>

        

        
</div>
@endsection