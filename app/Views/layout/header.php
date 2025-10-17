<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TechCode</title>
    <!-- PRISM -->
    <link rel="stylesheet" href="/css/prism.css" />
    <!-- TAILWIND -->
    <link rel="stylesheet" href="/css/style.css" />
    <script>
    // Evita que el scroll se restaure antes de que el layout esté listo
    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }    
</script>    
</head>
<body class="font-sans antialiased text-gray-800 dark:text-gray-200 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <header class="fixed top-0 left-0 right-0 z-20 bg-gray-800 dark:bg-gray-900 text-white shadow-md">
      <div class="flex">
        <!-- Zona 1: Ancho fijo (igual al sidebar) -->
        <div class="w-64 flex items-center justify-center py-3 bg-gray-900 dark:bg-gray-900">
          <a href="/" class="text-xl font-bold text-blue-400">TechCode</a>
        </div>

        <!-- Zona 2: Ancho dinámico (igual al contenido) -->
        <div class="flex-1 px-4 py-3 flex items-center justify-between">
          <!-- Izquierda: Botón toggle sidebar -->
          <div>
            <button id="toggle-sidebar" 
                    class="p-1 rounded-md text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none transition-colors"
                    title="Ocultar/Mostrar menú">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </button>
          </div>

          <!-- Centro: Select de manuales -->
          <div class="relative w-full max-w-md">
            <select id="tecno-select" class="w-full pl-3 pr-8 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Elige un manual</option>
                <option value="html">HTML</option>
                <option value="estilos">CSS</option>
                <option value="js">JavaScript</option>
                <option value="php">PHP</option>
                <option value="git">Git</option>
                <option value="laravel">Laravel</option>
                <option value="tailwind">Tailwind</option>
            </select>
          </div>

          <!-- Derecha: Botón alternar modo -->
          <div>
            <button id="modo-btn" class="flex items-center space-x-1 text-yellow-400 hover:text-yellow-300 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
              </svg>              
            </button>
          </div>
        </div>
      </div>
    </header>