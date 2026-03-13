@extends('layout.admin')

@section('content')
    <div class="container mx-auto px-4 py-8 animate-fade-in-down">
        <h1 class="text-2xl font-bold text-gray-100 mb-6">Categorías</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Agregar Categoría</a>
        <br><br>

        <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 w-full overflow-hidden">
            <div class="overflow-x-auto w-full">

                <table class="w-full text-left border-collapse whitespace-nowrap">
                    <thead>
                        <tr class="bg-gray-700 text-grey-100">
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">ID</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Nombre</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($categorias as $categoria)
                            <tr class="hover:bg-gray-100 hover:text-black transition-colors border-b border-gray-100">
                                <td class="px-4 py-3 font-medium text-grey-100">{{ $categoria->id }}</td>
                                <td class="px-4 py-3 text-grey-100">{{ $categoria->nombre }}</td>
                                <td class="px-4 py-3 text-grey-100">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('categorias.edit', $categoria->id) }}" 
                                        class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded shadow-sm text-sm transition-colors">
                                            Editar
                                        </a>
                                        
                                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded shadow-sm text-sm transition-colors"
                                                    onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 