<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="lni-menu"></span>
        <span class="lni-menu"></span>
        <span class="lni-menu"></span>
      </button>
      <a href="{{ route('index', ['source' => 'navbar']) }}" class="navbar-brand"><img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}"></a>
    </div>
    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="navbar-nav mr-auto w-100 justify-content-center">
        <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('index', ['source' => 'navbar']) }}">
            @lang('Home')
          </a>
        </li>
        <li class="nav-item {{ request()->routeIs('person.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('person.index', ['source' => 'navbar']) }}">
            @lang('Missing People')
          </a>
        </li>
        <li class="nav-item {{ request()->routeIs('blog.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('blog.index', ['source' => 'navbar']) }}">
            @lang('Blog')
          </a>
        </li>
        <li class="nav-item {{ request()->routeIs('contact.form') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('contact.form', ['source' => 'navbar']) }}">
            @lang('Contact')
          </a>
        </li>

        @auth
        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home', ['source' => 'navbar']) }}">
            @lang('Dashboard')
          </a>
        </li>
        @endauth

      </ul>
      <div class="post-btn">
        <a class="btn btn-common" href="{{ route('person.create', ['source' => 'navbar']) }}"><i class="lni-pencil-alt"></i> @lang('Post Missing Person')</a>
      </div>
    </div>
  </div>

  <!-- Mobile Menu Start -->
  <ul class="mobile-menu">
    <li>
      <a class="{{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">@lang('Home')</a>
    </li>
    <li>
      <a class="{{ request()->routeIs('person.index') ? 'active' : '' }}" href="{{ route('person.index') }}">@lang('Missing People')</a>
    </li>
    <li>
      <a class="{{ request()->routeIs('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">@lang('Blog')</a>
    </li>
    <li>
      <a class="{{ request()->routeIs('contact.form') ? 'active' : '' }}" href="{{ route('contact.form') }}">@lang('Contact')</a>
    </li>

    @auth
    <li>
      <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">@lang('Dashboard')</a>
    </li>
    @endauth
  </ul>
  <!-- Mobile Menu End -->

</nav>