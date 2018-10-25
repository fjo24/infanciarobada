{{-- BARRA PRINCIPAL --}}

<div class="block red lighten-1">
    
<nav class="principal target" data-target="red" style="z-index: 99;">
    <div class="container" style="width: 90%;">
        <div class="nav-wrapper row">
            <div class="col l12 m12 s12 center" style="height: 45px;">
                <div class="col l3 m3 s12 logo_p">
                    <a class="" style="">
                            <a href="{{ url('/') }}">
                        <div class="logo_header">
                                <img alt="" class="img_logo" src="{{asset('img/logo_principal.png')}}"/>
                        </div>
                            </a>
                    </a>
                </div>
                <div class="col l9 m9 s12 lista hide-on-med-and-down">
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
                            @if($activo=='lared')
                            <li class="items_header" id="menu_productos">
                                <a class="activo" href="{{ url('/empresa') }}" style="border-bottom: 3px solid #D8212A!important;">
                                    La red
                                </a>
                                <ul style="margin-top: -16%!important;">
                                <li class="menu_cate">
                                    <a href="{{ url('/lared') }}" style="padding-top: 5%;">
                                        Que es la Red?
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/referentes') }}" style="padding-top: 5%;">
                                        Referentes
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/mision') }}" style="padding-top: 5%;">
                                        Misión
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/organismos-asociados') }}" style="padding-top: 5%;">
                                        Organizmos Asociados
                                    </a>
                                </li>
                            </ul>
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
                                    <a href="{{ url('/referentes') }}" style="padding-top: 5%;">
                                        Referentes
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/mision') }}" style="padding-top: 5%;">
                                        Misión
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/organismos-asociados') }}" style="padding-top: 5%;">
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
                            <li class="items_header" id="menu_productos">
                                <a class="activo" href="" style="border-bottom: 3px solid #D8212A!important;">
                                    Biblioteca
                                </a>
                                <ul style="margin-top: -16%!important;">
                                <li class="menu_cate">
                                    <a href="{{ url('/biblioteca') }}" style="padding-top: 5%;">
                                        Documentos
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/definiciones') }}" style="padding-top: 5%;">
                                        Definiciones
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/videos') }}" style="padding-top: 5%;">
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
                                    <a href="{{ url('/videos') }}" style="padding-top: 5%;">
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
                            @if($activo=='escuela')
                            <li class="items_header" id="menu_productos">
                                <a class="activo prod_menu" style="border-bottom: 3px solid #D8212A!important;">
                                    Escuela
                                </a>
                                <ul style="margin-top: -16%!important;">
                                <li class="menu_cate">
                                    <a href="{{ url('/cursos') }}" style="padding-top: 5%;">
                                        Cursos
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/seminarios') }}" style="padding-top: 5%;">
                                        Seminarios
                                    </a>
                                </li>
                            </ul>
                        </li>
                            </li>
                            @else
                            <li class="items_header" id="menu_productos">
                            <a class="prod_menu" href="">
                                Escuela
                            </a>
                            <ul style="margin-top: -16%!important;">
                                <li class="menu_cate">
                                    <a href="{{ url('/cursos') }}" style="padding-top: 5%;">
                                        Cursos
                                    </a>
                                </li>
                                <li class="menu_cate">
                                    <a href="{{ url('/seminarios') }}" style="padding-top: 5%;">
                                        Seminarios
                                    </a>
                                </li>
                            </ul>
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
                            @if($activo=='webmail')
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
<a href="#" data-target="slide-out"  class="sidenav-trigger" style=" "><i class="material-icons" style="color: #AA0000;position: absolute;font-size: 50px;bottom: 55%;padding-bottom: 44px;padding-left: 40px;">menu</i></a>
</nav>
</div>
{{-- Para moviles --}}
<ul class="sidenav" id="slide-out" style="color: #7D0045; z-index: 9999;">
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
            <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/lared') }}">
                <i class="material-icons">
                    grid_on
                </i>
                La Red
            </a>
        </li>
        <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/referentes') }}">
                    <i class="material-icons">
                        assignment_ind
                    </i>
                    Referentes
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/organismos-asociados') }}">
                    <i class="material-icons">
                        group_work
                    </i>
                    Organismos Asociados
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/foros') }}">
                    <i class="material-icons">
                        insert_comment
                    </i>
                    Foros
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/noticias') }}">
                    <i class="material-icons">
                        new_releases
                    </i>
                    Noticias
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/biblioteca') }}">
                    <i class="material-icons">
                        library_books
                    </i>
                    Biblioteca
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/videos') }}">
                    <i class="material-icons">
                        ondemand_video
                    </i>
                    Videos
                </a>
            </li>
        <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/sobrevivientes') }}">
                    <i class="material-icons">
                        person_pin
                    </i>
                    Sobrevivientes
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/cursos') }}">
                    <i class="material-icons">
                        import_contacts
                    </i>
                    Cursos
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('seminarios') }}">
                    <i class="material-icons">
                        insert_comment
                    </i>
                    Seminarios
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('eventos') }}">
                    <i class="material-icons">
                        event
                    </i>
                    Eventos
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/contacto') }}">
                    <i class="material-icons">
                        contact_mail
                    </i>
                    Contacto
                </a>
            </li>
    </ul>
</ul>
{{-- Para moviles fin--}}
