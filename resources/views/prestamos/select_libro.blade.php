@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8 animate-fade-in-down">
    <h2 class="text-2xl font-bold text-gray-100 mb-6">Seleccionar Libro para Préstamo</h2>

    <div class="bg-gray-800 rounded-lg shadow-sm border-gray-100 w-full overflow-hidden p-6">

        <div class="mt-6">
            <h2 class="text-xl font-bold text-gray-100">Usuario:</h2>
            <p class="text-gray-300">ID: {{ $usuario->id }}</p>
            <p class="text-gray-300">Nombre: {{ $usuario->name }}</p>
            <p class="text-gray-300">Email: {{ $usuario->email }}</p>
        </div>

        <form action="{{ route('prestamos.store') }}" method = "POST">
            @csrf
            <label for="libro" class="block text-white font-bold mb-2">Libro:</label>
            <select name="libro_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Seleccione un libro</option>
                @foreach($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->nombre }} - {{ $libro->autor }}</option>
                @endforeach
            </select>
            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

            <div class="mt-4">
                <button type="submit" value="Prestar" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Prestar</button>
                <a href="{{ route('prestamos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection