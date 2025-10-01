<h1 class="underline font-mono text-lg text-gray-600 dark:text-pink-600">EJERCICIO 03</h1>
<h2 class="text-3xl text-dark-600 dark:text-green-400 mt-7">Cómo añadir tipografías personalizadas</h2>
<div class="w-full mt-5 mb-10 p-lg-6 p-md-6">
	<p class="font-sans text-gray-600 dark:text-gray-300 mb-4">Puedes añadir tus propias tipografías al archivo de configuración de Tailwind (tailwind.config.js). Esto es útil si quieres usar fuentes de servicios como Google Fonts o una fuente personalizada alojada localmente.</p>
	<p class="font-sans text-gray-600 dark:text-gray-300 mb-4">1. Importar la fuente. Primero, importa la fuente en tu archivo CSS principal (por ejemplo, input.css o main.css). Si usas Google Fonts, copia y pega el código @import que te proporcionan:</p>
	<pre class="rounded">
	  <code class="language-css">
	  	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
	  </code>
	</pre>
	<p class="font-sans text-gray-600 dark:text-gray-300 mb-4">2. Configurar el archivo tailwind.config.js. Abre tailwind.config.js y edita la sección theme.fontFamily. Puedes extender o reemplazar las fuentes por defecto:</p>
	<pre class="rounded">
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
	<p class="font-sans text-gray-600 dark:text-gray-300 mb-4">3. Aplicar la nueva clase en el HTML. Después de configurar y recompilar tus estilos, podrás usar la nueva clase en tu HTML:</p>
	<pre class="rounded">
	  <code class="language-html">
	  	&lt;p class="font-roboto"&gt;
			  Este texto usa la fuente personalizada Roboto.
			&lt;/p&gt;
	  </code>
	</pre>
</div>