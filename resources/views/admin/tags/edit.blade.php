@extends('admin.template.main')
@section('title','Editar Tag')
@section('content','Editar Tag:  '.$tag->name)
@section('tag','active')
@section('cuerpo')
  {!! Form::open(['route'=>['tags.update',$tag] ,'method'=>'PUT']) !!}
  <div class="form-group">
    {!! Form::label('name','NOMBRE') !!}
    {!! Form::text('name',$tag->name,['class'=>'form-control','placeholder'=>'Nombre de la Categoria','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
  </div>
  {!! Form::close()!!}
@endsection
