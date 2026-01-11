 <section id="projects-section" class="projects-section my-10">
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
             @foreach ($projects as $project)
                 <x-card-one :$project />
             @endforeach
         </div>

     </div>

 </section>
