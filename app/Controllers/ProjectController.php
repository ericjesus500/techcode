<?php

namespace App\Controllers;

use Core\Controller;

class ProjectController extends Controller
{
  public function index()
  {
    $this->view('project/content');
  }
}
