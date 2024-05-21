@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<h1 class="text-center text-uppercase my-3">All Books</h1>
<div class="row">
@foreach ($books  as $book )
<div class="card p-0 m-2" style="width: 18rem;">
  <img src="{{$book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
  <div class="card-body">
    <h4 class="card-text">{{ $book->title  }}</h4>
    <p>{{ $book->vote }}</p>
  </div>

</div>
  @endforeach

</div>




@endsection