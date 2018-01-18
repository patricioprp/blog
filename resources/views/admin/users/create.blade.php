@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content','Crear Usuario')
@section('usuario','active')
@section('cuerpo')

  {!! Form::open(['route' => 'users.store' , 'method' => 'POST']) !!}
  <div class="form-group">
    {!! Form::label('name','NOMBRE') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email','Correo Electronico') !!}
    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('password','Contraseña') !!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'************','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('type','Tipo') !!}
    {!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','placeholder'=>'Seleccione un Nivel','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  </div>
  {!! Form::close() !!}
@endsection
