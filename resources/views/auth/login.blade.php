@extends('layout.auth')

@section('content')

<div class="min-h-screen flex bg-gray-50 w-full">

    <div class="hidden lg:block lg:w-1/2 relative bg-cover bg-center" 
         style="background-image: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?q=80&w=2256&auto=format&fit=crop');">
        
        <div class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center px-12">
            <div class="border-l-4 border-white pl-6">
                <h1 class="text-white text-5xl font-bold mb-4 tracking-tight">Biblioteca Central</h1>
                <p class="text-blue-100 text-xl font-light leading-relaxed">
                    "Un espacio donde el conocimiento cobra vida y las historias nunca terminan."
                </p>
            </div>
            
            <div class="absolute bottom-10 left-12 text-blue-200 text-sm font-medium tracking-widest uppercase opacity-80">
                Sistema de Gestión Integral v2.0
            </div>
        </div>
    </div>
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 sm:p-12 bg-gray-800 overflow-y-auto">
        <div class="w-full max-w-md space-y-8">
            
            <div class="lg:hidden text-center mb-10">
                <h2 class="text-3xl font-bold text-blue-900">Biblioteca Central</h2>
                <p class="text-gray-500 mt-2">Bienvenido al sistema</p>
            </div>

            <div id="login-box" class="transition-all duration-500 ease-in-out">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-white">Iniciar Sesión</h2>
                    <p class="text-gray-400 mt-2">Accede a tu panel de administración.</p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf 
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Correo Electrónico</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-300"></i>
                            </div>
                            <input type="email" name="email" required placeholder="admin@biblioteca.com" 
                                class="text-white w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Contraseña</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-300"></i>
                            </div>
                            <input type="password" name="password" required placeholder="••••••••" 
                                class="text-white w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors">
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center text-gray-400 cursor-pointer">
                            <input type="checkbox" name="remember" class="mr-2 h-4 w-4 text-blue-600 rounded focus:ring-blue-500 border-gray-300"> 
                            Recordarme
                        </label>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Recuperar clave</a>
                    </div>

                    <button type="submit" class="w-full bg-blue-700 hover:bg-blue-600 text-white font-bold py-3.5 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-0.5">
                        Ingresar al Sistema
                    </button>
                </form>

                <div class="mt-8 text-center pt-6 border-t border-gray-100">
                    <p class="text-gray-300">
                        ¿Nuevo usuario? 
                        <button onclick="toggleForms()" class="text-blue-700 font-bold hover:underline ml-1 focus:outline-none">
                            Crear cuenta
                        </button>
                    </p>
                </div>
            </div>

            <div id="register-box" class="hidden transition-all duration-500 ease-in-out">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-white">Crear Cuenta</h2>
                    <p class="text-gray-400 mt-2">Regístrate para gestionar préstamos.</p>
                </div>

                <form action="{{ route('register') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Nombre Completo</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-300"></i>
                            </div>
                            <input type="text" name="name" required placeholder="Tu nombre" 
                                class="text-white w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Correo Electrónico</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-300"></i>
                            </div>
                            <input type="email" name="email" required placeholder="tu@correo.com" 
                                class="text-white w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition-colors">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Contraseña</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-300"></i>
                                </div>
                                <input type="password" name="password" required placeholder="••••••••" 
                                    class="text-white w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition-colors">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Repetir</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-check-double text-gray-300"></i>
                                </div>
                                <input type="password" name="password_confirmation" required placeholder="••••••••" 
                                    class="text-white w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition-colors">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3.5 rounded-lg shadow-md transition duration-300">
                        Registrarme
                    </button>
                </form>

                <div class="mt-8 text-center pt-6 border-t border-gray-100">
                    <p class="text-gray-300">
                        ¿Ya tienes cuenta? 
                        <button onclick="toggleForms()" class="text-blue-700 font-bold hover:underline ml-1 focus:outline-none">
                            Volver al Login
                        </button>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function toggleForms() {
        const loginBox = document.getElementById('login-box');
        const registerBox = document.getElementById('register-box');
        
        if (loginBox.classList.contains('hidden')) {
            registerBox.classList.add('hidden');
            loginBox.classList.remove('hidden');
        } else {
            loginBox.classList.add('hidden');
            registerBox.classList.remove('hidden');
        }
    }
</script>

@endsection