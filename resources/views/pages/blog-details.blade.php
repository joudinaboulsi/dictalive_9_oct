@extends('layouts.master')

@section('content')
<!-- Blog detail start -->
@foreach($blog as $b)

<section class="blog__detail">
  <div class="container g-0 line pt-140">
    <span class="line-3"></span>
    <div class="row">
      <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
        <div class="blog__detail-top">
          <h2 class="blog__detail-date animation__word_come"><span>{{ $b->date }}</span></h2>
          <h3 class="blog__detail-title animation__word_come">{{ $b->title }}
          </h3>
        </div>
      </div>
      <div class="col-xxl-12">
        <div class="blog__detail-thumb">
          <img src="{{ asset('assets/blog/'.$b->image) }}" alt="{{$b->alt_image}}" data-speed="0.5">
        </div>
       

      </div>
      <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
        @php
          $postTitle = urlencode($b->title);
          $postUrl = urlencode(route('blogDetail_path', $b->id));
          $linkedShareUrl = "https://www.linkedin.com/?url=$postUrl&title=$postTitle";
          $fbUrl = "https://www.facebook.com/?url=$postUrl&title=$postTitle";
          $instagramShareUrl = "https://www.instagram.com/?url=$postUrl&title=$postTitle";
      @endphp
        <ul class="footer__social mt-4 d-flex" >
          <p class="sub-title-anim">Share</p>
          <li style="padding-left: 15px"> <a href="{{ $fbUrl }}" target="_blank"><span><i class="fa-brands fa-facebook"></i></span></a></li>
     
          <li> <a href="{{ $instagramShareUrl }}" target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a></li>
          <li> <a href="{{ $linkedShareUrl }}" target="_blank"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
        </ul>
        <div class="blog__detail-content">
        <p>{!! strip_tags($b->text) !!}</p>
        </div>
       
        
      </div>
      
    </div>
  </div>
</section>
<!-- Blog detail end -->

@endforeach
<!-- Related blog start -->
<section class="blog__related blog__animation">
  <div class="container g-0 line pt-130 pb-140">
    <span class="line-3"></span>
    <div class="row">
      <div class="col-xxl-12">
        @foreach($related as $r)
        <div class="sec-title-wrapper">
          <h2 class="sec-title title-anim">{{ $r->title }}</h2>
        </div>
        @endforeach
      </div>
    </div>

    <div class="row reset-grid">
      @foreach($blogs as $b)
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
        <article class="blog__item">
          <div class="blog__img-wrapper">
            <a href="{{route('blogDetail_path',$b->id)}}">
              <div class="img-box">
                <img class="image-box__item" src="{{ asset('assets/blog/'.$b->image_box) }}" alt="{{ $b->alt_image_box }}">
                <img class="image-box__item" src="{{ asset('assets/blog/'.$b->image_box) }}" alt="{{ $b->alt_image_box }}">
              </div>
            </a>
          </div>
          <h4 class="blog__meta sub-title-anim"><a href="category.html">{{ $b->date }}</h4>
          <h5><a href="{{ route('blogDetail_path',$b->id)}}" class="blog__title sub-title-anim">{{ $b->title }}</a></h5>
          @if(app('blog')->text_read_more)
          <a href="{{ route('blogDetail_path',$b->id)}}" class="blog__btn">{{ app('blog')->text_read_more }} <span><i class="fa-solid fa-arrow-right"></i></span></a>
          @endif
        </article>
      </div>
@endforeach
      {{-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
        <article class="blog__item" data-speed="auto">
          <div class="blog__img-wrapper">
            <a href="{{ route('blog-details')}}">
              <div class="img-box">
                <img class="image-box__item" src="/img/blog/blog-3.jpg" alt="Blog Thumbnail">
                <img class="image-box__item" src="/img/blog/blog-3.jpg" alt="BLog Thumbnail">
              </div>
            </a>
          </div>
          <h4 class="blog__meta sub-title-anim"><a href="category.html">02 May 2019</h4>
          <h5><a href="{{ route('blog-details')}}" class="blog__title sub-title-anim">Dictalive à SantExpo</a></h5>
          <a href="{{ route('blog-details')}}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
        </article>
      </div> --}}
    </div>
  </div>
</section>
<!-- Related blog end -->


@endsection