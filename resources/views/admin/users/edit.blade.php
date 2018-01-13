@extends('admin.template.main')
@section('title','Editar Usuarios')
@section('content','Editar Usuario  '.$user->name)
@section('usuario','active')
@section('cuerpo')
  {!! Form::open(['route' => ['users.update',$user] , 'method' => 'PUT']) !!}
  <div class="form-group">
    {!! Form::label('name','NOMBRE') !!}
    {!! Form::text('name',$user->name,['class'=>'form-control','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email','Correo Electronico') !!}
    {!! Form::email('email',$user->email,['class'=>'form-control','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('type','Tipo') !!}
    {!! Form::select('type',[''=>'Seleccione un nivel','member'=>'Miembro','admin'=>'Administrador'],$user->type,['class'=>'form-control','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
  </div>
  {!! Form::close() !!}
@endsection
