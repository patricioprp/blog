@extends('admin.template.main')
@section('title','Crear Articulo')
@section('content','Crear Articulo')
@section('articulo','active')
@section('cuerpo')
    {!! Form::open(['route'=>'articles.store','method'=>'POST','files'=>'true']) !!}
    <div class="form-group">
      {!! Form::label('title','Titulo') !!}
      {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo...','required'])!!}
    </div>
    {!! Form::close() !!}
@endsection
