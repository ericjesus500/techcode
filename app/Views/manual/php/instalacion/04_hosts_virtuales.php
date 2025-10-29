<h2 id="home4" class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Crear Hosts Virtuales en Apache (Linux y Windows)</h2>
<p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Esto te permitirá organizar varios proyectos independientes, cada uno con su propia carpeta y dominio local, sin depender de htdocs o /var/www/html.</p>

<!-- Linux (Debian/Ubuntu) -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Linux (Debian/Ubuntu)</h3>
  <div class="contenedor-listas">
    <ul class="space-y-3">
      <li class="flex flex-col">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Crear Carpeta del Proyecto:</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              sudo mkdir /var/www/tu_proyecto
              sudo chown $USER:$USER /var/www/tu_proyecto
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Crear un archivo de configuración para el host virtual.</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              sudo nano /etc/apache2/sites-available/tu_proyecto.conf
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Ejemplo de contenido:</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;ServerAdmin admin@localhost
                  &nbsp;&nbsp;&nbsp;ServerName tu_proyecto.local
                  &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/tu_proyecto
                  &nbsp;&nbsp;&nbsp;&lt;Directory /var/www/tu_proyecto&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options Indexes FollowSymLinks
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                  &nbsp;&nbsp;&nbsp;ErrorLog ${APACHE_LOG_DIR}/tu_proyecto_error.log
                  &nbsp;&nbsp;&nbsp;CustomLog ${APACHE_LOG_DIR}/tu_proyecto_access.log combined
              &lt;/VirtualHost&gt;
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Activar el Host Virtual</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              sudo a2ensite tu_proyecto.conf
              sudo systemctl reload apache2
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Actualizar el archivo hosts</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              sudo nano /etc/hosts
            </code>
          </pre>
        </div>
        <p class="ml-10 mt-10 text-base pathway-extreme-p text-white">Agrega una línea:</p>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              127.0.0.1   tu_proyecto.local
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Comprobar</p>
        </div>
        <ul class="ml-10 space-y-3 mt-10">
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Coloca un archivo index.php en /var/www/tu_proyecto.</p>
          </li>
          <li class="flex md:flex-row lg:flex-row">
            <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
            <p class="ml-3 text-base pathway-extreme-p text-white">Accede a <span class="font-mono dark:text-[#00fff5]">http://tu_proyecto.local</span>
              Deberías ver tu proyecto sin usar htdocs.</p>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</section>

<!-- Windows -->
<section>
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Windows</h3>
  <div class="contenedor-listas">
    <ul class="space-y-3">
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Crear Carpeta del Proyecto en <span class="font-mono dark:text-[#00fff5]">C:\ruta\a\tu_proyecto</span>.</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Crear un archivo de configuración para el host virtual en Apache's conf\extra\httpd-vhosts.conf.</p>
      </li>
      <li class="flex md:flex-col lg:flex-col">
        <div class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Ejemplo de contenido similar al de Linux, ajustando las rutas.</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              &lt;VirtualHost *:80&gt;
                &nbsp;&nbsp;&nbsp;DocumentRoot "C:/proyectos/tu_proyecto"
                &nbsp;&nbsp;&nbsp;ServerName tu_proyecto.local
                &nbsp;&nbsp;&nbsp;&lt;Directory "C:/proyectos/tu_proyecto"&gt;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options Indexes FollowSymLinks
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
              &lt;/VirtualHost&gt;
            </code>
          </pre>
        </div>
      </li>
      <li class="flex md:flex-col lg:flex-col mt-10">
        <div class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Actualizar el archivo hosts en <span class="font-mono dark:text-[#00fff5]">C:\Windows\System32\drivers\etc\hosts</span>. como administrador; agrega:</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              127.0.0.1     tu_proyecto.local
            </code>
          </pre>
        </div>
      </li>
      <li class="flex md:flex-row lg:flex-row mt-10">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Reiniciar Apache usando el servicio o ejecuta el comando para detener y volver a iniciar Apache</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Comprobar: Coloca un archivo index.php en la nueva carpeta y accede a <span class="font-mono dark:text-[#00fff5]">http://tu_proyecto.local</span>.</p>
      </li>
    </ul>
  </div>
</section>