<div class="min-h-screen flex flex-col bg-slate-900">
  <!-- header -->
  <header class="flex flex-col items-center sm:items-top md:items-top lg:items-top xl:items-top md:flex-row justify-between bg-slate-900 py-4 px-6 border-b border-slate-800">
    <div class="flex flex-col items-center sm:items-top md:items-top lg:items-top xl:items-top sm:flex-row md:flex-row lg:flex-row xl:flex-row justify-between space-y-4 space-x-4">
      <div class="flex md:items-center">
        <select class=" bg-slate-800 p-2 text-blue-100 rounded">
          <option>Tailwind</option>
        </select>
      </div>
      <div class="flex space-x-2 pt-2">
        <label class="text-blue-100">Básico
          <input type="radio" name="nivel" checked>
        </label>
        <label class="text-blue-100">Intermedio
          <input type="radio" name="nivel">
        </label>
        <label class="text-blue-100">Avanzado
          <input type="radio" name="nivel">
        </label>
      </div>
    </div>
    <div class="mt-5 md:mt-0 lg:mt-0 xl:mt-0 space-x-4 flex sm:flex-col md:flex-row lg:flex-row xl:flex-row md:items-top lg:items-top xl:items-top">
      <button class="bg-blue-600 hidden sm:block md:block lg:block xl:block text-white px-4 py-2 rounded shadow hover:bg-blue-700">Buscar Tema</button>
      <div class="text-blue-400 py-2">Tailwind.com</div>
      <div class="text-blue-400 py-2">CheatSheet</div>
    </div>
  </header>

  <div class="flex flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row">
    <!-- Sidebar -->
    <aside class="w-60 mt-5 sm:w-64 h-full bg-slate-800 flex-shrink-0 flex flex-col py-4">
      <div class="px-6 text-blue-400 text-2xl font-bold mb-8">TechCode</div>
      <nav class="flex-1">
        <ul class="space-y-2">
          <li><a href="#" class="block px-6 py-2 text-blue-200 hover:bg-blue-950 rounded">Inicio</a></li>
          <li><a href="#" class="block px-6 py-2 text-blue-200 hover:bg-blue-950 rounded">Proyectos</a></li>
          <li><a href="#" class="block px-6 py-2 text-blue-200 hover:bg-blue-950 rounded">Videos</a></li>
          <li><a href="#" class="block px-6 py-2 text-blue-200 hover:bg-blue-950 rounded">Utiles</a></li>
          <li><a href="#" class="block px-6 py-2 text-blue-200 hover:bg-blue-950 rounded">Settings</a></li>
          <li><a href="#" class="block px-6 py-2 text-blue-200 hover:bg-blue-950 rounded">Componentes</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main content (contenedor responsivo principal) -->
    <main class="mt-5 sm:flex-1 flex flex-col sm:flex-col md:flex-col bg-slate-900">
      <!-- Capítulo principal y subcapítulos -->
      <section class="flex flex-col md:flex-row lg:flex-row xl:flex-row flex-1">
        <!-- Contenido principal -->
        <article class="flex-1 p-2 md:p-8 lg:p-8 xl:p-8">
          <h2 class="text-lg md:text-3xl lg:text-3xl xl:text-3xl font-bold text-blue-200 mb-4">Capítulo 5: Clases complementarias para Layouts</h2>
          <p class="text-blue-100 mb-2">Tailwind 4.0 hereda de CSS propiedades avanzadas para dimensionamiento de contenido que son vitales, especialmente en Grid y Flexbox:</p>
          <span class="font-mono text-yellow-400">Las clases: w-min, w-max y w-...</span>
          <!-- Más contenido aquí -->
        </article>
        <!-- Sub capítulos panel lateral derecho -->
        <aside class="w-48 mt-5 p-2 sm:px-4 sm:py-8 bg-slate-800 rounded-lg ml-4 flex-shrink-0
                @sm:w-full @sm:ml-0 @sm:mt-6 @md:px-10 @lg:w-64">
          <h3 class="text-pink-300 text-base font-bold mb-2 @md:text-lg @lg:text-xl">Sub Capítulos</h3>
          <div class="space-y-2 @md:grid @md:grid-cols-2 @md:gap-4 @lg:grid-cols-3 @lg:gap-6">
            <div class="bg-blue-400 px-2 py-1 rounded @md:col-span-2 @lg:col-span-1">hola</div>
            <div class="bg-blue-400 px-2 py-1 rounded">tema 1</div>
            <div class="bg-blue-400 px-2 py-1 rounded">tema 2</div>
          </div>
        </aside>
      </section>
    </main>
  </div>
</div>