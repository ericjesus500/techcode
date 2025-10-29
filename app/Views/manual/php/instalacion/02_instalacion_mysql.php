<h2 id="home2" class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Instalación de MySQL</h2>
<!-- Linux (Debian/Ubuntu) -->
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

<!-- Windows -->
<section>
  <h3 class="font-mono font-medium mt-8 text-xl text-gray-950 dark:text-[#00fff5]"><i class="bi bi-caret-right-fill px-2 text-lg"></i>Windows</h3>
  <p class="ml-3 mt-10 text-base pathway-extreme-p text-white">Descarga <a href="https://dev.mysql.com/downloads/installer/" target="_blank">MySQL Installer</a> y sigue el asistente paso a paso.</p>
</section>