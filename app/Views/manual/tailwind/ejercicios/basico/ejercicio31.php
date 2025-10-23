<div class="container mx-auto mt-4">
	<div class="w-full mb-10 lg:px-6 md:px-6">
		<h1 class="underline font-mono text-lg text-blue-600 dark:text-pink-600">EJERCICIO <?= $id; ?></h1>
		<h2 class="my-6 font-mono text-2xl text-gray-300 dark:text-yellow-400">Práctica:  Creación de un Modal</h2>

		<!-- Modal -->
		<div class="flex">
			<div class="flex-1 md:flex-col">
				<!-- Botón para abrir el modal -->
				<button id="abrirModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
				  Abrir Modal
				</button>
				<!-- Estructura del Modal -->
				<div id="modalContainer" class="hidden fixed inset-0 flex items-center justify-center z-50">
				  <!-- Overlay (fondo semitransparente) -->
				  <div class="absolute inset-0 bg-gray-900 opacity-50"></div>

				  <!-- Diálogo del modal -->
				  <div class="bg-blue-950 dark:bg-white rounded-lg shadow-xl p-6 m-4 w-full max-w-md z-10 relative">
				    <!-- Encabezado del modal -->
				    <div class="flex justify-between items-center mb-4">
				      <h2 class="text-xl font-bold text-orange-600 dark:text-blue-400">Título del Modal</h2>
				      <!-- Botón de cerrar -->
				      <button id="cerrarModal" class="text-gray-500 hover:text-gray-700">
				        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
				        </svg>
				      </button>
				    </div>
				    <!-- Contenido del modal -->
				    <p class="text-white dark:text-gray-600">
				      Este es el contenido de tu modal. Todo está estilizado con clases de utilidad de Tailwind.
				    </p>
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
					&lt;div class="flex"&gt;
						&lt;div class="flex-1 md:flex-col"&gt;
							&lt;!-- Botón para abrir el modal --&gt;
							&lt;button id="abrirModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"&gt;
							  Abrir Modal
							&lt;/button&gt;
							&lt;!-- Estructura del Modal --&gt;
							&lt;div id="modalContainer" class="hidden fixed inset-0 flex items-center justify-center z-50"&gt;
							  &lt;!-- Overlay (fondo semitransparente) --&gt;
							  &lt;div class="absolute inset-0 bg-gray-900 opacity-50"&gt;&lt;/div&gt;

							  &lt;!-- Diálogo del modal --&gt;
							  &lt;div class="bg-blue-950 dark:bg-white rounded-lg shadow-xl p-6 m-4 w-full max-w-md z-10 relative"&gt;
							    &lt;!-- Encabezado del modal --&gt;
							    &lt;div class="flex justify-between items-center mb-4"&gt;
							      &lt;h2 class="text-xl font-bold text-orange-600 dark:text-blue-400"&gt;Título del Modal&lt;/h2&gt;
							      &lt;!-- Botón de cerrar --&gt;
							      &lt;button id="cerrarModal" class="text-gray-500 hover:text-gray-700"&gt;
							        &lt;svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"&gt;
							          &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"&gt;&lt;/path&gt;
							        &lt;/svg&gt;
							      &lt;/button&gt;
							    &lt;/div&gt;
							    &lt;!-- Contenido del modal --&gt;
							    &lt;p class="text-white dark:text-gray-600"&gt;
							      Este es el contenido de tu modal. Todo está estilizado con clases de utilidad de Tailwind.
							    &lt;/p&gt;
							  &lt;/div&gt;
							&lt;/div&gt;
						&lt;/div&gt;
					&lt;/div&gt;
	      </code>
	    </pre>
	  </div>

	  <div class="mt-10">
	    <pre class="rounded overflow-x-auto">
	      <code class="language-javascript">
	      	const abrirModalBtn = document.getElementById('abrirModal');
					const cerrarModalBtn = document.getElementById('cerrarModal');
					const modalContainer = document.getElementById('modalContainer');

					// Función para abrir el modal
					abrirModalBtn.addEventListener('click', () => {
					  modalContainer.classList.remove('hidden');
					});

					// Función para cerrar el modal
					cerrarModalBtn.addEventListener('click', () => {
					  modalContainer.classList.add('hidden');
					});

					// Opcional: Cerrar el modal haciendo clic fuera de él
					modalContainer.addEventListener('click', (e) => {
					  if (e.target === modalContainer.children[0]) {
					    modalContainer.classList.add('hidden');
					  }
					});
	      </code>
	    </pre>
	  </div>

	  <!-- Explicación -->
		<h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Explicación de las utilidades usadas</h3>
		<div class="contenedor-listas">
	    <ul class="space-y-3">
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">hidden</span>: Oculta el modal por defecto. JavaScript lo elimina para mostrarlo.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">fixed inset-0</span>: Posiciona el contenedor del modal en toda la ventana, de forma fija.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">flex items-center justify-center</span>: Centra el contenido del modal vertical y horizontalmente.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">z-50</span>: Asegura que el modal esté por encima del resto del contenido.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">absolute inset-0</span>: El overlay se extiende por todo el contenedor padre.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">bg-gray-900 opacity-50</span>: Establece el color de fondo y la opacidad del overlay.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">bg-white rounded-lg shadow-xl p-6</span>: Estilos para el diálogo del modal: color de fondo, bordes redondeados, sombra, y padding.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">relative</span>: Se usa para que el z-10 del diálogo funcione correctamente.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">max-w-md</span>: Limita el ancho del modal para que no ocupe toda la pantalla.</p>
	      </li>
	      <li class="flex">
	        <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
	          <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
	          <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
	          <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
	        </svg>
	        <p class="ml-3 text-base pathway-extreme-p text-white"><span class="font-mono font-medium text-lg text-gray-950 dark:text-blue-400">hover:bg-blue-700</span>: Variantes para cambiar el estilo al pasar el mouse por encima.</p>
	      </li>
	    </ul>
	  </div>
	</div>
</div>

<script>
	const abrirModalBtn = document.getElementById('abrirModal');
	const cerrarModalBtn = document.getElementById('cerrarModal');
	const modalContainer = document.getElementById('modalContainer');

	// Función para abrir el modal
	abrirModalBtn.addEventListener('click', () => {
	  modalContainer.classList.remove('hidden');
	});

	// Función para cerrar el modal
	cerrarModalBtn.addEventListener('click', () => {
	  modalContainer.classList.add('hidden');
	});

	// Opcional: Cerrar el modal haciendo clic fuera de él
	modalContainer.addEventListener('click', (e) => {
	  if (e.target === modalContainer.children[0]) {
	    modalContainer.classList.add('hidden');
	  }
	});
</script>