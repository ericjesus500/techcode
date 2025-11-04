<?php

namespace App\Controllers;

use Core\Controller;

class ComponentController extends Controller{
  public function index()
  {
    $this->view('component/content');
  }
}

?>