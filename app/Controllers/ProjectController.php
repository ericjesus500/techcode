<?php

namespace App\Controllers;

use Core\Controller;

class ProjectController extends Controller
{
  public function index()
  {
    $this->view('project/content');
  }

  public function verProjectPage($tech)
  {
    // Aquí puedes agregar lógica para manejar proyectos por tecnología
    $tech = trim(htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'));

    // Validar contra lista blanca
    $tecnicasPermitidas = ['html_css', 'js', 'php', 'git', 'laravel', 'tailwind', 'typescript'];

    if (!in_array($tech, $tecnicasPermitidas)) {
      http_response_code(404);
      echo "<h1>Proyecto no encontrado</h1>";
      return;
    }

    $ruta = "../app/Views/project/{$tech}/index.php";
    if (file_exists($ruta)) {
      require_once $ruta;
    } else {
      echo "<h1>Contenido no disponible</h1>";
    }
  }
  public function verProject($tecnologia, $id)
  {
    ob_clean(); // Limpiar cualquier salida previa

    // Validar tecnología
    $tecPermitidas = ['html_css', 'js', 'php'];    

    if (!in_array($tecnologia, $tecPermitidas)) {
      $this->renderError('Tecnología no válida.', 404);
    }

    // Validar id (solo números)
    if (!is_numeric($id) || $id < 1) {
      $this->renderError('ID de proyecto inválido.', 404);
    }

    // Cargar la vista
    $ruta = "../app/Views/project/{$tecnologia}/{$id}/{$id}.php";
    if (file_exists($ruta)) {
      require_once $ruta;
    } else {
      $this->renderError('Proyecto no encontrado.', 404);
    }
  }

  private function renderError($message, $code = 404)
  {
    http_response_code($code);
    echo "<div class='p-6 text-red-600'>{$message}</div>";
    exit;
  }
}
