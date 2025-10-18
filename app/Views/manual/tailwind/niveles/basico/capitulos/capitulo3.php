<!-- Capitulo 03: Clases de Utilidades -->
<hr>
<div class="container mx-auto my-8">
  <div class="flex md:flex-row">
    <article id="cap3" class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Clases de Utilidades</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">En Tailwind 4, las utilidades son clases de bajo nivel que aplican una única propiedad CSS, mientras que los componentes son abstracciones de estilos reutilizables que agrupan múltiples utilidades.</p>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">La principal diferencia radica en su granularidad: las utilidades se aplican directamente en el HTML para un control preciso, mientras que los componentes son clases personalizadas que encapsulan patrones de diseño comunes.</p>

      <!-- Utilidades -->
      <section>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Utilidades</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 my-4">Las utilidades son la base de Tailwind, su enfoque es "utility-first". Son atajos para propiedades CSS comunes que permiten construir interfaces directamente en el marcado HTML. En la versión 4, su uso se ha simplificado y optimizado.</p>

        <p class="pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Características:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Granularidad</span>: Cada clase realiza una acción específica (ej: flex, p-4, text-center).</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Componibilidad</span>: Al ser pequeñas, puedes combinarlas para crear diseños complejos.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Variantes</span>: Admiten prefijos para aplicar estilos en diferentes estados (hover:, focus:) y en puntos de interrupción (md:, lg:).</p>
            </li>
          </ul>
        </div>

        <p class="pathway-extreme-p text-xl underline my-10 text-white">Cómo se usan:</p>
        <div class="mt-10 px-6 bg-red-900 dark:bg-yellow-200 rounded">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Para crear una tarjeta simple, se aplican las utilidades directamente a un elemento HTML:</p>
        </div>
        <div class="mt-10">
          <pre>
            <code class="language-html">
              &lt;div class="bg-white rounded-xl shadow-lg p-6"&gt;
                &lt;h2 class="text-xl font-bold"&gt;Tarjeta de utilidades&lt;/h2&gt;
                &lt;p class="text-gray-600 mt-2"&gt;
                  Este es un ejemplo que usa clases de utilidad para el diseño.
                &lt;/p&gt;
              &lt;/div&gt;
            </code>
          </pre>
        </div>

        <h3 class="font-mono font-medium mt-14 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Diferencias entre clases de utilidades y componentes</h3>

        <div class="overflow-x-aut mt-6">
          <table class="table-auto border-separate font-mono">
            <thead>
              <tr>
                <th>Característica</th>
                <th>Utilidades</th>
                <th>Componentes</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm">
                <td>Nivel</td>
                <td>Bajo nivel, granular</td>
                <td>Alto nivel, abstracto</td>
              </tr>
              <tr class="text-sm">
                <td>Encapsulación</td>
                <td>No encapsulan lógica</td>
                <td>Agrupan múltiples utilidades bajo una clase</td>
              </tr>
              <tr class="text-sm">
                <td>Nombre</td>
                <td>Descriptivo de la propiedad CSS (flex, p-4)</td>
                <td>Semántico (.btn, .card).</td>
              </tr>
              <tr class="text-sm">
                <td>Reusabilidad</td>
                <td>Se combinan para crear bloques.</td>
                <td>Se reutiliza una única clase para un bloque completo.</td>
              </tr>
              <tr class="text-sm">
                <td>Mantenimiento</td>
                <td>Puede generar HTML verboso.</td>
                <td>Simplifica el marcado, ideal para patrones repetitivos.</td>
              </tr>
              <tr class="text-sm">
                <td>Uso ideal</td>
                <td>Para diseño rápido, prototipado y estilos únicos.</td>
                <td>Para elementos que se repiten con el mismo aspecto (botones, tarjetas, etc.).</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Cuándo usar utilidades vs. componentes:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Usa utilidades</span>: cuando los estilos son únicos o no se van a reutilizar en muchos lugares. Es ideal para maquetación y diseño detallado.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Usa componentes</span>: cuando tienes patrones de diseño que se repiten en tu proyecto (ej: botones, tarjetas, modales). Simplifica el código y facilita el mantenimiento a largo plazo.</p>
            </li>
          </ul>
        </div>
      </section>

      <!-- Ejercicios -->
      <section class="mt-8 p-6">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="./ejercicios/basicos/tailwind/4" target="_blank">Uso de clases de utilidad</a></li>
            <li><a href="./ejercicios/basicos/tailwind/5" target="_blank">Práctica creación de un modal</a></li>
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

<!-- templates -->
<div>
  <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4"></p>
  <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4"></p>

  <!-- Subtitulos -->
  <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">:</p>

  <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">H2</h2>
  <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4"></p>

  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>H3</h3>
  <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>

  <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">H4</h4>
  <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>

  <!-- Resaltado -->
  <div class="mt-10 px-6 bg-red-900 dark:bg-yellow-200 rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">lorem</p>
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
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">.</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">.</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">.</p>
      </li>
    </ul>
  </div>

  <!-- pre -->
  <div class="mt-10">
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

  <!-- Listas Boostrap -->
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
      <li class="my-2"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>.</li>
      <li class="my-5"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>.</li>
    </ul>
  </div>
</div>