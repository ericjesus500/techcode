<?php 
	namespace App\Controllers;
	use Core\Controller;

	class EjerciciosController extends Controller{
		public function basicos($tecno, $id){			
			// Sanitizar parámetros
	    $tecno = trim(htmlspecialchars($tecno, ENT_QUOTES, 'UTF-8'));
	    $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

	    // Validar que sean seguros
	    if (empty($tecno) || empty($id) || !ctype_alnum($tecno) || $id < 1) {
	        http_response_code(400);
	        echo "<h1>❌ Parámetros inválidos</h1>";
	        return;
	    }

	    // ✅ Validar que $tecno solo contenga caracteres seguros (letras, números, guiones)
      if (!preg_match('/^[a-zA-Z0-9\-_]+$/', $tecno)) {
          http_response_code(400);
          echo "<h1 class='text-red-600'>❌ Tecnología no válida</h1>";
          return;
      }

	    $rutaEjercicio = "../app/Views/manual/{$tecno}/ejercicios/basico/ejercicio{$id}.php";

        if (!file_exists($rutaEjercicio)) {
          http_response_code(404);
          echo "<h1 class='text-red-600'>❌ Ejercicio no encontrado</h1>";
          return;
        }
        require_once $rutaEjercicio;
		}
	}
?>