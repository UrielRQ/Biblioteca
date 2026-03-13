@extends ('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8 animate-fade-in-down">
        <h2 class="text-2xl font-bold text-gray-100 mb-6">Lista de Préstamos</h2>
        
        @if(session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('prestamos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Agregar Préstamo</a>

        <div class="bg-gray-800 rounded-lg shadow-sm border border-gray-100 w-full overflow-hidden">
            <div class="overflow-x-auto w-full">

                <table class="w-full text-left border-collapse whitespace-nowrap">
                    <thead>
                        <tr class="bg-gray-700 text-grey-100">
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">ID</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Libro</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Usuario</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Fecha de Préstamo</th>
                            <th class="px-4 py-3 border-b-2 border-gray-200 font-semibold text-white text-sm">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach($prestamos as $prestamo)
                            <tr class="border-b border-gray-700">
                                <td class="px-4 py-3">{{ $prestamo->id }}</td>
                                <td class="px-4 py-3">{{ $prestamo->libro->nombre }}</td>
                                <td class="px-4 py-3">{{ $prestamo->usuario->name }}</td>
                                <td class="px-4 py-3">{{ $prestamo->created_at->format('d/m/Y') }}</td>
                                <td class="px-4 py-3">
                               
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
@endsection