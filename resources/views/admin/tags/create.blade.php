@extends('admin.template.main')
@section('title','Crear Tag')
@section('content','Crear Tags')
@section('tag','active')
@section('cuerpo')
  {!! Form::open(['route'=>'tags.store','method'=>'POST']) !!}
  <div class="form-group">
    {!! Form::label('name','NOMBRE') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del Tag','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  </div>
  {!! Form::close()!!}
@endsection
