@extends('layouts.app')

@section('title', 'Laravel Model Controller')

@section('content')
<div class="row">
@foreach ($movies  as $movie )
<div class="card" style="width: 18rem;">
  <img src="{{$movie->image }} class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

</div>
  @endforeach

</div>




@endsection