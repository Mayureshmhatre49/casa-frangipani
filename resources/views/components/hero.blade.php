<section class="relative min-h-screen bg-[#003D47] text-white overflow-hidden">
    <!-- Background overlay -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-6 py-28 grid lg:grid-cols-2 gap-12 items-center">
        
        <!-- Left content -->
        <div>
            <span class="inline-block mb-4 px-4 py-1 rounded-full bg-white/10 text-sm">
                Private Luxury Villa • Alibaug
            </span>

            <h1 class="text-4xl md:text-6xl font-serif leading-tight mb-6">
                Casa Frangipani  
                <span class="block text-[#22D1EE]">
                    A Private Pool Villa for Elite Getaways
                </span>
            </h1>

            <p class="text-lg text-white/90 max-w-xl mb-8">
                A serene 6-bedroom luxury villa surrounded by lush greenery, 
                perfect for family vacations, celebrations, and corporate retreats.
            </p>

            <div class="flex gap-4">
                <a href="#booking" class="bg-[#22D1EE] text-[#003D47] px-8 py-4 rounded-xl font-semibold">
                    Check Availability
                </a>
                <a href="https://wa.me/91XXXXXXXXXX" class="border border-white/40 px-8 py-4 rounded-xl">
                    WhatsApp Enquiry
                </a>
            </div>
        </div>

        <!-- Booking form -->
        <div id="booking" class="backdrop-blur-xl bg-white/10 rounded-2xl p-6 shadow-2xl">
            @livewire('booking-form')
        </div>
    </div>
</section>