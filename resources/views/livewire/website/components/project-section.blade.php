    <section id="projects-section" class="projects-section my-10">
        <div class="container">
            <div class="section-header mb-10">
                <h2 class="text-center text-white font-bold text-4xl title-font">{{ $section_title }}</h2>
                <p class="text-center text-gray-400 w-full lg:w-1/2 mx-auto">{{ $section_description }}</p>
            </div>
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
            <div class="bg-transparent">
                <div class="swiper tranding-slider bg-transparent">
                    <div class="swiper-wrapper bg-transparent">
                        <!-- Slide-start -->
                        @if ($projects->count() > 0)
                            @foreach ($projects as $project)
                                <x-project-card :project="$project" />
                            @endforeach
                        @endif

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

