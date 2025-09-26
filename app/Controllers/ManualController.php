<?php
namespace App\Controllers;

use Core\Controller;

class ManualController extends Controller
{
    public function verManual($slug)
    {
        // Limpia cualquier salida previa
        if (ob_get_level()) {
            ob_clean();
        }

        $rutaManual = "../app/Views/manual/{$slug}/index.php";

        if (!file_exists($rutaManual)) {
            http_response_code(404);
            echo "<div class='p-6 text-red-600'>❌ Manual '{$slug}' no encontrado.</div>";
            return;
        }

        // Inicia buffer de salida
        ob_start();
        require_once $rutaManual;
        $contenido = ob_get_clean(); // Captura todo lo que se generó

        // Imprime el contenido (en el lugar correcto del DOM)
        echo $contenido;
    }

    public function verNivel($slug, $nivel)
    {
        ob_clean();

        $rutaNivel = "../app/Views/manual/{$slug}/{$nivel}.php";

        if (!file_exists($rutaNivel)) {
            http_response_code(404);
            echo "<div class='p-6 text-red-600'>❌ Nivel '{$nivel}' no encontrado para el manual '{$slug}'.</div>";
            return;
        }

        ob_start();
        require_once $rutaNivel;
        $contenido = ob_get_clean();

       echo $contenido;
    }
}