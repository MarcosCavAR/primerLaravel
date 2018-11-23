@extends('layouts.default')

@section('main')

<div class="row">
    <div class="col-sm-6">
        <div class="card" style="">
          <div class="card-body">
            <h5 class="card-title">{{ $genresid->id }}</h5>
            <p class="card-text"> {{$genreid->name}}</p>


            @foreach ($genreid->movies as $movie)
                {{$movie->title}}<br>
            @endforeach

          </div>
        </div>
    </div>
</div>

@endsection
