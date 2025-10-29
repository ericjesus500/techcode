<h2 id="home3" class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Instalación de PHP</h2>
<!-- Linux (Debian/Ubuntu) -->
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

<!-- Windows -->
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