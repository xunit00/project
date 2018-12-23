@extends('books.layout')

@section('content')

<h1 class="text-center">Books</h1>
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($books as $book)
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->title}}</td>
      <td>{{$book->descripcion}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection