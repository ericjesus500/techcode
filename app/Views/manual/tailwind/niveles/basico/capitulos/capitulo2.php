<!-- Capitulo 2: BreakPoints -->
<hr>
<article id="cap2" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: BreakPoints</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 my-4">En este capítulo, exploraremos los breakpoints en Tailwind CSS versión 4, una herramienta esencial para crear diseños responsivos y adaptativos. Los breakpoints permiten aplicar estilos específicos según el tamaño de la pantalla del dispositivo, asegurando que tu sitio web se vea y funcione bien en una variedad de dispositivos, desde teléfonos móviles hasta monitores de escritorio grandes.</p>

      <!-- BreakPoints de tailwind 4-->
      <article class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">BreakPoints de tailwind 4</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 my-4">Tailwind 4, al igual que sus versiones anteriores, utiliza un enfoque de diseño mobile-first, lo que significa que los estilos que no tienen un prefijo de breakpoint se aplican a todas las pantallas, y los prefijos se usan para sobrescribir esos estilos en pantallas más grandes.</p>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 my-4">La versión 4 incluye como novedad la compatibilidad con Container Queries de forma nativa, permitiendo un diseño responsivo basado en el tamaño del contenedor y no solo en el ancho del viewport.</p>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 my-4">Tailwind 4 ofrece los mismos prefijos de breakpoint que las versiones anteriores, que se corresponden con los siguientes anchos de pantalla:</p>

        <div class="overflow-x-aut mt-6">
          <table class="table-auto border-separate font-mono">
            <thead>
              <tr>
                <th>Breakpoint</th>
                <th>Prefijo</th>
                <th>Ancho mínimo</th>
                <th>Descripción</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm">
                <td>sm</td>
                <td><code>sm:</code></td>
                <td>640px y superior.</td>
                <td>Pequeñas pantallas (teléfonos grandes)</td>
              </tr>
              <tr class="text-sm">
                <td>md</td>
                <td><code>md:</code></td>
                <td>768px y superior</td>
                <td>Pantallas medianas (tabletas)</td>
              </tr>
              <tr class="text-sm">
                <td>lg</td>
                <td><code>lg:</code></td>
                <td>1024px y superior</td>
                <td>Pantallas grandes (laptops)</td>
              </tr>
              <tr class="text-sm">
                <td>xl</td>
                <td><code>xl:</code></td>
                <td>1280px y superior</td>
                <td>Pantallas extra grandes (monitores de escritorio)</td>
              </tr>
              <tr class="text-sm">
                <td>2xl</td>
                <td><code>2xl:</code></td>
                <td>1536px y superior</td>
                <td>Pantallas ultra grandes</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="pathway-extreme-p text-xl underline my-10 text-white">Cómo se usan:</p>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 my-4">Para aplicar una clase a partir de un breakpoint, simplemente se antepone el prefijo al nombre de la clase, seguido de dos puntos (:).</p>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 my-10">Por ejemplo para cambiar el color de fondo de una cuadrícula según el tamaño de la pantalla, puedes usar los prefijos de la siguiente manera:</p>
        <div class="mt-10">
          <pre class="rounded overflow-x-auto">
            <code class="language-html">
              &lt;div class="bg-blue-500 sm:bg-green-500 md:bg-yellow-500 lg:bg-red-500 xl:bg-purple-500 2xl:bg-pink-500 p-4 text-white"&gt;
                Este div cambia de color según el tamaño de la pantalla.
              &lt;/div&gt;
            </code>
          </pre>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 my-10">Para cambiar la cantidad de columnas de una cuadrícula según el tamaño de la pantalla, puedes usar los prefijos de la siguiente manera:</p>
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

        <p class="pathway-extreme-p text-xl underline my-10 text-white">Explicación:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Colores de fondo</span>: En el primer ejemplo, el div cambia su color de fondo según el tamaño de la pantalla, comenzando con azul en pantallas pequeñas y pasando por verde, amarillo, rojo, púrpura y rosa en pantallas más grandes.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Columnas de cuadrícula</span>: La cuadrícula comienza con una sola columna en pantallas pequeñas (grid-cols-1) y aumenta el número de columnas a medida que la pantalla se hace más grande, en pantallas medianas (md) la cuadrícula cambia a tres columnas (md:grid-cols-3) y en pantallas extra grandes (lg) y superiores llega a cuatro columnas (lg:grid-cols-4).</p>
            </li>
          </ul>
        </div>

        <!-- ¿Con qué otras clases se complementan? -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>¿Con qué otras clases se complementan?</h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Los breakpoints se complementan con cualquier clase de utilidad de Tailwind para construir interfaces adaptables. Algunas combinaciones comunes son:</p>

          <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Flexbox</h4>
          <p class="ml-6 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Alineación y dirección</p>

          <div class="contenedor-listas ml-6">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">&lt;div class="flex flex-col md:flex-row items-center"&gt;
                </p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">Este contenedor se muestra como una columna (flex-col) en móviles y como una fila (flex-row) en pantallas medianas y superiores.</p>
              </li>
            </ul>
          </div>

          <!-- Espaciado (Padding y Margin) -->
          <article>
            <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Espaciado (Padding y Margin)</h4>
            <p class="ml-6 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Espaciado responsivo</p>

            <div class="contenedor-listas ml-6">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white">&lt;div class="p-4 sm:p-6 lg:p-8"&gt;</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white">El relleno del contenedor aumenta a medida que la pantalla se hace más grande.</p>
                </li>
              </ul>
            </div>
          </article>

          <!-- Tipografía -->
          <article>
            <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Tipografía</h4>
            <p class="ml-6 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Tamaño del texto</p>

            <div class="contenedor-listas ml-6">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white">&lt;p class="text-sm md:text-base lg:text-xl"&gt;</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white">El tamaño del texto se ajusta según el tamaño de la pantalla.</p>
                </li>
              </ul>
            </div>
          </article>
        </section>
        
        <!-- Personalización de los BreakPoints -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Personalización de los BreakPoints</h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Si los breakpoints por defecto no se ajustan a tus necesidades, puedes personalizarlos en el archivo tailwind.config.js.</p>

          <div class="mt-10 ml-6">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                // tailwind.config.js
                module.exports = {
                  theme: {
                    screens: {
                      'tablet': '640px',
                      'laptop': '1024px',
                      'desktop': '1280px',
                    },
                  },
                }
              </code>
            </pre>
          </div>
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Esto te permite usar prefijos personalizados como tablet:, laptop:, etc.</p>
        </section>
      </article>

      <!-- Ejercicios -->
      <article class="mt-8 p-6">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg p-6">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="./ejercicios/basicos/tailwind/20" target="_blank">Uso básico de breakpoints</a></li>
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