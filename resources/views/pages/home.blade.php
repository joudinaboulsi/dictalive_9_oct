@extends('layouts.master')

@section('content')
<!-- home section -->
@foreach ($home as $h)
  

<section class="hero__area-3">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12">
        <div class="hero__inner-3">
          <div class="sec-title-wrapper">
            <h3 class="sec-title title-left" >{{ $h->title_page }}</h3>
            <h3 class="sec-title title-right">{{ $h->subtitle_page }}</h3>
          </div>
          <div class="hero__text-3">
            <p class="hero__text-animation">{!!  strip_tags($h->text)  !!}</p>
          </div>
          <div class="scroll-down service-btn">
            <a><img src="/img/icons/arrow-down-sm.png" alt="arrow icon"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <img src="/img/big-bubble.png" class="main-logo">
  </div>
  <div class="hero3-img-ani">
    <img src="{{ asset('assets/home/'.$h->image) }}" alt="{{ $h->alt_image }}" class="hero3-img">
  </div>
</section>

<!-- services section -->
<div class="client__area-8 sp-x" id="service-section" >
  <div class="client__section">
    <div class="service-sec1">
      <h2 class="client__section__title fade_bottom_5">{{ $h->title1_service }}
      </h2>
      <ul class="d-flex flex-row gap-5  justify-content-center">
        <li class="d-flex flex-column align-items-center gap-3 justify-content-between">
          <h3>Centre de Frappe</h3>
          <a href="{{ route('centredefrappe')}}"><img src="{{ asset('assets/home/'.$h->icon1_service) }}" alt="{{ $h->alt_icon1 }}" class="fade_bottom_5"></a>
        </li>
        <li class="d-flex flex-column align-items-center gap-3 justify-content-between">
          <h3>Centre d'Appels</h3>
          <a href="{{ route('centredappels')}}"><img src="{{ asset('assets/home/'.$h->icon2_service) }}" alt="{{ $h->alt_icon2 }}" class="fade_bottom_5"></a>
        </li>
        <li class="d-flex flex-column align-items-center gap-3 justify-content-between">
          <h3>E-VA</h3>
          <a href="{{ route('e-va')}}"><img src="{{ asset('assets/home/'.$h->icon3_service) }}" alt="{{ $h->alt_icon3 }}" class="fade_bottom_5"></a>
        </li>
      </ul>
    </div>
    <div class="">
      <h2 class="client__section__title fade_bottom_5">{{ $h->title2_service }}
      </h2>
      <ul class="d-flex flex-row gap-5 justify-content-center">
        <li class="d-flex flex-column align-items-center gap-3 justify-content-between">
          <h3>E-Réputation</h3>
          <a href="{{ route('reputation')}}"> <img src="{{ asset('assets/home/'.$h->icon4_service) }}" alt="{{ $h->alt_icon4 }}" class="fade_bottom_5"></a>
        </li>
        <li class="d-flex flex-column align-items-center gap-3 justify-content-between">
          <h3>DictaSupport</h3>
          <a href="{{ route('dictasupport')}}"><img src="{{ asset('assets/home/'.$h->icon5_service) }}" alt="{{ $h->alt_icon5 }}" class="fade_bottom_5"></a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- video area start-->
<section class="award__area-8">
  <div class="award__video-8">
    <div class="award__text-8">
      <h2 class="title">{{ $h->title_video }}</h2>
    </div>

    <video loop="" muted="" autoplay="" playsinline="">
      <source src="{{ asset('assets/home/'.$h->video) }}" type="video/mp4">
    </video>
  </div>
</section>
<!-- video area end-->

<!-- About area start -->
<section class="about__area">
  <div class="container line g-0 pt-140 pb-130">
    <div class="row">
      <div class="col-xxl-12">
        <div class="about__title-wrapper">
          <h3 class="sec-title title-anim">{{ $h->title_section4 }}</h3>
        </div>
        <div class="about__content-wrapper">
          <div class="about__img">
            <div class="img-anim">
              <img src="{{ asset('assets/home/'.$h->image1_section4) }}" alt="{{ $h->alt_image1_section4 }}" data-speed="0.3">
            </div>
            <div class="about__img-right">
              <img src="{{ asset('assets/home/'.$h->image2_section4) }}" alt="{{ $h->alt_image2_section4 }} Right" data-speed="0.5">
              <div class="shape">
                <div class="secondary" data-speed="0.9"></div>
                <div class="primary"></div>
              </div>
            </div>
          </div>
          <div class="about__content text-anim">
            <p>{!!  strip_tags($h->content_section4) !!}</p>
            <div class="cursor-btn btn_wrapper">
              <a class="btn-item wc-btn-primary btn-hover" href="{{ $h->link }}"><span></span> {{ $h->url_text }} <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
<!-- Roll area start -->
@foreach($sliders as $s)
<section class="roll__area-2" style="background-color: {{$s->color}}">
  <div class="swiper roll__slider">
    <div class="swiper-wrapper roll__wrapper">
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider1 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider2 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider3 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider4 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider5 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider6 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider7 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider8 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider9 }}</h2>
      </div>
     
    </div>
  </div>
</section>
<!-- Roll area end -->


<!-- Roll area start -->

<section class="roll__area-3" style="background-color: {{$s->color2}}">
  <div dir="rtl" class="swiper roll__slider">
    <div class="swiper-wrapper roll__wrapper">
      <div class="swiper-slide roll__slide ">
        <h2>{{ $s->slider10 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider11 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider12 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider13 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider14 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider15 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider16 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider17 }}</h2>
      </div>
      <div class="swiper-slide roll__slide">
        <h2>{{ $s->slider18 }}</h2>
      </div>
    </div>
  </div>
</section>
<!-- Roll area end -->
@endforeach

<!-- Blog area start -->
<section class="blog__area no-pb blog__animation">
  <div class="container g-0  pt-140 pb-140">
    <div class="row">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
        @foreach ($home as $b)
        <div class="sec-title-wrapper">
          <h2 class="sec-sub-title">{{ $b->title_blog }}</h2>
          <h3 class="sec-title">{{ $b->subtitle_blog }}</h3>
        </div>
        @endforeach
      </div>
      @foreach($blogs as $blog)
    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
        <article class="blog__item">
          <div class="blog__img-wrapper">
            <a href="{{ route('blogDetail_path',$blog->id) }}">
              <div class="img-box">
                <img class="image-box__item" src="{{ asset('assets/blog/'.$blog->image_box) }}" alt="{{ $blog->alt_image_box }}">
                <img class="image-box__item" src="{{ asset('assets/blog/'.$blog->image_box) }}" alt="{{ $blog->alt_image_box }}">
              </div>
            </a>
          </div>
          <h4 class="blog__meta">{{ $blog->date }}</h4>
          <h5><a href="{{ route('blogDetail_path',$blog->id) }}" class="blog__title">{{ $blog->title }}</a></h5>
          @if(app('blog')->text_read_more)
          <a href="{{ route('blogDetail_path',$blog->id) }}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
          @endif
        </article>
      </div>
      @endforeach
  


    </div>
  </div>
</section>

<!-- Contact Footer area start -->
<footer class="footer__area">
  <div class="footer__top">
    @foreach ($home as $b)
    <div class="container footer-line"></div>
    <img src="{{ asset('assets/home/'.$b->image_footer) }}" alt="{{ $b->alt_footer }}" data-speed="0.5">
  </div>
  @endforeach
  <div class="footer__btm">
    <div class="container">
      <div class="row footer__row">
        <div class="col-xxl-12">
          <div class="footer__inner">
            <div class="footer__widget">
              <img class="footer__logo contact__logo" src="{{ asset('assets/logo/'.app('contact')->logo_footer) }}" alt="{{ app('contact')->alt_footer }}">
              <p>{{ app('contact')->description }}</p>
              <ul class="footer__social">
              <li><a href="{{ app('contact')->fb }}" target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                      <li><a href="{{ app('contact')->insta }}" target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                      <li><a href="{{ app('contact')->linkedin  }}" target="_blank"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
              </ul>
            </div>
            <div class="footer__widget-2">
              <ul class="footer__contact">
                <h2 class="footer__widget-title">Siège</h2>
                <li style="width: 250px;">{{ app('contact')->address  }}</li>
              </ul>
            </div>
            <div class="footer__widget-3">
              <h2 class="footer__widget-title">Numéros de téléphone</h2>
              <ul class="footer__contact">
                <li><a href="tel:{{ app('contact')->tel1 }}">{{ app('contact')->phone  }}</a></li>
                <li><a href="tel:{{ app('contact')->tel2 }}">{{ app('contact')->phone2  }}</a></li>
                <h2 class="footer__widget-title">Mail</h2>
                <li><a href="mailto:{{ app('contact')->email }}">{{ app('contact')->email }}</a></li>
              </ul>
            </div>
            <div class="footer__widget-4">
              <h2 class="project-title">{{ app('contact')->title_contact }}</h2>
              <div class="btn_wrapper">
                <a href="{{ app('contact')->url }}" class="wc-btn-primary btn-hover btn-item"><span></span> {{ app('contact')->link_contact }} <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Footer area end -->
@endsection