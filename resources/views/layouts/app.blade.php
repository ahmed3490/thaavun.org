<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'home') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'home') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

     
        <div class="container">
       
            <div class="row">
        
             @if(Auth::check())
             <div class="col-lg-4">
          
                   <ul class="li-group-list">
                 
                <div class="text-center">
                   <li class="list-group-item">
                    <a  style =  "font-family:DAM_Madheeh; font-size: 1.4em;text-align:center" href="{{ route ('home') }}">އެޑްމިން ފުރަތަމަ ޞަފުޙާ</a>
                    </li>                 
                </div>
                   

                <div class="text-center">
                     <li class="list-group-item">
                     <a  style =  "font-family:DAM_Madheeh; font-size: 1.4em;" href="{{ route('posts.create') }}">އާ ލިޔުމެއް ހަދާ</a>
                   </li>
                </div>
                  
                      
                <div class="text-center">
                     <li class="list-group-item">
                     <a  style =  "font-family:DAM_Madheeh; font-size: 1.4em;" href="{{ route('category.create') }}"> އާ ބާވަތެއް ހަދާ  </a>
                     </li>
                </div>

                     
                <div class="text-center">
                    <li class="list-group-item">
                     <a  style =  "font-family:DAM_Madheeh; font-size: 1.4em;" href="{{ route('categories') }}">ބާވަތްތައް</a>
                    </li>
                </div>     
                                     

                   </ul>
                    
                </div>
               
             @endif
                <div class="col-lg-7">
                     @yield('content')

              
                </div>
            </div>
        </div>
    


   
    
    </div>
    </div>

       

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
