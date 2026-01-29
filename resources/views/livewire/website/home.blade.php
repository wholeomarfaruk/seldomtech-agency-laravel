<div>
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
                <img class="w-[70%] -mt-10" src="{{ asset('assets/images/banner/web-development-composition.png') }}"
                    alt="" />
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
                @foreach ($our_services as $service_item)

                <div class="service-card">
                    <div class="service-icon">
                        {!! $service_item->icon !!}
                    </div>
                    <h3 class="service-title">{{ $service_item->name }}</h3>
                    <p class="service-description">
                        {{ $service_item->description }}
                    </p>
                    <ul class="service-list">
                        @if ($service_item->children->count()>0)
                        @foreach ($service_item->children->take(4) as $service_child_item)

                        <li>{{ $service_child_item->name }}</li>
                        @endforeach
                        @endif

                    </ul>
                    <div class="btn-group">
                        <a href="{{ route('services',['category' => $service_item->id]) }}" class="btn btn-effect-1 px-10!">Learn More <i
                                class="bx bx-right-arrow-alt bx-fade-right"></i> </a>
                    </div>
                </div>
                @endforeach

                {{-- <div class="service-card">
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
                </div> --}}

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
    <!-- Projects start -->
    @livewire('website.components.project-section', [
        'section_title' => 'Projects',
        'section_description' => 'We build custom software solutions, websites, and web applications tailored to our clients specific needs.',
    ])
    <!-- Projects end -->
    <section id="counter-section" class="counter-section "
        style=" background-image: url({{ asset('assets/images/banner/programming-background-collage.jpg') }}); background-repeat: no-repeat; background-position: center; background-size: cover; background-attachment: fixed;">

        <div class="grid grid-cols-2 lg:grid-cols-4 py-10 bg-black/90">
            <div class=" flex flex-col items-center text-center border-r  border-b lg:border-b-0 border-gray-50 py-6">
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
                            </p>
                        </div>
                        <div class="middle">
                            <ul class="contact-list">
                                <li><a href="mailto:info@seldomtechsolutions.com">
                                        <i class="fa-solid fa-envelope"></i>contact@seldomtechsolutions.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>Puran Dhaka, Dhaka - 1100, Bangladesh
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
                            <input type="text" name="name" id="name" placeholder=" Ex: Mr. John Doe" />
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
                        </fieldset>
                        <div class="btn-area">
                            <button type="submit" class="btn btn-effect-1 cursor-pointer">SUBMIT <img class="inline"
                                    src="{{ asset('assets/images/icons/power.svg') }}" alt=""></button>

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

                        <svg class="size-5 shrink-0 transition-transform duration-300" :class="{ '-rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
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

                        <svg class="size-5 shrink-0 transition-transform duration-300" :class="{ '-rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
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

                        <svg class="size-5 shrink-0 transition-transform duration-300" :class="{ '-rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
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
    <!-- partners end -->
</div>
