<!-- Header del manual -->
<div class="mb-8 p-4 bg-white dark:bg-gray-800 rounded-lg shadow flex flex-col sm:flex-row gap-4 items-center">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">📘 Manual de JAVASCRIPT</h2>
    
    
</div>

<div class="flex gap-x-4">
  <div class="w-3/4">
    <!-- Contenido del primer hijo (75%) -->
    <div class="prose dark:prose-invert max-w-none">
        <!-- Radio buttons -->
        <div class="flex space-x-6 mb-8">
            <label class="inline-flex items-center">
                <input type="radio" name="nivel-js" value="basico" class="nivel-radio form-radio h-5 w-5 text-blue-600" data-slug="js" data-nivel="basico">
                <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Básico</span>
            </label>

            <label class="inline-flex items-center">
                <input type="radio" name="nivel-js" value="intermedio" class="nivel-radio form-radio h-5 w-5 text-green-600" data-slug="js" data-nivel="intermedio">
                <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Intermedio</span>
            </label>

            <label class="inline-flex items-center">
                <input type="radio" name="nivel-js" value="avanzado" class="nivel-radio form-radio h-5 w-5 text-purple-600" data-slug="js" data-nivel="avanzado">
                <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Avanzado</span>
            </label>
        </div>

        <!-- Contenedor para el contenido del nivel -->
        <div id="nivel-contenido" class="mt-8 p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
            <p class="text-gray-500 dark:text-gray-400">Selecciona un nivel para ver su contenido.</p>
        </div>
    </div>
  </div>
  
  <div class="w-1/4">
    <!-- Contenido del segundo hijo (25%) -->
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
        <p class="text-gray-500 dark:text-gray-400">Escribe una consulta y selecciona el modo de búsqueda.</p>
    </div>
  </div>
</div>

