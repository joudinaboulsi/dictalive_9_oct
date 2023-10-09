<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEO::generate() !!}

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/progressbar.css">
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <link rel="stylesheet" href="/css/master.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
    <!-- Include GSAP library (needed for animations) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
</head>

<body>
     <!-- Video youtube modal for centre de frappe' -->
     @if(app('frappe')->url_youtube)
    <div class="modal fade" id="videofrappeModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered video-modal">
            <div class="modal-content">
                    <iframe width="100%" height="400" src="{{app('frappe')->url_youtube }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
     @endif
      <!-- Video youtube modal for centre d'appel' -->
      @if(app('appels')->url_youtube)
    <div class="modal fade" id="videoappelModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered video-modal">
            <div class="modal-content">
                    <iframe width="100%" height="400"  src="{{app('appels')->url_youtube }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    @endif
    
      <!-- Video youtube modal for e-va -->
      @if(app('eva')->url_youtube)
    <div class="modal fade" id="videoevaModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered video-modal">
            <div class="modal-content">
                    <iframe width="100%" height="400"  src="{{app('eva')->url_youtube }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    @endif
  

    @if (Session::has('msg'))
    <div class="popup modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close close-btn-contact" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row p-4">
                        <p class="text-3 mb-0">{{ session('msg') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="cursor1"></div>
    <div class="list-cursor">
        <div class="cursor2"></div>
        <div class="cursor2 dot1"></div>
        <div class="cursor2 dot2"></div>
    </div>
    <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>
    @include('layouts.header')
    <div id="smooth-wrapper">
        <div id="smooth-content">

            @yield('content')
            <div class="blank-section"></div>
        </div>
    </div>


    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/js/counter.js') }}"></script>
    <script src="{{ asset('/js/gsap.min.js') }}"></script>

    <script src="{{ asset('/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('/js/chroma.min.js') }}"></script>
    <script src="{{ asset('/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('/js/vanilla-tilt.js') }}"></script>
    <script src="{{ asset('/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script>
        $("#contact-form").validate();
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>
 
</body>

</html>