<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
  {
    public function  buscarPeliculaId($id) {
      $peliculas = [1 => "Toy Story", 2 => "Buscando a Nemo", 3 => "Avatar", 4 => "Star Wars: Episodio V", 5 => "Up", 6 => "Mary and Max"];
      $peliculas = array_values($peliculas);
      return $peliculas[$id];
        }

    public function buscarPeliculaNombre($nombre){
      $peliculas = [1 => "Toy Story", 2 => "Buscando a Nemo", 3 => "Avatar", 4 => "Star Wars: Episodio V", 5 => "Up", 6 => "Mary and Max"];
      $result='No se encontraron resultados';
      foreach ($peliculas as $value) {
        if($value == $nombre) {
          $result==$value;
          break;
        }
      }
      return view('peliculas.mostrar',['pelicula'] => $peli]); //falta crear el HTML
    }

  }
