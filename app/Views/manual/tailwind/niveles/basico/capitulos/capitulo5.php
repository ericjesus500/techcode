<!-- Capitulo 5:  Clases complementarias para Layouts-->
<hr>
<article id="cap5" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300">Capítulo <?= $capitulo; ?>: Clases complementarias para Layouts</h1>

      <p class="mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Tailwind 4.0 hereda de CSS propiedades avanzadas para dimensionamiento de contenido que son vitales, especialmente en Grid y Flexbox:</p>

      <!-- Las clases: w-min, w-max -->
      <article>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Las clases: w-min, w-max y w-fit</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Estas clases controlan el tamaño de un elemento basándose en el contenido interno en lugar de en porcentajes o valores fijos. Son esenciales para el diseño responsivo sin desbordamientos.</p>

        <div class="my-10 rounded dark:bg-white bg-yellow-50 p-3">
          <p class="text-xl my-5 text-gray-600 font-extrabold font-mono">Propiedad CSS: <span class="dark:text-pink-600 font-bold">width: min-content;, width: max-content;</span></p>

          <p class="text-lg my-5 text-gray-600"><span class="dark:text-pink-600">min-content</span>: Hace que el ancho de un elemento sea el mínimo absoluto necesario, evitando desbordamientos. max-content: Hace que el ancho sea el necesario para mostrar todo el contenido en una sola línea.</p>

          <p class="text-lg my-5 text-gray-600"><span class="dark:text-pink-600">max-content</span>: Hace que el ancho sea el necesario para mostrar todo el contenido en una sola línea.</p>

          <p class="text-lg my-5 text-gray-600"><span class="dark:text-blue-600 font-bold">Importancia</span>: Esencial para crear barras laterales o contenedores de texto que se ajustan dinámicamente al texto más largo o más corto, sin usar valores fijos.</p>
        </div>

        <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
        <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usar w-max en un sidebar para que su ancho se ajuste perfectamente al elemento de menú más largo.</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-html">
              &lt;div class="flex-none w-max bg-gray-900 p-4"&gt;&lt;/div&gt;
            </code>
          </pre>
        </div>

        <div class="my-10 rounded dark:bg-white bg-yellow-50 p-3">
          <p class="text-xl my-5 text-gray-600 font-extrabold font-mono">Clase: <span class="dark:text-pink-600 font-bold">w-fit</span></p>
          <p class="text-xl my-5 text-gray-600 font-extrabold font-mono">Propiedad CSS: <span class="dark:text-pink-600 font-bold">width: fit-content;</span></p>

          <p class="text-lg my-5 text-gray-600">El elemento toma el ancho de su contenido (max-content) a menos que exceda el ancho disponible, momento en el que se comporta como 100%.</p>

          <p class="text-lg my-5 text-gray-600">Ideal para contenedores que solo deben ser tan anchos como su contenido (como etiquetas o botones), sin forzar un ancho de bloque completo.</p>
        </div>
        <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
        <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usar w-fit en un botón para que su ancho se ajuste al texto interno, pero no exceda el ancho del contenedor padre.</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-html">
              &lt;div class="w-fit bg-gray-900 p-4"&gt;Botón Ajustado&lt;/div&gt;
            </code>
          </pre>
        </div>

        <!-- Ancho Mínimo (w-min) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Ancho Mínimo (w-min)</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Asegura que el elemento solo ocupe el espacio horizontal que necesita para que su contenido se muestre sin desbordamiento. El ancho se define por el fragmento de texto más largo o el elemento más ancho que no se puede romper.</p>

          <div class="overflow-x-aut mt-6">
            <table class="table-auto border-separate font-mono">
              <thead class="text-blue-400">
                <tr>
                  <th>Clase</th>
                  <th>CSS Equivalente</th>
                  <th>Caso de Uso</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm font-mono">
                  <td>w-min</td>
                  <td>width: min-content;</td>
                  <td>Evitar que una barra lateral con texto largo se haga demasiado ancha.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usar w-min en un contenedor de menú para que su ancho se ajuste al elemento más largo sin desbordar.</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="w-min bg-gray-900 p-4"&gt;
                  &lt;ul&gt;
                    &lt;li&gt;Inicio&lt;/li&gt;
                    &lt;li&gt;Servicios&lt;/li&gt;
                    &lt;li&gt;Contacto&lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>

        <!-- Ancho Máximo (w-max) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Ancho Máximo (w-max)</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Hace que el elemento sea tan ancho como su contenido más largo (ocupa una sola línea), sin forzar saltos de línea. Ideal para elementos que deben mostrar todo su contenido sin truncamiento.</p>
          <div class="overflow-x-aut mt-6">
            <table class="table-auto border-separate font-mono">
              <thead class="text-blue-400">
                <tr>
                  <th>Clase</th>
                  <th>CSS Equivalente</th>
                  <th>Caso de Uso</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm font-mono">
                  <td>w-max</td>
                  <td>width: max-content;</td>
                  <td>Usado en menús horizontales o etiquetas donde no se desea que el texto salte.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usar w-max en un menú horizontal para que cada elemento se ajuste a su texto sin saltos de línea.</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="w-max bg-gray-900 p-4 flex space-x-4"&gt;
                  Esto es un encabezado muy largo que usa w-max y no salta.
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>

        <!-- Ancho de Ajuste (w-fit) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Ancho de Ajuste (w-fit)</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Combina el comportamiento de min-content y max-content. El elemento toma el ancho de su contenido (w-max) a menos que exceda el ancho disponible, momento en el que se comporta como 100%.</p>
          <div class="overflow-x-aut mt-6">
            <table class="table-auto border-separate font-mono">
              <thead class="text-blue-400">
                <tr>
                  <th>Clase</th>
                  <th>CSS Equivalente</th>
                  <th>Caso de Uso</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm font-mono">
                  <td>w-fit</td>
                  <td>width: fit-content;</td>
                  <td>Ideal para botones o etiquetas que deben ajustarse al contenido sin exceder el contenedor padre.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usar w-fit en un botón para que su ancho se ajuste al texto interno, pero no exceda el ancho del contenedor padre.</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="w-fit bg-gray-900 p-4"&gt;Botón Ajustado&lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>
      </article>

      <!-- Clase: min-w-0, min-h-0 -->
      <article>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Clase: min-w-0, min-h-0</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5"></p>
        <div class="my-10 rounded dark:bg-white bg-yellow-50 p-3">
          <p class="text-xl my-5 text-gray-600 font-extrabold font-mono">Propiedad CSS: <span class="dark:text-pink-600 font-bold">min-width: 0;, min-height: 0;</span></p>
          <p class="text-lg my-5 text-gray-600">Permite que un elemento hijo dentro de un contenedor flex o grid pueda reducir su tamaño por debajo de su contenido intrínseco.</p>
          <p class="text-lg my-5 text-gray-600">Previene que los elementos hijos causen desbordamientos no deseados en layouts flexibles.</p>
          <p class="text-lg my-5 text-gray-600"><span class="dark:text-pink-600 font-bold">Importancia</span>: Crucial para evitar que los elementos hijos en un contenedor flex o grid excedan el tamaño del contenedor padre, manteniendo un diseño limpio y responsivo.</p>
        </div>
        <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
        <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Aplicar min-w-0 a un contenedor flex para evitar que un elemento hijo con mucho contenido cause desbordamiento horizontal.</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-html">
              &lt;div class="flex min-w-0"&gt;
                &lt;div class="flex-shrink-0 w-32 bg-gray-900 p-4"&gt;&lt;/div&gt;
                &lt;div class="flex-grow bg-gray-700 p-4"&gt;Contenido largo que se ajusta correctamente sin desbordar.&lt;/div&gt;
              &lt;/div&gt;
            </code>
          </pre>
        </div>
      </article>

      <!-- La Clase aspect-ratio -->
      <article>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">La Clase aspect-ratio</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Esta clase es fundamental para el layout moderno que maneja imágenes, videos o placeholders responsivos sin depender de hacks de padding o JavaScript. Se aplican al contenedor padre del elemento que debe mantener la proporción.</p>
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
                <td>aspect-video</td>
                <td>aspect-ratio: 16 / 9;</td>
                <td>Mantiene una relación de aspecto de 16:9 (típica para videos).</td>
              </tr>
              <tr class="text-sm font-mono">
                <td>aspect-square</td>
                <td>aspect-ratio: 1 / 1;</td>
                <td>Mantiene una relación de aspecto cuadrada (uso: Fotos de perfil o iconos).</td>
              </tr>
              <tr class="text-sm font-mono">
                <td>aspect-4/3</td>
                <td>aspect-ratio: 4 / 3;</td>
                <td>Mantiene una relación de aspecto de 4:3 (Imágenes de stock o galerías).</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo 1:</p>
        <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usar aspect-video para un contenedor de video que debe mantener una relación de aspecto 16:9 independientemente del tamaño de la pantalla.</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-html">
              &lt;div class="w-full md:w-1/2 aspect-video bg-gray-900"&gt;
                &lt;iframe src="video-url" class="w-full h-full"&gt;&lt;/iframe&gt;
              &lt;/div&gt;
            </code>
          </pre>
        </div>

        <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo 2: Galería de miniaturas de video responsivas.</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-html">
              &lt;div class="grid grid-cols-1 md:grid-cols-3 gap-4"&gt;
  
                &lt;div class="aspect-video bg-gray-700 rounded overflow-hidden"&gt;
                  &lt;img src="video-1.jpg" alt="Video" class="w-full h-full object-cover"&gt;
                &lt;/div&gt;
                
                &lt;div class="aspect-video bg-gray-700 rounded"&gt;&lt;/div&gt;
                
                &lt;div class="aspect-video bg-gray-700 rounded"&gt;&lt;/div&gt;

              &lt;/div&gt;
            </code>
          </pre>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Importancia: Asegura que los elementos visuales escalen correctamente cuando el ancho cambia, previniendo saltos de diseño (layout shifts), lo cual es crucial para la experiencia de usuario (UX) y el rendimiento (Core Web Vitals).</p>
      </article>

      <!-- La Nomenclatura del Cero (0) y la Unidad Fraccional en Grid -->
      <article>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">La Nomenclatura del Cero (0) y la Unidad Fraccional en Grid</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Esta sintaxis es la joya de la corona en Tailwind 4.0 para el layout. Permite usar cualquier valor de CSS directamente en la clase sin tocar el archivo de configuración, ideal para Grid.</p>

        <!-- Las clases: grid-cols-0 / grid-rows-0 -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Las clases: grid-cols-0 / grid-rows-0</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Estas clases están diseñadas para eliminar columnas o filas implícitas. Son muy útiles para resetear un layout en un breakpoint específico, volviendo a la disposición de bloque normal, lo cual es más limpio que usar display: none y luego redefinir la grilla.</p>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usar grid-cols-0 en un contenedor grid para eliminar todas las columnas en pantallas pequeñas, haciendo que los elementos se apilen verticalmente.</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="grid md:grid-cols-3 grid-cols-0 gap-4"&gt;
                  &lt;div class="bg-gray-900 p-4"&gt;Elemento 1&lt;/div&gt;
                  &lt;div class="bg-gray-700 p-4"&gt;Elemento 2&lt;/div&gt;
                  &lt;div class="bg-gray-500 p-4"&gt;Elemento 3&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>

        <!-- Valores Personalizados en Corchetes ([]) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Valores Personalizados en Corchetes ([])</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Se puede definir una grilla con anchos fijo y no uniformes(flexibles) directamente en línea, lo cual es más potente que la escala de grid-cols-X:</p>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo 1:</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="grid grid-cols-[200px_1fr_2fr] gap-4"&gt;
                  &lt;div class="bg-gray-900 p-4"&gt;Columna 1 (200px)&lt;/div&gt;
                  &lt;div class="bg-gray-700 p-4"&gt;Columna 2 (1fr)&lt;/div&gt;
                  &lt;div class="bg-gray-500 p-4"&gt;Columna 3 (2fr)&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo 2:</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="grid grid-cols-[250px_1fr_minmax(150px,250px)] gap-8"&gt;
                  &lt;div class="bg-gray-200"&gt;250px Sidebar&lt;/div&gt;
                  
                  &lt;div class="bg-white"&gt;Contenido Flexible&lt;/div&gt;
                  
                  &lt;div class="bg-gray-200"&gt;Anuncio Mín: 150px&lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Importancia: Esta sintaxis personalizada en corchetes te libera de las limitaciones de la escala predefinida de Tailwind, permitiéndote usar cualquier valor de CSS (auto, minmax(), px, etc.) para crear diseños perfectamente definidos sin necesidad de modificar tailwind.config.js</p>
        </section>

        <!-- Inicio/Fin de Columna con Líneas Específicas -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Inicio/Fin de Columna con Líneas Específicas</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Permite posicionar elementos en líneas de grilla específicas usando la sintaxis de corchetes. Esto es útil para layouts complejos donde los elementos deben ocupar áreas específicas, lo que es útil para diseños tipo "Magazine".</p>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;div class="grid grid-cols-6 gap-4"&gt;
                  &lt;div class="col-start-2 col-end-6 bg-gray-900 p-4 h-10"&gt;Elemento que empieza en línea 2 y termina en línea 6&lt;/div&gt;

                  &lt;div class="col-span-full bg-blue-300 h-10"&gt;
                    Ocupa todas las 6 columnas
                  &lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </section>
      </article>

      <!-- Responsividad y el order en Flex/Grid -->
      <article>
        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Responsividad y el order en Flex/Grid</h2>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">El uso responsivo del order es una técnica de accesibilidad crucial para asegurar que el orden del código fuente (importante para lectores de pantalla) difiera del orden visual de la página.</p>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">La clase order solo cambia la presentación visual, no el orden real del código HTML (DOM).</p>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Regla de Oro: En el HTML, coloca el contenido más importante primero. Usa order-* y prefijos responsivos (md:order-*) para manipular la presentación visual.</p>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Caso de Uso Profesional: Colocar el contenido principal antes de la barra lateral en el HTML por razones de SEO y accesibilidad, pero mostrar la barra lateral a la izquierda del contenido principal en desktop.</p>
        <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo 1:</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-html">
              &lt;div class="flex"&gt;
                &lt;div class="order-2 md:order-1 flex-1"&gt;...&lt;/div&gt; 

                &lt;div class="order-1 md:order-2 w-64"&gt;...&lt;/div&gt; 
              &lt;/div&gt;
            </code>
          </pre>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Esto asegura que los lectores de pantalla (para accesibilidad) y los rastreadores de motores de búsqueda procesen primero el contenido más importante, mientras que el diseño visual permanece correcto en diferentes dispositivos.</p>

        <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo 2: Intercambiar Sidebar (menos importante) y Main Content (más importante) en desktop.</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-html">
              &lt;div class="flex flex-col md:flex-row"&gt;
                &lt;aside class="order-1 md:order-2 w-full md:w-64 bg-gray-100"&gt;
                  Sidebar (Visualmente a la DERECHA en desktop)
                &lt;/aside&gt;

                &lt;main class="order-2 md:order-1 flex-1"&gt;
                  Contenido Principal (Visualmente a la IZQUIERDA en desktop)
                &lt;/main&gt;
              &lt;/div&gt;
            </code>
          </pre>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">En este caso, el contenido principal se lee primero, pero visualmente se posiciona a la izquierda, que es donde se espera en un desktop layout tradicional.</p>
      </article>

      <!-- Ejercicios -->
      <article class=" mt-8 p-6">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
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