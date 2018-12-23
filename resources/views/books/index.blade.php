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
      <td><a href="{{route('books.show',$book->id)}}">{{$book->title}}</td><!--si quito los td se ponen uno al lado del otro-->
      <td>{{$book->descripcion}}</td>
      <td><a class="btn-sm btn-info" href="{{route('books.edit',$book->id)}}"><i class="far fa-edit"></i></a>
      <form action="{{route('books.destroy',$book->id)}}"method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('quiere borrar este registro?')"><i class="far fa-trash-alt"></i></button>
      </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
{{$books->links()}}
</div>
@endsection