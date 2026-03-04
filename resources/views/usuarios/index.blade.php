@extends('layout.admin')

@section('content')
    <div class="container mx-auto px-4 py-8 animate-fade-in-down">
        <h2 class="text-2xl font-bold text-gray-100 mb-6">Lista de usuarios</h2>
        
        <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 w-full overflow-hidden">
            <div class="overflow-x-auto w-full">

                <table class="w-full text-left border-collapse whitespace-nowrap">
                    <thead>
                        <tr class="bg-gray-700 text-grey-100">
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">ID</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Nombre</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Email</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Tipo</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach($usuarios as $usuario)
                            <tr class="hover:bg-gray-100 hover:text-black transition-colors border-b border-gray-100">
                                <td class="px-4 py-3 font-medium text-grey-100">{{ $usuario->id }}</td>
                                <td class="px-4 py-3 text-grey-100">{{ $usuario->name }}</td>
                                <td class="px-4 py-3 text-grey-100">{{ $usuario->email }}</td>
                                <td class="px-4 py-3 text-grey-100">{{ $usuario->user_type }}</td>
                                    
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-3">
                                        <button class="text-blue-600 hover:text-blue-800 transition-colors" title="Editar">
                                            <a href="#" class="flex items-center">
                                                        <i class="fas fa-edit mr-1"></i> Editar
                                            </a>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800 transition-colors" title="Eliminar">
                                            <form action="#" method="POST" class="inline">
                                                @csrf   
                                                @method('DELETE')
                                                <button type="submit" class="flex items-center">
                                                    <i class="fas fa-trash mr-1"></i>Eliminar
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
        </div>
    </div>
@endsection