<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $title ?? config('app.name') }}</title>

    @include('layouts.partials.css')

    @stack('css')

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    @include('layouts.partials.header')
    <!-- Header Area wrapper End -->

    <!-- Featured Section Start -->
    <section class="featured section-padding">
      <div class="container">
        <h1 class="section-title">@lang('Latest People')</h1>
        <div class="row">

          @for ($i = 1; $i <= 6; $i++)
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
            <div class="featured-box">
              <figure>
                <div class="icon">
                  <span><i class="lni-bookmark"></i></span>
                </div>
                <a href="{{ route('person.show', $i) }}"><img class="img-fluid" src="{{ asset('img/featured/img-1.jpg') }}" alt=""></a>
              </figure>
              <div class="feature-content">
                <h4><a href="{{ route('person.show', $i) }}">Canon SX Powershot ...</a></h4>
                <div class="meta-tag">
                  <span>
                    <a href="#"><i class="lni-user"></i> John Smith</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                  </span>
                </div>
                <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                <div class="listing-bottom">
                  <a href="{{ route('person.show', $i) }}" class="btn btn-common float-right">@lang('View Details')</a>
                </div>
              </div>
            </div>
          </div>
          @endfor
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Works Section Start -->
    <section class="works section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="section-title">How It Works?</h3>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="works-item">
              <div class="icon-box">
                <i class="lni-users"></i>
              </div>
              <p>Create an Account</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="works-item">
              <div class="icon-box">
                <i class="lni-bookmark-alt"></i>
              </div>
              <p>Post Free Ad</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="works-item">
              <div class="icon-box">
                <i class="lni-thumbs-up"></i>
              </div>
              <p>Deal Done</p>
            </div>
          </div>
          <hr class="works-line">
        </div>
      </div>
    </section>
    <!-- Works Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel">
              <div class="item">
                <div class="img-thumb">
                  <img src="{{ asset('img/testimonial/img1.png') }}" alt="">
                </div>
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                    <div class="info-text">
                      <h2><a href="#">Josh Rossi</a></h2>
                      <h4><a href="#">CEO of Fiverr</a></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item">
                  <div class="img-thumb">
                    <img src="{{ asset('img/testimonial/img2.png') }}" alt="">
                  </div>
                  <div class="testimonial-item">
                    <div class="content">
                      <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                      <div class="info-text">
                        <h2><a href="#">Jessica</a></h2>
                        <h4><a href="#">CEO of Dropbox</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item">
                  <div class="img-thumb">
                    <img src="{{ asset('img/testimonial/img3.png') }}" alt="">
                  </div>
                  <div class="testimonial-item">
                    <div class="content">
                      <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                      <div class="info-text">
                        <h2><a href="#">Johnny Zeigler</a></h2>
                        <h4><a href="#">CEO of Fiverr</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item">
                  <div class="img-thumb">
                    <img src="{{ asset('img/testimonial/img2.png') }}" alt="">
                  </div>
                  <div class="testimonial-item">
                    <div class="content">
                      <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                      <div class="info-text">
                        <h2><a href="#">Josh Rossi</a></h2>
                        <h4><a href="#">CEO of Fiverr</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item">
                  <div class="img-thumb">
                    <img src="{{ asset('img/testimonial/img5.png') }}" alt="">
                  </div>
                  <div class="testimonial-item">
                    <div class="content">
                      <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                      <div class="info-text">
                        <h2><a href="#">Priyanka</a></h2>
                        <h4><a href="#">CEO of Dropbox</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section -->
    <section id="blog" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <h2 class="section-title">
          Blog Post
        </h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset('img/blog/img-1.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
                  <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
                </div>
                <h3>
                  <a href="single-post.html">Recently Launching Our Iphone X</a>
                </h3>
                <p>
                Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
                </p>
                <a href="single-post.html" class="btn btn-common">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset('img/blog/img-2.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
                  <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
                </div>
                <h3>
                  <a href="single-post.html">How to get more ad views</a>
                </h3>
                <p>
                Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
                </p>
                <a href="single-post.html" class="btn btn-common">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset('img/blog/img-3.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
                  <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
                </div>
                <h3>
                  <a href="single-post.html">Writing a better product description</a>
                </h3>
                <p>
                 Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
                </p>
                <a href="single-post.html" class="btn btn-common">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Subscribe Section Start -->
    <section class="subscribes section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="subscribes-inner">
              <div class="icon">
                <i class="lni-pointer"></i>
              </div>
              <div class="sub-text">
                <h3>Subscribe to Newsletter</h3>
                <p>and receive new ads in inbox</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form>
              <div class="subscribe">
                <input class="form-control" name="EMAIL" placeholder="Enter your Email" required="" type="email">
                <button class="btn btn-common" type="submit">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Subscribe Section End -->

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
