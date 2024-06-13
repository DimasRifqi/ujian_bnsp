<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Website SMK Pemuda Krian</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('component.link_css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset('template_asset')}}/img/logoSMK.png" alt="Logo" class="me-3" style="height: 40px;">
            <h2 class="m-0 text-warning">SMK Pemuda Krian</h2>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/profile') }}" class="nav-item nav-link {{ Request::is('profile') ? 'active' : '' }}">Profile</a>
                <a href="{{ url('/galeri') }}" class="nav-item nav-link {{ Request::is('galeri') ? 'active' : '' }}">Galeri</a>
                <a href="{{ url('/ekstra') }}" class="nav-item nav-link {{ Request::is('ekstra') ? 'active' : '' }}">Ekstra</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
