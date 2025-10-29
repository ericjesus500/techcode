<h2 id="home7" class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Uso de Subdominios en Apache (Linux y Windows)</h2>

<!-- Estructura de carpetas para trabajar con subdominios -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Estructura de carpetas para trabajar con subdominios</h3>
  <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Se muestra cómo organizar múltiples subdominios para un proyecto con: sitio principal, API, panel de administración y blog.</p>
  <div class="mt-10 overflow-x-auto">
    <pre class="ind-pre rounded overflow-x-auto">
      <code>
          /var/www/miproyecto/          (o C:\proyectos\miproyecto\ en Windows)
          │
          ├── www/                      # Sitio principal (frontend público)
          │   ├── index.php
          │   └── assets/
          │       ├── css/
          │       └── js/
          │
          ├── api/                      # API REST del proyecto
          │   ├── index.php
          │   ├── endpoints/
          │   │   ├── usuarios.php
          │   │   └── productos.php
          │   └── config/
          │       └── database.php
          │
          ├── admin/                    # Panel de administración
          │   ├── index.php
          │   ├── login.php
          │   └── dashboard.php
          │
          └── blog/                     # Blog o sección de contenido
              ├── index.php
              └── posts/
                  └── articulo.php
      </code>
    </pre>
  </div>
</section>

<!-- VirtualHost para subdominios -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>VirtualHost para subdominios</h3>
  <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Para configurar subdominios en Apache, crea un archivo de configuración para cada subdominio en el directorio de sitios disponibles. Por ejemplo, para un subdominio llamado blog.tu_proyecto.local:</p>
  <div class="mt-10 ml-6 overflow-x-auto">
    <pre class="ind-pre rounded overflow-x-auto">
      <code>
        &lt;VirtualHost *:80&gt;
          &nbsp;&nbsp;&nbsp;ServerName blog.tu_proyecto.local
          &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/tu_proyecto/blog
          &nbsp;&nbsp;&nbsp;... (otras configuraciones)
        &lt;/VirtualHost&gt;
      </code>
    </pre>
  </div>
  <div class="mt-10 ml-6 overflow-x-auto">
    <pre class="ind-pre rounded overflow-x-auto">
      <code>
        &lt;VirtualHost *:80&gt;
          &nbsp;&nbsp;&nbsp;ServerName usuarios.tu_proyecto.local
          &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/tu_proyecto/usuarios
          &nbsp;&nbsp;&nbsp;... (otras configuraciones)
        &lt;/VirtualHost&gt;
      </code>
    </pre>
  </div>
  <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Luego, agrega el subdominio al archivo hosts:</p>
  <div class="mt-10 ml-6 overflow-x-auto">
    <pre class="ind-pre rounded overflow-x-auto">
      <code>
        127.0.0.1    app1.mi_sitio.local
        127.0.0.1    app2.mi_sitio.local
      </code>
    </pre>
  </div>
  <div class="mt-10 ml-6 p-4 bg-red-900 dark:bg-red-500 rounded">
    <p class="pathway-extreme-p text-lg text-gray-600 dark:text-white"><i class="bi bi-exclamation-triangle mr-2"></i>Nota: </p>
    <hr class="border-1 border-gray-200 my-2">
    <p class="font-mono text-lg">Para HTTPS, igual procedimiento pero en el puerto 443 y usando certificados (puedes usar el mismo certificado para todos si son sólo para desarrollo local).</p>
  </div>
</section>

<!-- Configuración de VirtualHosts en Apache -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Configuración de VirtualHosts en Apache</h3>

  <!-- Linux (Debian/Ubuntu) -->
  <article class="my-14">
    <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Linux (Debian/Ubuntu)</h4>
    <div class="contenedor-listas ml-6">
      <ul class="space-y-3">
        <li class="flex flex-col">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Crea el archivo /etc/apache2/sites-available/miproyecto.conf:</p>
          </div>
          <div class="mt-5 ml-10 overflow-x-auto">
            <p class="pathway-extreme-p text-xl underline my-5 text-gray-600 dark:text-orange-500">Sitio principal - www.miproyecto.local</p>
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;VirtualHost *:80&gt;
                    &nbsp;&nbsp;&nbsp;ServerName www.miproyecto.local
                    &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/miproyecto/www
                    
                    &nbsp;&nbsp;&nbsp;&lt;Directory /var/www/miproyecto/www&gt;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options Indexes FollowSymLinks
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                    &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                    
                    &nbsp;&nbsp;&nbsp;ErrorLog ${APACHE_LOG_DIR}/miproyecto_www_error.log
                    &nbsp;&nbsp;&nbsp;CustomLog ${APACHE_LOG_DIR}/miproyecto_www_access.log combined
                &lt;/VirtualHost&gt;
              </code>
            </pre>
            <p class="pathway-extreme-p text-xl underline mt-10 mb-5 text-gray-600 dark:text-orange-500">API - api.miproyecto.local</p>
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;ServerName api.miproyecto.local
                  &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/miproyecto/api
                  
                  &nbsp;&nbsp;&nbsp;&lt;Directory /var/www/miproyecto/api&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options Indexes FollowSymLinks
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                  
                  &nbsp;&nbsp;&nbsp;ErrorLog ${APACHE_LOG_DIR}/miproyecto_api_error.log
                  &nbsp;&nbsp;&nbsp;CustomLog ${APACHE_LOG_DIR}/miproyecto_api_access.log combined
                &lt;/VirtualHost&gt;
              </code>
            </pre>
            <p class="pathway-extreme-p text-xl underline mt-10 mb-5 text-gray-600 dark:text-orange-500">Panel Admin - admin.miproyecto.local</p>
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;ServerName admin.miproyecto.local
                  &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/miproyecto/admin
                  
                  &nbsp;&nbsp;&nbsp;&lt;Directory /var/www/miproyecto/admin&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options Indexes FollowSymLinks
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                  
                  &nbsp;&nbsp;&nbsp;ErrorLog ${APACHE_LOG_DIR}/miproyecto_admin_error.log
                  &nbsp;&nbsp;&nbsp;CustomLog ${APACHE_LOG_DIR}/miproyecto_admin_access.log combined
                &lt;/VirtualHost&gt;
              </code>
            </pre>
            <p class="pathway-extreme-p text-xl underline mt-10 mb-5 text-gray-600 dark:text-orange-500">Blog - blog.miproyecto.local</p>
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;ServerName blog.miproyecto.local
                  &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/miproyecto/blog
                  
                  &nbsp;&nbsp;&nbsp;&lt;Directory /var/www/miproyecto/blog&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options Indexes FollowSymLinks
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                  
                  &nbsp;&nbsp;&nbsp;ErrorLog ${APACHE_LOG_DIR}/miproyecto_blog_error.log
                  &nbsp;&nbsp;&nbsp;CustomLog ${APACHE_LOG_DIR}/miproyecto_blog_access.log combined
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
            <p class="ml-3 text-base pathway-extreme-p text-white">Activa el sitio:</p>
          </div>
          <div class="mt-10 ml-10 overflow-x-auto">
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                sudo a2ensite miproyecto.conf
                sudo systemctl reload apache2
              </code>
            </pre>
          </div>
        </li>
      </ul>
    </div>
  </article>

  <!-- Windows -->
  <article class="my-14">
    <h4 class="ml-6 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Windows</h4>
    <div class="contenedor-listas ml-6">
      <ul class="space-y-3">
        <li class="flex flex-col">
          <div class="flex">
            <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
              <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
              <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
              <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
            </svg>
            <p class="ml-3 text-base pathway-extreme-p text-white">Edita C:\Apache24\conf\extra\httpd-vhosts.conf y agrega:</p>
          </div>
          <div class="mt-5 ml-10 overflow-x-auto">
            <p class="pathway-extreme-p text-xl underline my-5 text-gray-600 dark:text-orange-500">Sitio principal</p>
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;DocumentRoot "C:/proyectos/miproyecto/www"
                  &nbsp;&nbsp;&nbsp;ServerName www.miproyecto.local
                  &nbsp;&nbsp;&nbsp;&lt;Directory "C:/proyectos/miproyecto/www"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                &lt;/VirtualHost&gt;
              </code>
            </pre>
            <p class="pathway-extreme-p text-xl underline mt-10 mb-5 text-gray-600 dark:text-orange-500">API</p>
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;VirtualHost *:80&gt;
                  DocumentRoot "C:/proyectos/miproyecto/api"
                  ServerName api.miproyecto.local
                  &lt;Directory "C:/proyectos/miproyecto/api"&gt;
                      AllowOverride All
                      Require all granted
                  &lt;/Directory&gt;
                &lt;/VirtualHost&gt;
              </code>
            </pre>
            <p class="pathway-extreme-p text-xl underline mt-10 mb-5 text-gray-600 dark:text-orange-500">Panel Admin</p>
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;DocumentRoot "C:/proyectos/miproyecto/admin"
                  &nbsp;&nbsp;&nbsp;ServerName admin.miproyecto.local
                  &nbsp;&nbsp;&nbsp;&lt;Directory "C:/proyectos/miproyecto/admin"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                &lt;/VirtualHost&gt;
              </code>
            </pre>
            <p class="pathway-extreme-p text-xl underline mt-10 mb-5 text-gray-600 dark:text-orange-500">Blog</p>
            <pre class="ind-pre rounded overflow-x-auto">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;DocumentRoot "C:/proyectos/miproyecto/blog"
                  &nbsp;&nbsp;&nbsp;ServerName blog.miproyecto.local
                  &nbsp;&nbsp;&nbsp;&lt;Directory "C:/proyectos/miproyecto/blog"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
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
            <p class="ml-3 text-base pathway-extreme-p text-white">Reinicia Apache.</p>
          </div>
        </li>
      </ul>
    </div>
  </article>
</section>

<!-- Configurar archivo hosts -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Configurar archivo hosts</h3>
  <div class="contenedor-listas ml-6">
    <ul class="space-y-3">
      <li class="flex flex-col">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Linux: /etc/hosts</p>
        </div>
        <div class="mt-5 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              127.0.0.1    www.miproyecto.local
              127.0.0.1    api.miproyecto.local
              127.0.0.1    admin.miproyecto.local
              127.0.0.1    blog.miproyecto.local
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Windows: C:\Windows\System32\drivers\etc\hosts</p>
        </div>
        <div class="mt-5 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              127.0.0.1    www.miproyecto.local
              127.0.0.1    api.miproyecto.local
              127.0.0.1    admin.miproyecto.local
              127.0.0.1    blog.miproyecto.local
            </code>
          </pre>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- Ejemplo de archivos PHP en cada subdominio -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Ejemplo de archivos PHP en cada subdominio</h3>
  <div class="contenedor-listas ml-6">
    <ul class="space-y-3">
      <li class="flex flex-col">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">www/index.php (Sitio principal):</p>
        </div>
        <div class="mt-5 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              &lt;?php
                &nbsp;&nbsp;&nbsp;echo "&lt;h1&gt;Bienvenido al sitio principal&lt;/h1&gt;";
                &nbsp;&nbsp;&nbsp;echo "&lt;p&gt;Accediendo desde: www.miproyecto.local&lt;/p&gt;";
              ?&gt;
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
          <p class="ml-3 text-base pathway-extreme-p text-white">api/index.php (API):</p>
        </div>
        <div class="mt-5 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              &lt;?php
              &nbsp;&nbsp;&nbsp;header('Content-Type: application/json');
              &nbsp;&nbsp;&nbsp;echo json_encode([
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'status' => 'success',
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'message' => 'API funcionando correctamente',
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'version' => '1.0'
              &nbsp;&nbsp;&nbsp;]);
              ?&gt;
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
          <p class="ml-3 text-base pathway-extreme-p text-white">admin/index.php (Panel admin):</p>
        </div>
        <div class="mt-5 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              &lt;?php
              &nbsp;&nbsp;&nbsp;echo "&lt;h1&gt;Panel de Administración&lt;/h1&gt;";
              &nbsp;&nbsp;&nbsp;echo "&lt;p&gt;Acceso restringido - admin.miproyecto.local&lt;/p&gt;";
              ?&gt;
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
          <p class="ml-3 text-base pathway-extreme-p text-white">blog/index.php (Blog):</p>
        </div>
        <div class="mt-5 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              &lt;?php
              &nbsp;&nbsp;&nbsp;echo "&lt;h1&gt;Blog de MiProyecto&lt;/h1&gt;";
              &nbsp;&nbsp;&nbsp;echo "&lt;p&gt;Últimas publicaciones...&lt;/p&gt;";
              ?&gt;
            </code>
          </pre>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- Acceso desde el navegador -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Acceso desde el navegador</h3>
  <div class="contenedor-listas ml-6">
    <ul class="space-y-3">
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">http://www.miproyecto.local → Sitio principal</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">http://api.miproyecto.local → API REST</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">http://api.miproyecto.local/querys → Consultas</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">http://admin.miproyecto.local → Panel de administración</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">http://admin.miproyecto.local/config → Configuración</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">http://blog.miproyecto.local → Blog</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">http://blog.miproyecto.local/addPost → Agregar un Post al Blog</p>
      </li>
    </ul>
  </div>
</section>

<!-- Ventajas de esta estructura -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Ventajas de esta estructura</h3>
  <div class="contenedor-listas ml-6">
    <ul class="space-y-3">
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Organización clara por funcionalidad</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Separación de código frontend, backend y administración</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Facilita implementar seguridad por subdominio</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Preparado para escalabilidad (cada subdominio puede tener su propio servidor en producción)</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
        <p class="ml-3 text-base pathway-extreme-p text-white">Permite diferentes configuraciones PHP por subdominio si es necesario</p>
      </li>
    </ul>
  </div>
</section>

<!-- Navegación entre enlaces de cada subdominio -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Navegación entre enlaces de cada subdominio</h3>
  <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">En esta sección se mostrarán ejemplos y recomendaciones para la navegación y estructura interna de enlaces en un proyecto con subdominios.</p>

  <!-- Primer ejemplo: Panel de administración (admin.miproyecto.local) -->
  <article class="my-14">
    <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Primer ejemplo: Panel de administración (admin.miproyecto.local)</h4>
    <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Supongamos esta estructura dentro /admin:</p>
    <div class="mt-10 overflow-x-auto ml-6">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          /admin/
          ├── index.php
          ├── configuracion.php
          ├── usuarios.php
          ├── productos.php
          └── perfil.php
        </code>
      </pre>
    </div>
    <p class="ml-6 pathway-extreme-p text-xl my-10 text-gray-600 dark:text-orange-500">index.php</p>
    <div class="mt-10 overflow-x-auto ml-6">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          &lt;a href="/configuracion.php"&gt;Configuración&lt;/a&gt;
          &lt;a href="/usuarios.php"&gt;Usuarios&lt;/a&gt;
          &lt;a href="/productos.php"&gt;Productos&lt;/a&gt;
          &lt;a href="/perfil.php"&gt;Mi perfil&lt;/a&gt;
        </code>
      </pre>
    </div>
    <div class="contenedor-listas mt-10 ml-6">
      <ul class="space-y-3">
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Resultado: Al hacer clic en "Usuarios", navegas a <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">http://admin.miproyecto.local/usuarios.php</span></p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Puedes usar rutas limpias: <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">/usuarios</span>, para esto usa <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">mod_rewrite</span> en Apache y un archivo .<span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">htaccess</span> que lo gestione.</p>
        </li>
      </ul>
    </div>
  </article>

  <!-- Segundo ejemplo: Implementación con carpetas y rutas limpias (recomendado) -->
  <article class="my-14">
    <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Segundo ejemplo: Implementación con carpetas y rutas limpias (recomendado)</h4>
    <div class="mt-10 overflow-x-auto ml-6">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          /admin/
          ├── index.php
          ├── configuracion/
          │   └── index.php
          ├── usuarios/
          │   ├── index.php
          │   └── nuevo.php
          ├── productos/
          │   └── index.php
          └── perfil/
              └── index.php
        </code>
      </pre>
    </div>
    <p class="ml-6 pathway-extreme-p text-xl my-10 text-gray-600 dark:text-orange-500">index.php</p>
    <div class="mt-10 overflow-x-auto ml-6">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          &lt;a href="/configuracion/"&gt;Configuración&lt;/a&gt;
          &lt;a href="/usuarios/"&gt;Usuarios&lt;/a&gt;
          &lt;a href="/productos/"&gt;Productos&lt;/a&gt;
          &lt;a href="/perfil/"&gt;Mi perfil&lt;/a&gt;
        </code>
      </pre>
    </div>
    <div class="contenedor-listas mt-10 ml-6">
      <ul class="space-y-3">
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="text-base pathway-extreme-p text-white">Al hacer clic se accederá a <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">http://admin.miproyecto.local/usuarios/</span></p>
        </li>
      </ul>
    </div>
  </article>

  <!-- Rutas limpias usando .htaccess -->
  <article class="my-14">
    <h4 class="ml-3 my-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Rutas limpias usando .htaccess</h4>
    <p class="ml-3 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">En <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">/admin/.htaccess</span> coloca:</p>
    <div class="mt-10 overflow-x-auto ml-6">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          Options +FollowSymLinks
          RewriteEngine On

          RewriteCond %{REQUEST_FILENAME} !-f
          RewriteCond %{REQUEST_FILENAME} !-d
          RewriteRule ^(.+)/?$ index.php?page=$1 [QSA,L]
        </code>
      </pre>
    </div>
    <p class="mt-10 ml-3 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Tu <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">index.php</span> leerá la variable <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">$_GET['page']</span> y cargará el contenido correspondiente.</p>
  </article>

  <!-- Navegación entre subdominios -->
  <article class="my-14">
    <h4 class="ml-3 my-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Navegación entre subdominios</h4>
    <p class="ml-3 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Para navegar de admin a blog, coloca:</p>
    <div class="mt-10 overflow-x-auto ml-6">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          &lt;a href="http://blog.miproyecto.local/"&gt;Ir al Blog&lt;/a&gt;
        </code>
      </pre>
    </div>
    <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">O entre API y frontend:</p>
    <div class="mt-10 overflow-x-auto ml-6">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          &lt;a href="http://www.miproyecto.local/"&gt;Ir al sitio principal&lt;/a&gt;
          &lt;a href="http://api.miproyecto.local/"&gt;Consultar API&lt;/a&gt;
        </code>
      </pre>
    </div>
  </article>

  <!-- Buenas prácticas para rutas y estructura interna -->
  <article class="my-14">
    <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Buenas prácticas para rutas y estructura interna</h4>
    <div class="contenedor-listas mt-5 ml-6">
      <ul class="space-y-3">
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Usa rutas limpias siempre que sea posible (<span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">/usuarios</span> en vez de <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">/usuarios.php</span>)</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Organiza el código por carpetas temáticas (usuarios, productos, configuracion), cada una con su propia lógica y vistas.</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Centraliza el routing en un archivo principal (index.php) usando .htaccess y reglas de rewrite.</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Utiliza include o require en PHP para cargar vistas/componentes según la ruta recibida.</p>
        </li>
        <li class="flex md:flex-row lg:flex-row">
          <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
          <p class="ml-3 text-base pathway-extreme-p text-white">Seguridad: protege rutas internas requeridas por sesión/autenticación.</p>
        </li>
      </ul>
    </div>
  </article>

  <!-- Ejemplo de uso en index.php con routing básico -->
  <article class="my-14">
    <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Ejemplo de uso en index.php con routing básico</h4>
    <div class="mt-5 ml-10 overflow-x-auto">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          $page = $_GET['page'] ?? 'inicio';
          switch($page) {
            &nbsp;&nbsp;&nbsp;case 'usuarios':
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include('usuarios/index.php');
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
            &nbsp;&nbsp;&nbsp;case 'productos':
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include('productos/index.php');
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
            &nbsp;&nbsp;&nbsp;case 'configuracion':
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include('configuracion/index.php');
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
            &nbsp;&nbsp;&nbsp;default:
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include('inicio.php');
          }
        </code>
      </pre>
    </div>
    <p class="mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Y tu menú:</p>
    <div class="mt-5 ml-10 overflow-x-auto">
      <pre class="ind-pre rounded overflow-x-auto">
        <code>
          &lt;ul&gt;
            &nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="/usuarios/"&gt;Usuarios&lt;/a&gt;&lt;/li&gt;
            &nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="/productos/"&gt;Productos&lt;/a&gt;&lt;/li&gt;
            &nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="/configuracion/"&gt;Configuración&lt;/a&gt;&lt;/li&gt;
            &nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="/perfil/"&gt;Mi perfil&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        </code>
      </pre>
    </div>
  </article>
</section>

<!-- Resumen -->
<section>
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Resumen</h3>
  <div class="ml-6 mt-8 p-6 bg-blue-50 dark:bg-yellow-50 rounded-lg">
    <ul class="space-y-3">
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="text-base pathway-extreme-p dark:text-gray-800">Puedes tener múltiples proyectos o módulos accediendo a subdominios independientes como app1.mi_sitio.local, api.mi_sitio.local, todos usando HTTPS localmente.</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="text-base pathway-extreme-p dark:text-gray-800">Debes aceptar advertencia de seguridad en el navegador por el certificado autofirmado.</p>
      </li>
      <li class="flex md:flex-row lg:flex-row">
        <i class="bi bi-check2-square px-2 dark:text-orange-500 text-lg"></i>
        <p class="text-base pathway-extreme-p dark:text-gray-800">Para ambientes de equipo, cada integrante debe agregar los mismos hosts y certificados localmente en su máquina.</p>
      </li>
    </ul>
  </div>
</section>