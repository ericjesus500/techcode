<!-- Capitulo 03: Clases de Utilidades -->
<hr>
<article id="cap3" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Clases de Utilidades</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">En Tailwind 4, las utilidades son clases de bajo nivel que aplican una única propiedad CSS, mientras que los componentes son abstracciones de estilos reutilizables que agrupan múltiples utilidades.</p>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">La principal diferencia radica en su granularidad: las utilidades se aplican directamente en el HTML para un control preciso, mientras que los componentes son clases personalizadas que encapsulan patrones de diseño comunes.</p>

      <!-- Utilidades -->
      <article class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Utilidades</h2>
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

        <!-- Diferencias entre clases de utilidades y componentes -->
        <section>
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
      </article>

      <!-- Clases de utilidad para Layout -->
      <article class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Clases de utilidad para Layout</h2>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">
          Tailwind ofrece una amplia gama de clases de utilidad específicas para el diseño de layouts. Estas clases permiten controlar la disposición y el comportamiento de los elementos en la página de manera eficiente. Algunas de las categorías principales incluyen:
        </p>

        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Flexbox</span>: Clases como flex, flex-row, items-center, justify-between permiten crear layouts flexibles y responsivos.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Grid</span>: Clases como grid, grid-cols-3, gap-4 facilitan la creación de layouts en cuadrícula.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Posicionamiento</span>: Clases como relative, absolute, top-0, left-0 permiten controlar la posición de los elementos.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Espaciado</span>: Clases como m-4, p-6, space-x-4 ayudan a gestionar márgenes y rellenos entre elementos.</p>
            </li>
          </ul>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">
          Las clases de utilidad de Layout controlan el Display, la Posición, el Orden de Apilamiento (z-index), la Visibilidad y el Control de Flujo de los elementos. Son fundamentales para estructurar la interfaz de usuario.
        </p>

        <!-- Control del Tipo de Caja (Display) -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Control del Tipo de Caja (Display)</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            Estas clases definen cómo se comporta un elemento con respecto al flujo de la página y a sus elementos hermanos.
          </p>
          <div class="overflow-x-auto rounded mt-10">
            <table class="table table-primary">
              <thead>
                <tr class="text-blue-400">
                  <th scope="col">Clase</th>
                  <th scope="col">Propiedad CSS</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Ejemplo Práctico</th>
                </tr>
              </thead>
              <tbody>
                <tr class="font-mono text-sm">
                  <td scope="row">block</td>
                  <td>display: block;</td>
                  <td>El elemento toma todo el ancho disponible y comienza en una nueva línea (por defecto para &lt;div&gt;, &lt;h1&gt;, p).</td>
                  <td>Para asegurar que un &lt;span&gt; se comporte como un bloque.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">inline</td>
                  <td>display: inline;</td>
                  <td>El elemento solo toma el ancho necesario y no comienza en una nueva línea (por defecto para &lt;span&gt;, &lt;a&gt;).</td>
                  <td>Para que dos elementos de bloque aparezcan en la misma línea.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">inline-block</td>
                  <td>display: inline-block;</td>
                  <td>El elemento es como inline, pero se le pueden aplicar width, height y espaciado vertical.</td>
                  <td>Botones o elementos que necesitan alineación horizontal y dimensiones fijas.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">flex</td>
                  <td>display: flex;</td>
                  <td>Convierte el elemento en un contenedor flexible. Base para Flexbox.</td>
                  <td>Se usa en la mayoría de los componentes modernos (tarjetas, barras de navegación).</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">grid</td>
                  <td>display: grid;</td>
                  <td>Convierte el elemento en un contenedor de rejilla. Base para Grid Layout.</td>
                  <td>Se usa para diseños complejos de dos dimensiones.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">hidden</td>
                  <td>display: none;</td>
                  <td>Oculta completamente el elemento del flujo de la página.</td>
                  <td>Para ocultar elementos según la condición o el tamaño de la pantalla.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <div class="mt-10">
            <pre>
              <code class="language-html">
                &lt;div class="flex space-x-4"&gt;
                  &lt;div class="block bg-blue-500 text-white p-4"&gt;Block&lt;/div&gt;
                  &lt;div class="inline bg-green-500 text-white p-4"&gt;Inline&lt;/div&gt;
                  &lt;div class="inline-block bg-red-500 text-white p-4"&gt;Inline-Block&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>

        <!-- Posicionamiento (Position) -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Posicionamiento (Position)</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            Estas clases controlan cómo se posicionan los elementos en relación con su contenedor y otros elementos.
          </p>
          <div class="overflow-x-auto rounded mt-10">
            <table class="table-auto border-separate font-mono">
              <thead>
                <tr class="text-blue-400">
                  <th scope="col">Clase</th>
                  <th scope="col">Propiedad CSS</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Ejemplo Práctico</th>
                </tr>
              </thead>
              <tbody>
                <tr class="font-mono text-sm">
                  <td scope="row">static</td>
                  <td>position: static;</td>
                  <td>Posición por defecto. El elemento sigue el flujo normal del documento.</td>
                  <td>Usado para elementos que no requieren posicionamiento especial. Básicamente se usan para restablecer la posición si se heredó otra.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">relative</td>
                  <td>position: relative;</td>
                  <td>El elemento se posiciona en relación a su posición original.</td>
                  <td>Para ajustar ligeramente la posición sin afectar el flujo. Se usa en el padre para permitir que los hijos absolute se posicionen dentro de él</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">absolute</td>
                  <td>position: absolute;</td>
                  <td>El elemento se posiciona en relación a su contenedor posicionado más cercano.</td>
                  <td>Para crear elementos superpuestos o modales; menús desplegables, insignias (badges) en esquinas de tarjetas.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">fixed</td>
                  <td>position: fixed;</td>
                  <td>El elemento se posiciona en relación a la ventana del navegador.</td>
                  <td>Para barras de navegación fijas(header fijo) o botones flotantes.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">sticky</td>
                  <td>position: sticky;</td>
                  <td>El elemento se comporta como relative hasta que alcanza un umbral definido, luego se fija en su posición.</td>
                  <td>Para encabezados que permanecen visiblesy se pegan a la parte superior al desplazarse.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <div class="mt-10">
            <pre>
              <code class="language-html">
                &lt;div class="relative bg-gray-200 p-6"&gt;
                  &lt;div class="absolute top-0 right-0 bg-red-500 text-white p-2"&gt;Posicionado Absoluto&lt;/div&gt;
                  &lt;p&gt;Contenido del contenedor relativo.&lt;/p&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>

        <!-- Índice de Apilamiento (Z-Index) -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Índice de Apilamiento (Z-Index)</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            La utilidad z-index controla el orden de apilamiento de los elementos posicionados (relative, absolute, fixed, sticky). Los valores más altos se superponen a los valores más bajos.
          </p>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            Estas clases controlan el orden en que los elementos se apilan unos sobre otros en el eje Z.
          </p>
          <div class="overflow-x-auto rounded mt-10">
            <table class="table table-primary">
              <thead>
                <tr class="text-blue-400">
                  <th scope="col">Clase</th>
                  <th scope="col">Propiedad CSS</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Ejemplo Práctico</th>
                </tr>
              </thead>
              <tbody>
                <tr class="font-mono text-sm">
                  <td scope="row">z-0</td>
                  <td>z-index: 0;</td>
                  <td>El elemento se apila en el nivel base.</td>
                  <td>Usado para elementos de fondo o que no necesitan superponerse a otros.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">z-10</td>
                  <td>z-index: 10;</td>
                  <td>El elemento se apila por encima de los elementos con z-index menor.</td>
                  <td>Para elementos que deben estar por encima del contenido normal, como menús desplegables.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">z-20</td>
                  <td>z-index: 20;</td>
                  <td>El elemento se apila aún más arriba en la pila.</td>
                  <td>Para modales o superposiciones que deben estar por encima de otros elementos interactivos.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">z-auto</td>
                  <td>z-index: auto;</td>
                  <td>Comportamiento por defecto del navegador.</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <div class="mt-10">
            <pre>
              <code class="language-html">
                &lt;div class="relative bg-gray-200 p-6"&gt;
                  &lt;div class="absolute top-0 left-0 z-0 bg-blue-500 text-white p-4"&gt;Fondo (z-0)&lt;/div&gt;
                  &lt;div class="absolute top-4 left-4 z-10 bg-red-500 text-white p-4"&gt;Encima (z-10)&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>

          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo práctico (modal):</p>
          <div class="mt-10">
            <pre>
              <code class="language-html">
                &lt;div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-20"&gt;
                  &lt;div class="bg-white p-6 rounded-lg shadow-lg z-30"&gt;
                    &lt;h2 class="text-xl font-bold mb-4"&gt;Modal&lt;/h2&gt;
                    &lt;p&gt;Este es un ejemplo de modal usando z-index para el apilamiento.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>

        <!-- Visibilidad y Flujo de Contenido -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Visibilidad y Flujo de Contenido</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">
            Estas clases controlan la visibilidad de los elementos, sin alterar el display, y controlan cómo se maneja el contenido desbordado.
          </p>
          <div class="overflow-x-auto rounded mt-10">
            <table class="table table-primary">
              <thead>
                <tr class="text-blue-400">
                  <th scope="col">Clase</th>
                  <th scope="col">Propiedad CSS</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Ejemplo Práctico</th>
                </tr>
              </thead>
              <tbody>
                <tr class="font-mono text-sm">
                  <td scope="row">visible</td>
                  <td>visibility: visible;</td>
                  <td>El elemento es visible. Muestra el elemento (pero puede ocupar espacio si se usa con opacity).</td>
                  <td>Usado para mostrar elementos que pueden haber sido ocultados previamente.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">invisible</td>
                  <td>visibility: hidden;</td>
                  <td>El elemento es invisible pero ocupa espacio en el layout.</td>
                  <td>Para ocultar elementos temporalmente sin afectar el diseño.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">overflow-hidden</td>
                  <td>overflow: hidden;</td>
                  <td>Recorta el contenido si este desborda el contenedor.</td>
                  <td>Prevenir barras de desplazamiento no deseadas en contenedores.</td>
                </tr>
                <tr class="font-mono text-sm">
                  <td scope="row">overflow-scroll</td>
                  <td>overflow: scroll;</td>
                  <td>Siempre muestra barras de desplazamiento, incluso si no son necesarias.</td>
                  <td>Definir un área de desplazamiento fija, como un chatbox.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <div class="mt-10">
            <pre>
              <code class="language-html">
                &lt;div class="bg-gray-200 p-6"&gt;
                  &lt;div class="visible bg-green-500 text-white p-4 mb-4"&gt;Visible&lt;/div&gt;
                  &lt;div class="invisible bg-red-500 text-white p-4"&gt;Invisible&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>

          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo Práctico (invisible vs hidden):</p>
          <div class="mt-10">
            <pre>
              <code class="language-html">
                &lt;div class="flex space-x-4 p-4 border"&gt;
                  &lt;div class="w-16 h-16 bg-blue-500 invisible"&gt;Invisible&lt;/div&gt; 
                  
                  &lt;div class="w-16 h-16 bg-green-500 hidden"&gt;Hidden&lt;/div&gt; 
                  
                  &lt;div class="w-16 h-16 bg-red-500"&gt;Visible&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>
      </article>

      <!-- Ejercicios -->
      <article class="mt-4 p-6 bg-blue-50 dark:bg-blue-900/30 border rounded-lg">
        <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
        <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
          <li><a href="./ejercicios/basicos/tailwind/30" target="_blank">Uso de clases de utilidad</a></li>
          <li><a href="./ejercicios/basicos/tailwind/31" target="_blank">Práctica creación de un modal</a></li>
        </ol>
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