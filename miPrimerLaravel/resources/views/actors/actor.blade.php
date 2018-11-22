@extends('layouts.default')

@section('main')


    {{ $actores_id->first_name.' '.$actores_id->last_name.'  Rating: '.$actores_id->rating }} <br>
    <a href="/Actors/">volver</a>


@endsection
