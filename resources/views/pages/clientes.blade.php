@extends('pages.templates.body')
@section('title', 'Excelsior - Consejos de Seguridad')
@section('css')
<link href="{{ asset('css/pages/clientes.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet"/>
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
<div class="container" style="width: 85%;">
    <div class="row bloquecont center">
        <span class="titulo-cat">
            Organizmos Asociados
        </span>
        <hr class="cat-line"/>
        <div class="items-cat col l12 s12 m12">
            <p class="texto-ini">
                Estos son los organismos e instituciones que están asociados a la Red brindándonos su apoyo:
            </p>
        </div>
        <div class="servicios col l12 s12 m12" style="align-items: center">
            <div class="items-servicio row" style="align-items: center;">
                <div class="bloquecard col l12 s12 m12">
                    @foreach($clientes as $cliente)
                    <div class="col l4 s12 m6">
                        <div class="card white darken-1" style="">
                            <div class="card-content white-text">
                                <a href="{{$cliente->link}}">
                                <img alt="" src="{{asset($cliente->imagen)}}" style="">
                                </img>
                            </a>
                            </div>
                            <div class="card-action">
                                <a href="{{$cliente->link}}">
                                    {{$cliente->nombre}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
