<?php
namespace Core;

class Router {
    private $controller = 'HomeController';
    private $method = 'index';
    private $params = [];

    public function __construct($url) {
        $this->parseUrl($url);
    }

    private function parseUrl($url) {
        $url = trim($url, '/');
        $parts = explode('/', $url);

        if (!empty($parts[0])) {
            $this->controller = ucfirst($parts[0]) . 'Controller';
        }

        if (!empty($parts[1])) {
            $this->method = $parts[1];
        }

        $this->params = array_slice($parts, 2);
    }

    public function dispatch($isAjax = false) {
        $controllerClass = "App\\Controllers\\" . $this->controller;

        if (!class_exists($controllerClass)) {
            http_response_code(404);
            if ($isAjax) {
                echo json_encode(['error' => 'Controlador no encontrado']);
            } else {
                echo "<h1>❌ Controlador no encontrado: {$this->controller}</h1>";
            }
            exit;
        }

        $controller = new $controllerClass;

        if (!method_exists($controller, $this->method)) {
            http_response_code(404);
            if ($isAjax) {
                echo json_encode(['error' => 'Método no encontrado']);
            } else {
                echo "<h1>❌ Método '{$this->method}' no existe en {$this->controller}</h1>";
            }
            exit;
        }
        // Llamar al método con los parámetros (si los hay)
        call_user_func_array([$controller, $this->method], $this->params);
    }
}
