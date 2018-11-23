<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index()
  {
      $actors = \App\Actor::all();
      // foreach ($actors as $actor) {
      //   echo $actor->first_name.'<br>';
      //
      // } //Envio a la view
      return view('actors.index')->with('actores', $actors);
  }

    public function show($id)
    {
      $actorsid = \App\Actor::find($id);
      return view('actors.actor')->with('actores_id', $actorsid);
      //tmb puede ser return view('actors.actor', ['actor' => $actor] );

      }

    public function search()
    {
      $actorsearch = \App\Actor::where('first_name', 'LIKE', '%'.$_GET['buscar'].'%')->orWhere('last_name', 'LIKE', '%'.$_GET['buscar'].'%')->get();
      return view('actors.index')->with('actores', $actorsearch);
      //o tmb puede ser return vier ('actors.index', compact(['actores']);
    }
}
