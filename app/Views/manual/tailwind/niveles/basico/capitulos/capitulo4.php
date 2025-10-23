<!-- Capitulo 04: Clases de utilidad para Layouts -->
<hr>
<div class="container mx-auto my-8">
  <div class="flex md:flex-row">
    <article id="cap4" class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300">Capítulo <?= $capitulo; ?>: Clases de utilidad para Layouts</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">En este capítulo, exploraremos las clases de utilidad que Tailwind CSS ofrece para crear layouts efectivos y responsivos. Estas clases facilitan la organización y disposición de los elementos en una página web, permitiendo a los desarrolladores construir interfaces de usuario atractivas y funcionales con facilidad.</p>

      <!-- La clase container -->
      <section>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">La clase container</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">La clase <code><span class="text-xl text-gray-600 dark:text-green-300">container</span></code> en Tailwind CSS es una utilidad esencial para crear layouts responsivos y centrados. Esta clase ajusta automáticamente el ancho máximo de un elemento según el tamaño de la pantalla, lo que facilita la creación de diseños que se adaptan a diferentes dispositivos.</p>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">
          La clase container aplica tres propiedades clave:
        </p>

        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">width: 100%:</span>: Por defecto, toma todo el ancho del contenedor padre.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">margin-left: auto; y margin-right: auto;</span>: Centrado automático, aplica márgenes automáticos a los lados para centrar el contenedor horizontalmente.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">max-width (Ancho Máximo)</span>: Esta es la característica principal. El max-width cambia en cada breakpoint (p. ej., sm, md, lg, etc.) para que el contenido no se estire demasiado en pantallas grandes, asegurando legibilidad y un mejor diseño.</p>
            </li>
          </ul>
        </div>

        <!-- Uso de la clase container -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Uso de la clase container</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Para usar la clase container, simplemente agrégala a un elemento HTML, como un div, que envuelva el contenido principal de tu página. Tailwind CSS aplicará estilos predefinidos que incluyen márgenes automáticos a los lados para centrar el contenedor y establecerá anchos máximos específicos para diferentes puntos de interrupción (breakpoints).</p>

          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            Por defecto, la clase container establece anchos máximos predefinidos para varios puntos de interrupción (breakpoints) como sm, md, lg, xl y 2xl. Esto significa que a medida que la pantalla se hace más grande, el contenedor se expande hasta alcanzar su ancho máximo definido para ese breakpoint, manteniendo el contenido centrado y con márgenes adecuados a los lados.
          </p>

          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            Además, la clase container puede combinarse con otras utilidades de Tailwind CSS, como padding (p-x) para agregar espacio interno y margin (m-x) para ajustar el espacio externo alrededor del contenedor. Esto permite una mayor personalización del diseño sin perder la estructura responsiva que ofrece la clase container.
          </p>

          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo práctico:</p>

          <div class="my-10 ml-3">
            <pre>
              <code class="language-html">
                <!-- Contenedor principal para toda la página -->
                &lt;div class="container mx-auto px-4 bg-white shadow-lg my-8 p-6 rounded-lg"&gt;
                  &lt;h1 class="text-3xl font-bold mb-4"&gt;Mi Página Web&lt;/h1&gt;
                  &lt;p class="text-gray-700"&gt;
                    Este es el contenido principal de la página. El contenedor asegura que el ancho
                    del texto no se extienda demasiado en pantallas grandes, mejorando la lectura.
                  &lt;/p&gt;

                  &lt;div class="mt-8 flex flex-wrap gap-4"&gt;
                    &lt;!-- Ejemplo de columnas dentro del contenedor --&gt;
                    &lt;div class="w-full sm:w-1/2 p-4 bg-blue-100 rounded-lg"&gt;
                      &lt;h2 class="text-xl font-semibold"&gt;Columna 1&lt;/h2&gt;
                      &lt;p&gt;Contenido de la primera columna.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="w-full sm:w-1/2 p-4 bg-green-100 rounded-lg"&gt;
                      &lt;h2 class="text-xl font-semibold"&gt;Columna 2&lt;/h2&gt;
                      &lt;p&gt;Contenido de la segunda columna.&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>

          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white mb-4">
            En resumen, la clase container es una herramienta esencial en Tailwind CSS para crear diseños web responsivos y bien estructurados, facilitando la gestión del ancho del contenido y asegurando una experiencia de usuario óptima en diferentes dispositivos.
          </p>
        </article>

        <!-- Comportamiento Predeterminado (Max-Widths) -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Comportamiento Predeterminado (Max-Widths)</h3>

          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            El ancho máximo del contenedor se adapta automáticamente a los breakpoints definidos en la configuración de Tailwind (a menos que se personalice):
          </p>

          <!-- El Comportamiento Responsivo de container -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">El Comportamiento Responsivo de container</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase container aplica sus reglas de ancho máximo (max-width) a todos los breakpoints definidos en la configuración de Tailwind, comenzando desde el más pequeño (sm).</p>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">El comportamiento predeterminado es:</p>

            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">En el viewport más pequeño (por debajo del sm)</span>: El contenedor ocupa el 100% del ancho.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">A partir del breakpoint sm (e.g., 640px) y superiores</span>: El contenedor aplica su respectivo max-width (ej. 640px para sm, 768px para md, etc.) y se centra con margin: auto.</p>
                </li>
              </ul>
            </div>
          </section>

          <!-- ¿Por qué no usar prefijos responsivos? -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">¿Por qué no usar prefijos responsivos?</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase container está diseñada para ser una utilidad de "todo-en-uno" para el diseño de layout principal. No se comporta como otras utilidades que solo se activan en un breakpoint específico.</p>
            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Clase Típica</span>: Si usas text-lg md:text-xl, estás diciendo: "El texto es grande (lg), pero a partir de md es extra grande (xl)".</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Clase container</span>: Al usar simplemente container, estás diciendo: "Este elemento debe ser un contenedor que se adapta a las reglas de max-width en todos los breakpoints".</p>
                </li>
              </ul>
            </div>
          </section>
        </article>

        <!-- Personalización de la clase container en Tailwind 4.0 -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Personalización de la clase container en Tailwind 4.0</h3>
          
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            En Tailwind CSS 4.0, la clase container se puede personalizar fácilmente a través del archivo de configuración tailwind.config.js. Esto permite a los desarrolladores definir anchos máximos específicos para cada breakpoint según las necesidades del proyecto.
          </p>
          
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            Para personalizar la clase container, debes modificar la sección extend dentro del objeto theme en el archivo de configuración. Aquí puedes definir los valores de maxWidth para cada breakpoint que desees personalizar.
          </p>

          <div class="mt-10 ml-3">
            <pre class="overflow-x-auto rounded">
              <code class=" language-js">
                // tailwind.config.js
                export default {
                  theme: {
                    container: {
                      center: true,
                      padding: '2rem',
                      screens: {
                        'sm': '600px',
                        'md': '900px',
                      },
                    },
                    // ... otros temas
                  },
                  plugins: [
                    // Plugins específicos (si se incluyeran)
                  ],
                }
              </code>
            </pre>
          </div>

          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            En este ejemplo, hemos personalizado los anchos máximos para los breakpoints sm y md. Además, hemos habilitado el centrado automático y agregado un padding de 2rem al contenedor.
          </p>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white mb-4">
            Esta personalización permite a los desarrolladores adaptar la clase container a las necesidades específicas de su diseño, asegurando que el contenido se presente de manera óptima en diferentes tamaños de pantalla.
          </p>
        </article>
      </section>

      <!-- La clase flexbox -->
      <section>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">La clase Flexbox</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Flexbox, o Flexible Box Layout, es un modelo de diseño en CSS que permite distribuir espacio entre los elementos de una interfaz y alinear contenido de manera eficiente dentro de un contenedor, incluso cuando su tamaño es desconocido o dinámico. Tailwind CSS proporciona una serie de clases de utilidad que facilitan la implementación de Flexbox en tus proyectos web.</p>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Flexbox es un modelo de diseño unidimensional que permite distribuir espacio entre los elementos de una interfaz y alinear contenido de manera eficiente dentro de un contenedor, incluso cuando su tamaño es desconocido o dinámico.</p>

        <!-- Características principales -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Características principales</h3>

          <div class="contenedor-listas ml-3">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Dirección del eje</span>: Flexbox permite organizar los elementos en una fila (horizontal) o en una columna (vertical) mediante las clases <code><span class="text-xl text-gray-600 dark:text-green-300">flex-row</span></code> y <code><span class="text-xl text-gray-600 dark:text-green-300">flex-col</span></code>.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Alineación y justificación</span>: Flexbox ofrece un control preciso sobre la alineación de los elementos a lo largo del eje principal y el eje transversal mediante clases como <code><span class="text-xl text-gray-600 dark:text-green-300">justify-center</span></code> y <code><span class="text-xl text-gray-600 dark:text-green-300">items-center</span></code>.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Flexibilidad</span>: Los elementos flexibles pueden crecer o encogerse para llenar el espacio disponible, lo que facilita la creación de layouts adaptativos.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- La clase flex y sus complementos -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>La clase flex y sus complementos</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase flex habilita un contenedor flex</p>

          <div class="contenedor-listas ml-3">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">flex-row, flex-row-reverse</span>: Organiza los elementos horizontalmente</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">flex-col, flex-col-reverse</span>: Organiza los elementos verticalmente.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">justify-center, justify-between, justify-around</span>: Controla la alineación horizontal.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">o items-center, items-start, items-end</span>: Controla la alineación vertical.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- Cómo usar la clase flex -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Cómo usar la clase flex</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Para utilizar Flexbox en Tailwind CSS, simplemente agrega la clase <code><span class="text-xl text-gray-600 dark:text-green-300">flex</span></code> a un contenedor padre, y éste pasará a ser un contenedor-flexible. Esto cambia el comportamiento de sus hijos directos (los ítems flexibles), permitiendo control preciso sobre su:</p>

          <div class="contenedor-listas ml-3">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Dirección</span>: Si se apilan en fila (horizontal) o columna (vertical).</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Alineación</span>: Cómo se alinean a lo largo de los ejes principal y transversal.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Espaciado</span>: Cómo se distribuye el espacio libre entre ellos.</p>
              </li>
            </ul>
          </div>

          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            Luego, puedes aplicar las clases complementarias para definir la dirección del eje, la alineación y la justificación de los elementos hijos según tus necesidades de diseño.</p>

          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Por ejemplo, para crear un contenedor flex que organice sus elementos en una fila y los centre tanto horizontal como verticalmente, puedes usar las siguientes clases:</p>
          <div class="mt-10 ml-3">
            <pre>
              <code class="language-html">
                &lt;div class="flex flex-row justify-center items-center h-64 bg-gray-100"&gt;
                  &lt;div class="p-4 bg-blue-500 text-white rounded-lg m-2"&gt;Elemento 1&lt;/div&gt;
                  &lt;div class="p-4 bg-green-500 text-white rounded-lg m-2"&gt;Elemento 2&lt;/div&gt;
                  &lt;div class="p-4 bg-red-500 text-white rounded-lg m-2"&gt;Elemento 3&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </article>

        <!-- Casos de uso -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Casos de uso</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Flexbox es ideal para una variedad de casos de uso en el diseño web, incluyendo:</p>
          <div class="contenedor-listas ml-3">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Navegación</span>: Crear barras de navegación horizontales o verticales con elementos alineados y espaciados uniformemente.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Tarjetas y paneles</span>: Diseñar tarjetas de contenido que se ajusten automáticamente al espacio disponible.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Layouts responsivos</span>: Crear layouts que se adapten a diferentes tamaños de pantalla sin necesidad de media queries complejas.</p>
              </li>
            </ul>
          </div>

          <div class="overflow-x-aut mt-6 ml-3">
            <table class="table-auto border-separate font-mono">
              <thead class="text-blue-400">
                <tr>
                  <th>Caso de Uso</th>
                  <th>Ejemplo de Escenario</th>
                  <th>Clases Típicas de Apoyo</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm font-mono">
                  <td>Barra de Navegación</td>
                  <td>Alinear elementos del menú, el logo y los botones de acción en una sola fila.</td>
                  <td>flex justify-between items-center</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td>Alineación Vertical</td>
                  <td>Centrar un bloque de texto o un icono exactamente en el medio de otro elemento (ej. dentro de un botón o un hero).</td>
                  <td>flex items-center justify-center h-full</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td>Distribución de Tarjetas</td>
                  <td>Crear un footer o una sección de iconos donde los elementos tienen un espaciado uniforme.</td>
                  <td>flex space-x-4 o flex justify-around</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td>Formularios en Línea</td>
                  <td>Colocar un label, un campo de entrada y un botón de "Enviar" uno al lado del otro</td>
                  <td>flex gap-2</td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>

        <!-- Clases que se complementan con flex -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Clases que se complementan con flex</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase flex rara vez se usa sola. Se complementa con otras utilidades que definen la dirección, alineación y comportamiento de crecimiento de los ítems.</p>

          <!-- Dirección y Envoltura -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Dirección y Envoltura</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Estas clases definen si los ítems se disponen en fila o columna y si se ajustan a la siguiente línea (wrap).</p>

            <div class="overflow-x-aut mt-6 ml-3">
              <table class="table-auto border-separate font-mono">
                <thead class="text-blue-400">
                  <tr>
                    <th>Clase</th>
                    <th>Propiedad CSS</th>
                    <th>Función</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm font-mono">
                    <td>flex-row</td>
                    <td>flex-direction: row;</td>
                    <td>(Por defecto) Ítems en fila.</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>flex-col</td>
                    <td>flex-direction: column;</td>
                    <td>Ítems en columna.</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>flex-wrap</td>
                    <td>flex-wrap: wrap;</td>
                    <td>Permite que los ítems salten a la siguiente línea si no caben.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>

          <!-- Alineación y Justificación -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Alineación y Justificación</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Estas clases son cruciales para el posicionamiento a lo largo de los dos ejes:</p>

            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Eje Principal (Justificación)</span>: Controlado por justify-*.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Eje Transversal (Alineación)</span>: Controlado por items-*.</p>
                </li>
              </ul>
            </div>

            <div class="overflow-x-aut mt-6 ml-3">
              <table class="table-auto border-separate font-mono">
                <thead class="text-blue-400">
                  <tr>
                    <th>Clase</th>
                    <th>Propiedad CSS</th>
                    <th>Función</th>
                    <th>Escenario Típico</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm font-mono">
                    <td>justify-center</td>
                    <td>justify-content: center;</td>
                    <td>Centra los ítems a lo largo del eje principal.</td>
                    <td>Centrar el contenido de una barra de herramientas.</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>justify-between</td>
                    <td>justify-content: space-between;</td>
                    <td>Espacio uniforme entre ítems; el primero al inicio, el último al final.</td>
                    <td>Navegación (Logo a la izquierda, Menú a la derecha).</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>items-center</td>
                    <td>align-items: center;</td>
                    <td>Centra los ítems a lo largo del eje transversal.</td>
                    <td>Alineación vertical de texto e iconos.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>

          <!-- Comportamiento de Ítems Individuales -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Comportamiento de Ítems Individuales</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Estas clases permiten controlar cómo los ítems hijos crecen, se encogen o se alinean dentro del contenedor flex.</p>

            <div class="overflow-x-aut mt-6 ml-3">
              <table class="table-auto border-separate font-mono">
                <thead class="text-blue-400">
                  <tr>
                    <th>Clase</th>
                    <th>Propiedad CSS</th>
                    <th>Función</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm font-mono">
                    <td>flex-1</td>
                    <td>flex: 1 1 0%;</td>
                    <td>El ítem crece y se encoge. Útil para tomar el espacio restante.</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>flex-none</td>
                    <td>flex: none;</td>
                    <td>El ítem tiene un tamaño fijo, no crece ni se encoge.</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>grow</td>
                    <td>flex-grow: 1;</td>
                    <td>Permite que el ítem crezca para llenar el espacio disponible. (Reemplaza a flex-grow-* en v4.0).</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>shrink</td>
                    <td>flex-shrink: 1;</td>
                    <td>Permite que el ítem se encoja si es necesario. (Reemplaza a flex-shrink-* en v4.0).</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>self-center</td>
                    <td>align-self: center;</td>
                    <td>Alinea individualmente un ítem al centro del eje transversal.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>

          <!-- Personalización de Ítems Flexibles -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Personalización de Ítems Flexibles</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Además de las clases para el crecimiento y encogimiento (grow, shrink, flex-1), hay otras utilidades esenciales que se aplican a los hijos flex para lograr diseños específicos:</p>

            <!-- Control de Tamaño Individual (flex-*) -->
            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Control de Tamaño Individual (flex-*)</span>: Estas clases controlan cómo el ítem individual utiliza el espacio disponible dentro del contenedor flex.</p>
                </li>
                <li class="flex">
                  <div class="overflow-x-aut mt-6">
                    <table class="table-auto border-separate font-mono">
                      <thead class="text-blue-400">
                        <tr>
                          <th>Clase</th>
                          <th>Propiedades CSS Afectadas</th>
                          <th>Descripción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="text-sm font-mono">
                          <td>flex-auto</td>
                          <td>flex: 1 1 auto;</td>
                          <td>El ítem puede crecer y encogerse, usando su tamaño inicial como base. Es el comportamiento más común para contenido variable.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>flex-initial</td>
                          <td>flex: 0 1 auto;</td>
                          <td>El ítem solo se encoge (si es necesario), pero no crece más allá de su tamaño inicial.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>flex-none</td>
                          <td>flex: none; (flex: 0 0 auto;)</td>
                          <td>El ítem es completamente estático; no crece ni se encoge. Su tamaño es fijo, definido por width o height.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>flex-1</td>
                          <td>flex: 1 1 0%;</td>
                          <td>El ítem puede crecer y se comporta como si su tamaño base fuera 0. Es ideal para dividir el espacio equitativamente (por ejemplo, tres columnas con flex-1 cada una).</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </li>
                <li class="flex">
                  <p class="ml-3 text-base pathway-extreme-p text-white">Ejemplo Práctico: Maquetado de una barra lateral y contenido principal.</p>
                </li>
                <li class="flex">
                  <div class="mt-10 overflow-x-auto">
                    <pre class="rounded overflow-x-auto">
                      <code class="language-html">
                        &lt;div class="flex"&gt;
                          &lt;div class="flex-none w-64 bg-gray-200"&gt;Menú Fijo&lt;/div&gt;

                          &lt;div class="flex-1 p-4 bg-white"&gt;Contenido Principal&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Alineación Individual (self-*) -->
            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Alineación Individual (self-*)</span>: Mientras que las clases items-* alinean a todos los hijos flex a lo largo del eje transversal, las clases self-* permiten anular esa alineación para un ítem específico.</p>
                </li>
                <li class="flex">
                  <div class="overflow-x-aut mt-6">
                    <table class="table-auto border-separate font-mono">
                      <thead class="text-blue-400">
                        <tr>
                          <th>Clase</th>
                          <th>Propiedad CSS</th>
                          <th>Función</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="text-sm font-mono">
                          <td>self-auto</td>
                          <td>align-self: auto;</td>
                          <td>Comportamiento por defecto.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>self-start</td>
                          <td>align-self: flex-start;</td>
                          <td>Alinea el ítem al inicio del eje transversal.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>self-end</td>
                          <td>align-self: flex-end;</td>
                          <td>Alinea el ítem al final del eje transversal.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>self-center</td>
                          <td>align-self: center;</td>
                          <td>Centra el ítem en el eje transversal.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>self-stretch</td>
                          <td>align-self: stretch;</td>
                          <td>Estira el ítem para llenar el contenedor (si no tiene un tamaño explícito).</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </li>
                <li class="flex">
                  <p class="ml-3 text-base pathway-extreme-p text-white">Ejemplo Práctico: Tres elementos alineados al centro, con uno específicamente alineado en la parte inferior.</p>
                </li>
                <li class="flex">
                  <div class="mt-10 overflow-x-auto">
                    <pre class="rounded overflow-x-auto">
                      <code class="language-html">
                        &lt;div class="flex items-center h-32 bg-yellow-100"&gt;
                          &lt;div class="p-2 border"&gt;Ítem 1 (Centro)&lt;/div&gt;
                          &lt;div class="p-2 border self-end"&gt;Ítem 2 (Abajo)&lt;/div&gt; &lt;div class="p-2 border"&gt;Ítem 3 (Centro)&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Ordenamiento Individual (order-*) -->
            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ordenamiento Individual (order-*)</span>: Las clases order-* permiten cambiar el orden visual de los ítems sin alterar el orden en el HTML, lo cual es útil para la responsividad o la accesibilidad.</p>
                </li>
                <li class="flex">
                  <div class="overflow-x-aut mt-6">
                    <table class="table-auto border-separate font-mono">
                      <thead class="text-blue-400">
                        <tr>
                          <th>Clase</th>
                          <th>Propiedad CSS</th>
                          <th>Función</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="text-sm font-mono">
                          <td>order-first</td>
                          <td>order: -9999;</td>
                          <td>Coloca el ítem al inicio de la lista.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>order-last</td>
                          <td>order: 9999;</td>
                          <td>Coloca el ítem al final de la lista.</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>order-1 a order-12</td>
                          <td>order: 1; a order: 12;</td>
                          <td>Asigna un orden específico (por defecto es order: 0).</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </li>
                <li class="flex">
                  <p class="ml-3 mt-10 text-base pathway-extreme-p text-white">Ejemplo Práctico: Cambiar la posición de un botón de menú en móviles.</p>
                </li>
                <li class="flex">
                  <div class="mt-10 overflow-x-auto">
                    <pre class="rounded overflow-x-auto">
                      <code class="language-html">
                        &lt;div class="flex justify-between items-center"&gt;
                          &lt;div class="order-2 sm:order-1"&gt;Logo&lt;/div&gt;
                            &lt;div class="order-3 sm:order-2 flex-1"&gt;Menú&lt;/div&gt;
                            &lt;div class="order-1 sm:order-3"&gt;Buscador&lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </article>

        <!-- La clase gap -->
        <article>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>La clase gap</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase gap es una utilidad crucial, no solo para Flexbox sino también para Grid, que simplifica enormemente el manejo del espaciado entre los ítems.</p>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase gap es una utilidad poderosa que se utiliza junto con flex para definir el espacio entre los ítems flexibles sin necesidad de aplicar márgenes individuales a cada elemento. Esto simplifica el código y asegura un espaciado consistente.</p>

          <!-- ¿Qué es y Cómo Funciona gap? -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">¿Qué es y Cómo Funciona gap?</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase gap establece un espacio uniforme entre las filas y/o columnas de los ítems flexibles dentro de un contenedor flex, sin tener que aplicar márgenes (como mr-4 o space-x-4) a los ítems individuales.</p>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase gap aplica la propiedad CSS nativa gap (o sus equivalentes específicos row-gap y column-gap) al contenedor flex (el padre).</p>
          </section>

          <!-- Cómo Utilizarla -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Cómo Utilizarla</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Se puede definir un espaciado general, o un espaciado separado para filas y columnas.</p>

            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Espaciado General (Fila y Columna)</span>: Se usa gap-* para aplicar el mismo espaciado tanto horizontal como vertical.</p>
                </li>
                <li>
                  <div class="mt-10 overflow-x-auto">
                    <pre class="rounded overflow-x-auto">
                      <code class="language-html">
                        &lt;div class="flex gap-4"&gt;
                          &lt;button&gt;Botón A&lt;/button&gt;
                          &lt;button&gt;Botón B&lt;/button&gt;
                          &lt;button&gt;Botón C&lt;/button&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>

            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Espaciado Específico</span>: Se usan gap-x-* (eje X, horizontal) y gap-y-* (eje Y, vertical).</p>
                </li>
                <li>
                  <div class="overflow-x-aut mt-6">
                    <table class="table-auto border-separate font-mono">
                      <thead class="text-blue-400">
                        <tr>
                          <th>Clase</th>
                          <th>Propiedad CSS</th>
                          <th>Función</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="text-sm font-mono">
                          <td>gap-x-8</td>
                          <td>column-gap: 2rem;</td>
                          <td>Espacio entre columnas (ítems en fila).</td>
                        </tr>
                        <tr class="text-sm font-mono">
                          <td>gap-y-4</td>
                          <td>row-gap: 1rem;</td>
                          <td>Espacio entre filas (si los ítems se envuelven con flex-wrap).</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </li>
                <li>
                  <div class="mt-10 overflow-x-auto">
                    <pre class="rounded overflow-x-auto">
                      <code class="language-html">
                        &lt;div class="flex gap-4"&gt;
                          &lt;button&gt;Botón A&lt;/button&gt;
                          &lt;button&gt;Botón B&lt;/button&gt;
                          &lt;button&gt;Botón C&lt;/button&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>

            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">El uso de gap es la práctica moderna recomendada en Flexbox y Grid, ya que es más limpio y evita problemas con márgenes extra en los bordes del contenedor.</p>
          </section>
        </article>

        <!-- Combinación de flex con la clase container -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Combinación de flex con la clase container</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase container se puede combinar eficazmente con flex para crear layouts responsivos y centrados. Al aplicar container a un contenedor padre y flex a un contenedor hijo, puedes aprovechar las ventajas de ambos sistemas de diseño.</p>

          <div class="mt-10 ml-3">
            <pre>
                <code class="language-html">
                  &lt;div class="container mx-auto p-4 bg-gray-100"&gt;
                    &lt;div class="flex flex-row justify-between items-center"&gt;
                      &lt;div class="p-4 bg-blue-500 text-white rounded-lg m-2"&gt;Elemento 1&lt;/div&gt;
                      &lt;div class="p-4 bg-green-500 text-white rounded-lg m-2"&gt;Elemento 2&lt;/div&gt;
                      &lt;div class="p-4 bg-red-500 text-white rounded-lg m-2"&gt;Elemento 3&lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
          </div>

          <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">En este ejemplo, el contenedor principal utiliza la clase container para centrar y limitar el ancho del contenido, mientras que el contenedor hijo usa flex para organizar sus elementos en una fila con espacio entre ellos y alineación centrada.</p>

          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La combinación sigue un patrón de diseño muy común:</p>
          
          <div class="contenedor-listas ml-3">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Paso 1: Contenedor Principal</span>: Aplica la clase container para centrar y limitar el ancho del contenido. Se usa como el envoltorio más externo para establecer un ancho máximo y centrar todo el contenido de la sección</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Paso 2: Contenedor Flex</span>: se aplica la clasew flex a un elemento hijo directo del contenedor o a un descendiente, para controlar el layout interno de esa sección.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Paso 3: Alineación y Espaciado</span>: Utiliza las clases de justificación y alineación para posicionar los elementos según el diseño deseado.</p>
              </li>
            </ul>
          </div>

          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo 2:</p>
          
          <div class="mt-10 ml-3">
            <pre class="rounded overflow-x-auto">
                <code class="language-html">
                  &lt;div class="flex justify-between items-center bg-white border p-3 rounded-lg"&gt;                      
                      &lt;div class="font-bold text-xl"&gt;Mi Logo&lt;/div&gt; 
                      
                      &lt;nav class="flex space-x-4"&gt; 
                        &lt;a href="#"&gt;Inicio&lt;/a&gt;
                        &lt;a href="#"&gt;Productos&lt;/a&gt;
                        &lt;a href="#"&gt;Contacto&lt;/a&gt;
                      &lt;/nav&gt;
                      
                    &lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
          </div>

          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Explicación:</p>
          
          <div class="contenedor-listas ml-3">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">El primer div usa container para asegurar que la barra de navegación no se extienda por toda la pantalla en monitores muy anchos.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">El div interno usa flex justify-between items-center para alinear el logo a la izquierda y el menú a la derecha, mientras los centra verticalmente.</p>
              </li>
            </ul>
          </div>
        </article>
      </section>

      <!-- La clase grid -->
      <section>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">La clase Grid</h2>
        <p class="mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">CSS Grid es un sistema de diseño bidimensional (cuadrícula) que permite crear layouts complejos dividiendo el espacio en filas y columnas. A diferencia de Flexbox, que es unidimensional, Grid facilita la organización tanto horizontal como vertical de los elementos.</p>
        <p class="mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">La clase grid es la utilidad inicial que transforma un elemento HTML en un contenedor de rejilla (Grid Container), lo que permite aplicar todas las demás utilidades de Grid a sus hijos.</p>

        <!-- Características principales -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Características principales</h3>
          <div class="contenedor-listas ml-3">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Definición de filas y columnas</span>: Grid permite definir explícitamente el número de filas y columnas, así como sus tamaños, mediante clases como <code><span class="text-xl text-gray-600 dark:text-green-300">grid-cols-3</span></code> y <code><span class="text-xl text-gray-600 dark:text-green-300">grid-rows-2</span></code>.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Control del espacio entre elementos</span>: Grid facilita la gestión del espacio entre filas y columnas con clases como <code><span class="text-xl text-gray-600 dark:text-green-300">gap-4</span></code>.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Posicionamiento preciso</span>: Los elementos pueden ubicarse en áreas específicas de la cuadrícula utilizando clases como <code><span class="text-xl text-gray-600 dark:text-green-300">col-span-2</span></code> y <code><span class="text-xl text-gray-600 dark:text-green-300">row-start-1</span></code>.</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- Diferencia Clave: Grid vs. Flexbox -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Diferencia Clave: Grid vs. Flexbox</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La diferencia fundamental entre Grid y Flexbox radica en su enfoque de diseño. Flexbox es unidimensional, ideal para alinear elementos en una sola dirección (fila o columna), mientras que Grid es bidimensional, permitiendo un control completo sobre filas y columnas simultáneamente.</p>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Esta capacidad bidimensional hace que Grid sea especialmente adecuado para layouts complejos donde se requiere un control preciso tanto horizontal como vertical, como en diseños de páginas completas o componentes con múltiples áreas de contenido.</p>

          <div class="overflow-x-aut mt-6 ml-3">
            <table class="table-auto border-separate font-mono">
              <thead class="text-blue-400">
                <tr>
                  <th>Característica</th>
                  <th>Grid Layout (Clase grid)</th>
                  <th>Flexbox (Clase flex)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm font-mono">
                  <td>Dimensiones</td>
                  <td>Bidimensional: Controla el diseño en filas y columnas a la vez.</td>
                  <td>Unidimensional: Controla el diseño solo en filas o columnas (un eje a la vez).</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td>Uso Ideal</td>
                  <td>Estructura principal de la página (e.g., header, sidebar, footer), galerías o componentes complejos.</td>
                  <td>Alineación de contenido dentro de un componente (e.g., barra de navegación, formulario).</td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>

        <!-- Definición de la Estructura de la Rejilla -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Definición de la Estructura de la Rejilla</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Una vez que se aplica grid, el siguiente paso es definir el número de filas y columnas que tendrá la grilla.</p>

          <!-- Definición de Columnas -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Definición de Columnas</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Para definir el número de columnas en la rejilla, se utilizan las clases grid-cols-{n}, donde {n} es el número de columnas deseadas y el ancho de cada una utilizando la unidad fraccional (fr).</p>

            <div class="overflow-x-aut mt-6 ml-3">
              <table class="table-auto border-separate font-mono">
                <thead class="text-blue-400">
                  <tr>
                    <th>Clase</th>
                    <th>Propiedad CSS</th>
                    <th>Función</th>
                    <th>Ejemplo de grid-template-columns</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm font-mono">
                    <td>grid-cols-3</td>
                    <td>grid-template-columns: repeat(3, minmax(0, 1fr));</td>
                    <td>Crea 3 columnas de igual ancho.</td>
                    <td>1fr 1fr 1fr</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>grid-cols-none</td>
                    <td>grid-template-columns: none;</td>
                    <td>Deshabilita la grilla (útil para responsividad).</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ejemplo de Uso</span>: Para crear una rejilla con tres columnas iguales, se usaría la clase grid-cols-3.</p>
                </li>
                <li class="flex">
                  <div class="mt-10 overflow-x-auto">
                    <pre class="rounded overflow-x-auto">
                      <code class="language-html">
                        &lt;div class="grid grid-cols-3 gap-4"&gt;
                          &lt;div class="bg-blue-500 text-white p-4"&gt;Elemento 1&lt;/div&gt;
                          &lt;div class="bg-green-500 text-white p-4"&gt;Elemento 2&lt;/div&gt;
                          &lt;div class="bg-red-500 text-white p-4"&gt;Elemento 3&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>
          </section>

          <!-- Definición de Filas -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Definición de Filas</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Similar a las columnas, las filas se definen usando las clases grid-rows-{n}, donde {n} es el número de filas deseadas. Si no se definen, las filas se crean implícitamente según el número de ítems.</p>

            <div class="overflow-x-aut mt-6 ml-3">
              <table class="table-auto border-separate font-mono">
                <thead class="text-blue-400">
                  <tr>
                    <th>Clase</th>
                    <th>Propiedad CSS</th>
                    <th>Función</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm font-mono">
                    <td>grid-rows-2</td>
                    <td>grid-template-rows: repeat(2, minmax(0, 1fr));</td>
                    <td>Crea 2 filas de igual altura.</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>grid-rows-none</td>
                    <td>grid-template-rows: none;</td>
                    <td>Deshabilita la definición de filas.</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ejemplo de Uso</span>: Para crear una rejilla con dos filas iguales, se usaría la clase grid-rows-2.</p>
                </li>
                <li class="flex">
                  <div class="mt-10 overflow-x-auto">
                    <pre class="rounded overflow-x-auto">
                      <code class="language-html">
                        &lt;div class="grid grid-rows-2 gap-4"&gt;
                          &lt;div class="bg-blue-500 text-white p-4"&gt;Elemento 1&lt;/div&gt;
                          &lt;div class="bg-green-500 text-white p-4"&gt;Elemento 2&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>
          </section>

          <!-- Ejemplo -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Ejemplo</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Aquí hay un ejemplo completo que combina la definición de filas y columnas en una rejilla:</p>

            <div class="mt-10 ml-3">
              <pre class="rounded overflow-x-auto">
                <code class="language-html">
                  &lt;div class="grid grid-cols-3 grid-rows-2 gap-4"&gt;
                    &lt;div class="bg-blue-500 text-white p-4"&gt;Elemento 1&lt;/div&gt;
                    &lt;div class="bg-green-500 text-white p-4"&gt;Elemento 2&lt;/div&gt;
                    &lt;div class="bg-red-500 text-white p-4"&gt;Elemento 3&lt;/div&gt;
                    &lt;div class="bg-yellow-500 text-white p-4"&gt;Elemento 4&lt;/div&gt;
                    &lt;div class="bg-purple-500 text-white p-4"&gt;Elemento 5&lt;/div&gt;
                    &lt;div class="bg-pink-500 text-white p-4"&gt;Elemento 6&lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>

            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">En este ejemplo, se crea una rejilla con 3 columnas y 2 filas, y se aplica un espacio uniforme entre los elementos usando gap-4.</p>
          </section>
        </article>

        <!-- Dimensiones y Posicionamiento de Ítems (col-span y row-span) -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Dimensiones y Posicionamiento de Ítems (col-span y row-span)</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white mb-4">Dentro de una rejilla, los ítems pueden ocupar múltiples columnas o filas utilizando las clases col-span-{n} y row-span-{n}, donde {n} es el número de columnas o filas que el ítem debe abarcar y dónde deben comenzar o terminar.</p>

          <div class="overflow-x-aut mt-6 ml-3">
            <table class="table-auto border-separate font-mono">
              <thead class="text-blue-400">
                <tr>
                  <th>Clase</th>
                  <th>Propiedad CSS</th>
                  <th>Función</th>
                  <th>Uso Común</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm font-mono">
                  <td>col-span-2</td>
                  <td>grid-column: span 2 / span 2;</td>
                  <td>Hace que el ítem abarque 2 columnas.</td>
                  <td>Crear una columna más ancha en el diseño.</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td>row-span-3</td>
                  <td>grid-row: span 3 / span 3;</td>
                  <td>Hace que el ítem abarque 3 filas.</td>
                  <td>Elementos que se extienden verticalmente (tarjetas, imágenes).</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td>col-span-full</td>
                  <td>grid-column: 1 / -1;</td>
                  <td>El ítem ocupa el ancho completo de la grilla.</td>
                  <td>Un header o footer que se extiende por todas las columnas.</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Posición de Línea (col-start, col-end) -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Posición de Línea (col-start, col-end)</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Además de definir el tamaño de los ítems, también se puede controlar su posición exacta en la rejilla utilizando las clases col-start-{n} y col-end-{n} para columnas, y row-start-{n} y row-end-{n} para filas. Aquí, {n} representa la línea de inicio o fin en la rejilla.</p>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Estas clases fuerzan al ítem a comenzar o terminar en una línea de la grilla específica (las líneas se numeran desde 1) permitiendo ubicar un ítem en una posición específica dentro de la rejilla, proporcionando un control preciso sobre el diseño.</p>
            <div class="overflow-x-aut mt-6 ml-3">
              <table class="table-auto border-separate font-mono">
                <thead class="text-blue-400">
                  <tr>
                    <th>Clase</th>
                    <th>Propiedad CSS</th>
                    <th>Función</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm font-mono">
                    <td>col-start-2</td>
                    <td>grid-column-start: 2;</td>
                    <td>El ítem comienza en la segunda línea vertical de la grilla.</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td>col-end-4</td>
                    <td>grid-column-end: 4;</td>
                    <td>El ítem termina antes de la cuarta línea vertical de la grilla.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>

          <!-- Ejemplo Práctico (Span) -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Ejemplo Práctico (Span)</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Diseño con una columna lateral y un contenido principal que abarca dos columnas::</p>
            <div class="mt-10 overflow-x-auto ml-3">
              <pre class="rounded overflow-x-auto">
                <code class="language-html">
                  &lt;div class="grid grid-cols-3 gap-6"&gt;
                    &lt;div class="bg-gray-100 p-4"&gt;Barra Lateral&lt;/div&gt;

                    &lt;div class="col-span-2 bg-white p-4 shadow-lg"&gt;Contenido Principal&lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>

          </section>
        </article>

        <!-- Espaciado -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Espaciado</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white mb-4">Al igual que en Flexbox, la clase gap es la forma estándar de añadir espacio entre los ítems de la grilla.</p>
          <div class="contenedor-listas ml-3">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">gap-4</span>: Aplica un espacio de 1rem (16px) entre filas y columnas.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">gap-x-8</span>: Solo espacio horizontal (entre columnas).</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">gap-y-2</span>: Solo espacio vertical (entre filas).</p>
              </li>
            </ul>
          </div>
        </article>

        <!-- Flujo Implícito (grid-flow-*)-->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Flujo Implícito (grid-flow-*)</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white mb-4">Esta clase controla cómo se colocan automáticamente los ítems que no tienen una posición explícita (col-start/row-start).</p>
          <div class="overflow-x-aut mt-6 ml-3">
            <table class="table-auto border-separate font-mono">
              <thead class="text-blue-400">
                <tr>
                  <th>Clase</th>
                  <th>Propiedad CSS</th>
                  <th>Función</th>
                  <th>Uso Común</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm font-mono">
                  <td>grid-flow-row</td>
                  <td>grid-auto-flow: row;</td>
                  <td>(Por defecto) Los ítems se colocan uno al lado del otro, saltando a la siguiente fila.</td>
                  <td>Maquetación estándar.</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td>grid-flow-col</td>
                  <td>grid-auto-flow: column;</td>
                  <td>Los ítems se colocan uno debajo del otro, saltando a la siguiente columna.</td>
                  <td>Listas que se extienden horizontalmente.</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td>grid-flow-dense</td>
                  <td>grid-auto-flow: dense;</td>
                  <td>Permite que ítems más pequeños rellenen los huecos dejados por ítems más grandes, optimizando el espacio.</td>
                  <td>Galerías tipo "álbum de fotos".</td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>

        <!-- Ejemplo Práctico (Flujo Denso) -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Ejemplo Práctico (Flujo Denso)</h3>
          <div class="mt-10 overflow-x-auto ml-3">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="grid grid-cols-4 grid-flow-dense gap-2"&gt;
                  &lt;div class="col-span-2 row-span-2 bg-red-400 h-24"&gt;Grande&lt;/div&gt;
                  &lt;div class="bg-blue-400"&gt;Pequeño 1&lt;/div&gt;
                  &lt;div class="bg-blue-400"&gt;Pequeño 2&lt;/div&gt;
                  &lt;div class="bg-blue-400"&gt;Pequeño 3&lt;/div&gt;
                  &lt;div class="bg-blue-400"&gt;Pequeño 4&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </article>
      </section>

      <!-- Combinando las clases Container, Flex y Grid -->
      <section>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Combinando las clases Container, Flex y Grid</h2>
        <p class="mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Es muy común combinar las clases container, flex, y grid en Tailwind CSS 4.0. De hecho, esta combinación representa una práctica profesional estándar para construir diseños web complejos y responsivos.</p>

        <p class=" mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Cada clase cumple un rol específico en la jerarquía del layout:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">container</span>: Define el ancho máximo y el centrado de la página. (Nivel más alto: Macro Layout).</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">grid / flex</span>: Definen la estructura principal de la sección o componente. (Nivel intermedio: Estructura).</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Hijos de grid o flex</span>: Contenido interno alineado. (Nivel más bajo: Componente).</p>
            </li>
          </ul>
        </div>

        <!-- Patrones de Combinación Comunes -->
        <article>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Patrones de Combinación Comunes</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Aquí se muestra cómo se utilizan estas clases juntas en una estructura modular típica:</p>

          <!-- container + grid (Diseño de Página Principal) -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">container + grid (Diseño de Página Principal)</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Este es el patrón más común para el diseño de layout de una página completa, como un panel de control o una página con barra lateral.</p>

            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Propósito: Limitar el ancho de la página y usar la grilla para organizar las áreas principales.</p>

            <div class="mt-10 overflow-x-auto ml-3">
              <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="container mx-auto p-4"&gt;
                  &lt;div class="grid grid-cols-1 md:grid-cols-4 gap-6"&gt;
                    
                    &lt;aside class="md:col-span-1 bg-gray-100 p-4"&gt;
                      Barra Lateral
                      &lt;/aside&gt;

                    &lt;main class="md:col-span-3 bg-white p-6 shadow-md"&gt;
                      Contenido Principal de la Página
                    &lt;/main&gt;

                  &lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
            </div>
          </section>

          <!-- container + flex (Barra de Navegación o Hero Centrado) -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">container + flex (Barra de Navegación o Hero Centrado)</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Este patrón es ideal para componentes que solo necesitan alineación unidimensional y deben estar contenidos dentro del ancho máximo de la página.</p>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Propósito: Centrar un componente horizontalmente y usar Flexbox para distribuir sus elementos internos.</p>
            <div class="mt-10 overflow-x-auto ml-3">
              <pre class="rounded overflow-x-auto">
                <code class="language-html">
                  &lt;header class="bg-blue-600 text-white"&gt;
                    &lt;div class="container mx-auto"&gt;

                      &lt;div class="flex justify-between items-center py-4"&gt;
                        
                        &lt;div class="text-2xl font-bold"&gt;Mi Marca&lt;/div&gt;

                        &lt;nav class="hidden sm:flex space-x-6"&gt;
                          &lt;a href="#"&gt;Servicios&lt;/a&gt;
                          &lt;a href="#"&gt;Precios&lt;/a&gt;
                          &lt;button class="bg-white text-blue-600 px-3 py-1 rounded"&gt;Login&lt;/button&gt;
                        &lt;/nav&gt;

                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/header&gt;
                </code>
              </pre>
            </div>
          </section>

          <!-- Anidación: grid dentro de flex o flex dentro de grid -->
          <section>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Anidación: grid dentro de flex o flex dentro de grid</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La anidación es la clave para la complejidad.</p>
            
            <div class="contenedor-listas ml-3">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Grid dentro de Flex</span>: Un ítem flexible (flex) puede contener una grilla (grid) para organizar su contenido interno en dos dimensiones.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Flex dentro de Grid</span>: Una celda de la grilla puede contener un contenedor flexible (flex) para alinear precisamente los elementos que van dentro de esa celda (ej. un icono centrado verticalmente con texto).</p>
                </li>
              </ul>
            </div>
            
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplo de Anidación (grid dentro de flex):</p>
            
            <div class="mt-10 overflow-x-auto ml-3">
              <pre class="rounded overflow-x-auto">
                <code class="language-html">
                  &lt;div class="flex justify-center p-8"&gt; 

                    &lt;div class="grid grid-cols-2 gap-4 bg-gray-50 p-6 rounded-lg shadow-xl w-96"&gt;
                      &lt;div class="text-center p-2 border"&gt;A&lt;/div&gt;
                      &lt;div class="text-center p-2 border"&gt;B&lt;/div&gt;
                      &lt;div class="text-center p-2 border"&gt;C&lt;/div&gt;
                      &lt;div class="text-center p-2 border"&gt;D&lt;/div&gt;
                    &lt;/div&gt;
                    
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </section>
        </article>
      </section>

      <!-- Ejercicios -->
      <section class="mt-8">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg p-6">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="./ejercicios/basicos/tailwind/40" target="_blank">Uso de la clase <span class="text-blue-600 dark:text-green-300">container</span></a></li>
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