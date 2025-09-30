<?php 
	namespace App\Controllers;
	
	class CapituloController{
		public function verCapitulo(){
			
	    ob_clean();

	    header('Content-Type: application/json');

	    $json_data = file_get_contents('php://input');
	    $data = json_decode($json_data, true);

	    if (!$data || !isset($data['curso']) || !isset($data['nivel']) || !isset($data['capitulo'])) {
	      http_response_code(400);
	      echo json_encode(['success' => false, 'message' => 'Datos inválidos']);
	      exit;
	  	}
				
			$curso = $data['curso'];
			$nivel = $data['nivel'];
			$capitulo = $data['capitulo'];

			//echo "Curso: $curso - Nivel: $nivel  - Capitulo: $capitulo";
			
			$url = "../app/Views/manual/$curso/niveles/$nivel/capitulos/capitulo0$capitulo.php";

			// Verificar que $url exista
      if (!file_exists($url)) {
          http_response_code(404);
          echo "<div class='p-6 text-red-600'>❌ CApitulo '{$capitulo}' no encontrado.</div>";
          return;
      }

      // Capturar el output del archivo PHP
      ob_start();
			require $url;
			$htmlCapitulo = ob_get_clean();

			// Devolver HTML (no JSON)
      header('Content-Type: text/html; charset=utf-8');
      echo $htmlCapitulo;
			
		}
	}
 ?>
