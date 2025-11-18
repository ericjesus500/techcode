<!-- Capitulo 3: STRINGS -->
<hr>
<article id="cap3" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: STRINGS</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mt-5 mb-4">Un string en JavaScript es una secuencia de caracteres utilizada para almacenar y manipular texto. Es uno de los tipos de datos primitivos más comunes y esenciales en programación</p>

      <!-- Aspectos Generales -->
      <article id="js3-item1" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Aspectos Generales</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El tipo de dato String en JavaScript representa datos textuales. Su diseño y comportamiento tienen matices importantes relacionados con la inmutabilidad, la codificación Unicode (UTF-16) y la diferencia sutil entre primitivos y objetos.</p>
        </div>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Un string representa texto y puede contener letras, números, símbolos y espacios.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Puede crearse usando comillas simples ('texto'), dobles ("texto") o invertidas (texto, para plantillas y expresiones).</p>
            </li>
            <li class="flex flex-col">
              <div class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">Se puede declarar de manera literal o como objeto:</p>
              </div>
              <div class="ml-10 my-5">
                <ul class="space-y-3">
                  <li class="flex md:flex-row lg:flex-row"><i class="bi bi-check-all px-2 dark:text-orange-500 text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Literal: const saludo = "Hola";</p>
                  </li>
                  <li class="flex md:flex-row lg:flex-row"><i class="bi bi-check-all px-2 dark:text-orange-500 text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Objeto: const saludoObj = new String("Hola"); (no es recomendable salvo casos particulares).</p>
                  </li>
                </ul>
              </div>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Los strings tienen una propiedad importante llamada .length, que indica la cantidad de caracteres.</p>
            </li>
          </ul>
        </div>

        <!-- Formas de creación -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Formas de creación</span></h3>

          <!-- Literales (primitivos) -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Literales (primitivos)</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La forma más común y recomendada, utilizando comillas simples, dobles o invertidas (backticks).</p>
            <div class="my-6 ml-10 overflow-x-auto">
              <pre class="ind-pre rounded overflow-x-auto">
                <code class="language-javascript">
                  let nombre1 = 'Juan';
                  let nombre2 = "Pérez";
                  let saludo = `Hola, ${nombre1}`; // Uso de template literals
                </code>
              </pre>
            </div>
          </article>

          <!-- Objeto String -->
          <article class="mt-10">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Objeto String</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Se crea usando el constructor String() con la palabra clave new. Esto crea un objeto, no un valor primitivo, lo cual tiene implicaciones de comportamiento y rendimiento.</p>
            <div class="my-6 ml-10 overflow-x-auto">
              <pre class="ind-pre rounded overflow-x-auto">
                <code class="language-javascript">
                  let strPrimitivo = "abc";
                  let strObjeto = new String("abc");

                  console.log(typeof strPrimitivo); // "string"
                  console.log(typeof strObjeto); // "object"
                </code>
              </pre>
            </div>
          </article>
        </section>

        <!-- Diferencias entre un string primitivo y objeto String -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Diferencias entre un string primitivo y objeto String</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">La diferencia principal entre un string primitivo y un objeto String en JavaScript radica en su naturaleza y tratamiento dentro del lenguaje.</p>
          </div>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">El string primitivo </span>: es un tipo de dato básico que almacena texto directamente, por ejemplo: "hola"; siempre será del tipo "string" y se utiliza para la mayoría de operaciones.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">El objeto String</span>: se crea de forma explícita usando la palabra clave new, por ejemplo: new String("hola"); su tipo es "object" y no se recomienda salvo casos muy específicos, por ejemplo, cuando se necesita usar propiedades especiales del objeto.</p>
              </li>
            </ul>
          </div>
          <div class="overflow-x-aut mt-10">
            <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
              <thead class="text-blue-400">
                <tr>
                  <th class="px-4 py-2 border border-gray-300">Característica</th>
                  <th class="px-4 py-2 border border-gray-300">String primitivo</th>
                  <th class="px-4 py-2 border border-gray-300">Objeto String</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm font-mono">
                  <td class="px-4 py-2 border border-gray-300">Sintaxis</td>
                  <td class="px-4 py-2 border border-gray-300">let ejemplo = "texto"</td>
                  <td class="px-4 py-2 border border-gray-300">let ejemploObj = new String("texto")</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td class="px-4 py-2 border border-gray-300">Tipo</td>
                  <td class="px-4 py-2 border border-gray-300">"string"</td>
                  <td class="px-4 py-2 border border-gray-300">"object"</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td class="px-4 py-2 border border-gray-300">Uso habitual</td>
                  <td class="px-4 py-2 border border-gray-300">Representa y manipula texto</td>
                  <td class="px-4 py-2 border border-gray-300">Evitar salvo que se requiera un objeto explícito</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td class="px-4 py-2 border border-gray-300">Uso habitual</td>
                  <td class="px-4 py-2 border border-gray-300">Representa y manipula texto</td>
                  <td class="px-4 py-2 border border-gray-300">Evitar salvo que se requiera un objeto explícito</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td class="px-4 py-2 border border-gray-300">Comparación</td>
                  <td class="px-4 py-2 border border-gray-300">"texto" === "texto" ⇒ true</td>
                  <td class="px-4 py-2 border border-gray-300">new String("texto") === "texto" ⇒ false</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Aspectos técnicos -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Aspectos técnicos</span></h3>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">JavaScript permite usar métodos de String incluso con valores primitivos; esto es posible porque el motor envuelve temporalmente el string primitivo en un objeto String para la llamada al método, y luego lo descarta..</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">La comparación entre un string primitivo y un objeto String usando == puede resultar en true por conversión implícita, pero con === siempre será false por diferencia de tipo.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">Los strings primitivos son inmutables, mientras que los objetos pueden tener métodos, propiedades o comportamientos distintos, aunque ambos permiten manipulación textual.</p>
              </li>
            </ul>
          </div>

          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplo práctico</p>

          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let primitivo = "peru"; 
                let objeto = new String("peru"); 

                console.log(typeof primitivo); // "string"
                console.log(typeof objeto); // "object" 

                console.log(primitivo === "peru"); // true 
                console.log(objeto === "peru"); // false 
                console.log(objeto.valueOf() === "peru"); // true
              </code>
            </pre>
          </div>
        </section>

        <!-- Cuándo es recomendable usar objetos String en JavaScript -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Cuándo es recomendable usar objetos String en JavaScript</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">No es recomendable usar objetos String en JavaScript en la mayoría de situaciones, pero existen algunos casos muy específicos donde pueden ser útiles.</p>
          </div>
          <div class="ml-6 contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Necesidad de almacenamiento de propiedades</span>: Si se necesita asociar propiedades adicionales o metadatos a una cadena, un objeto String permite guardar estas propiedades, algo imposible con los strings primitivos porque son inmutables y no pueden tener atributos propios.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Interacción con APIs que requieren objetos</span>: Algunos métodos (generalmente de bajo nivel, antiguos o bibliotecas externas) pueden requerir explícitamente valores que sean objetos y no tipos primitivos. Sin embargo, esto es cada vez menos frecuente en el desarrollo moderno.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Diferenciación explícita de identidad y tipo</span>: En pruebas o casos donde se debe distinguir entre una string primitiva y un objeto String por tipo (por ejemplo, usando operadores como typeof o instanceof), puede ser útil trabajar con el objeto.</p>
              </li>
            </ul>
          </div>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplo poco frecuente de uso:</p>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let objStr = new String("Hola");
                objStr.miPropiedad = "Extra información"; // Adición de propiedad personalizada
                console.log(objStr.miPropiedad); // "Extra información"
              </code>
            </pre>
          </div>
          <p class="ml-6 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Recomendación general:</p>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">En la práctica profesional, se recomienda usar siempre strings primitivos por su simplicidad, eficiencia y menor consumo de recursos. El uso de objetos String debe reservarse solo para los casos atípicos mencionados o cuando la semántica lo exija por requisitos de interoperabilidad.</p>
        </section>
      </article>

      <!-- Inmutabilidad: Un Concepto Clave -->
      <article id="js3-item2" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Inmutabilidad: Un Concepto Clave</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Los string primitivos son inmutables. Esto significa que, una vez que se crea una cadena, no se puede cambiar su contenido de manera directa en la memoria.</p>
        </div>
        <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
          <li class="my-2 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Cuando se ejecuta un método de cadena (por ejemplo, replace(), toUpperCase(), etc.) o se realiza una concatenación, JavaScript no modifica la cadena original.</span></li>
          <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>En su lugar, crea y devuelve una nueva cadena con el resultado de la operación.</span></li>
        </ul>
        <p class="ml-6 my-10 pathway-extreme-p text-xl underline  text-gray-600 dark:text-white">Ejemplo de inmutabilidad:</p>

        <div class="ml-6 mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let mensaje = "Hola";
              mensaje.toUpperCase();
              console.log(mensaje); // Output: "Hola" (la cadena original NO cambió)

              // Para "cambiar" la variable, debemos reasignarla a la nueva cadena
              mensaje = mensaje.toUpperCase();
              console.log(mensaje); // Output: "HOLA" (una nueva cadena fue creada y asignada)
            </code>
          </pre>
        </div>
        <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Esta inmutabilidad tiene ventajas en cuanto a la previsibilidad del código y la seguridad en entornos multihilo, pero puede impactar el rendimiento en operaciones de manipulación de texto muy intensivas si no se gestionan correctamente.</p>
      </article>

      <!-- Codificación: UTF-16 y Pares Subrogados -->
      <article id="js3-item3" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Codificación: UTF-16 y Pares Subrogados</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Internamente, JavaScript representa las cadenas como una secuencia de unidades de código (code units) UTF-16 de 16 bits. Comprender esto es crucial para manejar correctamente caracteres especiales e internacionales (emojis, caracteres chinos, etc.)</p>
        </div>
        <ul class="ml-6 my-10 p-6 border pathway-extreme-p">
          <li class="my-2 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Unidad de Código (Code Unit): El elemento básico de almacenamiento de 16 bits.</span></li>
          <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-pink-400 text-lg"></i><span>Punto de Código (Code Point): El valor real del carácter Unicode.</span></li>
        </ul>
        <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Para la mayoría de los caracteres comunes (los del Plano Multilingüe Básico o BMP, U+0000 a U+FFFF), un punto de código se almacena en una sola unidad de código de 16 bits.</p>
        <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Sin embargo, los caracteres menos comunes (fuera del BMP), como muchos emojis (ej. 🚀 U+1F680), requieren dos unidades de código de 16 bits. Esto se conoce como un par subrogado (surrogate pair).</p>

        <p class="ml-6 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Implicaciones Prácticas:</p>
        <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La propiedad <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">length</code> de una cadena devuelve el número de unidades de código, no el número de caracteres visuales o puntos de código Unicode.</p>
        <div class="ml-6 mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let strBasico = "café";
              console.log(strBasico.length); // 4

              let strEmoji = "🚀";
              // Esto es un único carácter visual, pero un par subrogado internamente
              console.log(strEmoji.length); // 2 (dos unidades de código UTF-16)
            </code>
          </pre>
        </div>

        <div class="ml-6 mt-10 p-4 bg-red-900 dark:bg-red-500 rounded">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-white"><i class="bi bi-exclamation-triangle mr-2"></i>Nota: </p>
          <hr class="border-1 border-gray-200 my-2">
          <p class="font-mono text-lg">Métodos modernos como <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">String.fromCodePoint()</code>, <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">codePointAt()</code>, y el uso del operador <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">...</code> con template literals ayudan a iterar correctamente por puntos de código completos, en lugar de unidades de código sueltas.</p>
        </div>
      </article>

      <!-- Literales de Plantilla (Template Literals) -->
      <article id="js3-item4" class="p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Literales de Plantilla (Template Literals)</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-5">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Introducidos en ES6, los literales de plantilla (``) ofrecen una sintaxis superior a las comillas tradicionales</p>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-10">Usar plantillas literales permite:</p>
        <div class="ml-6 contenedor-listas">
          <ul class="space-y-3">
            <li class="flex flex-col">
              <div class="flex md:flex-row lg:flex-row">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Cadenas multilínea</span>: Permite escribir texto en varias líneas directamente sin usar secuencias de escape (\n)</p>
              </div>
              <div class="my-6 ml-10 overflow-x-auto">
                <pre class="rounded overflow-x-auto">
                  <code class="language-javascript">
                    let texto = `Primera línea
                                Segunda línea
                                Tercera línea`;
                    console.log(texto);
                  </code>
                </pre>
              </div>
            </li>
            <li class="flex flex-col">
              <div class="flex md:flex-row lg:flex-row">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Interpolación de expresiones</span>: Permite incluir variables y expresiones dentro de la cadena sin necesidad de concatenar con +. Se usa la sintaxis ${variable} dentro de las comillas invertidas.</p>
              </div>
              <div class="my-6 ml-10 overflow-x-auto">
                <pre class="rounded overflow-x-auto">
                  <code class="language-javascript">
                    const item = "Camisa";
                    const precio = 20;

                    // Uso de template literal con interpolación
                    const detalles = `El artículo ${item} cuesta $${precio * 1.10} (incluyendo impuestos).
                    Es una excelente compra.`;

                    console.log(detalles);
                  </code>
                </pre>
              </div>
            </li>
            <li class="flex flex-col">
              <div class="flex md:flex-row lg:flex-row">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Expresiones embebidas</span>: Se pueden ejecutar expresiones dentro de ${}, no solo variables.</p>
              </div>
              <div class="my-6 ml-10 overflow-x-auto">
                <pre class="rounded overflow-x-auto">
                  <code class="language-javascript">
                    let a = 5, b = 3;
                    let resultado = `La suma es ${a + b}`; // "La suma es 8"
                  </code>
                </pre>
              </div>
            </li>
            <li class="flex flex-col">
              <div class="flex md:flex-row lg:flex-row">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">• Concatenación simplificada</span>: Es más legible y menos propenso a errores que usando comillas simples o dobles con + para concatenar.</p>
              </div>
            </li>
          </ul>
        </div>

        <!-- Precauciones y buenas prácticas -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Precauciones y buenas prácticas</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Resaltado para sub capitulos: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab dignissimos numquam eius atque perspiciatis consequuntur libero doloremque, consequatur accusamus.</p>
          </div>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">Las comillas invertidas deben usarse siempre en pares y no mezclar con las comillas simples o dobles para evitar errores de sintaxis.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">La sintaxis de interpolación ${} solo funciona dentro de comillas invertidas.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">Para incluir literalmente el carácter ${ dentro de un string con comillas invertidas, hay que escapar el signo dólar o usar otras técnicas.</p>
              </li>
              <li class="flex md:flex-row lg:flex-row">
                <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                <p class="ml-3 text-base pathway-extreme-p text-white">Es importante validar y sanear datos que se incluyan, especialmente si provienen de fuentes externas, para evitar riesgos de inyección de código o vulnerabilidades.</p>
              </li>
            </ul>
          </div>
          <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Resumen:</p>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Las comillas invertidas son la forma recomendada en JavaScript moderno para trabajar con strings cuando se requiere incluir variables o expresiones dinámicas o manejar texto multilínea, mejorando la legibilidad y mantenibilidad del código.</p>
        </section>
      </article>

      <!-- Cuando usar comillas simples, cuando usar comillas dobles y cuando usarlas juntas -->
      <article id="js3-item5" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Cuando usar comillas simples, cuando usar comillas dobles y cuando usarlas juntas</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">En JavaScript, el uso de comillas simples, dobles y su combinación no tiene diferencias funcionales en cuanto a definición de strings, pero se elige según conveniencia práctica y estilo.</p>
        </div>
        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Comillas simples (' ')</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Se usan comúnmente para definir cadenas de texto simples.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Útiles cuando el texto contiene comillas dobles para evitar escape, p. ej., 'El dijo "Hola"'.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Se prefieren en muchos estilos de código por su simplicidad y tradición.</p>
            </li>
          </ul>
        </div>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Comillas dobles (" ")</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Son igualmente válidas y equivalentes a las simples en JavaScript.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Convenientes cuando la cadena contiene comillas simples para evitar escapar, p. ej., "It's a nice day".</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Son el estándar en JSON y algunos lenguajes, por eso se usan a menudo para compatibilidad.</p>
            </li>
          </ul>
        </div>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Cuándo usarlas juntas</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex flex-col">
              <div class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white">Cuando la cadena contiene comillas simples y dobles, se elige una para delimitar el string y la otra queda dentro sin necesidad de escape, por ejemplo:</p>
              </div>
              <div class="my-6 ml-10 overflow-x-auto">
                <pre class="rounded overflow-x-auto">
                  <code class="language-javascript">
                    let texto = 'Ella dijo "Es mi libro favorito"';
                    let otro = "No puedo creer que dijo 'nunca más'";
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
                <p class="ml-3 text-base pathway-extreme-p text-white">Si la cadena contiene ambos tipos de comillas, se deben escapar ciertos caracteres usando barra invertida (\):</p>
              </div>
              <div class="my-6 ml-10 overflow-x-auto">
                <pre class="ind-pre rounded overflow-x-auto">
                  <code class="language-javascript">
                    let frase = "Ella dijo \"No puedo usar 'comillas' aquí\"";
                  </code>
                </pre>
              </div>
            </li>
          </ul>
        </div>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Recomendaciones:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Escoge consistentemente un tipo según tu equipo o proyecto para mantener legibilidad.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Para cadenas dinámicas o multilínea, prefiere las comillas invertidas (backticks) con template literals (ya explicado)</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">En HTML o llamadas JavaScript desde HTML, alterna comillas para evitar conflictos con atributos y scripts.</p>
            </li>
          </ul>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">En resumen, comillas simples y dobles son intercambiables y se usan para facilitar la inclusión de comillas opuestas en el texto, evitando escapes innecesarios y mejorando legibilidad.</p>
      </article>

      <!-- Convertir otros tipos a string en JavaScript -->
      <article id="js3-item6" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Convertir otros tipos a string en JavaScript</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Para convertir otros tipos de datos a string en JavaScript, existen varias formas comunes y prácticas. Aquí se presentan ejemplos con las más usadas.</p>
        </div>

        <!-- la función global String() -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>la función global String()</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Convierte cualquier valor a su representación en cadena</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                String(123);        // "123"
                String(true);       // "true"
                String(null);       // "null"
                String(undefined);  // "undefined"
                String([1, 2, 3]);  // "1,2,3"
                String({a:1});      // "[object Object]"
              </code>
            </pre>
          </div>
        </section>

        <!-- El método .toString() -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>El método .toString()</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Disponible en muchos tipos de datos como números, booleanos y objetos:</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                (123).toString();        // "123"
                true.toString();         // "true"
                [1, 2, 3].toString();    // "1,2,3"
                ({a:1}).toString();      // "[object Object]"
              </code>
            </pre>
          </div>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Precaución: null y undefined no tienen .toString(), causan error si se usa directamente.</p>
        </section>

        <!-- Concatenar con cadena vacía (+ '') -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Concatenar con cadena vacía (+ '')</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Es una forma rápida de forzar conversión a string</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                123 + '';          // "123"
                true + '';         // "true"
                null + '';         // "null"
                undefined + '';    // "undefined"
                [1, 2, 3] + '';    // "1,2,3"
              </code>
            </pre>
          </div>
        </section>

        <!-- Convertir objeto a JSON (para obtener contenido legible) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Convertir objeto a JSON (para obtener contenido legible)</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Cuando queremos mostrar contenido interno de un objeto o array como string:</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                JSON.stringify({a:1, b:2});       // '{"a":1,"b":2}'
                JSON.stringify([1, 2, 3]);        // '[1,2,3]'
              </code>
            </pre>
          </div>
        </section>

        <p class="ml-6 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Resumen de usos comunes</p>
        <div class="ml-6 overflow-x-aut mt-6">
          <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
            <thead class="text-blue-400">
              <tr>
                <th class="px-4 py-2 border border-gray-300">Método</th>
                <th class="px-4 py-2 border border-gray-300">Convierte</th>
                <th class="px-4 py-2 border border-gray-300">Nota</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">String(valor)</td>
                <td class="px-4 py-2 border border-gray-300">Cualquier valor</td>
                <td class="px-4 py-2 border border-gray-300">Seguro para cualquier tipo</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">valor.toString()</td>
                <td class="px-4 py-2 border border-gray-300">Valores con método .toString()</td>
                <td class="px-4 py-2 border border-gray-300">No usar con null o undefined</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">valor + ''</td>
                <td class="px-4 py-2 border border-gray-300">Cualquier valor</td>
                <td class="px-4 py-2 border border-gray-300">Rápido, pero implícito y menos claro</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">JSON.stringify()</td>
                <td class="px-4 py-2 border border-gray-300">Objetos y arrays</td>
                <td class="px-4 py-2 border border-gray-300">Obtiene representación JSON legible</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Estos métodos permiten convertir valores primitivos, objetos y estructuras complejas a strings para impresión, almacenamiento o manipulación.</p>
      </article>

      <!-- Métodos para convertir números a texto en JavaScript -->
      <article id="js3-item7" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Métodos para convertir números a texto en JavaScript</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Para convertir números a texto en JavaScript se usan varios métodos, según el caso.</p>
        </div>

        <!-- toString() -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>toString()</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Es el método más usado para convertir un número a string. Puede recibir como parámetro la base numérica (radix)</p>
          </div>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Por ejemplo para hexadecimal:</p>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let num = 255;
                console.log(num.toString());      // "255"
                console.log(num.toString(16));    // "ff"
              </code>
            </pre>
          </div>
        </section>

        <!-- String() constructor -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>String() constructor</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Convierte cualquier valor a string, incluyendo números</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let num = 123;
                let str = String(num);            // "123"
              </code>
            </pre>
          </div>
        </section>

        <!-- Concatenación con cadena vacía -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Concatenación con cadena vacía</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Una forma rápida y simple.</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let num = 123;
                let str = num + '';               // "123"
              </code>
            </pre>
          </div>
        </section>

        <!-- toFixed(), toExponential(), toPrecision() -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>toFixed(), toExponential(), toPrecision()</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Métodos para convertir números en texto formateado, útiles para números decimales, exponenciales y precisión.</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let pi = 3.14159;
                console.log(pi.toFixed(2));        // "3.14"
                console.log(pi.toExponential(2));  // "3.14e+0"
                console.log(pi.toPrecision(3));    // "3.14"
              </code>
            </pre>
          </div>
        </section>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Estos métodos permiten convertir números a cadenas para mostrar, almacenar o manipular datos textuales en JavaScript con diversidad de opciones de formato según necesidades.</p>
      </article>

      <!-- Convertir texto a número -->
      <article id="js3-item8" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Convertir texto a número</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Es posible convertir texto a número en JavaScript, especialmente cuando la data extraída de bases de datos viene en formato de texto. Para esto se utilizan varias funciones y métodos.</p>
        </div>

        <!-- parseInt() -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>parseInt()</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Analiza una cadena y devuelve un entero. Ignora espacios iniciales y descarta caracteres no numéricos después del número. Puede recibir un segundo parámetro para indicar la base numérica.</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                parseInt("123");       // 123
                parseInt("123abc");    // 123
                parseInt("abc123");    // NaN
                parseInt("10", 2);     // 2 (base binaria)
              </code>
            </pre>
          </div>
        </section>

        <!-- parseFloat() -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>parseFloat()</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Convierte texto a número decimal (con punto flotante). También ignora caracteres no numéricos tras el número válido.</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                parseFloat("3.14");           // 3.14
                parseFloat("3.14abc");        // 3.14
                parseFloat("abc3.14");        // NaN
              </code>
            </pre>
          </div>
        </section>

        <!-- Number() -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Number()</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Convierte una cadena a número, devolviendo un número entero o decimal según corresponda. Devuelve NaN si la cadena no es un número válido.</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                Number("123");        // 123
                Number("3.14");       // 3.14
                Number("3.14abc");    // NaN
              </code>
            </pre>
          </div>
        </section>

        <!-- Operador unario + -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Operador unario +</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Convierte una cadena a número de forma rápida.</p>
          </div>
          <div class="ml-6 mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                +"123";       // 123
                +"3.14";      // 3.14
                +"abc";       // NaN
              </code>
            </pre>
          </div>
        </section>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Recomendaciones</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Usar parseInt para números enteros.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Usar parseFloat para números con decimales.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Usar Number o el operador + para conversiones generales rápidas.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Siempre validar resultados con isNaN() para manejar posibles errores o datos inválidos.</p>
            </li>
          </ul>
        </div>

        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Ejemplo práctico con datos de base de datos</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              let textoEdad = "25";
              let edad = parseInt(textoEdad);
              if (!isNaN(edad)) {
                console.log("Edad convertida:", edad);
              } else {
                console.log("Dato inválido");
              }
            </code>
          </pre>
        </div>
      </article>

      <!-- Ejercicios -->
      <article id="js3-item9" class="mt-4 p-6 bg-blue-50 dark:bg-blue-900/30 border rounded-lg">
        <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
        <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
          <li><a href="./ejercicios/basicos/js/1" target="_blank">Ejercicio 1</a></li>
          <li><a href="./ejercicios/basicos/js/2" target="_blank">Ejercicio 2</a></li>
          <li><a href="./ejercicios/basicos/js/3" target="_blank">Ejercicio 3</a></li>
        </ol>
      </article>
    </section>

    <aside id="subtitulos " class="flex-1 h-full px-3 text-gray-600 md:box-border lg:box-border bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300 flex flex-col">
      <div class="mt-3 h-8 dark:bg-pink-100">
        <h2 class="text-xl font-mono text-center">Sub Capitulos</h2>
      </div>
      <div class="content-subtitulos h-auto mt-6 relative">
        <ul>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item1">Aspectos Generales</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item2">Inmutabilidad: Un Concepto Clave</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item3">Codificación: UTF-16 y Pares Subrogados</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item4">Literales de Plantilla (Template Literals)</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item5">Cuando usar comillas simples, cuando usar comillas dobles y cuando usarlas juntas</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item6">Convertir otros tipos a string en JavaScript</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item7">Métodos para convertir números a texto en JavaScript</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item8">Convertir texto a número</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js3-item9">Ejercicios</a>
          </li>
        </ul>
      </div>
    </aside>
  </div>
</article>