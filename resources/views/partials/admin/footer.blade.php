<!-- Footer -->
            <footer class="bg-gray-800 text-white p-4">
                <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <h3 class="font-bold text-lg">Biblioteca Central</h3>
                        <p class="text-gray-300 text-sm">Sistema de administración de biblioteca</p>
                    </div>
                    <div class="text-center md:text-right">
                        <p class="text-sm text-gray-300">© 2023 Todos los derechos reservados</p>
                        <p class="text-sm text-gray-400">Versión 2.1.0</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- JavaScript para funcionalidad -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM
            const hamburgerBtn = document.getElementById('hamburger-btn');
            const sidebar = document.getElementById('sidebar');
            const menuItems = document.querySelectorAll('.menu-item');
            const headerMenuItems = document.querySelectorAll('.header-menu-item');
            const pageContents = document.querySelectorAll('.page-content');
            const confirmLogout = document.getElementById('confirm-logout');
            const cancelLogout = document.getElementById('cancel-logout');
            
            // Variable para controlar el estado del menú hamburguesa
            let sidebarVisible = false;
            
            // Función para alternar la visibilidad del sidebar en móviles
            function toggleSidebar() {
                if (window.innerWidth < 768) { // Solo para móviles
                    if (sidebarVisible) {
                        sidebar.classList.add('hidden');
                        sidebar.classList.remove('flex');
                        sidebarVisible = false;
                    } else {
                        sidebar.classList.remove('hidden');
                        sidebar.classList.add('flex', 'absolute', 'z-50', 'h-full');
                        sidebarVisible = true;
                    }
                    
                    // Animación del botón hamburguesa
                    const lines = document.querySelectorAll('.hamburger-line');
                    if (sidebarVisible) {
                        lines[0].style.transform = 'rotate(45deg) translate(5px, 6px)';
                        lines[1].style.opacity = '0';
                        lines[2].style.transform = 'rotate(-45deg) translate(5px, -6px)';
                    } else {
                        lines[0].style.transform = 'none';
                        lines[1].style.opacity = '1';
                        lines[2].style.transform = 'none';
                    }
                }
            }
            
            // Función para cambiar de página
            function changePage(pageId) {
                // Ocultar todos los contenidos
                pageContents.forEach(content => {
                    content.classList.add('hidden');
                });
                
                // Mostrar el contenido de la página seleccionada
                const selectedContent = document.getElementById(`${pageId}-content`);
                if (selectedContent) {
                    selectedContent.classList.remove('hidden');
                }
                
                // Actualizar menús activos
                menuItems.forEach(item => {
                    item.classList.remove('active-menu');
                    if (item.getAttribute('data-page') === pageId) {
                        item.classList.add('active-menu');
                    }
                });
                
                headerMenuItems.forEach(item => {
                    item.classList.remove('active-menu');
                    if (item.getAttribute('data-page') === pageId) {
                        item.classList.add('active-menu');
                    }
                });
                
                // Cerrar sidebar en móviles después de seleccionar una opción
                if (window.innerWidth < 768 && sidebarVisible) {
                    toggleSidebar();
                }
            }
            
            // Event Listeners
            hamburgerBtn.addEventListener('click', toggleSidebar);
            
            // Cerrar sidebar al hacer clic fuera de él en móviles
            document.addEventListener('click', function(event) {
                if (window.innerWidth < 768 && sidebarVisible && 
                    !sidebar.contains(event.target) && 
                    !hamburgerBtn.contains(event.target)) {
                    toggleSidebar();
                }
            });
            
            // Agregar event listeners a los elementos del menú lateral
            menuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const pageId = this.getAttribute('data-page');
                    changePage(pageId);
                });
            });
            
            // Agregar event listeners a los elementos del menú superior
            headerMenuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const pageId = this.getAttribute('data-page');
                    changePage(pageId);
                });
            });
            
            // Event listener para el botón de confirmar salida
            confirmLogout.addEventListener('click', function() {
                alert('Sesión cerrada. Redirigiendo a la página de inicio de sesión...');
                // En una aplicación real, aquí se redirigiría al login
                // window.location.href = '/login';
            });
            
            // Event listener para cancelar salida
            cancelLogout.addEventListener('click', function() {
                changePage('inicio');
            });
            
            // Cerrar sidebar cuando la ventana se redimensiona a un tamaño mayor a móvil
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    sidebar.classList.remove('hidden', 'absolute', 'z-50', 'h-full');
                    sidebar.classList.add('flex');
                    sidebarVisible = false;
                    
                    // Restaurar botón hamburguesa
                    const lines = document.querySelectorAll('.hamburger-line');
                    lines[0].style.transform = 'none';
                    lines[1].style.opacity = '1';
                    lines[2].style.transform = 'none';
                } else if (window.innerWidth < 768 && sidebarVisible) {
                    sidebar.classList.add('absolute', 'z-50', 'h-full');
                }
            });
            
            // Inicializar la página de inicio como activa
            changePage('inicio');
        });
    </script>
</body>
</html>