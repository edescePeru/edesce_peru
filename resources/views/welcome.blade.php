<!-- ESTO ES NUEVO COPIANDO Y PEGANDO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EDESCE</title>
    
    <!-- CSS -->
    <link href="{{asset('portada/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('portada/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('portada/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('portada/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('portada/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('portada/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('portada/css/responsive.css') }}" rel="stylesheet">


    <link rel="icon" href="{{ asset('portada/images/ico/edesce.png') }}" type="image">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('portada/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('portada/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('portada/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('portada/images/ico/apple-touch-icon-57-precomposed.png') }}">

    <style>
        .mysolution{
            color: #383338 !important
        }
        .navbar.navbar-inverse{
            margin: 0px;
            border-radius: 0px;
            min-height: 30px;
        }

        .pull-right{
            float: right!important;
            height: 5px;
        }

        .clearfix{
            color: #ffffff;
            font-size: 14px;
            font-family: Roboto;
            /*font-weight: bold;*/
        }

        ul.clearfix{
            list-style: none;
        }

        .top_bar_info{
            margin: 11px 0 0;
        }

        .top_bar_info li{
            float: right;
            margin-left: 33px;
            margin-bottom: 0;
            line-height: 14px;
        }

        .header_top_bar_socs{
            margin: 5px 0 0 40px;
        }

        .header_top_bar_socs ul li{
            float: left;
            margin-right: 15px;
            margin-bottom: 0;
        }

        .header_top_bar_socs ul li a .fa{
            font-size: 14px;
        }

        i.fa{
            color: #ffffff;
            'transition: all 0.4s ease-out;
        }

        i.fa:hover {
            /*color: #ea991e;*/
        }

        .top_bar_info.clearfix.derecha{
            margin: 11px 230px  0 0;
        }

        #main-slider .item {
            height: 538px;
        }

        .img-course{
            border:2px solid rgba(26, 82, 138, 0.58);
        }


        @media only screen and (min-width: 768px){
            #main-menu.navbar-default .navbar-nav > li > a {
                padding-top: 18px;
            }

            #main-menu.navbar-default .navbar-nav > li:hover > a {
                padding-top: 18px !important;
            }

            #main-menu.navbar-default .navbar-nav > li.active > a{
                padding-top: 18px;
            }
        }



    </style>

</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
    
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="clearfix">
                    
                        <!-- Header top bar Socials -->
                        <div class="pull-right">
                                <div class="header_top_bar_socs" style="margin: 0 0 0 40px;">
                                    <ul class="clearfix">
                                        <li>
                                            <a target="_blank" href='https://www.facebook.com/EDESCE'>
                                                <img src="{{ asset('portada/images/facebook.png') }}" alt="" style="width: 18px; ">
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                        </div>
                            
                        <div class="pull-right xs-pull-left">
                            <ul class="top_bar_info clearfix">
                                <li class="hidden-info">
                                    <i class="fa fa-clock-o"></i> Lun - Sab 9:00 - 20:00
                                </li>
                                <li>
                                    <i class="fa fa-mobile"></i> 989 975 412 /  
                                    <i class="fa fa-whatsapp"></i> 992 934 451
                                </li>
                            </ul>
                        </div>

                        <div class="pull-right xs-pull-left">
                            <ul class="top_bar_info clearfix derecha">
                                <li class="hidden-infos">
                                    <i class="fa fa-building-o"></i> Dirección: Jr. Gamarra Nº 553 oficina 6

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
    
            </nav>
            
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="padding: 2px;"><img src="{{ asset('portada/images/logo4.png') }}" alt="logo" ></a>
                </div>
                
                <div class="navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#home">INICIO</a></li>
                        
                        <li class=""><a href="#services"> DEVELOPMENT</a></li>
                        <li class=""><a href="#portfolio"> LEARNING</a></li>
                        <li class=""><a href="#about"> SOLUTIONS</a></li>
                        
                        <li class=""><a href="#get-in-touch">CONTACTO</a></li>
                            @if (Route::has('login'))
                                    @if (Auth::check())
                                     <li class="">
                                        <a href="{{ url('/home') }}">ACCEDER</a>
                                    </li>
                                    @else
                                         <li class="">
                                             <a href="{{ url('/login') }}">LOGIN</a>
                                         </li>
                                    @endif
                           @endif
                                   
                    </ul>
                    <form class="navbar-form navbar-left" id="formProfile" >
                        <div class="form-group">
                          <input type="text" id="code" class="form-control" placeholder="Ingrese código">
                        </div>
                        <button type="button" data-profile class="btn btn-default">Buscar</button>
                    </form>
                </div>

            </div><!--/.container-->
            <div class="container"><div style="display: none; width:10px" id="google_translate_element"></div><script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                    }
                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>
        </nav><!--/nav-->

    </header><!--/header-->
    <div id="error"></div>
    @if ( count( $errors ) > 0 )
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span><strong>Advertencia: </strong> {{ $error }}</span>
            @endforeach
        </div>
    @endif
    <section id="main-slider">
        <div class="owl-carousel" style="margin-top: 20px">
            <div class="item" style="background-image: url(portada/images/slider/learning.png);">

                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>EDESCE   <span>LEARNING</span></h2>
                                    <p><b>MISIÓN: </b> Formar y especializar a nuestros clientes para el logro de sus objetivos profesionales utilizando la tecnología e innovación.</p>
                                    <p><b>VISIÓN: </b> Para el 2020, ser reconocida como una de las principales empresas en ofrecer cursos de especialización para el logro de los objetivos profesionales de nuestros clientes</p>
                                    <a class="btn btn-primary btn-lg" href="#">Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div><!--/.item-->

            <div class="item" style="background-image: url(portada/images/slider/development.png);   background-position: 88% 0;">
            
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>EDESCE   <span>DEVELOPMENT</span></h2>
                                    <p><b>MISIÓN:</b>  Desarrollar diversos tipos de software empresariales que cumplan con los estándares de calidad para las distintas compañías nacionales, privadas o estatales.</p>
                                    <p><b>VISIÓN: </b>  Para el 2020, ser reconocida como una de las principales empresas desarrolladoras de software que cumplen con los estándares de calidad para las diversas compañías nacionales, privadas o estatales.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div><!--/.item-->

            <div class="item" style="background-image: url(portada/images/slider/consultoria.png); ">
            
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>EDESCE   <span class="mysolution">SOLUTIONS</span></h2>
                                    <p>MISIÓN:  Brindar soporte a las áreas de TI  de las diversas compañías nacionales, privadas o estatales.</p>
                                    <p>VISIÓN:  Para el 2020, ser reconocida como una de las principales empresas en brindar soporte a las áreas de TI de las diversas compañías nacionales, privadas o estatales.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div><!--/.item-->

        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Empresa de desarollo de software, consultoría y especialización</h2>
                    <p>Somos una empresa dedicada a la creación de sistemas de información empresarial con amplia experiencia en el mercado local
                        Creamos software empresarial para brindar soluciones integrales pensadas para cada tipo de negocio.
                        Brindamos soluciones empresariales usando tecnologías de información creando software a medida y proporcionando asesorías.
                    </p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#portfolio">Ver cursos</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">NOSOTROS</h2>
                <p class="text-center wow fadeInDown">Somos una empresa dedicada a la creación de sistemas de información empresarial con amplia experiencia en el mercado local.</br> Brindamos soluciones empresariales usando tecnologia de informacion creando software a medida y proporcionando asesorias.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="{{ asset('portada/images/main-feature.png') }}" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">EDESCE - Learning</h4>
                            <p>Comprometidos con tu futuro profesional EDESCE brinda cursos de capacitación en diversos temas profesionales. Contamos con ponentes calificados en las áreas correspondientes.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">EDESCE - Development</h4>
                            <p>Comprometidos con tu progreso empresarial EDESCE crea sistemas integrados para gestión logística, financiera, RRHH, comercial y entre otros</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">EDESCE - Solution</h4>
                            <p>Te brindamos asesoría para que tomes las de decisiones en el rubro de la Tecnología de Información</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-bullseye"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">EDESCE - Store</h4>
                            <p>Brindamos el Hardware necesario y/o productos tecnológicos para que tu área de TI este abastecida con lo último en tecnología</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nuestros servicios</h2>
                <p class="text-center wow fadeInDown">Tenemos a su disposición los siguientes servicios, comuníquese con nosotros para mayor información</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">PAGINAS WEB</h4>
                                    <p>Creación de páginas web empresariales especializadas para cada tipo de negocio</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-cubes"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">SISTEMAS INTEGRADOS</h4>
                                    <p>Creación de sistemas web para mejorar la gestión de las distintas áreas de su empresa</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-pie-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">INFRAESTRUCTURA TI</h4>
                                    <p>Venta de equipos tecnológicos y de TI para que tengan una mejor infraestructura</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">ANDROID / iOS</h4>
                                    <p>Creación de aplicaciones Android y IOS para gestión de sus tareas</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-language"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">BASE DE DATOS</h4>
                                    <p>Creación y administración de bases de datos para su organización</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-bullseye"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">GESTIÓN </h4>
                                    <p>Asesoramiento en la actualización o creación de su área de TI </p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                    </div>
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Portafolio</h2>
                <p class="text-center wow fadeInDown">    </p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Todos</a></li>
                    <li><a href="#" data-filter=".creative">Laravel</a></li>
                    <li><a href="#" data-filter=".corporate">PHP</a></li>
                    <li><a href="#" data-filter=".portfolio">Android</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('portada/images/portfolio/01.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Android Studio</h3>
                            Trabajamos con aplicaciones moviles
                            <a class="preview" href="{{ asset('portada/images/portfolio/full.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('portada/images/portfolio/02.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>ASP.NET</h3>
                            Trabajamos con herramientas microsoft
                            <a class="preview" href="{{ asset('portada/images/portfolio/full.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('portada/images/portfolio/03.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>SQL Server</h3>
                            Mantenga su data segura con nostros
                            <a class="preview" href="{{ asset('portada/images/portfolio/full.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('portada/images/portfolio/04.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Laravel</h3>
                            Usamos los framework mas seguros del mercado
                            <a class="preview" href="{{ asset('portada/images/portfolio/full.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('portada/images/portfolio/05.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Progrmacion iOS</h3>
                            Abarcamos todos los dispositivos
                            <a class="preview" href="{{ asset('portada/images/portfolio/full.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('/portada/images/portfolio/06.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>PHP 7</h3>
                            Ahora en costos de licenciamiento
                            <a class="preview" href="{{ asset('portada/images/portfolio/full.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('portada/images/portfolio/07.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Java</h3>
                            Programacion orientada a objetos en escritorio
                            <a class="preview" href="{{ asset('portada/images/portfolio/full.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('portada/images/portfolio/08.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Python</h3>
                            Sintaxis limpia
                            <a class="preview" href="{{ asset('portada/images/portfolio/full.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Conocenos un poco mejor</h2>
                <p class="text-center wow fadeInDown">En EDESCE EIRL - Empresa de Desarrollo de Software Consultoria y Especializacion  <br> Nos dedicamos a que tu negocio se consolide en el mercado actual dandole posicionamiento, infraestructura para diferenciarlo de la competencia <br> En un mundo donde la tecnologia marca el ritmo del crecimeinto empresarial te brindamos asesoramiento en la  pre y post venta al adquirir tu sistema integrado</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Video Intro</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="//player.vimeo.com/video/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Multi Capability</h3>
                    <p>¿Quiere que las distintas areas de su empresa esten unidas y trabajen a un ritmo mas productivo?
                        ¿Necesita una interfaz para lelgar al cliente final?
                        ¿Necesita una plataforma para mantener a su clientela siempre informada?
                        ¿Necesita manejar ventas online?</p>
                    <p>Nosotros somos su mejor opcion - Contactenos e informese de los distintos servicios que podemos ofrecerle</p>

                    <p>EDESCE EIRL Comprometidos con tu crecimiento</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Seguridad</li>
                                <li><i class="fa fa-check-square"></i> Compromiso</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Confianza</li>
                                <li><i class="fa fa-check-square"></i> Experiencia</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#">Learn More</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->

    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nuestros Procesos</h2>
                <p class="text-center wow fadeInDown">En EDESCE EIRL estandarizamos nuestros procesos para que su producto final no presente ningun inconveniente</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-coffee fa-2x"></i>
                        </div>
                        <h3>INSPECCION</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <h3>PLANEACION</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-image fa-2x"></i>
                        </div>
                        <h3>DISEÑO</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-heart fa-2x"></i>
                        </div>
                        <h3>DESARROLLO</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle">
                            <span>5</span>
                            <i class="fa fa-shopping-cart fa-2x"></i>
                        </div>
                        <h3>PRUEBAS</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle">
                            <span>6</span>
                            <i class="fa fa-space-shuttle fa-2x"></i>
                        </div>
                        <h3>LANZAMIENTO</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#work-process-->

    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Conoce nuestros Proyectos</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive img-course" src="{{ asset('portada/images/team/1.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Tu Carga</h3>
                            <span>Sistema Web y Movil</span>
                        </div>
                        <p>Gestión de Clientes, Transportistas  y de carga en tiempo real, contemplado para dispositivos web y movil</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive img-course" src="{{ asset('portada/images/team/2.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Coemp Perú SAC</h3>
                            <span>Página web corporativa</span>
                        </div>
                        <p>Informativa Con formulario de contacto para que puedan interactuar en cualquier momento con ellos</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive img-course" src="{{ asset('portada/images/team/3.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Contruye Peru SAC</h3>
                            <span>Pagina web corporativa</span>
                        </div>
                        <p>Informativa Con formulario de contacto para que puedan interactuar en cualquier momento con ellos</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive img-course" src="{{ asset('portada/images/team/4.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>E STORE EIRL</h3>
                            <span>Sistema web e-comerce</span>
                        </div>
                        <p>Sistema web completo de e-comerce - Contempla carrito de compras ,sistema de pagos, transferencias bancarias , uso de paypal y Visa.
                        </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="row">
                <div class="col-sm-6">
                    <h3 class="column-title">Nuestras habilidades</h3>
                    <strong>APLICACIONES WEB</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="95">95%</div>
                    </div>
                    <strong>APLICACIONES MOVILES</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="75">75%</div>
                    </div>
                    <strong>APLICACIONES ESCRITORIO</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="80">80%</div>
                    </div>
                    <strong>BASE DE DATOS</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3 class="column-title">Nuestros proyectos</h3>
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">WEB</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">MOVIL</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">ESCRITORIO</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">BASE DE DATOS</a>
                            </li>
                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                                <p>Desarrollamos aplicaicones web personales y empresariales. Muchas empresas </p>
                                <p>confian en nostros para crearles plataformas que se adecuen con sus requerimientos</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                                <p>Desarrollamos aplicacion moviles Android/iOS que se adecuen con sus requerimientos</p>
                                <p>Tenemos 4 aplicaciones empresariales creadas y 6 aplicaciones personales que avalan nuestra efectividad</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                                <p>Desarrollamos aplicaciones de escritorio para integrarse con multiples entornos de intranet manejados con gestores de </p>
                                <p>Bases de datos licenciadas como no licenciadas. Otorgandole seguridad y confianza al usar.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                                <p>Trabajamos con distintas bases de datos licenciadas y no licenciadas. Logramos con estas optimizar sus procesos de guardado y gestion de informacion</p>
                                <p>Tenemos a su dispocicion MySQL server , SQL server, Oracle , MongoDB, MariaDB, Casandra DB, Access</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#meet-team-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">LOGROS CONSEGUIDOS</h2>
                <p class="text-center wow fadeInDown">Nuestros logros se pueden medir con estos factores diferenciados <br> compruebelo usted mismo solicite una consulta online gratuita</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="150" data-duration="1000"></div>
                        <strong>PROYECTOS EN DESARROLLO</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="133" data-duration="1000"></div>
                        <strong>CLIENTES SATISFECHOS</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="1025" data-duration="1000"></div>
                        <strong>PROYECTOS COMPLETADOS</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="2199" data-duration="1000"></div>
                        <strong>PREGUNTAS RESUELTAS</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="{{ asset('portada/images/testimonial/2.png') }}" alt=""></p>
                                <h4>Antony Luis Gomez</h4>
                                <small>Diseño grafico y FrontEnd worker</small>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="{{ asset('portada/images/testimonial/5.png') }}" alt=""></p>
                                <h4>Xiomara Mendez Gutierrez</h4>
                                <small>Administradora, Contadora worker</small>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="{{ asset('portada/images/testimonial/1.png') }}" alt=""></p>
                                <h4>Remso Rojas Guevara</h4>
                                <small>Analista de Base de Datos worker</small>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="{{ asset('portada/images/testimonial/4.png') }}" alt=""></p>
                                <h4>Jorge Gonzales Castillo</h4>
                                <small>Analista programador - Back-end worker</small>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="{{ asset('portada/images/testimonial/3.png') }}" alt=""></p>
                                <h4>Milagros Guarniz Cueva</h4>
                                <small>Analista Programador Back-end worker</small>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Comunicate con nosotros</h2>
                <p class="text-center wow fadeInDown">Llena el siguiente formulario de contacto y en breves momentos nos contactaremos con usted. Todas nuestras redes sociales estan a su dispocicion en todo momento.<br>Tenemos oficinas ubicadas en  Jiron Gamarra 553 - Trujillo - Perú</p>
            </div>
        </div>
    </section><!--/#get-in-touch-->

    <section id="contact">
        <iframe
                width="100%"
                height="630"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA2WcRbg2v5iuQsY-92sw7U2AttUefQ2PQ
    &q=edesce+trujillo+peru" allowfullscreen>
        </iframe>
        {{--<div id="google-map" style="height:650px" data-latitude="-8.1110305" data-longitude="-79.0284436" data-zoom="100"></div>
        --}}<div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Informacion de contacto</h3>

                            <address>
                              <strong>EDESCE, Inc.</strong><br>
                              Jr Gamarra 553, Centro Historico<br>
                              Trujillo, Perú<br>
                              <abbr title="Phone">P:</abbr> (044) 564358
                            </address>

                            <form id="contact-form" action="{{ url('/contact') }}" name="contact-form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Correo" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Asunto" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="mensaje" class="form-control" rows="8" placeholder="Mensaje" required></textarea>
                                </div>
                                <button type="submit" id="send" data-url="{{ url('/contact') }}" class="btn btn-primary">Enviar mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017. Designed by <a target="_blank" href="http://www.edesce.com/" title="edesce.com">edesce.com</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/EDESCE-Development-101906400450270/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <div  id="modalProfile" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h4>Información de la inscripción</h4>
                    </div>
                </div>

                <form id="formProfile" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <div class="modal-body">
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inscription_code">Código de Inscripción</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inscription_code" class="form-control" readonly>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="student">Alumno</label>
                                <div class="col-sm-10">
                                    <input type="text" id="student" class="form-control" readonly>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="student_code">Código del alumno</label>
                                <div class="col-sm-10">
                                    <input type="text" id="student_code" class="form-control" readonly>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="subject">Curso</label>
                                <div class="col-sm-10">
                                    <input type="text" id="subject" class="form-control" readonly>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="date">Fecha</label>
                                <div class="col-sm-10">
                                    <input type="text" id="date" class="form-control" readonly>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="modality">Modalidad</label>
                                <div class="col-sm-10">
                                    <input type="text" id="modality" class="form-control" readonly>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="score">Nota</label>
                                <div class="col-sm-10">
                                    <input type="text" id="score" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="text-center">
                                <a id="pdf-file" class="btn btn-success btn-sm" href="#" target="_blank">Visualizar certificado
                                </a>
                            </div>

                            <br>

                            <div class="text-center">
                                <a id="pdf-file2" class="btn btn-success btn-sm" href="#" target="_blank">Visualizar certificado desarrollador
                                </a>
                            </div>

                        </fieldset>
                        <div class="modal-footer">
                            <div class="text-center">
                                <button class="btn btn-sm btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('portada/js/jquery.js') }}"></script>
    <script src="{{ asset('portada/js/bootstrap.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2WcRbg2v5iuQsY-92sw7U2AttUefQ2PQ"></script>
    <script src="{{ asset('portada/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('portada/js/mousescroll.js') }}"></script>
    <script src="{{ asset('portada/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('portada/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('portada/js/jquery.isotope.min.js') }}"></script> <script src="{{ asset('portada/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('portada/js/wow.min.js') }}"></script>
    <script src="{{ asset('portada/js/main.js') }}"></script>
    <script src="{{ asset('js/inscription/profile.js') }}"></script>
</body>

</html>
