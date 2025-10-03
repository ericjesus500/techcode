<!-- Capitulo 03: Directivas: @apply y @layer -->
<hr>
<article id="cap03" class="w-full bg-white dark:bg-gray-800 p-3 rounded-lg shadow">
  <h3 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo 3: Directivas de Tailwind</h3>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Tailwind 4.0 representa un cambio significativo con un motor de alto rendimiento reescrito en Rust y una configuración basada en CSS, dejando atrás las directivas heredadas de la versión 3. Ahora, se integran de forma nativa muchas funcionalidades que antes requerían plugins de PostCSS, simplificando la cadena de herramientas.</p>

  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">A diferencia de versiones anteriores, Tailwind 4 se configura principalmente dentro de un archivo CSS utilizando directivas específicas, en lugar de un archivo <span class="text-gray-600 dark:text-green-400">tailwind.config.js</span></p>

  <div class="contenedor-listas mt-10">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@import tailwind</span>: Se usa para importar Tailwind. Esta directiva reemplaza a las tres directivas de la versión 3 (@tailwind base, @tailwind components y @tailwind utilities), unificando el proceso.</p>
        </li>        
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@layer &lt;nombre-capa&gt;</span>: Permite agrupar tu propio CSS en capas para organizar los estilos y controlar su especificidad, de manera similar a las capas nativas del CSS.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@apply &lt;clases-de-utilidad&gt;</span>: Inyecta una o varias clases de utilidad de Tailwind directamente en tu propio código CSS, útil para mantener un HTML limpio y aplicar estilos consistentes en lugares repetitivos.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@theme</span>: Una directiva nueva en v4.0 que permite configurar los tokens de diseño personalizados del proyecto (colores, tamaños, fuentes, espaciados, puntos de interrupción, etc.) directamente en tu archivo CSS, en lugar de hacerlo solo en tailwind.config.js, usando variables CSS. Esto permite una mayor flexibilidad para proyectos donde necesitas una configuración de diseño más modular y orientada al CSS.</p>
        </li>
        <li class="flex">
          <div class="flex-1">
            <pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
              <code class="language-css">
                @theme {
                  --color-brand: 220 70% 50%; /* Uso de HSL */
                }

                @layer components {
                  .btn-brand {
                    background-color: hsl(var(--color-brand));
                    @apply text-white font-bold py-2 px-4 rounded-full;
                  }
                }
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
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@variant</span>: Aplica una variante de Tailwind a los estilos dentro de tu CSS (por ejemplo, hover:, focus:, lg:).</p>
        </li>
        <li class="flex">
          <div class="flex-1">
            <pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
              <code class="language-css">
                .mi-elemento {
                  background: white;
                  @variant dark {
                    background: black;
                  }
                }
              </code>
            </pre>  
          </div>
        </li>   
      </ul>
    </div>
  </div>

  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Directivas Eliminadas</h4>
  <div class="contenedor-listas">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base">@tailwind base;</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base">@tailwind components;</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base">@tailwind utilities;</p>
        </li>
      </ul>
    </div>
  </div>

  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Directivas adicionales</h4>
  <div class="contenedor-listas">
    <div class="space-y-6">
      <ul class="space-y-3">        
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@source</span>: Especifica explícitamente archivos fuente que no son detectados automáticamente por Tailwind.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@utility</span>: Se usa para crear utilidades personalizadas que funcionan como las nativas, definiendo una única clase para cada utilidad.</p>
        </li>        
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@custom-variant</span>: Permite agregar variantes personalizadas al proyecto.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@config</span>: Permite configurar las opciones del proyecto directamente en un archivo CSS.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@plugin</span>: Para la integración de plugins.</p>
        </li>
      </ul>
    </div>
  </div>

  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Directivas implícitas y funcionalidades integradas</h4>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Tailwind 4 incorpora muchas funcionalidades que antes requerían directivas o plugins de PostCSS adicionales, lo que simplifica la configuración:</p>
  <div class="contenedor-listas">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Manejo de @import</span>: Ahora integrado de forma nativa (no se necesita el plugin postcss-import), es una función estándar de CSS que Tailwind utiliza para importar archivos CSS, incluyendo el propio CSS de Tailwind, lo que ayuda a organizar el código y los componentes en diferentes archivos.
          <br><br>Ejemplo de uso: Supongamos que tienes un archivo para componentes (components.css) y otro para utilidades (utilidades.css)</p>
        </li>
        <li class="flex flex-col">          
          <div class="flex-1 mt-6">
            <pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
              <code class="language-css">        
                /* components.css */
                @layer components {
                  .card {
                    @apply bg-white p-6 rounded-lg shadow-lg;
                  }
                }
              </code>
            </pre>  
          </div>          
        </li>
        <li class="flex">
          <div class="flex-1">
            <pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
              <code class="language-css">
                /* styles.css */        
                @import tailwindcss;                

                @import components.css;
                @import utilidades.css;
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
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Soporte de anidamiento</span>: El anidamiento de CSS funciona sin necesidad de plugins.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Prefijos de proveedores</span>: Se añaden automáticamente sin necesidad de autoprefixer.</p>
        </li>        
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Transpilación de sintaxis</span>: Características modernas de CSS, como los rangos en media queries, se transpilan para mayor compatibilidad.</p>
        </li>
      </ul>
    </div>
  </div>

  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Directivas @apply y @layer</h4>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mt-6 mb-4">En la versión 4 de Tailwind CSS, el uso de las directivas @apply y @layer ha cambiado significativamente debido a la simplificación del proceso de compilación y la introducción de nuevos enfoques para la personalización. Esto se debe básicamente que ahora dependen de las capas de cascada nativas de CSS. Esto implica un enfoque más directo en el estándar de CSS, eliminando la forma en que Tailwind "secuestraba" la directiva @layer en versiones anteriores.</p>

  <p class="pathway-extreme-p text-xl underline my-10 text-white">Directiva @apply en v4: Conceptos teóricos</p>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mt-6 mb-4">En v4, @apply no funciona con clases definidas directamente en <span class="text-dark-600 dark:text-green-400">@layer base</span> y <span class="text-dark-600 dark:text-green-400">@layer components</span> como solía hacerlo. Esto se debe a que Tailwind ahora utiliza la directiva @utility para registrar clases personalizadas como utilidades.</p>  
  
  <p class="pathway-extreme-p text-xl underline my-10 text-white">Principios teóricos clave:</p>
  
  <div class="contenedor-listas">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Registro explícito de utilidades</span>:  En v4, debes usar la directiva @utility para indicar a Tailwind que una clase es una utilidad que puede ser aplicada con @apply. Esto es necesario para que Tailwind reconozca la clase y la procese correctamente, especialmente cuando se usa con variantes (ej., md: o hover:).</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Separación de utilidades y componentes</span>: Para que @apply funcione en un componente, ese componente debe ser definido con @utility. Un componente simple que no necesita variantes (ej., un botón con un estilo fijo) puede seguir usando @layer components, pero no será compatible con @apply para aplicar variantes.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Simplificación y estandarización</span>: El cambio está alineado con la estrategia de Tailwind de acercarse a las características nativas de CSS. Al separar la lógica de las utilidades registrables, el sistema se vuelve más predecible y menos dependiente de la lógica interna de Tailwind.</p>
        </li>
      </ul>
    </div>
  </div>

  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Directiva @layer en v4: Conceptos teóricos
</h4>
  <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">En la versión 4, @layer ya no es una directiva específica de Tailwind que controla el orden de las utilidades. Ahora, se basa completamente en el comportamiento de las capas de cascada nativas de CSS.</p>

  <p class="pathway-extreme-p text-xl underline my-10 text-white">Principios teóricos clave:</p>

  <div class="contenedor-listas">
    <div class="space-y-6">
      <ul class="space-y-3">
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Capas de cascada nativas</span>: A diferencia de versiones anteriores, Tailwind ya no manipula el orden de las capas. El control sobre la especificidad y el orden de los estilos ahora depende de cómo defines las capas de forma nativa en tu CSS. Esto te da más control y una comprensión más clara de cómo interactúan las reglas de estilo.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Organización estándar</span>: Aún puedes usar @layer base, @layer components y @layer utilities para organizar tus estilos. Sin embargo, su comportamiento está definido por el estándar de CSS y no por una lógica especial de Tailwind.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Control de la especificidad por defecto</span>: El orden de las capas es ahora el que dictan las especificaciones de CSS nativas, no el orden de carga de los archivos CSS externos. Un estilo en una capa superior (ej., utilities) sobrescribirá un estilo en una capa inferior (ej., components), siempre y cuando la especificidad sea la misma.</p>
        </li>
        <li class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Cambio en la importación de estilos</span>: En lugar de usar @tailwind base, @tailwind components y @tailwind utilities, en v4 ahora se usa @import "tailwindcss";. Para tener más control, puedes importar las capas individualmente y asignarles un nombre de capa nativo, como se detalla en la documentación de Tailwind CSS.</p>
        </li>
      </ul>
    </div>
  </div>

  <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">Resumen de los cambios en @apply y @layer</h4>
  
  <table class="table-auto border-separate font-mono">      
    <thead>
      <tr>          
        <th scope="col">Característica</th>
        <th scope="col">Versión 3</th>
        <th scope="col">Versión 4</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-sm">
        <td>Directivas</td>
        <td>@tailwind, @apply, @layer</td>
        <td>@import, @apply, @layer, @utility, @theme</td>
      </tr>
      <tr class="text-sm">
        <td>Definición de utilidades</td>
        <td>@layer components o @layer utilities</td>
        <td>@utility (necesario para usar @apply con variantes)</td>
      </tr>
      <tr class="text-sm">
        <td>Dependencia de capas</td>
        <td>Tailwind manipulaba el orden de las capas</td>
        <td>Se basa en las capas de cascada nativas de CSS</td>
      </tr>
      <tr class="text-sm">
        <td>Comportamiento @apply</td>
        <td>Funciona con clases en cualquier capa</td>
        <td>No funciona con clases en @layer base o @layer components si se usan variantes</td>
      </tr>
      <tr class="text-sm">
        <td>Configuración</td>
        <td>tailwind.config.js</td>
        <td>Configuración en CSS con @theme</td>
      </tr>
    </tbody>
  </table>
  
  <div class="mt-8 p-6 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
    <h4 class="font-mono text-2xl text-blue-800 dark:text-pink-600 mb-2">Conclusión</h4>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-green-300 mb-4">Mientras que @apply y @layer son la clave para la creación y organización de componentes, @tailwind y @import son fundamentales para estructurar todo el sistema de estilos. @theme es una adición más reciente que mejora la flexibilidad en la definición de tokens de diseño.</p>
  </div>
  
  <!-- Ejercicios -->
  <div class="mt-8 p-6 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
    <h4 class="font-bold text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
    <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
        <li><a href="./ejercicios/basicos/tailwind/6" target="_blank"></a></li>
        <li><a href="./ejercicios/basicos/tailwind/7" target="_blank"></a></li>
        <li><a href="./ejercicios/basicos/tailwind/8" target="_blank"></a></li>
    </ol>
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
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500"></span>:</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500"></span>: .</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500"></span>: .</p>
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
  
</article>