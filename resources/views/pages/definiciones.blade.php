@extends('pages.templates.body')

@section('titulo', 'Biblioteca')

@section('contenido')
<link href="{{ asset('css/pages/novedades.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet" type="text/css"/>
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
    <div class="row" style="margin-top: 8%;">
@foreach($novedades as $novedad)
<div class="row novedad">
    <div class="col l12 m12 s12">
        <div class="bloque_novedad" style="">
            <img class="imgnovedad responsive-img" src="{{ asset($novedad->imagen) }}" hspace="5" vspace="5" style="float: left;width: 250px;height: 250px;"/>
            <div class="titulonovedad">
                {!! $novedad->nombre !!}
            </div>
            <div class="descripcionnovedad">
                {!! $novedad->descripcion !!}
            </div>
            <div class="flecha">
    <a href="{{ route('pdfdefiniciones', ['post' => $novedad->id])}}">
                    <img class="responsive-img" src="{{ asset("/img/descarga.png") }}"/>
                    <span class="ver">
                    DESCARGAR
                    </span>
                </a>
            </div>
        </div>
    </div>    
</div>
    <br>
@endforeach
            </div>
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
