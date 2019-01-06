@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">  
      <!-- Start Post -->
      @for ($i = 1; $i <= 3; $i++)
      <div class="blog-post">
        <!-- Post thumb -->
        <div class="post-thumb">
          <a href="{{ route('blog.show', $i) }}"><img class="img-fluid" src="{{ asset('img/blog/blog'.$i.'.jpg') }}" alt=""></a>
          <div class="hover-wrap"></div>
        </div>
        <!-- End Post post-thumb -->
        <!-- Post Content -->
        <div class="post-content">
          <div class="meta">
            <span class="meta-part"><a href="#"><i class="lni-user"></i> Clasified</a></span>
            <span class="meta-part"><a href="#"><i class="lni-alarm-clock"></i> June 21, 2018</a></span>
            <span class="meta-part"><a href="#"><i class="lni-folder"></i> Sticky</a></span>
            <span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> 1 Comments</a></span>             
          </div>                
          <h2 class="post-title"><a href="{{ route('blog.show', $i) }}">Eum Iriure Dolor Duis Autem</a></h2>
          <div class="entry-summary">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero molestiae, id reiciendis ipsum consequuntur odit sapiente accusantium odio. Esse nemo quos quaerat illo! Enim saepe impedit distinctio, placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate voluptatum dolores mollitia consequatur velit, veritatis in pariatur ducimus numquam ipsa iusto! Rem eveniet dolorum, quisquam neque beatae quas ea tenetur!</p>
          </div>
          <a href="{{ route('blog.show', $i) }}" class="btn btn-common">Read More</a>
        </div>
        <!-- Post Content -->
      </div>
      @endfor
      <!-- End Post -->
      
      <!-- Start Pagination -->
      <div class="pagination-bar">
          <nav>
          <ul class="pagination">
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