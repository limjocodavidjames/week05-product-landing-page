<nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-pc-green shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-pc-yellow rounded-full flex items-center justify-center shadow-md">
                    <span class="text-pc-green font-black text-lg">🍟</span>
                </div>
                <div class="leading-tight">
                    <span class="text-pc-yellow font-black text-lg tracking-tight">Potato</span>
                    <span class="text-white font-black text-lg tracking-tight"> Corner</span>
                    <p class="text-green-300 text-xs font-medium">Sta. Cruz, Laguna</p>
                </div>
            </div>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-6">
                <a href="#home" class="text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Home</a>
                <a href="#features" class="text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Features</a>
                <a href="#pricing" class="text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Pricing</a>
                <a href="#testimonials" class="text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Testimonials</a>
                <a href="#contact" class="text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Contact</a>
            </div>

            <!-- Desktop Buttons -->
            <div class="hidden md:flex items-center gap-3">
                <a href="#" class="text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Sign In</a>
                <a href="#" class="bg-pc-yellow hover:bg-yellow-300 text-pc-green font-bold text-sm px-5 py-2 rounded-full transition-all duration-200 shadow-md hover:shadow-lg">
                    Get Started
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button
                @click="open = !open"
                class="md:hidden text-white hover:text-pc-yellow transition-colors duration-200 focus:outline-none"
            >
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="md:hidden bg-pc-green border-t border-green-700 px-4 py-4 space-y-3">
        <a href="#home" class="block text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Home</a>
        <a href="#features" class="block text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Features</a>
        <a href="#pricing" class="block text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Pricing</a>
        <a href="#testimonials" class="block text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Testimonials</a>
        <a href="#contact" class="block text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Contact</a>
        <div class="pt-2 border-t border-green-700 flex flex-col gap-2">
            <a href="#" class="text-green-100 hover:text-pc-yellow text-sm font-medium transition-colors duration-200">Sign In</a>
            <a href="#" class="bg-pc-yellow hover:bg-yellow-300 text-pc-green font-bold text-sm px-5 py-2 rounded-full text-center transition-all duration-200">
                Get Started
            </a>
        </div>
    </div>
</nav>