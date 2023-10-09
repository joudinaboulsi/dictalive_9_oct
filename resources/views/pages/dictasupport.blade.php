@extends('layouts.master')

@section('content')
@foreach ($dictasupport as $d)
    


<!-- Workflow area start -->
<section class="workflow__area-3">
    <div class="workflow__wrapper-4">
        
        <!-- Full Page Visual area start -->
        <div class="choose-wrapper wf_panel">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="choose-title-wrapper">
                            <h2 class="choose-title title-anim">{{ $d->title_page }} <br>{{ $d->subtitle_page }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bg Animation area start -->
       
        <div class="fullanimation__area wf_panel pt-150" style="background-image:url({{ asset('assets/service/'.$d->image) }})"></div>
      
        <!-- Full Page Visual area start -->
        <div class="research__area wf_panel pt-150" style="background-color: {{ $d->color2 }}">
            <div class="container inner_content">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-sub-title"  style="width:100px">{{ $d->title_section1 }}</h2>
                            <h3 class="sec-title check-list">{{ $d->subtitle_section1 }}</h3>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="row">
                            <div class="col-12 mt-5">
                                <p class="text-white fs-5">
                                {!!  strip_tags($d->text_section1) !!}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bg Animation area start -->
      
        <div class="fullanimation__area wf_panel pt-150" style="background-image:url('/img/centre-de-frappe.jpg')"></div>

        <!-- Full Page Visual area start -->
        <div class="cta__area-3 wf_panel" style="background-color: {{ $d->color }}">>
            <div class="container pt-150">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content-3">
                            <p class="cta__sub-title-2">{{ $d->title_section2 }}</p>
                            <h2 class="cta__title-2">{!!  strip_tags($d->text_section2) !!}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA area start -->
        <div class="cta__area-3 wf_panel" style="background-color: {{ $d->color3 }}">>
            <div class="container pt-150">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content-3">
                            <p class="cta__sub-title-2 text-white fs-5">{{ $d->text_section3 }}</p>
                            <h2 class="cta__title-2">{{  $d->title_section3  }}</h2>
                            @if($d->link)
                            <div class="btn_wrapper">
                                <a href="{{ $d->url }}" target="_blank" class="wc-btn-black btn-hover btn-item"> {{ $d->link }} <br>
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Workflow area end -->
@endforeach

@endsection