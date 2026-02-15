@extends('layout.auth')

@section('content')

<!-- Contenedor de formularios -->
<div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Formulario de Login -->
            <section class="form-container flex-1">
                <div class="bg-white rounded-2xl form-card p-6 md:p-8 h-full">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-sign-in-alt text-blue-600 text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">Iniciar Sesión</h2>
                    </div>
                    
                    <p class="text-gray-600 mb-8">Ingresa tus credenciales para acceder a tu cuenta.</p>
                    
                    <form id="loginForm" class="space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf 
                        <!-- Campo Email -->
                        <div>
                            <label for="loginEmail" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-envelope text-blue-500 mr-2"></i>Correo Electrónico
                            </label>
                            <div class="relative">
                                <input 
                                    type="email" 
                                    id="loginEmail" 
                                    name="email"
                                    required
                                    placeholder="ejemplo@correo.com"
                                    class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 input-focus transition duration-200"
                                >
                                <div class="absolute left-3 top-3.5 text-gray-400">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <p class="mt-1 text-sm text-gray-500">Ingresa el correo electrónico asociado a tu cuenta.</p>
                        </div>
                        
                        <!-- Campo Contraseña -->
                        <div>
                            <label for="loginPassword" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-lock text-blue-500 mr-2"></i>Contraseña
                            </label>
                            <div class="relative">
                                <input 
                                    type="password" 
                                    id="loginPassword" 
                                    name="password"
                                    required
                                    placeholder="Tu contraseña"
                                    class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 input-focus transition duration-200"
                                >
                                <div class="absolute left-3 top-3.5 text-gray-400">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <p class="text-sm text-gray-500">Mínimo 8 caracteres.</p>
                                <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        
                        <!-- Opción recordar usuario -->
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                id="rememberMe"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                            >
                            <label for="rememberMe" class="ml-2 text-gray-700">Recordar mi sesión</label>
                        </div>
                        
                        <!-- Botón de envío -->
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold py-3 px-4 rounded-lg btn-primary focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        >
                            <i class="fas fa-sign-in-alt mr-2"></i>Iniciar Sesión
                        </button>
                    </form>
                    
                    <!-- Enlace al formulario de registro -->
                    <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                        <p class="text-gray-600">¿No tienes una cuenta? 
                            <a href="#registro" class="text-blue-600 hover:text-blue-800 font-medium">Regístrate aquí</a>
                        </p>
                    </div>
                    
                    <!-- Métodos alternativos -->
                    <div class="mt-6">
                        <p class="text-center text-gray-600 mb-4">O inicia sesión con</p>
                        <div class="flex justify-center space-x-4">
                            <button class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200 w-1/3">
                                <i class="fab fa-google text-red-500 mr-2"></i> Google
                            </button>
                            <button class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200 w-1/3">
                                <i class="fab fa-facebook text-blue-600 mr-2"></i> Facebook
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Formulario de Registro -->
            <section id="registro" class="form-container flex-1">
                <div class="bg-white rounded-2xl form-card p-6 md:p-8 h-full">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-user-plus text-green-600 text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">Crear Cuenta</h2>
                    </div>
                    
                    <p class="text-gray-600 mb-8">Completa el formulario para registrarte en nuestra plataforma.</p>
                    
                    <form id="registerForm" action= "{{ route('register') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- Campos Nombre y Apellido en fila en pantallas grandes -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Campo Nombre -->
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">
                                    <i class="fas fa-user text-green-500 mr-2"></i>Nombre
                                </label>
                                <div class="relative">
                                    <input 
                                        type="text" 
                                        id="name" 
                                        name="name"
                                        required
                                        placeholder="Tu nombre"
                                        class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 input-focus transition duration-200"
                                    >
                                    <div class="absolute left-3 top-3.5 text-gray-400">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        
                        <!-- Campo Email -->
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-envelope text-green-500 mr-2"></i>Correo Electrónico
                            </label>
                            <div class="relative">
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email"
                                    required
                                    placeholder="ejemplo@correo.com"
                                    class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 input-focus transition duration-200"
                                >
                                <div class="absolute left-3 top-3.5 text-gray-400">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <p class="mt-1 text-sm text-gray-500">Utiliza un correo electrónico válido.</p>
                        </div>
                        
                        <!-- Campos Contraseña y Repetir Contraseña en fila en pantallas grandes -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Campo Contraseña -->
                            <div>
                                <label for="password" class="block text-gray-700 font-medium mb-2">
                                    <i class="fas fa-lock text-green-500 mr-2"></i>Contraseña
                                </label>
                                <div class="relative">
                                    <input 
                                        type="password" 
                                        id="password" 
                                        name="password"
                                        required
                                        placeholder="Crea una contraseña"
                                        class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 input-focus transition duration-200"
                                    >
                                    <div class="absolute left-3 top-3.5 text-gray-400">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <ul class="mt-2 text-xs text-gray-500 space-y-1">
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 mr-1 text-xs"></i>
                                        <span>Mínimo 8 caracteres</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 mr-1 text-xs"></i>
                                        <span>Al menos una letra mayúscula</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- Campo Repetir Contraseña -->
                            <div>
                                <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">
                                    <i class="fas fa-lock text-green-500 mr-2"></i>Repetir Contraseña
                                </label>
                                <div class="relative">
                                    <input 
                                        type="password" 
                                        id="password_confirmation" 
                                        name="password_confirmation"
                                        required
                                        placeholder="Repite tu contraseña"
                                        class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 input-focus transition duration-200"
                                    >
                                    <div class="absolute left-3 top-3.5 text-gray-400">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <p class="mt-2 text-xs text-gray-500">Ambas contraseñas deben coincidir.</p>
                            </div>
                        </div>
                        
                        <!-- Términos y condiciones -->
                        <div class="flex items-start">
                            <input 
                                type="checkbox" 
                                id="acceptTerms"
                                required
                                class="h-4 w-4 mt-1 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                            >
                            <label for="acceptTerms" class="ml-2 text-gray-700">
                                Acepto los 
                                <a href="#" class="text-green-600 hover:text-green-800 font-medium">términos y condiciones</a> 
                                y la 
                                <a href="#" class="text-green-600 hover:text-green-800 font-medium">política de privacidad</a>.
                            </label>
                        </div>
                        
                        <!-- Botón de envío -->
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-green-600 to-teal-600 text-white font-semibold py-3 px-4 rounded-lg btn-primary focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                        >
                            <i class="fas fa-user-plus mr-2"></i>Crear Cuenta
                        </button>
                    </form>
                    
                    <!-- Enlace al formulario de login -->
                    <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                        <p class="text-gray-600">¿Ya tienes una cuenta? 
                            <a href="#login" class="text-green-600 hover:text-green-800 font-medium">Inicia sesión aquí</a>
                        </p>
                    </div>
                    
                    <!-- Información adicional -->
                    <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                        <h3 class="font-medium text-blue-800 mb-1">
                            <i class="fas fa-info-circle mr-2"></i>Ventajas de registrarte
                        </h3>
                        <ul class="text-sm text-blue-700 space-y-1">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                <span>Acceso a todas las funcionalidades</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                <span>Guardamos tus preferencias</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                <span>Mayor seguridad con HTTPS</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
@endsection      