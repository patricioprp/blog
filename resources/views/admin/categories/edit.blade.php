@extends('admin.template.main')
@section('title','Editar Categoria')
@section('content','Editar Categoria  '.$category->name)
@section('categoria','active')
@section('cuerpo')
  {!! Form::open(['route'=>['categories.update',$category] ,'method'=>'PUT']) !!}
  <div class="form-group">
    {!! Form::label('name','NOMBRE') !!}
    {!! Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Nombre de la Categoria','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
  </div>
  {!! Form::close()!!}
@endsection
