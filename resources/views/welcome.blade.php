<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myambunet</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/effects.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="welcome">
    <br>
    <div id="app">
    <nav class="navbar  navbar-static-top promo">
        <nav class="navbar navbar-static-top">
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
                        
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-btn fa-bell"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @if (Auth::user())
                            <li><a href="{{ url('/users/') }}">Dashboard</a></li>
                                    @endif
                                    <li> <a href="http://myambunet.com/availablemedics.html"> Available Medics</a></li>
                                    <li> <a href="http://myambunet.com/openschedules.html"> Open Schedules</a></li>
                                    <li> <a href="#"> Subscription</a></li>
                                    <hr>
                                    <li><a href="{{ url('/contact') }}">Email Us</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
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
    </div>
    <div>
    {{-- Title for Connection --}}
    <div class="content">
            <div>
                <h1 style="color: #fff;"> Connections For Life.</h1>
                    <h3> Week : 10 <span id="pipeStyle">|</span> Day : 8 - 15 </h3>
            </div>
    </div>
    <br>
    <br>

            <div class="container">
                <div row-fluid>
                <div class="col-sm-6 col-xs-6">
                <table>
                    <thead>
                        <tr>
                            <th class="text-left col-md-4"><a class="thHeadLink" style="color:#fff; font-size:30px; font-weight: 700;"" href="http://myambunet.com/openschedules.html">Open Schedules</a></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left">Full Time  <span id="setNumber"> 21 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">Full Day  <span id="setNumber"> 6 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">Runs/Calls <span id="setNumber"> 17 </span></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                
                <div class="col-sm-6 col-xs-6">
                <table>
                    <thead>
                        <tr>
                            <th class="text-left col-md-4"><a class="thHeadLink" style="color:#fff; font-size:30px; font-weight: 700;" href="http://myambunet.com/availablemedics.html">Available Medics</a></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left">EMT - Basic  <span id="setNumber"> 10 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">EMT - Intermediate   <span id="setNumber"> 8 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">EMT - Paramedic  <span id="setNumber"> 15 </span></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        <div class="content">
            {{-- Ambunet --}}
         <div>
            <div class="title m-b-md">
                myambunet
            </div>
         </div>   

            {{-- Table --}}
                
            {{-- Links --}}
            <div class="links">
                <a href="#">open schedules</a>
                <a href="http://ambu-net.com/">available medics</a>
                <a href="{{url('/login')}}">Login</a>
                <a href="{{url('/register')}}">Register</a>
            </div>
<br>
        </div>


  <!--/Start Middle main-->      
<main class="middle" id="middle">
    <div class="middle" id="middle">
        <div class="container-fluid">
            <div class="row">
                <div id="{{-- loader --}}">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="lading"></div>
                </div>
            </div>
   <!--/.row--> 

{{-- 
        <br>
        <br>
        <br> 
        <br>
        <br>
        <br>  --}}
        </div>
        <div id="Textbody">
            <div>   

                <p>I'm</p>
            </div>     
<b>
  <span1>
    A Medic<br /> 
    A Provider<br />
    Connections For Life.<br />
    myambunet<br />
    At your service...
    </span1>
</b>
        </div>
        <!--/.container-->

    </div>

    <!--/End main-->

</main>  
<main class="middle" id="middle2">
    <div class="middle" id="middle2">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="lading"></div>
                </div>
            </div>
   <!--/.row--> 


        <br>
        <br>
        <br> 
        <br>
        <br>
        <br> 
        </div>
        <!--/.container-->

    </div>
    <!--/End main-->

</main>   

{{-- Start Footer --}}
<footer>
    <div class="footer" id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> ABOUT US </h3>
                    <ul>
                        <li><a href="http://www.ambu-net.com" target="_blank">Company</a></li>
                        <li> <a href="#"></a>FAQ</li>
                        <li> <a href="#"> Subscription </a> </li>
                        <li> <a href="#"> Billing </a> </li>
                        <li> <a href="#">Referral Program </a> </li>
                        <li> <a href="#">Terms & Condition </a> </li>
                        {{-- <li> <a href="#"> Lorem Ipsum </a> </li> --}}
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> BLOGS </h3>
                    <ul>
                        <li> <a href="#">How to become a better medic</a> </li>
                        <li> <a href="#">Safety</a> </li>
                        <li> <a href="#">Medics Only</a> </li>
                        <li> <a href="#">Providers Only</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Apps </h3>
                    <ul>
                        <li> <a href="#"> iOS App Coming Soon </a> </li>
                        <li> <a href="#"> Android App Coming Soon </a> </li>
                        {{--<li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li> --}}
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Social </h3>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
                <div class="col-lg-1  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Support </h3>
                    <ul>
                        <li> <a href="#"> Technical </a> </li>
                        <li> <a href="#"> Guide </a> </li>
                        <li>
                            <div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container-fluid">
            <p class="pull-left"> Copyright © Ambu-Net Inc 2017. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-stripe"></i></li>
                    
                </ul> 
            </div>
        </div>
    </div>
    <div class="form-group">
  <input class="placepicker form-control" data-map-container-id="collapseOne"/>
</div>
<div id="collapseOne" class="collapse">
  <div class="placepicker-map thumbnail"></div>
</div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="src/js/jquery.placepicker.js"></script>
    <script type="text/javascript" src="https://<a href="http://www.jqueryscript.net/tags.php?/map/">map</a>s.googleapis.com/maps/api/js?sensor=true&libraries=places"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>
$(".placepicker").placepicker();
</script>

    <script src="/js/app.js"></script>
    <!--/.footer-bottom--> 
</footer>
</body>
</html>