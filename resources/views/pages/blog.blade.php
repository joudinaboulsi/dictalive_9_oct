@extends('layouts.master')

@section('content')

  

 
 <!-- Blog area start -->
   <section class="blog__area-6 blog__animation">

          <div class="container g-0 line pt-110 pb-110">
            <span class="line-3"></span>
            @foreach ($blog_content as $b)
            <div class="row pb-130">
              <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title-2 animation__char_come" style=" width: 550px;">{{ $b->title_blog }}</h2>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                <div class="blog__text">
                  <p>{!! strip_tags($b->text_blog) !!}</p>
                </div>
              </div>
            </div>
            @endforeach
          
            <div class="row reset-grid">
              @foreach ($blogs as $blog)
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="{{ route('blogDetail_path',$blog->id)}}">
                      <div class="img-box">
                        <img class="image-box__item" src="{{ asset('assets/blog/'.$blog->image_box) }}"  alt="{{ $blog->alt_image_box }}">
                        <img class="image-box__item" src="{{ asset('assets/blog/'.$blog->image_box) }}"  alt="{{ $blog->alt_image_box }}">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta">{{ $blog->date }}</h4>
                  <h5> <a href="{{ route('blogDetail_path',$blog->id)}}" class="blog__title">{{ $blog->title }}</a></h5>
                  @if(app('blog')->text_read_more)
                  <a href="{{ route('blogDetail_path',$blog->id)}}" class="blog__btn">{{ app('blog')->text_read_more }} <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  @endif
                </article>
              </div>
           @endforeach
              {{-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="{{ route('blog-details')}}">
                      <div class="img-box">
                        <img class="image-box__item" src="/img/blog/blog-2.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="/img/blog/blog-2.jpg" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta">02 May 2019</h4>
                  <h5><a href="{{ route('blog-details')}}" class="blog__title">L'équipe Dictalive aux Journées Francophones de Radiologie</a></h5>
                  <a href="{{ route('blog-details')}}" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="{{ route('blog-details')}}">
                      <div class="img-box">
                        <img class="image-box__item" src="/img/blog/blog-3.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="/img/blog/blog-3.jpg" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta">02 May 2022</h4>
                  <h5><a href="{{ route('blog-details')}}" class="blog__title">Dictalive à SantExpo</a></h5>
                  <a href="{{ route('blog-details')}}" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div> --}}
            </div>
          </div>
   </section>
        <!-- Blog area end -->
        @endsection