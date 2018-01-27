@extends('admin.template.main')
@section('title','Listado de Articulos')
@section('content','Listado de Articulos')
@section('articulo','active')
@section('cuerpo')
    <a href="{{ route('articles.create') }}" class="btn btn-info">Crear Nuevo Articulo</a>
    {{-- Buscador de Articulo --}}
  {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'autocomplete' => 'off',
      'class' => 'navbar-form pull-right', 'id' => 'formSearch']) !!}
      <div class="input-group">
          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Articulo']) !!}

          <div class="input-group-btn">
              <button type="submit" form="formSearch" class="btn btn-default">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              </button>
          </div>
      </div>
{!! Form::close() !!}
{{-- Fin del Buscador de Tags --}}
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Titulo</th>
      <th>Categoria</th>
      <th>User</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach($articles as $article)
        <tr>
          <td>{{$article->id}}</td>
          <td>{{$article->title}}</td>
          <td>{{$article->category->name}}</td>
          <td>{{$article->user->name}}</td>
          <td><a href="{{ route('admin.articles.destroy',$article->id) }}"  onclick="return confirm('Desea eliminar a {{$article->title}}')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
              <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center">
        {!!$articles->render()!!}
  </div>
@endsection
