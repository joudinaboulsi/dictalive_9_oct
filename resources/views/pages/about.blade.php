@extends('layouts.master')
@section('content')
@foreach ($about as $b)
  

<!-- About area start -->
<section class="service__hero-2">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12">
        <div class="service__hero-inner-2">
          <div class="service__hero-left-2">
            <div class="clipping-mask image-1">
              <img class="content-image" src="{{ asset('assets/about/'.$b->image1 ) }}" alt="{{ $b->alt1 }}">
            </div>
            <div class="clipping-mask image-2">
              <img class="content-image" src="{{ asset('assets/about/'.$b->image2 ) }}" alt="{{ $b->alt2 }}">
            </div>
            <div class="clipping-mask image-3">
              <img class="content-image" src="{{ asset('assets/about/'.$b->image3 ) }}" alt="{{ $b->al3 }}">
            </div>
            <div class="clipping-mask image-4">
              <img class="content-image" src="{{ asset('assets/about/'.$b->image4 ) }}" alt="{{ $b->alt4 }}">
            </div>
          </div>
          <div class="service__hero-right-2 hero7__thum-anim">
            <h1 class="title creative">{{ $b->title1_page  }} <span class="solution">{{ $b->title2_page  }}</span> </h1>
            <p class="animate_content"> {!!  strip_tags($b->content_page) !!}</p>
            <a class="video-btn"><img src="/img/icons/arrow-down-sm.png" alt="scroll Image" class="scroll"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img src="{{ asset('assets/about/'.$b->shape) }}" alt="{{ $b->alt_shape }}" class="shape-1">
</section>
<!-- Video area Start -->
<div class="video__area about__img-2" id="video-section">
  <video loop muted autoplay playsinline data-speed="0.2" width="100%">
    <source src="{{ asset('assets/about/'.$b->video) }}" type="video/mp4">
  </video>
</div>

<!-- About Description area start -->
<section class="about__area-7">
  <div class="container pt-130 pb-110">
    <div class="row">
      <div class="col-xxl-12">
        <div class="sec-title-wrapper">
          <h2 class="sec-title title-anim" style=" padding: 0 284px;">{{ $b->title_description }}
          </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
        <div class="about__left-7">
          <img src="{{ asset('assets/about/'.$b->image1_description) }}" alt="{{ $b->alt1_desc }}" data-speed="auto">
        </div>
      </div>
      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
        <div class="about__mid-7 text-anim">
          <p>{!!  strip_tags($b->text_description) !!}</p>
          <img src="{{ asset('assets/about/'.$b->image3_description) }}" alt="{{ $b->alt2_desc }}" class="image-1" width="140">
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
        <div class="about__right-7">
          <img src="{{ asset('assets/about/'.$b->image2_description) }}" alt="{{ $b->alt3_desc }}" data-speed="0.7" width="220">
        </div>
      </div>
    </div>
  </div>
  <img src="/img/shape/shape-4.png" alt="Shape" class="shape-1">
</section>

<!-- Our Activities area start -->
@if($b->color)
<section class="portfolio__area-6" style="background-color: {{ $b->color }}">
  @else
<section class="portfolio__area-6" style="background-color: #E1F5FA">
@endif
  <div class="container line pt-100 pb-140">
    <span class="line-3"></span>
    <div class="zi-9">
      <div class="row">
        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-6">
          <div class="sec-title-wrapper portfolio__title-wrap-6">
            <div class="">
              <h2 class="sec-sub-title animation__char_come">{{ $b->small_title_portfolio }}</h2>
              <h3 class="sec-title animation__char_come_long">{{ $b->title_portfolio }}</h3>
               <p> {!! strip_tags($b->text_portfolio) !!}</p>
            </div>
          </div>
        </div>
        <div class="col-xxl-7 col-xl-6 col-lg-5 col-md-6">
          <div class="portfolio__wrapper-6">
            <div class="portfolio__list-6">
              <div class="portfolio__item-6" data-portfitem="1">
                  <img src="{{ asset('assets/about/'.$b->image1_portfolio) }}" alt="{{ $b->alt1_portfolio }}" data-speed="0.4">
                  <div class="portfolio__content-6">
                    <h4 class="portfolio__title-6">{{ $b->portfolio_title1 }}</h4>
                    <h5 class="portfolio__date">{{ $b->portfolio_date1 }}</h5>
                  </div>
              </div>
              <div class="portfolio__item-6" data-portfitem="2">
                  <img src="{{ asset('assets/about/'.$b->image2_portfolio) }}" alt="{{ $b->alt2_portfolio }}" data-speed="0.4">
                  <div class="portfolio__content-6">
                    <h4 class="portfolio__title-6">{{ $b->portfolio_title2 }}</h4>
                    <h5 class="portfolio__date">{{ $b->portfolio_date2}}</h5>
                  </div>
              </div>
              <div class="portfolio__item-6" data-portfitem="3">
                  <img src="{{ asset('assets/about/'.$b->image3_portfolio) }}" alt="{{ $b->alt3_portfolio }}" data-speed="0.4">
                  <div class="portfolio__content-6">
                    <h4 class="portfolio__title-6">{{ $b->portfolio_title3 }}</h4>
                    <h5 class="portfolio__date">{{ $b->portfolio_date3 }}</h5>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
<!-- Contact area start -->
@foreach ($contact as $c)
<section class="contact__area-6" id="contact">
  <div class="container g-0 line pt-120">
    <span class="line-3"></span>
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 animation__char_come">{{ $c->title_page}}</h2>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
        <div class="contact__text">
          <p>{!! strip_tags($c->title_contact) !!}</p>
        </div>
      </div>
    </div>
    <div class="row contact__btm">
      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
        <div class="contact__info">
        
          <h3 class="sub-title-anim-top animation__word_come">{{ $c->small_text }}</h3>
       
          <ul>
            <li><a href="tel:{{ $c->url_phone }}">{{ $c->phone }}</a></li>
            <li><a href="mailto:{{ $c->email }}">{{ $c->email }}</a></li>
            <li><span>{{ $c->location }}</span></li>
          </ul>
        </div>
      </div>
      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
        <div class="contact__form">
          <form method="POST" id="contact-form" action="{{ route('contact_path') }}" accept-charset="utf-8">
            @csrf
            <div class="row g-3">
              <div class="col-xxl-12 col-xl-12 col-12">
                <select type="text" name="inquiry" required>
                  <option value="" disabled selected>Quels services i vous intéresse* </option>
                  @foreach($options as $option)
                  <option value="{{ $option->option }}">{{ $option->option }}</option>
                 @endforeach
                </select>
              </div>
              <div class="col-xxl-6 col-xl-6 col-12">
                <input type="text" name="name" placeholder="Nom/Prénom *" required>
              </div>
              <div class="col-xxl-6 col-xl-6 col-12">
                <input type="tel" name="phone" placeholder="Phone" required>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-xxl-6 col-xl-6 col-12">
                <input type="text" name="profession" placeholder="Proféssion *" required>
              </div>
              <div class="col-xxl-6 col-xl-6 col-12">
                <input type="email" name="email" placeholder="Email *" required>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-12">
                <textarea name="message" placeholder="Votre message *" required></textarea>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-12">
                <div class="btn_wrapper">
                  <button class="wc-btn-primary btn-hover btn-item" type="submit"><span></span> Send <br>Messages <i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
<!-- Contact area end -->

@endsection