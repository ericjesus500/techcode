<section class="space-y-8">
  <h2 class="text-2xl font-bold text-gray-800 dark:text-white">📚 Nivel Básico - TAILWIND</h2>
  <!-- Capítulo 1: El Poder de Tailwind -->
  <article class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
    <h3 class="text-xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo 1: El Poder de Tailwind</h3>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">En este capítulo conoceremos todo lo que es posible realizar con Tailwind.</p>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Para un aprendizaje óptimo de Tailwind CSS desde cero, los fundamentos más relevantes e importantes se centran en cambiar el enfoque tradicional del CSS y comprender cómo funciona su metodología de "primero utilidades".</p>

    <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">1.1 Pre-requisitos</h4>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-gray-950 dark:text-blue-500">Modelo de caja</span>: Entender cómo funcionan el margin, padding y border.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Flexbox y Grid</span>: Comprender cómo crear y alinear diseños complejos con estas propiedades de CSS.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Conceptos de CSS</span>: Tener una idea clara de selectores, propiedades y especificidad.</p>
          </li>
        </ul>
      </div>
    </div>

    <h4 class="mt-12 text-xl font-mono text-gray-300 dark:text-yellow-400">1.2 El archivo tailwind.config.js</h4>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Personalización</span>: Este archivo es el corazón de la personalización de Tailwind. Aquí se puede extender o reemplazar la configuración predeterminada para colores, espaciados, fuentes y otros tokens de diseño.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Valores arbitrarios</span>: Aprender a usar valores arbitrarios entre corchetes, como bg-[#ff0000], es crucial para aplicar estilos únicos sin tener que modificar la configuración.</p>
          </li>
        </ul>
      </div>
    </div>

    <h4 class="mt-12 text-xl font-mono text-gray-300 dark:text-yellow-400">1.3 Responsive Design</h4>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Enfoque Mobile-First</span>: Tailwind está diseñado para construir diseños responsivos empezando por las pantallas más pequeñas. Los prefijos (sm:, md:, lg:, etc.) permiten aplicar estilos a diferentes puntos de ruptura.</p>
          </li>
        </ul>
      </div>
    </div>

    <h4 class="mt-12 text-xl font-mono text-gray-300 dark:text-yellow-400">1.4 Estados (pseudoclases y variantes)</h4>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Interactividad</span>: Las variantes permiten aplicar estilos en diferentes estados de un elemento. Los más comunes son hover:, focus: y active:, fundamentales para crear componentes interactivos.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Otros estados</span>: Tailwind también incluye variantes para otros estados, como group-hover: y peer-focus:, para aplicar estilos a elementos relacionados.</p>
          </li>
        </ul>
      </div>
    </div>        
        
    <h4 class="mt-12 text-xl font-mono text-gray-300 dark:text-yellow-400">1.5 Directivas de Tailwind</h4>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@apply</span>: Permite extraer clases de utilidad repetitivas y combinarlas en una sola clase personalizada en la hoja de estilos.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@layer</span>: Controla cómo se inyectan las utilidades de Tailwind, previniendo problemas de especificidad y permitiendo organizar el código CSS.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">@theme</span>: Define variables para tokens de diseño que se pueden usar en todo el proyecto.</p>
          </li>
        </ul>
      </div>
    </div>
        
    <h4 class="mt-12 text-xl font-mono text-gray-300 dark:text-yellow-400">1.6 Creación de componentes reutilizables</h4>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base">
              <span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Usando la directiva @apply</span>: Esta es la forma nativa de Tailwind para extraer clases de utilidad repetitivas y combinarlas en una sola clase personalizada. Ideal para crear componentes sencillos directamente en tu CSS.
            </p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base">
              <span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Integración con frameworks</span>: Para proyectos más complejos y modernos, la mejor práctica es crear componentes con frameworks como React, Vue o Angular. Esto te permite encapsular la lógica y el estilo, haciendo que tu interfaz de usuario sea modular y fácil de mantener.                  
            </p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base">
              <span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Aprovechar @layer</span>: Utiliza esta directiva para organizar tus componentes de manera lógica dentro de tu hoja de estilos principal, controlando la especificidad y el orden de inyección de las utilidades.
            </p>
          </li>              
        </ul>
      </div>
    </div>           

    <h4 class="mt-12 text-xl font-mono text-gray-300 dark:text-yellow-400">1.7 Personalización avanzada de la configuración</h4>    
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">El archivo tailwind.config.js es el corazón de la personalización de Tailwind. Aquí puedes llevar tu diseño al siguiente nivel extendiendo y anulando la configuración por defecto para adaptarla a la identidad de tu proyecto</p>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Configuración del tema</span>: Aprende a extender la configuración por defecto para añadir tus propios colores, tipografías, espaciados y puntos de ruptura personalizados. Esto es fundamental para construir un sistema de diseño consistente.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Modificadores de variantes</span>: Crea tus propias variantes para estados o contextos específicos, como un <span class="text-gray-600 dark:text-pink-400">hover:</span> más complejo o variantes para el modo oscuro (dark:), que se adapten a las necesidades de tu interfaz.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Utilidades personalizadas</span>: Define nuevas clases de utilidad para propiedades que no están incluidas por defecto en el framework, o para atajos que uses con frecuencia en tu proyecto.</p>
          </li>
        </ul>
      </div>
    </div>

    <h4 class="mt-12 text-xl font-mono text-gray-300 dark:text-yellow-400">1.8 Animaciones y transiciones</h4>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Aprender a añadir movimiento a tus componentes puede mejorar la experiencia del usuario.</p>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Transiciones</span>: Utiliza las clases de transición de Tailwind para suavizar los cambios de propiedades CSS, como el color o la opacidad, en estados como <span class="text-gray-600 dark:text-pink-400">hover</span> y <span class="text-gray-600 dark:text-pink-400">focus</span>.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Animaciones</span>: Explora las animaciones integradas de Tailwind como <span class="text-gray-600 dark:text-pink-400">animate-spin</span> o <span class="text-gray-600 dark:text-pink-400">animate-bounce</span> para efectos sencillos y aprende a crear animaciones personalizadas en tu archivo de configuración.</p>
          </li>
        </ul>
      </div>
    </div>
       
    <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400">1.9 Recomendaciones</h4>
    <div class="rounded-xl bg-white mt-10 mb-10 p-10 text-sm/7 text-gray-700 dark:bg-gray-950 dark:text-gray-300">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Orden de las clases</span>: Mantén un orden consistente para tus clases de utilidad. Una buena práctica es agruparlas por tipo (layout, flexbox, espaciado, tipografía, etc.) para que tu código sea más legible.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Evitar clases repetitivas</span>: Si ves el mismo grupo de clases en múltiples lugares, es una señal para crear un componente reutilizable, ya sea con <span class="text-gray-600 dark:text-pink-400">@apply</span> o con un framework de componentes.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-500">Optimización para producción</span>: Asegúrate de configurar correctamente la depuración de CSS (purge o content) para eliminar el CSS no utilizado y generar un archivo final muy pequeño para el despliegue en producción.</p>
          </li>
        </ul>
      </div>
    </div>        

    <div class="mt-8 p-6 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
      <h4 class="text-xl font-mono font-bold text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
      <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
          <li><a href="./ejercicios/basicos/tailwind/01" target="_blank">Creación de un botón reutilizable usando @apply.</a></li>
          <li><a href="./ejercicios/basicos/tailwind/02" target="_blank">Componente de tarjeta en un framework (React)</a></li>
          <li><a href="./ejercicios/basicos/tailwind/03" target="_blank">Cómo añadir tipografías personalizadas</a></li>
          <li><a href="./ejercicios/basicos/tailwind/04" target="_blank"></a></li>
          <li><a href="./ejercicios/basicos/tailwind/05" target="_blank"></a></li>
      </ol>
    </div>

    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4"></p>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4"></p>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4"></p>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4"></p>
    <h3 class="text-xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4"></h3>
    <h3 class="text-xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4"></h3>
    <h3 class="text-xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4"></h3>
    <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400"></h4>
    <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400"></h4>
    <h4 class="mt-10 text-xl font-mono text-gray-300 dark:text-yellow-400"></h4>
    <ul class="list-disc ml-5 mt-5">
      <li class="font-serif"><span class="text-gray-700 dark:text-blue-500"></span>: .</li>
      <li class="font-serif"><span class="text-gray-700 dark:text-blue-500"></span>: .</li>
      <li class="font-serif"><span class="text-gray-700 dark:text-blue-500"></span>: .</li>
    </ul>
  </article>
  <!--  -->
  <article class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
    <h3 class="text-xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo 2: </h3>
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4"></p>
    <div class="mt-8 p-6 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
      <h4 class="font-bold text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
      <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
          <li><a href="./ejercicios/basicos/tailwind/01" target="_blank">Crea un script que imprima tu nombre.</a></li>
          <li>Declara 3 variables con diferentes tipos de datos.</li>
      </ol>
    </div>
  </article>

</section>