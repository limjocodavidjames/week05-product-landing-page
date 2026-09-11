@props(['icon', 'title', 'description', 'accent' => 'yellow'])

<div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 transform border border-yellow-100 group">
    
    <!-- Icon -->
    <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl mb-5 shadow-sm
        {{ $accent === 'red' ? 'bg-red-50' : ($accent === 'green' ? 'bg-green-50' : 'bg-yellow-50') }}">
        {{ $icon }}
    </div>

    <!-- Title -->
    <h3 class="text-pc-green font-bold text-lg mb-2 group-hover:text-pc-yellow transition-colors duration-200">
        {{ $title }}
    </h3>

    <!-- Description -->
    <p class="text-gray-500 text-sm leading-relaxed">
        {{ $description }}
    </p>

</div>