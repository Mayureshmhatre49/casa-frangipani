<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Casa Frangipani - Luxury Private Villa in Alibaug | 6BR Pool Villa</title>
        <meta name="description" content="Casa Frangipani: A serene 6-bedroom private pool villa in Alibaug surrounded by lush greenery. Perfect for premium getaways, celebrations, and peaceful retreats.">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles

        <script src="https://unpkg.com/lucide@latest"></script>
        <script type="module" async src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fvillabook6347back.builtwithrocket.new&_be=https%3A%2F%2Fappanalytics.rocket.new&_v=0.1.15"></script>
        <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.2"></script>
        <!-- Flatpickr for hero date range picker -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body class="antialiased bg-[#0A0A0A] text-white selection:bg-[#D4AF37]/20 selection:text-white font-dm-sans">
  

    <!-- Hero Section -->
    <main class="relative min-h-screen w-full overflow-hidden flex flex-col lg:flex-row border-b border-white/5">
        <!-- Animated Background Carousel & Decorative layers -->
        <div class="absolute inset-0 z-0">
            <div class="hero-bg-carousel" style="background-image: url('https://img.vistarooms.com/gallery/casa-frangipani-657c43.jpg'); background-size: cover; background-position: center;">
                <div class="hero-bg-slide active"><img src="https://img.vistarooms.com/gallery/casa-frangipani-657c43.jpg" alt="Casa Frangipani luxury villa" class="w-full h-full object-cover"/></div>
                <div class="hero-bg-slide"><img src="https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg" alt="Casa Frangipani pool view" class="w-full h-full object-cover"/></div>
                <div class="hero-bg-slide"><img src="https://img.vistarooms.com/gallery/casa-frangipani-9e5e0c.jpg" alt="Casa Frangipani interior" class="w-full h-full object-cover"/></div>
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-black/20 via-black/10 to-transparent pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-radial from-transparent via-black/8 to-transparent pointer-events-none"></div>
        </div>

        <!-- Floating decorative elements -->
        <div class="absolute inset-0 z-[1] pointer-events-none overflow-hidden">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
            <div class="particle particle-4"></div>
            <div class="particle particle-5"></div>
            <div class="particle particle-6"></div>
            <div class="absolute top-20 right-[15%] w-72 h-72 bg-[#D4AF37]/10 rounded-full blur-[100px] animate-float-slow"></div>
            <div class="absolute bottom-20 left-[10%] w-96 h-96 bg-[#D4AF37]/5 rounded-full blur-[120px] animate-float-slower"></div>
            <div class="absolute top-1/4 left-0 w-64 h-[1px] bg-gradient-to-r from-transparent via-[#D4AF37]/30 to-transparent animate-pulse-slow"></div>
            <div class="absolute bottom-1/3 right-0 w-80 h-[1px] bg-gradient-to-l from-transparent via-[#D4AF37]/20 to-transparent animate-pulse-slower"></div>
        </div>

        <!-- Left Side: Villa Info -->
        <div class="relative lg:w-3/5 min-h-screen flex flex-col justify-between z-20">
            <header class="relative z-50 w-full px-6 py-6 md:px-12 md:py-8 border-b border-white/5 backdrop-blur-xl bg-black/20">
                <div class="tracking-[0.3em] text-sm font-medium uppercase text-white hover:text-[#D4AF37] transition-all duration-500 cursor-pointer group flex items-center gap-3">
                    <div class="relative">
                        <div class="w-2.5 h-2.5 bg-[#D4AF37] rounded-full group-hover:scale-150 transition-transform duration-500"></div>
                        <div class="absolute inset-0 w-2.5 h-2.5 bg-[#D4AF37] rounded-full animate-ping opacity-75"></div>
                    </div>
                    <span class="hero-logo-text">Casa Frangipani</span>
                </div>
            </header>

            <div class="relative z-10 px-6 md:px-12 pb-16 md:pb-24 parallax-content">
                <div class="mb-8 inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-[#D4AF37]/30 bg-[#D4AF37]/10 backdrop-blur-xl shadow-lg animate-fade-in-up">
                    <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#D4AF37] animate-pulse-subtle"></i>
                    <span class="text-[11px] uppercase tracking-[0.2em] text-stone-200 font-medium">Alibaug, Maharashtra</span>
                </div>

                <h1 class="hero-title text-5xl md:text-7xl lg:text-8xl xl:text-9xl leading-[0.92] tracking-tighter text-white font-fraunces font-light mb-6 animate-fade-in-up">
                    <span class="block hero-title-line">Casa</span>
                    <span class="block hero-title-line text-[#D4AF37] italic">Frangipani</span>
                </h1>

                <div class="w-24 h-[2px] bg-gradient-to-r from-[#D4AF37] to-transparent mb-6 animate-width-expand"></div>

                <p class="text-xl md:text-2xl lg:text-3xl text-stone-300 font-light mb-8 max-w-2xl leading-relaxed tracking-wide hero-description animate-fade-in-up">
                    A serene 6-bedroom private pool villa surrounded by <span class="text-white font-normal">lush greenery</span>, designed for premium group getaways, celebrations, and peaceful retreats.
                </p>

                <div class="flex flex-wrap gap-4 mb-10 animate-fade-in-up">
                    <div class="flex items-center gap-2 bg-white/5 border border-white/10 rounded-lg px-4 py-2 backdrop-blur-md"> <i data-lucide="bed-double" class="w-4 h-4 text-[#D4AF37]"></i> <span class="text-sm text-stone-300">6 Luxury Bedrooms</span></div>
                    <div class="flex items-center gap-2 bg-white/5 border border-white/10 rounded-lg px-4 py-2 backdrop-blur-md"> <i data-lucide="users" class="w-4 h-4 text-[#D4AF37]"></i> <span class="text-sm text-stone-300">Up to 22 Guests</span></div>
                    <div class="flex items-center gap-2 bg-white/5 border border-white/10 rounded-lg px-4 py-2 backdrop-blur-md"> <i data-lucide="waves" class="w-4 h-4 text-[#D4AF37]"></i> <span class="text-sm text-stone-300">Private Pool</span></div>
                </div>

                <div class="flex flex-wrap gap-4 animate-fade-in-up">
                
                    <a href="https://wa.me/919881149629" target="_blank" class="group relative overflow-hidden flex items-center gap-2.5 border-2 border-white/30 text-white px-8 py-4 rounded-lg font-semibold text-sm hover:bg-white/10 hover:border-[#D4AF37] transition-all duration-300 backdrop-blur-md transform hover:scale-105 hover:-translate-y-1 shadow-lg">
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                        <span>WhatsApp Enquiry</span>
                    </a>
                </div>

                <!-- (Removed hero quick-pick) Date selection now in the booking form -->
            </div>
        </div>

        <!-- Right Side: Booking Form (keep Livewire) -->
        <div class="relative lg:w-2/5 bg-black/95 backdrop-blur-2xl border-l border-white/10 flex items-center justify-center p-8 lg:p-12 z-10">
            <div class="w-full max-w-md relative z-10">
                <div class="mb-10 text-center animate-fade-in-up">
                    <div class="inline-block mb-4 px-3 py-1 rounded-full border border-[#D4AF37]/30 bg-[#D4AF37]/10 backdrop-blur-sm">
                        <span class="text-[10px] uppercase tracking-[0.2em] text-[#D4AF37]">Exclusive Booking</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-fraunces text-white mb-3 tracking-tight">Reserve Your Stay</h2>
                    <p class="text-stone-400 text-sm">Fill in details for instant confirmation</p>
                </div>

                {{-- Livewire booking form --}}
                <livewire:booking-form />

                {{-- <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-center gap-6 animate-fade-in-up">
                    <div class="flex items-center gap-2"><i data-lucide="shield-check" class="w-4 h-4 text-[#D4AF37]"></i><span class="text-[10px] text-stone-500 uppercase">Secure Payment</span></div>
                    <div class="flex items-center gap-2"><i data-lucide="clock" class="w-4 h-4 text-[#D4AF37]"></i><span class="text-[10px] text-stone-500 uppercase">Instant Confirm</span></div>
                </div> --}}
            </div>
        </div>
    </main>

    <!-- Quick Stats Strip -->
    <section class="bg-black border-b border-white/5 py-12 px-6 md:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 md:gap-8">
                <div class="text-center group">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#D4AF37]/10 transition-colors">
                        <i data-lucide="bed-double" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <p class="text-2xl font-fraunces text-white mb-1">6</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Bedrooms</p>
                </div>

                <div class="text-center group">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#D4AF37]/10 transition-colors">
                        <i data-lucide="users" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <p class="text-2xl font-fraunces text-white mb-1">15-22</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Guests</p>
                </div>

                <div class="text-center group">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#D4AF37]/10 transition-colors">
                        <i data-lucide="waves" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <p class="text-2xl font-fraunces text-white mb-1">40×20</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Pool (ft)</p>
                </div>

                <div class="text-center group">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#D4AF37]/10 transition-colors">
                        <i data-lucide="trees" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <p class="text-2xl font-fraunces text-white mb-1">2000</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Lawn (sq ft)</p>
                </div>

                <div class="text-center group">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#D4AF37]/10 transition-colors">
                        <i data-lucide="utensils" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <p class="text-2xl font-fraunces text-white mb-1">Yes</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Meals</p>
                </div>

                <div class="text-center group">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#D4AF37]/10 transition-colors">
                        <i data-lucide="mountain" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <p class="text-2xl font-fraunces text-white mb-1">360°</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Views</p>
                </div>
            </div>
        </div>
    </section>

  

    <!-- About The Villa -->
    <section class="py-24 px-6 md:px-12 bg-black border-b border-white/5 relative overflow-hidden">
        <div class="absolute top-[20%] right-[10%] w-96 h-96 bg-[#D4AF37]/5 rounded-full blur-[128px] pointer-events-none"></div>
        
        <div class="max-w-6xl mx-auto">
            <div class="mb-8 animate-on-scroll">
                <span class="inline-block py-1 px-3 rounded-full border border-white/10 bg-white/5 text-[10px] uppercase tracking-widest text-stone-300 mb-6">
                    Your Private Paradise
                </span>
                <h2 class="text-3xl md:text-5xl font-fraunces text-white mb-4">
                    Step Into Serenity
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center animate-on-scroll">
                <div class="space-y-6">
                    <p class="text-lg text-stone-300 leading-relaxed font-light">
                        Step through the grand entrance into airy, sunlit spaces crafted with <span class="text-white font-medium">teakwood windows</span> and contemporary interiors. Ground-floor bedrooms open to the pool and garden, while upper-floor rooms offer <span class="text-white font-medium">private balconies</span> with scenic views.
                    </p>
                    <p class="text-base text-stone-400 leading-relaxed">
                        Surrounded by lush frangipani trees and sprawling greenery, Casa Frangipani is designed to be your peaceful escape from the city. The 8000 sq ft built-up area seamlessly blends luxury with nature, creating the perfect backdrop for celebrations, family gatherings, or quiet retreats.
                    </p>
                    <div class="flex flex-wrap gap-3 pt-4">
                        <div class="flex items-center gap-2 bg-white/5 border border-white/10 rounded-full px-4 py-2">
                            <i data-lucide="check-circle" class="w-4 h-4 text-[#D4AF37]"></i>
                            <span class="text-xs text-stone-300">Teak Wood Interiors</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white/5 border border-white/10 rounded-full px-4 py-2">
                            <i data-lucide="check-circle" class="w-4 h-4 text-[#D4AF37]"></i>
                            <span class="text-xs text-stone-300">Large Glass Windows</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white/5 border border-white/10 rounded-full px-4 py-2">
                            <i data-lucide="check-circle" class="w-4 h-4 text-[#D4AF37]"></i>
                            <span class="text-xs text-stone-300">8000 sq ft Built-up</span>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -top-4 -right-4 w-32 h-32 bg-[#D4AF37]/20 rounded-full blur-3xl"></div>
                    <img 
                        src="https://img.vistarooms.com/gallery/casa-frangipani-9e5e0c.jpg" 
                        alt="Casa Frangipani living room with teakwood interiors and pool view"
                        class="rounded-2xl border border-white/10 relative z-10 shadow-2xl"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Exclusive Amenities Bento Grid -->
    <section id="amenities" class="py-24 px-6 md:px-12 bg-neutral-950/50 border-b border-white/5 relative">
        <div class="absolute top-[40%] left-[20%] w-[500px] h-[500px] bg-[#D4AF37]/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto">
            <div class="mb-16 text-center animate-on-scroll">
                <span class="inline-block py-1 px-3 rounded-full border border-white/10 bg-white/5 text-[10px] uppercase tracking-widest text-stone-300 mb-6">
                    Premium Amenities
                </span>
                <h2 class="text-3xl md:text-5xl font-fraunces text-white">
                    Everything You Need
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-6">
                <!-- Outdoor -->
                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] transition-all animate-on-scroll">
                    <div class="w-12 h-12 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-4">
                        <i data-lucide="sun" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <h3 class="text-xl font-fraunces text-white mb-4">Outdoor</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Private swimming pool (20ft × 40ft)</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>BBQ area & sit-out</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Open terrace with views</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Landscaped lawn (2000 sq ft)</span>
                        </li>
                    </ul>
                </div>

                <!-- Indoor -->
                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] transition-all animate-on-scroll" style="transition-delay: 100ms">
                    <div class="w-12 h-12 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-4">
                        <i data-lucide="home" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <h3 class="text-xl font-fraunces text-white mb-4">Indoor</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>AC bedrooms with king-size beds</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Spacious living & dining area</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Wi-Fi & smart TV</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Sound system throughout</span>
                        </li>
                    </ul>
                </div>

                <!-- Extras -->
                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] transition-all animate-on-scroll" style="transition-delay: 200ms">
                    <div class="w-12 h-12 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-4">
                        <i data-lucide="sparkles" class="w-6 h-6 text-[#D4AF37]"></i>
                    </div>
                    <h3 class="text-xl font-fraunces text-white mb-4">Extras</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Indoor/outdoor games room</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Caretaker & housekeeping</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Free parking for 4+ cars</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-stone-400">
                            <i data-lucide="check" class="w-4 h-4 text-[#D4AF37] mt-0.5 flex-shrink-0"></i>
                            <span>Power backup system</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bedrooms & Spaces -->
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Ground Floor Bedrooms -->
                <div class="group relative rounded-2xl overflow-hidden border border-white/10 bg-white/[0.02] hover:bg-white/[0.04] transition-all animate-on-scroll">
                    <div class="relative h-64 overflow-hidden">
                        <img 
                            src="https://img.vistarooms.com/gallery/casa-frangipani-3b392f.jpg" 
                            alt="Ground floor bedroom with pool access at Casa Frangipani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="inline-block px-3 py-1 bg-[#D4AF37]/90 text-black text-xs font-medium rounded-full">Pool Access</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-fraunces text-white mb-2">Ground Floor Bedrooms</h3>
                        <p class="text-sm text-stone-400 mb-4">Direct pool and garden access with king-size beds and ensuite bathrooms</p>
                        <div class="flex items-center gap-4 text-xs text-stone-500">
                            <span class="flex items-center gap-1">
                                <i data-lucide="bed" class="w-3 h-3"></i>
                                King Size
                            </span>
                            <span class="flex items-center gap-1">
                                <i data-lucide="bath" class="w-3 h-3"></i>
                                Ensuite
                            </span>
                        </div>
                    </div>
                </div>

                <!-- First Floor Bedrooms -->
                <div class="group relative rounded-2xl overflow-hidden border border-white/10 bg-white/[0.02] hover:bg-white/[0.04] transition-all animate-on-scroll" style="transition-delay: 100ms">
                    <div class="relative h-64 overflow-hidden">
                        <img 
                            src="https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg" 
                            alt="First floor bedroom with mountain views at Casa Frangipani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="inline-block px-3 py-1 bg-[#D4AF37]/90 text-black text-xs font-medium rounded-full">Mountain Views</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-fraunces text-white mb-2">First Floor Bedrooms</h3>
                        <p class="text-sm text-stone-400 mb-4">Private balconies with scenic mountain and garden views</p>
                        <div class="flex items-center gap-4 text-xs text-stone-500">
                            <span class="flex items-center gap-1">
                                <i data-lucide="bed" class="w-3 h-3"></i>
                                King Size
                            </span>
                            <span class="flex items-center gap-1">
                                <i data-lucide="door-open" class="w-3 h-3"></i>
                                Balcony
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Living Room -->
                <div class="group relative rounded-2xl overflow-hidden border border-white/10 bg-white/[0.02] hover:bg-white/[0.04] transition-all animate-on-scroll" style="transition-delay: 200ms">
                    <div class="relative h-64 overflow-hidden">
                        <img 
                            src="https://img.vistarooms.com/gallery/casa-frangipani-a8d0fb.jpg" 
                            alt="Spacious living room with pool view at Casa Frangipani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-fraunces text-white mb-2">Living Room with Pool View</h3>
                        <p class="text-sm text-stone-400 mb-4">Airy living space with teakwood accents and seamless indoor-outdoor flow</p>
                        <div class="flex items-center gap-4 text-xs text-stone-500">
                            <span class="flex items-center gap-1">
                                <i data-lucide="sofa" class="w-3 h-3"></i>
                                Spacious
                            </span>
                            <span class="flex items-center gap-1">
                                <i data-lucide="tv" class="w-3 h-3"></i>
                                Smart TV
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Dining Area -->
                <div class="group relative rounded-2xl overflow-hidden border border-white/10 bg-white/[0.02] hover:bg-white/[0.04] transition-all animate-on-scroll" style="transition-delay: 300ms">
                    <div class="relative h-64 overflow-hidden">
                        <img 
                            src="https://img.vistarooms.com/gallery/casa-frangipani-9629f7.jpg" 
                            alt="Dining area for 10+ guests at Casa Frangipani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-fraunces text-white mb-2">Dining Area for 10+ Guests</h3>
                        <p class="text-sm text-stone-400 mb-4">Elegant dining space perfect for group meals and celebrations</p>
                        <div class="flex items-center gap-4 text-xs text-stone-500">
                            <span class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                10+ Seats
                            </span>
                            <span class="flex items-center gap-1">
                                <i data-lucide="utensils" class="w-3 h-3"></i>
                                Meals Available
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experiences -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 mt-4 gap-6">
                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] hover:border-[#D4AF37]/30 transition-all group animate-on-scroll">
                    <div class="w-14 h-14 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-4 group-hover:bg-[#D4AF37]/20 transition-colors">
                        <i data-lucide="cake" class="w-7 h-7 text-[#D4AF37]"></i>
                    </div>
                    <h3 class="text-lg font-fraunces text-white mb-2">Celebrations</h3>
                    <p class="text-sm text-stone-400 leading-relaxed">
                        Birthday parties, anniversaries, and milestone celebrations with family and friends.
                    </p>
                </div>

                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] hover:border-[#D4AF37]/30 transition-all group animate-on-scroll" style="transition-delay: 100ms">
                    <div class="w-14 h-14 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-4 group-hover:bg-[#D4AF37]/20 transition-colors">
                        <i data-lucide="heart" class="w-7 h-7 text-[#D4AF37]"></i>
                    </div>
                    <h3 class="text-lg font-fraunces text-white mb-2">Family Getaways</h3>
                    <p class="text-sm text-stone-400 leading-relaxed">
                        Perfect for multi-generational family vacations and quality time together.
                    </p>
                </div>

                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] hover:border-[#D4AF37]/30 transition-all group animate-on-scroll" style="transition-delay: 200ms">
                    <div class="w-14 h-14 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-4 group-hover:bg-[#D4AF37]/20 transition-colors">
                        <i data-lucide="briefcase" class="w-7 h-7 text-[#D4AF37]"></i>
                    </div>
                    <h3 class="text-lg font-fraunces text-white mb-2">Corporate Offsites</h3>
                    <p class="text-sm text-stone-400 leading-relaxed">
                        Team building retreats and corporate events in a serene natural setting.
                    </p>
                </div>

                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] hover:border-[#D4AF37]/30 transition-all group animate-on-scroll" style="transition-delay: 300ms">
                    <div class="w-14 h-14 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-4 group-hover:bg-[#D4AF37]/20 transition-colors">
                        <i data-lucide="camera" class="w-7 h-7 text-[#D4AF37]"></i>
                    </div>
                    <h3 class="text-lg font-fraunces text-white mb-2">Film & Photoshoots</h3>
                    <p class="text-sm text-stone-400 leading-relaxed">
                        Stunning backdrop for professional photography, films, and content creation.
                    </p>
                </div>
            </div>

            <!-- Gallery -->
            <div class="grid grid-cols-2 md:grid-cols-4 mt-4 gap-4">
                <div class="col-span-2 row-span-2 relative rounded-2xl overflow-hidden border border-white/10 group animate-on-scroll">
                    <img 
                        src="https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg" 
                        alt="Casa Frangipani pool and villa exterior"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>

                <div class="relative rounded-2xl overflow-hidden border border-white/10 group animate-on-scroll" style="transition-delay: 100ms">
                    <img 
                        src="https://img.vistarooms.com/gallery/casa-frangipani-2c9b15.jpg" 
                        alt="Casa Frangipani bedroom"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    />
                </div>

                <div class="relative rounded-2xl overflow-hidden border border-white/10 group animate-on-scroll" style="transition-delay: 150ms">
                    <img 
                        src="https://img.vistarooms.com/gallery/casa-frangipani-483f65.jpg" 
                        alt="Casa Frangipani mountain views"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    />
                </div>

                <div class="relative rounded-2xl overflow-hidden border border-white/10 group animate-on-scroll" style="transition-delay: 200ms">
                    <img 
                        src="https://img.vistarooms.com/gallery/casa-frangipani-72d47e.jpg" 
                        alt="Casa Frangipani living area"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    />
                </div>

                <div class="relative rounded-2xl overflow-hidden border border-white/10 group animate-on-scroll" style="transition-delay: 250ms">
                    <img 
                        src="https://img.vistarooms.com/gallery/casa-frangipani-a74712.jpg" 
                        alt="Casa Frangipani dining area"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    />
                </div>

               
            </div>
        </div>
    </section>

    <!-- Location & Attractions -->
    <section class="py-24 px-6 md:px-12 bg-neutral-950/50 border-b border-white/5 relative overflow-hidden">
        <div class="absolute top-[30%] left-[10%] w-96 h-96 bg-[#D4AF37]/5 rounded-full blur-[128px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto">
            <div class="mb-16 animate-on-scroll">
                <span class="inline-block py-1 px-3 rounded-full border border-white/10 bg-white/5 text-[10px] uppercase tracking-widest text-stone-300 mb-6">
                    Explore Nearby
                </span>
                <h2 class="text-3xl md:text-5xl font-fraunces text-white mb-4">
                    Location & Attractions
                </h2>
                <p class="text-stone-400 max-w-2xl">
                    Perfectly situated in Alibaug with easy access to beaches, cafes, and local attractions.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Google Map -->
        <div class="relative rounded-2xl overflow-hidden border border-white/10 bg-white/[0.02] h-126 animate-on-scroll">
            <iframe
                class="absolute inset-0 w-full h-full grayscale contrast-125 brightness-90"
                src="https://www.google.com/maps?q=Hestia%20Villas%20%E2%80%93%20Casa%20Frangipani,%20Dhokawade,%20Awas,%20Maharashtra%20402208&output=embed"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

            <!-- Optional Glass Overlay (brand match) -->
            <div class="pointer-events-none absolute inset-0 bg-gradient-to-tr from-black/40 via-transparent to-black/30"></div>
        </div>


                <!-- Nearby Attractions -->
                <div class="space-y-6 animate-on-scroll" style="transition-delay: 100ms">
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white/[0.02] border border-white/10 hover:bg-white/[0.04] transition-all">
                        <div class="w-10 h-10 rounded-full bg-[#D4AF37]/10 flex items-center justify-center flex-shrink-0">
                            <i data-lucide="waves" class="w-5 h-5 text-[#D4AF37]"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium mb-1">Awas Beach</h4>
                            <p class="text-sm text-stone-400">Pristine beach perfect for sunrise walks and water sports</p>
                            <p class="text-xs text-stone-600 mt-1">10 min drive</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white/[0.02] border border-white/10 hover:bg-white/[0.04] transition-all">
                        <div class="w-10 h-10 rounded-full bg-[#D4AF37]/10 flex items-center justify-center flex-shrink-0">
                            <i data-lucide="landmark" class="w-5 h-5 text-[#D4AF37]"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium mb-1">Alibaug Town</h4>
                            <p class="text-sm text-stone-400">Local markets, restaurants, and cultural attractions</p>
                            <p class="text-xs text-stone-600 mt-1">15 min drive</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white/[0.02] border border-white/10 hover:bg-white/[0.04] transition-all">
                        <div class="w-10 h-10 rounded-full bg-[#D4AF37]/10 flex items-center justify-center flex-shrink-0">
                            <i data-lucide="coffee" class="w-5 h-5 text-[#D4AF37]"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium mb-1">Nearby Cafes & Restaurants</h4>
                            <p class="text-sm text-stone-400">Organic cafes, seafood restaurants, and beach shacks</p>
                            <p class="text-xs text-stone-600 mt-1">5-20 min drive</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white/[0.02] border border-white/10 hover:bg-white/[0.04] transition-all">
                        <div class="w-10 h-10 rounded-full bg-[#D4AF37]/10 flex items-center justify-center flex-shrink-0">
                            <i data-lucide="ship" class="w-5 h-5 text-[#D4AF37]"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium mb-1">Ferry & Beaches</h4>
                            <p class="text-sm text-stone-400">Gateway of India ferry, multiple beaches, and water activities</p>
                            <p class="text-xs text-stone-600 mt-1">Various locations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews & Testimonials -->
    <section class="py-24 px-6 md:px-12 bg-black border-b border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 text-center animate-on-scroll">
                <span class="inline-block py-1 px-3 rounded-full border border-white/10 bg-white/5 text-[10px] uppercase tracking-widest text-stone-300 mb-6">
                    Guest Stories
                </span>
                <h2 class="text-3xl md:text-5xl font-fraunces text-white mb-4">
                    What Our Guests Say
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] transition-all animate-on-scroll">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                    </div>
                    <p class="text-stone-300 mb-6 leading-relaxed text-sm">
                        "Absolutely stunning villa! The pool, gardens, and interiors exceeded our expectations. Perfect for our family reunion."
                    </p>
                    <div class="flex items-center gap-3">
                        <img 
                            src="https://i.pravatar.cc/100?u=guest1" 
                            alt="Guest avatar"
                            class="w-10 h-10 rounded-full border border-white/10"
                        />
                        <div>
                            <p class="text-white text-sm font-medium">Priya Sharma</p>
                            <p class="text-stone-500 text-xs">Mumbai</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] transition-all animate-on-scroll" style="transition-delay: 100ms">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                    </div>
                    <p class="text-stone-300 mb-6 leading-relaxed text-sm">
                        "The caretaker and staff were incredibly helpful. The villa is well-maintained and the location is peaceful yet accessible."
                    </p>
                    <div class="flex items-center gap-3">
                        <img 
                            src="https://i.pravatar.cc/100?u=guest2" 
                            alt="Guest avatar"
                            class="w-10 h-10 rounded-full border border-white/10"
                        />
                        <div>
                            <p class="text-white text-sm font-medium">Rahul Mehta</p>
                            <p class="text-stone-500 text-xs">Pune</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/[0.02] border border-white/10 rounded-2xl p-8 hover:bg-white/[0.04] transition-all animate-on-scroll" style="transition-delay: 200ms">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-[#D4AF37] text-[#D4AF37]"></i>
                    </div>
                    <p class="text-stone-300 mb-6 leading-relaxed text-sm">
                        "Hosted our company offsite here. The spaces are versatile, and the ambiance helped our team bond beautifully."
                    </p>
                    <div class="flex items-center gap-3">
                        <img 
                            src="https://i.pravatar.cc/100?u=guest3" 
                            alt="Guest avatar"
                            class="w-10 h-10 rounded-full border border-white/10"
                        />
                        <div>
                            <p class="text-white text-sm font-medium">Anjali Desai</p>
                            <p class="text-stone-500 text-xs">Bangalore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="booking" class="py-24 px-6 md:px-12 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-stone-900 via-black to-black opacity-60"></div>
        <div class="absolute inset-0 z-0 opacity-20 grain-texture"></div>

        <div class="relative z-10 max-w-5xl mx-auto text-center animate-on-scroll">
            <span class="inline-block py-1 px-3 rounded-full border border-white/10 bg-white/5 text-[10px] uppercase tracking-widest text-stone-300 mb-6">
                Book Your Escape
            </span>

            <h2 class="text-4xl md:text-6xl font-fraunces mb-8 text-white">
                Your private paradise <br class="md:hidden" />
                awaits in Alibaug
            </h2>

            <p class="text-lg text-stone-400 font-light mb-10 max-w-2xl mx-auto">
                Experience luxury living at Casa Frangipani. Perfect for celebrations, family getaways, and peaceful retreats.
            </p>

            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <a href="#booking" class="bg-shimmer group relative w-full md:w-auto px-8 py-4 rounded-lg overflow-hidden text-black font-medium text-sm transition-all duration-300 transform hover:scale-[1.02] shadow-[0_0_20px_rgba(212,175,55,0.3)] hover:shadow-[0_0_30px_rgba(212,175,55,0.5)]">
                    <div class="absolute inset-0 bg-[#D4AF37]/90 z-0"></div>
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        Check Availability
                    </span>
                </a>
                <a href="https://wa.me/919881149629" target="_blank" class="w-full md:w-auto px-8 py-4 rounded-lg border border-white/20 text-white font-medium text-sm hover:bg-white/5 transition-all duration-300 hover:border-white/40 flex items-center justify-center gap-2">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    WhatsApp Enquiry
                </a>
            </div>

            <div class="mt-12 grid md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div class="text-center">
                    <p class="text-[#D4AF37] text-3xl font-fraunces mb-2">6BR</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Luxurious Bedrooms</p>
                </div>
                <div class="text-center">
                    <p class="text-[#D4AF37] text-3xl font-fraunces mb-2">22</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Max Guests</p>
                </div>
                <div class="text-center">
                    <p class="text-[#D4AF37] text-3xl font-fraunces mb-2">8000</p>
                    <p class="text-xs text-stone-500 uppercase tracking-wider">Built-up Area (sq ft)</p>
                </div>
            </div>
        </div>
    </section>

    <style>/* Force true viewport floating */
#floating-video {
position: fixed !important;
  inset: auto auto 1.5rem 1.5rem;
  z-index: 999999 !important;
  transform: none !important;
  will-change: transform;
  transform: none !important; /* escape transform contexts */
}

</style>

     <!-- Floating Video -->
<div id="floating-video"
     class="fixed bottom-6 left-6 z-[999999]
            w-72 h-44 rounded-2xl overflow-hidden
            border border-white/10 shadow-2xl
            bg-black
            opacity-0 scale-95 pointer-events-none
            transition-all duration-500 ease-out">

    <!-- Close Button -->
    <button id="floating-video-close"
            class="absolute top-2 right-2 z-10
                   w-7 h-7 rounded-full
                   bg-black/70 backdrop-blur
                   text-white text-sm
                   flex items-center justify-center
                   hover:bg-black transition">
        ✕
    </button>

    <video class="w-full h-full object-cover opacity-95"
           playsinline muted loop autoplay controls>
        <source src="https://img.vistarooms.com/gallery/casa-frangipani-edf7.MP4" type="video/mp4">
    </video>
</div>

    <!-- Footer -->
    <footer class="border-t border-white/10 bg-black pt-20 pb-12 px-6 md:px-12 text-sm relative">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-8 mb-12">
                <div>
                    <div class="tracking-[0.25em] text-sm font-medium uppercase text-white flex items-center gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#D4AF37] rounded-full"></div>
                        Casa Frangipani
                    </div>
                    <p class="text-stone-500 text-xs max-w-sm">
                        A serene luxury villa in Alibaug, perfect for celebrations and peaceful retreats.
                    </p>
                </div>

                <nav class="flex flex-wrap items-center gap-8 text-xs font-normal text-stone-500">
                    <a href="#amenities" class="hover:text-white transition-colors">Amenities</a>
                    <a href="#booking" class="hover:text-white transition-colors">Booking</a>
                    <a href="https://wa.me/919876543210" target="_blank" class="hover:text-white transition-colors">Contact</a>
                    <a href="#" class="hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms</a>
                </nav>

                <div class="flex items-center gap-4">
                    <a href="#" class="text-stone-500 hover:text-white transition-colors">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="text-stone-500 hover:text-white transition-colors">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                    <a href="https://wa.me/919876543210" target="_blank" class="text-stone-500 hover:text-white transition-colors">
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-white/5 text-stone-600 text-[10px] uppercase tracking-widest">
                <p>© 2026 Casa Frangipani. All Rights Reserved.</p>
                <p class="mt-4 md:mt-0">Alibaug, Maharashtra</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Intersection Observer for scroll animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe both generic 'animate-on-scroll' and utility animate-* classes used across the page
        document.querySelectorAll('.animate-on-scroll, .animate-fade-in-up, .animate-width-expand, .animate-float-slow, .animate-float-slower, .animate-pulse-slower').forEach(element => {
            observer.observe(element);
        });

        // Booking Form Handler removed to allow Livewire / normal POST to function correctly

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
    <script>
        // Hero carousel simple slideshow
        (function(){
            const slides = document.querySelectorAll('.hero-bg-slide');
            if (!slides.length) return;
            // Ensure one active slide exists initially
            let idx = Array.from(slides).findIndex(s => s.classList.contains('active'));
            if (idx === -1) { idx = 0; slides[0].classList.add('active'); }
            setInterval(()=>{
                slides[idx].classList.remove('active');
                idx = (idx+1) % slides.length;
                slides[idx].classList.add('active');
            }, 7000);
        })();

        // Flatpickr date range -> populate Livewire form inputs (targets .date-range-picker)
        (function(){
            function setHiddenDates(inVal, outVal, el){
                const form = el ? el.closest('form') : null;
                let inputIn = form ? form.querySelector('#check_in_hidden') : null;
                let inputOut = form ? form.querySelector('#check_out_hidden') : null;
                if (!inputIn) inputIn = document.getElementById('check_in_hidden');
                if (!inputOut) inputOut = document.getElementById('check_out_hidden');

                if (inputIn){ inputIn.value = inVal || ''; inputIn.dispatchEvent(new Event('input', { bubbles: true })); }
                if (inputOut){ inputOut.value = outVal || ''; inputOut.dispatchEvent(new Event('input', { bubbles: true })); }

                // update optional visible display helpers (if present)
                const dispIn = document.getElementById('display_check_in');
                const dispOut = document.getElementById('display_check_out');
                function fmt(d){ if (!d) return ''; const dt = new Date(d); if (isNaN(dt)) return d; return dt.toLocaleDateString(undefined, { month: 'short', day: 'numeric' }); }
                if (dispIn) dispIn.textContent = fmt(inVal);
                if (dispOut) dispOut.textContent = fmt(outVal);
            }

            function initPickers(){
                if (typeof flatpickr === 'undefined') return;

                document.querySelectorAll('.date-range-picker').forEach(function(el){
                    // prevent double-init
                    if (el.__flatpickrInitialized) return;
                    el.__flatpickrInitialized = true;

                    const fp = flatpickr(el, {
                        mode: 'range',
                        dateFormat: 'Y-m-d',
                        onChange: function(selectedDates, dateStr, instance){
                            if (!selectedDates.length) return;
                            const [start, end] = selectedDates;
                            const startStr = start ? instance.formatDate(start, 'Y-m-d') : '';
                            const endStr = end ? instance.formatDate(end, 'Y-m-d') : '';

                            setHiddenDates(startStr, endStr, el);

                            if (startStr && endStr) {
                                el.value = startStr + ' — ' + endStr;
                            } else if (startStr) {
                                el.value = startStr;
                            } else {
                                el.value = '';
                            }
                        },
                        onClose: function(selectedDates, dateStr, instance){
                            // Ensure both inputs are set if possible when user closes picker
                            const parts = (dateStr || '').split('—').map(s => s.trim());
                            setHiddenDates(parts[0] || '', parts[1] || '', el);
                        },
                        onValueUpdate: function(selectedDates, dateStr, instance){
                            // keep hidden inputs synced when internal value changes
                            const parts = (dateStr || '').split('—').map(s => s.trim());
                            setHiddenDates(parts[0] || '', parts[1] || '', el);
                        }
                    });

                    // attach fp reference and fallback trigger
                    el._flatpickr = fp;

                    // Fallback: open picker on click if not visible/initialized yet
                    el.addEventListener('click', function(){ if (el._flatpickr) el._flatpickr.open(); });

                    // Ensure hidden inputs are set just before the form is submitted (safety net)
                    const parentForm = el.closest('form');
                    if (parentForm && !parentForm.__dateSubmitHandlerAttached) {
                        parentForm.__dateSubmitHandlerAttached = true;
                        // use capture phase to make sure this runs before other submit handlers (Livewire)
                        parentForm.addEventListener('submit', function(){
                            const inputIn = parentForm.querySelector('#check_in_hidden');
                            const inputOut = parentForm.querySelector('#check_out_hidden');
                            if (inputIn && inputOut && !(inputIn.value && inputOut.value)) {
                                // try to parse from picker value
                                const val = el.value || '';
                                if (val && val.indexOf('—') !== -1) {
                                    const parts = val.split('—').map(s => s.trim());
                                    if (!inputIn.value) inputIn.value = parts[0] || '';
                                    if (!inputOut.value) inputOut.value = parts[1] || '';
                                    inputIn.dispatchEvent(new Event('input', { bubbles: true }));
                                    inputOut.dispatchEvent(new Event('input', { bubbles: true }));
                                }
                            }
                        }, true);

                        // Also ensure a click on any submit button sets the values immediately (extra safety)
                        parentForm.querySelectorAll('button[type="submit"]').forEach(function(btn){
                            btn.addEventListener('click', function(){
                                const inputIn = parentForm.querySelector('#check_in_hidden');
                                const inputOut = parentForm.querySelector('#check_out_hidden');
                                const val = el.value || '';
                                if (inputIn && inputOut && val && val.indexOf('—') !== -1) {
                                    const parts = val.split('—').map(s => s.trim());
                                    if (!inputIn.value) inputIn.value = parts[0] || '';
                                    if (!inputOut.value) inputOut.value = parts[1] || '';
                                    inputIn.dispatchEvent(new Event('input', { bubbles: true }));
                                    inputOut.dispatchEvent(new Event('input', { bubbles: true }));
                                }
                            });
                        });
                    }
                        });
                    }
                });
            }

            // Wait for flatpickr to be available (handles deferred script load)
            function waitForFlatpickr(cb, timeout = 8000, interval = 100){
                const start = Date.now();
                (function check(){
                    if (window.flatpickr) return cb();
                    if (Date.now() - start > timeout) return; // give up after timeout
                    setTimeout(check, interval);
                })();
            }

            waitForFlatpickr(function(){
                // Initialize after Livewire loads so Livewire has attached listeners
                document.addEventListener('livewire:load', initPickers);
                // Fallback if Livewire not present yet
                document.addEventListener('DOMContentLoaded', function(){ setTimeout(initPickers, 50); });

                // Re-run icon render and pickers after Livewire updates (forms can be re-rendered)
                document.addEventListener('livewire:update', function(){ if (window.lucide) lucide.createIcons(); setTimeout(initPickers, 50); });

                // Also run immediately once flatpickr exists
                setTimeout(initPickers, 50);
            }, 8000);
        })();
    </script>
<script id="dhws-dataInjector" src="/public/dhws-data-injector.js"></script>



<script>
(function () {
    const floatingVideo = document.getElementById('floating-video');
    const closeBtn = document.getElementById('floating-video-close');

    let isClosed = false;

    function handleScroll() {
        if (isClosed) return;

        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;

        if (scrollPercent >= 40) {
            floatingVideo.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
            floatingVideo.classList.add('opacity-100', 'scale-100');
        }
    }

    closeBtn.addEventListener('click', () => {
        floatingVideo.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
        isClosed = true;
    });

    window.addEventListener('scroll', handleScroll);
})();
</script>


    @livewireScripts
</body>
</html>