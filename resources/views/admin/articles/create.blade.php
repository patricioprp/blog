@extends('admin.template.main')
@section('title','Crear Articulo')
@section('content','Crear Articulo')
@section('articulo','active')
@section('cuerpo')
    {!! Form::open(['route'=>'articles.store','method'=>'POST','autocomplete'=>'off','files'=>true]) !!}
    <div class="form-group">
      {!! Form::label('title','Titulo') !!}
      {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo...','required'])!!}
    </div>
    <div class="form-group">
      {!! Form::label('category_id','Categoria') !!}
      {!! Form::select('category_id',$categories,null,['class'=>'form-control select-category','placeholder'=>'Seleccione una Opcion','required'])!!}
    </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenido') !!}
            {!! Form::textarea('content',null,['class' => 'form-control textarea-content','placeholder' => 'Contenido del artículo','required'])!!}
</div>
    <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags[]', $tags,null,['class' => 'form-control select-tag', 'multiple', 'required']) !!}

    <div class="form-group">
      {!! Form::label('image','Imagen')!!}
      {!! Form::file('image')!!}
    </div>
    <div class="form-group">
      {!! Form::submit('Agregar Articulo',['class'=>'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}
@endsection

@section('js')
    <script>
        $(".select-tag").chosen({
            disable_search_threshold: 3,
            placeholder_text_multiple: 'Seleccione un máximo de tres tasgs',
            max_selected_options: 3,
        });
        $(".select-category").chosen({});

    </script>
@endsection