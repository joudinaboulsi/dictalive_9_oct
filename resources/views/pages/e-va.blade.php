@extends('layouts.master')

@section('content')

@foreach($services2 as $service)


<video loop="" muted="" autoplay="" playsinline="" class="sub__header__video">
  <source src="{{ asset('assets/service/'.$service->video) }}" type="video/mp4">
</video>
<section class="service__area-1">
  <div class="service-title-wrapper container">
    <h2 class="service-title-3 bg-shape">{{ $service->title_page }} </h2>
  </div>
</section>
<!-- About area start -->
<section class="about__area-2">
  <div class="container pb-110">
    <div class="row">
      <div class="col-xxl-12">
        <div class="sec-title-wrapper">
          <h2 class="sec-title title-anim">{{ $service->title_section1 }}</h2>
        </div>
        <div class="sec-text-wrapper">
          <div class="sec-text text-anim">
            <p>{!!  strip_tags($service->text_section1) !!}
            </p>
          </div>
          @if($service->url_youtube)
          <div class="sec-btn btn_wrapper">
            <a class="wc-btn-pink btn-hover btn-item video-play-btn" href="#" data-bs-toggle="modal" data-bs-target="#videoevaModal">
              <i class="fa fa-play"></i>
            </a>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="about__img-2 pb-130">
    <img src="{{ asset('assets/service/'.$service->image) }}" alt="{{ $service->alt_image }}" data-speed="0.2">
  </div>
</section>
<!-- About area end -->


<!-- About area end -->
<section class="about__area-2">
  <div class="col-xxl-12">
      <div class="hero__about-video">
          <video loop muted autoplay playsinline>
              <source src="{{ asset('assets/service/'.$service->video) }}" type="video/mp4">
          </video>
      </div>
  </div>
</section>


   <!-- CTA area start -->
   <section class="cta__area cta__area-7 pt-130">
    <div class="container pb-110">
      <div class="row">
        <div class="col-xxl-12">
          <div class="cta__content">
            {{-- <p class="cta__sub-title">Work with us</p> --}}
            <h2 class="cta__title title-anim">{{ $service->title_contact }}</h2>
            <div class="btn_wrapper">
              <a href="{{ $service->href }}" class="wc-btn-primary btn-hover btn-item"><span></span>{{ $service->text_href }} <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endforeach

@endsection