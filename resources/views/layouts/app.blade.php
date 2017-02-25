<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta-title')</title>
    <meta name="description" content="@yield('meta-desc')">
    <meta name="author" content="@yield('meta-author')">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/effects.css" rel="stylesheet">
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link href="{{ asset('/css/style.css') }}" media="all" rel="stylesheet" type="text/css" /> --}}

    <!-- Scripts -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-default navbar-static-top promo">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        myambunet
                        {{-- {{ config('app.name', 'myambunet') }} --}}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">

                        @if (Auth::user() ? Auth::user()->role->id === 1 : '')
                            <li><a href="{{ url('/admin') }}">Admin</a></li>
                        @endif
                    </ul>

                   <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @if (Auth::guest())

                            <li><a href="{{ url('/redirect') }}"><i class="fa fa-btn fa-facebook-official"></i> Login</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-table"></i> 
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li> <a href="http://myambunet.com/availablemedics.html"> Available Medics</a></li>
                                    <li> <a href="http://myambunet.com/openschedules.html"> Open Schedules</a></li>
                                </ul>        
                            </li>    
                            <li><a href="#"><i class="fa fa-calendar"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa fa-bell-o"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-user-o"></i> 
                                    {{-- {{ Auth::user()->name }} --}} 
                                    <span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">
                                    <li> &nbsp<i class="fa fa-user-circle"></i>&nbsp{{ Auth::user()->name }}
                                    @if (Auth::user())
                                    <a style="text-align: center;" href="{{ url('/users/') }}"> View Profile</a></li>
                                    @endif
                                    <hr>
                                    <li><a href="#"><i class="fa fa-credit-card"></i> Subscription</a></li>
                                    <hr>
                                    <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope-o"></i>   Email Us</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script>
        @if (notify()->ready())
            swal({
                  title: "{!! notify()->message() !!}",
                  type: "{!! notify()->type() !!}",
                  @if (notify()->option('timer'))
                    timer: "{!! notify()->option('timer') !!}",
                    showConfirmButton: true,
                  @endif
                  html: true
                });
        @endif
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="src/js/jquery.placepicker.js"></script>
<script type="text/javascript" src="https://<a href=http://www.jqueryscript.net/tags.php?/map/">map</a>s.googleapis.com/maps/api/js?sensor=true&libraries=places"></script>
<script>
    $(".placepicker").placepicker();

</script>
</body>
</html>
