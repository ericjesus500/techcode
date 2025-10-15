<section class="space-y-8 max-w-full min-w-0">
  <div class="flex items-center justify-between">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">📜 Capítulos</h2>
    <button id="toggleCapitulos" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
      <!-- Ícono de menú (visible por defecto) -->
      <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <!-- Ícono de cierre (oculto por defecto) -->
      <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <div id="lista-capitulos" class="mx-auto p-3 rounded border border-gray-600 bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300
      transition-all duration-300 ease-in-out">
    <ul class="capitulos flex flex-col">
      <li><a class="my-2 dark:text-gray-700 cursor-pointer" data-curso="html" data-nivel="basico" data-capitulo="1">Capitulo 1: </a></li>
      <li><a class="my-2 dark:text-gray-700 cursor-pointer" data-curso="html" data-nivel="basico" data-capitulo="2">Capitulo 2: </a></li>
      <li><a class="my-2 dark:text-gray-700 cursor-pointer" data-curso="html" data-nivel="basico" data-capitulo="3">Capitulo 3: </a></li>
      <li><a class="my-2 dark:text-gray-700 cursor-pointer" data-curso="html" data-nivel="basico" data-capitulo="4">Capitulo 4: </a></li>
    </ul>
  </div>

  <div id="content-capitulo" class="box-border"></div>
</section>