<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Book[]|Collection $book */
/** @var Image[]|Collection $image */
/** @var Author[]|Collection $author */
/** @var Category[]|Collection $category */
/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')

@section('title','Confirmacion para eliminar el libro:' . $book->title)

@section('contenido')
<h1 class="mb-3">Confirmacion para eliminar el libro: {{$book->title}}</h1>
<div class="card mb-3 m-auto mt-3 mb-4" style="max-width: 800px;">
  <div class="row g-0">
    <div class="col-md-4">
      {{-- <img src="{{ $images->name }}" class="img-fluid rounded-start" alt="{{ $images->alt }}" loading="lazy"> --}}
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title">{{$book->title}}</h2>
        <p class="card-text">{{$book->description}}</p>
        {{-- <p class="card-text"><b>Author:</b><small class="text-body-secondary"> {{$author->name}}  {{$author->lastname}}</small></p> --}}
        <p class="card-text"><b>Release date:</b><small class="text-body-secondary"> {{$book->release_date}}</small></p>
        <p class="card-text"><b>Price:</b><small class="text-body-secondary"> ${{$book->price}}</small></p>
        {{-- <p class="card-text"><b>Category:</b><small class="text-body-secondary"> {{$category->name}}</small></p> --}}
      </div>
    </div>
  </div>
</div>
<p class="text-danger">¿Realmente estas seguro de querer eliminar el libro : {{$book->title}}</p>
<form action="{{url('/admin/books/'. $book->id .'/delete')}}" method="post">
  @csrf
  <button type="submit" class="btn btn-danger"><b>Eliminar</b> el libro: {{$book->title}}</button>
</form>
@endsection