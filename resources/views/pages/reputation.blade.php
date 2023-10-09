@extends('layouts.master')

@section('content')

@foreach ($reputations as $reputation)
  

<!-- Workflow area start -->
<section class="workflow__area-3">
  <div class="workflow__wrapper-3">
    <!-- Full Page Visual area start -->
    <div class="choose-wrapper wf_panel">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="choose-title-wrapper">
              <h2 class="choose-title title-anim">{{ $reputation->title_page }} <br> {{ $reputation->subtitle_page }}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Description area start -->
    <div class="research__area wf_panel pt-150" style="background-color: {{ $reputation->color }}">
      <div class="container inner_content">
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="sec-title-wrapper">
              <h2 class="sec-sub-title" style="width:100px">{{ $reputation->title_section1 }}</h2>
              <h3 class="sec-title check-list">{{ $reputation->subtitle_section1 }}</h3>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="row">
              <div class="col-12">
                <img src="{{ asset('assets/service/'.$reputation->image_section1) }}" width="100%" alt="{{ $reputation->alt_image_s1 }}">
              </div>
              <div class="col-12 mt-5">
                <p class="text-white fs-5">
                 {!! strip_tags($reputation->text_section1) !!}
                <p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Description area start -->
    <div class="research__area wf_panel pt-150" style="background-color: {{ $reputation->color2 }}">
      <div class="container inner_content">
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="sec-title-wrapper">
              <h2 class="sec-sub-title"style="width:100px">{{ $reputation->title_section2 }}</h2>
              <h3 class="sec-title">{{ $reputation->subtitle_section2 }}</h3>
              <ul class="check-list">
                <li><img src="{{ asset('assets/service/'.$reputation->icon1_section2) }}">{{ $reputation->li1_section2 }}</li>
                <li><img src="{{ asset('assets/service/'.$reputation->icon2_section2) }}">{{ $reputation->li2_section2 }}</li>
                <li><img src="{{ asset('assets/service/'.$reputation->icon3_section2) }}">{{ $reputation->li3_section2 }}</li>
                <li><img src="{{ asset('assets/service/'.$reputation->icon4_section2) }}">{{ $reputation->li4_section2 }}</li>
                <li><img src="{{ asset('assets/service/'.$reputation->icon5_section2) }}">{{ $reputation->li5_section2 }}</li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 ">
            <div class="research__list">
              <div class="research__item">
                <div class="research__info">
                  <h4 class="research__title">{{ $reputation->title1_section2 }}</h4>
                  <p>{{ $reputation->subtitle1_section2 }}</p>
                </div>
                @if($reputation->percent1_section2)
                <div class="research__number">
                  <span>{{ $reputation->percent1_section2 }}</span>

                </div>
              
                @endif
                
              </div>

              <div class="research__item">

                <div class="research__info">
                  <h4 class="research__title">{{ $reputation->title2_section2 }}</h4>
                  <p>{{ $reputation->subtitle2_section2 }}</p>
                </div>
                @if($reputation->percent2_section2)
                <div class="research__number">
                  <span>{{ $reputation->percent2_section2 }}</span>
                </div>
              
                @endif
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Description area start -->
    <div class="animation__area-3 wf_panel">
      <div class="container inner_content">
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="animation-bg" style="background-image: url('{{ asset('assets/service/'.$reputation->image_section3) }}')"></div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <h2 class="animation__title-2">{{ $reputation->title_section3 }}</h2>
            <p class="animation__text-2">
              {!!  strip_tags($reputation->text_section3) !!}
          </p>
            <div class="d-flex justify-content-center align-items-center flex-column gap-5 my-5">
              <img src="{{ asset('assets/service/'.$reputation->image1_section3) }}" width="400" alt="{{ $reputation->alt_image_s3 }}">

              <ul class="check-list">
                <li>{{ $reputation->li1_section3 }}</li>
                <li>{{ $reputation->li2_section3 }}</li>
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Description area start -->
    <div class="animation__area-3 wf_panel ">
      <div class="container inner_content">
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="animation-bg" style="background-image: url('{{ asset('assets/service/'.$reputation->image_section4) }}')"></div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 ">
            <h2 class="animation__title-2 ">{{ $reputation->title_section4 }}</h2>
            <p class="animation__text-2">
              {!! strip_tags($reputation->text_section4) !!}</p>
            <div class="d-flex justify-content-center align-items-center flex-column gap-5 my-5">
              <img src="{{ asset('assets/service/'.$reputation->image1_section4) }}" width="400" alt="{{ $reputation->alt_image_s4 }}">

              <ul class="check-list">
                <li>{{ $reputation->li1_section4 }}</li>
                <li>{{ $reputation->li2_section4 }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Description area start -->
    <div class="animation__area-3 wf_panel">
      <div class="container inner_content">
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="animation-bg" style="background-image: url('{{ asset('assets/service/'.$reputation->image_section5) }}')"></div>

          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <h2 class="animation__title-2">{{ $reputation->title_section5 }}</h2>
            <p class="animation__text-2">{!!  strip_tags($reputation->text_section5) !!}</p>
            <div class="d-flex justify-content-center align-items-center flex-column gap-5 my-5">
              <img src="{{ asset('assets/service/'.$reputation->image1_section5) }}" width="400" alt="{{ $reputation->alt_image_s5}}">

              <ul class="check-list">
                <li>{{ $reputation->li1_section5 }}</li>
                <li>{{ $reputation->li2_section5 }}</li>
              </ul>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Description area start -->
    <div class="animation__area-3 wf_panel">
      <div class="container inner_content">
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="animation-bg" style="background-image: url('{{ asset('assets/service/'.$reputation->image_section6) }}')"></div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 ">
            <h2 class="animation__title-2">{{ $reputation->title_section6 }}</h2>
            <p class="animation__text-2 ">{!!  strip_tags($reputation->text_section6) !!}</p>
            <div class="d-flex justify-content-center align-items-center flex-column gap-5 my-5">
              <img src="{{ asset('assets/service/'.$reputation->image1_section6) }}" width="400" alt="{{ $reputation->alt_image_s6 }}">

              <ul class="check-list">
                <li>{{ $reputation->li1_section6 }}</li>
                <li>{{ $reputation->li2_section6 }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Description area start -->
    <div class="animation__area-3 wf_panel">
      <div class="container inner_content">
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="animation-bg" style="background-image: url('{{ asset('assets/service/'.$reputation->image_section7) }}')"></div>

          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <h2 class="animation__title-2">{{ $reputation->title_section7 }}</h2>
            <p class="animation__text-2">{!!  strip_tags($reputation->text_section7) !!}</p>
            <div class="d-flex justify-content-center align-items-center flex-column gap-5 my-5">
              <img src="{{ asset('assets/service/'.$reputation->image1_section7) }}" width="400" alt="{{ $reputation->alt_image_s7 }}">

              <ul class="check-list">
                <li>{{ $reputation->li1_section7 }}</li>
                <li>{{ $reputation->li2_section7 }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Full Page Visual area start -->
 
    <div class="cta__area-3 wf_panel" style="background-color: {{ $reputation->color3 }}">
      <div class="container pt-150">
        <div class="row">
          <div class="col-xxl-12">
            <div class="cta__content-3">
              <p class="cta__sub-title-2">{{ $reputation->title_section8 }}</p>
              <h2 class="cta__title-2">{!! strip_tags($reputation->text_section8) !!}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA area start -->
    <div class="cta__area-3 bg-gray wf_panel">
      <div class="container pt-150">
        <div class="row">
          <div class="col-xxl-12">
            <div class="cta__content-3">
              <p class="cta__sub-title-2 text-white fs-5">{{ $reputation->title_section9 }}</p>
              <h2 class="cta__title-2">{{ $reputation->text_section9 }}</h2>
              @if($reputation->link_section9)
              <div class="btn_wrapper">
                <a href="{{ $reputation->url_section9 }}" target="_blank" class="wc-btn-black btn-hover btn-item">{{ $reputation->link_section9 }} <br>
                  <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CTA area end -->
  </div>
</section>
<!-- Workflow area end -->
@endforeach

@endsection