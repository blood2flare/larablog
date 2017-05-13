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
      <a class="navbar-brand" href="/">KS System</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ request()->is('/') ? "active" : "" }}"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li class="{{ request()->is('blog') ? "active" : "" }}"><a href="/blog">Blogs</a></li>
        <li class="{{ request()->is('about') ? "active" : "" }}"><a href="/about">About</a></li>
        <li class="{{ request()->is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::check() ? Auth::user()->name : 'My Account' }}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if (Auth::check())
              <li><a href="{{ route('posts.index') }}">Posts</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                {!! Form::open(['id' => 'logout-form', 'url' => route('logout'), 'method' => 'POST', 'style' => 'display:none']) !!}
                {!! Form::close() !!}
            @else
              <li><a href="{{ route('login') }}">Login</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>