

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article->title}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
    <!-- Bootstrap -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php echo $article->title; ?>//usando php
    <br>
    {{ $article->title}}//usando blade
    <br>
    @for($i =0 ; $i<=5; $i++)
      {{ $i }}
    @endfor
    <br>
    @if(1 ==1)
      {{ "es igual a uno" }}
    @endif

    <h1>{{$article->title}}</h1>
    <hr />
    <h2>{{$article->content}}</h2>
    <hr />
    <h2> <small>{{$article->user->name}} | {{$article->category->name}} | </small></h2>
    @foreach ($article->tags as $tag)
    {{$tag->name}}
    @endforeach
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
