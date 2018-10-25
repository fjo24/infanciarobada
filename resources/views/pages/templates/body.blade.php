<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <meta content="" name="description">
                        <meta content="" name="author">
                            <title>
                                :: RED INFANCIA ROBADA :: - @yield('titulo')
                            </title>

                            <link href="{{ asset('img/favicon.ico') }}" rel="icon" type=""/>
                            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                            <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
                            <link href="{{ asset('css/pages/layouts/header.css') }}" rel="stylesheet">
                            <link href="{{ asset('css/pages/desplegable.css') }}" rel="stylesheet">
                                <link href="{{ asset('css/pages/layouts/footer.css') }}" rel="stylesheet">
                                    @yield('css')
                                    <script src='https://www.google.com/recaptcha/api.js'></script>
                                        <link href="{{ asset('plugins/materialize/css/materialize.min.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

       <!--    <script type="text/javascript" src="http://osolelaravel.com/drimer/js/materialize.min.js"></script>-->
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>

    </head>
    <body>
        <!-- CABECERA -->
        <header class="">
            @include('pages.templates.header')
        </header>
        <main style="">
            @yield('contenido')
        </main>
          <!--  footer aqui -->
          @include('pages.templates.footer')

        <!--Import jQuery before materialize.js-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
        </script>
        <!-- Materialize Core JavaScript -->
        <script src="{{ asset('plugins/materialize/js/materialize.min.js') }}">
        </script>
        @yield('js')
        <script type="text/javascript">
$(document).ready(function(){
    $('.sidenav').sidenav();
  });
            $(document).ready(function(){

    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('nav').addClass('header2');
        } else {
            $('nav').removeClass('header2');
        }
    });

});
           /* $(document).ready(function(){
                $('.target').pushpin();
  });*/
         $(document).ready(function(){
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();

  });

           $('.pushpin-demo-nav').each(function() {
    var $this = $(this);
    var $target = $('#' + $(this).attr('data-target'));
    $this.pushpin({
      top: $target.offset().top,
      bottom: $target.offset().top + $target.outerHeight() - $this.height()
    });
  });
    </script>
    </body>
</html>