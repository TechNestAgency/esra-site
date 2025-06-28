<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Esra Institute</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('2.svg') }}" rel="icon">
    <link href="{{ asset('2.svg') }}" rel="apple-touch-icon">

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

    <!-- Loading Spinner Styles -->
    <style>
        #loading-spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #558580 0%, #C27D37 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
        }

        #loading-spinner.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .spinner-container {
            text-align: center;
            color: white;
        }

        .spinner {
            width: 80px;
            height: 80px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        .spinner-logo {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            animation: pulse 2s ease-in-out infinite;
        }

        .loading-text {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .loading-subtext {
            font-size: 14px;
            opacity: 0.8;
            font-family: 'Poppins', sans-serif;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        /* Hide body content while loading */
        body.loading {
            overflow: hidden;
        }

        /* Ensure content is hidden during loading */
        .main-content {
            opacity: 0;
            transition: opacity 0.5s ease-in;
        }

        .main-content.loaded {
            opacity: 1;
        }
    </style>

    <style>
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .whatsapp-float:hover {
            color: white;
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        /* Ensure GIF loops properly */
        .hero-img {
            animation: none !important; /* Remove any conflicting animations */
        }

        /* Fallback for GIF loading */
        .hero-img[src*=".gif"] {
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
        }

        .top-bar .social-links a {
            transition: transform 0.3s ease;
        }

        .top-bar .social-links a:hover {
            transform: translateY(-3px);
        }

        .info-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease-in-out;
            height: 100%;
            text-align: center;
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .info-card .icon-box {
            margin-bottom: 20px;
        }

        .info-card .icon-box i {
            font-size: 48px;
            color: #558580; /* Use a color from the theme */
            transition: transform 0.3s ease-in-out;
        }

        .info-card:hover .icon-box i {
            transform: scale(1.1) rotate(5deg);
        }

        .info-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }

        .info-card p {
            font-size: 1rem;
            color: #666;
        }

        /* Mobile Navigation Styles */
        .mobile-nav-toggle {
            display: none;
            background: none;
            border: none;
            color: #558580;
            font-size: 28px;
            cursor: pointer;
            padding: 8px;
            border-radius: 5px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1000;
        }

        .mobile-nav-toggle:hover {
            background-color: rgba(85, 133, 128, 0.1);
            color: #558580;
        }

        .mobile-nav-toggle i {
            transition: transform 0.3s ease;
        }

        .mobile-nav-toggle:hover i {
            transform: scale(1.1);
        }

        /* Ensure header stays visible on scroll */
        #header {
            position: relative !important;
            top: 0 !important;
            z-index: 997;
        }

        /* Ensure top bar stays visible */
        .top-bar {
            position: relative;
            z-index: 998;
        }

        /* Override scrolled class behavior to keep header visible */
        body.scrolled #header {
            position: relative !important;
            top: 0 !important;
            transform: none !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        body.scrolled .top-bar {
            position: relative !important;
            transform: none !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        /* Ensure mobile nav toggle stays visible */
        body.scrolled .mobile-nav-toggle {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        /* Mobile Navigation Modal Styles */
        #mobileNavModal .modal-content {
            border: none;
            border-radius: 0;
            min-height: 100vh;
        }

        #mobileNavModal .modal-header {
            background: linear-gradient(135deg, #558580 0%, #C27D37 100%);
            color: white;
            padding: 1.5rem;
        }

        #mobileNavModal .modal-header .btn-close {
            filter: invert(1);
            opacity: 0.8;
        }

        #mobileNavModal .modal-header .btn-close:hover {
            opacity: 1;
        }

        #mobileNavModal .modal-body {
            padding: 2rem 1.5rem;
            background: #f8f9fa;
        }

        .mobile-nav {
            margin-bottom: 2rem;
        }

        .mobile-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mobile-nav-list li {
            margin-bottom: 1rem;
        }

        .mobile-nav-list a {
            display: block;
            padding: 1rem 1.5rem;
            color: #333;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 500;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .mobile-nav-list a:hover {
            background: #558580;
            color: white;
            transform: translateX(10px);
            border-left-color: #C27D37;
            box-shadow: 0 4px 15px rgba(85, 133, 128, 0.3);
        }

        .mobile-nav-list a:active {
            transform: translateX(5px);
        }

        .mobile-nav-list a.active {
            background: #558580;
            color: white;
            border-left-color: #C27D37;
            box-shadow: 0 4px 15px rgba(85, 133, 128, 0.3);
        }

        .mobile-nav-footer {
            padding-top: 2rem;
            border-top: 1px solid #dee2e6;
        }

        .mobile-nav-footer .btn {
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .mobile-nav-footer .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(85, 133, 128, 0.4);
        }

        /* Hide desktop navigation on mobile */
        @media (max-width: 991px) {
            .navmenu {
                display: none !important;
            }
            
            .mobile-nav-toggle {
                display: block;
            }
            
            .header .btn-getstarted {
                display: none;
            }
        }

        /* Show desktop navigation on larger screens */
        @media (min-width: 992px) {
            .mobile-nav-toggle {
                display: none;
            }
            
            .navmenu {
                display: block !important;
            }
            
            .header .btn-getstarted {
                display: inline-block;
            }
        }

        @media (max-width: 767px) {
            .hero-title {
                font-size: 2.2rem !important; /* Adjusted for smaller screens */
                text-shadow: 1px 1px 2px #558580;
                text-align: center;
                line-height: 1.2;
            }

            .hero-description {
                font-size: 1rem;
                text-align: center;
            }

            .header .logo .sitename {
                font-size: 1.4rem; /* Adjust logo text size */
            }

            #header {
                padding: 10px 0;
            }
            
            .top-bar {
                padding: 8px 0;
            }
            
            .top-bar .container {
                flex-direction: column;
                gap: 8px;
            }
            
            .top-bar .contact-info {
                justify-content: center;
                flex-wrap: wrap;
                gap: 10px;
            }
            
            .top-bar .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.8rem !important; /* Further adjustment for very small screens */
                text-align: center;
            }
            
            .header .logo .sitename {
                font-size: 1.2rem;
            }
            
            .top-bar .contact-info {
                flex-direction: column;
                align-items: center;
                gap: 5px;
            }
            
            .top-bar .contact-info a {
                font-size: 10px;
            }
            
            .top-bar .social-links a {
                font-size: 12px;
                padding: 4px;
                margin: 0 2px;
            }
        }
        
        @media (max-width: 360px) {
            .hero-title {
                font-size: 1.6rem !important;
            }
            
            .hero-description {
                font-size: 0.85rem;
            }
            
            .header .logo .sitename {
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body class="index-page loading">

<!-- Loading Spinner -->
<div id="loading-spinner">
    <div class="spinner-container">
        <img src="{{ asset('2.svg') }}" alt="Esra Institute Logo" class="spinner-logo">
        <div class="spinner"></div>
        <div class="loading-text">Esra Institute</div>
        <div class="loading-subtext">Loading...</div>
    </div>
</div>

<!-- Main Content -->
<div class="main-content">

<div class="top-bar" style="background-color: #C27D37;">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div class="contact-info d-flex align-items-center flex-wrap">
            <a href="mailto:info@esraacademy.com" style="color: white;" class="me-3"><i class="bi bi-envelope"></i> info@esraacademy.com</a>
            <a href="tel:+1234567890" style="color: white;"><i class="bi bi-phone"></i> +201500250404</a>
        </div>
        <div class="social-links d-flex">
            <a href="https://x.com/EsraInstitute?t=71KpHnWom03JmwC_-VvOig&s=09" class="me-2" target="_blank" rel="noopener"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.tiktok.com/@esra.institute?_t=ZS-8wWgAMJWDOK&_r=1" class="me-2" target="_blank" rel="noopener"><i class="bi bi-tiktok"></i></a>
            <a href="https://m.youtube.com/@esrainstitute-t9e" class="me-2" target="_blank" rel="noopener"><i class="bi bi-youtube"></i></a>
            <a href="https://www.instagram.com/esrainstitute?igsh=Njl1b3lhenV1aWF5" class="me-2" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
            <a href="https://www.facebook.com/share/198GY9MDFF/" class="me-2" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
        </div>
    </div>
</div>

<header id="header" class="header d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between flex-wrap">

        <a href="{{ route('welcome') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="{{ asset('2.svg') }}" alt="Esra Academy Logo">
            <span class="sitename ms-2" style="color: #558580;">Esra Institute</span>
        </a>

        <!-- Mobile Navigation Toggle -->
        <div class="mobile-nav-toggle d-lg-none">
            <i class="bi bi-list"></i>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul class="d-flex flex-wrap justify-content-center">
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#team">Team</a></li>                <li><a href="{{ route('blog.index') }}">Blog</a></li>                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <a class="btn-getstarted" href="#enrollment" style="background-color: #558580; color: white;">Get Started</a>
    </div>
</header>

<!-- Mobile Navigation Modal -->
<div class="modal fade" id="mobileNavModal" tabindex="-1" aria-labelledby="mobileNavModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header border-0">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('2.svg') }}" alt="Esra Academy Logo" style="width: 40px; height: 40px;">
                    <span class="sitename ms-2" style="color: #558580; font-size: 1.2rem; font-weight: 600;">Esra Institute</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <nav class="mobile-nav">
                    <ul class="mobile-nav-list">
                        <li><a href="#hero" data-bs-dismiss="modal">Home</a></li>
                        <li><a href="#pricing" data-bs-dismiss="modal">Pricing</a></li>
                        <li><a href="#team" data-bs-dismiss="modal">Team</a></li>
                        <li><a href="{{ route('blog.index') }}" data-bs-dismiss="modal">Blog</a></li>
                        <li><a href="#contact" data-bs-dismiss="modal">Contact</a></li>
                    </ul>
                </nav>
                <div class="mobile-nav-footer mt-4">
                    <a href="#enrollment" class="btn btn-primary w-100" data-bs-dismiss="modal" style="background-color: #558580; color: white; padding: 12px 30px; font-size: 1.1rem;">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section" style="background-color: #FFFFFF;">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center mb-5 flex-column-reverse flex-lg-row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="badge-wrapper mb-3 text-center text-lg-start">
                        <div class="d-inline-flex align-items-center rounded-pill" style="background-color:#C27D37; color: white; padding: .4rem .6rem .4rem .4rem">
                            <div class="icon-circle me-2" style="background-color: white; color:#C27D37; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="bi bi-bell"></i>
                            </div>
                            <span class="badge-text me-3" style="font-size: .9rem;color: white;">Quran & Arabic Online</span>
                        </div>
                    </div>

                    <h1 class="hero-title mb-4 text-center text-lg-start" style="color: #558580; font-size: 3.2rem; font-weight: 700; text-shadow: 2px 2px 4px #558580;">Learning the Qur'an, The Arabic language And Islamic Studies</h1>

                    <p class="hero-description mb-4 text-center text-lg-start" style="color: white;">Top quality Quran courses online are available
                        at times convenient for you.</p>

                    <div class="cta-wrapper text-center text-lg-start">
                        <a href="#enrollment" class="btn btn-primary" style="background-color:#C27D37; color: white; border-color: #C27D37; padding: 12px 30px; font-size: 1.2rem;">Free Trial</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image animate-float text-center" style="width: 100%;animation: float 3s ease-in-out infinite;">
                        <video src="{{ asset('web_vid.mp4') }}" alt="Business Growth" class="img-fluid hero-img" loading="lazy" style="width: 100%; height: auto; max-width: 500px;">
                    </div>
                </div>
            </div>


        </div>

    </section><!-- /Hero Section -->


        <!-- Famous Egyptian Quran Reciters Section -->
        <section id="famous-reciters" class="famous-reciters section" style="background-image: url('{{ asset('back.jpg') }}'); background-size: cover; background-position: center; position: relative;" data-aos="fade-up">
            <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255, 255, 255, 0.1);"></div>
            <div class="container" style="position: relative; z-index: 1;">
                <div class="section-title text-center" data-aos="fade-up" style="padding: 40px 0;">
                    <h2 class="text-white" style="font-size: 2.5rem; font-weight: 700; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); position: relative; display: inline-block; color: #558580 !important;">
                        Famous Egyptian Quran Reciters
                        <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 3px; background: linear-gradient(90deg, #ffd700, #ffa500); border-radius: 2px;"></span>
                    </h2>
                    <p class="text-white" style="font-size: 1.2rem; max-width: 600px; margin: 25px auto 0; line-height: 1.6; text-shadow: 1px 1px 2px rgba(0,0,0,0.2); background: rgba(0,0,0,0.2); padding: 15px 25px; border-radius: 8px; backdrop-filter: blur(5px);">Discover the legacy of Egypt's most renowned Quran reciters</p>
                </div>
                <div class="row">
                    <!-- Mohamed Siddiq El-Minshawi -->
                    <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center">
                        <img src="{{asset('hosary.jpeg')}}" class="card-img-top img-fluid rounded" alt="Mahmoud Khalil Al-Hussary">
                        <div class="card-body">
                            <h4 class="card-title">Mahmoud Khalil Al-Hussary</h4>
                            <p class="card-text">Renowned for his precise and melodious recitation, Sheikh Al-Hussary is considered one of the greatest Quran reciters of the 20th century. His recordings are widely used for learning and memorization.</p>
                        </div>
                    </div>
                </div>
                <!-- Mohamed Siddiq El-Minshawi -->
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center">
                        <img src="{{asset('almenshay.jpeg')}}" class="card-img-top img-fluid rounded" alt="Mohamed Siddiq El-Minshawi">
                        <div class="card-body">
                            <h4 class="card-title">Mohamed Siddiq El-Minshawi</h4>
                            <p class="card-text">Known for his emotional and spiritual style, Sheikh El-Minshawi's recitations are beloved by listeners around the world. He played a major role in popularizing Quranic recitation globally.</p>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center">
                        <img src="{{asset('abdelbaset.jpeg')}}" class="card-img-top img-fluid rounded" alt="Abdul Basit Abdus Samad">
                        <div class="card-body">
                            <h4 class="card-title">Abdul Basit Abdus Samad</h4>
                            <p class="card-text">Famous for his powerful and captivating voice, Sheikh Abdul Basit is one of the most celebrated Quran reciters in history. His unique style and mastery have inspired generations.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="why-choose-us section" data-aos="fade-up">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Why Choose Us</h2>
                <p>Experience excellence in Quranic education with our unique approach</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{ asset('prof.jpeg') }}" alt="Professional Tutors">
                                <h3 class="card-title">Professional Tutors</h3>
                            </div>
                            <div class="flip-card-back">
                                <h3>Professional Tutors</h3>
                                <p>Learn from certified and experienced Quran teachers who are dedicated to providing personalized guidance and support throughout your learning journey.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{ asset('fle.jpeg') }}" alt="Flexibility">
                                <h3 class="card-title">Flexibility</h3>
                            </div>
                            <div class="flip-card-back">
                                <h3>Flexibility</h3>
                                <p>Choose your preferred schedule and learning pace. Our flexible timing options ensure you can learn at your convenience, making it easier to balance with other commitments.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{ asset('c.jpeg') }}" alt="Easy Learning">
                                <h3 class="card-title">A Comprehensive Curriculum</h3>
                            </div>
                            <div class="flip-card-back">
                                <h3> A Comprehensive Curriculum </h3>
                                <p>Tailored for Non-Native Speakers:
                                    A complete curriculum designed for non-Arabic speakers—combining classical Arabic, Quran memorization, Tajweed, and Islamic understanding, from beginner to advanced levels.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Why Choose Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section" style="padding: 60px 0; background-image: url('{{ asset('back.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; position: relative;" data-aos="fade-up">
        <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7);"></div>
        <div class="container" style="position: relative; z-index: 2;">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stats-item text-center">
                        <i class="bi bi-award" style="font-size: 48px; color: #fff;"></i>
                        <div>
                            <strong style="font-size: 36px; color: #fff;">200+</strong>
                            <p style="font-size: 16px; color: #f1f1f1; margin-top: 5px;">Ijazahs</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stats-item text-center">
                        <i class="bi bi-person-workspace" style="font-size: 48px; color: #fff;"></i>
                        <div>
                            <strong style="font-size: 36px; color: #fff;">100+</strong>
                            <p style="font-size: 16px; color: #f1f1f1; margin-top: 5px;">Teachers</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stats-item text-center">
                        <i class="bi bi-mortarboard" style="font-size: 48px; color: #fff;"></i>
                        <div>
                            <strong style="font-size: 36px; color: #fff;">1500+</strong>
                            <p style="font-size: 16px; color: #f1f1f1; margin-top: 5px;">Students</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stats-item text-center">
                        <i class="bi bi-book" style="font-size: 48px; color: #fff;"></i>
                        <div>
                            <strong style="font-size: 36px; color: #fff;">10</strong>
                            <p style="font-size: 16px; color: #f1f1f1; margin-top: 5px;">Courses</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>
    </section><!-- End Stats Section -->

    <!-- Live Sessions Gallery Section -->
    <section id="live-sessions" class="live-sessions section py-5" style="background-color: #f8f9fa;" data-aos="fade-up">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 2px; position: relative; display: inline-block;">
                    Live Session Highlights
                    <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 3px; background: linear-gradient(90deg, #ffd700, #ffa500); border-radius: 2px;"></span>
                </h2>
                <p class="text-muted">Experience our engaging live sessions and interactive learning environment</p>
            </div>

            <div class="row g-4">
                @for ($i = 1; $i <= 4; $i++)
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="video-card">
                        <div class="video-wrapper">
                            <video class="w-100 rounded shadow" controls poster="{{ asset($i . '.jpeg') }}">
                                <source src="{{ asset($i . '.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-info p-3">
                            <h4 class="mb-2">Live Session {{ $i }}</h4>
                            <p class="text-muted mb-0">Watch our engaging live teaching session</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Our Courses Section -->
    <section id="courses" class="courses section" style="background-image: url('{{ asset('back.jpg') }}'); background-size: cover; background-position: center; position: relative;" data-aos="fade-up">
        <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(85, 79, 79, 0.7);"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="section-title text-center" data-aos="fade-up" style="padding: 40px 0;">
                <h2 class="text-white" style="font-size: 2.5rem; font-weight: 700; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); position: relative; display: inline-block;">
                    Our Courses
                    <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 3px; background: linear-gradient(90deg, #ffd700, #ffa500); border-radius: 2px;"></span>
                </h2>
                <p class="text-white" style="font-size: 1.2rem; max-width: 600px; margin: 25px auto 0; line-height: 1.6; text-shadow: 1px 1px 2px rgba(0,0,0,0.2); background: rgba(0,0,0,0.2); padding: 15px 25px; border-radius: 8px; backdrop-filter: blur(5px);">Explore our comprehensive Quranic education programs</p>
            </div>
            <div class="row">
                <!-- 1. Arabic Language Course (English) -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('1.jpeg') }}" class="img-fluid" alt="Arabic Language Course">
                        </div>
                        <div class="course-content">
                            <h3>Arabic Language Course</h3>
                            <p>Learn the fundamentals of the Arabic language through engaging lessons and activities.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#arabicModal" style="background-color: #558580; color: white; border-color: #558580;">Course Details</button>
                        </div>
                    </div>
                </div>

                <!-- 2. Quran Memorization Course (English) -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('2.jpeg') }}" class="img-fluid" alt="Quran Memorization Course">
                        </div>
                        <div class="course-content">
                            <h3>Quran Memorization Course</h3>
                            <p>Step-by-step memorization techniques for long-term retention of the Holy Quran.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#memorizationModal" style="background-color: #558580; color: white; border-color: #558580;">Course Details</button>
                        </div>
                    </div>
                </div>

                <!-- 3. Tajweed Course (English) -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('3.jpeg') }}" class="img-fluid" alt="Tajweed Course">
                        </div>
                        <div class="course-content">
                            <h3>Tajweed Course</h3>
                            <p>Master the rules of Quranic pronunciation and recitation with expert guidance.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tajweedModal" style="background-color: #558580; color: white; border-color: #558580;">Course Details</button>
                        </div>
                    </div>
                </div>

                <!-- 4. Islamic Studies Course (English) -->
                <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('4.jpeg') }}" class="img-fluid" alt="Islamic Studies Course">
                        </div>
                        <div class="course-content">
                            <h3>Islamic Studies Course</h3>
                            <p>Comprehensive study of Islamic beliefs, history, and daily life teachings.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#islamicStudiesModal" style="background-color: #558580; color: white; border-color: #558580;">Course Details</button>
                        </div>
                    </div>
                </div>

                <!-- 5. Comprehensive Course (English) -->
                <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('5.jpeg') }}" class="img-fluid" alt="Comprehensive Course">
                        </div>
                        <div class="course-content">
                            <h3>Comprehensive Course</h3>
                            <p>Quran, Islamic Studies, and Arabic Language in one complete program.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprehensiveModal" style="background-color: #558580; color: white; border-color: #558580;">Course Details</button>
                        </div>
                    </div>
                </div>

                <!-- 6. Arabic: تعلم اللغة العربية -->
                <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('6.jpeg') }}" class="img-fluid" alt="تعلم اللغة العربية">
                        </div>
                        <div class="course-content">
                            <h3>تعلم اللغة العربية</h3>
                            <p>دروس تفاعلية لتعلم أساسيات اللغة العربية ومهاراتها.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#arabicModalAr" style="background-color: #558580; color: white; border-color: #558580;">تفاصيل الدورة</button>
                        </div>
                    </div>
                </div>

                <!-- 7. Arabic: تحفيظ القرآن الكريم -->
                <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-delay="700">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('7.jpeg') }}" class="img-fluid" alt="تحفيظ القرآن الكريم">
                        </div>
                        <div class="course-content">
                            <h3>تحفيظ القرآن الكريم</h3>
                            <p>طرق فعالة لحفظ القرآن الكريم مع مراجعة مستمرة وفهم للآيات.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#memorizationModalAr" style="background-color: #558580; color: white; border-color: #558580;">تفاصيل الدورة</button>
                        </div>
                    </div>
                </div>

                <!-- 8. Arabic: تجويد القرآن الكريم -->
                <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-delay="800">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('8.jpeg') }}" class="img-fluid" alt="تجويد القرآن الكريم">
                        </div>
                        <div class="course-content">
                            <h3>تجويد القرآن الكريم</h3>
                            <p>إتقان أحكام التجويد والنطق السليم للحروف مع تطبيق عملي للآيات.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tajweedModalAr" style="background-color: #558580; color: white; border-color: #558580;">تفاصيل الدورة</button>
                        </div>
                    </div>
                </div>

                <!-- 9. Arabic: تعلم العلوم الإسلامية -->
                <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-delay="900">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('9.jpeg') }}" class="img-fluid" alt="تعلم العلوم الإسلامية">
                        </div>
                        <div class="course-content">
                            <h3>تعلم العلوم الإسلامية</h3>
                            <p>دراسة شاملة للعقيدة والتاريخ الإسلامي وتعاليم الحياة اليومية.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#islamicStudiesModalAr" style="background-color: #558580; color: white; border-color: #558580;">تفاصيل الدورة</button>
                        </div>
                    </div>
                </div>

                <!-- 10. Comprehensive Course (Arabic) -->
                <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-delay="1000">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('10.jpeg') }}" class="img-fluid" alt="الدورة الشاملة">
                        </div>
                        <div class="course-content">
                            <h3>الدورة الشاملة</h3>
                            <p>برنامج متكامل يشمل القرآن الكريم، العلوم الإسلامية، واللغة العربية.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprehensiveModalAr" style="background-color: #558580; color: white; border-color: #558580;">تفاصيل الدورة</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Our Courses Section -->

    <!-- Articles Section -->
    <section id="articles" class="articles section" data-aos="fade-up">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Latest Articles</h2>
                <p>Explore our latest insights and educational resources</p>
            </div>

            <div class="row">
                @foreach($articles as $article)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="article-item">
                        <div class="article-img">
                            <img src="{{ asset($article->image) }}" class="img-fluid" alt="{{ $article->title }}">
                        </div>
                        <div class="article-content">
                            <h3>{{ $article->title }}</h3>
                            <p>{{ Str::limit($article->meta_description, 150) }}</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal{{ $article->id }}" style="background-color: #558580; border-color: #558580;">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Article Modal -->
                <div class="modal fade" id="articleModal{{ $article->id }}" tabindex="-1" aria-labelledby="articleModal{{ $article->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="articleModal{{ $article->id }}Label">{{ $article->title }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($article->image) }}" class="img-fluid mb-4" alt="{{ $article->title }}">
                                <div class="article-content">
                                    {!! $article->content !!}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="course-tajweed.html" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- /Articles Section -->

    <!-- Course Modals -->
    <!-- Tajweed Modal -->
    <div class="modal fade" id="tajweedModal" tabindex="-1" aria-labelledby="tajweedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tajweedModalLabel">Tajweed Essentials</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/tajweed.jpeg" class="img-fluid rounded" alt="Tajweed Essentials">
                        </div>
                        <div class="col-md-6">
                            <h4>Course Overview</h4>
                            <p>Master the art of Quranic recitation with our comprehensive Tajweed course. This program is designed to help you understand and apply the rules of Tajweed correctly.</p>

                            <h5>What You'll Learn:</h5>
                            <ul>
                                <li>Rules of Noon Sakinah and Tanween</li>
                                <li>Rules of Meem Sakinah</li>
                                <li>Rules of Qalqalah</li>
                                <li>Proper pronunciation of Arabic letters</li>
                                <li>Practical application with Quranic verses</li>
                            </ul>

                            <h5>Course Duration:</h5>
                            <p>12 weeks (2 hours per week)</p>

                            <h5>Level:</h5>
                            <p>Beginner to Intermediate</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="course-tajweed.html" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Arabic Modal -->
    <div class="modal fade" id="arabicModal" tabindex="-1" aria-labelledby="arabicModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="arabicModalLabel">Arabic for Beginners</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/arabic.jpeg" class="img-fluid rounded" alt="Arabic for Beginners">
                        </div>
                        <div class="col-md-6">
                            <h4>Course Overview</h4>
                            <p>Start your journey in learning Arabic with our beginner-friendly course. We focus on Quranic vocabulary and essential grammar to help you understand the language of the Quran.</p>

                            <h5>What You'll Learn:</h5>
                            <ul>
                                <li>Arabic alphabet and pronunciation</li>
                                <li>Basic grammar structures</li>
                                <li>Common Quranic vocabulary</li>
                                <li>Simple sentence formation</li>
                                <li>Reading and writing skills</li>
                            </ul>

                            <h5>Course Duration:</h5>
                            <p>16 weeks (2 hours per week)</p>

                            <h5>Level:</h5>
                            <p>Beginner</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="course-arabic.html" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Memorization Modal -->
    <div class="modal fade" id="memorizationModal" tabindex="-1" aria-labelledby="memorizationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="memorizationModalLabel">Quran Memorization</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/quran_tahfeez.jpeg" class="img-fluid rounded" alt="Quran Memorization">
                        </div>
                        <div class="col-md-6">
                            <h4>Course Overview</h4>
                            <p>Learn effective techniques for memorizing the Holy Quran with our specialized memorization course. Our structured approach helps you retain what you learn for a lifetime.</p>

                            <h5>What You'll Learn:</h5>
                            <ul>
                                <li>Memorization techniques and strategies</li>
                                <li>Revision methods for long-term retention</li>
                                <li>Proper pronunciation while memorizing</li>
                                <li>Understanding the meaning of verses</li>
                                <li>Building a daily memorization routine</li>
                            </ul>

                            <h5>Course Duration:</h5>
                            <p>Ongoing (Flexible schedule)</p>

                            <h5>Level:</h5>
                            <p>All Levels</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="course-memorization.html" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Islamic Studies Modal -->
    <div class="modal fade" id="islamicStudiesModal" tabindex="-1" aria-labelledby="islamicStudiesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="islamicStudiesModalLabel">Islamic Studies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/islamic_studies.jpeg" class="img-fluid rounded" alt="Islamic Studies">
                        </div>
                        <div class="col-md-6">
                            <h4>Course Overview</h4>
                            <p>Explore the rich heritage of Islamic knowledge through our comprehensive Islamic Studies course. Gain a deeper understanding of Islamic beliefs, history, and practices.</p>

                            <h5>What You'll Learn:</h5>
                            <ul>
                                <li>Islamic beliefs and principles</li>
                                <li>Islamic history and civilization</li>
                                <li>Fiqh (Islamic jurisprudence)</li>
                                <li>Islamic ethics and manners</li>
                                <li>Contemporary Islamic issues</li>
                            </ul>

                            <h5>Course Duration:</h5>
                            <p>24 weeks (2 hours per week)</p>

                            <h5>Level:</h5>
                            <p>Intermediate</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="course-islamic-studies.html" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Hadith Modal -->
    <div class="modal fade" id="hadithModal" tabindex="-1" aria-labelledby="hadithModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hadithModalLabel">Introduction to Hadith</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/WhatsApp Image 2025-05-19 at 23.31.25.jpeg" class="img-fluid rounded" alt="Introduction to Hadith">
                        </div>
                        <div class="col-md-6">
                            <h4>Course Overview</h4>
                            <p>Discover the wisdom of Prophet Muhammad ﷺ through the study of Hadith. This course provides a comprehensive introduction to the science of Hadith and its importance in Islamic life.</p>

                            <h5>What You'll Learn:</h5>
                            <ul>
                                <li>Introduction to Hadith sciences</li>
                                <li>Major Hadith collections</li>
                                <li>Understanding Hadith terminology</li>
                                <li>Authenticity of Hadith</li>
                                <li>Application of Hadith in daily life</li>
                            </ul>

                            <h5>Course Duration:</h5>
                            <p>16 weeks (2 hours per week)</p>

                            <h5>Level:</h5>
                            <p>Intermediate</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="course-hadith.html" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Seerah Modal -->
    <div class="modal fade" id="seerahModal" tabindex="-1" aria-labelledby="seerahModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="seerahModalLabel">Seerah of the Prophet ﷺ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/memorization.jpeg" class="img-fluid rounded" alt="Seerah of the Prophet">
                        </div>
                        <div class="col-md-6">
                            <h4>Course Overview</h4>
                            <p>Embark on a journey through the life of Prophet Muhammad ﷺ. This course provides a detailed study of the Prophet's life, his teachings, and their relevance to modern times.</p>

                            <h5>What You'll Learn:</h5>
                            <ul>
                                <li>Early life of Prophet Muhammad ﷺ</li>
                                <li>Prophetic mission and challenges</li>
                                <li>Major events in Islamic history</li>
                                <li>Prophet's character and teachings</li>
                                <li>Lessons for contemporary life</li>
                            </ul>

                            <h5>Course Duration:</h5>
                            <p>20 weeks (2 hours per week)</p>

                            <h5>Level:</h5>
                            <p>All Levels</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="course-seerah.html" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>




    <section id="pricing" class="pricing section light-background" data-aos="fade-up">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Pricing Plans</h2>
            <p>Choose a plan that suits your needs. All plans include a free trial lesson.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 justify-content-center">

                <!-- The Little Sheikh Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3>The Little Sheikh</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">32</span>
                            <span class="period">/ month</span>
                        </div>
                        <p class="description">Perfect for young learners starting their journey with the Quran.</p>

                        <h4>What's Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Quraan Recitation
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Tajweed Rules
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                The first step
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 sessions / week
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                4 hours / month
                            </li>
                        </ul>

                        <a href="#contact" class="btn btn-primary" style="box-shadow: 0 0 15px rgba(40, 167, 69, 0.8); background-color: #558580; border-color: #558580; color: white;">
                            Start Free Trial
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- The Pro Muslim Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Popular</div>
                        <h3>The Pro Muslim</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">49</span>
                            <span class="period">/ month</span>
                        </div>
                        <p class="description">For the dedicated student seeking comprehensive knowledge.</p>

                        <h4>What's Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Deep Islamic Foundation
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Recitation of Quraan
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Arabic Classes
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                4 sessions / week
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                8 hours / month
                            </li>
                        </ul>

                        <a href="#contact" class="btn btn-light" style="box-shadow: 0 0 15px rgba(40, 167, 69, 0.8); background-color: #558580; border-color: #558580; color: white;">
                            Start Free Trial
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- On Demand Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h3>On Demand</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">9</span>
                            <span class="period">/ hour</span>
                        </div>
                        <p class="description">Flexible learning tailored to your specific needs.</p>

                        <h4>What's Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Arabic Language
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Quran Recitation
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Fiqh, Aqidah, Tafseer
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 Free Trial Lesson
                            </li>
                        </ul>

                        <a href="#contact" class="btn btn-primary" style="box-shadow: 0 0 15px rgba(40, 167, 69, 0.8); background-color: #558580; border-color: #558580; color: white;">
                            Start Free Trial
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Pricing Section -->


    <section id="team" class="team section light-background" data-aos="fade-up">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Team</h2>
            <p>Meet our dedicated team of qualified teachers</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="team-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 800,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": 1,
                      "spaceBetween": 30,
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                      "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                      },
                      "breakpoints": {
                        "576": {
                          "slidesPerView": 2
                        },
                        "768": {
                          "slidesPerView": 3
                        },
                        "992": {
                          "slidesPerView": 4
                        }
                      }
                    }
                </script>
                <div class="swiper-wrapper">
                    <!-- Sister Esraa -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_fem1.jpeg') }}" class="card-img-top" alt="Sister Esraa">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sister Esraa</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#esraaModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Brother Ahmed -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_m1.jpeg') }}" class="card-img-top" alt="Brother Ahmed">
                            <div class="card-body text-center">
                                <h5 class="card-title">Brother Ahmed</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ahmedModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ms. Norhan Eid -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_fem2.jpeg') }}" class="card-img-top" alt="Ms. Norhan Eid">
                            <div class="card-body text-center">
                                <h5 class="card-title">Ms. Norhan Eid</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#norhanModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Brother Muhammad -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_m2.jpeg') }}" class="card-img-top" alt="Brother Muhammad">
                            <div class="card-body text-center">
                                <h5 class="card-title">Brother Muhammad</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#muhammadModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Sister Khadijah -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_fem3.jpeg') }}" class="card-img-top" alt="Sister Khadijah">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sister Khadijah</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#khadijahModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Brother Yusuf -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_m3.jpeg') }}" class="card-img-top" alt="Brother Yusuf">
                            <div class="card-body text-center">
                                <h5 class="card-title">Brother Yusuf</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#yusufModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Sister Noor -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_fem4.jpeg') }}" class="card-img-top" alt="Sister Noor">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sister Noor</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noorModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Brother Zayd -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_m4.jpeg') }}" class="card-img-top" alt="Brother Zayd">
                            <div class="card-body text-center">
                                <h5 class="card-title">Brother Zayd</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#zaydModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Sister Zahra -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_fem5.jpeg') }}" class="card-img-top" alt="Sister Zahra">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sister Zahra</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#zahraModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Sister Asmaa -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_fem1.jpeg') }}" class="card-img-top" alt="Sister Asmaa">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sister Asmaa</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#asmaaModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Sister Sameha -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_fem2.jpeg') }}" class="card-img-top" alt="Sister Sameha">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sister Sameha</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#samehaModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Sister Aya -->
                    <div class="swiper-slide">
                        <div class="card h-100">
                            <img src="{{ asset('tet_fem3.jpeg') }}" class="card-img-top" alt="Sister Aya">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sister Aya</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ayaModal" style="background-color: #558580; border-color: #558580;">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

    </section><!-- /Team Section -->

    <style>
        .team-slider {
            position: relative;
            padding: 0 50px;
            margin-bottom: 40px; /* Add space for pagination */
        }
        .swiper-button-prev,
        .swiper-button-next {
            color: var(--accent-color);
            background: rgba(255, 255, 255, 0.9);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .swiper-button-prev:after,
        .swiper-button-next:after {
            font-size: 18px;
        }
        .swiper-button-prev {
            left: 0;
        }
        .swiper-button-next {
            right: 0;
        }
        .swiper-pagination {
            bottom: -30px !important; /* Move pagination below the slider */
        }
        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: #ccc;
            opacity: 1;
        }
        .swiper-pagination-bullet-active {
            background: var(--accent-color);
        }
        .card {
            transition: transform 0.3s ease;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
        .modal-body img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        /* Live Sessions Gallery Styles */
        .video-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .video-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 15px 15px 0 0;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }

        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .video-card:hover .video-wrapper video {
            transform: scale(1.02);
        }

        .video-info {
            background: #fff;
            border-top: 1px solid rgba(0,0,0,0.1);
            padding: 1rem;
        }

        .video-info h4 {
            color: #333;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .video-info p {
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .video-card {
                margin-bottom: 20px;
            }
        }
    </style>

    <!-- Team Modals -->
    <!-- Sister Esraa Modal -->
    <div class="modal fade" id="esraaModal" tabindex="-1" aria-labelledby="esraaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="esraaModalLabel">Sister Esraa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_fem1.jpeg') }}" class="img-fluid rounded" alt="Sister Esraa">
                        </div>
                        <div class="col-md-8">
                            <p>Sister Esraa is a dedicated tutor specializing in Quran, Arabic, and Islamic studies. She holds an Ijazah in Hafs 'an Asim for Quranic recitation, demonstrating a high level of mastery. She earned her Bachelor's degree in Languages and Simultaneous Interpretation from Al-Azhar University. With over 4 years of experience, she has successfully taught a vast number of students from diverse backgrounds across the globe.</p>
                            <p>She delivers comprehensive instruction in Fiqh, Hadith, Tafsir, and Aqeedah.</p>
                            <p>Her teaching methodology is known for being engaging and enjoyable, particularly resonating with children, fostering a love for learning in a fun and interactive environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brother Ahmed Modal -->
    <div class="modal fade" id="ahmedModal" tabindex="-1" aria-labelledby="ahmedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ahmedModalLabel">Brother Ahmed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_m1.jpeg') }}" class="img-fluid rounded" alt="Brother Ahmed">
                        </div>
                        <div class="col-md-8">
                            <p>Brother Ahmed focuses on Islamic Creed (Aqeedah), Fiqh, Tafseer and Hadith. He holds an Ijazah in Hafs 'an Asim, affirming his high mastery of Quranic recitation. A graduate of Al-Azhar University's Faculty of Languages and Simultaneous Interpretation, he effectively teaches a vast number of students globally. With over 3 years of experience.</p>
                            <p>Brother Ahmed's dynamic approach makes learning complex subjects like Fiqh, Hadith, Tafsir, and Aqeedah clear and captivating for all ages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ms. Norhan Eid Modal -->
    <div class="modal fade" id="norhanModal" tabindex="-1" aria-labelledby="norhanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="norhanModalLabel">Ms. Norhan Eid</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_fem2.jpeg') }}" class="img-fluid rounded" alt="Ms. Norhan Eid">
                        </div>
                        <div class="col-md-8">
                            <p>Ms. Norhan Eid is a dedicated teacher specializing in Qur'an, Tajweed, Islamic Studies, Arabic language, and reading skills. She holds a Bachelor's degree from the Faculty of Education – Department of Biology and Geology. With over four years of teaching experience, she has taught and guided numerous students across various levels in both Islamic and linguistic disciplines.</p>
                            <p>Known for her balanced and nurturing teaching style, she strives to instill authentic Islamic values while enhancing her students' language and reading abilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brother Muhammad Modal -->
    <div class="modal fade" id="muhammadModal" tabindex="-1" aria-labelledby="muhammadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="muhammadModalLabel">Brother Muhammad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_m2.jpeg') }}" class="img-fluid rounded" alt="Brother Muhammad">
                        </div>
                        <div class="col-md-8">
                            <p>Brother Muhammad is a highly experienced educator specializing in Quranic recitation and Tajweed. He holds a Bachelor's degree in Engineering from Al-Azhar University, complementing his profound Islamic knowledge. He possesses an Ijazah in Hafs 'an Asim, reflecting his mastery of Quranic expertise.</p>
                            <p>Over four years of impactful teaching, he has successfully guided hundreds of students worldwide, helping them perfect their Quranic reading. Brother Muhammad is renowned for his excellent teaching style, making the intricacies of Tajweed accessible and engaging for all learners.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sister Khadijah Modal -->
    <div class="modal fade" id="khadijahModal" tabindex="-1" aria-labelledby="khadijahModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="khadijahModalLabel">Sister Khadijah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_fem3.jpeg') }}" class="img-fluid rounded" alt="Sister Khadijah">
                        </div>
                        <div class="col-md-8">
                            <p>Sister Khadijah is a dedicated teacher of Fiqh and Islamic Jurisprudence. She holds a Bachelor's degree in Sharia from Al-Azhar University. With over 6 years of experience, she has guided a vast number of students worldwide, illuminating complex rulings with clarity.</p>
                            <p>Sister Khadijah's teaching is known for its insightful analysis and practical relevance, making Islamic knowledge accessible and applicable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brother Yusuf Modal -->
    <div class="modal fade" id="yusufModal" tabindex="-1" aria-labelledby="yusufModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="yusufModalLabel">Brother Yusuf</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_m3.jpeg') }}" class="img-fluid rounded" alt="Brother Yusuf">
                        </div>
                        <div class="col-md-8">
                            <p>Brother Yusuf is a distinguished educator specializing in Arabic Language and Conversational Skills. A graduate of the Faculty of Arabic Language at Al-Azhar University, he brings a deep understanding of linguistic. With over 5 years of experience, he's empowered countless students globally to achieve fluency.</p>
                            <p>Brother Yusuf's approach makes learning Arabic dynamic and interactive, ensuring practical application and confident communication.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sister Noor Modal -->
    <div class="modal fade" id="noorModal" tabindex="-1" aria-labelledby="noorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="noorModalLabel">Sister Noor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_fem4.jpeg') }}" class="img-fluid rounded" alt="Sister Noor">
                        </div>
                        <div class="col-md-8">
                            <p>Sister Noor is a dynamic educator focusing on Children's Quran & Arabic, celebrated for her engaging and creative teaching methods. She holds a Bachelor's degree from the Faculty of Education at Cairo University, with a strong background in Islamic studies from Al-Azhar.</p>
                            <p>With over 5 years of experience, she has successfully introduced young learners globally to the joy of Quran and Arabic. Sister Noor's classes are known for being fun, interactive, and highly effective, building a strong, loving connection to Islam from an early age.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brother Zayd Modal -->
    <div class="modal fade" id="zaydModal" tabindex="-1" aria-labelledby="zaydModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="zaydModalLabel">Brother Zayd</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_m4.jpeg') }}" class="img-fluid rounded" alt="Brother Zayd">
                        </div>
                        <div class="col-md-8">
                            <p>Brother Zayd specializes in Foundational Islamic Principles and Character Development. A graduate of the Faculty of Da'wah and Islamic Culture from Al-Azhar University, he combines academic rigor with a profound understanding of spiritual growth.</p>
                            <p>With over 4 years of experience, he has inspired countless students worldwide to embody Islamic values. Brother Zayd is particularly valued for his ability to connect with each student individually, fostering both intellectual understanding and practical application of Islamic ethics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sister Zahra Modal -->
    <div class="modal fade" id="zahraModal" tabindex="-1" aria-labelledby="zahraModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="zahraModalLabel">Sister Zahra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_fem5.jpeg') }}" class="img-fluid rounded" alt="Sister Zahra">
                        </div>
                        <div class="col-md-8">
                            <p>For parents seeking true conversational fluency in Arabic, Sister Zahra offers unparalleled expertise. A distinguished graduate of Al-Azhar's Faculty of Arabic Language, her specialization extends far beyond grammar to cultivating authentic, natural communication skills.</p>
                            <p>She leverages over 7 years of dynamic and engaging experience to create an immersive learning environment where children thrive. Sister Zahra's classes are not merely about vocabulary acquisition; they are designed to build confident, practical Arabic communication, empowering students to effortlessly engage with the language and its rich cultural heritage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sister Asmaa Modal -->
    <div class="modal fade" id="asmaaModal" tabindex="-1" aria-labelledby="asmaaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="asmaaModalLabel">Sister Asmaa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_fem1.jpeg') }}" class="img-fluid rounded" alt="Sister Asmaa">
                        </div>
                        <div class="col-md-8">
                            <p>Sister Asmaa focuses on Quran, Arabic and Islamic studies. She earned her Bachelor's in language and translation from Al Azhar university. With 3 years of experience, she has educated more than 40 students on Islamic studies. She is a certified Hafiza.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sister Sameha Modal -->
    <div class="modal fade" id="samehaModal" tabindex="-1" aria-labelledby="samehaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="samehaModalLabel">Sister Sameha</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_fem2.jpeg') }}" class="img-fluid rounded" alt="Sister Sameha">
                        </div>
                        <div class="col-md-8">
                            <p>Sister Sameha is 23 years old and from Egypt. She is studying at the faculty of general education, English department, Minya University. She has been working in this field since 2021 and has gained extensive experience in teaching Quran, Tajweed, Arabic and Islamic studies.</p>
                            <p>She is skilled at working with students of all ages and can teach Noor Albayan and Arabic conversation from Almadina book and "Alarabya bayna yadayk" book. She has taught many students from various countries including USA, India, England, Pakistan, Canada, Yemen, Somalia and Sudan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sister Aya Modal -->
    <div class="modal fade" id="ayaModal" tabindex="-1" aria-labelledby="ayaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ayaModalLabel">Sister Aya</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('tet_fem3.jpeg') }}" class="img-fluid rounded" alt="Sister Aya">
                        </div>
                        <div class="col-md-8">
                            <p>Sister Aya graduated from Al-Azhar University, Faculty of Languages and Translation. Additionally, she holds a one-year teaching diploma from Al-Azhar and has completed several courses to prepare for becoming a Qur'an tutor. As a Hafiz of the Qur'an, she brings four years of experience teaching Qur'an, Tajweed, and Arabic to non-Arabic speakers.</p>
                            <p>She believes in creating supportive and engaging lesson plans to foster a positive environment where students can learn and grow. She also incorporates technology—such as educational games, videos, and interactive websites—to make lessons more dynamic and enjoyable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section" data-aos="fade-up">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Our Happy Customers</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="testimonials-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 800,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": 1,
                      "spaceBetween": 30,
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                      "breakpoints": {
                        "768": {
                          "slidesPerView": 2
                        },
                        "1200": {
                          "slidesPerView": 3
                        }
                      }
                    }
                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-moon quote-icon"></i>
                                    Alhamdulillah, my experience with Esra Academy has been transformative. The Quran classes are engaging and the teachers are truly dedicated to helping us understand the words of Allah (SWT).
                                </p>
                            </div>
                            <div class="testimonial-profile">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="profile-info">
                                    <img src="assets/img/test_girl.png" alt="Profile Image">
                                    <div>
                                        <h3>Fatimah Al-Zahra</h3>
                                        <h4>Quran Student</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-book quote-icon"></i>
                                    The Arabic lessons at Esra Academy have helped me read and understand the Quran better. The teachers are patient and always encourage us to do our best.
                                </p>
                            </div>
                            <div class="testimonial-profile">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="profile-info">
                                    <img src="assets/img/test_man1.png" alt="Profile Image">
                                    <div>
                                        <h3>Omar Ibn Yusuf</h3>
                                        <h4>Arabic Student</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-mosque quote-icon"></i>
                                    Esra Academy's Islamic Studies program has deepened my understanding of Islam and brought me closer to my faith. Jazakum Allahu khairan to all the teachers!
                                </p>
                            </div>
                            <div class="testimonial-profile">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="profile-info">
                                    <img src="assets/img/test_girl.png" alt="Profile Image">
                                    <div>
                                        <h3>Aisha Siddiqah</h3>
                                        <h4>Islamic Studies Student</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-star-and-crescent quote-icon"></i>
                                    I am grateful for the supportive community at Esra Academy. The memorization techniques taught here made it easy for me to remember surahs and ayat.
                                </p>
                            </div>
                            <div class="testimonial-profile">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="profile-info">
                                    <img src="assets/img/test_man2.png" alt="Profile Image">
                                    <div>
                                        <h3>Yusuf Al-Ansari</h3>
                                        <h4>Memorization Student</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-journal-richtext quote-icon"></i>
                                    The teachers at Esra Academy inspire me to learn more about my deen every day. May Allah reward them for their efforts and dedication.
                                </p>
                            </div>
                            <div class="testimonial-profile">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="profile-info">
                                    <img src="assets/img/test_girl.png" alt="Profile Image">
                                    <div>
                                        <h3>Maryam Bint Ahmed</h3>
                                        <h4>Student</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section" style="background-color: #f8f9fa;" data-aos="fade-up">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
            <p>Get in touch with us to start your Quran and Arabic learning journey</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 mb-5">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="info-card">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h3>Our Location</h3>
                        <p>Egypt</p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="info-card">
                        <div class="icon-box">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <h3>WhatsApp</h3>
                        <p>+20 1500250404</p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="info-card">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <h3>Email</h3>
                        <p>esrainstitute419@gmail.com</p>
                    </div>
                </div>
            </div>

    
        </div>
    </section><!-- /Contact Section -->

    <!-- Enrollment Form Section -->
    <section id="enrollment" class="enrollment section light-background" data-aos="fade-up">
        <div class="container section-title" data-aos="fade-up">
            <h2>Enroll Now</h2>
            <p>Start your learning journey with Esra Academy</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7" data-aos="zoom-in" data-aos-delay="200">
                    <div class="form-wrapper" style="background: linear-gradient(135deg, #ffffff 0%, #f1f3f5 100%); padding: 2rem 2.5rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <form action="{{ route('enroll.store') }}" method="POST" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <div class="input-group" data-aos="fade-right" data-aos-delay="200">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name*" required>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="input-group" data-aos="fade-left" data-aos-delay="200">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Email Address*" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <div class="input-group" data-aos="fade-right" data-aos-delay="300">
                                        <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                        <input type="tel" class="form-control" name="mobile" placeholder="Mobile Number*" required>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="input-group" data-aos="fade-left" data-aos-delay="300">
                                        <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                        <select name="gender" class="form-control" required>
                                            <option value="">Select Gender*</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <div class="input-group" data-aos="fade-right" data-aos-delay="400">
                                        <span class="input-group-text"><i class="bi bi-book"></i></span>
                                        <select name="course" class="form-control" required>
                                            <option value="">Select Course*</option>
                                            <option value="tajweed">Tajweed Essentials</option>
                                            <option value="arabic">Arabic for Beginners</option>
                                            <option value="memorization">Quran Memorization</option>
                                            <option value="islamic_studies">Islamic Studies</option>
                                            <option value="hadith">Introduction to Hadith</option>
                                            <option value="seerah">Seerah of the Prophet ﷺ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="input-group" data-aos="fade-left" data-aos-delay="400">
                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                        <input type="number" class="form-control" name="days_per_week" min="1" max="7" placeholder="Days per week*" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3" data-aos="fade-up" data-aos-delay="500">
                                <label class="form-label">Preferred Days*</label>
                                <div class="row">
                                    <div class="col-md-3 col-6 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_days[]" value="sunday" id="day-sunday">
                                            <label class="form-check-label" for="day-sunday">Sunday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_days[]" value="monday" id="day-monday">
                                            <label class="form-check-label" for="day-monday">Monday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_days[]" value="tuesday" id="day-tuesday">
                                            <label class="form-check-label" for="day-tuesday">Tuesday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_days[]" value="wednesday" id="day-wednesday">
                                            <label class="form-check-label" for="day-wednesday">Wednesday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_days[]" value="thursday" id="day-thursday">
                                            <label class="form-check-label" for="day-thursday">Thursday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_days[]" value="friday" id="day-friday">
                                            <label class="form-check-label" for="day-friday">Friday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_days[]" value="saturday" id="day-saturday">
                                            <label class="form-check-label" for="day-saturday">Saturday</label>
                                        </div>
                                    </div>
                                </div>
                                <small class="form-text text-muted">Select all days that work for you</small>
                            </div>

                            <div class="form-group mt-3" data-aos="fade-up" data-aos-delay="600">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                    <textarea class="form-control" name="message" rows="4" placeholder="Additional Message (Optional)"></textarea>
                                </div>
                            </div>

                         

                            <div class="text-center mt-2" data-aos="zoom-in" data-aos-delay="700">
                                <button type="submit" class="btn btn-primary" style="background: #558580; border: none; padding: 12px 30px; font-weight: 600; transition: all 0.3s ease;">Submit Enrollment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block" data-aos="fade-left" data-aos-delay="300">
                    <img src="{{ asset('man.png') }}" class="img-fluid rounded" alt="Student learning Quran">
                </div>
            </div>
        </div>
    </section><!-- /Enrollment Form Section -->

    </div><!-- /Main Content -->

    <footer id="footer" class="footer light-background">
        <div class="container text-center py-4">
            <p class="mb-2"><strong>WhatsApp:</strong> +20 1500250404</p>
            <p class="mb-2"><strong>Email:</strong> esrainstitute419@gmail.com</p>
            <p class="mt-3">Made by Technest</p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/201500250404" class="whatsapp-float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('.php-email-form').on('submit', function(e) {
                e.preventDefault();
                
                // Disable submit button and show loading state
                const submitBtn = $(this).find('button[type="submit"]');
                const originalBtnText = submitBtn.html();
                submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...');

                // Get form data
                const formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message,
                                confirmButtonColor: '#28a745'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Reset form
                                    $('.php-email-form')[0].reset();
                                }
                            });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = 'An error occurred while submitting the form.';
                        
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                            // Handle validation errors
                            const errors = xhr.responseJSON.errors;
                            errorMessage = Object.values(errors).flat().join('\n');
                        }

                        // Show error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: errorMessage,
                            confirmButtonColor: '#dc3545'
                        });
                    },
                    complete: function() {
                        // Re-enable submit button and restore original text
                        submitBtn.prop('disabled', false).html(originalBtnText);
                    }
                });
            });
        });

        // Loading Spinner Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const loadingSpinner = document.getElementById('loading-spinner');
            const mainContent = document.querySelector('.main-content');
            const body = document.body;

            // Function to hide loading spinner
            function hideLoadingSpinner() {
                // Add hidden class to spinner
                loadingSpinner.classList.add('hidden');
                
                // Remove loading class from body
                body.classList.remove('loading');
                
                // Show main content
                mainContent.classList.add('loaded');
                
                // Remove spinner from DOM after transition
                setTimeout(() => {
                    loadingSpinner.style.display = 'none';
                }, 500);
            }

            // Check if all resources are loaded
            function checkIfLoaded() {
                // Wait for images to load
                const images = document.querySelectorAll('img');
                let loadedImages = 0;
                const totalImages = images.length;

                if (totalImages === 0) {
                    // No images, hide spinner immediately
                    setTimeout(hideLoadingSpinner, 1000);
                    return;
                }

                images.forEach(img => {
                    if (img.complete) {
                        loadedImages++;
                    } else {
                        img.addEventListener('load', () => {
                            loadedImages++;
                            if (loadedImages === totalImages) {
                                setTimeout(hideLoadingSpinner, 500);
                            }
                        });
                        img.addEventListener('error', () => {
                            loadedImages++;
                            if (loadedImages === totalImages) {
                                setTimeout(hideLoadingSpinner, 500);
                            }
                        });
                    }
                });

                // Fallback: hide spinner after 3 seconds regardless
                setTimeout(() => {
                    if (!loadingSpinner.classList.contains('hidden')) {
                        hideLoadingSpinner();
                    }
                }, 3000);
            }

            // Start checking when DOM is ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', checkIfLoaded);
            } else {
                checkIfLoaded();
            }

            // Also check on window load event
            window.addEventListener('load', () => {
                setTimeout(hideLoadingSpinner, 500);
            });
        });

        // Mobile Navigation Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
            const mobileNavModal = new bootstrap.Modal(document.getElementById('mobileNavModal'));

            // Open mobile navigation modal when toggle is clicked
            if (mobileNavToggle) {
                mobileNavToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    mobileNavModal.show();
                });
            }

            // Handle smooth scrolling for mobile navigation links
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-list a[href^="#"]');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        e.preventDefault();
                        
                        // Close modal first
                        mobileNavModal.hide();
                        
                        // Smooth scroll to target after modal closes
                        setTimeout(() => {
                            // Calculate offset to account for header height
                            const headerHeight = document.querySelector('#header').offsetHeight;
                            const topBarHeight = document.querySelector('.top-bar').offsetHeight;
                            const totalOffset = headerHeight + topBarHeight;
                            
                            const targetPosition = targetElement.offsetTop - totalOffset;
                            
                            window.scrollTo({
                                top: targetPosition,
                                behavior: 'smooth'
                            });
                        }, 300);
                    }
                });
            });

            // Add active class to current section in mobile navigation
            function updateMobileNavActive() {
                const sections = document.querySelectorAll('section[id]');
                const mobileNavLinks = document.querySelectorAll('.mobile-nav-list a[href^="#"]');
                
                let currentSection = '';
                const headerHeight = document.querySelector('#header').offsetHeight;
                const topBarHeight = document.querySelector('.top-bar').offsetHeight;
                const totalOffset = headerHeight + topBarHeight + 50; // Add some buffer
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - totalOffset;
                    const sectionHeight = section.offsetHeight;
                    const scrollPosition = window.scrollY;
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        currentSection = section.getAttribute('id');
                    }
                });
                
                mobileNavLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${currentSection}`) {
                        link.classList.add('active');
                    }
                });
            }

            // Update active section on scroll
            window.addEventListener('scroll', updateMobileNavActive);
            
            // Initial update
            updateMobileNavActive();

            // Prevent the default scroll behavior from hiding header
            let lastScrollTop = 0;
            window.addEventListener('scroll', function() {
                const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                // Only update if there's a significant scroll difference
                if (Math.abs(currentScrollTop - lastScrollTop) > 10) {
                    lastScrollTop = currentScrollTop;
                }
            });

            // Override the main.js scroll behavior to keep header visible
            const originalToggleScrolled = window.toggleScrolled;
            if (typeof originalToggleScrolled === 'function') {
                window.toggleScrolled = function() {
                    // Don't add scrolled class that hides header
                    return;
                };
            }

            // Ensure header and top bar are always visible
            function ensureHeaderVisibility() {
                const header = document.querySelector('#header');
                const topBar = document.querySelector('.top-bar');
                const mobileToggle = document.querySelector('.mobile-nav-toggle');
                
                if (header) {
                    header.style.position = 'relative';
                    header.style.top = '0';
                    header.style.transform = 'none';
                    header.style.opacity = '1';
                    header.style.visibility = 'visible';
                }
                
                if (topBar) {
                    topBar.style.position = 'relative';
                    topBar.style.transform = 'none';
                    topBar.style.opacity = '1';
                    topBar.style.visibility = 'visible';
                }
                
                if (mobileToggle) {
                    mobileToggle.style.display = 'block';
                    mobileToggle.style.opacity = '1';
                    mobileToggle.style.visibility = 'visible';
                }
            }

            // Run on load and scroll
            ensureHeaderVisibility();
            window.addEventListener('scroll', ensureHeaderVisibility);
            window.addEventListener('resize', ensureHeaderVisibility);
        });
    </script>

    <!-- Comprehensive Course Modal -->
    <div class="modal fade" id="comprehensiveModal" tabindex="-1" aria-labelledby="comprehensiveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comprehensiveModalLabel">Comprehensive Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('5.jpeg') }}" class="img-fluid rounded" alt="Comprehensive Course">
                        </div>
                        <div class="col-md-6">
                            <h4>Course Overview</h4>
                            <p>Our most comprehensive program combining Quran, Islamic Studies, and Arabic Language in one complete curriculum designed for serious learners.</p>

                            <h5>What You'll Learn:</h5>
                            <ul>
                                <li>Complete Quranic recitation and memorization</li>
                                <li>Advanced Tajweed rules and application</li>
                                <li>Comprehensive Arabic language skills</li>
                                <li>Islamic studies and jurisprudence</li>
                                <li>Practical application in daily life</li>
                            </ul>

                            <h5>Course Duration:</h5>
                            <p>36 weeks (3 hours per week)</p>

                            <h5>Level:</h5>
                            <p>All Levels</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#enrollment" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Arabic Modal (Arabic) -->
    <div class="modal fade" id="arabicModalAr" tabindex="-1" aria-labelledby="arabicModalArLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="arabicModalArLabel">تعلم اللغة العربية</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('6.jpeg') }}" class="img-fluid rounded" alt="تعلم اللغة العربية">
                        </div>
                        <div class="col-md-6">
                            <h4>نظرة عامة على الدورة</h4>
                            <p>ابدأ رحلتك في تعلم اللغة العربية مع دورتنا المبتدئة. نركز على المفردات القرآنية والقواعد الأساسية لمساعدتك على فهم لغة القرآن.</p>

                            <h5>ما ستتعلمه:</h5>
                            <ul>
                                <li>الأبجدية العربية والنطق الصحيح</li>
                                <li>التراكيب النحوية الأساسية</li>
                                <li>المفردات القرآنية الشائعة</li>
                                <li>تكوين الجمل البسيطة</li>
                                <li>مهارات القراءة والكتابة</li>
                            </ul>

                            <h5>مدة الدورة:</h5>
                            <p>16 أسبوع (ساعتان في الأسبوع)</p>

                            <h5>المستوى:</h5>
                            <p>مبتدئ</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    <a href="#enrollment" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">سجل الآن</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Memorization Modal (Arabic) -->
    <div class="modal fade" id="memorizationModalAr" tabindex="-1" aria-labelledby="memorizationModalArLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="memorizationModalArLabel">تحفيظ القرآن الكريم</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('7.jpeg') }}" class="img-fluid rounded" alt="تحفيظ القرآن الكريم">
                        </div>
                        <div class="col-md-6">
                            <h4>نظرة عامة على الدورة</h4>
                            <p>تعلم تقنيات فعالة لحفظ القرآن الكريم مع دورتنا المتخصصة في الحفظ. نهجنا المنظم يساعدك على الاحتفاظ بما تتعلمه مدى الحياة.</p>

                            <h5>ما ستتعلمه:</h5>
                            <ul>
                                <li>تقنيات الحفظ والاستراتيجيات</li>
                                <li>طرق المراجعة للاحتفاظ طويل المدى</li>
                                <li>النطق الصحيح أثناء الحفظ</li>
                                <li>فهم معنى الآيات</li>
                                <li>بناء روتين يومي للحفظ</li>
                            </ul>

                            <h5>مدة الدورة:</h5>
                            <p>مستمرة (جدول مرن)</p>

                            <h5>المستوى:</h5>
                            <p>جميع المستويات</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    <a href="#enrollment" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">سجل الآن</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tajweed Modal (Arabic) -->
    <div class="modal fade" id="tajweedModalAr" tabindex="-1" aria-labelledby="tajweedModalArLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tajweedModalArLabel">تجويد القرآن الكريم</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('8.jpeg') }}" class="img-fluid rounded" alt="تجويد القرآن الكريم">
                        </div>
                        <div class="col-md-6">
                            <h4>نظرة عامة على الدورة</h4>
                            <p>أتقن فن تلاوة القرآن الكريم مع دورتنا الشاملة في التجويد. هذا البرنامج مصمم لمساعدتك على فهم وتطبيق قواعد التجويد بشكل صحيح.</p>

                            <h5>ما ستتعلمه:</h5>
                            <ul>
                                <li>أحكام النون الساكنة والتنوين</li>
                                <li>أحكام الميم الساكنة</li>
                                <li>أحكام القلقلة</li>
                                <li>النطق الصحيح للحروف العربية</li>
                                <li>التطبيق العملي مع الآيات القرآنية</li>
                            </ul>

                            <h5>مدة الدورة:</h5>
                            <p>12 أسبوع (ساعتان في الأسبوع)</p>

                            <h5>المستوى:</h5>
                            <p>مبتدئ إلى متوسط</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    <a href="#enrollment" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">سجل الآن</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Islamic Studies Modal (Arabic) -->
    <div class="modal fade" id="islamicStudiesModalAr" tabindex="-1" aria-labelledby="islamicStudiesModalArLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="islamicStudiesModalArLabel">تعلم العلوم الإسلامية</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('9.jpeg') }}" class="img-fluid rounded" alt="تعلم العلوم الإسلامية">
                        </div>
                        <div class="col-md-6">
                            <h4>نظرة عامة على الدورة</h4>
                            <p>استكشف التراث الغني للمعرفة الإسلامية من خلال دورتنا الشاملة في العلوم الإسلامية. اكتسب فهماً أعمق للعقائد والتاريخ والممارسات الإسلامية.</p>

                            <h5>ما ستتعلمه:</h5>
                            <ul>
                                <li>العقائد والمبادئ الإسلامية</li>
                                <li>التاريخ والحضارة الإسلامية</li>
                                <li>الفقه (الفقه الإسلامي)</li>
                                <li>الأخلاق والآداب الإسلامية</li>
                                <li>القضايا الإسلامية المعاصرة</li>
                            </ul>

                            <h5>مدة الدورة:</h5>
                            <p>24 أسبوع (ساعتان في الأسبوع)</p>

                            <h5>المستوى:</h5>
                            <p>متوسط</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    <a href="#enrollment" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">سجل الآن</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Comprehensive Course Modal (Arabic) -->
    <div class="modal fade" id="comprehensiveModalAr" tabindex="-1" aria-labelledby="comprehensiveModalArLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comprehensiveModalArLabel">الدورة الشاملة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('10.jpeg') }}" class="img-fluid rounded" alt="الدورة الشاملة">
                        </div>
                        <div class="col-md-6">
                            <h4>نظرة عامة على الدورة</h4>
                            <p>برنامجنا الأكثر شمولية يجمع بين القرآن والعلوم الإسلامية واللغة العربية في منهج واحد متكامل مصمم للمتعلمين الجادين.</p>

                            <h5>ما ستتعلمه:</h5>
                            <ul>
                                <li>التلاوة والحفظ الكامل للقرآن</li>
                                <li>قواعد التجويد المتقدمة والتطبيق</li>
                                <li>مهارات اللغة العربية الشاملة</li>
                                <li>العلوم الإسلامية والفقه</li>
                                <li>التطبيق العملي في الحياة اليومية</li>
                            </ul>

                            <h5>مدة الدورة:</h5>
                            <p>36 أسبوع (3 ساعات في الأسبوع)</p>

                            <h5>المستوى:</h5>
                            <p>جميع المستويات</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    <a href="#enrollment" class="btn btn-primary" style="background-color: #558580; border-color: #558580;">سجل الآن</a>
                </div>
            </div>
        </div>
    </div>

    <section id="pricing" class="pricing section light-background" data-aos="fade-up">
</body>

</html>
