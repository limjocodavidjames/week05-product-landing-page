<section id="showcase" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block bg-yellow-100 text-pc-green text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4">
                Our Products
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-pc-green leading-tight mb-4">
                A Closer Look at
                <span class="text-pc-yellow"> Our Fries</span>
            </h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto">
                From small snack cups to large sharing buckets — Potato Corner has the perfect size and flavor for every craving.
            </p>
        </div>

        <!-- Main Showcase Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">

            <!-- Screenshot / Hero Product Card -->
            <div class="bg-gradient-to-br from-pc-green to-green-800 rounded-3xl p-8 flex flex-col justify-between min-h-64 shadow-xl">
                <div class="flex items-center gap-2 mb-4">
                    <span class="bg-pc-yellow text-pc-green text-xs font-black px-3 py-1 rounded-full">BESTSELLER</span>
                    <span class="bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-full">Fan Favorite</span>
                </div>
                <div class="text-center py-4">
                    <div class="rounded-2xl overflow-hidden mb-4 shadow-lg">
                        <img
                            src="{{ asset('images/bbq-fries.jpg') }}"
                            alt="Classic BBQ Fries"
                            class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500"
                        />
                    </div>
                    <h3 class="text-white font-black text-2xl mb-2">Classic BBQ Fries</h3>
                    <p class="text-green-200 text-sm leading-relaxed">
                        Our most popular flavor — smoky, savory BBQ seasoning on golden crispy fries. A true Potato Corner classic.
                    </p>
                </div>
                <div class="flex gap-3 mt-4">
                    <div class="flex-1 bg-green-700 rounded-xl p-3 text-center">
                        <p class="text-pc-yellow font-black text-lg">Small</p>
                        <p class="text-green-300 text-xs">₱35</p>
                    </div>
                    <div class="flex-1 bg-green-700 rounded-xl p-3 text-center">
                        <p class="text-pc-yellow font-black text-lg">Regular</p>
                        <p class="text-green-300 text-xs">₱55</p>
                    </div>
                    <div class="flex-1 bg-green-700 rounded-xl p-3 text-center">
                        <p class="text-pc-yellow font-black text-lg">Large</p>
                        <p class="text-green-300 text-xs">₱75</p>
                    </div>
                </div>
            </div>

            <!-- Dashboard Preview — Flavor Menu -->
            <div class="bg-gray-50 border border-gray-100 rounded-3xl overflow-hidden shadow-md">

                <!-- Flavor Grid Photo -->
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="{{ asset('images/flavors-grid.jpg') }}"
                        alt="Potato Corner Flavors"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-pc-green/80 to-transparent flex items-end p-4">
                        <p class="text-white font-black text-lg">Our Famous Flavors</p>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-pc-green font-black text-lg">Flavor Menu</h3>
                        <span class="text-xs text-gray-400 font-medium">All available daily</span>
                    </div>
                    <div class="space-y-2">
                        @foreach([
                            ['name' => 'BBQ', 'emoji' => '🔥', 'desc' => 'Smoky & Savory', 'color' => 'bg-orange-100 text-orange-700'],
                            ['name' => 'Cheese', 'emoji' => '🧀', 'desc' => 'Rich & Creamy', 'color' => 'bg-yellow-100 text-yellow-700'],
                            ['name' => 'Sour Cream', 'emoji' => '🤍', 'desc' => 'Tangy & Smooth', 'color' => 'bg-blue-100 text-blue-700'],
                            ['name' => 'Spicy BBQ', 'emoji' => '🌶️', 'desc' => 'Bold & Fiery', 'color' => 'bg-red-100 text-red-700'],
                            ['name' => 'Ranch', 'emoji' => '🌿', 'desc' => 'Cool & Herby', 'color' => 'bg-green-100 text-green-700'],
                        ] as $flavor)
                        <div class="flex items-center justify-between bg-white rounded-xl px-4 py-2.5 border border-gray-100 hover:border-pc-yellow transition-colors duration-200">
                            <div class="flex items-center gap-3">
                                <span class="text-lg">{{ $flavor['emoji'] }}</span>
                                <div>
                                    <p class="text-pc-green font-bold text-sm">{{ $flavor['name'] }}</p>
                                    <p class="text-gray-400 text-xs">{{ $flavor['desc'] }}</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-2 py-1 rounded-full {{ $flavor['color'] }}">
                                Available
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Row -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

            <!-- Mobile View Card -->
            <div class="bg-pc-green rounded-3xl p-6 text-center shadow-xl">
                <div class="text-5xl mb-3">📱</div>
                <h4 class="text-white font-black text-lg mb-2">Order Anytime</h4>
                <p class="text-green-200 text-sm leading-relaxed">
                    Visit us in person or send your order ahead. We're ready to serve you fresh fries anytime!
                </p>
            </div>

            <!-- Key Highlight 1 -->
            <div class="bg-pc-yellow rounded-3xl p-6 text-center shadow-xl">
                <div class="text-5xl mb-3">⏱️</div>
                <h4 class="text-pc-green font-black text-lg mb-2">Ready in Minutes</h4>
                <p class="text-green-800 text-sm leading-relaxed">
                    Fresh fries cooked to order in just a few minutes. Fast, hot, and absolutely delicious.
                </p>
            </div>

            <!-- Key Highlight 2 -->
            <div class="bg-pc-red rounded-3xl p-6 text-center shadow-xl">
                <div class="text-5xl mb-3">🎉</div>
                <h4 class="text-white font-black text-lg mb-2">Perfect for Groups</h4>
                <p class="text-red-100 text-sm leading-relaxed">
                    Sharing sizes available! Perfect for barkada snacks, family merienda, or party orders.
                </p>
            </div>

        </div>

    </div>
</section>