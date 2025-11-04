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
                            <input type="radio" name="nivel-tailwind" value="basico" class="nivel-radio form-radio h-5 w-5 text-blue-600" data-slug="tailwind" data-nivel="basico">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Básico</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" name="nivel-tailwind" value="intermedio" class="nivel-radio form-radio h-5 w-5 text-green-600" data-slug="tailwind" data-nivel="intermedio">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Intermedio</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" name="nivel-tailwind" value="avanzado" class="nivel-radio form-radio h-5 w-5 text-purple-600" data-slug="tailwind" data-nivel="avanzado">
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
                <a class="font-mono mr-5 text-gray-800 dark:text-blue-300" href="https://tailwindcss.com/docs/styling-with-utility-classes" target="_blank">Tailwind.com</a>
                <a class="font-mono mr-5 text-gray-800 dark:text-blue-300" href="https://nerdcave.com/tailwind-cheat-sheet?spm=a2ty_o01.29997173.0.0.43aa5171ba9oAl" target="_blank">CheatSheet</a>
            </div>
        </div>
    </div>
    <!-- Contenido del nivel + Busqueda de tema-->
    <section id="nivel-contenido">
        <div class="w-full max-w-full flex md:flex-row lg:flex-row md:box-border lg:box-border">
            <!-- sidebar -->

            <!-- main -->
            <div class="prose dark:prose-invert w-full max-w-full">
                <div class="w-full max-w-full p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <h1 class="text-3xl text-gray-600 dark:text-blue-400">INSTALACION DE TAILWIND</h1>

                    <!-- Instalación con la herramienta de línea de comandos -->
                    <article class="p-4">
                        <h2 id="home1" class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Instalación con la herramienta de línea de comandos</h2>
                        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Instalar con la herramienta de línea de comandos (CLI) es la forma más rápida de comenzar a usar Tailwind CSS en un proyecto nuevo o existente. Siga los pasos a continuación para instalar Tailwind CSS utilizando la CLI.</p>

                        <!-- Instalar Tailwind CSS -->
                        <section class="my-14">
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Instalar Tailwind CSS</h3>
                            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Instalar tailwindcss y @tailwindcss/cli mediante npm</p>
                            <div class="mt-10 ml-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        <span class="dark:text-pink-600">npm</span> <span class="dark:text-fuchsia-400">install tailwindcss @tailwindcss/cli</span>
                                    </code>
                                </pre>
                            </div>
                        </section>

                        <!-- Importar Tailwind in el CSS -->
                        <section class="my-14">
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Importar Tailwind in el CSS</h3>
                            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
                            <div class="mt-10 ml-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        <span class="dark:text-pink-600">@import</span> <span class="dark:text-fuchsia-400">"tailwindcss"</span>;
                                    </code>
                                </pre>
                            </div>
                        </section>

                        <!-- Inicio del proceso de  compilación de la CLI-->
                        <section class="my-14">
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Inicio del proceso de compilación de la CLI</h3>
                            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejecuta la herramienta CLI para escanear tus archivos fuente en busca de clases y generar tu CSS.</p>
                            <div class="mt-10 ml-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        <span class="dark:text-pink-600">npx</span> <span class="dark:text-fuchsia-400">@tailwindcss/cli -i ./src/input.css -o ./src/output.css --watch</span>
                                    </code>
                                </pre>
                            </div>
                        </section>

                        <!-- Comienza a usar Tailwind en tu HTML -->
                        <section class="my-14">
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Comienza a usar Tailwind en tu HTML</h3>
                            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Agrega tu archivo CSS compilado al &lt;head&gt; y comienza a usar las clases de utilidad de Tailwind para dar estilo a tu contenido.
                            </p>
                            <div class="mt-10 ml-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        &lt;!doctype html&gt;
                                        &lt;html&gt;
                                            &nbsp;&nbsp;&nbsp;&lt;head&gt;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta name="viewport"
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; content="width=device-width, 
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;initial-scale=1.0"&gt;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="dark:text-pink-600">link href="./output.css"</span> rel="stylesheet"&gt;
                                            &nbsp;&nbsp;&nbsp;&lt;/head&gt;
                                            &nbsp;&nbsp;&nbsp;&lt;body&gt;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1 class="text-3xl font-bold underline"&gt;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello world!
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;
                                            &nbsp;&nbsp;&nbsp;&lt;/body&gt;
                                        &lt;/html&gt;
                                    </code>
                                </pre>
                            </div>
                        </section>
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