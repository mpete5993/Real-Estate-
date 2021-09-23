<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{secure_asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href=" {{secure_asset('css/bootstrap.css')}} ">
    <link rel="stylesheet" href=" {{ secure_asset('css/style.css')}} ">
    <link rel="stylesheet" href=" {{secure_asset('css/blog.css')}} ">
    <link rel="stylesheet" href="{{ secure_asset('css/property.css')}}">
    <link rel="stylesheet" href=" {{ secure_asset('css/about.css')}} ">
    @toastr_css
    <title>Real Estate</title>
</head>
<body>
    <!---===== Navigation ====== ---->
    <nav class="navbar" id="navbar">
        <div class="logo">
            <h4><a href="/">REAL ESTATE</a></h4>
        </div>
        <div class="icon-bars">
            <button class="icon-btn" id="menu-show"><i class="fa fa-bars"></i></button>

        </div>

        <div class="content">
            <div class="icon-cancel">
                <button class="icon-btn" id="menu-cancel"><i class="fa fa-window-close"></i></button>
            </div>
            <ul class="menu-list">
                <li><a href="">About Us</a></li>
                <li><a href=" {{ route('properties') }} ">properties</a></li>
                <li><a href=" {{ url('agents') }} ">Agents</a></li>
                <li><a href=" {{ url('blog')}} ">Blog</a></li>
                <li><a href=" {{url('contact')}} ">Contact Us</a></li>
            </ul>

            @guest
                <div class="signup">
                @if (Route::has('login'))
                <a href="{{ route('login') }}"">LOGIN</a>
                @endif

                @if (Route::has('register'))
                <a href="{{ route('register') }}">REGISTER</a>
                @endif
            @else
            <img src="{{ URL::to('/Images')}}/{{ Auth::user()->avatar}} " class="avatar" alt="" style="">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">
                    {{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i>
                </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href=" {{ url('profile') }} "><i class="fa fa-user"></i> My Profile</a>
                    @hasrole('admin')
                    <a href=" {{ url('admin/dashboard') }} "><i class="fa fa-dashboard"></i>  Dashboard</a>
                    @endhasrole
                   <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </div>
            @endguest
          </div>
        </div>
    </nav>

    <!---===== Navigation ====== ---->
