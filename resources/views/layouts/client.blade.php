<!DOCTYPE html>
<html lang="en" x-data="{ sidebar: false }">

<head x-data x-init="$watch('$store.pageName.name', value => {
    document.title = value ?
        value + ' - SELDOM TECH Client' :
        'SELDOM TECH Client'
})">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title  -->
    <title>
        SELDOM TECH Client
    </title>
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

</head>

<body id="client_root" class="bg-[rgb(13,13,17)]">
    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->


    <main id="main_layout">
        <aside id="sidebar" class=" scrollbar-thumb-[#42404D] hover:scrollbar-thumb-gray-900  scrollbar-thin scrollbar-track-transparent transition-all duration-300 ease-in-out" :class="{ 'active': sidebar }" >

            <div class="flex justify-between items-center gap-2 my-2 px-2">
                <h1 class="text-white font-bold text-lg">SELDOM TECH</h1>
                <button x-on:click="sidebar = !sidebar"
                    class=" p-2 border border-gray-300 mr-2 rounded-sm cursor-pointer hover:border-white hover:shadow-sm lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </button>
            </div>
            <div class="profile-card-badge-small">
                <div class="details">
                    <div class="profile-image">
                        <img src="{{ asset('assets/images/icons/avatar.png') }}" alt="" />
                    </div>
                    <div class="profile-name">
                        <h2 class="title">John Doe</h2>

                        <p class="sub-text">+88 01684-285963</p>
                    </div>
                </div>
                <div class="badge">
                    <img src="{{ asset('assets/images/icons/badge-gold.png') }}" alt="">
                </div>
            </div>

            <div class="menu my-2 flex flex-col gap-1">
                <!-- Home -->
                <a href="{{ route('client.dashboard') }}" x-data="tooltip" x-on:mouseover="show = true"
                    x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'client.dashboard' ? 'text-gray-200 bg-gray-800' : '' }}

                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <h3>Dashboard</h3>
                </a>
                <!-- Projects -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/project-management 1.png') }}"
                        alt="">
                    <h3>Projects</h3>
                </a>
                <!-- Projects -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/11449774 1.png') }}" alt="">
                    <h3>Purchased</h3>
                </a>
                <!-- services -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/9727444 1.png') }}" alt="">
                    <h3>Services</h3>
                </a>
                <!-- In Progress -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/image 1.png') }}" alt="">
                    <h3>In Progress</h3>
                </a>
                <!--  Subscriptions -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/image 2.png') }}" alt="">
                    <h3>Subscriptions</h3>
                </a>
                <!--  Payments -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/image 3.png') }}" alt="">
                    <h3>Payments</h3>
                </a>
                <!--  Settings -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true"
                    x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/settings 1.png') }}" alt="">
                    <h3>Settings</h3>
                </a>
                <!--  profile -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true"
                    x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/image 4.png') }}" alt="">
                    <h3>Profile</h3>
                </a>
                <!--  Messages -->
                <a href="#" x-data="tooltip" x-on:mouseover="show = true"
                    x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">
                    <img class="h-6! w-6!" src="{{ asset('assets/images/icons/image 5.png') }}" alt="">
                    <h3>Messages</h3>
                </a>
                <a href="#" x-data="tooltip" x-on:mouseover="show = true"
                    x-on:mouseleave="show = false"
                    class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer justify-start text-gray-400
                    {{ Route::currentRouteName() == 'company.transection.list' ? 'text-gray-200 bg-gray-800' : '' }}">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" />
                    </svg>

                    <h3>Logout</h3>
                </a>
                <!-- Reports -->
                {{-- <div x-data="dropdown" class="relative">
                    <!-- Dropdown head -->
                    <div @click="toggle('Reports')" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false"
                        class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-start': !$store.sidebar.full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'Reports',
                            'text-gray-400 ': $store.sidebar.active != 'Reports'
                        }">
                        <div class="relative flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" class="h-6 w-6 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                            </svg>

                            <h3>Reports</h3>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 size-6" viewBox="0 0 20 20"
                            stroke-width="1.5" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- Dropdown content -->
                    <div x-cloak x-show="open" @click.outside="open=false"
                        x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                        class="text-gray-400 space-y-3">
                        <a href="#" class="hover:text-gray-200 cursor-pointer">Sales Summary</a>


                    </div>
                </div> --}}
            </div>
        </aside>
        <main id="inner_layout">
            <header id="header_area">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="" />
                    </a>
                </div>
                <div class="options">
                    <div class="message">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                        </button>


                    </div>
                    <div class="notifications">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                            </svg>
                        </button>


                    </div>
                    <div class="hamburger lg:hidden" >
                        <button x-on:click="sidebar = !sidebar" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                            </svg>

                        </button>
                    </div>
                </div>
            </header>
            <main id="content_body" x-data="$store.pageName.name = 'Dashboard'">
                <section>

                    <div class="flex flex-wrap gap-4 lg:flex-nowrap">
                        <div class="w-full lg:w-1/2">
                            <div class="profile-card-badge">
                                <div class="details">
                                    <div class="profile-image">
                                        <img src="{{ asset('assets/images/icons/avatar.png') }}" alt="" />
                                    </div>
                                    <div class="profile-name">
                                        <h2 class="title">John Doe</h2>
                                        <p class="sub-text">wholeomarfaruk@gmail.com</p>
                                        <p class="sub-text">+88 01684-285963</p>
                                    </div>
                                </div>
                                <div class="badge">
                                    <img src="{{ asset('assets/images/icons/badge-gold.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="stats-card grid grid-cols-4 gap-4 items-center justify-center">
                                <div class="stat">
                                    <p class="title">02</p>
                                    <h2 class="sub-text">Projects</h2>
                                </div>
                                <div class="stat">
                                    <p class="title">01</p>
                                    <h2 class="sub-text">Purchased</h2>
                                </div>
                                <div class="stat">
                                    <p class="title">05</p>
                                    <h2 class="sub-text">Services</h2>
                                </div>
                                <div class="stat">
                                    <p class="title">02</p>
                                    <h2 class="sub-text">In Progress</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                {{-- <section class="mt-4 border border-red-400 min-h-[200px] lg:min-h-[250px]" style="width: 100%"> --}}
                <!-- Slider main container -->
                {{-- <div>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, inventore, maiores laborum architecto ad distinctio quis quam fugit commodi molestias a alias quod repudiandae delectus autem tempora suscipit nobis! Ab.</p>
                    </div> --}}
                {{-- <div class="swiper client-banner h-[350px] rounded-2xl overflow-hidden max-w-full" style="max-width:100% !important;">
                        <div class="swiper-wrapper" style="max-width:100% !important;">
                            <div class="swiper-slide" style="background-image: url({{ asset('assets/images/banner/client-banner.jpg') }}); background-position: center; background-size: cover; background-repeat: no-repeat;">

                            </div>
                            <div class="swiper-slide" style="background-image: url({{ asset('assets/images/banner/client-banner.jpg') }}); background-position: center; background-size: cover; background-repeat: no-repeat;">

                            </div>
                            <div class="swiper-slide" style="background-image: url({{ asset('assets/images/banner/client-banner.jpg') }}); background-position: center; background-size: cover; background-repeat: no-repeat;">

                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div> --}}

                {{-- </section> --}}
                <section class="mt-4">
                    <h4 class="text-gray-300 my-2">Quick Actions</h4>
                    <div class="grid grid-cols-3 lg:grid-cols-4 gap-4">
                        <div
                            class="item flex flex-col gap-2 justify-center items-center  h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! "
                                src="{{ asset('assets/images/icons/project-management 1.png') }}" alt="">
                            <h3 class="title  text-lg text-gray-800">Projects</h3>
                        </div>
                        <div
                            class="item flex flex-col gap-2 justify-center items-center h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! "
                                src="{{ asset('assets/images/icons/11449774 1.png') }}" alt="">
                            <h3 class="title  text-lg text-gray-800">Purchased</h3>
                        </div>
                        <div
                            class="item flex flex-col gap-2 justify-center items-center h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! "
                                src="{{ asset('assets/images/icons/9727444 1.png') }}" alt="">
                            <h3 class="title  text-lg text-gray-800">Services</h3>
                        </div>
                        <div
                            class="item flex flex-col gap-2 justify-center items-center h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! " src="{{ asset('assets/images/icons/image 1.png') }}"
                                alt="">
                            <h3 class="title  text-lg text-gray-800">In Progress</h3>
                        </div>
                        <div
                            class="item flex flex-col gap-2 justify-center items-center h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! " src="{{ asset('assets/images/icons/image 2.png') }}"
                                alt="">
                            <h3 class="title  text-lg text-gray-800">Subscriptions</h3>
                        </div>
                        <div
                            class="item flex flex-col gap-2 justify-center items-center h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! " src="{{ asset('assets/images/icons/image 3.png') }}"
                                alt="">
                            <h3 class="title  text-lg text-gray-800">Payments</h3>
                        </div>
                        <div
                            class="item flex flex-col gap-2 justify-center items-center h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! "
                                src="{{ asset('assets/images/icons/settings 1.png') }}" alt="">
                            <ngs class="title  text-lg text-gray-800">Settings</h3>
                        </div>
                        <div
                            class="item flex flex-col gap-2 justify-center items-center h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! " src="{{ asset('assets/images/icons/image 4.png') }}"
                                alt="">
                            <ngs class="title  text-lg text-gray-800">Profile</h3>
                        </div>
                        <div
                            class="item flex flex-col gap-2 justify-center items-center h-[120px] lg:h-[150px] px-2 py-5 bg-white rounded-2xl cursor-pointer hover:scale-105 transition-all duration-300 ease-in-out">
                            <img class="w-auto! h-10! lg:h-16! " src="{{ asset('assets/images/icons/image 5.png') }}"
                                alt="">
                            <ngs class="title  text-lg text-gray-800">Message</h3>
                        </div>

                    </div>
                </section>
            </main>
            <footer id="footer">
                <p class="text-center text-xs text-gray-400">
                    &copy; SELDOM TECH {{ date('Y') }}. All rights reserved.
                </p>
            </footer>
        </main>
    </main>
    <script>
        document.addEventListener('alpine:init', () => {
            // Stores variable globally
            Alpine.store('sidebar', {
                full: true,
                active: 'home',
                navOpen: false,
            });
            Alpine.store('pageName', {
                slug: '',
                name: '',

            });
            // Creating component Dropdown
            Alpine.data('dropdown', () => ({
                open: false,
                toggle(tab) {
                    this.open = !this.open;
                    Alpine.store('sidebar').active = tab;
                },
                activeClass: 'bg-gray-800 text-gray-200',
                expandedClass: 'border-l border-gray-400 ml-4 pl-4',
                shrinkedClass: 'sm:absolute top-0 left-20 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 border-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28'
            }));
            // Creating component Sub Dropdown
            Alpine.data('sub_dropdown', () => ({
                sub_open: false,
                sub_toggle() {
                    this.sub_open = !this.sub_open;
                },
                sub_expandedClass: 'border-l border-gray-400 ml-4 pl-4',
                sub_shrinkedClass: 'sm:absolute top-0 left-28 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 border-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28'
            }));
            // Creating tooltip
            Alpine.data('tooltip', () => ({
                show: false,
                visibleClass: 'block sm:absolute -top-7 sm:border border-gray-800 left-5 sm:text-sm sm:bg-gray-900 sm:px-2 sm:py-1 sm:rounded-md'
            }))
            console.log(Alpine.store('sidebar').active);
        })
    </script>
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
        const swiper = new Swiper('.client-banner', {
            // Optional parameters

            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>

    @vite(['resources/js/app.js'])

    @livewireScripts
</body>

</html>
