@extends('admin.template.main')
@section('title','Listado Categorias')
@section('content','Listado de Categorias')
@section('categoria','active')
@section('cuerpo')
  <a href="{{ route('categories.create') }}" class="btn btn-info">Registrar Nueva Categoria</a>
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>ACCION</th>
    </thead>
    <tbody>
      @foreach($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->name}}</td>
          <td><a href="{{ route('admin.categories.destroy',$category->id) }}"  onclick="return confirm('Desea eliminar a {{$category->name}}')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
              <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!!$categories->render()!!}
@endsection
