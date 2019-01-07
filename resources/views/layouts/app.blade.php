<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>
    
    @include('layouts.partials.css')

    @stack('css')

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    @include('layouts.partials.header')
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Post you Ads</h2>
              <ol class="breadcrumb">
                <li><a href="#">Home /</a></li>
                <li class="current">Post you Ads</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <!-- Start Content -->
    <div id="content" class="section-padding">
      @yield('content') 
    </div>
    <!-- End Content -->

    <!-- Footer Section Start -->
    @include('layouts.partials.footer')
    <!-- Footer Section End -->  

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('layouts.partials.js')

    @stack('js')
      
  </body>
</html>