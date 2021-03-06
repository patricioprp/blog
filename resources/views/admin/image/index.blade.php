@extends('admin.template.main')
@section('title','Listar Imagenes')
@section('content','Listar Imagenes')
@section('imagen','active')
@section('cuerpo')
  <div class="row">
    @foreach($images as $image)
      <div class="col-md-4">
        <div class="panel panel-success">
          <div class="panel-body">
          <img src="/images/articles/{{ $image->name }}" class="img-responsive">
          </div>
          <div class="panel-footer">{{ $image->article->title }}</div>
        </div>
      </div>
    @endforeach
  </div>
  {{$images->render()}}
@endsection
