@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<div class="d-flex justify-content-center align-items-center flex-column">
<h1 class="text-center text-uppercase my-3">{{ $movie->title }}</h1>

<img src="{{$movie->image }}" class="card-img-top w-25" alt="{{ $movie->title }}">

<h4 class="card-text">{{ $movie->title }}</h4>
<p>{{ $movie->vote }}</p>


</div>






@endsection