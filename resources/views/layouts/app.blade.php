<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Esra Academy')</title>
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="keywords" content="@yield('meta_keywords', '')">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body class="index-page">

<div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="contact-info d-flex align-items-center">
            <a href="mailto:info@esraacademy.com" class="me-3"><i class="bi bi-envelope"></i> info@esraacademy.com</a>
            <a href="tel:+201500250404"><i class="bi bi-phone"></i> +201500250404</a>
        </div>
        <div class="social-links">
            <a href="https://x.com/EsraInstitute?t=71KpHnWom03JmwC_-VvOig&s=09" class="me-2" target="_blank" rel="noopener"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.tiktok.com/@esra.institute?_t=ZS-8wWgAMJWDOK&_r=1" class="me-2" target="_blank" rel="noopener"><i class="bi bi-tiktok"></i></a>
            <a href="https://m.youtube.com/@esrainstitute-t9e" class="me-2" target="_blank" rel="noopener"><i class="bi bi-youtube"></i></a>
            <a href="https://www.instagram.com/esrainstitute?igsh=Njl1b3lhenV1aWF5" class="me-2" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
            <a href="https://www.facebook.com/share/198GY9MDFF/" class="me-2" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
        </div>
    </div>
</div>

<header id="header" class="header d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="{{ asset('assets/img/logo2.png') }}" alt="Esra Academy Logo">
            <span class="sitename ms-2">Esra Institute</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}#hero" class="{{ request()->routeIs('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/') }}#pricing">Pricing</a></li>
                <li><a href="{{ url('/') }}#team">Team</a></li>
                <li><a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a></li>
                <li><a href="{{ url('/') }}#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{ url('/') }}#about">Get Started</a>
    </div>
</header>

<main class="main">
    @yield('content')
</main>

<footer id="footer" class="footer light-background">
    <div class="container text-center py-4">
        <p class="mb-2"><strong>WhatsApp:</strong> +20 1500250404</p>
        <p class="mb-2"><strong>Email:</strong> esrainstitute419@gmail.com</p>
        <p class="mt-3">Made by Technest</p>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@yield('scripts')
</body>
</html> 