@extends('templates.main')

@section('content')
  <h1>{{$title}}</h1>
  
  @foreach ($categories as $category)
  {{$category->name}} <br>
  @endforeach

@endsection

@section('title', $title)








