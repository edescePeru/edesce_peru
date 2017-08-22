<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Edesce Peru | @yield('title')</title>
    <link rel="icon" href="{!! asset('images/icono.ico') !!}"/>@yield('page-title')
    <meta name="description" content="EDESCE PERU" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('assets/css/ace-fonts.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('assets/css/ace.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ace-rtl.css')}}" />
    <script src="{{ asset('assets/js/bootstrap.min.css') }}"></script>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    @yield('styles')
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div>
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">EDESCE</span>
                            <span class="white" id="id-text2">Perú</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; </h4>
                    </div>

                    <div class="space-6"></div>

                    @yield('content')

                    <div class="navbar-fixed-top align-right">
                        <br />
                        &nbsp;
                        <a id="btn-login-dark" href="#">Dark</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-blur" href="#">Blur</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-light" href="#">Light</a>
                        &nbsp; &nbsp; &nbsp;
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->


<!-- inline scripts related to this page -->

@yield('scripts')
</body>
</html>
