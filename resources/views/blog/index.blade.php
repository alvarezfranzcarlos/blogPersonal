@extends('layouts.master')
@section('content')

<div class="card" >
    <div class="card-body">
      <h5 class="card-title">Nombre articulo</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{ route('blog.post', ['id'=>1]) }}" class="btn btn-primary">Ver mas</a>
    </div>
  </div>

  <div class="card" >
    <div class="card-body">
      <h5 class="card-title">Nombre articulo</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{ route('blog.post', ['id'=>2]) }}" class="btn btn-primary">Ver mas</a>
    </div>
  </div>

  <div class="card" >
    <div class="card-body">
      <h5 class="card-title">Nombre articulo</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{ route('blog.post', ['id'=>3]) }}" class="btn btn-primary">Ver mas</a>
    </div>
  </div>
@endsection
