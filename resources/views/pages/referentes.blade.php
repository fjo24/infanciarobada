@extends('pages.templates.body')

@section('titulo', 'Biblioteca')

@section('contenido')
<link href="{{ asset('css/pages/novedades.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/pages/home.css') }}" rel="stylesheet" type="text/css"/>
<div class="carousel carousel-slider center" data-indicators="true">
    @foreach($sliders as $slider)
    <div class="carousel-item" href="">
        <img alt="slider" src="{{ asset($slider->imagen) }}">
            @if(isset($slider->texto)||isset($slider->texto2))
            <div class="caption box-cap center" style="">
                <div style="">
                    <div class="slidertext2">
                        {!! $slider->texto !!}
                    </div>
                    <div class="slidertext1">
                        {!! $slider->texto2 !!}
                    </div>
                </div>
            </div>
            @endif
        </img>
    </div>
    @endforeach
</div>
            <div class="container" style="width: 80%">
<div class="referentes">
    <div class="container">
        <div class="row">
            <div class="col l12 s12 m12">
                <div class="center titulo_noticias col l12 m12 s12">
                    Referentes
                </div>
                @foreach($referentes as $referente)
                @if($referente->cargo->nombre!='Mesa ampliada')
                <div class="col l3 m3 s12">
                    <div class="card">
                        <div class="card-image">
                            @if($referente->imagen==null)
                            <img alt="" src="{{ asset('img/default-user.png') }}" style="padding: 5%;"/>
                            @else
                            <img alt="" src="{{ asset($referente->imagen) }}" style="padding: 5%;"/>
                            @endif
                        </div>
                        <div class="card-title center" style="color: #D8222A;font-size: 19px;">
                            {{ $referente->nombre }}
                        </div>
                        <div class="card-content center" style="padding-top: 2%;">
                            <p class="contenido_noti">
                                {{ $referente->cargo->nombre }}
                            </p>
                            @if($referente->cv!=null)
                                <a href="{{ route('referentecv', ['post' => $referente->id])}}">
                    <span class="ver center" style="left: 0;">
                    Descargar CV
                    </span>
                </a>
                            @else
                <a href="">
                    <span class="ver center" style="left: 0;">
                                -
                    </span>
                </a>

                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="col l12 s12 m12" style="margin-bottom: 4%;">
                <div class="center titulo_noticias col l12 m12 s12">
                    Mesa ampliada
                </div>
                @foreach($referentes as $referente)
                @if($referente->cargo->nombre=='Mesa ampliada')
                <div class="col l3 m3 s12">
                    <div class="card">
                        <div class="card-image">
                            @if($referente->imagen==null)
                            <img alt="" src="{{ asset('img/default-user.png') }}" style="padding: 5%;"/>
                            @else
                            <img alt="" src="{{ asset($referente->imagen) }}" style="padding: 5%;"/>
                            @endif
                        </div>
                        <div class="card-title center" style="color: #D8222A;font-size: 19px;">
                            {{ $referente->nombre }}
                        </div>
                        <div class="card-content center" style="padding-top: 2%;">
                            <p class="contenido_noti">
                                {{ $referente->cargo->nombre }}
                            </p>
                            @if($referente->cv!=null)
                                <a href="{{ route('referentecv', ['post' => $referente->id])}}">
                    <span class="ver center" style="left: 0;">
                    Descargar CV
                    </span>
                </a>
                            @else
                <a href="">
                    <span class="ver center" style="left: 0;">
                                -
                    </span>
                </a>

                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<br><br>
            </div>
<script src="{{ asset('js/jquery.tinycarousel.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('js/slick.min.js') }}" type="text/javascript">
</script>
<script type="text/javascript">
</script>
@endsection
@section('js')
<script type="text/javascript">
    $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            height: 561,
            indicators: true
        });

        // move next carousel
        $('.moveNextCarousel').click(function(){
            $('.carousel').carousel('next');
        });

        // move prev carousel
        $('.movePrevCarousel').click(function(){
            $('.carousel').carousel('prev');
        });
    $('.slider').slider({
        indicators: true,
        height: 560,
    });
</script>
@endsection

