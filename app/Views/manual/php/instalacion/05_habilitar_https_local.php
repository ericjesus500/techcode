<h2 id="home5" class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Habilitar HTTPS local y uso de subdominios</h2>

<!-- En Linux (Debian/Ubuntu) -->
<section class="my-14">
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>En Linux (Debian/Ubuntu)</h3>
  <div class="contenedor-listas ml-3">
    <ul class="space-y-3">
      <li class="flex flex-col">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Activar el módulo SSL y el sitio default-ssl</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              sudo a2enmod ssl
              sudo a2ensite default-ssl
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Generar un certificado autofirmado</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/mi_sitio.key -out /etc/ssl/certs/mi_sitio.crt
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Crear configuración para host virtual SSL</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              //Ejemplo para /etc/apache2/sites-available/mi_sitio-ssl.conf:
              &lt;VirtualHost *:443&gt;
                  &nbsp;&nbsp;&nbsp;ServerName mi_sitio.local
                  &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/mi_sitio

                  &nbsp;&nbsp;&nbsp;SSLEngine on
                  &nbsp;&nbsp;&nbsp;SSLCertificateFile /etc/ssl/certs/mi_sitio.crt
                  &nbsp;&nbsp;&nbsp;SSLCertificateKeyFile /etc/ssl/private/mi_sitio.key

                  &nbsp;&nbsp;&nbsp;&lt;Directory /var/www/mi_sitio&gt;
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Activa el sitio y recarga Apache:</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              sudo a2ensite mi_sitio-ssl.conf
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Agregar dominio local al archivo /etc/hosts:</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              127.0.0.1    mi_sitio.local
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Acceder desde navegador:</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
                https://mi_sitio.local (acepta el riesgo de certificado autofirmado).
            </code>
          </pre>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- En Windows -->
<section>
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>En Windows</h3>
  <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usa OpenSSL para generar un certificado autofirmado o utiliza herramientas como XAMPP que facilitan la configuración de HTTPS.</p>
  <div class="contenedor-listas ml-3">
    <ul class="space-y-3">
      <li class="flex flex-col">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Generar llave y certificado</p>
        </div>
        <div class="mt-10 ml-10">
          <ul class="space-y-3">
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Descarga OpenSSL para Windows.</p>
            </li>
            <li class="flex md:flex-row lg:flex-row">
              <i class="bi bi-check2-square px-2 dark:text-[#00fff5] text-lg"></i>
              <p class="ml-3 text-base pathway-extreme-p text-white">Abre consola en la carpeta PHP/Apache y ejecuta</p>
            </li>
          </ul>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout mi_sitio.key -out mi_sitio.crt
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Configurar Apache para HTTPS: Agrega al archivo <span class="text-[#00fff5]">httpd-vhosts.conf:</span></p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              &lt;VirtualHost *:443&gt;
                &nbsp;&nbsp;&nbsp;DocumentRoot "C:/proyectos/mi_sitio"
                &nbsp;&nbsp;&nbsp;ServerName mi_sitio.local
                &nbsp;&nbsp;&nbsp;SSLEngine on
                &nbsp;&nbsp;&nbsp;SSLCertificateFile "C:/ruta/mi_sitio.crt"
                &nbsp;&nbsp;&nbsp;SSLCertificateKeyFile "C:/ruta/mi_sitio.key"

                &nbsp;&nbsp;&nbsp;&lt;Directory "C:/proyectos/mi_sitio"&gt;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
              &lt;/VirtualHost&gt;
            </code>
          </pre>
        </div>
        <p class="ml-10 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">y habilita el módulo mod_ssl y configura httpd-ssl.conf si es necesario.</p>
      </li>
      <li class="flex flex-col mt-10">
        <div class="flex">
          <svg class="h-[1lh] w-5.5 shrink-0" viewBox="0 0 22 22" fill="none" stroke-linecap="square">
            <circle cx="11" cy="11" r="11" class="fill-sky-400/25" />
            <circle cx="11" cy="11" r="10.5" class="stroke-sky-400/25" />
            <path d="M8 11.5L10.5 14L14 8" class="stroke-sky-800 dark:stroke-sky-300" />
          </svg>
          <p class="ml-3 text-base pathway-extreme-p text-white">Editar el archivo hosts: Agrega</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              127.0.0.1   mi_sitio.local
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
          <p class="ml-3 text-base pathway-extreme-p text-white">Reinicia Apache, accede por:</p>
        </div>
        <div class="mt-10 ml-10 overflow-x-auto">
          <pre class="ind-pre rounded overflow-x-auto">
            <code>
              https://mi_sitio.local
            </code>
          </pre>
        </div>
      </li>
    </ul>
  </div>
</section>