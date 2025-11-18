<!-- Capitulo 1: FUNDAMENTOS DE JAVASCRIPT -->
<hr>
<article id="cap1" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: FUNDAMENTOS DE JAVASCRIPT</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mt-5 mb-4">En este capítulo conoceremos todos los fundamentos de Javascript.</p>

      <!-- ¿Qué es Javascript? -->
      <article id="js1-item1" class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">¿Qué es Javascript?</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">JavaScript es un lenguaje de programación interpretado, de tipado dinámico y alto nivel, orientado a objetos, que permite crear contenido web dinámico e interactivo, mejorando la experiencia del usuario con elementos como formularios interactivos, animaciones y actualizaciones de contenido. Es un lenguaje débilmente tipado.</p>
        </div>

        <!-- ¿Por qué decimos que Javascript es un lenguaje dinámico? -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>¿Por qué decimos que Javascript es un lenguaje dinámico?</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Porque permite la creación de variables y objetos en tiempo de ejecución, lo que significa que el código puede cambiar durante la ejecución del programa. Esto proporciona flexibilidad y adaptabilidad, permitiendo a los desarrolladores modificar el comportamiento del programa sin necesidad de recompilarlo.</p>

          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Javascript corre directamente en la etapa de Runtime, sin una etapa de compilación previa. Esto permite probar nuestro código inmediatamente; pero también es lo que hace que los errores no se muestren sino hasta que se ejecuta el programa. Lo que se ve a primera vista, cuando se analiza el código, es muy probable que no sea lo que se va a obtener cuando el programa se ejecute.</p>
        </section>

        <!-- ¿Por qué es débilmente tipado? -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>¿Por qué es débilmente tipado?</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Porque no requiere que los desarrolladores declaren explícitamente el tipo de datos de una variable al momento de su creación. En lugar de eso, el tipo de dato se determina automáticamente en tiempo de ejecución según el valor asignado a la variable. Esto facilita la escritura de código, pero también puede llevar a errores inesperados si no se manejan adecuadamente los tipos de datos.</p>

          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Javascript asume tipos de datos que no necesariamente fueron los que se querían representar; esto permite, por ejemplo hacer que se produzcan operaciones entre números y letras. En realidad se pueden hacer operaciones entre distintos tipos de datos: enteros con strings, booleanos con enteros, etc.</p>
        </section>

        <!-- ¿Es Javascript realmente un lenguaje interpretado? -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>¿Es Javascript realmente un lenguaje interpretado?</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Aunque tradicionalmente se ha considerado a JavaScript como un lenguaje interpretado, en la práctica moderna, los motores de JavaScript utilizan técnicas de compilación Just-In-Time (JIT) para mejorar el rendimiento. Esto significa que partes del código pueden ser compiladas en tiempo de ejecución para optimizar su ejecución, combinando características tanto de lenguajes interpretados como compilados.</p>
        </section>

        <!-- ¿Qué significa que Javascript es Backwards Compatible? -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>¿Qué significa que Javascript es Backwards Compatible?</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Significa que las nuevas versiones de JavaScript están diseñadas para ser compatibles con versiones anteriores del lenguaje. Esto permite que el código escrito en versiones anteriores siga funcionando correctamente en entornos que utilizan versiones más recientes de JavaScript, facilitando la evolución del lenguaje sin romper la funcionalidad existente.</p>
        </section>
      </article>

      <!-- Elementos script y noscript -->
      <article id="js1-item2" class="p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Elementos script y noscript</h2>

        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Los elementos <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">script</code> y <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">noscript</code> son etiquetas HTML que se utilizan para incluir y gestionar código JavaScript en una página web. El elemento <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">script</code> permite insertar código JavaScript directamente en el HTML o enlazar a archivos externos, mientras que el elemento <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">noscript</code> proporciona contenido alternativo para los navegadores que no soportan JavaScript o tienen JavaScript deshabilitado.</p>
        </div>

        <!-- El elemento script -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>El elemento script</span></h3>
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white"><i class="bi bi-check-all px-2 dark:text-[#00fff5] text-lg"></i> Pueden ir dentro del <code class="bg-gray-200 dark:text-pink-700 px-1 rounded text-lg font-mono">&lt;head&gt;</code> usando el atributo defer</p>
          <div class="mt-10 ml-6 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;head&gt;
                  &lt;script defer&gt;
                    /* Aquí código javascript */
                  &lt;/script&gt;
                &lt;/head&gt;
              </code>
            </pre>
          </div>

          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white"><i class="bi bi-check-all px-2 dark:text-[#00fff5] text-lg"></i> Enlazando con un archivo externo</p>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;head&gt;
                  &lt;script defer src="ruta/a/mi/script"&gt;
                    /* Aquí código javascript */
                  &lt;/script&gt;
                &lt;/head&gt;
              </code>
            </pre>
          </div>

          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white"><i class="bi bi-check-all px-2 dark:text-[#00fff5] text-lg"></i> Puede ir al final antes de cerrar el
            <code class="bg-gray-200 dark:text-pink-700 px-1 rounded text-lg font-mono">&lt;body&gt;</code> para asegurar que el contenido HTML se cargue primero.
          </p>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;body&gt;
                  &lt;script src="ruta/a/mi/script"&gt;&lt;/script&gt;
                &lt;/body&gt;
              </code>
            </pre>
          </div>

        </section>

        <!-- El elemento noscript -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>El elemento noscript</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Debe usarse en el <code class="bg-gray-200 dark:text-pink-700 px-1 rounded text-lg font-mono">&lt;head&gt;</code>.</p>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-html">
                &lt;head&gt;
                  &lt;noscript&gt;
                    &lt;div style="color: red; font-weight: bold;"&gt;
                      Esta página requiere JavaScript para funcionar correctamente. Actívalo en tu navegador.
                    &lt;/div&gt;
                    &lt;style&gt;
                      /* Aquí estilos alternativos para cuando JavaScript está deshabilitado */
                    &lt;/style&gt;
                  &lt;/noscript&gt;
                &lt;/head&gt;
              </code>
            </pre>
          </div>
        </section>
      </article>

      <!-- Estrategias para la carga de scripts  -->
      <article id="js1-item3" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Estrategias para la carga de scripts</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Existen varias estrategias para cargar scripts en una página web, cada una con sus propias ventajas y desventajas. </p>
        </div>
        <p class="ml-3 mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Algunas de las estrategias más comunes incluyen:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Colocar scripts al final del cuerpo (body)</span>: Esta estrategia asegura que el contenido HTML se cargue primero, mejorando la experiencia del usuario. Sin embargo, puede retrasar la ejecución de scripts necesarios para la funcionalidad inicial de la página.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Usar el atributo defer</span>: Permite que los scripts se descarguen en paralelo con el resto del contenido, pero su ejecución se retrasa hasta que el DOM esté completamente cargado. Esto es útil para scripts que no dependen de otros elementos de la página.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Usar el atributo async</span>: Los scripts se descargan y ejecutan de manera asíncrona, lo que puede mejorar el rendimiento. Sin embargo, esto puede causar problemas si los scripts dependen unos de otros o del DOM.</p>
            </li>
          </ul>
        </div>

        <!-- El atributo defer -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>El atributo defer</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Defer difiere la carga del documento permitiendo esperar a que se cargue todo el DOM del documento html. Defer solo funciona para scripts externos</p>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Los scripts cargados con el atributo defer (ve a continuación) se ejecutarán en el orden en que aparecen en la página y los ejecutará tan pronto como se descarguen el script y el contenido:</p>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                &lt;script defer src="js/vendor/jquery.js"&gt;&lt;/script&gt;

                &lt;script defer src="js/script2.js"&gt;&lt;/script&gt;

                &lt;script defer src="js/script3.js"&gt;&lt;/script&gt;
              </code>
            </pre>
          </div>
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">En este caso, jquery.js se cargará primero, seguido de script2.js y luego script3.js, independientemente del orden en que terminen de descargarse los scripts. No se ejecutarán hasta que se haya cargado todo el contenido de la página, lo cual es útil si tus scripts dependen de que el DOM esté en su lugar (por ejemplo, modifican uno o más elementos de la página).</p>
        </section>

        <!-- El atributo async -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>El atributo async</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">
            Los scripts cargados con el atributo async (ve más abajo) descargarán el script sin bloquear el renderizado de la página y lo ejecutará tan pronto como el script se termine de descargar. No tienes garantía de que los scripts se ejecuten en un orden específico, solo que no detendrán la visualización del resto de la página. Es mejor usar async cuando los scripts de la página se ejecutan de forma independiente y no dependen de ningún otro script de la página.
          </p>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Por ejemplo, si tienes los siguientes elementos script:</p>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                &lt;script async src="js/vendor/jquery.js"&gt;&lt;/script&gt;

                &lt;script async src="js/script2.js"&gt;&lt;/script&gt;

                &lt;script async src="js/script3.js"&gt;&lt;/script&gt;
              </code>
            </pre>
          </div>
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">No puedes confiar en el orden en que se cargarán los scripts. jquery.js se puede cargar antes o después de script2.js y script3.js y si este es el caso, cualquier función en esos scripts dependiendo de jquery producirá un error porque jquery no se definirá en el momento en que se ejecute el script.</p>

          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">async se debe usar cuando tienes un montón de scripts en segundo plano para cargar, y solo deseas ponerlos en su lugar lo antes posible. Por ejemplo, tal vez tengas algunos archivos de datos del juego para cargar, que serán necesarios cuando el juego realmente comience, pero por ahora solo deseas continuar mostrando la introducción del juego, los títulos y el lobby, sin que se bloqueen al cargar el script.</p>
        </section>

        <!-- El evento "DOMContentLoaded" del navegador -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>El evento "DOMContentLoaded" del navegador</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Hay una serie de problemas relacionados con la carga de los scripts en el momento adecuado. ¡Nada es tan simple como parece! Un problema común es que todo el HTML de una página se carga en el orden en que aparece. Si estás utilizando JavaScript para manipular elementos en la página (o exactamente, el Modelo de objetos del documento), tu código no funcionará si el JavaScript se carga y procesa antes que el HTML que estás intentando haga algo.</p>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                document.addEventListener("DOMContentLoaded", function() {
                  // Código a ejecutar cuando el DOM esté completamente cargado
                  console.log("El DOM ha sido completamente cargado y analizado.");
                });
              </code>
            </pre>
          </div>
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Este es un detector de eventos, que escucha el evento "DOMContentLoaded" del navegador, lo cual significa que el cuerpo HTML está completamente cargado y analizado. El JavaScript dentro de este bloque no se ejecutará hasta que se active ese evento, por lo que se evita el error (aprenderás sobre los eventos más adelante en el curso).</p>
        </section>

        <!-- Conclusión -->
        <section class="my-14">
          <div class="p-6 bg-blue-50 dark:bg-yellow-50 rounded-lg">
            <h4 class="font-mono font-bold text-2xl text-blue-800 dark:text-blue-600 mb-2">Conclusión</h4>
            <div class="contenedor-listas">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">async y defer</span>: indican al navegador que descargue los scripts en un hilo separado, mientras que el resto de la página (el DOM, etc.) se descarga, por lo que los scripts no bloquean la carga de la página.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Utiliza async</span>: si tus scripts se deben ejecutar inmediatamente y no tienen ninguna dependencia.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white">Si tus scripts necesitan esperar a ser procesados y dependen de otros scripts y/o del DOM en su lugar, cárgalos usando defer y coloca tus elementos <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">&lt;script&gt;</code> correspondientes en el orden que desees que el navegador los ejecute.</p>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </article>

      <!-- Javascript es un lenguaje dinámicamente tipado -->
      <article id="js1-item4" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Javascript es un lenguaje dinámicamente tipado</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Un valor en JavaScript siempre pertenece a un tipo de dato determinado. Por ejemplo, un string o un número.</p>
        </div>

        <p class="mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Podemos almacenar un valor de cualquier tipo dentro de una variable. Por ejemplo, una variable puede contener en un momento un string y luego almacenar un número:</p>

        <div class="ml-6 mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              // no hay error
              let message = "hola";
              message = 123456;
            </code>
          </pre>
        </div>

        <p class="mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Los lenguajes de programación que permiten estas cosas, como JavaScript, se denominan “dinámicamente tipados”, lo que significa que allí hay tipos de datos, pero las variables no están vinculadas rígidamente a ninguno de ellos.</p>

        <!-- El operador typeof -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>El operador typeof</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">
            El operador typeof en JavaScript se utiliza para conocer el tipo de dato que contiene una variable o expresión en tiempo de ejecución. Devuelve una cadena de texto (por ejemplo: "string", "number", "boolean", "undefined", "object", "function") que describe el tipo del operando que se le pasa.
          </p>

          <!-- Utilidad de typeof -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Utilidad de typeof</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">El principal uso de typeof es verificar el tipo de una variable cuando se trabaja en JavaScript, ya que este lenguaje tiene tipado dinámico y las variables pueden cambiar de tipo durante la ejecución. Esto permite:</p>
            <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
              <li class="my-2 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Comprobar el tipo de datos antes de realizar operaciones.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Validar parámetros de funciones y manejar diferentes comportamientos según el tipo recibido.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Evitar errores comprobando si una variable está definida (tipo "undefined") antes de usarla.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Hacer debug y encontrar inconsistencias en el código durante el desarrollo.</span></li>
            </ul>
          </article>

          <!-- Formas de usar typeof -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Formas de usar typeof</h4>
            <p class="ml-6 mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-white">Por ejemplo:</p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  var x = 12345;          // typeof x devuelve "number"
                  x = 'hola';             // typeof x devuelve "string"
                  x = { clave: 'valor'};  // typeof x devuelve "object"
                </code>
              </pre>
            </div>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  typeof variable // o typeof(variable)
                </code>
              </pre>
            </div>
            <p class="ml-6 my-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Para detectar si una variable está definida:</p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  if (typeof variable === 'undefined') {
                    /* La variable no está definida */
                  }
                </code>
              </pre>
            </div>
          </article>

          <!-- Qué valores especiales devuelve typeof en javascript -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Qué valores especiales devuelve typeof en javascript</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">El operador typeof en JavaScript puede devolver ciertos valores "especiales" que es importante conocer para evitar errores y comprender bien su funcionamiento.</p>
            <p class="ml-6 mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-white">Estos son los valores principales y algunos casos especiales:</p>
            <div class="ml-6 contenedor-listas">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">"undefined"</span>: Si el valor es undefined (variable sin asignar o valor explícito)</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">"boolean"</span>: Si el valor es true o false.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">"number"</span>: Para cualquier número, incluidos NaN e Infinity.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">"bigint"</span>: Para valores de tipo BigInt (números enteros muy grandes).</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">"string"</span>: Para cualquier cadena de texto.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">"symbol"</span>: Para el tipo Symbol, usado para identificadores únicos.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">"function""</span>: Si el valor es una función (esto es considerado un caso especial porque técnicamente las funciones son objetos, pero typeof devuelve "function").</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">"object"</span>: Para objetos, arrays, fechas, y también para null (este es el caso más peculiar).</p>
                </li>
              </ul>
            </div>
            <p class="ml-6 mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-white">Casos especiales reconocidos</p>
            <div class="ml-6 contenedor-listas">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">typeof null devuelve "object"</span>: Esto es un bug reconocido y heredado en JavaScript. null tiene su propio tipo "null", pero typeof lo detecta como "object". Hay que tener cuidado con esto cuando se valida si un valor realmente es un objeto.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">typeof NaN devuelve "number"</span>: Aunque NaN significa "Not-a-Number", typeof lo identifica como "number".​.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">typeof de una función devuelve "function"</span>: Aunque técnicamente no hay un tipo especial "function" en JavaScript (las funciones son objetos), typeof hace esta distinción para comodidad del programador.</p>
                </li>
              </ul>
            </div>
            <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Resumen de valores de typeof</p>
            <div class="ml-6 overflow-x-aut mt-6">
              <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
                <thead class="text-blue-400">
                  <tr>
                    <th class="px-4 py-2 border border-gray-300">Valor de prueba </th>
                    <th class="px-4 py-2 border border-gray-300">typeof devuelve</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">undefined</td>
                    <td class="px-4 py-2 border border-gray-300">"undefined"</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">true, false</td>
                    <td class="px-4 py-2 border border-gray-300">"boolean"</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">42, NaN, Infinity</td>
                    <td class="px-4 py-2 border border-gray-300">"number"</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">10n</td>
                    <td class="px-4 py-2 border border-gray-300">"bigint"</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">"hola"</td>
                    <td class="px-4 py-2 border border-gray-300">"string"</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">Symbol("id")</td>
                    <td class="px-4 py-2 border border-gray-300">"symbol"</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">null</td>
                    <td class="px-4 py-2 border border-gray-300">"object"</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">{}, [], new Date()</td>
                    <td class="px-4 py-2 border border-gray-300">"object"</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">function(){}</td>
                    <td class="px-4 py-2 border border-gray-300">"function"</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Estos valores especiales y "peculiaridades" hacen que sea necesario ser precavido cuando se utiliza typeof para validar datos en JavaScript.</p>
          </article>
        </section>

        <!-- El operador instanceof  -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>El operador instanceof</span></h3>
          <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">El operador instanceof en JavaScript se usa para verificar si un objeto es una instancia de una clase o función constructora específica. Devuelve un valor booleano: true si el objeto es una instancia del constructor dado (o de una clase que hereda de él), y false en caso contrario.</p>

          <!-- Funcionamiento básico -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Funcionamiento básico</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">instanceof comprueba si la propiedad prototype del constructor aparece en la cadena de prototipos (proto) del objeto. En otras palabras, verifica la herencia prototípica para determinar si el objeto es de ese tipo o de un subtipo derivado.</p>
            <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Ejemplo: </p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  function Coche() {}
                  const miCoche = new Coche();

                  console.log(miCoche instanceof Coche); // true
                  console.log(miCoche instanceof Object); // true, porque hereda de Object
                  console.log(miCoche instanceof Date); // false
                </code>
              </pre>
            </div>
          </article>

          <!-- Uso común -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso común</h4>
            <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
              <li class="my-2 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Confirmar el tipo de un objeto en tiempo de ejecución.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Diferenciar objetos de clases personalizadas o nativas (Date, Array, Error, etc).</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Tomar decisiones condicionales basadas en el tipo real del objeto, considerando la herencia.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Verificar objetos antes de usar métodos específicos para evitar errores.</span></li>
            </ul>
          </article>

          <!-- Diferencia con typeof -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Diferencia con typeof</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">typeof devuelve un string con el tipo primitivo o "object" para objetos, pero no distingue entre tipos de objetos complejos. instanceof puede verificar precisamente la clase o constructor del objeto.</p>
          </article>

          <!-- Limitaciones y casos donde instanceof puede fallar -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Limitaciones y casos donde instanceof puede fallar</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">El operador instanceof en JavaScript tiene algunas limitaciones y casos donde puede fallar o no comportarse como se espera:</p>
            <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
              <li class="my-2 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>No funciona con tipos primitivos: instanceof solo funciona con objetos. Para tipos primitivos como números, strings o booleanos no se puede usar para validación, ya que siempre devolverá false para estos tipos.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Objetos creados en diferentes contextos: Si un objeto fue creado en un contexto distinto (por ejemplo, en otro iframe o ventana), instanceof puede fallar porque la cadena de prototipos es diferente en diferentes contextos de ejecución. Así, objetos que son conceptualmente del mismo tipo pueden no pasar la comprobación.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Cadena prototípica manipulada: Si el prototipo de un objeto ha sido cambiado manualmente o la propiedad prototype de una función constructora ha sido alterada, instanceof puede devolver resultados incorrectos o inconsistentes.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>No distingue entre tipos primitivos envueltos y literales: Por ejemplo, un literal string "hola" no es instanceof String, pero un objeto creado con new String("hola") sí. Esto puede confundir en validaciones.</span></li>
              <li class="my-5 flex flex-row"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>No reemplaza un buen diseño de código: Usar instanceof para hacer lógica basada en tipos muchas veces es considerado un mal enfoque, ya que rompe el principio de polimorfismo y puede dificultar mantenimiento y pruebas del código.</span></li>
            </ul>
          </article>

          <!-- Conclusión -->
          <article class="my-14">
            <div class="p-6 bg-blue-50 dark:bg-yellow-50 rounded-lg">
              <h4 class="font-mono font-bold text-2xl text-blue-800 dark:text-blue-600 mb-2">Conclusiones</h4>
              <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-gray-700">Aunque instanceof es útil para verificar tipos de objetos y herencia, debe usarse con precaución debido a:</p>
              <div class="ml-6 contenedor-listas">
                <ul class="space-y-3">
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span>Su incapacidad para validar tipos primitivos.</span></p>
                  </li>
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span>Problemas en contextos múltiples (como iframes).</span></p>
                  </li>
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span>Resultados no confiables si se manipulan prototipos.</span></p>
                  </li>
                </ul>
              </div>
              <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-gray-700">En estos casos, se recomiendan otras técnicas como la verificación con typeof, funciones específicas (Array.isArray), o validación de propiedades para asegurar el tipo correcto.</p>
            </div>
          </article>

        </section>
      </article>

      <!-- Ejercicios -->
      <article id="js1-item5" class="mt-4 p-6 bg-blue-50 dark:bg-blue-900/30 border rounded-lg">
        <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
        <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
          <li><a href="./ejercicios/basicos/js/1" target="_blank">Ejercicio 1</a></li>
          <li><a href="./ejercicios/basicos/js/2" target="_blank">Ejercicio 2</a></li>
          <li><a href="./ejercicios/basicos/js/3" target="_blank">Ejercicio 3</a></li>
        </ol>
      </article>
    </section>

    <aside id="subtitulos " class="flex-1 h-screen px-3 text-gray-600 md:box-border lg:box-border bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300 flex flex-col">
      <div class="mt-3 h-8 dark:bg-pink-100">
        <h2 class="text-xl font-mono text-center">Sub Capitulos</h2>
      </div>
      <div class="content-subtitulos h-auto mt-6 relative">
        <ul>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js1-item1">¿Qué es Javascript?</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js1-item2">Elementos script y noscript</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js1-item3">Estrategias para la carga de scripts</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js1-item4">Javascript es un lenguaje dinámicamente tipado</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js1-item5">Ejercicios</a>
          </li>
        </ul>
      </div>
    </aside>
  </div>
</article>