<div class="max-w-6xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">🖼️ Galería Responsive con HTML + CSS</h1>

  <!-- Vista previa del proyecto -->
  <div class="mb-10 p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg">
    <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Resultado final</h2>
    <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden bg-gray-50 dark:bg-gray-900 p-4">
      <!-- Aquí va el proyecto embebido o un iframe si está en línea -->
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="bg-gray-200 h-32 rounded"></div>
        <div class="bg-gray-200 h-32 rounded"></div>
        <div class="bg-gray-200 h-32 rounded"></div>
        <div class="bg-gray-200 h-32 rounded"></div>
        <div class="bg-gray-200 h-32 rounded"></div>
        <div class="bg-gray-200 h-32 rounded"></div>
      </div>
    </div>
    <div class="mt-4">
      <a href="https://tudominio.com/proyectos/galeria" target="_blank" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
        Ver demo en vivo
      </a>
    </div>
  </div>

  <!-- Código fuente -->
  <div class="mb-10">
    <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Código fuente</h2>

    <h3 class="font-medium text-gray-600 dark:text-gray-300 mb-2">HTML</h3>
    <pre class="overflow-x-auto rounded-lg mb-6"><code class="language-html"><div class=&quot;grid grid-cols-2 md:grid-cols-3 gap-4&quot;>
  <div class=&quot;bg-gray-200 h-32 rounded&quot;></div>
  <div class=&quot;bg-gray-200 h-32 rounded&quot;></div>
  <!-- más items -->
  </div></code></pre>

    <h3 class="font-medium text-gray-600 dark:text-gray-300 mb-2">CSS</h3>
    <pre class="overflow-x-auto rounded-lg"><code class="language-css">.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  gap: 1rem;
}</code></pre>
  </div>

  <div class="flex space-x-4">
    <a href="/project/verProjectPage/html_css" class="text-blue-600 hover:text-blue-800 font-medium">← Volver a proyectos</a>
  </div>
</div>

<!-- Asegúrate de que Prism.js se ejecute -->
<script>
  if (typeof Prism !== 'undefined') {
    Prism.highlightAll();
  }
</script>