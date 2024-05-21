@extends('layouts.app')

@section('title', 'Books')

@section('content')
<div class="d-flex justify-content-center align-items-center flex-column">
<h1 class="text-center text-uppercase my-3">{{ $book->title }}</h1>

<img src="{{$book->cover_image }}" class="card-img-top w-25" alt="{{ $book->title }}">

<h4 class="card-text">{{ $book->title }}</h4>
<p>{{ $book->vote }}</p>
<p class="w-25">{{ $book->plot }}</p>


</div>






@endsection