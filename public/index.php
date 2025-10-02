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
<div class="flex min-h-screen bg-gray-50 dark:bg-gray-900 pt-20 box-border">
    <?php include '../app/Views/layout/sidebar.php'; ?>
    <div class="flex-1 max-w-full p-6 ml-60 min-w-0 overflow-x-auto" id="content-wrapper">
        <main class="flex-1 p-6 overflow-auto border border-2 border-blue-400 rounded-lg sm:ml-0 sm:p-4 transition-all duration-300 ease-in-out">
            <div id="manual-contenido"class="w-full box-border">
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