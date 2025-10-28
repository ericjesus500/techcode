<!-- Capítulo 1: El Poder de Tailwind -->
<hr>
<div class="container mx-auto my-8">
  <div class="flex md:flex-row">
    <article id="cap1" class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: El Poder de Tailwind</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">En este capítulo conoceremos todo lo que es posible realizar con Tailwind.</p>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Para un aprendizaje óptimo de Tailwind CSS desde cero, los fundamentos más relevantes e importantes se centran en cambiar el enfoque tradicional del CSS y comprender cómo funciona su metodología de "primero utilidades".</p>

      <section>
        <!-- 1.1 Pre-requisitos -->
        <article>
          <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.1 Pre-requisitos</h2>
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Antes de sumergirnos en Tailwind CSS, es fundamental tener una comprensión sólida de los conceptos básicos de CSS. Aquí hay algunos pre-requisitos clave que debes dominar:</p>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Modelo de caja</span>: Entender cómo funcionan el margin, padding y border.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Flexbox y Grid</span>: Comprender cómo crear y alinear diseños complejos con estas propiedades de CSS.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Conceptos de CSS</span>: Tener una idea clara de selectores, propiedades y especificidad.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- 1.2 El archivo tailwind.config.js -->
        <article>
          <h2 class="mt-12 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.2 El archivo tailwind.config.js</h2>
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">El archivo <span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">tailwind.config.js</span> es el corazón de la personalización de Tailwind. Aquí puedes llevar tu diseño al siguiente nivel extendiendo y anulando la configuración por defecto para adaptarla a la identidad de tu proyecto. A continuación, se detallan los aspectos más importantes que debes conocer sobre este archivo:</p>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Personalización</span>: Este archivo es el corazón de la personalización de Tailwind. Aquí se puede extender o reemplazar la configuración predeterminada para colores, espaciados, fuentes y otros tokens de diseño.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Valores arbitrarios</span>: Aprender a usar valores arbitrarios entre corchetes, como bg-[#ff0000], es crucial para aplicar estilos únicos sin tener que modificar la configuración.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- 1.3 Responsive Design -->
        <article>
          <h2 class="mt-12 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.3 Responsive Design</h2>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Enfoque Mobile-First</span>: Tailwind está diseñado para construir diseños responsivos empezando por las pantallas más pequeñas. Los prefijos (sm:, md:, lg:, etc.) permiten aplicar estilos a diferentes puntos de ruptura.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- 1.4 Estados (pseudoclases y variantes) -->
        <article>
          <h2 class="mt-12 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.4 Estados (pseudoclases y variantes)</h2>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Interactividad</span>: Las variantes permiten aplicar estilos en diferentes estados de un elemento. Los más comunes son hover:, focus: y active:, fundamentales para crear componentes interactivos.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Otros estados</span>: Tailwind también incluye variantes para otros estados, como group-hover: y peer-focus:, para aplicar estilos a elementos relacionados.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- 1.5 Directivas de Tailwind -->
        <article>
          <h2 class="mt-12 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.5 Directivas de Tailwind</h2>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">@apply</span>: Permite extraer clases de utilidad repetitivas y combinarlas en una sola clase personalizada en la hoja de estilos.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">@layer</span>: Controla cómo se inyectan las utilidades de Tailwind, previniendo problemas de especificidad y permitiendo organizar el código CSS.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">@theme</span>: Define variables para tokens de diseño que se pueden usar en todo el proyecto.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- 1.6 Creación de componentes reutilizables -->
        <article>
          <h2 class="mt-12 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.6 Creación de componentes reutilizables</h2>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white">
                  <span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Usando la directiva @apply</span>: Esta es la forma nativa de Tailwind para extraer clases de utilidad repetitivas y combinarlas en una sola clase personalizada. Ideal para crear componentes sencillos directamente en tu CSS.
                </p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white">
                  <span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Integración con frameworks</span>: Para proyectos más complejos y modernos, la mejor práctica es crear componentes con frameworks como React, Vue o Angular. Esto te permite encapsular la lógica y el estilo, haciendo que tu interfaz de usuario sea modular y fácil de mantener.
                </p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white">
                  <span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Aprovechar @layer</span>: Utiliza esta directiva para organizar tus componentes de manera lógica dentro de tu hoja de estilos principal, controlando la especificidad y el orden de inyección de las utilidades.
                </p>
              </li>
            </ul>
          </div>
        </article>

        <!-- 1.7 Personalización avanzada de la configuración -->
        <article>
          <h2 class="mt-12 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.7 Personalización avanzada de la configuración</h2>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Configuración del tema</span>: Aprende a extender la configuración por defecto para añadir tus propios colores, tipografías, espaciados y puntos de ruptura personalizados. Esto es fundamental para construir un sistema de diseño consistente.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Modificadores de variantes</span>: Crea tus propias variantes para estados o contextos específicos, como un <span class="text-gray-600 dark:text-pink-400">hover:</span> más complejo o variantes para el modo oscuro (dark:), que se adapten a las necesidades de tu interfaz.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Utilidades personalizadas</span>: Define nuevas clases de utilidad para propiedades que no están incluidas por defecto en el framework, o para atajos que uses con frecuencia en tu proyecto.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- 1.8 Animaciones y transiciones -->
        <article>
          <h2 class="mt-12 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.8 Animaciones y transiciones</h2>
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Aprender a añadir movimiento a tus componentes puede mejorar la experiencia del usuario.</p>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Transiciones</span>: Utiliza las clases de transición de Tailwind para suavizar los cambios de propiedades CSS, como el color o la opacidad, en estados como <span class="text-gray-600 dark:text-pink-400">hover</span> y <span class="text-gray-600 dark:text-pink-400">focus</span>.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Animaciones</span>: Explora las animaciones integradas de Tailwind como <span class="text-gray-600 dark:text-pink-400">animate-spin</span> o <span class="text-gray-600 dark:text-pink-400">animate-bounce</span> para efectos sencillos y aprende a crear animaciones personalizadas en tu archivo de configuración.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- 1.9 Recomendaciones -->
        <article>
          <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">1.9 Recomendaciones</h2>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Orden de las clases</span>: Mantén un orden consistente para tus clases de utilidad. Una buena práctica es agruparlas por tipo (layout, flexbox, espaciado, tipografía, etc.) para que tu código sea más legible.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Evitar clases repetitivas</span>: Si ves el mismo grupo de clases en múltiples lugares, es una señal para crear un componente reutilizable, ya sea con <span class="text-gray-600 dark:text-pink-400">@apply</span> o con un framework de componentes.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Optimización para producción</span>: Asegúrate de configurar correctamente la depuración de CSS (purge o content) para eliminar el CSS no utilizado y generar un archivo final muy pequeño para el despliegue en producción.</p>
              </li>
            </ul>
          </div>
        </article>
      </section>

      <!-- Ejercicios -->
      <section class="mt-8 p-6">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="/ejercicios/basicos/tailwind/1" target="_blank">Creación de un botón reutilizable usando @apply.</a></li>
            <li><a href="/ejercicios/basicos/tailwind/2" target="_blank">Cómo añadir tipografías personalizadas utilizando el archivo tailwind.config.js</a></li>
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