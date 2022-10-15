<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- PENAMAAN PADA TAB BAHWA WEB INI ADALAH WEB CV MOTOR --}}
    <title>Welcome &mdash; CV ABC MOTOR</title>
    <meta name="description" content="free Bootstrap 4 Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400, 600, 700" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="../css/slick.css">

    <link rel="stylesheet" href="../css/helpers.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/restaurant.css">
</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">


    <div class="probootstrap-loader"></div>
    <!-- END loader -->

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light {{ Route::is('home') ? '' : 'scrolled awake' }}" id="pb-navbar">
        <div class="container">
            <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="/">
                <img src="../images/restaurant/logo.png" alt="Instant Logo" class="light">
                <img src="../images/restaurant/logo-dark.png" alt="Instant Logo" class="dark">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="ion-navicon"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 {{ request()->isCurrentRoute('home')  ? 'active' : '' }}" href="{{route('home')}}">Home {{ Route::is('home') }}</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 {{ request()->isCurrentRoute('about') ? 'active' : '' }}" href="{{route('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="{{route('home')}}">ABC Motor</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 {{ request()->isCurrentRoute('gallery') ? 'active' : '' }}" href="{{route('gallery')}}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 {{ request()->isCurrentRoute('testimony') ? 'active' : '' }}" href="{{route('testimony')}}">Testimony</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
