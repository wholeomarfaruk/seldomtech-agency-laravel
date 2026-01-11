@props(['project'])
<div
    class="swiper-slide max-w-[300px] bg-gradient-to-b from-[#1b1b2a] to-[#0f0f18] border border-white/10 rounded-2xl p-5 flex flex-col h-full transition hover:border-purple-500/40">

    <!-- Project Image -->
    <div class="rounded-xl overflow-hidden mb-4">
        <img src="{{ $project?->featured_image }}" alt="{{ $project?->title }}"
            class="w-full h-48 object-cover">
    </div>

    <!-- Category -->
    <span
        class="inline-block w-fit mb-3
                            text-[10px] px-3 py-1 rounded-full
                            bg-purple-500/10 text-purple-400">
        @if ($project?->parent_category)
            {{ $project?->parent_category['name'] }}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-2 inline">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        @endif

        {{ $project?->category['name'] }}
    </span>

    <!-- Title -->
    <h3 class="text-white text-lg font-semibold mb-2">
        {{ $project?->title }}
    </h3>

    <!-- Description -->
    <p class="text-gray-400 text-sm mb-6">
        {{ $project?->description }}
    </p>

    <!-- Spacer pushes buttons to bottom -->
    <div class="mt-auto flex items-center gap-3">

        <!-- Build Mine -->
        <a href="{{ $project?->url }}"
            class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-purple-500/40
                                    text-purple-400 text-sm
                                    hover:bg-purple-500 hover:text-white
                                    transition">
            Build Mine →
        </a>

        <!-- Demo Button -->
        <a href="{{ $project?->url }}"
            class="inline-flex items-center gap-2
                                    px-4 py-2 rounded-lg
                                    border border-white/10
                                    text-gray-300 text-sm
                                    hover:bg-white/10 hover:text-white
                                    transition">
            Live Demo
        </a>
    </div>
</div>
