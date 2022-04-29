<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
   <!-- MDB -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"  rel="stylesheet"/>

   <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/app.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- Application Entry -->
  <div class="entry">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto  px-sm-1 px-0 bg-primary">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <ul class="list-unstyled slim-nav-menu flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-box-archive"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-comment"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-file"></i>
                            </a>
                        </li>

                    </ul>

                    <div class="pb-4">
                        <ul class="list-unstyled slim-nav-menu flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="nav-link align-middle px-0">
                                    <img src="/img/avatar.png" alt="profile image"  class="img-responsive" style="width: 20px; border-radius: 100px">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>


                    </div>

                </div>
            </div>

            <div class="col-auto col-md-1 col-xl-2 px-sm-1 px-0 bg-white">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100" style="100%">
                    <div class="m-t-50"></div>
                    <ul class="list-unstyled sidenav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" style="100%" id="menu">
                        <li>
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-dashboard"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="active-link">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-users"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class="active-link">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-users"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class="active-link">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-users"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class="active-link">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa fa-users"></i> <span>Users</span>
                            </a>
                        </li>

                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" h