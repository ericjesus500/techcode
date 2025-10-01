<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;

// Detectar si es AJAX
$isAjax = (
    isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
);

$url = $_GET['url'] ?? '';

if ($isAjax) {
    $router = new Router($url);
    $router->dispatch(true);
    exit;
}

// Si no es AJAX, carga el layout completo
include '../app/Views/layout/header.php';
?>
<div class="flex min-h-screen bg-gray-50 dark:bg-gray-900 pt-20">
    <?php include '../app/Views/layout/sidebar.php'; ?>
    <div class="flex-1 p-6 ml-64" id="content-wrapper">
        <main class="flex-1 p-6 border border-2 border-blue-400 rounded-lg sm:ml-0 sm:p-4 transition-all duration-300 ease-in-out">
            <div id="manual-contenido">
                <?php
                    if ($url) {
                        $router = new Router($url);
                        $router->dispatch();
                    } else {
                        // Página de inicio
                        include '../app/Views/home/content.php';
                    }
                ?>
            </div>
        </main>
    </div>
</div>
<?php include '../app/Views/layout/footer.php'; ?>