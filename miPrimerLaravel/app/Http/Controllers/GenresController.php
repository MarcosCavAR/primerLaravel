<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenresController extends Controller
{
  public function show($id)
  {
    $genresid = \App\Genre::find($id);

  }

}
