<h1 class="underline font-mono text-lg text-gray-600 dark:text-pink-600">EJERCICIO 02</h1>
<h2 class="text-3xl text-dark-600 dark:text-green-400 mt-7">Componente de tarjeta en un framework (React)</h2>
<div class="w-full mt-5 mb-10 p-lg-6 p-md-6">
	<p class="font-sans text-gray-600 dark:text-gray-300 mb-4">Para proyectos más grandes que utilizan frameworks de JavaScript como React, Vue o Svelte, la encapsulación de componentes es la mejor práctica. Esto te permite gestionar los estilos dentro del propio componente, pasándolos como props. </p>
	<p class="font-sans text-gray-600 dark:text-gray-300 mb-4">Paso 1: Crea el componente (por ejemplo, en React) En este caso, se crea un archivo de componente (Card.jsx) que recibe los datos como props</p>
	<pre class="rounded overflow-x-auto">
	  <code class="language-jsx">
			// src/components/Card.jsx
			import React from 'react';

			const Card = ({ title, description, image, alt }) => {
			  return (
			    &lt;div className="max-w-sm rounded overflow-hidden shadow-lg m-4"&gt;
			      {image && &lt;img className="w-full" src={image} alt={alt} /&gt;}
			      &lt;div className="px-6 py-4"&gt;
			        {title && &lt;div className="font-bold text-xl mb-2"&gt;{title}&lt;/div&gt;}
			        {description && &lt;p className="text-gray-700 text-base"&gt;{description}&lt;/p&gt;}
			      &lt;/div&gt;
			    &lt;/div&gt;
			  );
			};

			export default Card;
	  </code>
	</pre>
	<p class="font-sans text-gray-600 dark:text-gray-300 mb-4">Paso 2: Utiliza el componente en tu aplicación. Ahora puedes importar y utilizar este componente en cualquier lugar de tu aplicación, pasándole los datos necesarios.</p>
	<pre class="rounded">
	  <code class="language-jsx">
			// src/App.jsx
			import Card from './components/Card';
			import './index.css'; // Asegúrate de que el CSS de Tailwind está importado

			function App() {
			  return (
			    &lt;div className="flex justify-center items-center h-screen"&gt;
			      &lt;Card
			        title="Artículo de blog"
			        description="Este es un componente de tarjeta reutilizable creado con Tailwind CSS."
			        image="https://via.placeholder.com/400x200"
			        alt="Imagen de ejemplo"
			      /&gt;
			      &lt;Card
			        title="Otro artículo"
			        description="Aquí está otra tarjeta con contenido diferente, pero con el mismo estilo."
			      /&gt;
			    &lt;/div&gt;
			  );
			}

			export default App;
	  </code>
	</pre>
	<p class="font-sans text-gray-600 dark:text-gray-300 mb-4">Este enfoque mantiene el código de tu interfaz de usuario modular y limpio, facilitando las actualizaciones y el mantenimiento a medida que tu proyecto crece.</p>
</div>