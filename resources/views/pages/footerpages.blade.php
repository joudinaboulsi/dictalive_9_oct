@extends('layouts.master')

@section('content')
<!-- Footer Pages area start -->
<!-- politique de confidentalite area start -->
@foreach ($politique as $p)
  

<section class="politique__area-6" id="politiquedeconfidentalite">
  <div class="container g-0 line pt-130">
    <div class="line-3"></div>

    <div class="row">
      <div class="col-xxl-12">
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 animation__char_come">{{$p->title_page }}</h2>
          <p class="">{{ $p->subtitle_page }}</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xxl-12">
        <div class="politique__text">
          {!! $p->content !!}
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
<!-- FAQ area end -->
@foreach ($cookies as $c)
<section class="politique__area-6 scroll-margin" id="politiquedescookies">
  <div class="container g-0 line pt-140">
    <div class="line-3"></div>

    <div class="row">
      <div class="col-xxl-12">
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 animation__char_come">{{ $c->title_page }}</h2>
          <p class="">{{ $c->subtitle_page }}</p>
          <div class="politique__text">
            {!! $c->content !!}
            {{-- <ul>
              <li class="fw-bold">Nécessaires</li>
            </ul>
            <p>Ces cookies sont essentiels pour que vous puissiez naviguer sur le site web et utiliser ses fonctionnalités, comme l'accès à des zones sécurisées du site.</p>
            <ul>
              <li class="fw-bold">Statistiques</li>
            </ul>
            <p>Ces cookies nous permettent d’analyser les statistiques relatives à votre interaction avec notre site internet et ce, de manière anonyme.</p>
            <ul>
              <li class="fw-bold">Marketing</li>
            </ul>
            <p>Ces cookies sont utilisés afin d’effectuer un suivi des visiteurs et de leur proposer des publicités pertinentes et adaptées. Ils nécessitent votre consentement préalable.</p>
          </div>

          <table class="politique-table">
            <thead>
              <tr>
                <th>Nom du cookie</th>
                <th>Type de cookie</th>
                <th>Finalité</th>
                <th>Fournisseur</th>
                <th>Expiration</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CONSENT</td>
                <td>Nécessaires</td>
                <td>Détecter si le visiteur a accepté la catégorie marketing dans la bannière de cookie. Ce cookie est nécessaire pour la conformité du site Web avec le RGPD.
                </td>
                <td>Youtube.com</td>
                <td>2 ans</td>
              </tr>
              <tr>
                <td>CONSENT</td>
                <td>Nécessaires</td>
                <td>Détecter si le visiteur a accepté la catégorie marketing dans la bannière de cookie. Ce cookie est nécessaire pour la conformité du site Web avec le RGPD.
                </td>
                <td>Youtube.com</td>
                <td>2 ans</td>
              </tr>
              <tr>
                <td>CONSENT</td>
                <td>Nécessaires</td>
                <td>Détecter si le visiteur a accepté la catégorie marketing dans la bannière de cookie. Ce cookie est nécessaire pour la conformité du site Web avec le RGPD.
                </td>
                <td>Youtube.com</td>
                <td>2 ans</td>
              </tr>
            </tbody>
          </table> --}}
        </div>
      </div>

      <div class="row">
        <div class="col-xxl-12">

        </div>
      </div>
    </div>
</section>
@endforeach

<!-- FAQ area start -->
<section class="faq__area-6" id="faq">
  <div class="container g-0 line pb-100 pt-140">
    <div class="line-3"></div>

    <div class="row">
      <div class="col-xxl-12">
        @foreach ($title_faq as $f)
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 animation__char_come">{{ $f->title }}</h2>
          <p class="" style="width:450px">{{ $f->subtitle }}</p>
        </div>
        @endforeach
      </div>
    </div>

    <div class="row">
      <div class="col-xxl-12">
        <div class="faq__list-6">
          <div class="accordion" id="accordionExample">
            @foreach ($faqs as $faq)
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading{{ $faq->id }}">
                <button class="accordion-button {{ $faq->id !== 1 ? ' collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq }}">
           {{ $faq->title }}
                </button>
              </h2>
              <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse{{ $faq->id == 1 ? ' show' : '' }}" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 {!! $faq->description !!}
                </div>
              </div>
            </div>
            @endforeach
     

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ area end -->
@foreach ($mentions as $m)
<section class="politique__area-6" id="mentionslegales">
  <div class="container g-0 line pt-130">
    <div class="line-3"></div>

    <div class="row">
      <div class="col-xxl-12">
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 animation__char_come">{{$m->title_page }}</h2>
          <p class="">{{ $m->subtitle_page }}</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xxl-12">
        <div class="politique__text">
          {!! $m->content !!}
        </div>
      </div>
    </div>
  </div>
</section>

@endforeach


@endsection