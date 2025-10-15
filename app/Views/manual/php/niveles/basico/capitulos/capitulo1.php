<!-- Capitulo 01:  -->
<hr>
<div class="flex md:flex-row">
  <article id="cap04" class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
    <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo 1: FUNDAMENTOS DE PHP</h1>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">PHP es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.</p>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">El código es interpretado por un servidor web con un módulo de procesador de PHP, el más común llamado APACHE. Puede ser usado en la mayoría de los servidores web al igual que en casi todos los sistemas operativos y plataformas sin ningún costo.</p>    
    <h2 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Formas de mostrar información en el navegador</h2>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Existen varias formas. Las principales o más usadas son:</p>

    <div class="contenedor-listas">
        <div class="space-y-6">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">print</span>: Imprime o muestra un solo valor. Puede imprimir etiquetas HTML</p>
            </li>
            <li class="ml-10">
              <div class="my-5">
                <pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
                  <code class="language-php">
                    print "Mi primer código";
                    print "&lt;h1&gt;Mi primer código&lt;/h1&gt;";
                  </code>
                </pre>
              </div>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">echo</span>: Puede imprimir o mostrar varios valores. Puede imprimir etiquetas HTML</p>
            </li>
            <li class="ml-10">
              <div class="my-5">
                <pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
                  <code class="language-php">
                    echo "Mi segundo código", "Mi tercer código";
                    echo "&lt;p&gt;Mi segundo código&lt;/p&gt;";
                  </code>
                </pre>
              </div>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">print_r()</span>: .</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">var_dump()</span>: .</p>
            </li>
          </ul>
        </div>
      </div>

    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4"></p>
    <!-- Ejercicios -->
    <div class="mt-8 p-6 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
      <h4 class="font-bold text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
      <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
        <li><a href="./ejercicios/basicos/php/1" target="_blank">Ejercicio 01</a></li>
        <li><a href="./ejercicios/basicos/php/2" target="_blank">Ejercicio 02</a></li>
        <li><a href="./ejercicios/basicos/php/3" target="_blank">Ejercicio 03</a></li>
      </ol>
    </div>
  </article>

  <div id="subtitulos " class="w-1/4 h-screen px-3 text-gray-600 md:box-border lg:box-border bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300 flex flex-col">
    <div class="mt-3 h-8 dark:bg-pink-100">
      <h2 class="text-xl font-mono text-center">Sub Capitulos</h2>
    </div>
    <div class="content-subtitulos dark:bg-blue-400 h-auto mt-6 relative">hola</div>
  </div>
</div>

<!-- templates -->
<div>
  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400"></h4>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4"></p>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4"></p>

  <p class="pathway-extreme-p text-xl underline my-10 text-white">:</p>
  <p class="pathway-extreme-p text-xl underline my-10 text-white">:</p>
  <p class="pathway-extreme-p text-xl underline my-10 text-white">:</p>

  <!-- Listas -->
  <div class="contenedor-listas">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500"></span>:</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500"></span>: .</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500"></span>: .</p>
        </li>
      </ul>
    </div>
  </div>

  <!-- pre -->
  <div class="mt-10 px-6 bg-red-900 dark:bg-yellow-300 rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900"></p>
  </div>
  <div class="mt-10">
    <pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
      <code class="language-javascript">        
      </code>
    </pre>
  </div>
</div>