<div>
    <!-- Banner -->
    <section id="banner"
        style="background-image: url({{ asset('assets/images/banner/programming-script-text-coding-word.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="gradiant-style w-full to-black/50 pt-[100px] pb-20">

            <div class="container h-50 flex justify-center items-center">
                <div
                    class="w-full lg:w-[70%] backdrop-filter backdrop-blur-sm bg-white/20 p-5 pb-6 rounded-lg shadow-xl">
                    <h1 class="text-4xl font-bold text-center mb-1 title-font uppercase tracking-widest">Contact Us
                    </h1>
                    <p class="text-center mb-4 text-gray-300">
                        Whether you have a question, need support, or want to discuss a potential project, we're here to
                        help.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Banner end-->


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
                                <input type="text" name="phone" id="phone" placeholder="Ex: +881684285963" />
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
<!-- call to action section start -->
@livewire('website.components.footer-c-t-a-section')
<!-- call to action section end -->



</div>
