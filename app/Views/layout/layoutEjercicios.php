<div class="container mx-auto">
  <div class="header-ejercicios text-center mb-5 ">
    <h1 class="text-4xl mt-5 font-bold text-gray-800 dark:text-white mb-4">👋 ¡Bienvenido a la página de Ejercicios de <?= $tecno; ?></h1>
    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
      Aqui encontrarás diversos ejercicios prácticos que me ayudaron a comprender, entender y aprender a utilizar todo el ecosistema de <?= $tecno; ?>.
    </p>
  </div>
  <div class="body-ejercicios flex md:flex-row">
    <!-- Contenido del ejercicio -->
    <div class="w-full max-w-full p-3">
      <?php include_once $rutaEjercicio; ?>
    </div>
  </div>
</div>