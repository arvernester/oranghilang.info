<header id="header-wrap">
  <!-- Start Top Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-5 col-xs-12">
          <!-- Start Contact Info -->
          <ul class="list-inline">
            <li><i class="lni-phone"></i> +62 811 203 4734</li>
            <li><i class="lni-envelope"></i> bantuan@oranghilang.info</li>
          </ul>
          <!-- End Contact Info -->
        </div>
        <div class="col-lg-5 col-md-7 col-xs-12">
          <div class="roof-social float-right">
            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
            <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
            <a class="google" href="#"><i class="lni-google-plus"></i></a>
          </div>
          <div class="header-top-right float-right">
            @guest
            <a href="{{ route('login', ['source' => 'navbar']) }}" class="header-top-button"><i class="lni-lock"></i> @lang('Log In')</a> |
            <a href="{{ route('register', ['source' => 'navbar']) }}" class="header-top-button"><i class="lni-user"></i> @lang('Register')</a>
            @else
            <a href="{{ route('logout', ['source' => 'navbar']) }}" class="header-top-button"><i class="lni-unlock"></i> @lang('Logout')</a>
            @endguest
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Top Bar -->

  <!-- Navbar Start -->
  @include('layouts.partials.navbar')
  <!-- Navbar End -->

  <!-- Hero Area Start -->
  @if (request()->routeIs('index'))
    @include('layouts.partials.hero')
  @endif
  <!-- Hero Area End -->

</header>