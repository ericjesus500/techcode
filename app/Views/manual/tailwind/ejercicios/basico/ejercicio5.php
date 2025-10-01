<h1 class="underline font-mono text-lg text-gray-600 dark:text-pink-600">EJERCICIO 04</h1>
<h2 class="my-12 text-3xl text-dark-600 dark:text-green-400">Uso de componentes</h2>

<div class="flex gap-x-4">
	<div class="flex-1 justify-center items-center">		
		<pre class="bg-gray-300 dark:bg-gray-900 p-4 rounded">
      <code class="language-html">
      	&lt;div class="contenedor-listas"&gt;
		      &lt;div class="space-y-6"&gt;
		        &lt;ul class="space-y-3"&gt;
		          &lt;li class="flex"&gt;
		            &lt;svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square"&gt;
		              &lt;circle cx="11" cy="11" r="11" class="fill-sky-400/25" /&gt;
		              &lt;circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" /&gt;
		              &lt;path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" /&gt;
		            &lt;/svg&gt;
		            &lt;p class="ml-3 text-base"&gt;Item 1: contenido&lt;/p&gt;
		          &lt;/li&gt;
		          &lt;li class="flex"&gt;
		            &lt;svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square"&gt;
		              &lt;circle cx="11" cy="11" r="11" class="fill-sky-400/25" /&gt;
		              &lt;circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" /&gt;
		              &lt;path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" /&gt;
		            &lt;/svg&gt;
		            &lt;p class="ml-3 text-base"&gt;Item 2: contenido.&lt;/p&gt;
		          &lt;/li&gt;
		          &lt;li class="flex"&gt;
		            &lt;svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square"&gt;
		              &lt;circle cx="11" cy="11" r="11" class="fill-sky-400/25" /&gt;
		              &lt;circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" /&gt;
		              &lt;path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" /&gt;
		            &lt;/svg&gt;
		            &lt;p class="ml-3 text-base"&gt;Item 3: contenido.&lt;/p&gt;
		          &lt;/li&gt;
		        &lt;/ul&gt;
		      &lt;/div&gt;
		    &lt;/div&gt;    
      </code>
    </pre>
	</div>	
</div>

<div class="flex gap-x-4">
	<div class="w-2/4 flex justify-center items-center">		
		<pre class="language-css bg-gray-300 dark:bg-gray-900 p-4 rounded">
      <code class="language-css">
      	&#64;layer components {
				  /* Clase base para todos los botones */
				  .contenedor-listas {
				    &#64;apply border border-gray-400 rounded-xl mt-10 mb-10 p-10;
				  }

				  /* Variantes de background */
				  .contenedor-listas__bg {
				    &#64;apply bg-white dark:bg-red-400 hover:bg-blue-700;
				  }

				  /* Variantes de texto */
				  .contenedor-listas__text {
				    &#64;apply text-gray-700 dark:text-gray-300 text-sm/7;
				  }
				}        
      </code>
    </pre>
	</div>
	<div class="w-2/4 flex justify-center items-center">
		<div class="contenedor-listas contenedor-listas__bg contenedor-listas__text">
      <div class="space-y-6">
        <ul class="space-y-3">
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base">Item 1: contenido</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base">Item 2: contenido.</p>
          </li>
          <li class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base">Item 3: contenido.</p>
          </li>
        </ul>
      </div>
    </div>
	</div>
</div>