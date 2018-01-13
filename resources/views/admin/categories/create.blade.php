@extends('admin.template.main')
@section('title','Crear Categoria')
@section('content','Crear Categoria')
@section('categoria','active')
@section('cuerpo')

  {!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
  <div class="form-group">
    {!! Form::label('name','NOMBRE') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de la Categoria','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  </div>
  {!! Form::close()!!}
@endsection
