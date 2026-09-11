<section id="home" class="min-h-screen flex items-center pt-16 pb-16 relative"
    style="background-image: url('{{ asset('images/hero-fries.jpg') }}'); background-size: cover; background-position: center;">

    <!-- Dark Green Gradient Overlay -->
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(5,40,15,0.97) 0%, rgba(5,40,15,0.95) 55%, rgba(5,40,15,0.60) 100%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left: Text Content -->
            <div class="text-center lg:text-left relative z-10">

                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/20 border border-white/30 rounded-full px-4 py-1.5 mb-6 backdrop-blur-sm">
                    <span class="w-2 h-2 bg-pc-yellow rounded-full animate-pulse"></span>
                    <span class="text-white text-xs font-semibold tracking-wide uppercase">Now Open in Sta. Cruz, Laguna</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight mb-4" style="color: #ffffff; text-shadow: 0 2px 12px rgba(0,0,0,0.8);">
                    Your Favorite
                    <span style="color: #FBBF24; text-shadow: 0 2px 12px rgba(0,0,0,0.8);"> Fries,</span>
                    <br>
                    <span style="color: #FBBF24; text-shadow: 0 2px 12px rgba(0,0,0,0.8);">Perfectly</span> Flavored.
                </h1>

                <!-- Description -->
                <p class="text-white text-lg sm:text-xl leading-relaxed mb-8 max-w-lg mx-auto lg:mx-0" style="text-shadow: 0 2px 8px rgba(0,0,0,0.9); opacity: 1;">
                    Experience the iconic flavored fries of Potato Corner right here in Sta. Cruz, Laguna.
                    Crispy, golden, and loaded with your favorite seasonings — happiness in every bite.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <x-button href="#pricing" variant="primary" size="lg">
                        🍟 Order Now
                    </x-button>
                    <x-button href="#features" variant="outline" size="lg">
                        Discover Our Flavors
                    </x-button>
                </div>

                <!-- Stats -->
                <div class="flex flex-wrap gap-8 justify-center lg:justify-start mt-12">
                    <div class="text-center bg-black/30 rounded-2xl px-5 py-3 backdrop-blur-sm">
                        <p class="text-pc-yellow font-black text-3xl">10+</p>
                        <p class="text-white text-sm font-medium">Flavor Options</p>
                    </div>
                    <div class="text-center bg-black/30 rounded-2xl px-5 py-3 backdrop-blur-sm">
                        <p class="text-pc-yellow font-black text-3xl">500+</p>
                        <p class="text-white text-sm font-medium">Happy Customers</p>
                    </div>
                    <div class="text-center bg-black/30 rounded-2xl px-5 py-3 backdrop-blur-sm">
                        <p class="text-pc-yellow font-black text-3xl">★ 4.9</p>
                        <p class="text-white text-sm font-medium">Customer Rating</p>
                    </div>
                </div>

            </div>

            <!-- Right: Visual -->
            <div class="flex justify-center lg:justify-end">
                <div class="relative">

                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-pc-yellow opacity-20 blur-3xl rounded-full scale-75"></div>

                    <!-- Fries Photo Card -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl max-w-sm w-full border-4 border-green-600"
                         style="transform: rotate(2deg);">
                        <img
                            src="{{ asset('images/hero-fries.jpg') }}"
                            alt="Potato Corner Flavored Fries"
                            class="w-full h-96 object-cover"
                        />
                        <!-- Overlay Badge -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-pc-green via-green-900/80 to-transparent p-6">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="bg-pc-yellow text-pc-green text-xs font-black px-3 py-1 rounded-full">BBQ</span>
                                <span class="bg-pc-red text-white text-xs font-black px-3 py-1 rounded-full">Cheese</span>
                                <span class="bg-orange-500 text-white text-xs font-black px-3 py-1 rounded-full">Spicy BBQ</span>
                                <span class="bg-green-500 text-white text-xs font-black px-3 py-1 rounded-full">Sour Cream</span>
                            </div>
                            <p class="text-white font-black text-lg">Want Some? 🍟</p>
                            <p class="text-green-300 text-xs">Fresh • Crispy • Flavored</p>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -top-4 -right-4 bg-pc-yellow text-pc-green font-black text-xs px-4 py-2 rounded-full shadow-lg rotate-12">
                        ★ 4.9 Rated!
                    </div>

                </div>
            </div>

        </div>
        </div>
    </div>
</section>