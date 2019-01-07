@extends('layouts.app')

@push('opengraph')
<meta property="og:title" content="{{ $person->namme }}" />
<meta property="og:url" content="{{ url()->current() }}" />
@endpush

@section('content')
<div class="container">
  <!-- Product Info Start -->
  <div class="product-info row">
    <div class="col-lg-8 col-md-12 col-xs-12">
      <div class="ads-details-wrapper">
        <div id="owl-demo" class="owl-carousel owl-theme">
          <div class="item">
            <div class="product-img">
              <img class="img-fluid" src="{{ asset('img/productinfo/img1.jpg') }}" alt="">
            </div>
            <span class="price">@lang('Still missing')</span>
          </div>
          <div class="item">
            <div class="product-img">
              <img class="img-fluid" src="{{ asset('img/productinfo/img3.jpg') }}" alt="">
            </div>
            <span class="price">$1,550</span>
          </div>
          <div class="item">
            <div class="product-img">
              <img class="img-fluid" src="{{ asset('img/productinfo/img2.jpg') }}" alt="">
            </div>
            <span class="price">$1,550</span>
          </div>
        </div>
      </div>

      <div class="details-box">
        <div class="ads-details-info">
          <h2>{{ $person->name }}</h2>
          
          <div class="description">
            {{ $person->description }}
          </div>
        </div>
        <div class="tag-bottom">
          <div class="float-left">
            <ul class="advertisement">
              <li>
              <p><strong><i class="lni-folder"></i> Categories:</strong> <a href="#">Electronics</a></p>
              </li>
              <li>
              <p><strong><i class="lni-archive"></i> Condition:</strong> New</p>
              </li>
              <li>
              <p><strong><i class="lni-package"></i> Brand:</strong> <a href="#">Apple</a></p>
              </li>
            </ul>
          </div>
          <div class="float-right">
            <div class="share">
              <div class="social-link">  
                <a class="facebook" data-toggle="tooltip" data-placement="top" title="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                <a class="twitter" data-toggle="tooltip" data-placement="top" title="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                <a class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                <a class="google" data-toggle="tooltip" data-placement="top" title="google plus" href="#"><i class="lni-google-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-12">
      <!--Sidebar-->
      <aside class="details-sidebar">
        <div class="widget">
          <h4 class="widget-title">@lang('Contact Person')</h4>
          <div class="agent-inner">
            <div class="agent-title">
              <div class="agent-photo">
                <a href="#"><img src="{{ asset('img/productinfo/agent.jpg') }}" alt=""></a>
              </div>
              <div class="agent-details">
                <h3><a href="#">{{ $person->contact_name }}</a></h3>
                <span><i class="lni-phone-handset"></i>{{ $person->contact_phone }}</span>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Your Email">
            <input type="text" class="form-control" placeholder="Your Phone">
            <p>I'm interested in this property [ID 123456] and I'd like to know more details.</p>
            <button class="btn btn-common fullwidth mt-4">Send Message</button>
          </div>
        </div>
        <div class="widget">
            <h4 class="widget-title">@lang('Advertisement')</h4>
            <div class="add-box text-center">
              <img src="https://lh6.ggpht.com/Ab63gyKVnGwbQaj0guyJ0caGj-VugefmMd3SyzpPOX2RgCDA1tzQTY36sGI65Guw5OXdas4f5w=w303" alt="" class="mb-4 mt-4">
            </div>
          </div>
        <!-- Popular Posts widget -->
        <div class="widget">
          <h4 class="widget-title">@lang('Other Missing People')</h4>
          <ul class="posts-list">
            <li>
              <div class="widget-thumb">
                <a href="#"><img src="assets/img/details/img1.jpg" alt="" /></a>
              </div>
              <div class="widget-content">
                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                <div class="meta-tag">
                  <span>
                    <a href="#"><i class="lni-user"></i> Smith</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-map-marker"></i> New Your</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-tag"></i> Radio</a>
                  </span>
                </div>
                <h4 class="price">$480.00</h4>
              </div>
              <div class="clearfix"></div>
            </li>
            <li>
              <div class="widget-thumb">
                <a href="#"><img src="assets/img/details/img2.jpg" alt="" /></a>
              </div>
              <div class="widget-content">
                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                <div class="meta-tag">
                  <span>
                    <a href="#"><i class="lni-user"></i> Smith</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-map-marker"></i> New Your</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-tag"></i> Radio</a>
                  </span>
                </div>
                <h4 class="price">$480.00</h4>
              </div>
              <div class="clearfix"></div>
            </li>
            <li>
              <div class="widget-thumb">
                <a href="#"><img src="assets/img/details/img3.jpg" alt="" /></a>
              </div>
              <div class="widget-content">
                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                <div class="meta-tag">
                  <span>
                    <a href="#"><i class="lni-user"></i> Smith</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-map-marker"></i> New Your</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-tag"></i> Radio</a>
                  </span>
                </div>
                <h4 class="price">$480.00</h4>
              </div>
              <div class="clearfix"></div>
            </li>
            <li>
              <div class="widget-thumb">
                <a href="#"><img src="assets/img/details/img4.jpg" alt="" /></a>
              </div>
              <div class="widget-content">
                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                <div class="meta-tag">
                  <span>
                    <a href="#"><i class="lni-user"></i> Smith</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-map-marker"></i> New Your</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-tag"></i> Radio</a>
                  </span>
                </div>
                <h4 class="price">$480.00</h4>
              </div>
              <div class="clearfix"></div>
            </li>
            <li>
              <div class="widget-thumb">
                <a href="#"><img src="assets/img/details/img5.jpg" alt="" /></a>
              </div>
              <div class="widget-content">
                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                <div class="meta-tag">
                  <span>
                    <a href="#"><i class="lni-user"></i> Smith</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-map-marker"></i> New Your</a>
                  </span>
                  <span>
                    <a href="#"><i class="lni-tag"></i> Radio</a>
                  </span>
                </div>
                <h4 class="price">$480.00</h4>
              </div>
              <div class="clearfix"></div>
            </li>
          </ul>
        </div>

      </aside>
      <!--End sidebar-->
    </div>
  </div>
  <!-- Product Info End -->

</div>   
@endsection