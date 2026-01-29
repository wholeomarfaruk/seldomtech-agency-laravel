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
    <header id="header" class="header fixed inset-x-0 top-0 z-30 w-full bg-transparent shadow"
        x-data="{ mobileMenu: false }">
        <div class="container mx-auto px-4">
            <nav id="navbar" class="navbar flex items-center justify-between py-4 flex-wrap lg:flex-nowrap">
                <div class="logo">
                    <a class="navbar-brand flex items-center" href="/">
                        <img style="max-width:180px; width: 180px;" class="mx-auto"
                            src="{{ asset('assets/images/logo/logo-white.png') }}" alt="logo">
                    </a>
                </div>

                <!-- Hamburger -->
                <button x-on:click="mobileMenu = !mobileMenu" id="hamburger"
                    class="navbar-toggler lg:hidden text-2xl text-gray-700 focus:outline-none size-10 cursor-pointer"
                    type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <!-- Nav Area -->
                <div id="navbarNav"
                    class="nav-area lg:flex static top-0 left-0 w-full lg:w-auto rounded-lg
                       bg-transparent  lg:bg-transparent shadow lg:shadow-none
                       flex-col lg:flex-row items-start lg:items-center gap-6
                       mt-4 lg:mt-0 p-4 lg:p-0 order-3 lg:order-2 "
                    :class="mobileMenu ? 'block' : 'hidden'">

                    <!-- Nav Links -->
                    <ul
                        class="navbar-nav flex flex-col lg:flex-row gap-4 lg:gap-6
                           me-auto my-2 px-3 my-lg-0 navbar-nav-scroll ">

                        <li class="nav-item">
                            <a class="nav-link font-medium text-gray-800 hover:text-indigo-600 p-2 {{ Route::CurrentRouteName() == 'home' ? 'active' : '' }}"
                                href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link font-medium text-gray-800 hover:text-indigo-600 p-2 {{ request()->is('services') ? 'active' : '' }}"
                                href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-medium text-gray-800 hover:text-indigo-600 p-2 {{ request()->is('projects') ? 'active' : '' }}"
                                href="/projects">Projects</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link font-medium text-gray-800 hover:text-indigo-600 p-2"
                                href="#">Pricing</a>
                        </li>

                        <!-- More Dropdown -->
                        <li class="nav-item dropdown relative" x-data="{ open: false }">
                            <a x-on:click="open = !open"
                                class="nav-link dropdown-toggle font-medium text-gray-800 hover:text-indigo-600 p-2 cursor-pointer">
                                More
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4 inline">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>

                            </a>

                            <ul x-show="open" x-collapse="open" x-cloak @click.outside="open = false"
                                class="dropdown-menu  relative lg:absolute left-0 mt-2 w-full lg:w-56
                                   bg-white shadow rounded-lg py-2">
                                <li><a class="dropdown-item block px-4 py-2 hover:bg-gray-100"
                                        href="/privacy-policy">Privacy Policy</a></li>
                                <li><a class="dropdown-item block px-4 py-2 hover:bg-gray-100"
                                        href="/terms-of-use">Terms of use</a></li>
                                <li><a class="dropdown-item block px-4 py-2 hover:bg-gray-100"
                                        href="/contact-us">Contact Us</a></li>
                            </ul>
                        </li>

                        <!-- Follow Us Dropdown -->
                        {{-- <li class="nav-item dropdown relative" x-data="{ open: false }">
                            <a x-on:click="open = !open"
                                class="nav-link dropdown-toggle font-medium text-gray-800 hover:text-indigo-600 p-2 cursor-pointer">
                                Follow Us
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4 inline">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>

                            </a>

                            <ul x-show="open" x-collapse="open" x-cloak @click.outside="open = false"
                                class="dropdown-menu relative lg:absolute left-0 mt-2 w-full lg:w-56
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
                        </li> --}}

                    </ul>

                    <!-- Buttons -->
                    <div class="button-group flex  lg:flex-row gap-3">
                        @if(auth()->check())
                        <div class="user-dropdown">
                            <div x-data="{open: false}" class="dropdown relative">
                                <button x-on:click="open = !open" class="flex items-center gap-2 cursor-pointer btn  dropdown-toggle" type="button" id="dropdownMenuButton3">
                                    <span class="user-header flex items-center gap-1">
                                        <span class="size-10 bg-gray-50/20 rounded-full overflow-hidden">
                                            <img class="size-10!" src="{{ auth()->user()->profile_picture }}" alt="">
                                        </span>
                                        <span class="name">{{ auth()->user()->name }}</span>
                                    </span>
                                    <i class="bx bx-caret-down transition-transform" :class="{'rotate-180': open}" x-transition> </i>
                                </button>
                                <ul x-show="open" x-collapse="open" x-cloak @click.outside="open = false" x-transition class="absolute right-0 mt-2 py-2 w-48 bg-gray-700/80 rounded-md shadow-xl ">
                                    @if (auth()->user()->hasPanel('admin'))
                                    <li><a class="block w-full text-left px-4 py-2 text-white hover:bg-indigo-600/20" href="{{  route('admin.dashboard') }}">Admin Dashboard</a></li>
                                    @endif
                                    @if (auth()->user()->hasPanel('client'))
                                    <li><a class="block w-full text-left px-4 py-2 text-white hover:bg-indigo-600/20" href="{{  route('client.dashboard') }}">My Dashboard</a></li>
                                    @endif
                                    <li><a class="block w-full text-left px-4 py-2 text-white hover:bg-indigo-600/20" href="#">Profile</a></li>

                                    <hr>
                                   <li><a class="block w-full text-left px-4 py-2 text-white hover:bg-indigo-600/20" href="#">Logout</a></li>

                                </ul>
                            </div>
                        </div>
                        @else
                        <a href="/login"
                            class="btn btn-effect-1 flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-100">
                            Log In
                            <img src="{{ asset('assets/images/icons/power.svg') }}" class="w-4">
                        </a>

                        <a href="/register"
                            class="btn btn-effect-1 flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-100">
                            Sign Up
                            <img src="{{ asset('assets/images/icons/power.svg') }}" class="w-4">
                        </a>
                        @endif
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
        {{ $slot }}
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
    {{-- <script>
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
    </script> --}}
    {{-- <script>
            let swiper;

            function initSwiper() {
                if (swiper) swiper.destroy(true, true); // destroy previous instance

                swiper = new Swiper('.partners-slider', {
                    spaceBetween: 30,
                    slidesPerView: 'auto',
                    loop: true,
                    freeMode: true,
                    autoplay: {
                        delay: 0
                    },
                    speed: 5000,
                });
            }


            document.addEventListener('livewire:init', () => {
                // Initial call
                Livewire.on('refresh', () => {
                    console.log('refresh');
                    initSwiper();
                });

            })
        </script> --}}
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
