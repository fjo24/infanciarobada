@extends('pages.templates.body')
@section('title', 'La Red')
@section('css')
<link href="{{ asset('css/pages/slider.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/empresa.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet">
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
    <div class="container" style="width: 90%">
        <div class="row toptab">
            <div class="col s12 m7 l7">
                <div class="nombre_empresa">
                    {!! $lared->nombre !!}
                </div>
                <hr class="linea_titulo">
                    <div class="descripcion_empresa">
                        <i>
                            {!! $lared->descripcion !!}
                        </i>
                    </div>
                </hr>
                <div class="contenido_empresa">
                            {!! $lared->contenido !!}
                    </div>
            </div>
            <div class="col s12 m5 l5" style="">
                <div class="responsive-img imagen_lared">
                    <img src="{{asset($lared->imagen)}}"/>
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

