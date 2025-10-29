<div class="w-full max-w-full min-w-0 md:box-border lg:box-border">
    <!-- Header del manual -->
    <div class="w-full max-w-full mb-8 p-4 bg-white dark:bg-gray-800 rounded-lg shadow flex flex-col justify-between sm:flex-row md:flex-row gap-4 items-center md:box-border lg:box-border">
        <!-- (Radio buttons + Búsqueda) -->
        <div class="w-3/4">
            <div class="prose dark:prose-invert max-w-none">
                <div class="flex items-center justify-between">
                    <!-- Radio buttons -->
                    <div class="space-x-6 w-3/4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="nivel-php" value="basico" class="nivel-radio form-radio h-5 w-5 text-blue-600" data-slug="php" data-nivel="basico">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Básico</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" name="nivel-php" value="intermedio" class="nivel-radio form-radio h-5 w-5 text-green-600" data-slug="php" data-nivel="intermedio">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Intermedio</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" name="nivel-php" value="avanzado" class="nivel-radio form-radio h-5 w-5 text-purple-600" data-slug="php" data-nivel="avanzado">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Avanzado</span>
                        </label>
                    </div>
                    <!-- Búsqueda -->
                    <div class="busqueda w-1/4">
                        <button id="abrirModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Buscar Tema
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Enlaces sugeridos -->
        <div class="w-1/4">
            <div class="flex justify-end flex-1">
                <a class="font-mono mr-5 text-gray-800 dark:text-blue-300" href="#" target="_blank">Link 1</a>
                <a class="font-mono mr-5 text-gray-800 dark:text-blue-300" href="#" target="_blank">Link 2</a>
            </div>
        </div>
    </div>
    <!-- Contenido del nivel + Busqueda de tema-->
    <section id="nivel-contenido">
        <div class="w-full max-w-full flex md:flex-row lg:flex-row md:box-border lg:box-border">
            <!-- sidebar -->
            <div class="p-3 rounded border border-gray-600 bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300">
                <ul class="flex flex-col space-y-3">
                    <li><a class="my-2 dark:text-gray-700 cursor-pointer" href="#home1">Instalación de Apache</a></li>
                    <li><a class="my-2 dark:text-gray-700 cursor-pointer" href="#home2">Instalación de MySQL</a></li>
                    <li><a class="my-2 dark:text-gray-700 cursor-pointer" href="#home3">Instalación de PHP</a></li>
                    <li><a class="my-2 dark:text-gray-700 cursor-pointer" href="#home4">Crear Hosts Virtuales en Apache (Linux y Windows)</a></li>
                    <li><a class="my-2 dark:text-gray-700 cursor-pointer" href="#home5">Habilitar HTTPS local y uso de subdominios</a></li>
                    <li><a class="my-2 dark:text-gray-700 cursor-pointer" href="#home6">Habilitar HTTPS local con mkcert</a></li>
                    <li><a class="my-2 dark:text-gray-700 cursor-pointer" href="#home7">Uso de Subdominios en Apache (Linux y Windows)</a></li>
                    <li><a class="my-2 dark:text-gray-700 cursor-pointer" href="#home8">Instalación óptima de phpMyAdmin</a></li>
                </ul>
            </div>
            <!-- main -->
            <div class="prose dark:prose-invert w-full max-w-full">
                <div class="w-full max-w-full p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <h1 class="text-3xl text-gray-600 dark:text-blue-400">INSTALACION DE PHP (Linux y Windows)</h1>

                    <!-- 01 Instalación de Apache -->
                    <article class="p-4">
                        <?php include "../app/Views/manual/php/instalacion/01_instalacion_apache.php"; ?>
                    </article>

                    <!-- 02 Instalación de MySQL -->
                    <article class="my-14 p-4">
                        <?php include "../app/Views/manual/php/instalacion/02_instalacion_mysql.php"; ?>
                    </article>

                    <!-- 03 Instalación de PHP -->
                    <article class="my-14 p-4">
                        <?php include "../app/Views/manual/php/instalacion/03_instalacion_php.php"; ?>
                    </article>

                    <!-- 04 Crear Hosts Virtuales en Apache (Linux y Windows) -->
                    <article class="my-14 p-4">
                        <?php include "../app/Views/manual/php/instalacion/04_hosts_virtuales.php"; ?>
                    </article>

                    <!-- 05 Habilitar HTTPS local y uso de subdominios -->
                    <article class="my-14 p-4">
                        <?php include "../app/Views/manual/php/instalacion/05_habilitar_https_local.php"; ?>
                    </article>

                    <!-- 06 Habilitar HTTPS local con mkcert -->
                    <article class="my-14 p-4">
                        <?php include "../app/Views/manual/php/instalacion/06_habilitar_https_mkcert.php"; ?>
                    </article>

                    <!-- 07 Uso de Subdominios en Apache (Linux y Windows) -->
                    <article class="my-14 p-4">
                        <?php include "../app/Views/manual/php/instalacion/07_subdominios_apache.php"; ?>
                    </article>

                    <!-- 08 Instalación óptima de phpMyAdmin -->
                    <article class="my-14 p-4">
                        <?php include "../app/Views/manual/php/instalacion/08_instalacion_phpmyadmin.php"; ?>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de la busqueda del header -->
    <section id="modalContainer" class="hidden fixed inset-0 z-50">
        <div class="flex items-center justify-center ">
            <!-- Overlay (fondo semitransparente) -->
            <div class="absolute inset-0 bg-gray-900 dark:opacity-50"></div>

            <!-- Diálogo del modal -->
            <div class="bg-white rounded-lg shadow-xl p-6 m-4 w-full max-w-full h-screen z-10 relative dark:bg-gray-950">
                <!-- Encabezado del modal -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Escribe una consulta y selecciona el modo de búsqueda.</h2>
                    <!-- Botón de cerrar -->
                    <button id="cerrarModal" class="text-gray-500 hover:text-gray-700">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <!-- Contenido del modal -->
                <!-- Input de búsqueda -->
                <div class="relative flex-1 max-w-md">
                    <input type="text"
                        id="buscador-manual"
                        placeholder="Buscar tema"
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <!-- Botón para alternar modo de búsqueda -->
                <div class="mt-5 flex items-center space-x-2">
                    <div class="inline-flex rounded-md shadow-sm">
                        <button type="button"
                            id="btn-busqueda-local"
                            class="px-4 py-2 text-sm font-medium text-blue-700 bg-blue-100 dark:bg-blue-900/30 dark:text-blue-300 rounded-l-md focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Local
                        </button>
                        <button type="button"
                            id="btn-busqueda-ia"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white dark:bg-gray-800 dark:text-gray-300 rounded-r-md hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            IA
                        </button>
                    </div>
                </div>

                <!-- Contenedor de resultados -->
                <div id="resultados-busqueda" class="mt-6 p-6 bg-gray-50 dark:bg-gray-800 rounded-lg min-h-32">
                    <p class="text-gray-500 dark:text-gray-400">Resultado de la búsqueda</p>
                </div>
            </div>
        </div>
    </section>
</div>