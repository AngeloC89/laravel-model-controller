@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<h1>All Movies</h1>
<div class="row">
@foreach ($movies  as $movie )
<div class="card p-0 m-2" style="width: 18rem;">
  <img src="{{$movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
  <div class="card-body">
    <h4 class="card-text">{{ $movie->title  }}</h4>
    <p>{{ $movie->vote }}</p>
  </div>

</div>
  @endforeach

</div>




@endsection