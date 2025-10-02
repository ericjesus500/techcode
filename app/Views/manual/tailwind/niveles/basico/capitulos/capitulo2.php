<!-- Capitulo 02: Clases de Utilidades y Componentes -->
<hr>
<article id="cap02" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow md:box-border lg:box-border">
  <h3 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo 2: Clases de Utilidades y Componentes</h3>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">En Tailwind 4, las utilidades son clases de bajo nivel que aplican una única propiedad CSS, mientras que los componentes son abstracciones de estilos reutilizables que agrupan múltiples utilidades.</p>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">La principal diferencia radica en su granularidad: las utilidades se aplican directamente en el HTML para un control preciso, mientras que los componentes son clases personalizadas que encapsulan patrones de diseño comunes.</p>
  
  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Utilidades</h4>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Las utilidades son la base de Tailwind, su enfoque "utility-first". Son atajos para propiedades CSS comunes que permiten construir interfaces directamente en el marcado HTML. En la versión 4, su uso se ha simplificado y optimizado.</p>

  <p class="pathway-extreme-p text-xl underline my-10 text-white">Características:</p>
  <div class="rounded-xl bg-white my-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Granularidad</span>: Cada clase realiza una acción específica (ej: flex, p-4, text-center).</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Componibilidad</span>: Al ser pequeñas, puedes combinarlas para crear diseños complejos.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Variantes</span>: Admiten prefijos para aplicar estilos en diferentes estados (hover:, focus:) y en puntos de interrupción (md:, lg:).</p>
        </li>
      </ul>
    </div>
  </div>

  <p class="pathway-extreme-p text-xl underline my-10 text-white">Cómo se usan:</p>  
  <div class="mt-10 px-6 bg-red-900 dark:bg-yellow-300 rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Para crear una tarjeta simple, se aplican las utilidades directamente a un elemento HTML:</p> 
  </div>
  <div class="mt-10">
    <pre class="language-html bg-gray-300 dark:bg-gray-900 p-4 rounded">
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

  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Componentes</h4>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Aunque Tailwind es "utility-first", permite crear componentes personalizados para encapsular patrones de diseño repetitivos. En Tailwind 4, se usan las capas nativas de CSS y la directiva @layer components (o la nueva @utility) para definir estas clases personalizadas.</p>

  <p class="pathway-extreme-p text-xl underline my-10 text-white">Características:</p>
  <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Abstracción</span>: Se crean para encapsular un conjunto de estilos comunes y darle un nombre semántico</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Reutilización</span>: Una vez definidos, se pueden usar en múltiples lugares con una sola clase, manteniendo la coherencia.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Sobrescritura</span>: Puedes sobreescribir estilos específicos de un componente usando utilidades en línea.</p>
        </li>
      </ul>
    </div>
  </div>

  <p class="pathway-extreme-p text-xl underline my-10 text-white">Cómo se usan:</p>
  <div class="mt-10 px-6 bg-red-900 dark:bg-yellow-300 rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-800">1. Definición en CSS</span>: En tu archivo CSS de origen (Por ejemplo src/css/tailwind.css), defines el componente usando la directiva <span class="text-gray-600 dark:text-pink-900">@layer components</span>. En la v4, se puede usar <span class="text-gray-600 dark:text-pink-900">@utility</span> para mayor control, aunque <span class="text-gray-600 dark:text-pink-900">@layer components</span> sigue siendo válido para componentes complejos</p> 
  </div>
  <div class="mt-10">
    <pre class="language-css bg-gray-300 dark:bg-gray-900 p-4 rounded overflow-x-auto">
      <code class="language-css">
        /* tailwind.css */
        @import "tailwindcss";

        @layer components {
          .btn-primary {
            @apply bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700;
          }
        }
      </code>
    </pre>
  </div>

  <div class="mt-10 px-6 bg-red-900 dark:bg-yellow-300 rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-800">2. Aplicación en HTML</span>: Se usa la clase personalizada en el HTML.</p> 
  </div>

  <div class="mt-10">
    <pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
      <code class="language-html">
        &lt;button class="btn-primary"&gt;
          Botón primario
        &lt;/button&gt;
      </code>
    </pre>  
  </div>

  <h4 class="my-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Diferencias y cuándo usar cada uno</h4>

  <div class="overflow-x-auto">
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
  
  <p class="pathway-extreme-p text-xl underline my-10 text-white">Cuándo usar utilidades vs. componentes:</p>
  <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Usa utilidades</span>: cuando los estilos son únicos o no se van a reutilizar en muchos lugares. Es ideal para maquetación y diseño detallado.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Usa componentes</span>: cuando tienes patrones de diseño que se repiten en tu proyecto (ej: botones, tarjetas, modales). Simplifica el código y facilita el mantenimiento a largo plazo.</p>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Ejercicios -->
  <div class="mt-8 p-6 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
    <h4 class="text-xl font-mono font-bold text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
    <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
        <li><a href="./ejercicios/basicos/tailwind/4" target="_blank">Uso de clases de utilidad</a></li>
        <li><a href="./ejercicios/basicos/tailwind/5" target="_blank">Uso de componentes</a></li>
    </ol>
  </div>
</article>
  
