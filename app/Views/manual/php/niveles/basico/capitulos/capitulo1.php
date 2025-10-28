<!-- Capitulo 01:  -->
<hr>
<div class="container mx-auto my-8">
  <div class="flex md:flex-row">
    <article id="cap01" class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo 1: FUNDAMENTOS DE PHP</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">PHP es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.</p>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">El código es interpretado por un servidor web con un módulo de procesador de PHP, el más común llamado APACHE. Puede ser usado en la mayoría de los servidores web al igual que en casi todos los sistemas operativos y plataformas sin ningún costo.</p>

      <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Formas de mostrar información en el navegador</h2>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Existen varias formas. Las principales o más usadas son: echo, print, print_r() y var_dump(). Estas funciones se utilizan para mostrar datos, pero tienen usos y propósitos diferentes, especialmente en lo que respecta a la depuración y al manejo de variables estructuradas.</p>

      <!-- print -->
      <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>print</h3>
      <p class="ml-3 mt-5 pathway-extreme-p text-white text-xl">Es una instrucción del lenguaje (no una función). Imprime o muestra un solo valor.</p>
      <div class="contenedor-listas">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Puede imprimir etiquetas HTML.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Uso</span>: Similar a echo, se usa para imprimir un string.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Diferencia clave</span>: Devuelve un valor (1), lo que permite usarlo en expresiones. Solo puede tomar un único argumento. Es un poco más lento que echo.</p>
          </li>
        </ul>
      </div>
      <div class="my-5">
        <pre>
          <code class="language-php">
            print "Mi primer código";
            print "&lt;h1&gt;Mi primer código&lt;/h1&gt;";
          </code>
        </pre>
      </div>

      <!-- echo -->
      <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>echo</h3>
      <p class="ml-3 mt-5 pathway-extreme-p text-white text-xl">Es una instrucción del lenguaje (no una función) que se utiliza para mostrar uno o más strings.</p>
      <div class="contenedor-listas">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Puede imprimir etiquetas HTML.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Uso</span>: Es el método más común y rápido para imprimir datos simples como texto, números y variables de string.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Diferencia clave</span>: No devuelve ningún valor, lo que lo hace ligeramente más rápido que print.</p>
          </li>
        </ul>
      </div>
      <div class="my-5">
        <pre>
          <code class="language-php">
            echo "Mi segundo código", "Mi tercer código";
            echo "&lt;p&gt;Mi segundo código&lt;/p&gt;";
          </code>
        </pre>
      </div>

      <!-- print_r() -->
      <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>prit_r()</h3>
      <p class="ml-3 mt-5 pathway-extreme-p text-white text-xl">Es una función diseñada para imprimir información de una manera legible para humanos, especialmente útil para depurar arreglos y objetos.</p>
      <div class="contenedor-listas">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Uso</span>: Muestra la estructura de un arreglo u objeto, incluyendo las claves y sus valores. No muestra los tipos de datos ni el tamaño de los elementos.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Diferencia clave</span>: Es ideal para inspeccionar arreglos y objetos de forma rápida y sencilla durante el desarrollo, ya que su salida es fácil de leer.</p>
          </li>
        </ul>
      </div>
      <div class="my-5">
        <pre>
          <code class="language-php">
            &lt;?php
              $frutas = array("a" => "manzana", "b" => "banana", "c" => array("x", "y", "z"));

              echo "&lt;pre&gt;"; // Uso de &lt;pre&gt; para formato legible
              print_r($frutas);
              echo "&lt;/pre&gt;";
              /*
              Salida:
              Array
              (
                  [a] => manzana
                  [b] => banana
                  [c] => Array
                      (
                          [0] => x
                          [1] => y
                          [2] => z
                      )
              )
              */
            ?&gt;
          </code>
        </pre>
      </div>

      <!-- var_dump() -->
      <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>var_dump()</h3>
      <p class="ml-3 mt-5 pathway-extreme-p text-white text-xl">Es una función de depuración que muestra información estructurada sobre una o más variables.</p>
      <div class="contenedor-listas">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Uso</span>: Proporciona el máximo nivel de detalle para la depuración, incluyendo el tipo de dato, el valor y, en el caso de strings, el tamaño. También muestra la estructura completa de arreglos y objetos.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Diferencia clave</span>: Ofrece una salida mucho más detallada que print_r(), lo que es crucial para la depuración profunda. Puede aceptar múltiples variables como argumentos..</p>
          </li>
        </ul>
      </div>
      <div class="my-5">
        <pre>
          <code class="language-php">
            &lt;?php
              $frutas = array("a" => "manzana", "b" => "banana", "c" => array("x", "y", "z"));
              $entero = 42;

              echo "&lt;pre&gt;";
              var_dump($frutas);
              echo "&lt;/pre&gt;";

              echo "&lt;pre&gt;";
              var_dump($entero);
              echo "&lt;/pre&gt;";

              /*
              Salida de var_dump($frutas):
              array(3) {
                ["a"]=>
                string(7) "manzana"
                ["b"]=>
                string(6) "banana"
                ["c"]=>
                array(3) {
                  [0]=>
                  string(1) "x"
                  [1]=>
                  string(1) "y"
                  [2]=>
                  string(1) "z"
                }
              }

              Salida de var_dump($entero):
              int(42)
              */
            ?&gt;
          </code>
        </pre>
      </div>

      <!-- Ejercicios -->
      <div class="mt-8 p-6 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
        <h4 class="font-bold text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
        <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
          <li><a href="./ejercicios/basicos/php/1" target="_blank">Ejercicio 01</a></li>
          <li><a href="./ejercicios/basicos/php/2" target="_blank">Ejercicio 02</a></li>
          <li><a href="./ejercicios/basicos/php/3" target="_blank">Ejercicio 03</a></li>
        </ol>
      </div>
    </article>

    <div id="subtitulos " class="w-1/4 h-screen px-3 text-gray-600 md:box-border lg:box-border bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300 flex flex-col">
      <div class="mt-3 h-8 dark:bg-pink-100">
        <h2 class="text-xl font-mono text-center">Sub Capitulos</h2>
      </div>
      <div class="content-subtitulos dark:bg-blue-400 h-auto mt-6 relative">hola</div>
    </div>
  </div>
</div>

<!-- TEMPLATES -->
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

  <!-- Resaltado para capitulos-->
  <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
  </div>
  <!-- Resaltado para ejercicios-->
  <div class="mt-10 p-4 bg-red-900 dark:bg-[#00fff7] rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-800">Resaltado para ejercicios: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
  </div>
  <!-- Notas-->
  <div class="mt-10 p-4 bg-red-900 dark:bg-red-500 rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-white"><i class="bi bi-exclamation-triangle mr-2"></i>Nota: </p>
    <hr class="border-1 border-gray-200 my-2">
    <p class="font-mono text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero praesentium ea quidem similique labore iure reprehenderit modi quo id quia?</p>
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

  <!-- Listas-->
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
      <li class="my-2"><i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>.</li>
      <li class="my-5"><i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>.</li>
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