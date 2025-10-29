<h2 id="home6" class="mt-10 font-mono text-3xl text-gray-300 dark:text-yellow-400">Habilitar HTTPS local con <span class="text-[#00fff5]">mkcert</span></h2>
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