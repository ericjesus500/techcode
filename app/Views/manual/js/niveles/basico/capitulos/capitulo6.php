<!-- Capitulo 6: Operadores Básicos en JavaScript -->
<hr>
<article id="cap6" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Operadores Básicos en JavaScript</h1>

      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mt-5 mb-4">Los operadores son símbolos especiales que actúan sobre valores y variables para realizar diferentes operaciones matemáticas, comparar datos, asignar valores, y manipular datos de diversas formas.</p>

      <!-- Operadores Aritméticos -->
      <article id="js5-item1" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Operadores Aritméticos</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Se usan para realizar cálculos matemáticos.</p>
        </div>
        <div class="overflow-x-aut mt-6">
          <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
            <thead class="text-blue-400">
              <tr>
                <th class="px-4 py-2 border border-gray-300">Operador</th>
                <th class="px-4 py-2 border border-gray-300">Significado</th>
                <th class="px-4 py-2 border border-gray-300">Ejemplo</th>
                <th class="px-4 py-2 border border-gray-300">Resultado</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">+</td>
                <td class="px-4 py-2 border border-gray-300">Suma</td>
                <td class="px-4 py-2 border border-gray-300">5 + 3 </td>
                <td class="px-4 py-2 border border-gray-300">8</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">-</td>
                <td class="px-4 py-2 border border-gray-300">Resta</td>
                <td class="px-4 py-2 border border-gray-300">10 - 7</td>
                <td class="px-4 py-2 border border-gray-300">3</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">*</td>
                <td class="px-4 py-2 border border-gray-300">Multiplicación</td>
                <td class="px-4 py-2 border border-gray-300">4 * 6</td>
                <td class="px-4 py-2 border border-gray-300">24</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">/</td>
                <td class="px-4 py-2 border border-gray-300">División</td>
                <td class="px-4 py-2 border border-gray-300">20/4</td>
                <td class="px-4 py-2 border border-gray-300">5</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">%</td>
                <td class="px-4 py-2 border border-gray-300">Módulo (resto)</td>
                <td class="px-4 py-2 border border-gray-300">10 % 3</td>
                <td class="px-4 py-2 border border-gray-300">1</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">**</td>
                <td class="px-4 py-2 border border-gray-300">Exponenciación</td>
                <td class="px-4 py-2 border border-gray-300">2**3</td>
                <td class="px-4 py-2 border border-gray-300">8</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Ejemplo completo</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let a = 12, b = 5;

              console.log(a + b); // 17
              console.log(a - b); // 7
              console.log(a * b); // 60
              console.log(a / b); // 2.4
              console.log(a % b); // 2
              console.log(a ** b); // 248832 (equivale a 12 elevado a 5)
            </code>
          </pre>
        </div>
      </article>

      <!-- Operadores de Asignación -->
      <article id="js5-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Operadores de Asignación</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Permiten asignar y actualizar valores en variables.</p>
        </div>

        <div class="overflow-x-aut mt-6">
          <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
            <thead class="text-blue-400">
              <tr>
                <th class="px-4 py-2 border border-gray-300">Operador</th>
                <th class="px-4 py-2 border border-gray-300">Significado</th>
                <th class="px-4 py-2 border border-gray-300">Ejemplo</th>
                <th class="px-4 py-2 border border-gray-300">Resultado</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">=</td>
                <td class="px-4 py-2 border border-gray-300">Asignación</td>
                <td class="px-4 py-2 border border-gray-300">x = 3</td>
                <td class="px-4 py-2 border border-gray-300">x es 3</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">+=</td>
                <td class="px-4 py-2 border border-gray-300">Suma y asigna</td>
                <td class="px-4 py-2 border border-gray-300">x += 2 </td>
                <td class="px-4 py-2 border border-gray-300">x = x + 2</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">-=</td>
                <td class="px-4 py-2 border border-gray-300">Resta y asigna</td>
                <td class="px-4 py-2 border border-gray-300">y -= 5</td>
                <td class="px-4 py-2 border border-gray-300">y = y - 5</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">*=</td>
                <td class="px-4 py-2 border border-gray-300">Multiplica y asigna</td>
                <td class="px-4 py-2 border border-gray-300">z *= 4</td>
                <td class="px-4 py-2 border border-gray-300">z = z * 4</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">/=</td>
                <td class="px-4 py-2 border border-gray-300">Divide y asigna</td>
                <td class="px-4 py-2 border border-gray-300">a /= 3</td>
                <td class="px-4 py-2 border border-gray-300">a = a / 3</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">%=</td>
                <td class="px-4 py-2 border border-gray-300">Módulo y asigna</td>
                <td class="px-4 py-2 border border-gray-300">b %= 2</td>
                <td class="px-4 py-2 border border-gray-300">b = b % 2</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplo completo:</p>

        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let x = 10;
              x += 3; // x es ahora 13
              x -= 2; // x es ahora 11
              x *= 2; // x es ahora 22
              x /= 2; // x es ahora 11
              x %= 4; // x es ahora 3
              console.log(x); // 3
            </code>
          </pre>
        </div>
      </article>

      <!-- Operadores de Comparación -->
      <article id="js5-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Operadores de Comparación</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Sirven para comparar valores y devuelven un resultado booleano (true o false).</p>
        </div>

        <div class="overflow-x-aut mt-6">
          <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
            <thead class="text-blue-400">
              <tr>
                <th class="px-4 py-2 border border-gray-300">Operador</th>
                <th class="px-4 py-2 border border-gray-300">Significado</th>
                <th class="px-4 py-2 border border-gray-300">Ejemplo</th>
                <th class="px-4 py-2 border border-gray-300">Resultado</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">==</td>
                <td class="px-4 py-2 border border-gray-300">Igualdad (sin tipo)</td>
                <td class="px-4 py-2 border border-gray-300">5 == "5"</td>
                <td class="px-4 py-2 border border-gray-300">true</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">===</td>
                <td class="px-4 py-2 border border-gray-300">Igualdad estricta (tipo) </td>
                <td class="px-4 py-2 border border-gray-300">5 === "5"</td>
                <td class="px-4 py-2 border border-gray-300">false</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">!=</td>
                <td class="px-4 py-2 border border-gray-300">Desigualdad (sin tipo)</td>
                <td class="px-4 py-2 border border-gray-300">7 != "7"</td>
                <td class="px-4 py-2 border border-gray-300">false</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">!==</td>
                <td class="px-4 py-2 border border-gray-300">Desigualdad estricta</td>
                <td class="px-4 py-2 border border-gray-300">7 !== "7"</td>
                <td class="px-4 py-2 border border-gray-300">true</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300"> &lt; </td>
                <td class="px-4 py-2 border border-gray-300">Menor que</td>
                <td class="px-4 py-2 border border-gray-300">3 &lt; 4</td>
                <td class="px-4 py-2 border border-gray-300">true</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300"> &gt; </td>
                <td class="px-4 py-2 border border-gray-300">Mayor que</td>
                <td class="px-4 py-2 border border-gray-300">10 &gt; 2 </td>
                <td class="px-4 py-2 border border-gray-300">true</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300"> &lt;= </td>
                <td class="px-4 py-2 border border-gray-300">Menor o igual que</td>
                <td class="px-4 py-2 border border-gray-300">5 &lt;= 5 </td>
                <td class="px-4 py-2 border border-gray-300">true</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300"> &gt;= </td>
                <td class="px-4 py-2 border border-gray-300">Mayor o igual que</td>
                <td class="px-4 py-2 border border-gray-300">3 &gt;= 7 </td>
                <td class="px-4 py-2 border border-gray-300">false</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Ejemplo completo</p>

        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let edad = 20;
              console.log(edad == '20');    // true (compara valor, no tipo)
              console.log(edad === '20');   // false (compara valor y tipo)
              console.log(edad != 25);      // true
              console.log(edad !== '20');   // true
              console.log(edad >= 18);      // true
            </code>
          </pre>
        </div>
      </article>

      <!-- Operadores de Incremento y Decremento -->
      <article id="js5-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Operadores de Incremento y Decremento</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Sirven para aumentar o disminuir el valor de una variable en 1.</p>
        </div>

        <div class="overflow-x-aut mt-6">
          <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
            <thead class="text-blue-400">
              <tr>
                <th class="px-4 py-2 border border-gray-300">Operador</th>
                <th class="px-4 py-2 border border-gray-300">Significado</th>
                <th class="px-4 py-2 border border-gray-300">Ejemplo</th>
                <th class="px-4 py-2 border border-gray-300">Resultado</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">++</td>
                <td class="px-4 py-2 border border-gray-300">Incremento</td>
                <td class="px-4 py-2 border border-gray-300">a++</td>
                <td class="px-4 py-2 border border-gray-300">a = a + 1</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">**</td>
                <td class="px-4 py-2 border border-gray-300">Decremento</td>
                <td class="px-4 py-2 border border-gray-300">b--</td>
                <td class="px-4 py-2 border border-gray-300">b = b - 1</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Ejemplo</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let i = 5;
              i++;
              console.log(i); // 6
              i--;
              console.log(i); // 5

              // Diferencia entre postfijo y prefijo
              let n = 10;
              console.log(n++); // imprime 10, luego n es 11
              console.log(++n); // primero aumenta a 12, luego imprime 12
            </code>
          </pre>
        </div>
      </article>

      <!-- Operadores Lógicos -->
      <article id="js5-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Operadores Lógicos</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Permiten realizar operaciones lógica booleana.</p>
        </div>

        <div class="overflow-x-aut mt-6">
          <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
            <thead class="text-blue-400">
              <tr>
                <th class="px-4 py-2 border border-gray-300">Operador</th>
                <th class="px-4 py-2 border border-gray-300">Significado</th>
                <th class="px-4 py-2 border border-gray-300">Ejemplo</th>
                <th class="px-4 py-2 border border-gray-300">Resultado</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">&&</td>
                <td class="px-4 py-2 border border-gray-300">Y lógico</td>
                <td class="px-4 py-2 border border-gray-300">true && false</td>
                <td class="px-4 py-2 border border-gray-300">false</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">||</td>
                <td class="px-4 py-2 border border-gray-300">OR lógico</td>
                <td class="px-4 py-2 border border-gray-300">true || false</td>
                <td class="px-4 py-2 border border-gray-300">true</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">!</td>
                <td class="px-4 py-2 border border-gray-300">Negación lógico</td>
                <td class="px-4 py-2 border border-gray-300">!true</td>
                <td class="px-4 py-2 border border-gray-300">false</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Ejemplo completo</p>

        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let esFrio = true;
              let esLluvia = false;

              if (esFrio && esLluvia) {
                console.log("Usa paraguas y abrigo");
              } else if (esFrio || esLluvia) {
                console.log("Precaución, clima no ideal");
              } else {
                console.log("Buen clima");
              }

              console.log(!esFrio); // false
            </code>
          </pre>
        </div>
      </article>

      <!-- Operador de Concatenación -->
      <article id="js5-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Operador de Concatenación</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Especialmente en cadenas de texto, se usa + para unir strings.</p>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Ejemplo</p>

        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let nombre = "Ana";
              let saludo = "Hola, " + nombre + "!";
              console.log(saludo); // Hola, Ana!
            </code>
          </pre>
        </div>
      </article>

      <!-- Operador Ternario -->
      <article id="js5-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Operador Ternario</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Permite tomar decisiones de forma compacta.</p>
        </div>
        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Sintaxis</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let edad = 16;
              let mensaje = edad >= 18 ? "Mayor de edad" : "Menor de edad";
              console.log(mensaje); // Menor de edad
            </code>
          </pre>
        </div>
      </article>

      <!--  Otros Operadores Especiales -->
      <article id="js5-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400"> Otros Operadores Especiales</h2>

        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-col lg:flex-col">
              <div class="flex md:flex-row lg:flex-row">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">typeof</span>: para obtener el tipo de una variable</p>
              </div>
              <div class="my-6 ml-10 overflow-x-auto">
                <pre class="ind-pre rounded overflow-x-auto">
                  <code class="language-javascript">
                    let x = "hola";
                    console.log(typeof x); // "string"
                  </code>
                </pre>
              </div>
            </li>
            <li class="flex md:flex-col lg:flex-col">
              <div class="flex md:flex-row lg:flex-row">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">instanceof</span>: para comprobar si un objeto es instancia de un tipo</p>
              </div>
              <div class="my-6 ml-10 overflow-x-auto">
                <pre class="ind-pre rounded overflow-x-auto">
                  <code class="language-javascript">
                    let fecha = new Date();
                    console.log(fecha instanceof Date); // true
                  </code>
                </pre>
              </div>
            </li>
          </ul>
        </div>
      </article>

      <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Resumen visual</p>

      <div class="mt-10 overflow-x-auto">
        <pre class="rounded overflow-x-auto">
          <code class="language-javascript">
            // Ejemplo usando diversos operadores
            let a = 5, b = "5";
            console.log(a == b);     // true
            console.log(a === b);    // false
            console.log(a + 2);      // 7
            console.log(a > 10);     // false
            console.log(a <= 5);     // true

            let esValido = (a < 10) && (b == 5);
            console.log(esValido);   // true

            let tipo = typeof b;
            console.log(tipo);       // "string"

            let mensaje = a % 2 === 0 ? "Par" : "Impar";
            console.log(mensaje);    // Impar
          </code>
        </pre>
      </div>

      <!-- Ejercicios -->
      <article id="js4-item" class="mt-4 p-6 bg-blue-50 dark:bg-blue-900/30 border rounded-lg">
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