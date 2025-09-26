<?php
namespace App\Models;

class Manual
{
  public static function getAll()
  {
    return [
      ['slug' => 'html', 'nombre' => 'Manual de HTML'],
      ['slug' => 'estilos', 'nombre' => 'Manual de CSS'],
      ['slug' => 'js', 'nombre' => 'Manual JavaScript'],
      ['slug' => 'php', 'nombre' => 'Manual de PHP'],      
      ['slug' => 'laravel', 'nombre' => 'Manual de Laravel'],
      ['slug' => 'tailwind', 'nombre' => 'Manual de Tailwind']
    ];
  }

  public static function findBySlug($slug)
  {
    $manuales = self::getAll();
    foreach ($manuales as $manual) {
      if ($manual['slug'] === $slug) return $manual;
    }
    return null;
  }
}
?>