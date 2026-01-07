<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title  -->
    <title>SELDOM TECH</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.png') }}" type="image/x-icon">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/00f0305dec.js" crossorigin="anonymous"></script>
    <!-- Bootstrap  -->

    <!-- Swiper Slider  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- lightGallery css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <!-- Custom CSS  -->
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])

    @livewireStyles
    <style></style>
</head>
<style>
    .splide__slide {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .splide__slide img {
        height: 48px;
        width: auto;
        opacity: 0.8;
    }
</style>

<body class="bg-[rgb(13,13,17)]">
    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- Header Section Start-->
    <header id="header" class="header fixed inset-x-0 top-0 z-30 w-full bg-transparent shadow">
        <div class="container mx-auto px-4">
            <nav id="navbar" class="navbar flex items-center justify-between py-4">
                <div class="logo">
                    <a class="navbar-brand flex items-center" href="/">
                        <img style="max-width:180px; width: 180px;" class="mx-auto"
                            src="{{ asset('assets/images/logo/logo-white.png') }}" alt="logo">
                    </a>
                </div>

                <!-- Hamburger -->
                <button id="hamburger" class="navbar-toggler lg:hidden text-2xl text-gray-700 focus:outline-none"
                    type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <!-- Nav Area -->
                <div id="navbarNav"
                    class="nav-area hidden lg:flex absolute lg:static top-full left-0 w-full lg:w-auto
                       bg-white lg:bg-transparent shadow lg:shadow-none
                       flex-col lg:flex-row items-start lg:items-center gap-6
                       mt-4 lg:mt-0 p-4 lg:p-0">

                    <!-- Nav Links -->
                    <ul
                        class="navbar-nav flex flex-col lg:flex-row gap-4 lg:gap-6
                           me-auto my-2 px-3 my-lg-0 navbar-nav-scroll">

                        <li class="nav-item">
                            <a class="nav-link active font-medium text-gray-800 hover:text-indigo-600 p-2"
                                href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link font-medium text-gray-800 hover:text-indigo-600 p-2"
                                href="#">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link font-medium text-gray-800 hover:text-indigo-600 p-2"
                                href="#">Pricing</a>
                        </li>

                        <!-- More Dropdown -->
                        <li class="nav-item dropdown relative">
                            <a
                                class="nav-link dropdown-toggle font-medium text-gray-800 hover:text-indigo-600 p-2 cursor-pointer">
                                More
                            </a>

                            <ul
                                class="dropdown-menu hidden absolute left-0 mt-2 w-48
                                   bg-white shadow rounded-lg py-2">
                                <li><a class="dropdown-item block px-4 py-2 hover:bg-gray-100"
                                        href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a class="dropdown-item block px-4 py-2 hover:bg-gray-100"
                                        href="terms-of-use.html">Terms of use</a></li>
                                <li><a class="dropdown-item block px-4 py-2 hover:bg-gray-100"
                                        href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </li>

                        <!-- Follow Us Dropdown -->
                        <li class="nav-item dropdown relative">
                            <a
                                class="nav-link dropdown-toggle font-medium text-gray-800 hover:text-indigo-600 p-2 cursor-pointer">
                                Follow Us
                            </a>

                            <ul
                                class="dropdown-menu hidden absolute left-0 mt-2 w-56
                                   bg-white shadow rounded-lg py-2">

                                <li>
                                    <a class="dropdown-item flex items-center px-4 py-2 hover:bg-gray-100"
                                        href="#" target="_blank">
                                        <i class="pe-3 fa-brands fa-bluesky"></i> Bluesky
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item flex items-center px-4 py-2 hover:bg-gray-100"
                                        href="#" target="_blank">
                                        <i class="pe-3 fa-brands fa-x"></i> X
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item flex items-center px-4 py-2 hover:bg-gray-100"
                                        href="#" target="_blank">
                                        <i class="pe-3 fa-brands fa-pinterest"></i> Pinterest
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item flex items-center px-4 py-2 hover:bg-gray-100"
                                        href="#" target="_blank">
                                        <i class="pe-3 fa-brands fa-instagram"></i> Instagram
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <!-- Buttons -->
                    <div class="button-group flex flex-col lg:flex-row gap-3">

                        <a href="login.html"
                            class="btn btn-effect-1 flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-100">
                            Log In
                            <img src="{{ asset('assets/images/icons/power.svg') }}" class="w-4">
                        </a>

                        <a href="register.html"
                            class="btn btn-effect-1 flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-100">
                            Sign Up
                            <img src="{{ asset('assets/images/icons/power.svg') }}" class="w-4">
                        </a>

                        <a href="#" target="_blank"
                            class="btn flex items-center gap-2 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                            <i class='bx  bx-calendar-check text-2xl bx-flashing'></i>

                            Book a Meeting
                        </a>

                    </div>
                </div>
            </nav>
        </div>
    </header>



    <!-- Header Section End-->

    <main>
        <section id="hero_sec" class="hero_sec min-h-70">
            <div class="container grid grid-cols-1 lg:grid-cols-2 gap-2">
                <div>
                    <p
                        class="flex flex-row items-center gap-2 mb-5 rounded-2xl font-bold text-xl border-[1px]  border-gray-600 w-fit px-3 py-1 text-white ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-indigo-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>


                        <span class="text-effect-2 ">Your Business Solution Partner</span>
                    </p>
                    <h1 class="text-xl font-semibold text-white">Welcome to <span class="text-effect-2 ">SELDOM
                            TECH</span></h1>
                    <h1 class="text-4xl md:text-5xl text-white title-font font-bold leading-15 uppercase">
                        We provide Business Solutions for<br>
                        <span id="typing-text" class="text-effect-2 text-4xl md:text-[3.2rem]"></span>
                        <span class="blinking-cursor">|</span>
                    </h1>

                    <p class="text-gray-400 text-lg font-normal mt-4 mb-4">Building digital experiences that inspire
                        trust and growth.</p>
                    <div class="flex gap-2">
                        <button
                            class="btn-effect-2 rounded-4xl text-white  text-sm py-1 px-4  cursor-pointer hover:transform hover:scale-105 ease-in-out duration-300">See
                            Our
                            Projects <span class="infinity-animation-toleft">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 -mb-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>


                            </span></button>
                        <button
                            class="flex items-center border-1  border-indigo-600 rounded-4xl text-white text-sm  pb-1.5 px-4 shadow-sm shadow-white cursor-pointer hover:transform hover:scale-105 ease-in-out duration-300">

                            Book a Sheduled Demo <i class='bx  bx-calendar-check text-2xl ml-2'></i></button>
                    </div>

                </div>
                <div class="hidden lg:block">
                    <img class="w-[70%] -mt-10"
                        src="{{ asset('assets/images/banner/web-development-composition.png') }}" alt="" />
                </div>

            </div>
        </section>
        <!-- partners start -->
        <section class="splide  py-4 bg-gray-500/30 visible!" aria-label="Splide Basic HTML Example">
            <div id="partners-slider" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <a href="#" target="_blank">
                                <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Partner 1">
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#" target="_blank">
                                <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Partner 1">
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#" target="_blank">
                                <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Partner 1">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </section>


        <section id="services-section" class="services-section my-15">
            <div class="container">
                <div class="section-header mb-10">
                    <h2 class="text-center text-white font-bold text-4xl title-font">Our Services</h2>
                    <p class="text-center text-gray-400">We offer a wide range of services to help you achieve your
                        business goals.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bx bx-code"></i>
                        </div>
                        <h3 class="service-title">Custom Software</h3>
                        <p class="service-description">
                            We specialize in creating custom software solutions that meet your specific needs.
                        </p>
                        <ul class="service-list">
                            <li>Web Application</li>
                            <li>Mobile Application</li>
                            <li>Desktop Application</li>
                        </ul>
                        <div class="btn-group">
                            <a href="#" class="btn btn-effect-1 px-10!">Learn More <i
                                    class="bx bx-right-arrow-alt bx-fade-right"></i> </a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bx bx-desktop"></i>
                        </div>
                        <h3 class="service-title">Websites & Apps</h3>
                        <p class="service-description">
                            We design, develop, and deliver custom websites and web applications tailored to our
                            clients.
                        </p>
                        <ul class="service-list">
                            <li>Custom WordPress Development</li>

                            <li>E-commerce Solutions </li>
                            <li>Custom Website Development</li>
                        </ul>
                        <div class="btn-group">
                            <a href="#" class="btn btn-effect-1 px-10!">Learn More <i
                                    class="bx bx-right-arrow-alt bx-fade-right"></i> </a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bx bx-palette"></i>
                        </div>
                        <h3 class="service-title">Branding & Design</h3>
                        <p class="service-description">
                            We specialize in creating business and website UI/UX design, and any graphic content.
                        </p>
                        <ul class="service-list">
                            <li>Business Design</li>
                            <li>Website UI/UX Design</li>
                            <li>Graphic Design</li>
                        </ul>
                        <div class="btn-group">
                            <a href="#" class="btn btn-effect-1 px-10!">Learn More <i
                                    class="bx bx-right-arrow-alt bx-fade-right"></i> </a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bx bx-bar-chart"></i>
                        </div>
                        <h3 class="service-title">Growth Marketing</h3>
                        <p class="service-description">
                            Growth Marketing means digital marketing, such as Facebook, Google Ads, and SEO. It helps
                            you reach more customers and increase your online presence.
                        </p>
                        <ul class="service-list">
                            <li>Digital Marketing</li>
                            <li>Facebook Ads</li>
                            <li>Google Ads</li>
                            <li>SEO</li>
                        </ul>
                        <div class="btn-group">
                            <a href="#" class="btn btn-effect-1 px-10!">Learn More <i
                                    class="bx bx-right-arrow-alt bx-fade-right"></i> </a>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section id="action" class="actiontogen bg-black">
            <div class="container design-area"
                style="background-image: url({{ asset('assets/images/abstract/left.svg') }}),
            url({{ asset('assets/images/abstract/right.svg') }})">
                <div class="flex lg:flex-row flex-col py-1 px-1 justify-center items-center">
                    <div class=" border-1 video">
                        <img src="{{ asset('assets/images/banner/laptop-with-program-code-isometric-icon-software-development-programming.avif') }}"
                            alt="">
                        <a class="various fancybox play" href="" data-fancybox="" data-src="#video-popup"><i
                                class="fa-solid fa-play" aria-hidden="true"></i></a>
                    </div>
                    <div class="flex h-full flex-col justify-center items-start text p-2 lg:pl-10 gap-8">
                        <h2 class="">
                            Boost your Business with
                            <span class="brand">Creativity Solutions</span>
                        </h2>
                        <a href="login.html" class="btn btn-effect-2 flex items-center gap-2">Book a Meeting
                            <i class='bx  bx-calendar-check text-2xl bx-flashing'></i></a>
                    </div>
                </div>
            </div>
        </section>
        <div style="display: none;" id="video-popup">
            <video controls autoplay loop muted playsinline style="width:100%; height:auto;">
                <source src="{{ asset('assets/videos/ai-image-generating.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        {{-- <section id="projects-section" class="projects-section my-10">
            <div class="container">
                <div class="section-header mb-10">
                    <h2 class="text-center text-white font-bold text-4xl title-font">Our Projects</h2>
                    <p class="text-center text-gray-400 w-full lg:w-1/2 mx-auto">We build custom software solutions,
                        websites, and web applications tailored to our clients' specific needs.</p>
                </div>
                <div class="filter-box flex justify-between items-center my-2">
                    <ul class="filter flex-1 flex gap-2">
                        <li class="filter-item inline-flex  text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer active"
                            data-filter="all">All</li>
                        <li class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer"
                            data-filter="branding">Custom Software</li>
                        <li class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer"
                            data-filter="design">Websites & Apps</li>
                        <li class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer"
                            data-filter="development">Branding & Deisgn</li>
                        <li class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer"
                            data-filter="development">Growth Marketing</li>
                    </ul>
                    <div class="search">
                        <div
                            class="inline-flex items-center rounded-2xl px-3 py-1 border border-gray-500 group hover:border-gray-50 transition-all duration-300">
                            <input type="text" placeholder="Search"
                                class="search-input placeholder:text-gray-500 text-gray-300 focus:outline-none focus:border-purple-500/40 ">
                            <i
                                class="bx bx-search -ml-2  text-gray-500 group-hover:text-gray-50 transition-all duration-300"></i>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                    <div
                        class="bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18]
                                border border-white/10 rounded-2xl
                                p-5 flex flex-col h-full
                                transition hover:border-purple-500/40">

                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden mb-4">
                            <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                alt="Project Demo" class="w-full h-48 object-cover">
                        </div>

                        <!-- Category -->
                        <span
                            class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                            Website & Apps <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-2 inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
</svg>
 E-commerce Solutions
                        </span>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mb-2">
                            E-commerce Auto Reply Bot
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6">
                            Automated customer support system handling 1000+ inquiries daily.
                        </p>

                        <!-- Spacer pushes buttons to bottom -->
                        <div class="mt-auto flex items-center gap-3">

                            <!-- Build Mine -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
                                Build Mine →
                            </a>

                            <!-- Demo Button -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                Live Demo
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18]
                                border border-white/10 rounded-2xl
                                p-5 flex flex-col h-full
                                transition hover:border-purple-500/40">

                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden mb-4">
                            <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                alt="Project Demo" class="w-full h-48 object-cover">
                        </div>

                        <!-- Category -->
                        <span
                            class="inline-block w-fit mb-3
                                    text-[10px] px-3 py-1 rounded-full
                                    bg-purple-500/10 text-purple-400">
                            Website & Apps <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-2 inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
</svg>
 E-commerce Solutions
                        </span>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mb-2">
                            E-commerce Auto Reply Bot
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6">
                            Automated customer support system handling 1000+ inquiries daily.
                        </p>

                        <!-- Spacer pushes buttons to bottom -->
                        <div class="mt-auto flex items-center gap-3">

                            <!-- Build Mine -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
                                Build Mine →
                            </a>

                            <!-- Demo Button -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                Live Demo
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18]
                                border border-white/10 rounded-2xl
                                p-5 flex flex-col h-full
                                transition hover:border-purple-500/40">

                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden mb-4">
                            <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                alt="Project Demo" class="w-full h-48 object-cover">
                        </div>

                        <!-- Category -->
                        <span
                            class="inline-block w-fit mb-3
                                text-[10px] px-3 py-1 rounded-full
                                bg-purple-500/10 text-purple-400">
                            Website & Apps > E-commerce Solutions
                        </span>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mb-2">
                            E-commerce Auto Reply Bot
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6">
                            Automated customer support system handling 1000+ inquiries daily.
                        </p>

                        <!-- Spacer pushes buttons to bottom -->
                        <div class="mt-auto flex items-center gap-3">

                            <!-- Build Mine -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
                                Build Mine →
                            </a>

                            <!-- Demo Button -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                Live Demo
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18]
                            border border-white/10 rounded-2xl
                            p-5 flex flex-col h-full
                            transition hover:border-purple-500/40">

                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden mb-4">
                            <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                alt="Project Demo" class="w-full h-48 object-cover">
                        </div>

                        <!-- Category -->
                        <span
                            class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                            Website & Apps > E-commerce Solutions
                        </span>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mb-2">
                            E-commerce Auto Reply Bot
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6">
                            Automated customer support system handling 1000+ inquiries daily.
                        </p>

                        <!-- Spacer pushes buttons to bottom -->
                        <div class="mt-auto flex items-center gap-3">

                            <!-- Build Mine -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                px-4 py-2 rounded-lg
                                border border-purple-500/40
                                text-purple-400 text-sm
                                hover:bg-purple-500 hover:text-white
                                transition">
                                Build Mine →
                            </a>

                            <!-- Demo Button -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                Live Demo
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18]
                            border border-white/10 rounded-2xl
                            p-5 flex flex-col h-full
                            transition hover:border-purple-500/40">

                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden mb-4">
                            <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                alt="Project Demo" class="w-full h-48 object-cover">
                        </div>

                        <!-- Category -->
                        <span
                            class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                            Website & Apps > E-commerce Solutions
                        </span>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mb-2">
                            E-commerce Auto Reply Bot
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6">
                            Automated customer support system handling 1000+ inquiries daily.
                        </p>

                        <!-- Spacer pushes buttons to bottom -->
                        <div class="mt-auto flex items-center gap-3">

                            <!-- Build Mine -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                            px-4 py-2 rounded-lg
                            border border-purple-500/40
                            text-purple-400 text-sm
                            hover:bg-purple-500 hover:text-white
                            transition">
                                Build Mine →
                            </a>

                            <!-- Demo Button -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                            px-4 py-2 rounded-lg
                            border border-white/10
                            text-gray-300 text-sm
                            hover:bg-white/10 hover:text-white
                            transition">
                                Live Demo
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18]
                        border border-white/10 rounded-2xl
                        p-5 flex flex-col h-full
                        transition hover:border-purple-500/40">

                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden mb-4">
                            <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                alt="Project Demo" class="w-full h-48 object-cover">
                        </div>

                        <!-- Category -->
                        <span
                            class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                            Website & Apps > E-commerce Solutions
                        </span>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mb-2">
                            E-commerce Auto Reply Bot
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6">
                            Automated customer support system handling 1000+ inquiries daily.
                        </p>

                        <!-- Spacer pushes buttons to bottom -->
                        <div class="mt-auto flex items-center gap-3">

                            <!-- Build Mine -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                px-4 py-2 rounded-lg
                                border border-purple-500/40
                                text-purple-400 text-sm
                                hover:bg-purple-500 hover:text-white
                                transition">
                                Build Mine →
                            </a>

                            <!-- Demo Button -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                                px-4 py-2 rounded-lg
                                border border-white/10
                                text-gray-300 text-sm
                                hover:bg-white/10 hover:text-white
                                transition">
                                Live Demo
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18]
                        border border-white/10 rounded-2xl
                        p-5 flex flex-col h-full
                        transition hover:border-purple-500/40">

                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden mb-4">
                            <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                alt="Project Demo" class="w-full h-48 object-cover">
                        </div>

                        <!-- Category -->
                        <span
                            class="inline-block w-fit mb-3
                        text-[10px] px-3 py-1 rounded-full
                        bg-purple-500/10 text-purple-400">
                            Website & Apps > E-commerce Solutions
                        </span>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mb-2">
                            E-commerce Auto Reply Bot
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6">
                            Automated customer support system handling 1000+ inquiries daily.
                        </p>

                        <!-- Spacer pushes buttons to bottom -->
                        <div class="mt-auto flex items-center gap-3">

                            <!-- Build Mine -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                            px-4 py-2 rounded-lg
                            border border-purple-500/40
                            text-purple-400 text-sm
                            hover:bg-purple-500 hover:text-white
                            transition">
                                Build Mine →
                            </a>

                            <!-- Demo Button -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                            px-4 py-2 rounded-lg
                            border border-white/10
                            text-gray-300 text-sm
                            hover:bg-white/10 hover:text-white
                            transition">
                                Live Demo
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18]
                        border border-white/10 rounded-2xl
                        p-5 flex flex-col h-full
                        transition hover:border-purple-500/40">

                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden mb-4">
                            <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                alt="Project Demo" class="w-full h-48 object-cover">
                        </div>

                        <!-- Category -->
                        <span
                            class="inline-block w-fit mb-3
                 text-[10px] px-3 py-1 rounded-full
                 bg-purple-500/10 text-purple-400">
                            Website & Apps > E-commerce Solutions
                        </span>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mb-2">
                            E-commerce Auto Reply Bot
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm mb-6">
                            Automated customer support system handling 1000+ inquiries daily.
                        </p>

                        <!-- Spacer pushes buttons to bottom -->
                        <div class="mt-auto flex items-center gap-3">

                            <!-- Build Mine -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                  px-4 py-2 rounded-lg
                  border border-purple-500/40
                  text-purple-400 text-sm
                  hover:bg-purple-500 hover:text-white
                  transition">
                                Build Mine →
                            </a>

                            <!-- Demo Button -->
                            <a href="#"
                                class="inline-flex items-center gap-2
                  px-4 py-2 rounded-lg
                  border border-white/10
                  text-gray-300 text-sm
                  hover:bg-white/10 hover:text-white
                  transition">
                                Live Demo
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section> --}}
        <section id="projects-section" class="projects-section my-10">
            <div class="container">
                <div class="section-header mb-10">
                    <h2 class="text-center text-white font-bold text-4xl title-font">Our Projects</h2>
                    <p class="text-center text-gray-400 w-full lg:w-1/2 mx-auto">We build custom software solutions,
                        websites, and web applications tailored to our clients' specific needs.</p>
                </div>
                <div class="filter-box flex flex-col  lg:flex-row justify-between items-center my-2 gap-2">
                    <ul class="filter flex-1 flex gap-2 ">
                        <li class="filter-item inline-flex  text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm  active"
                            data-filter="all">All</li>
                        <li class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm"
                            data-filter="branding">Custom Software</li>
                        <li class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm"
                            data-filter="design">Websites & Apps</li>
                        <li class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm"
                            data-filter="development">Branding & Deisgn</li>
                        <li class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm"
                            data-filter="development">Growth Marketing</li>
                    </ul>
                    <div class="search w-full md:w-auto">
                        <div
                            class="inline-flex items-center rounded-2xl px-3 py-1 border w-full md:w-auto border-gray-500 group hover:border-gray-50 transition-all duration-300">
                            <input type="text" placeholder="Search"
                                class="search-input placeholder:text-gray-500 text-gray-300 focus:outline-none focus:border-purple-500/40   w-full md:w-auto">
                            <i
                                class="bx bx-search -ml-2  text-gray-500 group-hover:text-gray-50 transition-all duration-300"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-transparent">
                    <div class="swiper tranding-slider bg-transparent">
                        <div class="swiper-wrapper bg-transparent">
                            <!-- Slide-start -->

                            <div
                                class="swiper-slide max-w-[300px] bg-gradient-to-b  from-[#1b1b2a] to-[#0f0f18]
                                border border-white/10 rounded-2xl
                                p-5 flex flex-col h-full
                                transition hover:border-purple-500/40">

                                <!-- Project Image -->
                                <div class="rounded-xl overflow-hidden mb-4">
                                    <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                        alt="Project Demo" class="w-full h-48 object-cover">
                                </div>

                                <!-- Category -->
                                <span
                                    class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                                    Website & Apps <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-2 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    E-commerce Solutions
                                </span>

                                <!-- Title -->
                                <h3 class="text-white text-lg font-semibold mb-2">
                                    E-commerce Auto Reply Bot
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-400 text-sm mb-6">
                                    Automated customer support system handling 1000+ inquiries daily.
                                </p>

                                <!-- Spacer pushes buttons to bottom -->
                                <div class="mt-auto flex items-center gap-3">

                                    <!-- Build Mine -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
                                        Build Mine →
                                    </a>

                                    <!-- Demo Button -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                            <div
                                class="swiper-slide max-w-[300px] bg-gradient-to-b  from-[#1b1b2a] to-[#0f0f18]
                                border border-white/10 rounded-2xl
                                p-5 flex flex-col h-full
                                transition hover:border-purple-500/40">

                                <!-- Project Image -->
                                <div class="rounded-xl overflow-hidden mb-4">
                                    <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                        alt="Project Demo" class="w-full h-48 object-cover">
                                </div>

                                <!-- Category -->
                                <span
                                    class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                                    Website & Apps <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-2 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    E-commerce Solutions
                                </span>

                                <!-- Title -->
                                <h3 class="text-white text-lg font-semibold mb-2">
                                    E-commerce Auto Reply Bot
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-400 text-sm mb-6">
                                    Automated customer support system handling 1000+ inquiries daily.
                                </p>

                                <!-- Spacer pushes buttons to bottom -->
                                <div class="mt-auto flex items-center gap-3">

                                    <!-- Build Mine -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
                                        Build Mine →
                                    </a>

                                    <!-- Demo Button -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                            <div
                                class="swiper-slide max-w-[300px] bg-gradient-to-b  from-[#1b1b2a] to-[#0f0f18]
                                border border-white/10 rounded-2xl
                                p-5 flex flex-col h-full
                                transition hover:border-purple-500/40">

                                <!-- Project Image -->
                                <div class="rounded-xl overflow-hidden mb-4">
                                    <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                        alt="Project Demo" class="w-full h-48 object-cover">
                                </div>

                                <!-- Category -->
                                <span
                                    class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                                    Website & Apps <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-2 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    E-commerce Solutions
                                </span>

                                <!-- Title -->
                                <h3 class="text-white text-lg font-semibold mb-2">
                                    E-commerce Auto Reply Bot
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-400 text-sm mb-6">
                                    Automated customer support system handling 1000+ inquiries daily.
                                </p>

                                <!-- Spacer pushes buttons to bottom -->
                                <div class="mt-auto flex items-center gap-3">

                                    <!-- Build Mine -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
                                        Build Mine →
                                    </a>

                                    <!-- Demo Button -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                            <div
                                class="swiper-slide max-w-[300px] bg-gradient-to-b  from-[#1b1b2a] to-[#0f0f18]
                                border border-white/10 rounded-2xl
                                p-5 flex flex-col h-full
                                transition hover:border-purple-500/40">

                                <!-- Project Image -->
                                <div class="rounded-xl overflow-hidden mb-4">
                                    <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                        alt="Project Demo" class="w-full h-48 object-cover">
                                </div>

                                <!-- Category -->
                                <span
                                    class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                                    Website & Apps <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-2 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    E-commerce Solutions
                                </span>

                                <!-- Title -->
                                <h3 class="text-white text-lg font-semibold mb-2">
                                    E-commerce Auto Reply Bot
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-400 text-sm mb-6">
                                    Automated customer support system handling 1000+ inquiries daily.
                                </p>

                                <!-- Spacer pushes buttons to bottom -->
                                <div class="mt-auto flex items-center gap-3">

                                    <!-- Build Mine -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
                                        Build Mine →
                                    </a>

                                    <!-- Demo Button -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                            <div
                                class="swiper-slide max-w-[300px] bg-gradient-to-b  from-[#1b1b2a] to-[#0f0f18]
                                border border-white/10 rounded-2xl
                                p-5 flex flex-col h-full
                                transition hover:border-purple-500/40">

                                <!-- Project Image -->
                                <div class="rounded-xl overflow-hidden mb-4">
                                    <img src="{{ asset('uploads/projects/ecommerce-graphical-image.jpg') }}"
                                        alt="Project Demo" class="w-full h-48 object-cover">
                                </div>

                                <!-- Category -->
                                <span
                                    class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
                                    Website & Apps <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-2 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    E-commerce Solutions
                                </span>

                                <!-- Title -->
                                <h3 class="text-white text-lg font-semibold mb-2">
                                    E-commerce Auto Reply Bot
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-400 text-sm mb-6">
                                    Automated customer support system handling 1000+ inquiries daily.
                                </p>

                                <!-- Spacer pushes buttons to bottom -->
                                <div class="mt-auto flex items-center gap-3">

                                    <!-- Build Mine -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
                                        Build Mine →
                                    </a>

                                    <!-- Demo Button -->
                                    <a href="#"
                                        class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
                                        Live Demo
                                    </a>
                                </div>
                            </div>


                            <!-- Slide-end -->
                        </div>

                        <div class=" absolute top-0 bottom-0 flex items-center justify-between w-full">
                            <div class="swiper-button-prev slider-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </div>
                            {{-- <div class="swiper-pagination"></div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- partners end -->
        <section id="counter-section" class="counter-section "
            style="
        background-image: url({{ asset('assets/images/banner/programming-background-collage.jpg') }});
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
        ">

            <div class="grid grid-cols-2 lg:grid-cols-4 py-10 bg-black/90">
                <div
                    class=" flex flex-col items-center text-center border-r  border-b lg:border-b-0 border-gray-50 py-6">
                    <h2 class="text-4xl font-semibold text-white counter title-font">5+</h2>
                    <p class="text-gray-400 text-lg">Years of Experience</p>
                </div>
                <div
                    class=" flex flex-col items-center text-center lg:border-r border-b lg:border-b-0 border-gray-50 py-6">
                    <h2 class="text-4xl font-semibold text-white counter title-font">2000+</h2>
                    <p class="text-gray-400 text-lg">Projects</p>
                </div>
                <div class=" flex flex-col items-center text-center border-r  border-gray-50 py-6">
                    <h2 class="text-4xl font-semibold text-white counter title-font">1200+</h2>
                    <p class="text-gray-400 text-lg">Happy Clients</p>
                </div>
                <div class=" flex flex-col items-center text-center border-0 border-gray-50 py-6">
                    <h2 class="text-4xl font-semibold text-white counter title-font">1000+</h2>
                    <p class="text-gray-400 text-lg">Partners</p>
                </div>
            </div>
            </div>
        </section>
        <!-- contact start -->
        <section id="contact2" class="contact-section">
            <div class="container contact-area">
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-1/2">
                        <div class="contact-info">
                            <div class="first">
                                <h2 class="title">Book a Meeting for<br> Discussion & Support</h2>
                                <p class="text">
                                    Let’s talk about your project or answer any questions. Fill out the form and our
                                    team will get back to you shortly.
                            </div>
                            <div class="middle">
                                <ul class="contact-list">
                                    <li><a href="mailto:info@seldomtechsolutions.com"><i
                                                class="fa-solid fa-envelope"></i>contact@seldomtechsolutions.com</a>
                                    </li>
                                    <li><i class="fa-solid fa-location-dot"></i>Puran Dhaka, Dhaka - 1100, Bangladesh
                                    </li>
                                </ul>
                            </div>
                            <div class="end">
                                <div class="social">
                                    <ul>
                                        <li><a href="https://bsky.app/profile/iblackai.com" target="_blank"><i
                                                    class="fa-brands fa-bluesky"></i></a></li>
                                        <li><a href="https://x.com/iblackAI" target="_blank"><i
                                                    class="fa-brands fa-x"></i></a></li>
                                        <li><a href="https://pinterest.com/iBlackAI" target="_blank"><i
                                                    class="fa-brands fa-pinterest"></i></a></li>
                                        <li><a href="https://instagram.com/iblack_ai" target="_blank"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <form action="" class="form">
                            <fieldset class="mb-3">
                                <label for="name">Your name</label>
                                <input type="text" name="name" id="name"
                                    placeholder=" Ex: Mr. John Doe" />
                            </fieldset>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 mb-3">
                                <fieldset class=" ">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone" id="phone"
                                        placeholder="Ex: +881684285963" />
                                </fieldset>
                                <fieldset class="">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email"
                                        placeholder="Ex: example@gmail.com" />
                                </fieldset>
                            </div>
                            <fieldset class="mb-3">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject"
                                    placeholder="Ex: Custom Website Development" />
                            </fieldset>

                            <fieldset class="mb-3">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10"
                                    placeholder="Write your requirments and message..."></textarea>
                            </fieldset class="mb-3">
                            <div class="btn-area">
                                <button type="submit" class="btn btn-effect-1 cursor-pointer">SUBMIT <img
                                        class="inline" src="{{ asset('assets/images/icons/power.svg') }}"
                                        alt=""></button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact end -->
        <!-- FAQ start -->

        <section id="faq" class="faq-section">
            <div class="container">
                <div class="section-header mb-10">
                    <h2 class="text-center text-white font-bold text-4xl title-font">Frequently Asked Questions (FAQ)
                    </h2>
                    <p class="text-center text-gray-400 w-full lg:w-1/2 mx-auto">Frequently Asked Questions (FAQ) about
                        our services, including custom software solutions, websites, and web applications.</p>
                </div>
                <div class="accordion " id="accordionPanelsStayOpenExample">
                    <div x-data="{ open: false }" class="accordion-item border-b border-white/10">
                        <h3 @click="open = !open"
                            class="accordion-header text-2xl cursor-pointer w-full flex items-center justify-between gap-4 px-4 py-3 text-gray-50 hover:bg-gray-50/[0.03]">

                            <span>What are the basic features?</span>

                            <svg class="size-5 shrink-0 transition-transform duration-300"
                                :class="{ '-rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </h3>

                        <!-- Smooth height animation -->
                        <div x-show="open" x-collapse class="overflow-hidden px-4 pb-4">

                            <p class="accordion-body text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt similique,
                                quae hic dicta quo facere facilis praesentium.
                            </p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="accordion-item border-b border-white/10">
                        <h3 @click="open = !open"
                            class="accordion-header text-2xl cursor-pointer w-full flex items-center justify-between gap-4 px-4 py-3 text-gray-50 hover:bg-gray-50/[0.03]">

                            <span>What are the basic features?</span>

                            <svg class="size-5 shrink-0 transition-transform duration-300"
                                :class="{ '-rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </h3>

                        <!-- Smooth height animation -->
                        <div x-show="open" x-collapse class="overflow-hidden px-4 pb-4">

                            <p class="accordion-body text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt similique,
                                quae hic dicta quo facere facilis praesentium.
                            </p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="accordion-item border-b border-white/10">
                        <h3 @click="open = !open"
                            class="accordion-header text-2xl cursor-pointer w-full flex items-center justify-between gap-4 px-4 py-3 text-gray-50 hover:bg-gray-50/[0.03]">

                            <span>What are the basic features?</span>

                            <svg class="size-5 shrink-0 transition-transform duration-300"
                                :class="{ '-rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </h3>

                        <!-- Smooth height animation -->
                        <div x-show="open" x-collapse class="overflow-hidden px-4 pb-4">

                            <p class="accordion-body text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt similique,
                                quae hic dicta quo facere facilis praesentium.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FAQ end -->


    </main>

    <footer id="footer" class="footer pt-3">
        <div class="company-info container mb-5 mt-5 px-5">
            <div class="flex justify-between">
                <div class="w-1/2 text-center">
                    <div class="logo" style="width: 112px;">
                        <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="" />
                    </div>
                </div>
                <div class="w-1/2 text-end">
                    <div class="social me-auto letter-space-3">
                        <a href="https://bsky.app/profile/iblackai.com" class="btn btn-effect-4"><i
                                class="fa-brands fa-bluesky"></i></a>
                        <a href="https://x.com/iblackAI" class="btn btn-effect-4"><i class="fa-brands fa-x"></i></a>
                        <a href="https://pinterest.com/iBlackAI" class="btn btn-effect-4"><i
                                class="fa-brands fa-pinterest"></i></a>
                        <a href="https://instagram.com/iblack_ai" class="btn btn-effect-4"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="quick-links container mb-5 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-4">
                <div class="col-md-3 ">
                    <h3 class="title">Explore</h3>
                    <ul class="footer-menu">
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="https://iblackai.com/features">Features</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="art-challenge.html">Art Challenge</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="title">Solutions</h3>
                    <ul class="footer-menu">
                        <li><a href="https://iblackai.com/about-us">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="careers.html">Careers</a></li>
                        <li><a href="refer-a-friend.html">Refer a Friend</a></li>
                        <li><a href="ambassador-program.html">Ambassador Program</a></li>
                    </ul>
                </div>
                <div class="col-md-3 ">

                    <h3 class="title">About Us</h3>
                    <ul class="footer-menu">
                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                        <li><a href="terms-of-use.html">Terms of use</a></li>
                        <li><a href="cookies-policy.html">Cookies Policy</a></li>
                        <li><a href="copyright-policy.html">Copyright Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 ">
                    <h3 class="title">Resources</h3>
                    <ul class="footer-menu">
                        <li><a href="contact-us.html">Report a Problem</a></li>
                        <li><a href="https://discord.com/channels/1327915056121253908/1327925852977233940">Technical
                                Support</a></li>
                        <li><a href="https://discord.com/channels/1327915056121253908/1327915056855519292">Billing
                                Support</a></li>
                        <li><a href="https://discord.com/channels/1327915056121253908/1327915056855519292">Submit a
                                Ticket</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright container pb-3 px-5">

            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="copyright-text">
                        &copy; SELDOM TECH 2026. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <script>
        Fancybox.bind('.various', {
            // Your custom options for a specific gallery
            type: "iframe", //<--added
            // maxWidth: 800,
            // maxHeight: 600,
            fitToView: true,

            width: '80%',
            height: '80%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });
    </script>
    <!-- swiper -->


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const partnersSlider = new Swiper('.partners-slider', {
            spaceBetween: 30,
            slidesPerView: 'auto',
            loop: true,
            freeMode: true,
            autoplay: {
                delay: 0
            },
            speed: 5000,
        });
    </script>
    @vite(['resources/js/app.js']);


    <script></script>
    <script>
        const words = ["Custom Software", "Websites & Apps", "Branding & Design", "Growth Marketing"];
        let i = 0;
        let j = 0;
        let currentWord = '';
        let isDeleting = false;
        const typingSpeed = 100;
        const deletingSpeed = 50;
        const delayBetweenWords = 1500;

        function type() {
            const typingText = document.getElementById('typing-text');

            if (!isDeleting) {
                currentWord = words[i].substring(0, j + 1);
                j++;
                typingText.textContent = currentWord;

                if (j === words[i].length) {
                    isDeleting = true;
                    setTimeout(type, delayBetweenWords);
                    return;
                }
            } else {
                currentWord = words[i].substring(0, j - 1);
                j--;
                typingText.textContent = currentWord;

                if (j === 0) {
                    isDeleting = false;
                    i = (i + 1) % words.length;
                }
            }
            setTimeout(type, isDeleting ? deletingSpeed : typingSpeed);
        }

        document.addEventListener("DOMContentLoaded", type);
    </script>

    @livewireScripts
</body>

</html>
