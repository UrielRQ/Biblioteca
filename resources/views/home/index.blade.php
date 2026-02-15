@extends('layout.admin')

@section('content')

<!-- Contenido dinámico -->
<main class="flex-1 p-6">
    <div id="content" class="bg-white rounded-lg shadow p-6">
        <!-- Contenido de la página de inicio por defecto -->
        <div id="inicio-content" class="page-content">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Panel de Administración - Biblioteca</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-blue-50 p-5 rounded-lg border border-blue-100">
                    <div class="flex items-center">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Usuarios Registrados</h3>
                            <p class="text-3xl font-bold text-blue-700">1,245</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-green-50 p-5 rounded-lg border border-green-100">
                    <div class="flex items-center">
                        <div class="bg-green-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-book text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Libros Disponibles</h3>
                            <p class="text-3xl font-bold text-green-700">8,752</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-purple-50 p-5 rounded-lg border border-purple-100">
                    <div class="flex items-center">
                        <div class="bg-purple-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-exchange-alt text-purple-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Préstamos Activos</h3>
                            <p class="text-3xl font-bold text-purple-700">324</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 p-5 rounded-lg">
                <h3 class="font-bold text-lg mb-4">Actividad Reciente</h3>
                <ul class="space-y-3">
                    <li class="flex items-center border-b pb-3">
                        <i class="fas fa-user-plus text-green-500 mr-3"></i>
                        <div>
                            <p class="font-medium">Nuevo usuario registrado: María González</p>
                            <p class="text-sm text-gray-500">Hace 2 horas</p>
                        </div>
                    </li>
                    <li class="flex items-center border-b pb-3">
                        <i class="fas fa-book text-blue-500 mr-3"></i>
                        <div>
                            <p class="font-medium">Libro devuelto: "Cien años de soledad"</p>
                            <p class="text-sm text-gray-500">Hace 5 horas</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-exclamation-triangle text-yellow-500 mr-3"></i>
                        <div>
                            <p class="font-medium">Préstamo vencido: "El principito"</p>
                            <p class="text-sm text-gray-500">Hace 1 día</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Contenido de la página de usuarios -->
        <div id="usuarios-content" class="page-content hidden">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Gestión de Usuarios</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
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
        
        <!-- Contenido de la página de libros -->
        <div id="libros-content" class="page-content hidden">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Gestión de Libros</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="border rounded-lg p-5 hover:shadow-md">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="font-bold text-lg">Cien años de soledad</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Disponible</span>
                    </div>
                    <p class="text-gray-600 mb-2">Gabriel García Márquez</p>
                    <p class="text-sm text-gray-500 mb-4">ISBN: 978-0307474728</p>
                    <div class="flex justify-between">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit mr-1"></i> Editar</button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash mr-1"></i> Eliminar</button>
                    </div>
                </div>
                
                <div class="border rounded-lg p-5 hover:shadow-md">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="font-bold text-lg">El principito</h3>
                        <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Prestado</span>
                    </div>
                    <p class="text-gray-600 mb-2">Antoine de Saint-Exupéry</p>
                    <p class="text-sm text-gray-500 mb-4">ISBN: 978-0156012195</p>
                    <div class="flex justify-between">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit mr-1"></i> Editar</button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash mr-1"></i> Eliminar</button>
                    </div>
                </div>
                
                <div class="border rounded-lg p-5 hover:shadow-md">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="font-bold text-lg">Don Quijote de la Mancha</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Disponible</span>
                    </div>
                    <p class="text-gray-600 mb-2">Miguel de Cervantes</p>
                    <p class="text-sm text-gray-500 mb-4">ISBN: 978-8424116196</p>
                    <div class="flex justify-between">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit mr-1"></i> Editar</button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash mr-1"></i> Eliminar</button>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-plus mr-2"></i> Agregar Nuevo Libro
                </button>
            </div>
        </div>
        
        <!-- Contenido de la página de préstamos -->
        <div id="prestamos-content" class="page-content hidden">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Gestión de Préstamos</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
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
        
        <!-- Contenido de la página de salir -->
        <div id="salir-content" class="page-content hidden">
            <div class="text-center py-12">
                <div class="w-24 h-24 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-sign-out-alt text-red-600 text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Cerrar Sesión</h2>
                <p class="text-gray-600 max-w-md mx-auto mb-8">¿Está seguro que desea salir del sistema de administración de la biblioteca? Será redirigido a la página de inicio de sesión.</p>
                <div class="flex justify-center space-x-4">
                    <button id="confirm-logout" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">
                        Sí, salir del sistema
                    </button>
                    <button id="cancel-logout" class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg hover:bg-gray-400">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
