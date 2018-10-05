<footer class="page-footer">
    <div class="container" style="width: 85%;">
        <div class="row">
            <div class="col l12 m12 s12">
                <div class="col l3 m3 s12">
                    <div class="logo_footer left" style="margin-top:13%;">
                        <img src="{{asset('img/layouts/logo_footer.png')}}"/>
                    </div>
                </div>
                <div class="sitemap col l4 m4 s12">
                    <div class="listlinks col l4 m4 s6">
                        <ul>
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('/') }}">
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('empresa') }}">
                                    La red
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('categorias') }}">
                                    Foros
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="listlinks col l4 m4 s6">
                        <ul style="">
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('categoriaobras') }}">
                                    Noticias
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('presupuesto') }}">
                                    Biblioteca
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('contacto') }}">
                                    Escuela
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="listlinks col l4 m4 s6">
                        <ul style="">
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('categoriaobras') }}">
                                    Eventos
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('presupuesto') }}">
                                    Sobrevivientes
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="{{ url('contacto') }}">
                                    Contacto
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="redes_footer col l2 m2 s12" style="margin-top: 4.5%">
                    <div class="col l12 m12 s12">
                        <div class="seguinos center">
                            Seguinos en
                        </div>
                    </div>
                    <div class="col l12 m12 s12 center" style="padding: 9% 26%;">
                        <div class="col l6 m6 s6">
                            <a href="">
                                <img src="{{asset('img/layouts/facebook_footer.png')}}"/>
                            </a>
                        </div>
                        <div class="col l6 m6 s6">
                            <a href="">
                                <img src="{{asset('img/layouts/instagram_footer.png')}}"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col l3 m3 s12" style="margin-top: 2.5%;">
                    <div class="listlinks2 col l12 m12 s12">
                        <ul>
                            <li>
                                <div class="col l12 m12 s12" style="margin: 6% 0">
                                <div class="col l2 m2 s2" style="">
                                    <div class="rightlist">
                                        <img alt="" class="" src="{{asset('img/layouts/telefono.png')}}">
                                        </img>
                                    </div>
                                </div>
                                <div class="col l10 m10 s10" style="line-height: 18px!important;">
                                    <div class="rightlist">
                                        {{$telefono->descripcion}}
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                                <div class="col l12 m12 s12" style="">
                                <div class="col l2 m2 s2" style="">
                                    <div class="rightlist">
                                        <img alt="" class="" src="{{asset('img/layouts/email.png')}}">
                                        </img>
                                    </div>
                                </div>
                                <div class="col l10 m10 s10" style="line-height: 18px!important;">
                                    <div class="rightlist">
                                        Red Infancia Robada
                                    </div>
                                </div>
                                <div class="col l2 m2 s2" style="">
                                    <div class="rightlist">
                                    </div>
                                </div>
                                <div class="col l10 m10 s10" style="line-height: 18px!important;">
                                    <div class="rightlist">
                                        {{$email->descripcion}}
                                    </div>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
