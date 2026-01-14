<div>

    <section id="banner"
        style="background-image: url({{ asset('assets/images/banner/programming-script-text-coding-word.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="gradiant-style w-full to-black/50 pt-[100px] pb-20">

            <div class="container h-50 flex justify-center items-center">
                <div
                    class="w-full lg:w-[70%] backdrop-filter backdrop-blur-sm bg-white/20 p-5 pb-6 rounded-lg shadow-xl">
                    <h1 class="text-4xl font-bold text-center mb-1 title-font uppercase tracking-widest">Our Services
                    </h1>
                    <p class="text-center mb-4 text-gray-300">We offer a wide range of services to help you achieve your
                        business goals.</p>
                    <select name="category" id=""
                        class="w-full rounded-lg px-3 py-2 border border-gray-300 focus:outline-none font-bold text-gray-800 bg-gray-300/30">
                        <option value="all">All</option>
                        <option value="web">Custom Software</option>
                        <option value="mobile">Website & Apps</option>
                        <option value="desktop">Branding & Design</option>
                        <option value="desktop">Growth Marketing</option>
                    </select>
                </div>
            </div>
        </div>
    </section>


    <section id="sevices">
        <div class="container  my-10">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

                @foreach ($services as $service)
                    <x-card-three :$service />
                @endforeach

            </div>
        </div>
    </section>
    <section id="action" class="actiontogen bg-black">
        <div class="container design-area"
            style="background-image: url({{ asset('assets/images/abstract/left.svg') }}),
            url({{ asset('assets/images/abstract/right.svg') }})">
            <div class="flex lg:flex-row flex-col py-1 px-1 justify-center items-center">

                <div class="flex h-full flex-col justify-center items-center text px-4 py-10 lg:pl-10 gap-8">
                    <h2 class="text-center flex flex-row gap-4 justify-center items-center w-full">
                        Need
                        <span class="brand">Discussion?</span>
                    </h2>
                    <p class="text-center text-gray-300">We provide discussion services for those who need to discuss
                        their business ideas.</p>
                    <div class="flex justify-center items-center gap-4">


                        <a href="/" class="btn btn-effect-2 flex items-center gap-2">Book a Meeting
                            <i class='bx  bx-calendar-check text-2xl bx-flashing'></i></a>

                        <a href="https://wa.me/+251991133333" class="btn btn-effect-1 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-10" fill="currentColor"
                                viewBox="0 0 24 24">
                                <!--Boxicons v3.0.7 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                <path fill-rule="evenodd"
                                    d="M18.403 5.633A8.92 8.92 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a9 9 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.93 8.93 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.45 7.45 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.45 7.45 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.4 7.4 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73s-.354-.112-.504.112-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393s.149-.224.224-.374.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a10 10 0 0 0-.429-.008.83.83 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321 1.582 2.415 3.832 3.387c.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066s.187-.973.131-1.067-.207-.151-.43-.263"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://wa.me/+251991133333" class="btn btn-effect-1 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-10" fill="currentColor"
                                viewBox="0 0 24 24">
                                <!--Boxicons v3.0.7 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                <path
                                    d="M12 3c-4.92 0-8.91 3.729-8.91 8.332 0 2.616 1.291 4.952 3.311 6.479V21l3.041-1.687c.811.228 1.668.35 2.559.35 4.92 0 8.91-3.73 8.91-8.331C20.91 6.729 16.92 3 12 3m.938 11.172-2.305-2.394-4.438 2.454 4.865-5.163 2.305 2.395 4.439-2.455z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
