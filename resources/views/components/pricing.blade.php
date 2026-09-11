<section id="pricing" class="py-24 bg-pc-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block bg-yellow-100 text-pc-green text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4">
                Pricing
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-pc-green leading-tight mb-4">
                Simple, Affordable
                <span class="text-pc-yellow"> Pricing</span>
            </h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto">
                Whether you're grabbing a quick snack or ordering for the whole barkada — we have the perfect size for you.
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

            <x-pricing-card
                plan="Starter"
                price="35"
                description="Perfect for a quick solo snack"
                :features="[
                    'Small serving of fries',
                    'Choice of 1 flavor',
                    'Served fresh & hot',
                    'Perfect for merienda',
                ]"
            />

            <x-pricing-card
                plan="Regular"
                price="55"
                description="Our most popular size"
                :features="[
                    'Regular serving of fries',
                    'Choice of 1 flavor',
                    'Served fresh & hot',
                    'Great for sharing',
                    'Best value for money',
                ]"
                :featured="true"
                badge="Most Popular"
            />

            <x-pricing-card
                plan="Large"
                price="75"
                description="For the hungry and the barkada"
                :features="[
                    'Large serving of fries',
                    'Choice of up to 2 flavors',
                    'Served fresh & hot',
                    'Perfect for groups',
                    'Best for parties & events',
                    'Free extra seasoning',
                ]"
            />

        </div>

        <!-- Bottom Note -->
        <div class="text-center mt-12">
            <p class="text-gray-400 text-sm">
                💡 Combo meals and party trays also available. 
                <a href="#contact" class="text-pc-green font-bold hover:text-pc-yellow transition-colors duration-200">
                    Ask us for details →
                </a>
            </p>
        </div>

    </div>
</section>