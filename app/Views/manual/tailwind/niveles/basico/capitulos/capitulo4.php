<!-- Capitulo 04: Clases de utilidad para Layouts -->
<hr>
<div class="container mx-auto my-8">
  <div class="flex md:flex-row">
    <article id="cap4" class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Clases de utilidad para Layouts</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">En este capítulo, exploraremos las clases de utilidad que Tailwind CSS ofrece para crear layouts efectivos y responsivos. Estas clases facilitan la organización y disposición de los elementos en una página web, permitiendo a los desarrolladores construir interfaces de usuario atractivas y funcionales con facilidad.</p>

      <!-- La clase container -->
      <section>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">La clase container</h2>
        <p class="mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase <code><span class="text-xl text-gray-600 dark:text-green-300">container</span></code> en Tailwind CSS es una utilidad esencial para crear layouts responsivos y centrados. Esta clase ajusta automáticamente el ancho máximo de un elemento según el tamaño de la pantalla, lo que facilita la creación de diseños que se adaptan a diferentes dispositivos.</p>

        <!-- ¿Para qué sirve? -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>¿Para qué sirve?</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase container cumple la función de establecer un ancho máximo (max-width) en los elementos que la usan. Funciona de la siguiente manera:</p>

          <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Principales características</h4>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ancho máximo responsivo</span>: Establece automáticamente el ancho máximo de un elemento para que coincida con el tamaño del breakpoint actual (por ejemplo, sm, md, lg, etc.).</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Evita el estiramiento excesivo</span>: Limita el ancho del contenido en pantallas grandes para evitar que se estire demasiado, lo que mantiene la legibilidad y el equilibrio visual.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Permite centrar contenido</span>: Aunque por sí sola la clase container no centra el contenido, está diseñada para combinarse con la utilidad <code><span class="text-xl text-gray-600 dark:text-green-300">mx-auto</span></code> para lograr este efecto fácilmente.</p>
              </li>
            </ul>
          </div>

          <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Diferencias con otras versiones</h4>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">En versiones anteriores de Tailwind, la clase container a menudo no se centraba automáticamente ni aplicaba padding por defecto. Sin embargo, en la versión 4 y versiones más recientes, se han hecho mejoras para que sea más intuitiva.</p>

          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Cómo usarla:</p>

          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Agrega la clase container</span> a un elemento contenedor, como un <span class=" text-gray-600 dark:text-green-300">div</span>, que envuelva tu contenido principal.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Combínala con mx-auto </span> para centrar el contenedor horizontalmente.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Añade padding horizontal (px-*)</span> si necesitas que el contenido tenga un espacio en los bordes en pantallas pequeñas.</p>
              </li>
            </ul>
          </div>

          <a class="btn btn-primary" href="./ejercicios/basicos/tailwind/6" target="_blank">Ver ejemplo</a>
        </article>

        <!-- Otras clases de utilidad para layouts -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Otras clases de utilidad para layouts</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Además de la clase container, Tailwind 4 ofrece varias otras clases de utilidad que facilitan la creación de layouts responsivos y flexibles:</p>

          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Flexbox Utilities</span>: Clases como <code><span class="text-xl text-gray-600 dark:text-green-300">flex</span></code>, <code><span class="text-xl text-gray-600 dark:text-green-300">flex-col</span></code>, <code><span class="text-xl text-gray-600 dark:text-green-300">justify-center</span></code> y <code><span class="text-xl text-gray-600 dark:text-green-300">items-center</span></code> permiten crear layouts flexibles y alineaciones precisas.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Grid Utilities</span>: Clases como <code><span class="text-xl text-gray-600 dark:text-green-300">grid</span></code>, <code><span class="text-xl text-gray-600 dark:text-green-300">grid-cols-3</span></code> y <code><span class="text-xl text-gray-600 dark:text-green-300">gap-4</span></code> facilitan la creación de layouts de cuadrícula responsivos.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Spacing Utilities</span>: Clases como <code><span class="text-xl text-gray-600 dark:text-green-300">m-4</span></code>, <code><span class="text-xl text-gray-600 dark:text-green-300">p-6</span></code> y sus variantes permiten controlar márgenes y rellenos de manera precisa.</p>
              </li>
        </article>

        <!-- La clase flexbox -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Flexbox</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Flexbox es un modelo de diseño unidimensional que permite distribuir espacio entre los elementos de una interfaz y alinear contenido de manera eficiente dentro de un contenedor, incluso cuando su tamaño es desconocido o dinámico.</p>

          <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Características principales:</h4>
          <div class="contenedor-listas">
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

          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>La clase flex y sus complementos</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La clase flex habilita un contenedor flex</p>

          <div class="contenedor-listas">
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

        <!-- La clase grid -->
        <article class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Grid</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">CSS Grid es un sistema de diseño bidimensional (cuadrícula) que permite crear layouts complejos dividiendo el espacio en filas y columnas. A diferencia de Flexbox, que es unidimensional, Grid facilita la organización tanto horizontal como vertical de los elementos.</p>

          <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Características principales:</h4>
          <div class="contenedor-listas">
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
      </section>

      <!-- Ejercicios -->
      <section class="mt-8 p-6">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="./ejercicios/basicos/tailwind/6" target="_blank">Uso de la clase <span class="text-blue-600 dark:text-blue-600">container</span></a></li>
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