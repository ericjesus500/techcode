<!-- Capitulo 4: Métodos y propiedades de los Strings -->
<hr>
<article id="cap4" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Métodos y propiedades de los Strings</h1>

      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mt-5 mb-4">En este capítulo se verán algunos de los métodos y propiedades más usados en Javascript.</p>

      <p class="mt-10 mb-4 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Propiedad Notable: length</p>

      <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300">Devuelve la longitud de la cadena en unidades de código UTF-16</p>

      <p class="mt-10 mb-4 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Métodos de Extracción</p>

      <div class="contenedor-listas">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">slice(start, end)</span>: Extrae una parte y devuelve una nueva cadena</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">substring(start, end)</span>: Similar a slice, pero no acepta índices negativos..</p>
          </li>
        </ul>
      </div>

      <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Métodos de Búsqueda e Inclusión</p>

      <div class="contenedor-listas">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">indexOf(substring) / lastIndexOf(substring)</span>: Devuelve el índice de la primera/última ocurrencia, o -1 si no se encuentra.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">includes(substring)</span>: Devuelve true si la cadena contiene la subcadena, false en caso contrario.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">startsWith(substring) / endsWith(substring)</span>: Comprueba si la cadena comienza/termina con una subcadena específica.</p>
          </li>
        </ul>
      </div>

      <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Métodos de Transformación</p>

      <div class="contenedor-listas">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">toUpperCase() / toLowerCase()</span>: Cambia el texto a mayúsculas/minúsculas.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">trim() / trimStart() / trimEnd()</span>: Elimina espacios en blanco del inicio/fin/ambos extremos.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">replace(sub, newSub) / replaceAll(sub, newSub)</span>: Reemplaza ocurrencias de una subcadena o expresión regular.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">concat(str2, ...)</span>: Combina dos o más cadenas (el operador + es más común).</p>
          </li>
        </ul>
      </div>

      <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Métodos de División</p>

      <div class="contenedor-listas">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">split(separator)</span>: Divide la cadena en un array de subcadenas usando un separador.</p>
          </li>
        </ul>
      </div>

      <!-- El método slice -->
      <article id="js3-item1" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">El método slice</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El método slice() es un método integrado en el prototipo de los objetos String en JavaScript, diseñado para extraer una sección de una cadena de texto y devolverla como una cadena nueva. Es una herramienta fundamental para manipular y segmentar texto.
          </p>
        </div>
        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Sintaxis</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              string.slice(startIndex[, endIndex])
            </code>
          </pre>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Donde:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">string</span>: Es la cadena original sobre la cual se invoca el método.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">startIndex (Obligatorio)</span>: El índice (posición) donde comienza la extracción. La extracción incluye el carácter en este índice.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">endIndex (Opcional)</span>: El índice donde termina la extracción. La extracción excluye el carácter en este índice. Si se omite, slice() extrae desde startIndex hasta el final de la cadena.</p>
            </li>
          </ul>
        </div>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Características Clave:</p>

        <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
          <li class="my-2 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span>Inmutabilidad: slice() no modifica la cadena original. Siempre devuelve una nueva cadena.</span></li>
          <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span>Indexación Basada en Cero: El primer carácter está en el índice 0.</span></li>
        </ul>

        <!-- Formas de Uso y Ejemplos Prácticos -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Formas de Uso y Ejemplos Prácticos</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El método slice() ofrece una gran flexibilidad al permitir índices positivos y negativos.</p>
          </div>

          <!-- Uso Básico: startIndex Positivo y endIndex Opcional -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso Básico: startIndex Positivo y endIndex Opcional</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Si se proporciona solo el <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">startIndex</code>, <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">slice()</code> copia todo lo que viene después de ese punto.</p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  const cadenaOriginal = "JavaScript es genial";

                  // 1. Extraer desde el índice 0 hasta el final
                  let resultado1 = cadenaOriginal.slice(0);
                  console.log(resultado1); // Output: "JavaScript es genial"

                  // 2. Extraer desde el índice 14 (la 'g') hasta el final
                  let resultado2 = cadenaOriginal.slice(14);
                  console.log(resultado2); // Output: "genial"

                  // 3. Extraer desde el índice 0 hasta el 10 (excluyendo el índice 10, que es el espacio)
                  let resultado3 = cadenaOriginal.slice(0, 10);
                  console.log(resultado3); // Output: "JavaScript"

                  // 4. Extraer la palabra "es" (índice 11 al 13)
                  let resultado4 = cadenaOriginal.slice(11, 13);
                  console.log(resultado4); // Output: "es"
                </code>
              </pre>
            </div>
          </article>

          <!-- Uso Avanzado: Índices Negativos -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso Avanzado: Índices Negativos</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Los índices negativos le permiten a <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">slice()</code> contar la posición desde el final de la cadena.</p>
            <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
              <li class="my-2 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>-1 es el último carácter.</span></li>
              <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>-2 es el penúltimo carácter.</span></li>
            </ul>
            <p class="ml-6 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Esto es muy útil para extraer los últimos caracteres sin saber la longitud exacta de la cadena.</p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  const nombreArchivo = "documento_secreto.pdf";

                  // 1. Extraer la extensión del archivo (los últimos 4 caracteres: ".pdf")
                  // Empieza 4 posiciones antes del final, y termina en el final implícito.
                  let extension = nombreArchivo.slice(-4);
                  console.log(extension); // Output: ".pdf"

                  // 2. Extraer solo el nombre base del archivo (todo excepto los últimos 4 caracteres)
                  // Empieza en 0 y termina 4 caracteres antes del final.
                  let nombreBase = nombreArchivo.slice(0, -4);
                  console.log(nombreBase); // Output: "documento_secreto"

                  // 3. Extraer los últimos 6 caracteres ("creto.pdf")
                  let ultimos6 = nombreArchivo.slice(-6);
                  console.log(ultimos6); // Output: "creto.pdf"
                </code>
              </pre>
            </div>
          </article>

          <!-- Comportamiento con Índices Inválidos o Fuera de Rango -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Comportamiento con Índices Inválidos o Fuera de Rango</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white"><code class="bg-gray-200 dark:text-pink-700 px-1 rounded">slice()</code> es flexible y maneja bien los índices que no son lógicos o que están fuera del rango de la cadena:</p>
            <div class="ml-6 contenedor-listas">
              <ul class="space-y-3">
                <li class="flex md:flex-col lg:flex-col">
                  <div class="flex md:flex-row lg:flex-row">
                    <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                      <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                      <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                      <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                    </svg>
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">startIndex mayor que endIndex</span>: Si el índice de inicio es mayor que el índice de fin, slice() simplemente devuelve una cadena vacía (""). No arroja un error.</p>
                  </div>
                  <div class="my-6 ml-10 overflow-x-auto">
                    <pre class="ind-pre rounded overflow-x-auto">
                      <code class="language-javascript">
                        const texto = "Hola";
                        let resultado = texto.slice(3, 1);
                        console.log(resultado); // Output: ""
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
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">startIndex negativo y mayor que endIndex positivo</span>: También devuelve una cadena vacía.</p>
                  </div>
                  <div class="my-6 ml-10 overflow-x-auto">
                    <pre class="ind-pre rounded overflow-x-auto">
                      <code class="language-javascript">
                        const texto2 = "abcd";
                        // Intenta ir desde 1 posición antes del final ('d') hasta el índice 1 ('b').
                        let resultado2 = texto2.slice(-1, 1);
                        console.log(resultado2); // Output: ""
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
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Índices fuera de rango</span>: Si un índice positivo es mayor que la longitud de la cadena, se trata como si fuera el índice final (el final de la cadena). Si un índice negativo es menor que la longitud negativa de la cadena, se trata como 0.</p>
                  </div>
                  <div class="my-6 ml-10 overflow-x-auto">
                    <pre class="ind-pre rounded overflow-x-auto">
                      <code class="language-javascript">
                        const fruta = "Manzana";
                        // Empieza en 0, termina mucho más allá del final. Funciona bien.
                        console.log(fruta.slice(0, 99)); // Output: "Manzana"
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>
          </article>

          <!-- Comparación con Métodos Similares -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Comparación con Métodos Similares</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Es importante diferenciar slice() de otros métodos de extracción:</p>
            <div class="overflow-x-aut mt-6">
              <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
                <thead class="text-blue-400">
                  <tr>
                    <th class="px-4 py-2 border border-gray-300">Método</th>
                    <th class="px-4 py-2 border border-gray-300">Acepta Índices Negativos </th>
                    <th class="px-4 py-2 border border-gray-300">Comportamiento start > end </th>
                    <th class="px-4 py-2 border border-gray-300">Propósito Principal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">slice()</td>
                    <td class="px-4 py-2 border border-gray-300">Sí</td>
                    <td class="px-4 py-2 border border-gray-300">Devuelve "" (cadena vacía)</td>
                    <td class="px-4 py-2 border border-gray-300">Extracción flexible</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">substring() </td>
                    <td class="px-4 py-2 border border-gray-300">No (los convierte a 0) </td>
                    <td class="px-4 py-2 border border-gray-300">Intercambia start y end </td>
                    <td class="px-4 py-2 border border-gray-300">Extracción simple</td>
                  </tr>
                  <tr class="text-sm font-mono">
                    <td class="px-4 py-2 border border-gray-300">substr() </td>
                    <td class="px-4 py-2 border border-gray-300">Sí (solo startIndex) </td>
                    <td class="px-4 py-2 border border-gray-300">Obsoleto/Deprecated</td>
                    <td class="px-4 py-2 border border-gray-300">Extracción por longitud</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white"><code class="bg-gray-200 dark:text-pink-700 px-1 rounded">slice()</code> es generalmente el método preferido debido a su manejo flexible de índices negativos y su comportamiento predecible.</p>
          </article>

        </section>
      </article>

      <!-- El método substring() -->
      <article id="js3-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">El método substring()</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El método <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">substring()</code> es un método del objeto String de JavaScript que se utiliza para extraer una porción de una cadena de texto, de manera similar a slice(), pero con un comportamiento distintivo en cuanto a la forma en que maneja los índices. </p>
        </div>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Sintaxis</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              string.substring(indexStart[, indexEnd])
            </code>
          </pre>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Donde:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">string</span>: La cadena original de la que se extraerá la subcadena.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">indexStart (Obligatorio)</span>: El índice del primer carácter a incluir en la subcadena resultante. Es un valor entero no negativo.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">indexEnd (Opcional)</span>: El índice del primer carácter que no se incluirá en la subcadena. La extracción se realiza hasta, pero sin incluir, este índice. Si se omite, substring() extrae desde indexStart hasta el final de la cadena.</p>
            </li>
          </ul>
        </div>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Características clave</p>
        <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
          <li class="my-2 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span>Inmutabilidad: Al igual que slice(), substring() devuelve una nueva cadena y no modifica la cadena original.</span></li>
          <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span>Indexación Basada en Cero: El primer carácter de la cadena tiene el índice 0.</span></li>
        </ul>

        <!-- Formas de Uso y Ejemplos Prácticos -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Formas de Uso y Ejemplos Prácticos</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El método substring() se utiliza principalmente con índices positivos, y su manejo de los argumentos es particularmente flexible.</p>
          </div>

          <!-- Uso Básico: indexStart y indexEnd -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso Básico: indexStart y indexEnd</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La forma más común de usar <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">substring()</code> es especificando un inicio y un fin, ambos positivos y en el orden correcto (inicio menor que fin).</p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  const frase = "Hola mundo, JavaScript";

                  // 1. Extraer desde el índice 0 hasta el 4 (excluyendo el índice 4, que es el espacio)
                  let parte1 = frase.substring(0, 4);
                  console.log(parte1); // Output: "Hola"

                  // 2. Extraer la palabra "mundo" (índice 5 al 10)
                  let parte2 = frase.substring(5, 10);
                  console.log(parte2); // Output: "mundo"

                  // 3. Extraer desde el índice 12 ('J') hasta el final (omitiendo indexEnd)
                  let parte3 = frase.substring(12);
                  console.log(parte3); // Output: "JavaScript"
                </code>
              </pre>
            </div>
          </article>

          <!-- Comportamiento con Índices Intercambiados (Flexibilidad) -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Comportamiento con Índices Intercambiados (Flexibilidad)</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Esta es la principal diferencia de substring() con respecto a slice(). Si indexStart es mayor que indexEnd, substring() automáticamente intercambia los dos argumentos antes de realizar la extracción, asegurando que el inicio siempre sea menor que el fin.</p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  const palabra = "programacion";

                  // Queremos extraer "grama" (índices 3 al 8)
                  let res1 = palabra.substring(3, 8);
                  console.log(res1); // Output: "grama"

                  // Intercambiamos los índices (8, 3)
                  // `substring` los trata internamente como (3, 8)
                  let res2 = palabra.substring(8, 3);
                  console.log(res2); // Output: "grama"
                </code>
              </pre>
            </div>
          </article>

          <!-- Manejo de Índices Negativos y Valores Inválidos -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Manejo de Índices Negativos y Valores Inválidos</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">El método substring() es estricto en el uso de valores enteros positivos.</p>
            <div class="ml-6 contenedor-listas">
              <ul class="space-y-3">
                <li class="flex flex-col">
                  <div class="flex">
                    <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                      <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                      <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                      <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                    </svg>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Valores Negativos: Cualquier índice negativo se trata como si fuera 0. No se cuenta desde el final de la cadena, a diferencia de slice()</p>
                  </div>
                  <div class="my-6 ml-10 overflow-x-auto">
                    <pre class="ind-pre rounded overflow-x-auto">
                      <code>
                        const datos = "Usuario: admin";

                        // Intentamos usar un índice negativo:
                        // -1 se convierte internamente a 0. La llamada real es substring(0, 7)
                        let sub = datos.substring(-1, 7);
                        console.log(sub); // Output: "Usuario"

                        // Si ambos son negativos, ambos se convierten a 0, resultando en cadena vacía:
                        let sub2 = datos.substring(-5, -2);
                        console.log(sub2); // Output: ""
                      </code>
                    </pre>
                  </div>
                </li>
                <li class="flex flex-col mt-10">
                  <div class="flex">
                    <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                      <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                      <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                      <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                    </svg>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Valores No Numéricos o NaN: Estos valores también se convierten a 0.</p>
                  </div>
                </li>
                <li class="flex flex-col mt-10">
                  <div class="flex">
                    <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                      <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                      <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                      <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                    </svg>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Valores Fuera de Rango: Los índices mayores que la longitud de la cadena se tratan como si fueran la longitud de la cadena.</p>
                  </div>
                </li>
              </ul>
            </div>
          </article>
        </section>

        <!-- Cuándo Usar substring() vs. slice() -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Cuándo Usar substring() vs. slice()</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Aunque ambos métodos parecen similares, la elección depende de cómo se espera manejar los errores de entrada o la necesidad de contar desde el final</p>
          </div>

          <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
            <li class="my-2 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-teal-500 text-lg"></i><span>Utilice slice() si necesita la funcionalidad de índices negativos (contar desde el final) o si prefiere que la función devuelva una cadena vacía cuando los argumentos están en un orden ilógico (start > end), lo cual puede ayudar a detectar errores de lógica en su código.</span></li>
            <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-teal-500 text-lg"></i><span>Utilice substring() si prefiere una función más "tolerante a errores" que automáticamente reordena los índices si están invertidos, y trata todos los índices negativos como 0.</span></li>
          </ul>
        </section>
      </article>

      <!-- El método indexOf() -->
      <article id="js3-item3" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">El método indexOf()</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El método <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">indexOf()</code> es un método fundamental de los String en JavaScript que busca una subcadena específica dentro de una cadena más grande y devuelve el índice (la posición) de la primera aparición que encuentra. Es una herramienta esencial para la búsqueda y validación de texto</p>
        </div>
        <p class="my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Sintaxis</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              string.indexOf(searchValue[, fromIndex])
            </code>
          </pre>
        </div>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Donde:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">string</span>: La cadena original sobre la cual se realiza la búsqueda.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">searchValue (Obligatorio)</span>: La subcadena (carácter o secuencia de caracteres) que se busca.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">fromIndex (Opcional)</span>: Un índice entero que especifica la posición a partir de la cual comenzar la búsqueda. Si se omite, la búsqueda comienza desde el principio (índice 0). </p>
            </li>
          </ul>
        </div>
        <p class="my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Valor de Retorno:</p>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">El comportamiento del valor devuelto es crucial para la lógica. El método indexOf() devuelve un valor numérico: </p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Si la subcadena es encontrada</span>: devuelve el índice (un número entero no negativo) de la primera aparición del primer carácter de la subcadena encontrada.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Si la subcadena no es encontrada</span>: devuelve -1.</p>
            </li>
          </ul>
        </div>

        <!-- Formas de Uso y Ejemplos Prácticos -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Formas de Uso y Ejemplos Prácticos</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El indexOf() es sensible a mayúsculas y minúsculas (case-sensitive) y realiza la búsqueda de izquierda a derecha.</p>
          </div>

          <!-- Búsqueda Básica de una Subcadena -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Búsqueda Básica de una Subcadena</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">En su forma más simple, se busca la primera aparición de un valor</p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  const mensaje = "La programación es divertida. La programación es arte.";

                  // Encontrar la primera aparición de "programación"
                  let indice1 = mensaje.indexOf("programación");
                  console.log(indice1); // Output: 3 (Comienza en el índice 3)

                  // Encontrar la primera aparición de una letra
                  let indice2 = mensaje.indexOf("e");
                  console.log(indice2); // Output: 12 (La primera 'e' de "es")

                  // Búsqueda sensible a mayúsculas: "Programación" con P mayúscula no se encuentra
                  let indice3 = mensaje.indexOf("Programación");
                  console.log(indice3); // Output: -1
                </code>
              </pre>
            </div>
          </article>

          <!-- Uso del Parámetro Opcional fromIndex (Inicio de Búsqueda) -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso del Parámetro Opcional fromIndex (Inicio de Búsqueda)</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Se puede especificar un punto de inicio para la búsqueda, lo cual es útil si se quiere encontrar apariciones subsiguientes.</p>
            <div class="ml-6 mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  const cadena = "Banana, Manzana, Pera, Banana";

                  // Encontrar la primera "Banana"
                  let primeraBanana = cadena.indexOf("Banana");
                  console.log(primeraBanana); // Output: 0

                  // Encontrar la *segunda* "Banana"
                  // Iniciamos la búsqueda después del índice de la primera + su longitud (6 caracteres)
                  let inicioSegundaBusqueda = primeraBanana + "Banana".length; // 0 + 6 = 6
                  let segundaBanana = cadena.indexOf("Banana", inicioSegundaBusqueda);
                  console.log(segundaBanana); // Output: 23

                  // Intentar buscar "Fresa" a partir del índice 10. No existe en absoluto.
                  let fresa = cadena.indexOf("Fresa", 10);
                  console.log(fresa); // Output: -1
                </code>
              </pre>
            </div>
          </article>

          <!-- Verificar la Existencia de una Subcadena -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Verificar la Existencia de una Subcadena</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">El uso más común de <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">indexOf()</code> es para verificar si una cadena contiene cierta subcadena. La clave es comprobar si el resultado es diferente de -1.</p>
          </article>
        </section>
      </article>

      <!-- El método lastIndexOf() -->
      <article id="js3-item4" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">El método lastIndexOf()</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El método lastIndexOf() en JavaScript busca la última aparición de una subcadena dentro de una cadena principal y devuelve el índice donde comienza esa aparición. Es similar a indexOf(), pero su dirección de búsqueda es opuesta, comenzando desde el final de la cadena hacia el principio.</p>
        </div>
        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Sintaxis</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              string.lastIndexOf(searchValue[, fromIndex])
            </code>
          </pre>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Donde:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">string</span>: La cadena principal en la que se realiza la búsqueda.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">searchValue (Obligatorio)</span>: La subcadena (string) que se busca dentro de la cadena principal.</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">fromIndex (Opcional)</span>: Un índice que especifica la posición máxima desde la cual comenzar la búsqueda hacia atrás. El valor por defecto es Infinity (infinito positivo), lo que significa que, por defecto, se busca en toda la cadena.</p>
            </li>
          </ul>
        </div>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Valor de Retorno</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Devuelve el índice (basado en cero) de la última aparición de searchValue.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Si searchValue no se encuentra, devuelve -1.</p>
            </li>
          </ul>
        </div>

        <!-- Uso Básico (Búsqueda Completa) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Uso Básico (Búsqueda Completa)</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Cuando se usa sin el argumento opcional fromIndex, lastIndexOf() busca en toda la cadena y encuentra la última ocurrencia.</p>
          </div>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                const texto = "El método lastIndexOf es un método de cadena. Es útil.";

                // Encontrar la última aparición de "método"
                let indice1 = texto.lastIndexOf("método");
                console.log(indice1); // Output: 24
                // La primera aparición de "método" está en el índice 3.

                // Encontrar la última aparición de una vocal simple, por ejemplo 'e'
                let indice2 = texto.lastIndexOf("e");
                console.log(indice2); // Output: 52 (la última 'e' en "útil" o justo antes del punto)

                // Búsqueda de una subcadena que no existe
                let indice3 = texto.lastIndexOf("inexistente");
                console.log(indice3); // Output: -1
              </code>
            </pre>
          </div>
        </section>

        <!-- Uso con el Parámetro fromIndex -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Uso con el Parámetro fromIndex</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El parámetro fromIndex define un "techo" o límite superior para la búsqueda. La búsqueda se realiza desde fromIndex hacia el principio de la cadena (hacia el índice 0).</p>
          </div>

          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                const data = "manzana, banana, manzana, pera, banana";
                // Índices:   0123456789012345678901234567890123456

                // 1. Encontrar la última "banana" en toda la cadena
                let lastBanana = data.lastIndexOf("banana");
                console.log(lastBanana); // Output: 30

                // 2. Encontrar la última "banana" buscando *antes* del índice 20
                // La búsqueda se limita al segmento "manzana, banana, manzana, pera"
                let bananaAntesDe20 = data.lastIndexOf("banana", 20);
                console.log(bananaAntesDe20); // Output: 9 (la primera banana)

                // 3. Encontrar "manzana" antes del índice 10
                // La búsqueda se limita al segmento "manzana, ba"
                let manzanaAntesDe10 = data.lastIndexOf("manzana", 10);
                console.log(manzanaAntesDe10); // Output: 0
              </code>
            </pre>
          </div>
        </section>

        <!-- Manejo de Casos Especiales -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Manejo de Casos Especiales</span></h3>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-col lg:flex-col">
                <div class="flex md:flex-row lg:flex-row">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Sensibilidad a mayúsculas y minúsculas</span>: El método es sensible a mayúsculas y minúsculas.</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="ind-pre rounded overflow-x-auto">
                    <code class="language-javascript">
                      const animal = "Blue Whale, Killer Whale";
                      console.log(animal.lastIndexOf("Whale")); // Output: 15 (la segunda)
                      console.log(animal.lastIndexOf("whale")); // Output: -1 (no encuentra "whale" en minúsculas)
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
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">fromIndex mayor o igual a la longitud</span>: Si <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">fromIndex</code> es mayor o igual que la longitud de la cadena, se busca en toda la cadena (igual que si se omitiera el argumento)</p>
                </div>
              </li>
              <li class="flex md:flex-col lg:flex-col">
                <div class="flex md:flex-row lg:flex-row">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">fromIndex negativo</span>: Si fromIndex es negativo, se comporta como si fuera 0, limitando la búsqueda solo al inicio de la cadena, lo cual generalmente resulta en -1 a menos que la subcadena esté exactamente al principio.</p>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- Uso Práctico Común: Analizar Extensiones de Archivos -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Uso Práctico Común: Analizar Extensiones de Archivos</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Un uso muy común de lastIndexOf() es encontrar la posición del último punto (.) en un nombre de archivo para extraer la extensión.</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                const archivo1 = "reporte.proyecto.final.pdf";
                const archivo2 = "imagen.jpg";

                // Encontrar el índice del ÚLTIMO punto
                const indiceUltimoPunto1 = archivo1.lastIndexOf(".");
                const indiceUltimoPunto2 = archivo2.lastIndexOf(".");

                // Usar slice para extraer el texto después de ese punto
                const extension1 = archivo1.slice(indiceUltimoPunto1 + 1);
                const extension2 = archivo2.slice(indiceUltimoPunto2 + 1);

                console.log(extension1); // Output: "pdf"
                console.log(extension2); // Output: "jpg"
              </code>
            </pre>
          </div>
        </section>
      </article>

      <!-- Métodos de Extracción y búsqueda -->
      <article id="js3-item5" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Métodos de Extracción</h2>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Los más usados son:</p>

        <!-- charAt(pos) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>charAt(pos)</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Devuelve el carácter en la posición pos.</p>
          </div>

          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let str = "Hola";
                console.log(str.charAt(1));// "o"
              </code>
            </pre>
          </div>
        </section>

        <!-- at(indice)(ES2022) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>at(indice)(ES2022)</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Permite acceder al carácter en la posición, también acepta índices negativos</p>
          </div>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let str ="Hola";
                console.log(str.at(-1)); // "a"
              </code>
            </pre>
          </div>
        </section>
      </article>

      <!-- El método includes() -->
      <article id="js3-item6" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">El método includes()<h2>
            <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
              <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El método includes() es una función integrada en el prototipo de los objetos String que permite verificar si una subcadena (substring) existe dentro de otra cadena. La respuesta siempre es un valor booleano (true o false).</p>
            </div>

            <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Sintaxis</p>
            <div class="mt-10 overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-javascript">
                  cadena.includes(busqueda[, posicion])
                </code>
              </pre>
            </div>

            <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Donde:</p>
            <div class="contenedor-listas">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">cadena</span>: Es la cadena original en la que quieres buscar.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">busqueda</span>: Es la subcadena (string) que quieres encontrar.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">posicion (opcional)</span>: Es el índice desde donde se empieza a buscar dentro de la cadena. Si se omite, la búsqueda comienza desde el inicio.</p>
                </li>
              </ul>
            </div>

            <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Características Claves</p>
            <div class="contenedor-listas">
              <ul class="space-y-3">
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Case sensitive</span>: Distingue entre mayúsculas y minúsculas.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Valor de retorno</span>: Devuelve true si la subcadena se encuentra; sino, false.</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Uso de el parámetro posicion</span>: La búsqueda considera a partir de la posición indicada (si se proporciona).</p>
                </li>
                <li class="flex md:flex-row lg:flex-row">
                  <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Compatibilidad</span>: Nativo en todos los navegadores modernos desde ECMAScript 2015 (ES6)..</p>
                </li>
              </ul>
            </div>

            <!-- Ejemplos completos de uso -->
            <section class="my-14">
              <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Ejemplos completos de uso</span></h3>

              <!-- Ejemplo simple -->
              <article class="mt-10">
                <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Ejemplo simple</h4>
                <div class="mt-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      let mensaje = "Bienvenido al curso de JavaScript";
                      console.log(mensaje.includes("curso"));      // true
                      console.log(mensaje.includes("Curso"));      // false (Mayúscula/minúscula importa)
                      console.log(mensaje.includes("Java"));       // true
                      console.log(mensaje.includes("Python"));     // false
                    </code>
                  </pre>
                </div>
              </article>

              <!-- Uso del segundo parámetro (posición) -->
              <article class="mt-10">
                <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso del segundo parámetro (posición)</h4>
                <div class="mt-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      let frase = "Aprender es mejorar";

                      console.log(frase.includes("es"));                 // true
                      console.log(frase.includes("es", 10));             // false, porque "es" está antes del índice 10
                      console.log(frase.includes("mejorar", 10));        // true, "mejorar" aparece a partir del índice 10
                    </code>
                  </pre>
                </div>
              </article>

              <!-- Uso en condicionales -->
              <article class="mt-10">
                <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso en condicionales</h4>
                <div class="mt-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      let correo = "ejemplo@dominio.com";

                      if (correo.includes("@")) {
                        console.log("El correo es válido");
                      } else {
                        console.log("El correo es inválido");
                      }
                      // Salida: El correo es válido
                    </code>
                  </pre>
                </div>
              </article>

              <!-- Distingue mayúsculas y minúsculas -->
              <article class="mt-10">
                <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Distingue mayúsculas y minúsculas</h4>
                <div class="mt-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      let texto = "JavaScript es divertido";

                      console.log(texto.includes("javascript"));   // false
                      console.log(texto.includes("JavaScript"));   // true
                    </code>
                  </pre>
                </div>
              </article>

              <!-- Búsqueda en cadenas formateadas -->
              <article class="mt-10">
                <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Búsqueda en cadenas formateadas</h4>
                <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Puedes usar .includes() después de transformar una cadena a minúsculas o mayúsculas para una búsqueda más "amigable":</p>
                <div class="mt-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      let userInput = "Hola Mundo";
                      if (userInput.toLowerCase().includes("mundo")) {
                        console.log("Contiene la palabra 'mundo'");
                      }
                    </code>
                  </pre>
                </div>
              </article>

              <!-- Uso en validaciones y filtros -->
              <article class="mt-10">
                <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso en validaciones y filtros</h4>
                <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ideal para buscar palabras clave o filtrar arreglos:</p>
                <div class="mt-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      let productos = ["manzana", "banana", "pera"];
                      let existePera = productos.join(",").includes("pera"); // true

                      // Filtro de array:
                      let frutasConA = productos.filter(fruta => fruta.includes("a"));
                      console.log(frutasConA); // ["manzana", "banana"]
                    </code>
                  </pre>
                </div>
              </article>

              <!-- Uso dentro de bucles o funciones -->
              <article class="mt-10">
                <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Uso dentro de bucles o funciones</h4>
                <div class="mt-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      function contieneProhibido(texto) {
                        let palabrasProhibidas = ["prohibido", "confidencial"];
                        for (let palabra of palabrasProhibidas) {
                          if (texto.includes(palabra)) return true;
                        }
                        return false;
                      }
                    </code>
                  </pre>
                </div>
              </article>

            </section>

            <!-- Buenas prácticas y recomendaciones -->
            <section class="my-14">
              <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Buenas prácticas y recomendaciones</span></h3>

              <div class="contenedor-listas">
                <ul class="space-y-3">
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Usa <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">.includes()</code> para comprobaciones simples de existencia de subcadenas, pero si necesitas posiciones exactas utiliza <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">indexOf()</code>.</p>
                  </li>
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Aplica <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">toLowerCase()/toUpperCase()</code> si quieres hacer una búsqueda insensible a mayúsculas/minúsculas.</p>
                  </li>
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Evita usar <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">.includes()</code> para patrones complejos o expresiones regulares, usa RegExp para ello.</p>
                  </li>
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Funciona también en arrays, pero en ese caso busca elementos (no subcadenas).</p>
                  </li>
                </ul>
              </div>
            </section>

            <!-- Diferencia con otros métodos -->
            <section class="my-14">
              <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Diferencia con otros métodos</span></h3>
              <div class="contenedor-listas">
                <ul class="space-y-3">
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">indexOf()</span>: devuelve la posición (o -1 si no existe), mientras que <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">.includes()</code> solo retorna true o false.</p>
                  </li>
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">• startsWith()/endsWith()</span>: validan si la cadena comienza/termina con una subcadena exacta.</p>
                  </li>
                  </li>
                </ul>
              </div>
            </section>

            <section class="my-14">
              <div class="p-6 bg-blue-50 dark:bg-yellow-50 rounded-lg">
                <h4 class="font-mono font-bold text-2xl text-blue-800 dark:text-blue-600 mb-2">Resumen</h4>
                <p class="font-medium text-lg text-gray-600 dark:text-dark-800 mb-4">El método <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">.includes()</code> es uno de los más prácticos y eficientes para comprobar la existencia de una subcadena en JavaScript. Es ideal para validaciones, filtros y comprobaciones rápidas</p>
              </div>
            </section>

      </article>

      <!-- H2* -->
      <article id="js3-item6" class="p-6">
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
      <article id="js3-item6" class="p-6">
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
      <article id="js3-item6" class="p-6">
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
            <a class="block font-mono text-base" href="#js3-item1">El método slice</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item2">El método substring()</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item3">El método indexOf()</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item4">El método lastIndexOf()</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item5"></a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item6">Ejercicios</a>
          </li>
        </ul>
      </div>
    </aside>
  </div>
</article>