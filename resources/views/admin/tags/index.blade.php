@extends('admin.template.main')
@section('title','Listado de Tags')
@section('content','Listado de Tags')
@section('tag','active')
@section('cuerpo')
  <a href="{{ route('tags.create') }}" class="btn btn-info">Registrar Nuevo Tag</a>
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>ACCION</th>
    </thead>
    <tbody>
      @foreach($tags as $tag)
        <tr>
          <td>{{$tag->id}}</td>
          <td>{{$tag->name}}</td>
          <td><a href="{{ route('admin.tags.destroy',$tag->id) }}"  onclick="return confirm('Desea eliminar a {{$tag->name}}')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
              <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!!$tags->render()!!}
@endsection