<div class="container mx-auto mt-4">
  <div class="w-full mb-10 lg:px-6 md:px-6">
    <h1 class="underline font-mono text-lg text-blue-600 dark:text-pink-600">EJERCICIO <?= $id; ?></h1>
    <h2 class="my-6 font-mono text-2xl text-gray-300 dark:text-yellow-400">USO BASICO DE BREAKPOINTS</h2>

    <div class="mt-10 p-4 bg-gray-900 dark:bg-yellow-200 rounded">
      <p class="pathway-extreme-p text-lg text-white dark:text-gray-900">Ejemplo 1: cambiar la cantidad de columnas de una cuadrícula según el tamaño de la pantalla:</p>
    </div>

    <div class="mt-10">
      <pre class="rounded overflow-x-auto">
        <code class="language-html">
          &lt;div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"&gt;
            &lt;div class="bg-gray-200 p-4"&gt;Elemento 1&lt;/div&gt;
            &lt;div class="bg-gray-200 p-4"&gt;Elemento 2&lt;/div&gt;
            &lt;div class="bg-gray-200 p-4"&gt;Elemento 3&lt;/div&gt;
            &lt;div class="bg-gray-200 p-4"&gt;Elemento 4&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </div>

    <div class="container mx-auto bg-teal-300 my-8 p-6 rounded-lg">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="bg-gray-200 p-4">Elemento 1</div>
        <div class="bg-gray-200 p-4">Elemento 2</div>
        <div class="bg-gray-200 p-4">Elemento 3</div>
        <div class="bg-gray-200 p-4">Elemento 4</div>
      </div>
    </div>

    <p class="pathway-extreme-p text-xl underline my-10 text-white">Explicación:</p>

    <!-- contenedor Listas-->
    <div class="contenedor-listas">
      <ul class="space-y-3">
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">En pantallas pequeñas</span>: La cuadrícula tendrá una sola columna (grid-cols-1).</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">En pantallas medianas (md) y superiores</span>: La cuadrícula cambia a dos columnas (md:grid-cols-2).</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">En pantallas grandes (lg) y superiores</span>: La cuadrícula cambia a tres columnas (lg:grid-cols-3).</p>
        </li>
      </ul>
    </div>

    <hr>

    <div class="mt-10 p-4 bg-gray-900 dark:bg-yellow-200 rounded">
      <p class="pathway-extreme-p text-lg text-white dark:text-gray-900">Ejemplo 2: cambiar el color de fondo de una cuadrícula según el tamaño de la pantalla:</p>
    </div>

    <div class="mt-10">
      <pre class="rounded overflow-x-auto">
        <code class="language-html">
          &lt;div class="bg-blue-500 sm:bg-green-500 md:bg-yellow-500 lg:bg-red-500 xl:bg-purple-500 2xl:bg-pink-500 p-4 text-white"&gt;
            &lt;div class="bg-gray-200 p-4"&gt;Este div cambia de color según el tamaño de la pantalla.&lt;/div&gt;            
          &lt;/div&gt;
        </code>
      </pre>
    </div>

    <div class="container mx-auto my-8 p-6 rounded-lg">
      <div class="bg-blue-500 sm:bg-green-500 md:bg-yellow-500 lg:bg-red-500 xl:bg-purple-500 2xl:bg-pink-500 p-4 text-white">
        <div class="bg-gray-200 p-4 text-gray-600">Este div cambia de color según el tamaño de la pantalla.</div>
      </div>
    </div>

    <p class="pathway-extreme-p text-xl my-10 text-white"><span class="underline">Explicación</span>: En pantallas:</p>

    <div class="contenedor-listas">
      <ul class="space-y-3">
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Pequeñas (&lt;640px)</span>: El color de fondo del div será azul (bg-blue-500).</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Small (sm: 640px) y superiores hasta 768px</span>: El color del fondo será verde (sm:bg-green-500).</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Medianas (md: 768px) y superiores hasta 1024px</span>: El color de fondo será amarillo(md:bg-yellow-500).</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Grandes (lg: 1024px) y superiores hasta 1280px</span>: El color de fondo será rojo(bg-red-500).</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Extra grandes (xl: 1280px) y superiores hasta 1536px</span>: El color de fondo será púrpura (bg-purple-500).</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ultra grandes (2xl) y superiores</span>: El color de fondo será rosado (bg-pink-500).</p>
        </li>
      </ul>
    </div>

  </div>
</div>