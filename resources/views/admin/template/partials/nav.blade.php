<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::User())
      <ul class="nav navbar-nav">
        <li class=""><a href="{{ url('/') }}">Inicio</a></li>
        <li class="@yield('usuario')"><a href="{{route('users.index')}}">Usuarios</a></li>
        <li class="@yield('categoria')"><a href="{{route('categories.index')}}">Categorias</a>
        <li class="@yield('articulo')"><a href="{{route('articles.index')}}">Articulos</a></li>
        <li class="@yield('imagen')"><a href="{{route('admin.images.index')}}">Imagenes</a></li>
        <li class="@yield('tag')"><a href="{{route('tags.index')}}">Tags</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/') }}">Pagina Principal</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::User()->name}}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Salir
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
          </ul>
        </li>
      </ul>
    @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
