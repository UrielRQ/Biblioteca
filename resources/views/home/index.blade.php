@extends('layout.admin')

@section('content')

<main class="flex-1 p-6">
    <div id="content" class="bg-gray-800 rounded-lg shadow-lg p-6 min-h-screen">
        
        <div id="inicio-content" class="page-content animate-fade-in-down">
            
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-100">Panel de Administración</h2>
                    <p class="text-gray-500 mt-1">Resumen general de la actividad de la biblioteca.</p>
                </div>
                <button class="mt-4 md:mt-0 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow-sm text-sm font-medium transition flex items-center">
                    <i class="fas fa-file-export mr-2"></i> Generar Reporte
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                
                <div class="bg-gray-800 rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">Usuarios Registrados</p>
                            <h3 class="text-3xl font-bold text-gray-100 group-hover:text-blue-600 transition-colors">1,245</h3>
                        </div>
                        <div class="bg-blue-50 text-blue-600 p-4 rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-users text-2xl"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-500 font-semibold flex items-center bg-green-50 px-2 py-0.5 rounded-full">
                            <i class="fas fa-arrow-up mr-1 text-xs"></i> 12%
                        </span>
                        <span class="text-gray-400 ml-2">vs mes anterior</span>
                    </div>
                </div>
                
                <div class="bg-gray-800 rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">Libros Disponibles</p>
                            <h3 class="text-3xl font-bold text-gray-100 group-hover:text-green-600 transition-colors">8,752</h3>
                        </div>
                        <div class="bg-green-50 text-green-600 p-4 rounded-xl group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-book text-2xl"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-500 font-semibold flex items-center bg-green-50 px-2 py-0.5 rounded-full">
                            <i class="fas fa-plus mr-1 text-xs"></i> 45
                        </span>
                        <span class="text-gray-400 ml-2">nuevos esta semana</span>
                    </div>
                </div>
                
                <div class="bg-gray-800 rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">Préstamos Activos</p>
                            <h3 class="text-3xl font-bold text-gray-100 group-hover:text-purple-600 transition-colors">324</h3>
                        </div>
                        <div class="bg-purple-50 text-purple-600 p-4 rounded-xl group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-exchange-alt text-2xl"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-orange-500 font-semibold flex items-center bg-orange-50 px-2 py-0.5 rounded-full">
                            <i class="fas fa-clock mr-1 text-xs"></i> 5
                        </span>
                        <span class="text-gray-400 ml-2">vencen hoy</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <h3 class="text-lg font-bold text-gray-100">Actividad Reciente</h3>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium hover:underline transition">Ver historial completo</a>
                </div>
                
                <div class="p-6">
                    <ul class="relative border-l-2 border-gray-100 ml-3 space-y-8">
                        
                        <li class="ml-8 relative">
                            <span class="absolute -left-11 flex items-center justify-center w-8 h-8 bg-green-100 rounded-full ring-4 ring-white">
                                <i class="fas fa-user-plus text-green-600 text-xs"></i>
                            </span>
                            <div class="bg-gray-700 p-4 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="text-sm font-bold text-gray-100">Nuevo registro</h4>
                                    <span class="text-xs text-gray-500 bg-gray-600 px-2 py-1 rounded">Hace 2 horas</span>
                                </div>
                                <p class="text-sm text-gray-300">El usuario <span class="font-semibold text-gray-200">María González</span> ha completado su registro.</p>
                            </div>
                        </li>

                        <li class="ml-8 relative">
                            <span class="absolute -left-11 flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full ring-4 ring-white">
                                <i class="fas fa-book-reader text-blue-600 text-xs"></i>
                            </span>
                            <div class="bg-gray-700 p-4 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="text-sm font-bold text-gray-100">Devolución de libro</h4>
                                    <span class="text-xs text-gray-500 bg-gray-600 px-2 py-1 rounded">Hace 5 horas</span>
                                </div>
                                <p class="text-sm text-gray-300">Se ha devuelto el ejemplar <span class="italic text-gray-200">"Cien años de soledad"</span>.</p>
                            </div>
                        </li>

                        <li class="ml-8 relative">
                            <span class="absolute -left-11 flex items-center justify-center w-8 h-8 bg-red-100 rounded-full ring-4 ring-white">
                                <i class="fas fa-exclamation-triangle text-red-500 text-xs"></i>
                            </span>
                            <div class="bg-gray-700 p-4 rounded-lg border border-red-50 shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="text-sm font-bold text-red-700">Préstamo vencido</h4>
                                    <span class="text-xs text-red-500 font-bold bg-red-50 px-2 py-1 rounded">Hace 1 día</span>
                                </div>
                                <p class="text-sm text-gray-300">El libro <span class="italic text-gray-200">"El principito"</span> no ha sido entregado a tiempo.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        
        <div id="usuarios-content" class="page-content hidden animate-fade-in-down">
            <h2 class="text-2xl font-bold text-gray-100 mb-6">Gestión de Usuarios</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-gray-700 border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-4 border-b text-left">ID</th>
                            <th class="py-3 px-4 border-b text-left">Nombre</th>
                            <th class="py-3 px-4 border-b text-left">Email</th>
                            <th class="py-3 px-4 border-b text-left">Estado</th>
                            <th class="py-3 px-4 border-b text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">001</td>
                            <td class="py-3 px-4 border-b">Carlos Martínez</td>
                            <td class="py-3 px-4 border-b">carlos@email.com</td>
                            <td class="py-3 px-4 border-b"><span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Activo</span></td>
                            <td class="py-3 px-4 border-b">
                                <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">002</td>
                            <td class="py-3 px-4 border-b">Ana López</td>
                            <td class="py-3 px-4 border-b">ana@email.com</td>
                            <td class="py-3 px-4 border-b"><span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Activo</span></td>
                            <td class="py-3 px-4 border-b">
                                <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">003</td>
                            <td class="py-3 px-4 border-b">Roberto Sánchez</td>
                            <td class="py-3 px-4 border-b">roberto@email.com</td>
                            <td class="py-3 px-4 border-b"><span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Inactivo</span></td>
                            <td class="py-3 px-4 border-b">
                                <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-6 flex justify-between">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-plus mr-2"></i> Agregar Usuario
                </button>
                <div class="text-sm text-gray-500">
                    Mostrando 3 de 1,245 usuarios
                </div>
            </div>
        </div>
        
        <!-- Sección de gestión de libros -->
        <div id="libros-content" class="page-content hidden animate-fade-in-down">
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
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded font-semibold">
                                        Disponible
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
            </div>

            <div class="mt-8">
                <a href="{{ route('libros.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-plus mr-2"></i> Agregar Nuevo Libro
                </a>    
                </button>
            </div>
        </div>
        <!-- Fin de sección de gestión de libros -->
        
        <div id="prestamos-content" class="page-content hidden animate-fade-in-down">
            <h2 class="text-2xl font-bold text-gray-100 mb-6">Gestión de Préstamos</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-gray-800 border border-gray-200 rounded-lg">
                    <thead class="bg-gray-700">
                        <tr>
                            <th class="py-3 px-4 border-b text-left">Préstamo ID</th>
                            <th class="py-3 px-4 border-b text-left">Usuario</th>
                            <th class="py-3 px-4 border-b text-left">Libro</th>
                            <th class="py-3 px-4 border-b text-left">Fecha Préstamo</th>
                            <th class="py-3 px-4 border-b text-left">Fecha Devolución</th>
                            <th class="py-3 px-4 border-b text-left">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">PR-001</td>
                            <td class="py-3 px-4 border-b">Carlos Martínez</td>
                            <td class="py-3 px-4 border-b">El principito</td>
                            <td class="py-3 px-4 border-b">10/05/2023</td>
                            <td class="py-3 px-4 border-b">25/05/2023</td>
                            <td class="py-3 px-4 border-b"><span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Vencido</span></td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">PR-002</td>
                            <td class="py-3 px-4 border-b">Ana López</td>
                            <td class="py-3 px-4 border-b">Cien años de soledad</td>
                            <td class="py-3 px-4 border-b">15/05/2023</td>
                            <td class="py-3 px-4 border-b">30/05/2023</td>
                            <td class="py-3 px-4 border-b"><span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Activo</span></td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">PR-003</td>
                            <td class="py-3 px-4 border-b">Roberto Sánchez</td>
                            <td class="py-3 px-4 border-b">Don Quijote de la Mancha</td>
                            <td class="py-3 px-4 border-b">18/05/2023</td>
                            <td class="py-3 px-4 border-b">01/06/2023</td>
                            <td class="py-3 px-4 border-b"><span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Activo</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-plus mr-2"></i> Nuevo Préstamo
                </button>
            </div>
        </div>
        
        <div id="salir-content" class="page-content hidden animate-fade-in-down">
            <div class="text-center py-12">
                <div class="w-24 h-24 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-sign-out-alt text-red-500 text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-100 mb-4">Cerrar Sesión</h2>
                <p class="text-gray-600 max-w-md mx-auto mb-8">¿Está seguro que desea salir del sistema? Será redirigido a la página de inicio de sesión.</p>
                <div class="flex justify-center space-x-4">
                    <button id="confirm-logout" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 shadow-md transition">
                        Sí, salir del sistema
                    </button>
                    <button id="cancel-logout" class="bg-gray-200 text-gray-100 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-down {
        animation: fadeInDown 0.4s ease-out;
    }
</style>

@endsection