{{-- BARRA PRINCIPAL --}}
<nav class="principal">
    <div class="container" style="width: 90%;">
        <div class="row">
            <div class="col l12 m12 s12 center" style="height: 45px;">
                <div class="col l3 m3 s12">
                    <a class="" style="">
                            <a href="{{ url('/') }}">
                        <div class="logo_header">
                                <img alt="" class="img_logo" src="{{asset('img/logo_principal.png')}}"/>
                        </div>
                            </a>
                    </a>
                </div>
                <div class="col l9 m9 s12">
                    <div class="col l12 m12 s12">
                        <div class="right menu_header">
                            <ul class="item-left center hide-on-med-and-down">
                                <li class="items_head">
                                    <img alt="" class="img_logo" src="{{asset('img/layouts/email.png')}}">
                                </img>
                                </li>
                                <li class="items_head">
                                    <a href="mailto:{{$email->descripcion}}">
                                        {{$email->descripcion}}
                                    </a>
                                </li>
                                <li class="items_head">
                                    <img alt="" class="img_logo" src="{{asset('img/layouts/telefono.png')}}"/>
                                </li>
                                <li class="items_head">
                                    <a href="">
                                       {{$telefono->descripcion}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l12 m12 s12">
                    <div class="menu_header">
                        <ul class="item-left center hide-on-med-and-down">
                            @if($activo=='empresa')
                            <li class="items_header">
                                <a class="activo" href="{{ url('/empresa') }}">
                                    La red
                                </a>
                            </li>
                            @else
                            <li class="items_header" id="menu_productos">
                            <a class="prod_menu" href="">
                                La red
                            </a>
                            <ul style="margin-top: -16%!important;">
                                <li class="menu_cate">
                                    <a href="{{ url('/lared') }}" style="padding-top: 5%;">
                                        Que es la Red?
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="" style="padding-top: 5%;">
                                        Referentes
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/mision') }}" style="padding-top: 5%;">
                                        Misión
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/clientes') }}" style="padding-top: 5%;">
                                        Organizmos Asociados
                                    </a>
                                </li>
                            </ul>
                        </li>
                            @endif
                                @if($activo=='foros')
                            <li class="items_header">
                                <a class="activo" href="{{ url('/foros') }}" style="">
                                    Foros
                                </a>
                            </li>
                            @else
                            <li class="items_header">
                                <a href="{{ url('/foros') }}" style="">
                                    Foros
                                </a>
                            </li>
                            @endif
                            @if($activo=='noticias')
                            <li class="items_header">
                                <a class="activo" href="{{ url('/noticias') }}">
                                    Noticias
                                </a>
                            </li>
                            @else
                            <li class="items_header">
                                <a href="{{ url('/noticias') }}">
                                    Noticias
                                </a>
                            </li>
                            @endif
                            @if($activo=='biblioteca')
                            <li class="items_header">
                                <a class="activo" href="">
                                    Biblioteca
                                </a>
                            </li>
                            @else
                            <li class="items_header" id="menu_productos">
                            <a class="prod_menu" href="">
                                Biblioteca
                            </a>
                            <ul style="margin-top: -16%!important;">
                                <li class="menu_cate">
                                    <a href="{{ url('/biblioteca') }}" style="padding-top: 5%;">
                                        Documentos
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/biblioteca') }}" style="padding-top: 5%;">
                                        Definiciones
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/biblioteca') }}" style="padding-top: 5%;">
                                        Videos
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/sobrevivientes') }}" style="padding-top: 5%;">
                                        Testimonios
                                    </a>
                                </li>
                            </ul>
                        </li>
                            @endif
                            @if($activo=='novedades')
                            <li class="items_header">
                                <a class="activo" href="">
                                    Escuela
                                </a>
                            </li>
                            @else
                            <li class="items_header">
                                <a href="">
                                    Escuela
                                </a>
                            </li>
                            @endif
                            @if($activo=='eventos')
                            <li class="items_header">
                                <a class="activo" href="{{ url('/eventos') }}">
                                    Eventos
                                </a>
                            </li>
                            @else
                            <li class="items_header">
                                <a href="{{ url('/eventos') }}">
                                    Eventos
                                </a>
                            </li>
                            @endif
                            @if($activo=='contacto')
                            <li class="items_header">
                                <a class="activo" href="">
                                    Web Mail
                                </a>
                            </li>
                            @else
                            <li class="items_header">
                                <a href="">
                                    Web Mail
                                </a>
                            </li>
                            @endif
                            @if($activo=='contacto')
                            <li class="items_header">
                                <a class="activo" href="{{ url('/contacto') }}">
                                    Contacto
                                </a>
                            </li>
                            @else
                            <li class="items_header">
                                <a href="{{ url('/contacto') }}">
                                    Contacto
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- Para moviles --}}
<ul class="sidenav" id="slide-out" style="position: absolute;color: #7D0045;">
    <ul class="collapsible collapsible-accordion">
        <li class="bold">
            <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/') }}">
                <span class="side">
                    INICIO
                </span>
                <i class="material-icons">
                    home
                </i>
            </a>
        </li>
        <li class="bold">
            <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/empresa') }}">
                <i class="material-icons">
                    group
                </i>
                EMPRESA
            </a>
        </li>
    </ul>
</ul>
{{-- Para moviles fin--}}
