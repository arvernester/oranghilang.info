@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
      <aside>
        <!-- Searcg Widget -->
        <div class="widget_search">
          <form role="search" id="search-form">
            <input type="search" class="form-control" autocomplete="off" name="s" placeholder="@lang('Search...')" id="search-input" value="">
            <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
          </form>
        </div>
        <!-- Categories Widget -->
        <div class="widget categories">
          <h4 class="widget-title">@lang('All Locations')</h4>
          <ul class="categories-list">
            <li>
              <a href="#">
                <i class="lni-dinner"></i>
                Hotel & Travels <span class="category-counter">(5)</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lni-control-panel"></i>
                Services <span class="category-counter">(8)</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lni-github"></i>
                Pets <span class="category-counter">(2)</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lni-coffee-cup"></i>
                Restaurants <span class="category-counter">(3)</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lni-home"></i>
                Real Estate <span class="category-counter">(4)</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lni-pencil"></i>
                Jobs <span class="category-counter">(5)</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lni-display"></i>
                Electronics <span class="category-counter">(9)</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="widget">
          <h4 class="widget-title">@lang('Advertisement')</h4>
          <div class="add-box text-center">
            <img src="https://lh4.ggpht.com/ike-jviZQ32RHuhkwLcAt_9vdpBX1oWKU00NX7QRe5GPl7-5sapzZ0u91_ssg_-Ednak2Hj-Hg=w162" alt="">
          </div>
        </div>
      </aside>
    </div>
    <div class="col-lg-9 col-md-12 col-xs-12 page-content">
      <!-- Product filter Start -->
      <div class="product-filter">
        <div class="short-name">
          <span>@lang('Showing (:from - :to people of :total people)', [
            'from' => 1,
            'to' => 12,
            'total' => 300
          ])</span>
        </div>
        <div class="Show-item">
          <span>Show Items</span>
          <form class="woocommerce-ordering" method="post">
            <label>
              <select name="order" class="orderby">
                <option selected="selected" value="menu-order">49 items</option>
                <option value="popularity">popularity</option>
                <option value="popularity">Average ration</option>
                <option value="popularity">newness</option>
                <option value="popularity">price</option>
              </select>
            </label>
          </form>
        </div>
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
          </li>
        </ul>
      </div>
      <!-- Product filter End -->

      <!-- Adds wrapper Start -->
      <div class="adds-wrapper">
        <div class="tab-content">
          <div id="grid-view" class="tab-pane fade">
            <div class="row">
              @for ($i = 1; $i <= 4; $i++)
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="featured-box">
                  <figure>
                    <span class="price-save">
                      @lang('Still missing')
                    </span>
                    <div class="icon">
                      <span><i class="lni-bookmark"></i></span>
                    </div>
                    <a href="{{ route('person.show', $i) }}"><img class="img-fluid" src="{{ asset('img/featured/img-'.$i.'.jpg') }}" alt=""></a>
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
          <div id="list-view" class="tab-pane fade active show">
            <div class="row">
              @for ($i = 1; $i <= 4; $i++)
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="featured-box">
                  <figure>
                    <span class="price-save">
                      @lang('Still missing')
                    </span>
                    <div class="icon">
                      <span><i class="lni-bookmark"></i></span>
                    </div>
                    <a href="{{ route('person.show', $i) }}"><img class="img-fluid" src="{{ asset('img/featured/img-'.$i.'.jpg') }}" alt=""></a>
                  </figure>
                  <div class="feature-content">
                    <div class="product">
                      <a href="#">People > </a>
                      <a href="#">Missing</a>
                    </div>
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
        </div>
      </div>
      <!-- Adds wrapper End -->

      <!-- Start Pagination -->
      <div class="pagination-bar">
          <nav>
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
      <!-- End Pagination -->
      
    </div>
  </div>
</div>
@endsection