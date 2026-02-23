@extends('layout.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Editar Libros</h1>

        <form action="{{ route('libros.update', $libro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block text-white font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $libro->nombre) }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            

            <div class="mb-4">
                <label for="isbn" class="block text-white font-bold mb-2">ISBN:</label>
                <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $libro->isbn) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="autor" class="block text-white font-bold mb-2">Autor:</label>
                <input type="text" name="autor" id="autor" value="{{ old('autor', $libro->autor) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="editorial" class="block text-white font-bold mb-2">Editorial:</label>
                <input type="text" name="editorial" id="editorial" value="{{ old('editorial', $libro->editorial) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
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

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar Libro</button>
                <a href="{{ route ('libros.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
            </div> 
        </form>
    </div>
@endsection