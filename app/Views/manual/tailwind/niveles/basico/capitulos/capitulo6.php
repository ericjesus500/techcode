<!-- Capitulo 06: Container Queries (novedad en Tailwind 4) -->
<hr>
<article id="cap6" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Container Queries (novedad en Tailwind 4)</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Las container queries son una característica poderosa que permite aplicar estilos CSS basados en el tamaño del contenedor padre de un elemento, en lugar del tamaño de la ventana gráfica (viewport). Esto es especialmente útil para crear diseños más flexibles y adaptativos.</p>

      <!-- Container Queries (novedad en Tailwind 4) -->
      <article class="mt-5 p-6">
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">¿Cómo usar las Container Queries?</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Las container queries permiten aplicar estilos a un elemento en función del tamaño de su contenedor padre, no del viewport. Se usan marcando un contenedor con la clase @container</p>

        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Variantes @container</span>: Se usan prefijos como @sm:, @md:, etc., para aplicar estilos cuando el ancho del contenedor alcanza un tamaño específico.</p>
            </li>
          </ul>
        </div>

        <p class="pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo de container query:</p>
        <div class="mt-10">
          <pre>
              <code class="language-html">
                &lt;div class="@container border rounded p-4"&gt;
                  &lt;div class="md:hidden"&gt;Solo visible en vista móvil&lt;/div&gt;
                  &lt;div class="hidden @md:block"&gt;Solo visible cuando el contenedor es mediano o más grande&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
        </div>
        <p class="mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Este ejemplo muestra un contenido diferente dependiendo del ancho del div padre, no de la pantalla completa.</p>
      </article>

      <!-- Ejercicios -->
      <article class="mt-5 p-6">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
          </ol>
        </div>
      </article>
    </section>

    <aside id="subtitulos " class="flex-1 h-screen px-3 text-gray-600 md:box-border lg:box-border bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300 flex flex-col">
      <div class="mt-3 h-8 dark:bg-pink-100">
        <h2 class="text-xl font-mono text-center">Sub Capitulos</h2>
      </div>
      <div class="content-subtitulos dark:bg-blue-400 h-auto mt-6 relative">hola</div>
    </aside>
  </div>
</article>