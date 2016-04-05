<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Education Board Results</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
        <script src="{{ URL::asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
    </head>
    <body>
        <!-- Body content -->
		

        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="/">Education Board Results</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                            @if(Auth::check())
                                <li><a>Hello, {{ Auth::user()->name }}</a></li>
                                <li><a href="{{ route('admin.dashboard.index') }}">Go to Dashboard</a></li>
                                <li><a href="/auth/logout">Logout</a></li>
                            @endif
                      </ul>
                    </div><!-- /.navbar-collapse -->

                </div>
            </div>
          </div><!-- /.container-fluid -->
        </nav>
		
        <div class="jumbotron">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row result_form">                            
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            
            @yield('result')
            
            <br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 well">
                    <br>
                    <p class="text-center">Copyright &copy; <strong> <a href="http://ohidul.com">Ohidul Islam</a></strong> 2016</p>
                </div>
            </div>
        </div>
		
		
		
		
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins.js') }}"></script>
        <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    </body>
</html>
