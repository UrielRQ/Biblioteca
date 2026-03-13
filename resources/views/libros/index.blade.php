@extends('layout.admin')

@section('content')
<!-- Sección de gestión de libros -->
 <!-- <main class="flex-1 p-6"> -->
    <!-- <div id="content" class="bg-gray-800 rounded-lg shadow-lg p-6 min-h-screen"> -->
        <div id="libros-content" class="container mx-auto px-4 py-8 animate-fade-in-down"> 
            <h2 class="text-2xl font-bold text-gray-100 mb-6">Gestión de Libros</h2>

            <!-- Sección de estadísticas rápidas -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 mt-4">

                <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">Total de libros</p>
                            <h3 class="text-3xl font-bold text-gray-100">1,247</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center">
                            <i class="fas fa-book text-blue-500"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-500 font-medium flex items-center">
                            <i class="fas fa-arrow-up text-xs mr-1"></i> 5.2%
                        </span>
                        <span class="text-gray-400 ml-2">desde el mes pasado</span>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">Libros prestados</p>
                            <h3 class="text-3xl font-bold text-gray-100">189</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-yellow-50 flex items-center justify-center">
                            <i class="fas fa-exchange-alt text-yellow-500"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-red-500 font-medium flex items-center">
                            <i class="fas fa-arrow-down text-xs mr-1"></i> 2.1%
                        </span>
                        <span class="text-gray-400 ml-2">desde el mes pasado</span>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">Usuarios activos</p>
                            <h3 class="text-3xl font-bold text-gray-100">543</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center">
                            <i class="fas fa-users text-green-500"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-500 font-medium flex items-center">
                            <i class="fas fa-arrow-up text-xs mr-1"></i> 12.7%
                        </span>
                        <span class="text-gray-400 ml-2">desde el mes pasado</span>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">Devoluciones pendientes</p>
                            <h3 class="text-3xl font-bold text-gray-100">24</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-red-50 flex items-center justify-center">
                            <i class="fas fa-clock text-red-500"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-red-500 font-medium flex items-center">
                            <i class="fas fa-arrow-up text-xs mr-1"></i> 3.4%
                        </span>
                        <span class="text-gray-400 ml-2">desde ayer</span>
                    </div>
                </div>

            </div>
            <!-- Fin de seccion de estadisticas rapidas -->

            
            <!-- Sección de listado de libros en cartas 
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                @foreach($libros as $libro)
                <div class="border rounded-lg p-5 hover:shadow-md transition">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="font-bold text-lg">{{ $libro->nombre }}</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Disponible</span>
                    </div>
                    <p class="text-gray-600 mb-2">{{ $libro->autor }}</p>
                    <p class="text-sm text-gray-500 mb-4">ISBN: {{ $libro->isbn }}</p>
                    <p class="text-gray-600 mb-2">{{ $libro->categoria->nombre }}</p>
                    <div class="flex justify-between">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit mr-1"></i> Editar</button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash mr-1"></i> Eliminar</button>
                    </div>
                </div>
                @endforeach
            </div>  
            Fin de seccion de listado de libros en cartas-->

            <!-- Tabla de libros -->
            <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 w-full overflow-hidden">
    
                <div class="overflow-x-auto w-full">
                    <table class="w-full text-left border-collapse whitespace-nowrap">
                        <thead>
                            <tr class="bg-gray-700">
                                <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Nombre</th>
                                <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Autor</th>
                                <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">ISBN</th>
                                <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Categoría</th>
                                <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Estatus</th>
                                <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            
                            @foreach($libros as $libro)
                            <tr class="hover:bg-gray-100 hover:text-black transition-colors border-b border-gray-100">
                                <td class="px-4 py-3 font-medium text-grey-100">{{ $libro->nombre }}</td>
                                <td class="px-4 py-3 text-grey-100">{{ $libro->autor }}</td>
                                <td class="px-4 py-3 text-grey-100">{{ $libro->isbn }}</td>
                                <td class="px-4 py-3 text-grey-100">{{ $libro->categoria->nombre }}</td>
                                <td class="px-4 py-3">
                                    
                                        @if($libro->estatus == 0)
                                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded font-semibold">
                                            Disponible
                                        @else
                                            <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded font-semibold">
                                            Prestado
                                        @endif
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-3">
                                        <button class="text-blue-600 hover:text-blue-800 transition-colors" title="Editar">
                                            <a href="{{ route('libros.edit', $libro->id) }}" class="flex items-center">
                                                <i class="fas fa-edit mr-1"></i> Editar
                                            </a>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800 transition-colors" title="Eliminar">
                                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="flex items-center">
                                                    <i class="fas fa-trash mr-1"></i> Eliminar
                                                </button>
                                            </form>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="px-4 py-3 border-t border-gray-700 bg-gray-800">
                        {{ $libros->links() }}
                    </div>
                    </div>

                <div class="mt-8">
                    <a href="{{ route('libros.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 shadow-md transition-colors">
                        <i class="fas fa-plus mr-2"></i> Agregar Nuevo Libro
                    </a>    
                </div>
            </div>
    <!-- </div> -->
<!-- </main> -->
        <!-- Fin de sección de gestión de libros -->
        
@endsection 