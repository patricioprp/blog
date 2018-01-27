@extends('admin.template.main')
@section('title','Listar Tag')
@section('content','Listar Tags')
@section('tag','active')
@section('cuerpo')

  <a href="{{ route('tags.create') }}" class="btn btn-info">Registrar Nuevo Tag</a>

      {{-- Buscador de tags --}}
    {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'autocomplete' => 'off',
        'class' => 'navbar-form pull-right', 'id' => 'formSearch']) !!}
        <div class="input-group">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}

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
      <th>NOMBRE</th>
      <th>ACCION</th>
    </thead>
    <tbody>
      @foreach($tags as $tag)
        <tr>
          <td>{{$tag->id}}</td>
          <td>{{$tag->name}}</td>
          <td><a href="{{ route('admin.tags.destroy',$tag->id) }}"  onclick="return confirm('Desea eliminar a {{$tag->name}}')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
              <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
    <div class="text-center">
  {!!$tags->render()!!}
</div>
@endsection
