@extends('layout.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Agregar Libro</h1>

        <form action="{{ route('libros.store') }}" method="POST" class="bg-grey-800 shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-white font-bold mb-2">Nombre del libro:</label>
                <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="isbn" class="block text-white font-bold mb-2">ISBN:</label>
                <input type="text" name="isbn" id="isbn" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="autor" class="block text-white font-bold mb-2">Autor:</label>
                <input type="text" name="autor" id="autor" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="editorial" class="block text-white font-bold mb-2">Editorial:</label>
                <input type="text" name="editorial" id="editorial" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="categoria" class="block text-white font-bold mb-2">Categoría:</label>
                <select name="categoria" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Seleccionar categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar Categoría</button>
                <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
            </div>
            
        </form>
    </div>
@endsection