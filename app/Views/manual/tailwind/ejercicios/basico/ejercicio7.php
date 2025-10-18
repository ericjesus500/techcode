<div class="container mx-auto mt-4">
	<div class="w-full mb-10 lg:px-6 md:px-6">
		<h1 class="underline font-mono text-lg text-blue-600 dark:text-pink-600">EJERCICIO <?= $id; ?></h1>
		<h2 class="my-6 font-mono text-2xl text-gray-300 dark:text-yellow-400">Uso de la clase <span class="text-blue-600 dark:text-green-300">container</span></h2>

		<div class="flex">
			<div class="flex-1">
				<!-- Contenedor principal para toda la página -->
			  <div class="container mx-auto px-4 bg-white shadow-lg my-8 p-6 rounded-lg">
			    <h1 class="text-3xl font-bold mb-4 text-blue-500 dark:text-pink-600">Mi Página Web</h1>
			    <p class="text-gray-700">
			      Este es el contenido principal de la página. El contenedor asegura que el ancho
			      del texto no se extienda demasiado en pantallas grandes, mejorando la lectura.
			    </p>

			    <div class="mt-8 flex flex-wrap sm:flex-col md:flex-col lg:flex-row sm:gap-4 md:gap-0">
			      <!-- Ejemplo de columnas dentro del contenedor -->
			      <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 p-4 bg-blue-100 rounded-lg">
			        <h2 class="text-xl font-semibold dark:text-blue-600">Columna 1</h2>
			        <p class="text-gray-600">Contenido de la primera columna.</p>
			      </div>
			      <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 p-4 bg-teal-300 rounded-lg">
			        <h2 class="text-xl font-semibold dark:text-orange-500">Columna 2</h2>
			        <p class="text-gray-600">Contenido de la segunda columna.</p>
			      </div>
			    </div>
			  </div>
			</div>	
		</div>
	</div>

	<!-- Código + Explicación -->
	<div class="w-full lg:px-6 md:px-6">
		<h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Código</h3>

		<div class="mt-10">
			<pre class="rounded overflow-x-auto">
				<code class="language-html">				
				</code>
			</pre>
		</div>

		<!-- Explicación -->
		<h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Explicación de las utilidades usadas</h3>		
	</div>
</div>