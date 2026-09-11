@props(['name', 'position', 'review', 'avatar', 'rating' => 5])

<div class="bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 transform border border-yellow-100">

    <!-- Stars -->
    <div class="flex gap-1 mb-4">
        @for($i = 0; $i < $rating; $i++)
        <span class="text-pc-yellow text-lg">★</span>
        @endfor
    </div>

    <!-- Review Text -->
    <p class="text-gray-600 text-sm leading-relaxed mb-6 italic">
        "{{ $review }}"
    </p>

    <!-- Customer Info -->
    <div class="flex items-center gap-4">
        <!-- Avatar -->
        <img
            src="{{ $avatar }}"
            alt="{{ $name }}"
            class="w-12 h-12 rounded-full object-cover border-2 border-pc-yellow shadow-sm"
        />
        <div>
            <p class="text-pc-green font-bold text-sm">{{ $name }}</p>
            <p class="text-gray-400 text-xs">{{ $position }}</p>
        </div>
    </div>

</div>