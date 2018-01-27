@extends('admin.template.main')
@section('title','Editando el Articulo')
@section('content','Editando el Articulo='.$article->title)
@section('articulo','active')
@section('cuerpo')
  {!! Form::open(['route'=>['articles.update',$article],'method'=>'PUT']) !!}
  <div class="form-group">
    {!! Form::label('title','Titulo') !!}
    {!! Form::text('title',$article->title,['class'=>'form-control','placeholder'=>'Titulo del articulo...','required'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('category_id','Categoria') !!}
    {!! Form::select('category_id',$categories,$article->category->id,['class'=>'form-control select-category','placeholder'=>'Seleccione una Opcion','required'])!!}
  </div>
      <div class="form-group">
          {!! Form::label('content', 'Contenido') !!}
          {!! Form::textarea('content',$article->content,['class' => 'form-control textarea-content','placeholder' => 'Contenido del artículo','required'])!!}
</div>
  <div class="form-group">
      {!! Form::label('tags', 'Tags') !!}
      {!! Form::select('tags[]', $tags,$my_tags,['class' => 'form-control select-tag', 'multiple', 'required']) !!}

  <div class="form-group">
    {!! Form::submit('Editar Articulo',['class'=>'btn btn-primary'])!!}
  </div>
  {!! Form::close() !!}
@endsection

@section('js')
  <script>
      $('.select-tag').chosen({
          disable_search_threshold: 3,
          placeholder_text_multiple: "Seleccione un máximo de tres tasgs",
          max_selected_options: 3,
      });
      $('.select-category').chosen({
         placeholder_text_single: "Seleccione una Categoria..."
      });
      $('.textarea-content').trumbowyg({

      });
  </script>
@endsection
