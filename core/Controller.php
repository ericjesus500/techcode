<?php
namespace Core;

abstract class Controller {
    protected $view;

    public function view($file, $data = []) {
        extract($data);
        require_once __DIR__ . '/../../app/Views/' . $file;
    }
}