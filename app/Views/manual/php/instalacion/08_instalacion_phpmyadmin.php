<h2 id="home8" class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Instalación óptima de phpMyAdmin</h2>
<p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4 mt-5">phpMyAdmin es una herramienta muy popular para administrar bases de datos MySQL/MariaDB de manera sencilla desde el navegador</p>

<!-- En Linux (Debian/Ubuntu) -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>En Linux (Debian/Ubuntu)</h3>
  <div class="contenedor-listas ml-6">
      <ul class="space-y-3">
        <li class="flex flex-col">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Instalación del paquete phpMyAdmin</p>
          </div>
          <div class="mt-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                sudo apt update
                sudo apt install phpmyadmin
              </code>
            </pre>
          </div>
          <p class="pathway-extreme-p text-lg underline ml-8 mt-10 mb-5 text-gray-600 dark:text-orange-500">Durante la instalación:</p>
          <ul class="space-y-3 ml-8">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Selecciona apache2 si te lo pide.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Elige dbconfig-common para configurar la base de datos propia de phpMyAdmin.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Pon la clave/usuario para acceder como administrador.</p>
            </li>
          </ul>
        </li>
        <li class="flex flex-col mt-10">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Habilita la conexión en Apache.- A veces el instalador no añade el enlace automáticamente, así que verifica: </p>
          </div>
          <ul class="space-y-3 mt-10 ml-6">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Agrega el siguiente symlink si no existe:</p>
            </li>
          </ul>
          <div class="mt-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
              </code>
            </pre>
          </div>
          <ul class="space-y-3 mt-10 ml-6">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">O si usas hosts virtuales, a la carpeta de tu proyecto:</p>
            </li>
          </ul>
          <div class="mt-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                //si quieres ponerlo en el subdominio de administración.
                /var/www/miproyecto/admin/phpmyadmin 
              </code>
            </pre>
          </div>
        </li>
        <li class="flex flex-col mt-10">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Habilitar módulo mbstring y reiniciar Apache (si lo pide)</p>
          </div>
          <div class="mt-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                sudo apt install php-mbstring
                sudo phpenmod mbstring
                sudo systemctl restart apache2
              </code>
            </pre>
          </div>
        </li>
        <li class="flex flex-col mt-10">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Acceso</p>
          </div>
          <ul class="space-y-3 mt-5 ml-6">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Ve a http://localhost/phpmyadmin</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">ó a http://admin.miproyecto.local/phpmyadmin (si lo pusiste en tu subdominio).</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Ingresa el usuario y clave de tu MySQL.</p>
            </li>
          </ul>
        </li>
      </ul>
  </div>
</section>

<!-- Instalación Manual (Para Windows o desde source) -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Instalación Manual (Para Windows o desde source)</h3>
  <div class="contenedor-listas ml-6">
    <ul class="space-y-3">
      <li class="flex flex-col">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Descarga la última versión de phpMyAdmin desde su sitio oficial:</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              https://www.phpmyadmin.net/downloads/
            </code>
          </pre>
        </div>
      </li>
      <li class="flex flex-col mt-10">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Descomprime la carpeta descargada</p>
        </div>
        <p class="ml-10 mt-5 pathway-extreme-p text-lg text-gray-600 dark:text-white">Se recomienda colocarla en la carpeta de proyectos</p>
        <ul class="space-y-3 mt-5 ml-6">
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Ejemplo: C:\proyectos\phpmyadmin o C:\proyectos\miproyecto\admin\phpmyadmin</p>
          </li>
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Renombra la carpeta como phpmyadmin.</p>
          </li>
        </ul>
      </li>
      <li class="flex flex-col mt-10">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Configura acceso en Apache</p>
        </div>
        <ul class="space-y-3 mt-5 ml-6">
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Agrega un VirtualHost, o simplemente asegura que sea accesible tipo:</p>
          </li>
        </ul>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              http://admin.miproyecto.local/phpmyadmin
            </code>
          </pre>
        </div>
      </li>
      <li class="flex flex-col mt-10">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Configura phpMyAdmin</p>
        </div>
        <ul class="space-y-3 mt-5 ml-6">
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Copia el archivo de ejemplo:</p>
          </li>
        </ul>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              config.sample.inc.php → config.inc.php
            </code>
          </pre>
        </div>
        <ul class="space-y-3 mt-10 ml-6">
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Dentro de este, genera una frase secreta para $cfg['blowfish_secret'], por ejemplo:</p>
          </li>
        </ul>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              $cfg['blowfish_secret'] = 'unaclavesupersegura123!@#';
            </code>
          </pre>
        </div>
        <ul class="space-y-3 mt-10 ml-6">
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Configura el puerto del servidor MySQL si no es el predeterminado.</p>
          </li>
        </ul>
      </li>
      <li class="flex flex-col mt-10">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Verifica dependencias</p>
        </div>
        <ul class="space-y-3 mt-5 ml-6">
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Revisa que tu PHP tenga activo mbstring, json, ctype, openssl y otros módulos recomendados.</p>
          </li>
        </ul>
      </li>
      <li class="flex flex-col mt-10">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Acceso</p>
        </div>
        <ul class="space-y-3 mt-5 ml-6">
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Ve a http://admin.miproyecto.local/phpmyadmin o a la ruta que elijas.</p>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</section>

<!-- Personalizar phpMyAdmin (tema, idioma, plugins, etc) -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Personalizar phpMyAdmin (tema, idioma, plugins, etc)</h3>
  <p class="ml-6 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Aquí se explica cómo personalizar phpMyAdmin para una experiencia profesional y cómoda:</p>

  <!-- Cambiar el tema visual -->
  <article class="my-14">
    <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Cambiar el tema visual</h4>
    <p class="ml-6 pathway-extreme-p text-xl my-10 text-gray-600 dark:text-orange-500">Ver temas disponibles</p>
    <div class="contenedor-listas mt-5 ml-6">
      <ul class="space-y-3">
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Ingresa a phpMyAdmin. Haz clic en la esquina superior derecha (General Settings / Ajustes generales).</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Busca la opción “Theme” (Tema).</p>
        </li>
      </ul>
    </div>
    <p class="ml-6 pathway-extreme-p text-xl my-10 text-gray-600 dark:text-orange-500">Instalar nuevos temas</p>
    <div class="contenedor-listas mt-5 ml-6">
      <ul class="space-y-3">
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p dark:text-white">Descarga temas oficiales/compatibles desde <a class="text-[#00fff5]" target="_blank">https://www.phpmyadmin.net/downloads/themes/</a>.</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Descomprime el archivo ZIP en la carpeta themes dentro de tu phpMyAdmin (p. ej. <span class="dark:text-[#00fff5]">C:\proyectos\phpmyadmin\themes</span> o <span class="dark:text-[#00fff5]">/usr/share/phpmyadmin/themes)</span>.</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Refresca phpMyAdmin y selecciona tu nuevo tema desde la interfaz de usuario.</p>
        </li>
      </ul>
    </div>
  </article>

  <!-- Cambiar el idioma por defecto -->
  <article class="my-14">
    <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Cambiar el idioma por defecto</h4>
    <div class="contenedor-listas mt-10 ml-6">
      <ul class="space-y-3">
        <li class="flex flex-col">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Ve al archivo config.inc.php en la raíz de tu instalación de phpMyAdmin.</p>
          </div>
        </li>
        <li class="flex flex-col mt-10">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Agrega o modifica la línea:</p>
          </div>
          <div class="mt-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                $cfg['DefaultLang'] = 'es';
              </code>
            </pre>
          </div>
        </li>
        <li class="flex flex-col mt-10">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">O desde la interfaz web:
                Arriba a la derecha, selecciona tu idioma en el menú desplegable (idioma).
              </p>
          </div>
        </li>
      </ul>
    </div>
  </article>

  <!-- Habilitar/deshabilitar plugins y funcionalidades -->
  <article class="my-14">
    <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Habilitar/deshabilitar plugins y funcionalidades</h4>
    <div class="contenedor-listas mt-10 ml-6">
      <ul class="space-y-3">
        <li class="flex flex-col">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Editar config.inc.php y los archivos dentro de la carpeta /plugins.</p>
          </div>
        </li>
        <li class="flex flex-col mt-10">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Para funcionalidades frecuentes:</p>
          </div>
          <p class="ml-6 pathway-extreme-p text-lg mt-10 text-gray-600 dark:text-orange-500">Configuración de exportación/importación avanzada:</p>
          <div class="mt-5 ml-6 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                $cfg['Export']['format'] = 'sql';
                $cfg['Export']['compression'] = 'none';
              </code>
            </pre>
          </div>
          <p class="ml-6 pathway-extreme-p text-lg mt-10 text-gray-600 dark:text-orange-500">Habilitar/deshabilitar funcionalidades para usuarios (por ejemplo, ocultar la opción de cambiar contraseña):</p>
          <div class="mt-5 ml-6 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                $cfg['Servers'][$i]['AllowNoPassword'] = false;
              </code>
            </pre>
          </div>
          <p class="ml-6 pathway-extreme-p text-lg mt-10 text-gray-600 dark:text-orange-500">Limitar bases de datos accesibles en la interfaz:</p>
          <div class="mt-5 ml-6 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                $cfg['Servers'][$i]['only_db'] = array('mibasededatos1', 'mibasededatos2');
              </code>
            </pre>
          </div>
        </li>
      </ul>
    </div>
  </article>

  <!-- Plugins recomendados -->
  <article class="my-14">
    <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Plugins recomendados</h4>
    <div class="contenedor-listas mt-10 ml-6">
      <ul class="space-y-3">
        <li class="flex flex-col">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Consulta el repositorio oficial de plugins o la comunidad de temas para ver si hay extensiones (aunque la mayoría de funcionalidades avanzadas están incluidas de serie en phpMyAdmin actual).</p>
          </div>
        </li>
        <li class="flex flex-col mt-10">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Puedes consultar o instalar plugins externos copiando archivos al directorio plugins/ y habilitándolos en la configuración.</p>
          </div>
        </li>
      </ul>
    </div>
  </article>

  <!-- Otras personalizaciones útiles -->
  <article class="my-14">
    <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Otras personalizaciones útiles</h4>
    <div class="contenedor-listas mt-10 ml-6">
      <ul class="space-y-3">
        <li class="flex md:flex-col lg:flex-col">
          <div class="flex md:flex-row lg:flex-row">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Aumentar la duración de la sesión (útil en desarrollo):</p>
          </div>
          <div class="my-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                $cfg['LoginCookieValidity'] = 3600; // 1 hora
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
            <p class="ml-3 text-base pathway-extreme-p text-white">Mostrar siempre estructura expandida de las bases de datos</p>
          </div>
          <div class="my-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                $cfg['LeftFrameDBTree'] = true;
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
            <p class="ml-3 text-base pathway-extreme-p text-white">Personalización avanzada de la tabla de inicio (favoritos, queries comunes, bookmarks, etc).</p>
          </div>
        </li>
      </ul>
    </div>
  </article>

  <!-- Seguridad extra -->
  <article class="my-14">
    <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Seguridad extra</h4>
    <div class="contenedor-listas mt-10 ml-6">
      <ul class="space-y-3">
        <li class="flex md:flex-col lg:flex-col">
          <div class="flex md:flex-row lg:flex-row">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
                <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
                <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
                <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Restringe acceso por IP editando tu host virtual (Linux o Apache en Windows):</p>
          </div>
          <div class="my-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;Directory "/ruta/phpmyadmin"&gt;
                  Require ip 127.0.0.1
                  # O tu segmento local
                  # Require ip 192.168.1
                &lt;/Directory&gt;
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
            <p class="ml-3 text-base pathway-extreme-p text-white">Cambia la carpeta por defecto “phpmyadmin” a un nombre personalizado no adivinable si lo deseas, para desarrollo seguro en equipo.</p>
          </div>
        </li>
      </ul>
    </div>
  </article>
</section>

<!-- Buenas Practicas -->
<section>
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Buenas Practicas</h3>
  <div class="mt-8 p-6 bg-blue-50 dark:bg-yellow-50 rounded-lg">
    <ul class="space-y-3">
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-gray-800">Mantén phpMyAdmin actualizado y protegido: si es solo para desarrollo, puedes restringir el acceso por IP usando directivas de Apache.</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-gray-800">• No dejes phpMyAdmin expuesto en producción ni accesible por internet — si llegas a subir tu sistema, recuerda eliminarlo de los hosts reales.</p>
      </li>
    </ul>
  </div>
</section>