<div>
    <!-- Banner -->
    <section id="banner"
        style="background-image: url({{ asset('assets/images/banner/programming-script-text-coding-word.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="gradiant-style w-full to-black/50 pt-[100px] pb-20">

            <div class="container h-50 flex justify-center items-center">
                <div
                    class="w-full lg:w-[70%] backdrop-filter backdrop-blur-sm bg-white/20 p-5 pb-6 rounded-lg shadow-xl">
                    <h1 class="text-4xl font-bold text-center mb-1 title-font uppercase tracking-widest">Our Projects
                    </h1>
                    <p class="text-center mb-4 text-gray-300">
                       We build custom software solutions,
                 websites, and web applications tailored to our clients' specific needs.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Banner end-->


 <section id="projects-section" class="projects-section my-10">
     <div class="container">

        <div class="filter-box flex flex-col  lg:flex-row justify-between items-center my-2 gap-2">
                <ul class="filter flex-1 flex gap-2 ">
                    <li wire:click="filter('all')"
                        class="filter-item inline-flex  text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm {{ $parent_category == 'all' ? 'active' : '' }}"
                        data-filter="all">All</li>
                    <li wire:click="filter('1')"
                        class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm {{ $parent_category == '1' ? 'active' : '' }}"
                        data-filter="branding">Custom Software</li>
                    <li wire:click="filter('2')"
                        class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm {{ $parent_category == '2' ? 'active' : '' }}"
                        data-filter="design">Websites & Apps</li>
                    <li wire:click="filter('3')"
                        class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm {{ $parent_category == '3' ? 'active' : '' }}"
                        data-filter="development">Branding & Deisgn</li>
                    <li wire:click="filter('4')"
                        class="filter-item inline-flex text-gray-300 rounded-2xl px-3 py-1 border border-gray-500 cursor-pointer text-[8px] md:text-sm {{ $parent_category == '4' ? 'active' : '' }}"
                        data-filter="development">Growth Marketing</li>
                </ul>
                <div class="search w-full md:w-auto">
                    <div
                        class="inline-flex items-center rounded-2xl px-3 py-1 border w-full md:w-auto border-gray-500 group hover:border-gray-50 transition-all duration-300">
                        <input wire:model.live="search" type="text" placeholder="Search"
                            class="search-input placeholder:text-gray-500 text-gray-300 focus:outline-none focus:border-purple-500/40   w-full md:w-auto">
                        <i
                            class="bx bx-search -ml-2  text-gray-500 group-hover:text-gray-50 transition-all duration-300"></i>
                    </div>
                </div>
            </div>
         <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
             @foreach ($projects as $project)
                 <x-project-card :project="$project" />
             @endforeach
         </div>

     </div>

 </section>
<!-- call to action section start -->
@livewire('website.components.footer-c-t-a-section')
<!-- call to action section end -->


</div>
