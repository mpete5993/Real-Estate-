<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('AdminMain.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
    <link href=" {{asset('/css/toastr.css')}} " rel="stylesheet"/>
   
    <link rel="shortcut icon" href=" {{ asset('Images/users/dashboard-alt-icon.png')}} " type="image/x-icon">
    <title> Dashboard </title>
    @toastr_css
</head>

<body style="background-color: var(--background-color);">
    <div class="wrapper">
        <div class="sidebar">
            <div class="active-user">
                <div class="user-avatar">
                    <img src="{{ URL::to('/Images')}}/{{ Auth::user()->avatar}} " alt="">
                </div>
                <div class="user-details">
                    <h6> {{ Auth::user()->name }} </h6>
                    <button></button><span>active</span>
                </div>
            </div>
            <div class="dashboard">
                <div class="" style="margin-bottom: 30px;">
                    <a href="{{ route('admin.dashboard' )}}" style="text-decoration: none"><h3><span><i class="fa fa-dashboard"></i></span>Dashboard</h3></a>
                </div>
                <div class="">
                    <button class="accordion"><i class="fa fa-building"
                            style="margin-right: 20px;color: #00c0ef;"></i>properties <i
                            class="fa fa-angle-down" style="float: right;"></i></button>
                    <ul class="panel">
                        <li>
                            <span> <a href=" {{ route('admin.properties.create') }} " class=""><i class="fa fa-plus-square " style="margin-right: 10px;"></i>Add
                                    Property</a></span>
                        </li>
                        <li>
                            <span><a href="{{ route('admin.properties.index')}}"><i class="fa fa-table" style="margin-right: 10px;"></i> View
                                    Properties</a></span>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <button class="accordion"><i class="fa fa-bookmark"
                            style="margin-right: 20px;color: #00c0ef;"></i>Categories <i
                            class="fa fa-angle-down" style="float: right;"></i></button>
                    <ul class="panel">
                        <li>
                            <span> <a href=" {{ route('admin.categories.create' )}} " class=""><i class="fa fa-plus-square " style="margin-right: 10px;"></i>Add
                                    Category</a></span>
                        </li>
                        <li>
                            <span><a href=" {{ route('admin.categories.index' )}} "><i class="fa fa-table" style="margin-right: 10px;"></i> View
                                    Categories</a></span>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <button class="accordion"><i class="fa fa-newspaper-o"
                            style="margin-right: 20px;color: #00c0ef;"></i>Posts <i class="fa fa-angle-down"
                            style="float: right;"></i></button>
                    <ul class="panel">
                        <li>
                            <span>
                                <a href="{{  route('admin.posts.create') }}" class="">
                                    <i class="fa fa-plus-square " style="margin-right: 10px;"></i>Add Post
                                </a>
                            </span>
                        </li>
                        <li>
                            <span><a href="{{  route('admin.posts.index') }}"><i class="fa fa-table" style="margin-right: 10px;"></i> View
                                    Posts</a></span>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <button class="accordion"><i class="fa fa-users"
                            style="margin-right: 20px;color: #00c0ef;"></i>Users <i class="fa fa-angle-down"
                            style="float: right;"></i></button>
                    <ul class="panel">
                        <li>
                            <span><a href=" {{ route('admin.users.index' )}} "><i class="fa fa-table" style="margin-right: 10px;"></i> View
                                    Users</a></span>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <button class="accordion"><i class="fa fa-tags" style="margin-right: 20px;color: #00c0ef;
                        "></i>Tags <i class="fa fa-angle-down" style="float: right;"></i></button>
                    <ul class="panel">
                        <li>
                            <span> <a href="  {{ route('admin.tags.create')}} " class=""><i class="fa fa-plus-square " style="margin-right: 10px;"></i>Add
                                    Tag</a></span>
                        </li>
                        <li>
                            <span><a href="  {{ route('admin.tags.index')}} "><i class="fa fa-table" style="margin-right: 10px;"></i> View
                                    Tags</a></span>
                        </li>
                    </ul>
                </div>
                <div class="" style="height:100px">
                        <a href=" {{ url('/')}} ">
                            <button class="logout"><i class="fa fa-home"style="margin-right: 20px; color: #00c0ef;"></i>Home</button>
                        </a>
                </div>
                <div class="toggle">
                    <div class="toggle-btn">
                       <span>Dark Theme</span> <i class="fa fa-adjust"></i>
                    </div>
                </div>

            </div>
        </div>