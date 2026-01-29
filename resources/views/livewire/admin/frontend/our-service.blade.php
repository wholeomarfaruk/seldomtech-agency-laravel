   {{-- ======================== Page Layout Start From Here ======================== --}}
   <div x-data x-init="$store.pageName = { name: 'Services', slug: 'services' }">
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
                   <label for="Search">
                       {{-- <span class="text-sm font-medium text-gray-700"> Search </span> --}}

                       <div class="relative">
                           <input type="text" wire:model.live.debounce="search" id="Search"
                               placeholder="Search by Name"
                               class="mt-0.5 w-full rounded border-gray-300 px-2 py-2 shadow-sm sm:text-sm">

                           <span class="absolute inset-y-0 right-2 grid w-8 place-content-center">
                               <button type="button" aria-label="Submit"
                                   class="rounded-full p-1.5 text-gray-700 transition-colors hover:bg-gray-100">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                       stroke-width="1.5" stroke="currentColor" class="size-4">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                           d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z">
                                       </path>
                                   </svg>
                               </button>
                           </span>
                       </div>
                   </label>
               </div>
               <div>
                   <div class="flex gap-4 sm:gap-6 justify-end items-end mt-2">
                       {{-- <details class="group relative">
                           <summary
                               class="flex items-center gap-2 border-b border-gray-300 pb-1 text-gray-700 transition-colors hover:border-gray-400 cursor-pointer hover:text-gray-900 [&amp;::-webkit-details-marker]:hidden ">
                               <span class="text-sm font-medium"> Filter </span>

                               <span class="transition-transform group-open:-rotate-180">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                       stroke-width="1.5" stroke="currentColor" class="size-4">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                           d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                   </svg>
                               </span>
                           </summary>

                           <div
                               class="z-auto w-64 divide-y divide-gray-300 rounded border border-gray-300 bg-white shadow-sm group-open:absolute group-open:end-0 group-open:top-8">
                               <div class="flex items-center justify-between px-3 py-2">
                                   <span class="text-sm text-gray-700"> 0 Selected </span>

                                   <button type="button"
                                       class="text-sm text-gray-700 underline transition-colors hover:text-gray-900">
                                       Reset
                                   </button>
                               </div>

                               <fieldset class="">
                                   <legend class="sr-only">Checkboxes</legend>

                                   <div class="flex flex-col items-start gap-3">
                                       <label for="Option1" class="inline-flex items-center gap-3">
                                           <input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm"
                                               id="Option1">

                                           <span class="text-sm font-medium text-gray-700"> Option 1 </span>
                                       </label>

                                       <label for="Option2" class="inline-flex items-center gap-3">
                                           <input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm"
                                               id="Option2">

                                           <span class="text-sm font-medium text-gray-700"> Option 2 </span>
                                       </label>

                                       <label for="Option3" class="inline-flex items-center gap-3">
                                           <input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm"
                                               id="Option3">

                                           <span class="text-sm font-medium text-gray-700"> Option 3 </span>
                                       </label>
                                   </div>
                               </fieldset>
                           </div>
                       </details> --}}
                       <div class="group">
                           <button wire:click="serviceModal=true" type="button"
                               class="flex items-center gap-2 transition-shadow shadow-sm hover:shadow-md hover:text-gray-900 cursor-pointer rounded-md border border-gray-300 px-4 py-2">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                   stroke-width="1.5" stroke="currentColor" class="size-6">
                                   <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                               </svg>

                               <span class="text-sm font-medium"> New Service</span>
                       </div>
                   </div>
               </div>
           </div>
           <div
               class="min-h-screen rounded-2xl border border-gray-200 bg-white px-5 py-7 xl:px-10 xl:py-12 dark:border-gray-800 dark:bg-white/[0.03]">

               <div class="space-y-4">
                   @if ($services->count() > 0)


                       <ul class="space-y-2">
                           @foreach ($services as $item)
                               <x-admin.menu-item :item="$item" />
                           @endforeach
                       </ul>
                   @endif
               </div>
           </div>
           {{-- =========================== Content End Here ============================ --}}
       </div>
       <div x-cloak x-data="{ serviceModal: @entangle('serviceModal') }" x-show="serviceModal" x-transition
           class="fixed inset-0 z-50 grid place-content-center bg-black/50 p-4" role="dialog" aria-modal="true"
           aria-labelledby="modalTitle">
           <div
               class="w-full md:w-md rounded-lg bg-white p-6 shadow-lg overflow-auto scrollbar scrollbar-thin scrollbar-transparent scrollbar-track-gray-100 scrollbar-thumb-gray-300 scrollbar-thumb-rounded-full scrollbar-track-rounded-full">
               <div class="flex items-start justify-between">
                   <h2 id="modalTitle" class="text-xl font-bold text-gray-900 sm:text-2xl">Add New Service</h2>

                   <button wire:click="serviceModal=false" type="button"
                       class="cursor-pointer -me-4 -mt-4 rounded-full p-2 text-gray-400 transition-colors hover:bg-gray-50 hover:text-gray-600 focus:outline-none"
                       aria-label="Close">
                       <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="M6 18L18 6M6 6l12 12"></path>
                       </svg>
                   </button>
               </div>

               <div class="mt-4">

                   <form class="space-y-4" wire:submit.prevent="storeService">
                    <input type="hidden" wire:model="service_id">
                       <div class="grid grid-cols-1 gap-1">
                           <label class="block text-sm font-medium text-gray-900" for="name">Name</label>
                           <input wire:model="name"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                               id="name" type="text" placeholder="Enter service Name" />
                           @error('name')
                               <span class="text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="grid grid-cols-1 gap-1">
                           <label class="block text-sm font-medium text-gray-900" for="slug">Slug</label>
                           <div class="relative">


                               <input wire:model="slug"
                                   class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                                   id="slug" type="text" placeholder="Enter slug" />
                               <span wire:click="generateSlug"
                                   class="absolute right-2 top-1/2 bottom-0 transform -translate-y-1/2 text-gray-400 hover:text-gray-700 z-1 cursor-pointer">
                                   {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                       stroke-width="1.5" stroke="currentColor" class="size-4">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                           d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                   </svg> --}}
                               <i wire:loading.remove wire:target="generateSlug" class="bx  bx-refresh text-2xl"></i>
                               <i wire:loading wire:target="generateSlug" class="bx  bx-refresh text-2xl bx-spin"></i>

                               </span>
                           </div>
                           @error('slug')
                               <span class="text-red-500">{{ $message }}</span>
                           @enderror
                       </div>


                       <div class="grid grid-cols-1 gap-1">
                           <label class="block text-sm font-medium text-gray-900" for="parent_id">
                               Parent Service</label>
                           <select name="parent_id" id="parent_id" wire:model="parent_id"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2">
                               <option value="">Select Parent service</option>
                               @foreach ($services as $service)
                                   <option value="{{ $service->id }}">{{ $service->name }}</option>
                               @endforeach
                           </select>
                           @error('parent_id')
                               <span class="text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="grid grid-cols-1 gap-1">
                           <label class="block text-sm font-medium text-gray-900" for="is_active">is Active</label>
                           <select name="is_active" id="is_active" wire:model="is_active"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2">
                               <option value="1">Active</option>
                               <option value="0">Inactive</option>
                           </select>
                           @error('parent_id')
                               <span class="text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                       {{-- <div class="grid grid-cols-1 gap-1">
                           <label class="block text-sm font-medium text-gray-900" for="email">Email</label>
                           <input wire:model="newCustomerEmail"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                               id="email" type="email" placeholder="Enter Email" />
                       </div> --}}
                       <div class="grid grid-cols-1 gap-1">
                           <label class="block text-sm font-medium text-gray-900" for="icon">Icon SVG Code</label>
                           <input wire:model="icon"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                               id="icon" type="text" placeholder="Enter service icon" />
                           @error('icon')
                               <span class="text-red-500">{{ $message }}</span>
                           @enderror
                       </div>
                       <div>
                           <label class="block text-sm font-medium text-gray-900" for="address">Description</label>


                           <textarea wire:model="description"
                               class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:outline-none p-2"
                               id="address" rows="4" placeholder="Enter Description"></textarea>
                           @error('description')
                               <span class="text-red-500">{{ $message }}</span>
                           @enderror
                       </div>


                       <button type="submit"
                           class="block w-full rounded-lg border border-indigo-600 bg-white px-12 py-3 text-sm font-medium text-indigo-600 transition-colors hover:bg-indigo-500 hover:text-white cursor-pointer">
                           Submit
                       </button>
                   </form>

               </div>
           </div>
       </div>
   </div>
   {{-- =========================== Page Layout End Here ============================ --}}
