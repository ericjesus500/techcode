<!-- Capitulo 05: Container Queries (novedad en Tailwind 4) -->
<hr>
<div class="container mx-auto my-8">
  <div class="flex md:flex-row">
    <article id="cap5" class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Container Queries (novedad en Tailwind 4)</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Las container queries son una característica poderosa que permite aplicar estilos CSS basados en el tamaño del contenedor padre de un elemento, en lugar del tamaño de la ventana gráfica (viewport). Esto es especialmente útil para crear diseños más flexibles y adaptativos.</p>

      <!-- Container Queries (novedad en Tailwind 4) -->
      <section>
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
      </section>

      <!-- Ejercicios -->
      <section class="mt-5 p-6">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
          </ol>
        </div>
      </section>
    </article>

    <aside id="subtitulos " class="w-1/4 h-screen px-3 text-gray-600 md:box-border lg:box-border bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300 flex flex-col">
      <div class="mt-3 h-8 dark:bg-pink-100">
        <h2 class="text-xl font-mono text-center">Sub Capitulos</h2>
      </div>
      <div class="content-subtitulos dark:bg-blue-400 h-auto mt-6 relative">hola</div>
    </aside>
  </div>
</div>

<!-- TEMPLATES -->
<div>
  <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4"></p>
  <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4"></p>

  <!-- Subtitulos -->
  <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>

  <section>
    <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">H2</h2>
    <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5"></p>
  </section>

  <article class="my-14">
    <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>H3</h3>
    <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
  </article>

  <section>
    <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">H4</h4>
    <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
  </section>

  <!-- Resaltado para capitulos-->
  <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
  </div>
  <!-- Resaltado para ejercicios-->
  <div class="mt-10 p-4 bg-red-900 dark:bg-[#00fff7] rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-800">Resaltado para ejercicios: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
  </div>
  <!-- Notas-->
  <div class="mt-10 p-4 bg-red-900 dark:bg-red-500 rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-white"><i class="bi bi-exclamation-triangle mr-2"></i>Nota: </p>
    <hr class="border-1 border-gray-200 my-2">
    <p class="font-mono text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero praesentium ea quidem similique labore iure reprehenderit modi quo id quia?</p>
  </div>

  <!-- contenedor Listas Importantes-->
  <div class="contenedor-listas">
    <ul class="space-y-3">
      <li class="flex">
        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
        </svg>
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400"></span>:</p>
      </li>
      <li class="flex">
        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
        </svg>
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400"></span>: .</p>
      </li>
      <li class="flex">
        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
        </svg>
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400"></span>: .</p>
      </li>
    </ul>
  </div>

  <!-- contenedor Listas-->
  <div class="contenedor-listas">
    <ul class="space-y-3">
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400"></span>: .</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400"></span>: .</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400"></span>: .</p>
      </li>
    </ul>
  </div>

  <!-- pre -->
  <div class="mt-10 overflow-x-auto">
    <pre class="rounded overflow-x-auto">
      <code class="language-javascript">
      </code>
    </pre>
  </div>

  <!-- conclusion -->
  <div class="mt-8 p-6 bg-blue-50 dark:bg-yellow-50 rounded-lg">
    <h4 class="font-mono font-bold text-2xl text-blue-800 dark:text-blue-600 mb-2">Conclusión</h4>
    <p class="font-medium text-lg text-gray-600 dark:text-dark-800 mb-4"></p>
  </div>

  <!-- Listas-->
  <div>
    <ul class="my-5">
      <li class="my-2"><i class="bi bi-check-all px-2 dark:text-orange-500 text-lg"></i>.</li>
      <li class="my-5"><i class="bi bi-check-all px-2 dark:text-orange-500 text-lg"></i>.</li>
    </ul>
    <ul class="my-5">
      <li class="my-2"><i class="bi bi-back px-2 dark:text-orange-500 text-lg"></i>.</li>
      <li class="my-5"><i class="bi bi-back px-2 dark:text-orange-500 text-lg"></i>.</li>
    </ul>
    <ul class="my-5">
      <li class="my-2"><i class="bi bi-caret-right-fill px-2 dark:text-orange-500 text-lg"></i>.</li>
      <li class="my-5"><i class="bi bi-caret-right-fill px-2 dark:text-orange-500 text-lg"></i>.</li>
    </ul>
    <ul class="my-5">
      <li class="my-2"><i class="bi bi-shield-fill-check px-2 dark:text-orange-500 text-lg"></i>.</li>
      <li class="my-5"><i class="bi bi-shield-fill-check px-2 dark:text-orange-500 text-lg"></i>.</li>
    </ul>
    <ul class="my-5">
      <li class="my-2"><i class="bi bi-book-half px-2 dark:text-orange-500 text-lg"></i>.</li>
      <li class="my-5"><i class="bi bi-book-half px-2 dark:text-orange-500 text-lg"></i>.</li>
    </ul>
    <ul class="my-5">
      <li class="my-2"><i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>.</li>
      <li class="my-5"><i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>.</li>
    </ul>
  </div>

  <!-- tabla -->
  <div class="overflow-x-aut mt-6">
    <table class="table-auto border-separate font-mono">
      <thead class="text-blue-400">
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-sm font-mono">
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr class="text-sm font-mono">
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr class="text-sm font-mono">
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr class="text-sm font-mono">
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr class="text-sm font-mono">
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr class="text-sm font-mono">
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>