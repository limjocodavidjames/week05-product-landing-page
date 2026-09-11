@props([
    'plan',
    'price',
    'description',
    'features',
    'featured' => false,
    'badge' => null,
])

<div class="relative rounded-3xl p-8 flex flex-col transition-all duration-300 hover:-translate-y-1 transform
    {{ $featured
        ? 'bg-pc-green text-white shadow-2xl border-2 border-pc-yellow scale-105'
        : 'bg-white text-pc-green shadow-md hover:shadow-xl border border-gray-100' }}">

    <!-- Badge -->
    @if($badge)
    <div class="absolute -top-4 left-1/2 -translate-x-1/2">
        <span class="bg-pc-yellow text-pc-green text-xs font-black px-4 py-1.5 rounded-full shadow-md uppercase tracking-wide">
            {{ $badge }}
        </span>
    </div>
    @endif

    <!-- Plan Name -->
    <div class="mb-6">
        <h3 class="font-black text-xl mb-1 {{ $featured ? 'text-pc-yellow' : 'text-pc-green' }}">
            {{ $plan }}
        </h3>
        <p class="text-sm {{ $featured ? 'text-green-300' : 'text-gray-400' }}">
            {{ $description }}
        </p>
    </div>

    <!-- Price -->
    <div class="mb-8">
        <div class="flex items-end gap-1">
            <span class="font-black text-5xl {{ $featured ? 'text-white' : 'text-pc-green' }}">
                ₱{{ $price }}
            </span>
            <span class="text-sm mb-2 {{ $featured ? 'text-green-300' : 'text-gray-400' }}">
                / order
            </span>
        </div>
    </div>

    <!-- Features List -->
    <ul class="space-y-3 mb-8 flex-1">
        @foreach($features as $feature)
        <li class="flex items-center gap-3 text-sm">
            <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0
                {{ $featured ? 'bg-pc-yellow text-pc-green' : 'bg-green-100 text-pc-green' }}">
                ✓
            </span>
            <span class="{{ $featured ? 'text-green-100' : 'text-gray-500' }}">
                {{ $feature }}
            </span>
        </li>
        @endforeach
    </ul>

    <!-- Button -->
    <a href="#contact" class="block text-center font-black text-sm py-3.5 px-6 rounded-full transition-all duration-200
        {{ $featured
            ? 'bg-pc-yellow text-pc-green hover:bg-yellow-300 shadow-lg hover:shadow-xl'
            : 'border-2 border-pc-green text-pc-green hover:bg-pc-green hover:text-white' }}">
        Order This Size
    </a>

</div>