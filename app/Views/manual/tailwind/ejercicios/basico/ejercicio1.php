<div class="container mx-auto mt-4">
	<div class="w-full mb-10 lg:px-6 md:px-6">
		<h1 class="underline font-mono text-lg text-blue-600 dark:text-pink-600">EJERCICIO <?= $id; ?></h1>
		<h2 class="my-6 font-mono text-2xl text-gray-300 dark:text-yellow-400">Creación de un botón reutilizable usando @apply.</h2>
		<p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300">El enfoque más sencillo para crear un componente reutilizable en Tailwind es utilizando la directiva @apply en tu archivo CSS. Esto es ideal para proyectos sin frameworks de componentes o para elementos que se repiten con frecuencia (como botones, tarjetas o inputs)</p>	
		<div class="mt-10 p-4 bg-gray-900 dark:bg-yellow-200 rounded">
			<p class="pathway-extreme-p text-lg text-white dark:text-gray-900">Paso 1: Define las clases base y de variantes en tu archivo CSS
				Crea un archivo CSS principal (por ejemplo, styles.css) y añade las siguientes reglas dentro de la capa @layer components. Esto asegura que tus estilos personalizados tengan la especificidad correcta y no anulen las utilidades por defecto.</p>
		</div>
		<div class="mt-10">
			<pre class="rounded overflow-x-auto">
				<code class="language-javascript">
					@import "tailwindcss";

					@custom-variant dark (&:where(.dark, .dark *));
						
					@theme{
						--font-sans: 'Inter', sans-serif;
					}

					@layer components {
						/* Clase base para todos los botones */
						.btn {
							@apply py-2 px-4 rounded transition-colors duration-200;
						}

						/* Variantes de color */
						.btn-primary {
							@apply bg-blue-500 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500;
						}

						.btn-secondary {
							@apply bg-gray-300 text-gray-800 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300;
						}
					}
				</code>
			</pre>
		</div>
		<div class="mt-10 p-4 bg-red-900 dark:bg-yellow-200 rounded">
			<p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-900">Paso 2: Utiliza el componente en tu HTML
				Ahora puedes usar estas clases de forma más limpia en tu HTML, sin necesidad de repetir las múltiples utilidades de Tailwind cada vez que necesites un botón.</p>
		</div>
		<div class="mt-10">
			<pre class="rounded overflow-x-auto">
				<code class="language-html">
					&lt;!DOCTYPE html&gt;
					&lt;html lang="es"&gt;
					&lt;head&gt;
						&lt;link rel="stylesheet" href="./styles.css"&gt;
					&lt;/head&gt;
					&lt;body&gt;
						&lt;button class="btn btn-primary"&gt;Botón Primario&lt;/button&gt;
						&lt;button class="btn btn-secondary"&gt;Botón Secundario&lt;/button&gt;
						&lt;button class="btn btn-primary hover:scale-105"&gt;Botón con utilidades extra&lt;/button&gt;
					&lt;/body&gt;
					&lt;/html&gt;
				</code>
			</pre>
		</div>
		<div class="mt-10">
			<p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300">En este ejemplo, el último botón muestra una gran ventaja: puedes usar la clase base (btn) y la de variante (btn-primary), y luego añadir utilidades adicionales (hover:scale-105) para personalizar un caso específico sin romper la coherencia del componente base.</p>
		</div>
	</div>	
</div>