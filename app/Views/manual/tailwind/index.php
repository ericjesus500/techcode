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
    <div class="w-full max-w-full flex md:flex-row lg:flex-row md:box-border lg:box-border">
        <!-- primer hijo (75%): Contenedor para el contenido del nivel -->
        <div class="w-3/4 md:box-border lg:box-border">
            <div class="prose dark:prose-invert">
                <div id="nivel-contenido" class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <p class="text-gray-500 dark:text-gray-400">Selecciona un nivel para ver su contenido.</p>
                </div>
            </div>
        </div>  
        <!-- segundo hijo (25%): Busqueda de Tema -->
        <div class="w-1/4 h-screen px-3 text-gray-600 md:box-border lg:box-border bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300 flex flex-col">
            <div class="subtitulos mt-3 h-8 dark:bg-pink-100">
                <h2 class="text-xl font-mono text-center">Sub Capitulos</h2>                
            </div>
            <div class="content-subtitulos dark:bg-blue-400 h-auto mt-6 relative">hola</div>
        </div>
    </div>

    <!-- Modal de la busqueda del header -->
    <div id="modalContainer" class="hidden fixed inset-0 flex items-center justify-center z-50">
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
</div>


