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
<!-- call to action section start -->
@livewire('website.components.footer-c-t-a-section')
<!-- call to action section end -->
</div>
