   {{-- ======================== Page Layout Start From Here ======================== --}}
   <div x-data x-init="$store.pageName = { name: 'Creat New Project', slug: 'new-project' }">
       {{-- ======================== Page Header Start From Here ======================== --}}
       <div class="flex flex-wrap justify-between gap-6 ">
           {{-- Page Name  --}}
           <h1 class="text-gray-500 text-lg font-bold" x-cloak x-text="$store.pageName?.name ?? ''">
           </h1>
           {{-- Breadcrumb  --}}
           <nav>
               <ol class="flex items-center gap-1.5">
                   <li>
                       <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                           href="{{ route('admin.dashboard') }}">
                           Dashboard
                           <svg class="stroke-current" width="17" height="16" xmlns="http://www.w3.org/2000/svg"
                               fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                               class="size-6">
                               <path stroke-linecap="round" stroke-linejoin="round"
                                   d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                           </svg>

                       </a>
                   </li>
                   <li class="text-sm text-gray-800 dark:text-white/90" x-text="$store.pageName?.name ?? ''"></li>
               </ol>
           </nav>
       </div>
       {{-- ======================== Page Header End Here ======================== --}}

       <div class="flex-1 w-full bg-white rounded-lg min-h-[80vh]">
           {{-- ======================== Content Start From Here ======================== --}}
           <div class="grid grid-cols-2 gap-4 px-4 py-4 ">
               <div>

               </div>
               <div>
                   <div class="flex gap-4 sm:gap-6 justify-end items-end mt-2">

                       <div class="group">
                           <button wire:click="store()" type="button"
                               class="flex items-center gap-2 transition-shadow shadow-sm hover:shadow-md hover:text-gray-900 cursor-pointer rounded-md border border-gray-300 px-4 py-2">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                   stroke-width="1.5" stroke="currentColor" class="size-6">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                       d="M12 9.75v6.75m0 0-3-3m3 3 3-3m-8.25 6a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                               </svg>



                               <span class="text-sm font-medium">Save</span>
                           </button>
                       </div>
                   </div>
               </div>
           </div>
           <div class="overflow-x-auto rounded mx-4 px-2">
               <div class="min-w-full divide-y-2 divide-gray-200">

                   <form action="#" class="space-y-4" wire:submit.prevent="store">

                       <div class="grid grid-cols-1 gap-1">
                           <label class="block text-sm font-medium text-gray-900" for="name">Name/Title<span
                                   class="size-6 text-red-500 mr-1.5">*</span></label>
                           <input wire:model="name" name="name"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                               id="name" type="text" placeholder="Enter project title" />
                           @error('name')
                               <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                           @enderror
                       </div>

                       <div class="grid grid-cols-2 gap-1">

                           <div class="grid grid-cols-1 gap-1">
                               <label class="block text-sm font-medium text-gray-900" for="name">Project Demo
                                   Link</label>
                               <input wire:model="demo_link" name="demo_link"
                                   class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                                   id="name" type="text" placeholder="Enter Project Live link" />
                               @error('demo_link')
                                   <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="grid grid-cols-1 gap-1">
                               <label class="block text-sm font-medium text-gray-900" for="name">Service</label>
                               <select wire:model="service_id" name="service_id"
                                   class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2">
                                   <option value="">Select Service</option>
                                   @foreach ($services as $service)
                                       <option value="{{ $service->id }}" {{ $service_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                                   @endforeach
                                </select>
                               @error('service_id')
                                   <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                               @enderror
                           </div>
                       </div>




                       <div>
                           <label class="block text-sm font-medium text-gray-900" for="discription">Short
                               Description</label>

                           <textarea wire:model="short_description"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                               id="discription" rows="4" placeholder="Enter Discription"></textarea>
                           @error('newPDescription')
                               <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                           @enderror
                       </div>
                       <div>
                           <label class="block text-sm font-medium text-gray-900" for="discription">Description</label>
                           <div wire:ignore>
                               <textarea class="min-h-50" id="editor" wire:model="description"></textarea>
                           </div>

                           @error('description')
                               <span class="text-sm text-red-600">{{ $message }}</span>
                           @enderror
                       </div>



                       <div class="flex flex-row gap-1 mt-2" wire:key="new-product-image-container">
                           @if ($featured_image && $featured_image?->temporaryUrl())
                               <div class="grid grid-cols-1 gap-1 flex-1">
                                   <div class="w-full">
                                       <img src="{{ $featured_image?->temporaryUrl() }}" alt="Product Image Preview"
                                           class="w-full h-auto rounded-lg shadow-sm">
                                   </div>
                               </div>
                           @elseif ($old_featured_image)
                               <div class="grid grid-cols-1 gap-1 flex-1">
                                   <div class="w-full">
                                       <img src="{{ $old_featured_image }}" alt="Product Image Preview"
                                           class="w-full h-auto rounded-lg shadow-sm">
                                   </div>
                               </div>
                           @endif
                           <div class="grid grid-cols-1 gap-1 flex-1 ">
                               <label for="NewFile"
                                   class="flex flex-col items-center rounded-lg border border-gray-300 p-4 text-gray-900 shadow-sm sm:p-6">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                       stroke-width="1.5" stroke="currentColor" class="size-6">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                           d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75">
                                       </path>
                                   </svg>

                                   <span class="mt-4 font-medium"> Upload Product Image <span
                                           class="size-6 text-red-500 mr-1.5">*</span> </span>

                                   <span
                                       class="mt-2 inline-block rounded border border-gray-200 bg-gray-50 px-3 py-1.5 text-center text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-100">
                                       Browse file
                                   </span>
                                   @error('featured_image')
                                       <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                   @enderror

                                   <input wire:key="new-product-image" wire:model.live="featured_image"
                                       type="file" id="NewFile" class="sr-only">
                               </label>
                           </div>
                       </div>
                       <div class="bg-gray-100 shadow-sm border border-gray-200 px-2 py-2 rounded mb-2">
                           <h3 class="bolder ">SEO Data</h3>
                       </div>

                       <div class="grid grid-cols-2 gap-1">
                           <div class="grid grid-cols-1 gap-1">
                               <label class="block text-sm font-medium text-gray-900" for="name">SEO Title<span
                                       class="size-6 text-red-500 mr-1.5">*</span></label>
                               <input wire:model="meta_title" name="name"
                                   class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                                   id="meta_title" type="text" placeholder="Enter project title" />
                               @error('meta_title')
                                   <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="grid grid-cols-1 gap-1">
                               <label class="block text-sm font-medium text-gray-900" for="slug">URL Slug</label>
                               <div class="relative">


                                   <input wire:model="slug"
                                       class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                                       id="slug" type="text" placeholder="Enter slug" />
                                   <span wire:click="generateSlug"
                                       class="absolute right-2 top-1/2 bottom-0 transform -translate-y-1/2 text-gray-400 hover:text-gray-700 z-1 cursor-pointer">

                                       <i wire:loading.remove wire:target="generateSlug"
                                           class="bx  bx-refresh text-2xl"></i>
                                       <i wire:loading wire:target="generateSlug"
                                           class="bx  bx-refresh text-2xl bx-spin"></i>

                                   </span>
                               </div>
                               @error('slug')
                                   <span class="text-red-500">{{ $message }}</span>
                               @enderror
                           </div>


                       </div>




                       <div>
                           <label class="block text-sm font-medium text-gray-900" for="discription">Short
                               Description</label>

                           <textarea wire:model="meta_description"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                               id="discription" rows="4" placeholder="Enter Discription"></textarea>
                           @error('newPDescription')
                               <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                           @enderror
                       </div>


                       <div class="flex flex-row gap-1 mt-2" wire:key="meta-image">
                           @if ($meta_image && $meta_image?->temporaryUrl())
                               <div class="grid grid-cols-1 gap-1 flex-1">
                                   <div class="w-full">
                                       <img src="{{ $meta_image?->temporaryUrl() }}" alt="Product Image Preview"
                                           class="w-full h-auto rounded-lg shadow-sm">
                                   </div>
                               </div>
                           @elseif ($old_meta_image)
                               <div class="grid grid-cols-1 gap-1 flex-1">
                                   <div class="w-full">
                                       <img src="{{ $old_meta_image }}" alt="Product Image Preview"
                                           class="w-full h-auto rounded-lg shadow-sm">
                                   </div>
                               </div>
                           @endif
                           <div class="grid grid-cols-1 gap-1 flex-1 ">
                               <label for="NewFile"
                                   class="flex flex-col items-center rounded-lg border border-gray-300 p-4 text-gray-900 shadow-sm sm:p-6">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                       stroke-width="1.5" stroke="currentColor" class="size-6">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                           d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75">
                                       </path>
                                   </svg>

                                   <span class="mt-4 font-medium"> Upload Product Image <span
                                           class="size-6 text-red-500 mr-1.5">*</span> </span>

                                   <span
                                       class="mt-2 inline-block rounded border border-gray-200 bg-gray-50 px-3 py-1.5 text-center text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-100">
                                       Browse file
                                   </span>
                                   @error('featured_image')
                                       <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                   @enderror

                                   <input wire:key="new-product-image" wire:model.live="meta_image" type="file"
                                       id="NewFile" class="sr-only">
                               </label>
                           </div>
                       </div>

                   </form>
               </div>

           </div>

           {{-- =========================== Content End Here ============================ --}}
       </div>
       <script src="https://cdn.tiny.cloud/1/6fc0o57nwmnuyujo3x2t2m7qttqr09s74djxb47lnzygcixp/tinymce/8/tinymce.min.js"
           referrerpolicy="origin" crossorigin="anonymous"></script>
       <script>
           document.addEventListener('DOMContentLoaded', () => {


               tinymce.init({
                   selector: '#editor',
                   height: 400,
                   plugins: 'link table lists code image', // add premium plugins here
                   toolbar: 'undo redo | bold italic underline | bullist numlist | link table | code',

                   setup: function(editor) {
                       editor.on('Change KeyUp', function() {
                           @this.set('description', editor.getContent());
                       });
                   }
               });
           })
       </script>
   </div>
   {{-- =========================== Page Layout End Here ============================ --}}
