@extends('admin.template.main')
@section('title','Listar Usuarios')
@section('content','Listar Usuarios')
@section('cuerpo')
  <a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a>
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>EMAIL</th>
    <th>TIPO</th>
    <th>ACCION</th>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
    <th>{{$user->id}}</th>
    <th>{{$user->name}}</th>
    <th>{{$user->email}}</th>
    <th>
    @if($user->type == "admin")
      <span class="label label-danger">{{$user->type}}</span>
    @else
      <span class="label label-info">{{$user->type}}</span>
    @endif
  </th>
    <th><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></th>
  </tr>
  @endforeach
  </tbody>
</table>
{!!$users->render()!!}
@endsection
