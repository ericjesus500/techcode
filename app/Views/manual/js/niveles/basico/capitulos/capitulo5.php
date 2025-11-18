<!-- Capitulo 5: Números -->
<hr>
<article id="cap5" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Los Números en Javascript</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mt-5 mb-4">
        Este capítulo trata todo lo relacionado a los valores numéricos en Javascript.
      </p>

      <!-- ¿Cómo son los números en Javascript -->
      <article id="js4-item1" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">¿Cómo son los números en Javascript</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Los números en JavaScript son de tipo flotante de doble precisión según el estándar IEEE 754. Esto significa que todos los números, ya sean enteros o decimales, se representan de la misma manera. JavaScript también proporciona objetos especiales como <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">Number</code> para trabajar con números y realizar operaciones matemáticas avanzadas.</p>
        </div>
        <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">
          JavaScript maneja números enteros y de punto flotante, pero no tiene un tipo separado para enteros. Los números se pueden representar en diferentes bases, como decimal, hexadecimal, octal y binario. Además, JavaScript incluye valores especiales como <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">Infinity</code>, <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">-Infinity</code> y <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">NaN</code> (Not-a-Number) para manejar situaciones matemáticas especiales.
        </p>

        <p class="ml-3 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">
          JavaScript proporciona una variedad de métodos y propiedades a través del objeto <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">Math</code> para realizar operaciones matemáticas comunes, como redondeo, generación de números aleatorios, cálculos trigonométricos y más.
        </p>

        <p class="ml-3 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">
          Ejemplo de declaración y uso de números en JavaScript:
        </p>

        <div class="ml-3 mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              // Declaración de números
              let entero = 42; // Número entero
              let decimal = 3.14; // Número de punto flotante

              // Operaciones matemáticas
              let suma = entero + decimal; // Suma
              let producto = entero * decimal; // Multiplicación

              console.log("Suma:", suma); // Salida: Suma: 45.14
              console.log("Producto:", producto); // Salida: Producto: 131.88

              // Uso del objeto Math
              let raizCuadrada = Math.sqrt(entero); // Raíz cuadrada
              let numeroAleatorio = Math.random(); // Número aleatorio entre 0 y 1

              console.log("Raíz cuadrada de", entero, "es", raizCuadrada); // Salida: Raíz cuadrada de 42 es 6.48074069840786
              console.log("Número aleatorio:", numeroAleatorio); // Salida: Número aleatorio: (valor entre 0 y 1)
            </code>
          </pre>
        </div>

        <!-- H3* -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>H3*</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para sub capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
          </div>

          <!-- H4* -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">H4*</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
          </article>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
        </section>

        <!-- H3* -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>H3*</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para sub capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
          </div>

          <!-- H4* -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">H4*</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
          </article>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
        </section>

      </article>

      <!-- H2* -->
      <article id="js4-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">H2*</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5"></p>

        <!-- H3* -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>H3*</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para sub capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
          </div>

          <!-- H4* -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">H4*</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
          </article>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
        </section>

        <!-- H3* -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>H3*</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para sub capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
          </div>
          <!-- H4* -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">H4*</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
          </article>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
        </section>

      </article>

      <!-- H2* -->
      <article id="js4-item3" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">H2*</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5"></p>

        <!-- H3* -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>H3*</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para sub capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
          </div>

          <!-- H4* -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">H4*</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
          </article>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
        </section>

        <!-- H3* -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>H3*</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para sub capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
          </div>
          <!-- H4* -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">H4*</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
          </article>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"></p>
        </section>

      </article>

      <!-- Ejercicios -->
      <article id="js3-item" class="mt-4 p-6 bg-blue-50 dark:bg-blue-900/30 border rounded-lg">
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
            <a class="block font-mono text-base" href="#js2-item1"></a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item2"></a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item3"></a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item4"></a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item5"></a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item6">Ejercicios</a>
          </li>
        </ul>
      </div>
    </aside>
  </div>
</article>