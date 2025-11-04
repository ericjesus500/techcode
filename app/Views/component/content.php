<section class="text-center">
  <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">👋 ¡Componentes Tailwind de TechCode!</h1>
  <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
    Seleccion de los componentes Tailwind utilizados en todo el proyecto TechCode.
  </p>
  <div class="mt-8 flex">
    <article class="max-w-full p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">

      <div class="flex md:flex-col gap-4 p-4 justify-between">
        <!-- Título -->
        <div class="flex-1">
          <h2 class="pathway-extreme-h1 text-3xl font-bold text-gray-800 dark:text-yellow-400 mb-2">BOTONES</h2>
          <p class="pathway-extreme-p text-gray-600 dark:text-gray-300">
            Creación de botones personalizados
          </p>
        </div>
        <!-- Códigos -->
        <div class="mt-8 flex md:flex-row gap-4">
          <div class="md:w-2/4 overflow-x-auto">
            <pre class="rounded overflow-x-auto">
              <code class="language-css">
                @layer components {
                  &nbsp;&nbsp;&nbsp;/* Clase base para todos los botones */
                    .btn {
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@apply py-2 px-4 rounded transition-colors duration-200;
                    }
                  
                    &nbsp;&nbsp;&nbsp;/* Variantes de color */
                    &nbsp;&nbsp;&nbsp;.btn-primary {
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@apply bg-blue-500 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500;
                    &nbsp;&nbsp;&nbsp;}
                  
                    &nbsp;&nbsp;&nbsp;.btn-secondary {
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@apply bg-gray-300 text-gray-800 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300;
                    &nbsp;&nbsp;&nbsp;}
                }
              </code>
            </pre>
          </div>

          <div class="md:w-2/4 my-4">
            <div class="overflow-x-auto">
              <pre class="rounded overflow-x-auto">
                <code class="language-html">
                  &lt;button class="btn btn-primary"&gt;primary&lt;/button&gt;
                  &lt;button class="btn btn-secondary"&gt;secondary&lt;/button&gt;
                  &lt;button class="btn btn-danger"&gt;danger&lt;/button&gt;
                  &lt;button class="btn btn-warning"&gt;warning&lt;/button&gt;
                  &lt;button class="btn btn-success"&gt;success&lt;/button&gt;
                  &lt;button class="btn btn-info"&gt;info&lt;/button&gt;
                  &lt;button class="btn btn-primary hover:scale-105"&gt;Botón Scale&lt;/button&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
      <!-- Resultado -->
      <div class="flex-1 p-6 md-flex-col lg:flex-col border">
        <div class="w-full max-w-full flex sm:flex-col md:flex-row lg:flex-row gap-4">
          <button class="btn btn-primary">primary</button>
          <button class="btn btn-secondary">secondary</button>
          <button class="btn btn-danger">danger</button>
          <button class="btn btn-warning">warning</button>
          <button class="btn btn-success">success</button>
          <button class="btn btn-info">info</button>
        </div>
        <h3 class="mt-10 text-left">Botones con escala</h3>
        <div class="mt-10 w-full max-w-full flex sm:flex-col md:flex-row lg:flex-row gap-4">
          <button class="btn btn-primary hover:scale-105">primary</button>
        </div>
      </div>

    </article>
  </div>

</section>