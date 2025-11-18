<!-- Capitulo 2: Sintaxis, Tipos de datos y Operadores Básicos -->
<hr>
<article id="cap2" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: Sintaxis, Tipos de datos y Operadores Básicos</h1>
      <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mt-5 mb-4">En este capítulo se estudia la sintaxis , sus tipos de datos y los operadores básicos de Javascript.</p>

      <!-- Declaración de variables -->
      <article id="js2-item1" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Declaración de variables</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">
            Una variable es un espacio en memoria donde se puede guardar valores para usarlos y modificarlos en un programa.
          </p>
        </div>
        <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Formas de declarar variables:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">var</span>: declaración clásica (poco recomendable actualmente).</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">let</span>: declaración moderna para variables cuyo valor puede cambiar..</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">const</span>: para valores constantes que no cambiarán.</p>
            </li>
          </ul>
        </div>
        <p class="mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Ejemplos:</p>
        <div class="mt-10 overflow-x-auto">
          <pre class="rounded overflow-x-auto">
            <code class="language-javascript">
              var nombre = "Juan";
              let edad = 30;
              const pais = "Colombia";
            </code>
          </pre>
        </div>

        <!-- Ámbito de una variable -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Ámbito de una variable</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El ámbito de una variable (o scope) es la región o contexto del código dentro de la cual la variable es visible y accesible.</p>
          </div>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Define dónde se puede usar una variable, siendo los tipos más comunes el ámbito local, que se limita a una función o bloque de código, y el ámbito global, que abarca todo el programa. Comprender el ámbito es crucial para evitar errores de nombre y gestionar correctamente la vida de las variables.</p>
          <p class="ml-6 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Conceptos Clave:</p>
          <div class="ml-6 contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Visibilidad y Accesibilidad</span>: Una variable declarada dentro de un ámbito solo puede ser accedida desde ese ámbito específico o sus sub-ámbitos. Intentar acceder a ella desde fuera resultará en un error.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Conflictos de Nombres</span>: El ámbito ayuda a prevenir conflictos de nombres. Por ejemplo, dos funciones diferentes pueden tener variables llamadas x sin que se refieran a la misma ubicación en la memoria.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Gestión de Memoria</span>: Las variables locales suelen destruirse cuando finaliza el bloque de código o la función donde fueron creadas, lo que ayuda a una gestión eficiente de la memoria del programa.</p>
              </li>
            </ul>
          </div>
        </section>

        <!-- Tipos de ámbito -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Tipos de ámbito</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Existen 4 tipos de ámbito: local, global, de bloque y de clase(módulo).</p>
          </div>

          <!-- Ámbito Local -->
          <article class="mt-18">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Ámbito Local</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Una variable declarada dentro de una función, un bucle o un bloque de código específico (delimitado por llaves {}) es de ámbito local. Solo puede accederse a ella desde ese bloque específico.</p>

            <p class="ml-6 my-10 pathway-extreme-p text-lg  text-gray-600 dark:text-orange-500">Características Claves</p>

            <div class="ml-6 contenedor-listas">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Accesibilidad Limitada</span>: Solo se puede acceder a las variables locales desde dentro de la función, método o bloque de código (como un bucle for o una sentencia if) donde fueron definidas.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ciclo de Vida Temporal</span>: Las variables locales se crean cuando se ejecuta el bloque de código que las contiene y se destruyen automáticamente cuando la ejecución de ese bloque finaliza. Esto libera memoria y previene conflictos de nombres.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Aislamiento</span>: Es posible usar el mismo nombre de variable en diferentes ámbitos locales sin que haya conflicto, ya que cada una es independiente de las otras.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ocultación de Información</span>: El uso de ámbito local es fundamental para la encapsulación y la ocultación de información, asegurando que el estado interno de una función no afecte ni sea afectado por otras partes del programa.</p>
                </li>
              </ul>
            </div>
          </article>

          <!-- Ámbito Global (o scope global) -->
          <article class="mt-18">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Ámbito Global (o scope global)</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Una variable declarada fuera de cualquier función, clase o bloque de código tiene ámbito global. Esto significa que puede ser accesible desde cualquier parte del programa, incluyendo todas las funciones.</p>
            <p class="ml-6 my-10 pathway-extreme-p text-lg  text-gray-600 dark:text-orange-500">Características Claves</p>

            <div class="ml-6 contenedor-listas">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Accesibilidad Total</span>: Una variable global puede ser referenciada, leída y modificada desde cualquier parte del código, incluyendo dentro de funciones, bucles u otros bloques de código, a menos que un ámbito local la oculte con el mismo nombre.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Declaración Fuera de Bloques/Funciones</span>: Generalmente, una variable se convierte en global cuando se declara fuera de cualquier función o bloque de código específico.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Persistencia</span>: La variable existe durante toda la ejecución del programa, a diferencia de las variables locales que se crean y destruyen cuando su contexto local (por ejemplo, una función) termina.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Entorno Global</span>: El conjunto de todas las variables globales se conoce como el entorno global o estado global del programa.</p>
                </li>
              </ul>
            </div>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">En resumen, el ámbito global define el contexto más amplio en el que una variable es reconocida y utilizable en un programa.</p>
          </article>

          <!-- Ámbito de Bloque -->
          <article class="mt-18">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Ámbito de Bloque</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Introducido en lenguajes más modernos, este tipo de ámbito restringe las variables declaradas con let o const a un bloque específico (por ejemplo, dentro de las llaves {}), solo puede ser utilizada dentro de ese bloque y en cualquier bloque anidado dentro de él.</p>
            <p class="ml-6 my-10 pathway-extreme-p text-lg  text-gray-600 dark:text-orange-500">Características Claves</p>

            <div class="ml-6 contenedor-listas">
              <ul class="space-y-3">
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Accesibilidad Limitada</span>: Las variables con ámbito de bloque no son accesibles fuera del bloque donde fueron declaradas.</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Delimitadores</span>: Comúnmente, un bloque de código se define mediante llaves ({}), como en el caso de bucles (for, while) o condicionales (if, else).</p>
                </li>
                <li class="flex">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Diferencia con Ámbito Local/Función</span>: A diferencia del ámbito de función (donde las variables son accesibles en toda la función), el ámbito de bloque es más restrictivo y local.</p>
                </li>
                <li class="flex md:flex-col lg:flex-col">
                  <div class="flex md:flex-row lg:flex-row">
                    <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                      <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                      <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                      <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                    </svg>
                    <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ocultación de Variables</span>: Si se declara una variable con el mismo nombre dentro de un bloque anidado, esta oculta temporalmente a la variable del bloque superior mientras el control del programa está en el bloque interno.</p>
                  </div>
                  <p class="ml-6 pathway-extreme-p text-xl my-10 text-gray-600 dark:text-orange-500">Ejemplo:</p>
                  <div class="my-6 overflow-x-auto">
                    <pre class="ind-pre rounded overflow-x-auto">
                      <code class="language-javascript">
                        if (true) {
                          let mensaje = "Hola desde el bloque";
                          console.log(mensaje); // Funciona, porque está dentro del bloque
                        }
                        // console.log(mensaje); // Error, porque mensaje no existe fuera del bloque
                      </code>
                    </pre>
                  </div>
                  <div class="mt-6 overflow-x-auto">
                    <pre class="ind-pre rounded overflow-x-auto">
                      <code class="language-javascript">
                        if (true) {
                            let y = 20; // 'y' tiene ámbito de bloque
                            var z = 30; // 'z' tiene ámbito de función (o global en este caso)
                        }
                        // console.log(y); // Error: y no está definida
                        console.log(z); // Funciona: z es accesible fuera del bloque if
                      </code>
                    </pre>
                  </div>
                </li>
              </ul>
            </div>
          </article>

          <!-- Ámbito de Clase/Módulo -->
          <article class="mt-18">
            <h4 class="ml-6 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Ámbito de Clase/Módulo</h4>
            <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Las variables que son miembros de una clase tienen ámbito de clase, lo que significa que son accesibles dentro de la definición de la clase. En la programación orientada a objetos o en lenguajes modulares, las variables pueden tener un ámbito limitado a una clase o módulo específico, siendo accesibles por todos los métodos dentro de esa clase.</p>
          </article>
        </section>

        <!-- Importancia del ámbito -->
        <section class="my-18">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Importancia del ámbito</span></h3>
          <div class="ml-6 contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Evita conflictos de nombres</span>: Permite usar el mismo nombre de variable en diferentes partes del código sin que causen conflictos.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Mejora la organización</span>: Ayuda a escribir código más limpio y organizado, ya que las variables solo están disponibles donde son necesarias.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Gestión de memoria</span>: Las variables locales se crean cuando se entra en su ámbito y se destruyen al salir, liberando memoria automáticamente.</p>
              </li>
            </ul>
          </div>
        </section>

        <!-- Ámbito de una variable según su declaración -->
        <section class="my-18">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Ámbito de una variable según su declaración</span></h3>
          <div class="ml-6 contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-col lg:flex-col">
                <div class="flex md:flex-row lg:flex-row">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Las variables declaradas con let</span>: tienen un ámbito de bloque (solo existen dentro del bloque donde se declaran) y su valor puede cambiar durante la ejecución.</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="ind-pre rounded overflow-x-auto">
                    <code class="language-javascript">
                      {
                        let nombre = "Andrés";
                      }

                      console.log( nombre ); //Error de referencia
                    </code>
                  </pre>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="ind-pre rounded overflow-x-auto">
                    <code class="language-javascript">
                      {
                        let nombre = "Andrés";
                        {
                            console.log( nombre ); //Resultado: Andrés
                        }
                      }
                    </code>
                  </pre>
                </div>
                <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Características Claves</p>
                <ul class="ml-6 mb-10 p-6 border pathway-extreme-p">
                  <li class="my-2 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span>Bloque es todo aquello que está entre llaves ( { } ).</span></li>
                  <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span><code class="bg-gray-200 dark:text-pink-700 px-1 rounded">let</code> es muy utilizado en estructuras de control y de flujo(bucles) ya que estos manejan ámbitos de bloque.</span></li>
                  <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span><code class="bg-gray-200 dark:text-pink-700 px-1 rounded">let</code> NO genera undefined sino que muestra un mensaje de error más preciso en el que obliga a declarar e inicializarse al mismo tiempo.</span></li>
                  <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span><code class="bg-gray-200 dark:text-pink-700 px-1 rounded">let</code> nunca es alzado por Javascript, al contrario, detiene la ejecución del programa.</span></li>
                  <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span><code class="bg-gray-200 dark:text-pink-700 px-1 rounded">let</code> se aprovecha en la utilización de manejadores de error de javascript como el Try - Catch.</span></li>
                </ul>
              </li>
              <li class="flex md:flex-col lg:flex-col">
                <div class="flex md:flex-row lg:flex-row">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Las variables declaradas con var</span>: tienen un ámbito de función o global, y pueden ser reasignadas.</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="ind-pre rounded overflow-x-auto">
                    <code class="language-javascript">
                      var nombre = "Juan";
                      function saludar(){
                        var nombre = "Andrés";
                        console.log("Hola " + nombre);
                      }
                      saludar(); //Resultado: "Hola Andrés"
                    </code>
                  </pre>
                </div>
                <p class="ml-3 my-5 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Características Claves</p>
                <ul class="ml-6 mt-5 mb-10 p-6 border pathway-extreme-p">
                  <li class="my-2 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span>var Es completamente reasignable.</span></li>
                  <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span>Si son declaradas en el ámbito global pueden ser accedidas desde cualquier lugar.</span></li>
                  <li class="my-5 flex flex-row items-start"><i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i><span>Tiene ámbito de función, es decir, pueden ser accedidas desde la función donde fueron creadas y también de funciones interiores.</span></li>
                </ul>
              </li>
              <li class="flex md:flex-col lg:flex-col">
                <div class="flex md:flex-row lg:flex-row">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Las variables declaradas con const</span>: tienen ámbito de bloque, igual que let.</p>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </article>

      <!-- Declaración de constantes -->
      <article id="js2-item2" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Declaración de constantes</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Las constantes son variables cuyos valores no se pueden modificar una vez que se han asignado, y se crean usando la palabra clave <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">const</code> y deben ser inicializadas en el momento de su creación.</p>
        </div>
        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">Una vez que se le asigna un valor, este permanece constante durante la ejecución del programa, aunque las propiedades de los objetos o los elementos de los arrays asignados a una constante sí pueden ser modificados.</p>

        <p class="my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Características Principales</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">No reasignación</span>: No se puede cambiar el valor de la variable después de su declaración inicial. Intentar hacerlo resultará en un error de tipo (TypeError)</p>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Ámbito de bloque</span>: Al igual que let, las constantes tienen ámbito de bloque, lo que significa que solo son accesibles dentro del bloque ({}) donde fueron declaradas (bucles, condicionales, funciones).</p>
            </li>
            <li class="flex flex-col">
              <div class="flex md:flex-row lg:flex-row">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Inicialización obligatoria</span>: Una constante debe ser inicializada en el momento de su declaración. Declarar una constante sin asignarle un valor arrojará un error de sintaxis.</p>
              </div>
              <div class="my-6 ml-10 overflow-x-auto">
                <pre class="rounded overflow-x-auto">
                  <code class="language-javascript">
                    // Declaración de una constante de cadena
                    const nombre = "Juan";
                    console.log(nombre); // Salida: Juan
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
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Inmutabilidad de la referencia, no del valor (para objetos y arrays)</span>: Es importante entender que <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">const</code> hace que la referencia al valor sea inmutable, no necesariamente el valor en sí mismo.</p>
              </div>
              <div class="border ml-6 contenedor-listas">
                <ul class="space-y-3">
                  <li class="flex md:flex-row lg:flex-row">
                    <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                    <p class="ml-3 text-base pathway-extreme-p text-white">Para tipos de datos primitivos (números, cadenas, booleanos), el valor es efectivamente constante.</p>
                  </li>
                  <li class="flex flex-col">
                    <div class="flex md:flex-row lg:flex-row">
                      <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
                      <p class="ml-3 text-base pathway-extreme-p text-white">Para objetos y arrays, puedes modificar sus propiedades o elementos internos, pero no puedes reasignar la constante para que apunte a una dirección de memoria completamente nueva.</p>
                    </div>
                    <p class="mt-10 mb-5 pathway-extreme-p text-xl underline  text-gray-600 dark:text-white">Ejemplo de objeto:</p>
                    <div class="my-6 overflow-x-auto">
                      <pre class="rounded overflow-x-auto">
                        <code class="language-javascript">
                          const miObjeto = { a: 1 };
                          miObjeto.a = 2; // Esto es válido (se modifica una propiedad del objeto)
                          console.log(miObjeto); // Salida: { a: 2 }
                        </code>
                      </pre>
                    </div>
                    <p class="my-5 pathway-extreme-p text-xl underline  text-gray-600 dark:text-white">Ejemplo de array:</p>
                    <div class="mt-6 overflow-x-auto">
                      <pre class="rounded overflow-x-auto">
                        <code class="language-javascript">
                          const miArray = [1, 2, 3];
                          miArray.push(4); // Esto es válido (se modifica el contenido del array)
                          console.log(miArray); // Salida: [1, 2, 3, 4]
                        </code>
                      </pre>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="flex">
              <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
              </svg>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Buenas prácticas</span>: Por convención, los nombres de las constantes que representan valores fijos globales (como configuraciones) a menudo se escriben en mayúsculas sostenidas.</p>
            </li>
          </ul>
        </div>
      </article>

      <!-- Diferencias clave entre variables y constantes -->
      <article id="js2-item3" class="mt-10 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Diferencias clave entre variables y constantes</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">La diferencia más relevante entre variables (declaradas con let o var) y constantes (declaradas con const) en JavaScript radican principalmente en su mutabilidad y su alcance (scope). </p>
        </div>
        <div class="overflow-x-aut mt-10">
          <table class="font-mono table-auto border-spacing-x-4 w-full max-w-full">
            <thead class="text-blue-400">
              <tr>
                <th class="px-4 py-2 border border-gray-300">Aspecto</th>
                <th class="px-4 py-2 border border-gray-300">let (variable)</th>
                <th class="px-4 py-2 border border-gray-300">const (constante)</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">Reasignación</td>
                <td class="px-4 py-2 border border-gray-300">Permitida</td>
                <td class="px-4 py-2 border border-gray-300">No permitida</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">Inicialización</td>
                <td class="px-4 py-2 border border-gray-300">Opcional en la declaración</td>
                <td class="px-4 py-2 border border-gray-300">Obligatoria en la declaración</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">Ámbito</td>
                <td class="px-4 py-2 border border-gray-300">Bloque</td>
                <td class="px-4 py-2 border border-gray-300">Bloque</td>
              </tr>
              <tr class="text-sm font-mono">
                <td class="px-4 py-2 border border-gray-300">Mutabilidad obj</td>
                <td class="px-4 py-2 border border-gray-300">Sí</td>
                <td class="px-4 py-2 border border-gray-300">Propiedades pueden cambiar</td>
              </tr>
            </tbody>
          </table>
        </div>
      </article>

      <!-- Normas y buenas prácticas al nombrar variables -->
      <article id="js2-item4" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Normas y buenas prácticas al nombrar variables</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Seguir éstas normas y buenas prácticas ayudan a tener código más legible, mantenible y profesional.</p>
        </div>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Usar nombres descriptivos</span>: El nombre debe decir claramente qué representa la variable (ejemplo: edad, nombreUsuario, totalVentas).</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Seguir la convención camelCase</span>: Se recomienda iniciar el nombre en minúscula y, si tiene varias palabras, usar mayúscula en la primera letra de cada palabra interna: let nombreUsuario; let sumaTotal;.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Evitar nombres demasiado cortos (excepto cuando el contexto lo justifica)</span>: Usa nombres cortos solo para índices de bucles (i, j) o temporales triviales.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">No usar palabras reservadas de JavaScript</span>: No puedes llamar a una variable let, const, function, class, etc.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">No comenzar nombres con números ni símbolos especiales</span>: Solo se permite el guion bajo _ y el signo dólar $, aunque su uso se reserva generalmente para casos muy concretos.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Evitar abreviaturas ambiguas</span>: No uses abreviaturas que puedan confundir: let tvt = 14;.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">No uses tildes ni caracteres especiales ajenos al lenguaje</span>: Mantente en el alfabeto inglés, incluso si el proyecto es en español.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Constancia en el idioma</span>: Se recomienda elegir un idioma (inglés preferentemente para proyectos internacionales, español si el equipo lo acuerda) y mantenerlo en todo el código.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Prefiere nombres en singular para variables individuales y plural para arrays o colecciones: let usuario; let usuarios = [];</p>
            </li>
          </ul>
        </div>
      </article>

      <!-- Nombrar una variable utilizando el guion bajo _ y el signo dólar $ -->
      <article id="js2-item5" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Nombrar una variable utilizando el guion bajo _ y el signo dólar $</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">El guion bajo _ y el signo dólar $ tienen usos concretos y bien definidos en JavaScript para nombrar variables.</p>
        </div>

        <!-- Uso del guion bajo _ -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Uso del guion bajo _</span></h3>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-col lg:flex-col">
                <div class="flex md:flex-row lg:flex-row">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Variables privadas o internas (convención, no privacidad real)</span>: Se utiliza el guion bajo al inicio para indicar que una variable, método o propiedad es "privada" o de uso interno en una clase u objeto</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      class Usuario {
                        constructor(nombre) {
                          this._nombre = nombre; // Convención de privado
                        }
                      }
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
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Argumentos ignorados (destructuring)</span>: En destructuración, se usa _ para indicar que un argumento no se utilizará.</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      const [_, segundo] = [1, 2]; // El primer valor se ignora
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
                  <p class="ml-3 text-base pathway-extreme-p text-white">Variables temporales en funciones o callbacks donde el valor no será usado</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      miArray.forEach(_ => console.log("Hola")); // _ indica que no importa el argumento
                    </code>
                  </pre>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- Uso del signo dólar $ -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Uso del signo dólar $</span></h3>
          <div class="contenedor-listas">
            <ul class="space-y-3">
              <li class="flex md:flex-col lg:flex-col">
                <div class="flex md:flex-row lg:flex-row">
                  <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                    <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                    <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                    <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                  </svg>
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Variables relacionadas con elementos de DOM (convención)</span>: Se utiliza $ delante o detrás del nombre para identificar variables que contienen referencias a elementos del DOM.</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascritp">
                      const $boton = document.getElementById('enviar');
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
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Uso en frameworks/librerías (ej. jQuery)</span>: $ es el identificador principal en jQuery para acceder a elementos y funciones</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascritp">
                      let $elemento = $('#miElemento');
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
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Indicar que una variable contiene código, una cadena "dinámica" o plantilla literal</span>: o En algunos proyectos, se usa $ para anotar variables que contienen fragmentos de HTML, templates o expresiones.</p>
                </div>
                <div class="my-6 ml-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascritp">
                      const html$ = `<div>${nombre}</div>`;
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
                  <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Convención en funciones generadas (como los denominados "observables" en RxJS)</span>:</p>
                </div>
                <p class="ml-6 pathway-extreme-p text-xl my-10 text-gray-600 dark:text-orange-500">Utilizan $ para indicar que una variable es un observable.</p>
                <div class="mb-6 ml-10 overflow-x-auto">
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascritp">
                      const cambios$ = new Observable();
                    </code>
                  </pre>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </article>

      <!-- Tipos de Datos en JavaScript -->
      <article id="js2-item6" class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Tipos de Datos en JavaScript</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">JavaScript tiene 8 tipos de datos, los cuales se dividen en dos categorías principales: primitivos y no primitivos (u objetos).</p>
        </div>

        <!-- Datos primitivos -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Datos primitivos</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Los datos primitivos en JavaScript son tipos de datos básicos que representan valores simples y se almacenan directamente en la memoria (en la pila o stack). A diferencia de los objetos, son inmutables, lo que significa que no se puede cambiar su valor base una vez creados; representan un único dato y no tienen métodos propios</p>
          </div>
          <p class="ml-6 mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Los tipo primitivos incluyen:</p>
          <div class="ml-6 contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Cadena de texto (String)</span>: Representa una secuencia de caracteres, utilizada para texto. Se delimitan con comillas simples ('') o dobles (""). Ejemplo: <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">'Hola'</code>, <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">"Mundo"</code>.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Número (Number)</span>: Representa tanto enteros como números de punto flotante(decimales). JavaScript no distingue entre diferentes tipos de números como int o double, todos son number. Ejemplo: <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">42</code>, <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">3.14</code>.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Boleano (Boolean)</span>: Representa valores lógicos: <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">true</code> o <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">false</code>.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Indefinido (Undefined)</span>: Indica que una variable ha sido declarada, pero no tiene asignado algún valor.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Nulo (Null)</span>: Representa la ausencia intencional de cualquier valor u objeto o un valor vacío.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Símbolo (Symbol)</span>: Introducido en ES6, representa un identificador único e inmutable, a menudo utilizado como claves de propiedades de objeto para evitar colisiones de nombres. Aunque dos símbolos tengan la misma descripción, no son iguales.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">BigInt</span>: Permite representar enteros muy grandes que exceden el límite máximo seguro de los números normales en JavaScript (number).</p>
              </li>
            </ul>
          </div>
        </section>

        <!-- Tipo de Dato No Primitivo (Referenciado) -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="bi bi-caret-right-fill px-2 text-lg"></i><span>Tipo de Dato No Primitivo (Referenciado)</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Son colecciones de datos más complejas que los valores simples. Son objetos complejos y mutables que se pasan por referencia.</p>
          </div>
          <p class="ml-6 mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">A diferencia de los primitivos, se caracterizan por ser:</p>
          <div class="ml-6 contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Mutables</span>: Sus propiedades internas pueden ser modificadas después de su creación.
                </p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Almacenados por Referencia</span>: Cuando se asigna una variable de tipo objeto a otra, no se copia el valor en sí, sino una referencia a la misma ubicación en la memoria.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Estructuras de Datos</span>: Se utilizan para agrupar datos y funciones relacionadas.</p>
              </li>
            </ul>
          </div>
          <p class="ml-3 mt-10 pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Los tipo objetos incluyen:</p>
          <div class="ml-3 contenedor-listas">
            <ul class="space-y-3">
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Objeto (Object)</span>: Es una colección de propiedades, y una propiedad es una asociación entre un nombre (clave) y un valor; pueden contener múltiples valores y tipos de datos. A diferencia de los primitivos, los objetos son mutables y se almacenan por referencia. Son la base de todos los demás tipos no primitivos. </p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Array</span>: Es una subclase de Object utilizada para almacenar listas ordenadas de datos o valores.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Función (Function)</span>: Es un tipo especial de objeto que encapsulan código para realizar una tarea específica. Son bloques de código reutilizables que realizan tareas específicas y pueden devolver valores.</p>
              </li>
              <li class="flex">
                <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                  <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                  <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                  <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
                </svg>
                <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">Instancias de Clases (como Date, RegExp, etc.)</span>: Se utilizan para manejar fechas y horas, patrones de búsquedas, etc</p>
              </li>
            </ul>
          </div>
        </section>

        <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">JavaScript es un lenguaje de <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">tipado débil</code> y <code class="bg-gray-200 dark:text-pink-700 px-1 rounded">dinámico</code>, lo que significa que no es necesario especificar explícitamente el tipo de dato de una variable al declararla; el intérprete determina el tipo en tiempo de ejecución según el valor asignado.</p>
      </article>

      <!-- Operadores Básicos -->
      <article id="js2-item7"  class="mt-10 p-6">
        <h2 class="font-mono text-3xl text-gray-300 dark:text-yellow-400">Operadores Básicos</h2>
        <div class="mt-10 p-4 bg-red-900 dark:bg-[#C2FFFF] border-l-sky-400 border-[#C2FFFF] border-8 rounded-lg">
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Los operadores son símbolos especiales que actúan sobre valores y variables para realizar diferentes operaciones matemáticas, comparar datos, asignar valores, y manipular datos de diversas formas.</p>
        </div>

        <!-- Operadores Aritméticos -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Operadores Aritméticos</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
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
                  <td class="px-4 py-2 border border-gray-300">5 + 3</td>
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
                  <td class="px-4 py-2 border border-gray-300">20 / 4</td>
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
                  <td class="px-4 py-2 border border-gray-300">2 ** 3</td>
                  <td class="px-4 py-2 border border-gray-300">8</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplos:</p>
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
        </section>

        <!-- Operadores de Asignación -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Operadores de Asignación</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Permiten asignar y actualizar valores en variables.</p>
          </div>
          <div class="overflow-x-aut mt-10">
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
                  <td class="px-4 py-2 border border-gray-300">x += 2</td>
                  <td class="px-4 py-2 border border-gray-300">x = x + 2</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td class="px-4 py-2 border border-gray-300"></td>
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
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplo completo</p>
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
        </section>

        <!-- Operadores de Comparación -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Operadores de Comparación</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Sirven para comparar valores y devuelven un resultado booleano (true o false).</p>
          </div>
          <div class="overflow-x-aut mt-10">
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
                  <td class="px-4 py-2 border border-gray-300">Igualdad estricta (tipo)</td>
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
                  <td class="px-4 py-2 border border-gray-300">&gt;</td>
                  <td class="px-4 py-2 border border-gray-300">Mayor que</td>
                  <td class="px-4 py-2 border border-gray-300">10 &gt; 2</td>
                  <td class="px-4 py-2 border border-gray-300">true</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td class="px-4 py-2 border border-gray-300"> &lt;= </td>
                  <td class="px-4 py-2 border border-gray-300">Menor o igual que</td>
                  <td class="px-4 py-2 border border-gray-300">5 &gt;= 5</td>
                  <td class="px-4 py-2 border border-gray-300">true</td>
                </tr>
                <tr class="text-sm font-mono">
                  <td class="px-4 py-2 border border-gray-300"> &gt;= </td>
                  <td class="px-4 py-2 border border-gray-300">Mayor o igual que</td>
                  <td class="px-4 py-2 border border-gray-300">3 &gt;= 7</td>
                  <td class="px-4 py-2 border border-gray-300">false</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplo completo</p>
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
        </section>

        <!-- Operadores de Incremento y Decremento -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Operadores de Incremento y Decremento</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Sirven para aumentar o disminuir el valor de una variable en 1.</p>
          </div>
          <div class="overflow-x-aut mt-10">
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
                  <td class="px-4 py-2 border border-gray-300">--</td>
                  <td class="px-4 py-2 border border-gray-300">Decremento</td>
                  <td class="px-4 py-2 border border-gray-300">b--</td>
                  <td class="px-4 py-2 border border-gray-300">b = b - 1</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplo completo</p>
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
        </section>

        <!-- Operadores Lógicos -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Operadores Lógicos</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Permiten realizar operaciones lógica booleana.</p>
          </div>
          <div class="overflow-x-aut mt-10">
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
                  <td class="px-4 py-2 border border-gray-300">O lógico</td>
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
          <p class="ml-6 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Ejemplo completo</p>
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
        </section>

        <!-- Operador de Concatenación -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Operador de Concatenación</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Especialmente en cadenas de texto, se usa + para unir strings.</p>
          </div>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let nombre = "Ana";
                let saludo = "Hola, " + nombre + "!";
                console.log(saludo); // Hola, Ana!
              </code>
            </pre>
          </div>
        </section>

        <!-- Operador Ternario -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Operador Ternario</span></h3>
          <div class="ml-6 my-10 p-4 bg-red-900 dark:bg-yellow-50 border-l-orange-400 border-yellow-100 border-5 rounded-lg">
            <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Permite tomar decisiones de forma compacta.</p>
          </div>
          <p class="ml-3 my-10 pathway-extreme-p text-xl  text-gray-600 dark:text-orange-500">Sintaxis</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                condición ? valorSiVerdadero : valorSiFalso
              </code>
            </pre>
          </div>
          <p class="ml-3 my-10 pathway-extreme-p text-xl underline  text-gray-600 dark:text-white">Ejemplo:</p>
          <div class="mt-10 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-javascript">
                let edad = 16;
                let mensaje = edad >= 18 ? "Mayor de edad" : "Menor de edad";
                console.log(mensaje); // Menor de edad
              </code>
            </pre>
          </div>
        </section>

        <!-- Otros Operadores Especiales -->
        <section class="my-14">
          <h3 class="font-mono font-medium mt-8 text-2xl text-gray-950 dark:text-[#00fff5] flex flex-row items-start"><i class="mt-2 bi bi-caret-right-fill px-2 text-lg"></i><span>Otros Operadores Especiales</span></h3>
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
                  <pre class="rounded overflow-x-auto">
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
                  <pre class="rounded overflow-x-auto">
                    <code class="language-javascript">
                      let fecha = new Date();
                      console.log(fecha instanceof Date); // true
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
                  <p class="ml-3 text-base pathway-extreme-p text-white">Resumen visual:</p>
                </div>
                <div class="mt-6 ml-10 overflow-x-auto">
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
              </li>
            </ul>
          </div>
        </section>
      </article>

      <!-- Ejercicios -->
      <article id="js2-item8" class="mt-4 p-6 bg-blue-50 dark:bg-blue-900/30 border rounded-lg">
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
            <a class="block font-mono text-base" href="#js2-item1">Declaración de variables</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item2">Declaración de constantes</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item3">Diferencias clave entre variables y constantes </a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item4">Normas y buenas prácticas al nombrar variables </a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item5">Nombrar una variable utilizando el guion bajo _ y el signo dólar $</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item6">Tipos de Datos en JavaScript</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item7">Operadores Básicos</a>
          </li>
          <li class="flex items-base">
            <i class="bi bi-caret-right-fill"></i>
            <a class="block font-mono text-base" href="#js2-item8">Ejercicios</a>
          </li>
        </ul>
      </div>
    </aside>
  </div>
</article>