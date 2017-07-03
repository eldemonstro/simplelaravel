@extends('layouts.app')
@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doculpa qui
      officia deserunt mollit anim id est laborum.</p>
    <p><a href="/login" class="btn btn-primary btn-lg">Login</a>
      <a href="/register" class="btn btn-success btn-lg">Register</a></p>
  </div>
@endsection
