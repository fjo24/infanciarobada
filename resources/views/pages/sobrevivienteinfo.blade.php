@extends('pages.templates.body')
@section('title', 'Sobreviviente')
@section('css')
<link href="{{ asset('css/pages/slider.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/empresa.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet">
@endsection
@section('contenido')
<div class="seccion-banner" style="background: url(/{!! $banner->imagen !!});">
    <div class="btexto">
        <div class="tbanner">
            <i>
                {!! $banner->texto1 !!}
            </i>
        </div>
    </div>
</div>
<div class="container" style="width: 90%">
    <div class="row toptab">
        <div class="col s12 m7 l7"> 
            <span class="descripcion_empresa">
                {!! $sobreviviente->descripcion !!}
            </span>
            <br>
                <span class="nombre_empresa">
                    {!! $sobreviviente->nombre !!}
                </span>
                <br>
                    <span class="contenido_empresa">
                        {!! $sobreviviente->contenido !!}
                    </span>
                </br>
            </br>
        </div>
        <div class="col s12 m5 l5">
            <div class="center responsive-img imagen_lared">
                <img src="{{asset($sobreviviente->imagen)}}"/>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('.slider').slider({
        indicators: true,
        height: 588,
    });
</script>
@endsection
