@extends('pages.templates.body')
@section('title', 'Home')
@section('css')
<link href="{{ asset('css/pages/slider.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/destacados.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/home.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/lineashome.css') }}" rel="stylesheet"/>
@endsection
@section('contenido')
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
<div class="lineasdecontenido">
    <div class="container" style="width: 84%;">
        <div class="home col s12">
            <div class="row titulo center">
                {!! $home->nombre !!}
            </div>
            <div class="row descripcion center">
                {!! $home->descripcion !!}
            </div>
            <div class="row contenido center">
                {!! $home->contenido !!}
            </div>
            <div class="boton_home center" style="margin-bottom: 2%;">
                <button class="btn waves-effect waves-light z-depth-0" name="action" style="background:#6C6C6C" type="submit">
                    NUESTRA HISTORIA
                </button>
            </div>
        </div>
    </div>
</div>
<div class="seccion-banner hide-on-med-and-down" style="">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="col l6 m6 s6">
                <div class="doc_izq">
                    <span class="titulo_doc">
                        Documentos de interes
                    </span>
                    <br>
                        <span class="contenido_doc">
                            Ingresa a nuestra Biblioteca de contenidos para
aprender e informarte sobre el tema
                        </span>
                        <br>
                            <button class="btn waves-effect waves-light z-depth-0" name="action" style="background-color: #6C6C6C;height: 38px;    width: 100px;    margin-top: 3%;color: white;font-weight: 500;    font-family: 'Asap', sans-serif;border-radius: 3px;" type="submit">
                                Ingresar
                            </button>
                        </br>
                    </br>
                </div>
            </div>
            <div class="col l6 m6 s6" style="margin-top: 6%;">
                <ul>
                    <li>
                        <img src="{{asset('img/documentos.png')}}"/>
                        <a href="">
                            <span class="documentos">
                                DOCUMENTOS PDF
                            </span>
                        </a>
                    </li>
                    <li>
                        <img src="{{asset('img/pdf.png')}}"/>
                        <a href="">
                            <span class="documentos">
                                DEFINICIONES
                            </span>
                        </a>
                    </li>
                    <img src="{{asset('img/videos.png')}}"/>
                    <a href="">
                        <span class="documentos">
                            VIDEOS
                        </span>
                    </a>
                    <li>
                        <img src="{{asset('img/testimonios.png')}}"/>
                        <a href="">
                            <span class="documentos">
                                TESTIMONIOS
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="noticias">
    <div class="container">
        <div class="row">
            <div class="col l12 s12 m12">
                <div class="center titulo_noticias col l12 m12 s12">
                    Últimas Noticias
                </div>
                @foreach($noticias as $noticia)
                <div class="col l4 m4 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset($noticia->imagen) }}" style="padding: 5%;height: 180px;"/>
                        </div>
                        <div class="card-title" style="color: #D8222A;margin-left: 5%;font-size: 18px;height: 56px;">
                            {{ $noticia->nombre }}
                        </div>
                        <div class="card-content" style="padding-bottom: 2%;padding-top: 2%;">    
                            <p class="fecha_noti">
                                {{ $noticia->fecha }}<br>
                            </p>
                        </div>
                        <div class="card-content" style="padding-top: 2%;height: 164px;">
                            <div class="contenido_noti">
                                @php
                                 $descripcion = str_limit($noticia->descripcion, 150, '...');
                                 @endphp
                                {!! $descripcion !!}
                            </div>
                            <a class="right" style="color: #AA0000;" href="{{ route('noticiainfo', $noticia->id)}}">
                                Ver mas...
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
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
