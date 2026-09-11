<section id="testimonials" class="py-24 relative"
    style="background-image: url('{{ asset('images/testimonials-bg.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">

    <!-- Dark Overlay -->
    <div class="absolute inset-0" style="background: rgba(5, 40, 15, 0.90);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block bg-pc-yellow text-pc-green text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4">
                Testimonials
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-tight mb-4">
                What Our Customers
                <span class="text-pc-yellow"> Are Saying</span>
            </h2>
            <p class="text-green-200 text-lg max-w-2xl mx-auto">
                Don't just take our word for it — hear from the happy customers of Potato Corner Sta. Cruz, Laguna.
            </p>
        </div>

        <!-- Testimonial Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <x-testimonial-card
                name="Maria Santos"
                position="Student, Sta. Cruz National High School"
                review="Potato Corner is my go-to merienda after school! The BBQ flavor is absolutely addicting. I come here at least three times a week and I never get tired of it!"
                avatar="{{ asset('images/customer-1.jpg') }}"
                :rating="5"
            />

            <x-testimonial-card
                name="Carlo Reyes"
                position="Local Resident, Sta. Cruz Laguna"
                review="Masarap talaga ang fries dito! Laging fresh at crispy. Ang Cheese flavor namin paborito ng buong pamilya. Perfect na merienda para sa lahat ng edad!"
                avatar="{{ asset('images/customer-2.jpg') }}"
                :rating="5"
            />

            <x-testimonial-card
                name="Angela Cruz"
                position="Teacher, Laguna State Polytechnic University"
                review="I always recommend Potato Corner to my students and colleagues. Affordable, delicious, and always consistent. The Spicy BBQ flavor is my personal favorite!"
                avatar="{{ asset('images/customer-3.jpg') }}"
                :rating="5"
            />

        </div>

        <!-- Bottom Rating Summary -->
        <div class="mt-16 bg-white/10 backdrop-blur-sm rounded-3xl p-8 text-center border border-white/20">
            <div class="flex flex-wrap justify-center gap-12">
                <div>
                    <p class="text-pc-yellow font-black text-4xl">★ 4.9</p>
                    <p class="text-green-200 text-sm mt-1">Average Rating</p>
                </div>
                <div>
                    <p class="text-pc-yellow font-black text-4xl">500+</p>
                    <p class="text-green-200 text-sm mt-1">Happy Customers</p>
                </div>
                <div>
                    <p class="text-pc-yellow font-black text-4xl">100%</p>
                    <p class="text-green-200 text-sm mt-1">Would Recommend</p>
                </div>
            </div>
        </div>

    </div>
</section>