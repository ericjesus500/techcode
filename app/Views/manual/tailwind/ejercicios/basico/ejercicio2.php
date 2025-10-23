<div class="container mx-auto mt-4">
	<div class="w-full mb-10 lg:px-6 md:px-6">
		<h1 class="underline font-mono text-lg text-blue-600 dark:text-pink-600">EJERCICIO <?= $id; ?></h1>
		<h2 class="my-6 font-mono text-2xl text-gray-300 dark:text-yellow-400">Cómo añadir tipografías personalizadas</h2>
		<p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300">Puedes añadir tus propias tipografías al archivo de configuración de Tailwind (tailwind.config.js). Esto es útil si quieres usar fuentes de servicios como Google Fonts o una fuente personalizada alojada localmente.</p>

		<div class="mt-10 p-4 bg-gray-900 dark:bg-yellow-200 rounded">
			<p class="pathway-extreme-p text-lg text-white dark:text-gray-900">Paso 1: Importar la fuente. Primero, importa la fuente en tu archivo CSS principal (por ejemplo, input.css o main.css). Si usas Google Fonts, copia y pega el código @import que te proporcionan</p>
		</div>

		<div class="mt-10">
			<pre class="rounded overflow-x-auto">
				<code class="language-css">
					@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
				</code>
			</pre>
		</div>

		<div class="mt-10 p-4 bg-gray-900 dark:bg-yellow-200 rounded">
			<p class="pathway-extreme-p text-lg text-white dark:text-gray-900">Paso 2: Configurar el archivo tailwind.config.js. Abre tailwind.config.js y edita la sección theme.fontFamily. Puedes extender o reemplazar las fuentes por defecto</p>
		</div>

		<div class="mt-10">
			<pre class="rounded overflow-x-auto">
				<code class="language-javascript">
					// tailwind.config.js
					/** @type {import('tailwindcss').Config} */
					module.exports = {
						theme: {
							extend: {
								fontFamily: {
									// Agrega una nueva tipografía personalizada
									roboto: ['Roboto', 'sans-serif'],
									// Puedes sobrescribir una de las tipografías por defecto
									sans: ['ui-sans-serif', 'system-ui', 'Roboto', 'sans-serif'],
								},
							},
						},
						plugins: [],
					};
				</code>
			</pre>
		</div>

		<div class="mt-10 p-4 bg-gray-900 dark:bg-yellow-200 rounded">
			<p class="pathway-extreme-p text-lg text-white dark:text-gray-900">Paso 3: Aplicar la nueva clase en el HTML. Después de configurar y recompilar tus estilos, podrás usar la nueva clase en tu HTML</p>
		</div>

		<div class="mt-10">
			<pre class="rounded overflow-x-auto">
				<code class="language-html">
					&lt;p class="font-roboto"&gt;
						Este texto usa la fuente personalizada Roboto.
					&lt;/p&gt;
				</code>
			</pre>
		</div>
	</div>	
</div>