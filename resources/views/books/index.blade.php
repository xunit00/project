@extends('books.layout')

@section('content')

<h1 class="text-center">Books</h1>
<div class="container">
<a class="btn btn-info mb-3"  href="{{route('books.create')}}">Agregar Libro</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($books as $book)
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->title}}</td>
      <td>{{$book->descripcion}}</td>
      <td><a class="btn btn-info" href="{{route('books.edit',$book->id)}}">Editar</a>
    </tr>
   @endforeach
  </tbody>
</table>
{{$books->links()}}
</div>
@endsection