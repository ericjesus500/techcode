<!-- Capitulo 09: El archivo tailwind.config.js -->
<hr>
<article id="cap9" class="mx-auto w-full mt-4">
  <div class="flex md:flex-row">
    <section class="w-3/4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow md:box-border lg:box-border">
      <h1 class="text-3xl font-semibold font-roboto text-gray-700 dark:text-blue-300 mb-4">Capítulo <?= $capitulo; ?>: El archivo tailwind.config.js</h1>
      <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">El archivo tailwind.config.js sigue siendo necesario en Tailwind CSS 4.0 en todos aquellos casos donde se requiera personalizar, extender o modificar la configuración por defecto del framework.</p>

      <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">La filosofía de "Zero Configuration" de v4.0 aplica principalmente cuando se utiliza la configuración predeterminada. En cuanto necesites desviarte de los valores de fábrica, debes crear y usar el archivo de configuración.</p>

      <!-- 8.1 Creación del archivo tailwind.config.js -->
      <article class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">8.1 Creación del archivo tailwind.config.js</h2>
        <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Para crear el archivo tailwind.config.js, puedes utilizar el siguiente comando en tu terminal:</p>
        <pre class="rounded overflow-x-auto my-6">
          <code class="language-bash">npx tailwindcss init</code>
        </pre>
      </article>

      <!-- 8.2 Estructura del archivo tailwind.config.js -->
      <article class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">8.2 Estructura del archivo tailwind.config.js</h2>
        <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">El archivo tailwind.config.js generado tendrá una estructura básica similar a la siguiente:</p>
        <pre class="rounded overflow-x-auto my-6">
          <code class="language-javascript">module.exports = {
              content: [],
              theme: {
                extend: {},
              },
              plugins: [],
            }
          </code>
        </pre>

        <!-- Propiedad content -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Propiedad content</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La propiedad content es crucial para que Tailwind CSS pueda purgar las clases no utilizadas en tu proyecto. Debes especificar las rutas a todos los archivos donde utilizarás clases de Tailwind CSS, como archivos HTML, JavaScript, PHP, etc.</p>

          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <pre class="rounded overflow-x-auto my-6">
            <code class="language-javascript">module.exports = {
                content: [
                  "./src/**/*.{html,js,php}",
                  "./public/index.html",
                ],
                theme: {
                  extend: {},
                },
                plugins: [],
              }
            </code>
          </pre>
        </section>

        <!-- Personalización del tema -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Personalización del tema</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Dentro del objeto theme, puedes personalizar y extender la configuración predeterminada de Tailwind CSS. Por ejemplo, puedes agregar colores personalizados, fuentes, tamaños, etc.</p>

          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <pre class="rounded overflow-x-auto my-6">
            <code class="language-javascript">module.exports = {
                content: [
                  "./src/**/*.{html,js,php}",
                ],
                theme: {
                  extend: {
                    colors: {
                      primary: '#1DA1F2',
                      secondary: '#14171A',
                    },
                    fontFamily: {
                      sans: ['Inter', 'sans-serif'],
                    },
                  },
                },
                plugins: [],
              }
            </code>
          </pre>
        </section>

        <!-- Plugins -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Plugins</h3>
          <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">La propiedad plugins te permite agregar funcionalidades adicionales a Tailwind CSS mediante la inclusión de plugins oficiales o personalizados.</p>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
          <pre class="rounded overflow-x-auto my-6">
            <code class="language-javascript">const forms = require('@tailwindcss/forms');

              module.exports = {
                content: [
                  "./src/**/*.{html,js,php}",
                ],
                theme: {
                  extend: {},
                },
                plugins: [forms],
              }
            </code>
          </pre>
        </section>
      </article>

      <!-- 8.3 Personalización o Extensión del Tema (theme) -->
      <article class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">8.3 Personalización o Extensión del Tema (theme)</h2>
        <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Este es el caso de uso más común. Si necesitas agregar, modificar o extender los valores predeterminados para colores, tipografías, espaciados, tamaños de pantalla (breakpoints), etc., el archivo tailwind.config.js es indispensable.</p>

        <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Puedes personalizar o extender el tema predeterminado de Tailwind CSS dentro del objeto theme en el archivo tailwind.config.js. Esto te permite adaptar el diseño a las necesidades específicas de tu proyecto.</p>
        <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Por ejemplo, para agregar colores personalizados, puedes hacerlo de la siguiente manera:</p>
        <pre class="rounded overflow-x-auto my-6">
          <code class="language-javascript">module.exports = {
              theme: {
                extend: {
                  colors: {
                    brandBlue: '#1DA1F2',
                    brandGray: '#14171A',
                  },
                },
              },
            }
          </code>
        </pre>

        <!-- Casos de uso -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Casos de uso</h3>

          <!-- Agregar colores personalizados -->
          <article>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Agregar colores personalizados</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Puedes agregar colores personalizados para usarlos en tus clases de Tailwind CSS.</p>
            <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
            <pre class="rounded overflow-x-auto my-6">
              <code class="language-javascript">module.exports = {
                  theme: {
                    extend: {
                      colors: {
                        brandBlue: '#1DA1F2',
                        brandGray: '#14171A',
                      },
                    },
                  },
                }
              </code>
            </pre>
          </article>

          <!-- Modificar tamaños de pantalla (breakpoints) -->
          <article>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Modificar tamaños de pantalla (breakpoints)</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Puedes ajustar los puntos de interrupción predeterminados para adaptarlos a tus necesidades de diseño responsivo.</p>
            <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
            <pre class="rounded overflow-x-auto my-6">
              <code class="language-javascript">module.exports = {
                  theme: {
                    extend: {
                      screens: {
                        'xs': '480px',
                        '2xl': '1536px',
                      },
                    },
                  },
                }
              </code>
            </pre>
          </article>

          <!-- Extender tipografías -->
          <article>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Extender tipografías</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Puedes agregar fuentes personalizadas para utilizarlas en tu proyecto.</p>
            <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
            <pre class="rounded overflow-x-auto my-6">
              <code class="language-javascript">module.exports = {
                  theme: {
                    extend: {
                      fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif'],
                      },
                    },
                  },
                }
              </code>
            </pre>
          </article>

          <!-- Personalizar espaciados y tamaños -->
          <article>
            <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Personalizar espaciados y tamaños</h4>
            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Puedes definir valores personalizados para márgenes, rellenos, anchos y alturas.</p>
            <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo:</p>
            <pre class="rounded overflow-x-auto my-6">
              <code class="language-javascript">module.exports = {
                  theme: {
                    extend: {
                      spacing: {
                        '72': '18rem',
                        '84': '21rem',
                        '96': '24rem',
                      },
                    },
                  },
                }
              </code>
            </pre>
          </article>
        </section>
      </article>

      <!-- 8.4 Plugins personalizados o de terceros -->
      <article class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">8.4 Plugins personalizados o de terceros</h2>
        <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Si deseas agregar funcionalidades adicionales a Tailwind CSS, como formularios, tipografías avanzadas, o cualquier otra característica, puedes utilizar plugins oficiales o de terceros. Estos plugins se configuran en el archivo tailwind.config.js dentro de la propiedad plugins.</p>

        <!-- Plugins oficiales o de trerceros -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Plugins oficiales o de trerceros</h3>
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Por ejemplo, para agregar el plugin oficial de formularios de Tailwind CSS, debes instalarlo primero:</p>
          <pre class="rounded overflow-x-auto my-6">
            <code class="language-bash">npm install @tailwindcss/forms</code>
          </pre>
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Luego, lo agregas al archivo tailwind.config.js:</p>
          <pre class="rounded overflow-x-auto my-6">
            <code class="language-javascript">            
              const forms = require('@tailwindcss/forms');
              module.exports = {
                theme: {
                  extend: {},
                },
                plugins: [forms],
              }
            </code>
          </pre>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Ejemplo de uso:</p>
          <pre class="rounded overflow-x-auto my-6">
            <code class="language-html">
              &lt;form&gt;
                &lt;label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300"&gt;Email address&lt;/label&gt;
                &lt;input type="email" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"&gt;
              &lt;/form&gt;
            </code>
          </pre>
        </section>

        <!-- Plugins personalizados -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Plugins personalizados</h3>
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">También puedes crear tus propios plugins personalizados para agregar utilidades o componentes específicos a tu proyecto. Un plugin personalizado es una función que recibe el objeto de Tailwind CSS y utiliza su API para registrar nuevas utilidades, componentes o variantes.</p>
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Aquí tienes un ejemplo básico de cómo crear un plugin personalizado que agrega una utilidad para aplicar un filtro de desenfoque:</p>
          <pre class="rounded overflow-x-auto my-6">
            <code class="language-javascript">
              const plugin = require('tailwindcss/plugin');

              const blurPlugin = plugin(function({ addUtilities }) {
                const newUtilities = {
                  '.blur-sm': {
                    filter: 'blur(4px)',
                  },
                  '.blur-md': {
                    filter: 'blur(8px)',
                  },
                  '.blur-lg': {
                    filter: 'blur(12px)',
                  },
                };
                addUtilities(newUtilities, ['responsive', 'hover']);
              });

              module.exports = {
                theme: {
                  extend: {},
                },
                plugins: [blurPlugin],
              }
            </code>
          </pre>
        </section>

        <!-- Ejercicios propuestos y desarrollados -->
        <section>
          <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-green-500"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Ejercicios propuestos y desarrollados</h3>
          <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">A continuación, se presentan algunos ejercicios para practicar la creación y configuración del archivo tailwind.config.js:</p>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li>Crear un archivo tailwind.config.js que agregue una paleta de colores personalizada y utilice esos colores en una página HTML.</li>
            <li>Modificar los puntos de interrupción predeterminados para adaptarlos a un diseño específico y crear un diseño responsivo utilizando esas configuraciones.</li>
            <li>Instalar y configurar el plugin oficial de tipografía de Tailwind CSS y aplicar estilos tipográficos avanzados en un proyecto.</li>
          </ol>
          <p class="ml-3 pathway-extreme-p text-xl underline my-10 text-gray-600 dark:text-white">Desarrollos:</p>
          <pre class="rounded overflow-x-auto my-6">
            <code class="language-javascript">            
              // Desarrollo de los ejercicios propuestos
              // 1. Archivo tailwind.config.js con paleta de colores personalizada
              module.exports = {
                theme: {
                  extend: {
                    colors: {
                      customBlue: '#1E40AF',
                      customGreen: '#10B981',
                    },
                  },
                },
                plugins: [],
              }

              // 2. Modificación de puntos de interrupción
              module.exports = {
                theme: {
                  extend: {
                    screens: {
                      'tablet': '640px',
                      'laptop': '1024px',
                      'desktop': '1280px',
                    },
                  },
                },
                plugins: [],
              }

              // 3. Configuración del plugin de tipografía
              const typography = require('@tailwindcss/typography');

              module.exports = {
                theme: {
                  extend: {},
                },
                plugins: [typography],
              }
            </code>
          </pre>
        </section>
      </article>

      <!-- 8.5 Configuraciòn avanzada del núcleo -->
      <article class="mt-8 p-6">
        <h2 class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">8.5 Configuraciòn avanzada del núcleo</h2>
        <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Tailwind CSS permite una configuración avanzada del núcleo a través del archivo tailwind.config.js. Puedes habilitar o deshabilitar ciertas funcionalidades, ajustar el comportamiento predeterminado y optimizar el rendimiento de tu proyecto.</p>
        <p class="pathway-extreme-p text-lg text-gray-600 dark:text-gray-300 mb-4">Por ejemplo, puedes deshabilitar ciertas utilidades que no necesitas para reducir el tamaño del archivo CSS generado:</p>

        <pre class="rounded overflow-x-auto my-6">
          <code class="language-javascript">            
            module.exports = {
              corePlugins: {
                preflight: false, // Deshabilitar estilos base
                float: false,     // Deshabilitar utilidades de float
              },
              theme: {
                extend: {},
              },
              plugins: [],
            }
          </code>
        </pre>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Se puede cambiar el prefijo de todas las clases de utilidad. Por defecto no tiene prefijo, pero podrías cambiarlo a algo como tw- para evitar conflictos con otras librerías.</p>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Tambien se puede forzar la directiva !important para todas las utilidades, útil en entornos heredados o donde hay conflictos de CSS muy difíciles de resolver.</p>
        <pre class="rounded overflow-x-auto my-6">
          <code class="language-javascript">            
            /** @type {import('tailwindcss').Config} */
            export default {
              prefix: 'tw-', // Todas las clases serían 'tw-flex', 'tw-p-4', etc.
              important: true, // Todas las utilidades se renderizarían con !important
              // ...
            }
          </code>
        </pre>

        <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">En resumen:</p>
        <div class="contenedor-listas">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">El archivo tailwind.config.js es esencial para personalizar y extender Tailwind CSS.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Permite definir rutas de contenido, personalizar el tema, agregar plugins y configurar el núcleo.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Es una herramienta poderosa para adaptar Tailwind CSS a las necesidades específicas de tu proyecto.</p>
            </li>
          </ul>
        </div>
      </article>

      <!-- Ejercicios -->
      <article class="mt-8 p-6">
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg">
          <h4 class="text-xl font-mono text-blue-800 dark:text-blue-300 mb-2">✏️ Ejercicios</h4>
          <ol class="list-decimal list-inside space-y-2 text-gray-700 dark:text-gray-300">
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
            <li><a href="./ejercicios/basicos/tailwind/" target="_blank"></a></li>
          </ol>
        </div>
      </article>
    </section>

    <aside id="subtitulos " class="flex-1 h-screen px-3 text-gray-600 md:box-border lg:box-border bg-yellow-600 dark:bg-yellow-50 dark:border-gray-300 flex flex-col">
      <div class="mt-3 h-8 dark:bg-pink-100">
        <h2 class="text-xl font-mono text-center">Sub Capitulos</h2>
      </div>
      <div class="content-subtitulos dark:bg-blue-400 h-auto mt-6 relative">hola</div>
    </aside>
  </div>
</article>