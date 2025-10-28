<div class="w-full max-w-full min-w-0 md:box-border lg:box-border">
    <!-- Header del manual -->
    <div class="w-full max-w-full mb-8 p-4 bg-white dark:bg-gray-800 rounded-lg shadow flex flex-col justify-between sm:flex-row md:flex-row gap-4 items-center md:box-border lg:box-border">
        <!-- (Radio buttons + Búsqueda) -->
        <div class="w-3/4">
            <div class="prose dark:prose-invert max-w-none">
                <div class="flex items-center justify-between">
                    <!-- Radio buttons -->
                    <div class="space-x-6 w-3/4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="nivel-php" value="basico" class="nivel-radio form-radio h-5 w-5 text-blue-600" data-slug="php" data-nivel="basico">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Básico</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" name="nivel-php" value="intermedio" class="nivel-radio form-radio h-5 w-5 text-green-600" data-slug="php" data-nivel="intermedio">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Intermedio</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" name="nivel-php" value="avanzado" class="nivel-radio form-radio h-5 w-5 text-purple-600" data-slug="php" data-nivel="avanzado">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">🔹 Avanzado</span>
                        </label>
                    </div>
                    <!-- Búsqueda -->
                    <div class="busqueda w-1/4">
                        <button id="abrirModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Buscar Tema
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Enlaces sugeridos -->
        <div class="w-1/4">
            <div class="flex justify-end flex-1">
                <a class="font-mono mr-5 text-gray-800 dark:text-blue-300" href="#" target="_blank">Link 1</a>
                <a class="font-mono mr-5 text-gray-800 dark:text-blue-300" href="#" target="_blank">Link 2</a>
            </div>
        </div>
    </div>
    <!-- Contenido del nivel + Busqueda de tema-->
    <section>
        <div class="w-full max-w-full flex md:flex-row lg:flex-row md:box-border lg:box-border">
            <div class="prose dark:prose-invert w-full max-w-full">
                <div id="nivel-contenido" class="w-full max-w-full p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <h1 class="text-3xl mt-10 text-gray-600 dark:text-blue-400">INSTALACION DE PHP (Linux y Windows)</h1>

                    <!-- 01 Instalación de Apache -->
                    <article>
                        <?php include "./instalacion/01_instalacion_apache.php";?>
                    </article>

                    <!-- 02 Instalación de MySQL -->
                    <article class="my-14">
                        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Instalación de MySQL</h2>
                        <section class="my-14">
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Linux (Debian/Ubuntu)</h3>
                            <div class="mt-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        sudo apt update
                                        sudo apt install mysql-server
                                        sudo systemctl start mysql
                                    </code>
                                </pre>
                            </div>
                            <p class="ml-3 mt-20 pathway-extreme-p text-xl text-gray-600 dark:text-white">Configura el usuario root:</p>
                            <div class="mt-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        sudo mysql_secure_installation
                                    </code>
                                </pre>
                            </div>
                            <p class="ml-3 mt-20 pathway-extreme-p text-xl text-gray-600 dark:text-white">Prueba conexión</p>
                            <div class="mt-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        mysql -u root -p
                                    </code>
                                </pre>
                            </div>
                        </section>
                        <section>
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Windows</h3>
                            <p class="ml-3 mt-10 text-base pathway-extreme-p text-white">Descarga <a href="https://dev.mysql.com/downloads/installer/" target="_blank">MySQL Installer</a> y sigue el asistente paso a paso.</p>
                        </section>
                    </article>

                    <!-- 03 Instalación de PHP -->
                    <article class="my-14">
                        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Instalación de PHP</h2>
                        <section class="my-14">
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Linux (Debian/Ubuntu)</h3>
                            <div class="mt-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        sudo apt update
                                        sudo apt install php libapache2-mod-php php-mysql
                                    </code>
                                </pre>
                            </div>
                            <p class="ml-3 mt-20 pathway-extreme-p text-xl text-gray-600 dark:text-white">Verifica versión:</p>
                            <div class="mt-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        php -v
                                    </code>
                                </pre>
                            </div>
                            <p class="ml-3 mt-20 pathway-extreme-p text-xl text-gray-600 dark:text-white">Reinicia Apache:</p>
                            <div class="mt-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        sudo systemctl restart apache2
                                    </code>
                                </pre>
                            </div>
                            <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Verifica la instalación creando un archivo info.php en /var/www/html con &lt;?php phpinfo(); ?&gt; y accediendo a http://localhost/info.php.</p>
                        </section>
                        <section>
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Windows</h3>
                            <p class="ml-3 mt-10 text-base pathway-extreme-p text-white">Descarga <a href="https://windows.php.net/download/" target="_blank">PHP for Windows</a>, descomprime y configura el archivo php.ini.</p>
                            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Agrega la carpeta PHP al PATH del sistema y configura Apache para usar PHP editando httpd.conf.</p>
                            <p class="ml-3 mt-5 pathway-extreme-p text-xl text-gray-600 dark:text-white">Configura Apache para usar PHP editando httpd.conf.</p>
                            <div class="mt-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        LoadModule php_module "C:/ruta/a/php/php8apache2_4.dll"
                                        AddHandler application/x-httpd-php .php
                                        PHPIniDir "C:/ruta/a/php"
                                    </code>
                                </pre>
                            </div>
                            <p class="ml-3 mt-20 pathway-extreme-p text-xl text-gray-600 dark:text-white">Reinicia Apache y verifica con un archivo info.php en la carpeta htdocs.</p>
                            <div class="mt-10 overflow-x-auto">
                                <pre class="ind-pre rounded overflow-x-auto">
                                    <code>
                                        &lt;?php
                                            &nbsp;&nbsp;&nbsp;phpinfo();
                                        ?&gt;
                                    </code>
                                </pre>
                            </div>
                            <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Accede desde el navegador a http://localhost/info.php para verificar que PHP está funcionando y detectando Apache y MySQL.</p>
                        </section>
                    </article>

                    <!-- 04 Crear Hosts Virtuales en Apache (Linux y Windows) -->
                    <article class="my-14">
                        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Crear Hosts Virtuales en Apache (Linux y Windows)</h2>
                        <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Esto te permitirá organizar varios proyectos independientes, cada uno con su propia carpeta y dominio local, sin depender de htdocs o /var/www/html.</p>

                        <!-- Linux (Debian/Ubuntu) -->
                        <section>
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
                    </article>

                    <!-- 05 Habilitar HTTPS local y uso de subdominios -->
                    <article class="my-14">
                        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Habilitar HTTPS local y uso de subdominios</h2>

                        <!-- En Linux (Debian/Ubuntu) -->
                        <section class="my-14">
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>En Linux (Debian/Ubuntu)</h3>
                            <div class="contenedor-listas">
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
                        <section class="my-14">
                            <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>En Windows</h3>
                            <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Usa OpenSSL para generar un certificado autofirmado o utiliza herramientas como XAMPP que facilitan la configuración de HTTPS.</p>
                            <div class="contenedor-listas">
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
                    </article>

                    <!-- 06 Habilitar HTTPS local con mkcert -->
                    <article class="my-14">
                        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Habilitar HTTPS local con <span class="text-[#00fff5]">mkcert</span></h2>
                        <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Para habilitar HTTPS localmente, puedes usar herramientas como mkcert para generar certificados SSL autofirmados. Instala mkcert y crea un certificado para tu dominio local:</p>
                        <div class="mt-10 ml-6 overflow-x-auto">
                            <pre class="ind-pre rounded overflow-x-auto">
                                <code>
                                    mkcert -install
                                    mkcert tu_proyecto.local *.tu_proyecto.local
                                </code>
                            </pre>
                        </div>
                        <p class="ml-3 mt-10 pathway-extreme-p text-xl text-gray-600 dark:text-white">Luego, configura tu host virtual en Apache para usar estos certificados:</p>
                        <div class="mt-10 ml-6 overflow-x-auto">
                            <pre class="ind-pre rounded overflow-x-auto">
                                <code>
                                    &lt;VirtualHost *:443&gt;
                                        &nbsp;&nbsp;&nbsp;ServerName tu_proyecto.local
                                        &nbsp;&nbsp;&nbsp;DocumentRoot /var/www/tu_proyecto
                                        &nbsp;&nbsp;&nbsp;SSLEngine on
                                        &nbsp;&nbsp;&nbsp;SSLCertificateFile /ruta/a/tu_proyecto.local.pem
                                        &nbsp;&nbsp;&nbsp;SSLCertificateKeyFile /ruta/a/tu_proyecto.local-key.pem
                                        &nbsp;&nbsp;&nbsp;... (otras configuraciones)
                                    &lt;/VirtualHost&gt;
                                </code>
                            </pre>
                        </div>
                    </article>

                    <!-- 07 Uso de Subdominios en Apache (Linux y Windows) -->
                    <article class="my-14">
                        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Uso de Subdominios en Apache (Linux y Windows)</h2>

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
                                <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Rutas limpias usando .htaccess</h4>
                                <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">En <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">/admin/.htaccess</span> coloca:</p>
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
                                <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Tu <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">index.php</span> leerá la variable <span class="font-mono font-medium text-lg text-gray-950 dark:text-[#00fff5]">$_GET['page']</span> y cargará el contenido correspondiente.</p>
                            </article>

                            <!-- Navegación entre subdominios -->
                            <article class="my-14">
                                <h4 class="ml-3 mt-10 text-xl font-mono text-gray-300 dark:text-pink-400 underline">Navegación entre subdominios</h4>
                                <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Para navegar de admin a blog, coloca:</p>
                                <div class="mt-10 overflow-x-auto ml-6">
                                    <pre class="ind-pre rounded overflow-x-auto">
                                        <code>
                                            &lt;a href="http://blog.miproyecto.local/"&gt;Ir al Blog&lt;/a&gt;
                                        </code>
                                    </pre>
                                </div>
                                <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">O entre API y frontend:</p>
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
                                <div class="contenedor-listas">
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
                                <p class="pathway-extreme-p text-xl text-gray-600 dark:text-gray-300 mb-4">Y tu menú:</p>
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
                        <section class="my-4">
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
                    </article>

                    <!-- 08 Instalación óptima de phpMyAdmin -->
                    <article class="my-14">
                        <h2 class="mt-10 font-mono text-2xl text-gray-300 dark:text-yellow-400">Instalación óptima de phpMyAdmin</h2>

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
                        <section class="my-14">
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
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de la busqueda del header -->
    <section id="modalContainer" class="hidden fixed inset-0 z-50">
        <div class="flex items-center justify-center ">
            <!-- Overlay (fondo semitransparente) -->
            <div class="absolute inset-0 bg-gray-900 dark:opacity-50"></div>

            <!-- Diálogo del modal -->
            <div class="bg-white rounded-lg shadow-xl p-6 m-4 w-full max-w-full h-screen z-10 relative dark:bg-gray-950">
                <!-- Encabezado del modal -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Escribe una consulta y selecciona el modo de búsqueda.</h2>
                    <!-- Botón de cerrar -->
                    <button id="cerrarModal" class="text-gray-500 hover:text-gray-700">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <!-- Contenido del modal -->
                <!-- Input de búsqueda -->
                <div class="relative flex-1 max-w-md">
                    <input type="text"
                        id="buscador-manual"
                        placeholder="Buscar tema"
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <!-- Botón para alternar modo de búsqueda -->
                <div class="mt-5 flex items-center space-x-2">
                    <div class="inline-flex rounded-md shadow-sm">
                        <button type="button"
                            id="btn-busqueda-local"
                            class="px-4 py-2 text-sm font-medium text-blue-700 bg-blue-100 dark:bg-blue-900/30 dark:text-blue-300 rounded-l-md focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Local
                        </button>
                        <button type="button"
                            id="btn-busqueda-ia"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white dark:bg-gray-800 dark:text-gray-300 rounded-r-md hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            IA
                        </button>
                    </div>
                </div>

                <!-- Contenedor de resultados -->
                <div id="resultados-busqueda" class="mt-6 p-6 bg-gray-50 dark:bg-gray-800 rounded-lg min-h-32">
                    <p class="text-gray-500 dark:text-gray-400">Resultado de la búsqueda</p>
                </div>
            </div>
        </div>
    </section>
</div>