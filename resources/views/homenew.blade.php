@extends('layouts.app')

@section('title', 'Casa Frangipani - Luxury Villa Rental in Alibaug | Private Pool & Premium Amenities')

@section('meta_description', 'Book your stay at Casa Frangipani, an exclusive luxury villa in Alibaug with private pool, 4 AC bedrooms, full kitchen, and personalized concierge service.')

@section('content')


{{-- ================= NAVIGATION ================= --}}
<nav id="main-nav" class="fixed top-0 left-0 w-full z-50 p-6 md:p-10 flex items-center justify-between pointer-events-none transition-all duration-500">
    <a href="#" class="text-2xl font-heading font-bold tracking-tight pointer-events-auto text-white" id="nav-logo">
        Casa Frangipani
    </a>

    <div class="hidden md:flex items-center gap-2 p-1 bg-white/10 backdrop-blur-md rounded-full border border-white/10 pointer-events-auto">
        <a href="#villa" class="px-6 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest text-white hover:bg-white/10">Villa</a>
        <a href="#amenities" class="px-6 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest text-white hover:bg-white/10">Amenities</a>
        <a href="#gallery" class="px-6 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest text-white hover:bg-white/10">Gallery</a>
        <a href="#reviews" class="px-6 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest text-white hover:bg-white/10">Reviews</a>
        <a href="#location" class="px-6 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest text-white hover:bg-white/10">Location</a>
        <a href="#booking" class="px-6 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest bg-white text-brown-dark">Book Now</a>
    </div>

    <div class="md:hidden pointer-events-auto">
        <button id="mobile-menu-btn" class="p-3 bg-white/20 backdrop-blur-md rounded-full text-white border border-white/10">
            <i data-lucide="menu" class="size-5"></i>
        </button>
    </div>
</nav>

{{-- ================= MOBILE MENU ================= --}}
<div id="mobile-menu" class="fixed inset-0 z-40 bg-brown-dark/95 backdrop-blur-xl hidden flex-col items-center justify-center gap-8 p-6">
    <button id="mobile-menu-close" class="absolute top-6 right-6 p-3 bg-white/10 rounded-full text-white">
        <i data-lucide="x" class="size-5"></i>
    </button>
    <a href="#villa" class="text-2xl font-heading text-white">Villa</a>
    <a href="#amenities" class="text-2xl font-heading text-white">Amenities</a>
    <a href="#gallery" class="text-2xl font-heading text-white">Gallery</a>
    <a href="#reviews" class="text-2xl font-heading text-white">Reviews</a>
    <a href="#location" class="text-2xl font-heading text-white">Location</a>
    <a href="#booking" class="px-8 py-4 bg-terracotta text-white rounded-full font-bold">Book Now</a>
</div>

<main>
        <!-- Hero Section -->
<header class="relative w-full h-screen overflow-hidden flex flex-col justify-end pb-12 md:pb-24">

    <!-- Background Slider -->
    <div class="absolute inset-0 z-0 bg-black">

        <!-- Slides -->
         <div class="hero-slide active"
             style="background-image:url('http://hestiavillas.in/wp-content/uploads/2026/01/Casa-Frangipani-Alibaug-1.webp')"
             data-title="Effortless Weekend Getaways"
             data-subtitle="Calm Surroundings · Fully Serviced"
             data-desc="A fully serviced villa experience surrounded by calm, greenery, and effortless comfort.">
        </div>

        <div class="hero-slide"
             style="background-image:url('https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg')"
             data-title="Private Luxury Pool Villa in Alibaug"
             data-subtitle="Private Pool · Complete Privacy"
             data-desc="A secluded private pool villa designed for peaceful escapes and relaxed weekend getaways near Mumbai.">
        </div>

        <div class="hero-slide"
             style="background-image:url('https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg')"
             data-title="6 Spacious Air-Conditioned Bedrooms"
             data-subtitle="Perfect for Families & Groups"
             data-desc="Six well-appointed bedrooms with air-conditioning, offering comfort, space, and restful nights.">
        </div>

        <div class="hero-slide"
             style="background-image:url('https://img.vistarooms.com/gallery/casa-frangipani-9e5e0c.jpg')"
             data-title="Designed for Comfort & Leisure"
             data-subtitle="Living Room · Games Room"
             data-desc="Thoughtfully designed living spaces with room to relax, unwind, and enjoy quality time together.">
        </div>

        

        <!-- Overlays -->
        <div class="absolute inset-0 bg-gradient-to-t from-brown-dark via-brown-dark/25 to-transparent opacity-90"></div>
        <div class="absolute inset-0 bg-black/10 mix-blend-overlay"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 w-full max-w-[90rem] mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-12 gap-6 items-end">

        <!-- LEFT -->
        <div class="md:col-span-7">

            <div class="flex items-center gap-3 mb-6 animate-slide-up delay-1200 opacity-0">
                <span class="h-[1px] w-8 bg-white/60"></span>
                <span class="text-xs font-mono uppercase tracking-widest text-white/80">
                    Alibaug, Maharashtra
                </span>
            </div>

            <h1 class="font-heading font-bold text-white tracking-tight leading-tight md:leading-[1.05]">

                <span id="hero-title"
                      class="block
                      text-[clamp(2.2rem,8vw,3.5rem)]
                      md:text-[clamp(2.8rem,5vw,4.5rem)]
                      lg:text-[clamp(3.5rem,4vw,5.5rem)]
                      drop-shadow-2xl transition-opacity duration-700">
                    Private Luxury Pool Villa in Alibaug
                </span>

                <span id="hero-subtitle"
                      class="block mt-2 md:mt-4
                      text-[clamp(1.4rem,6vw,2.2rem)]
                      md:text-[clamp(1.6rem,3vw,2.5rem)]
                      font-serif italic font-light text-white/70 transition-opacity duration-700">
                    Private Pool · Complete Privacy
                </span>

            </h1>
        </div>

        <!-- RIGHT CTA -->
        <div class="md:col-span-4 md:col-start-9 flex flex-col justify-end pb-4 md:pb-8">

            <div class="relative overflow-hidden bg-brown-dark/60 backdrop-blur-2xl border border-white/10
                        p-8 rounded-2xl shadow-2xl animate-slide-up delay-1800 opacity-0
                        ring-1 ring-white/5">

                <div class="absolute inset-0 -translate-x-full bg-gradient-to-r
                            from-transparent via-white/5 to-transparent
                            pointer-events-none animate-shimmer"></div>

                <div class="relative z-10">

                    <p id="hero-desc"
                       class="text-base md:text-lg text-white/85 font-light leading-relaxed mb-8 antialiased drop-shadow-md transition-opacity duration-700">
                        A secluded private pool villa designed for peaceful escapes and relaxed weekend getaways near Mumbai.
                    </p>

                    <div class="flex flex-col gap-4">
                        <a href="#booking"
                           class="group flex items-center justify-between w-full p-1 border-b
                                  border-white/30 hover:border-white transition-colors pb-2">
                            <span class="text-sm font-medium tracking-wide text-white">
                                Check Availability
                            </span>
                            <i data-lucide="arrow-right"
                               class="text-white size-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>

                        <a href="https://wa.me/919881149629?text=Hi%2C%20I%27m%20interested%20in%20booking%20Casa%20Frangipani"
                           target="_blank"
                           class="group flex items-center justify-between w-full p-1 border-b
                                  border-white/30 hover:border-white transition-colors pb-2">
                            <span class="text-sm font-medium tracking-wide text-white">
                                WhatsApp for Booking
                            </span>
                            <i data-lucide="message-circle"
                               class="text-white size-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</header>


<script>
(function () {

    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroTitle = document.getElementById('hero-title');
    const heroSubtitle = document.getElementById('hero-subtitle');
    const heroDesc = document.getElementById('hero-desc');

    let heroIndex = 0;

    setInterval(() => {
        heroSlides[heroIndex].classList.remove('active');
        heroIndex = (heroIndex + 1) % heroSlides.length;
        heroSlides[heroIndex].classList.add('active');

        heroTitle.style.opacity = 0;
        heroSubtitle.style.opacity = 0;
        heroDesc.style.opacity = 0;

        setTimeout(() => {
            heroTitle.textContent = heroSlides[heroIndex].dataset.title;
            heroSubtitle.textContent = heroSlides[heroIndex].dataset.subtitle;
            heroDesc.textContent = heroSlides[heroIndex].dataset.desc;

            heroTitle.style.opacity = 1;
            heroSubtitle.style.opacity = 1;
            heroDesc.style.opacity = 1;
        }, 1200);

    }, 8000);

})();
</script>




   <!-- Villa Experience Section -->
<section id="villa" class="bg-white py-24 md:py-36 px-4 md:px-10">
    <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <div class="max-w-3xl mx-auto text-center mb-20 md:mb-28 animate-on-scroll">
            <span class="inline-block text-xs uppercase tracking-[0.35em] text-brown-dark/40 mb-4">
                A Private Luxury Stay
            </span>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold tracking-tight text-brown-dark mb-6">
                A Private Luxury Stay
            </h2>

            <p class="text-brown-dark/60 text-base md:text-lg leading-relaxed mb-8">
                Casa Frangipani is designed for guests who value space, silence, and refined living.
                The villa features seamless indoor–outdoor spaces, a private pool, and a peaceful
                residential setting—perfect for unwinding without interruption.
            </p>

            <!-- Highlights -->
            <div class="flex flex-col sm:flex-row flex-wrap items-center justify-center gap-3 sm:gap-4">
    
    <span class="px-4 py-2 rounded-full bg-cream border border-brown-dark/10
                 text-sm font-medium text-brown-dark
                 shadow-sm">
        Private swimming pool
    </span>

    <span class="px-4 py-2 rounded-full bg-cream border border-brown-dark/10
                 text-sm font-medium text-brown-dark
                 shadow-sm">
        Spacious indoor–outdoor living
    </span>

    <span class="px-4 py-2 rounded-full bg-cream border border-brown-dark/10
                 text-sm font-medium text-brown-dark
                 shadow-sm">
        Quiet, low-density neighborhood
    </span>

</div>

        </div>

        <!-- Content Grid (UNCHANGED) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <!-- LEFT: FEATURES -->
            <div class="lg:col-span-6 space-y-10 animate-on-scroll">

                <div class="group flex gap-6 items-start">
                    <div class="w-14 h-14 rounded-2xl bg-terracotta/15 flex items-center justify-center shrink-0 group-hover:scale-110 transition">
                        <i data-lucide="shield-check" class="size-7 text-terracotta"></i>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-semibold text-brown-dark mb-2">
                            Complete Privacy
                        </h3>
                        <p class="text-brown-dark/60 leading-relaxed">
                            Set within expansive private grounds, the villa offers gated access,
                            dedicated caretaking, and uninterrupted personal space.
                        </p>
                    </div>
                </div>

                <div class="group flex gap-6 items-start">
                    <div class="w-14 h-14 rounded-2xl bg-terracotta/15 flex items-center justify-center shrink-0 group-hover:scale-110 transition">
                        <i data-lucide="heart" class="size-7 text-terracotta"></i>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-semibold text-brown-dark mb-2">
                            Elevated Comfort
                        </h3>
                        <p class="text-brown-dark/60 leading-relaxed">
                            Spacious bedrooms, premium linens, climate-controlled interiors,
                            and thoughtful amenities create a relaxed, hotel-like stay.
                        </p>
                    </div>
                </div>

                <div class="group flex gap-6 items-start">
                    <div class="w-14 h-14 rounded-2xl bg-terracotta/15 flex items-center justify-center shrink-0 group-hover:scale-110 transition">
                        <i data-lucide="trees" class="size-7 text-terracotta"></i>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-semibold text-brown-dark mb-2">
                            Indoor–Outdoor Living
                        </h3>
                        <p class="text-brown-dark/60 leading-relaxed">
                            From airy interiors to verandas, gardens, and poolside spaces,
                            every area is designed to flow naturally with the outdoors.
                        </p>
                    </div>
                </div>

            </div>

            <!-- RIGHT: IMAGES (UNCHANGED) -->
            <div class="lg:col-span-6 grid grid-cols-2 gap-6 animate-on-scroll">
                <div class="relative rounded-3xl overflow-hidden aspect-[3/4]">
                    <img
                        src="http://hestiavillas.in/wp-content/uploads/2026/01/CF-Cover-photo.png"
                        alt="Villa living space"
                        class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                </div>

                <div class="relative rounded-3xl overflow-hidden aspect-[3/4] mt-12">
                    <img
                        src="https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg"
                        alt="Private pool at the villa"
                        class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                </div>
            </div>

        </div>
    </div>
</section>


       @php
    // Amenities Section
  
    $amenities = [
        [
            'icon' => 'waves',
            'title' => 'Private Swimming Pool',
            'subtitle' => 'Temperature Controlled',
            'badge_type' => 'premium',
            'specs' => [
                ['icon' => 'ruler', 'label' => 'Length', 'value' => '40 feet'],
                ['icon' => 'thermometer', 'label' => 'Depth', 'value' => '4.5 feet'],
                ['icon' => 'maximize-2', 'label' => 'Width', 'value' => '20 feet'],
            ]
        ],
        [
            'icon' => 'snowflake',
            'title' => 'Air Conditioning',
            'subtitle' => 'Energy Efficient',
            'badge_type' => 'essential',
            'specs' => [
                ['icon' => 'bed', 'label' => 'Bedrooms', 'value' => '6 Bedrooms'],
                ['icon' => 'sofa', 'label' => 'Living', 'value' => 'Living Room'],
                ['icon' => 'gamepad2', 'label' => 'Games', 'value' => 'Games Room'],
            ]
        ],
        [
            'icon' => 'sparkles',
            'title' => 'Daily Housekeeping',
            'subtitle' => 'Professional Service',
            'badge_type' => 'premium',
            'specs' => [
                ['icon' => 'clock', 'label' => 'Timing', 'value' => '9am – 6pm'],
                ['icon' => 'shirt', 'label' => 'Laundry', 'value' => 'Available at extra cost'],
                ['icon' => 'bed-double', 'label' => 'Linens', 'value' => 'Fresh Daily'],
            ]
        ],
        [
            'icon' => 'wifi',
            'title' => 'WiFi & Power Backup',
            'subtitle' => 'High Speed Internet',
            'badge_type' => 'essential',
            'specs' => [
                ['icon' => 'gauge', 'label' => 'Speed', 'value' => '30 Mbps'],
                ['icon' => 'battery-charging', 'label' => 'Backup', 'value' => 'Generator'],
                ['icon' => 'signal', 'label' => 'Coverage', 'value' => 'All Areas'],
            ]
        ],
    ];
@endphp


<section id="amenities" class="bg-brown-dark border-t border-white/5 py-20 md:py-32 px-6 md:px-10 relative">
    <div class="w-full max-w-6xl mx-auto relative z-10">

        <!-- Heading -->
        <div class="text-center mb-16 animate-on-scroll">
            <h3 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">
                Villa Amenities
            </h3>
            <p class="text-white/50 text-lg max-w-2xl mx-auto">
                Private pool, AC bedrooms, fully-equipped kitchen, daily housekeeping and attentive caretaker service.
            </p>
        </div>

        <!-- Amenity Cards -->
        <div class="flex flex-col gap-5">

            @foreach($amenities as $amenity)
                <div class="group grid grid-cols-1 md:grid-cols-12 gap-6 items-center
                    p-5 md:p-6 bg-white/5 hover:bg-white/10
                    border border-white/5 rounded-2xl md:rounded-3xl
                    transition-all duration-300
                    hover:-translate-y-0.5 hover:shadow-[0_20px_60px_rgba(0,0,0,0.35)]
                    animate-on-scroll">

                    <!-- Icon + Title -->
                    <div class="col-span-1 md:col-span-4 flex flex-col sm:flex-row sm:items-center gap-4 md:gap-6">
                        <div class="w-20 h-20 md:w-24 md:h-24 bg-terracotta/20 rounded-xl flex items-center justify-center shrink-0">
                            <i data-lucide="{{ $amenity['icon'] }}" class="size-10 text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-lg md:text-xl text-white font-heading font-semibold">
                                {{ $amenity['title'] }}
                            </h4>
                            <p class="text-[10px] md:text-xs text-white/40 mt-1 uppercase tracking-wider">
                                {{ $amenity['subtitle'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Specs -->
                    <div class="col-span-1 md:col-span-6
                        grid grid-cols-2 sm:grid-cols-3 gap-y-4 gap-x-4
                        md:border-l md:border-white/10 md:pl-6 mt-4 md:mt-0">

                        @foreach($amenity['specs'] as $spec)
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center gap-1.5 text-white/50 text-xs uppercase tracking-wide">
                                    <i data-lucide="{{ $spec['icon'] }}" class="size-3"></i>
                                    {{ $spec['label'] }}
                                </div>
                                <span class="text-white text-sm">
                                    {{ $spec['value'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>

                    <!-- Badge -->
                    <div class="col-span-1 md:col-span-2 flex items-center justify-start md:justify-end">
                        @if($amenity['badge_type'] === 'premium')
                            <span class="inline-flex items-center justify-center
                                px-4 py-1.5 rounded-full
                                text-xs md:text-sm font-serif italic tracking-wide
                                border backdrop-blur-md
                                bg-terracotta/20 border-terracotta/40 text-white">
                                Premium
                            </span>
                        @else
                            <span class="inline-flex items-center justify-center
                                px-4 py-1.5 rounded-full
                                text-xs md:text-sm font-serif italic tracking-wide
                                border backdrop-blur-md
                                bg-white/10 border-white/20 text-white/80">
                                Essential
                            </span>
                        @endif
                    </div>

                </div>
            @endforeach

        </div>
    </div>
</section>



<!-- Gallery Section -->
 <div id="gallery" > </div>
       <section class="hidden lg:block bg-cream pb-6 md:pb-6 pt-24 md:pt-24 px-6 md:px-10">

    <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <div class="mb-12 md:mb-16 lg:mb-24 text-center">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold tracking-tight text-brown-dark">
                Villa Gallery
            </h2>
            <p class="mt-4 text-brown-dark/50 max-w-xl mx-auto">
                Explore the villa’s interiors, pool, and outdoor spaces through our gallery and experience the charm of Casa Frangipani before you arrive.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- LEFT: THUMB STACK -->
            <div class="lg:col-span-3 order-2 lg:order-1">

                <!-- Mobile -->
                <div class="flex lg:hidden gap-4 overflow-x-auto pb-2">
                    <!-- Repeat same buttons as desktop -->
                </div>

                <!-- Desktop -->
                <div class="hidden lg:flex flex-col gap-5">

                    <button class="gallery-thumb active"
                        data-image="https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg"
                        data-title="Private Pool"
                        data-desc="A private pool surrounded by lush tropical landscaping and sun loungers.">
                        <img src="https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg">
                        <span>Private Pool</span>
                    </button>

                    <button class="gallery-thumb"
                        data-image="https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg"
                        data-title="Master Suite"
                        data-desc="Elegant king-size bedroom with premium linens, ensuite bathroom, and serene garden views.">
                        <img src="https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg">
                        <span>Master Suite</span>
                    </button>

                    <button class="gallery-thumb"
                        data-image="https://img.vistarooms.com/gallery/casa-frangipani-9e5e0c.jpg"
                        data-title="Living Lounge"
                        data-desc="Open-plan living area with contemporary seating and seamless indoor-outdoor flow.">
                        <img src="https://img.vistarooms.com/gallery/casa-frangipani-9e5e0c.jpg">
                        <span>Living Lounge</span>
                    </button>

                    <button class="gallery-thumb"
                        data-image="https://img.vistarooms.com/gallery/casa-frangipani-9629f7.jpg"
                        data-title="Dining Pavilion"
                        data-desc="Spacious dining area ideal for shared meals, celebrations, and relaxed conversations.">
                        <img src="https://img.vistarooms.com/gallery/casa-frangipani-9629f7.jpg">
                        <span>Dining Pavilion</span>
                    </button>

                    <button class="gallery-thumb"
                        data-image="https://img.vistarooms.com/gallery/casa-frangipani-2c9b15.jpg"
                        data-title="Recreation Room"
                        data-desc="Dedicated entertainment space with indoor games for all ages to unwind and have fun.">
                        <img src="https://img.vistarooms.com/gallery/casa-frangipani-2c9b15.jpg">
                        <span>Recreation Room</span>
                    </button>

                    <button class="gallery-thumb"
                        data-image="https://img.vistarooms.com/gallery/casa-frangipani-483f65.jpg"
                        data-title="Entertainment Zone"
                        data-desc="Comfortable media space for movie nights, music, and relaxed indoor entertainment.">
                        <img src="https://img.vistarooms.com/gallery/casa-frangipani-483f65.jpg">
                        <span>Entertainment Zone</span>
                    </button>

                    <button class="gallery-thumb"
                        data-image="https://img.vistarooms.com/gallery/casa-frangipani-a74712.jpg"
                        data-title="Luxury Bathroom"
                        data-desc="Modern bathroom with premium fittings, ample space, and hotel-style comfort.">
                        <img src="https://img.vistarooms.com/gallery/casa-frangipani-a74712.jpg">
                        <span>Luxury Bathroom</span>
                    </button>

                </div>
            </div>

            <!-- RIGHT: IMAGE -->
            <div class="lg:col-span-9 order-1 lg:order-2 relative">

                <div class="aspect-[16/10] rounded-3xl overflow-hidden bg-brown-dark/10">
                    <img id="gallery-main-image"
                        src="https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg"
                        class="w-full h-full object-cover transition-all duration-700 ease-out">
                </div>

                <!-- GLASS INFO -->
                <div class="absolute bottom-6 right-6 md:bottom-10 md:right-10
                    bg-white/60 backdrop-blur-xl border border-white/40
                    rounded-2xl p-6 md:p-8 max-w-sm shadow-xl">

                    <h3 id="gallery-title"
                        class="text-xl md:text-2xl font-heading font-bold text-brown-dark mb-2">
                        Private Pool
                    </h3>

                    <p id="gallery-desc"
                        class="text-sm text-brown-dark/70 leading-relaxed">
                        A private pool surrounded by lush tropical landscaping and sun loungers.
                    </p>
                </div>

            </div>
        </div>
    </div>


</section>



<!-- Mobile Gallery Grid -->
<section id="gallery-mobile" class="lg:hidden bg-cream py-4 px-4">
    <div class="max-w-6xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-heading font-bold text-brown-dark">
                Villa Gallery
            </h2>
            <p class="mt-2 text-sm text-brown-dark/50">
                Explore the villa’s interiors, pool, and outdoor spaces through our gallery and experience the charm of Casa Frangipani before you arrive.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-2 gap-4">

            <!-- Card -->
            <div class="group relative aspect-[4/5] rounded-2xl overflow-hidden">
                <img src="https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                    <p class="text-white text-sm font-heading font-semibold">
                        Private Pool
                    </p>
                </div>
            </div>

            <div class="group relative aspect-[4/5] rounded-2xl overflow-hidden">
                <img src="https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                    <p class="text-white text-sm font-heading font-semibold">
                        Master Suite
                    </p>
                </div>
            </div>

            <div class="group relative aspect-[4/5] rounded-2xl overflow-hidden">
                <img src="https://img.vistarooms.com/gallery/casa-frangipani-9e5e0c.jpg"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                    <p class="text-white text-sm font-heading font-semibold">
                        Living Lounge
                    </p>
                </div>
            </div>

            <div class="group relative aspect-[4/5] rounded-2xl overflow-hidden">
                <img src="https://img.vistarooms.com/gallery/casa-frangipani-9629f7.jpg"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                    <p class="text-white text-sm font-heading font-semibold">
                        Dining Pavilion
                    </p>
                </div>
            </div>

            <div class="group relative aspect-[4/5] rounded-2xl overflow-hidden">
                <img src="https://img.vistarooms.com/gallery/casa-frangipani-2c9b15.jpg"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                    <p class="text-white text-sm font-heading font-semibold">
                        Recreation Room
                    </p>
                </div>
            </div>

            <div class="group relative aspect-[4/5] rounded-2xl overflow-hidden">
                <img src="https://img.vistarooms.com/gallery/casa-frangipani-483f65.jpg"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                    <p class="text-white text-sm font-heading font-semibold">
                        Entertainment Zone
                    </p>
                </div>
            </div>

            <div class="group relative aspect-[4/5] rounded-2xl overflow-hidden col-span-2">
                <img src="https://img.vistarooms.com/gallery/casa-frangipani-a74712.jpg"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                    <p class="text-white text-sm font-heading font-semibold">
                        Luxury Bathroom
                    </p>
                </div>
            </div>

        </div>
    </div>

</section>

<div class="mt-4 mb-8 text-center">
    <button id="open-gallery-lightbox"
        class="inline-flex items-center gap-2 px-6 py-3
               bg-brown-dark text-white text-sm font-medium
               rounded-full hover:bg-brown-dark/90 transition">
        View Full Gallery
        <svg xmlns="http://www.w3.org/2000/svg"
     width="24" height="24" viewBox="0 0 24 24"
     fill="none" stroke="currentColor" stroke-width="2"
     stroke-linecap="round" stroke-linejoin="round"
     class="lucide lucide-camera text-white size-5 group-hover:translate-x-1 transition-transform"
     aria-hidden="true">
  <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/>
  <circle cx="12" cy="13" r="3"/>
</svg>

    </button>
</div>




<script>
    const thumbs = document.querySelectorAll('.gallery-thumb');
    const mainImage = document.getElementById('gallery-main-image');
    const title = document.getElementById('gallery-title');
    const desc = document.getElementById('gallery-desc');

    thumbs.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            thumbs.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            mainImage.style.opacity = 0;

            setTimeout(() => {
                mainImage.src = btn.dataset.image;
                title.textContent = btn.dataset.title;
                desc.textContent = btn.dataset.desc;
                mainImage.style.opacity = 1;
            }, 250);
        });
    });
</script>





        <!-- Reviews Section -->
        <section id="reviews" class="py-20 px-6 md:px-10 bg-white">
            <div class="max-w-7xl mx-auto text-center  animate-on-scroll">
                <span class="text-xs uppercase tracking-[0.4em] text-brown-dark/40 font-medium mb-4 block">Guest Experiences</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold tracking-tighter text-brown-dark">What Our Guests Say</h2>
            </div>

            <div class="relative h-[600px] max-w-5xl mx-auto flex items-center justify-center mb-20">
                <div class="absolute left-0 top-1/2 -translate-y-1/2 -rotate-12 w-48 h-64 rounded-2xl overflow-hidden shadow-xl hidden md:block">
                    <img src="https://img.vistarooms.com/gallery/casa-frangipani-877335.jpg" class="w-full h-full object-cover grayscale" alt="Happy guest enjoying stay at Casa Frangipani villa">
                </div>
                <div class="absolute left-24 top-1/2 -translate-y-1/3 rotate-6 w-48 h-64 rounded-2xl overflow-hidden shadow-xl hidden md:block">
                    <img src="https://img.vistarooms.com/gallery/casa-frangipani-e08efc.jpg" class="w-full h-full object-cover grayscale" alt="Family relaxing by pool at luxury villa in Alibaug">
                </div>
                
                <div class="relative z-10 w-full max-w-lg bg-white p-12 md:p-16 rounded-2xl shadow-[0_40px_100px_rgba(0,0,0,0.1)] text-left">
                    <div class="mb-4 text-xs uppercase tracking-[0.3em] text-brown-dark/40 font-medium">Top Review</div>
                    <h4 class="text-2xl font-heading font-bold mb-1 text-brown-dark">Kayan Kalthia</h4>
                    <p class="text-[12px] text-brown-dark/40 uppercase tracking-widest mb-4">few months ago • 5/5</p>
                    <div class="flex gap-2 mb-4">
                        <span class="text-[10px] uppercase px-2 py-1 bg-brown-dark/5 rounded text-brown-dark">Stay</span>
                        <span class="text-[10px] uppercase px-2 py-1 bg-brown-dark/5 rounded text-brown-dark">Food</span>
                        <span class="text-[10px] uppercase px-2 py-1 bg-brown-dark/5 rounded text-brown-dark">Service</span>
                        <span class="text-[10px] uppercase px-2 py-1 bg-brown-dark/5 rounded text-brown-dark">View</span>
                    </div>

                    <p class="text-sm leading-relaxed text-brown-dark/60">
                        We stayed at this villa for our 24th birthday weekend, and overall, it was a wonderful experience. The staff were incredibly helpful and accommodating, ensuring everything ran smoothly during our stay. The service was excellent, and we truly enjoyed celebrating our birthday in such a beautiful setting. There were some booking hiccups with pre-planning, but once we arrived the on-ground team made our weekend fantastic — thank you!
                    </p>
                </div>

                <div class="absolute right-24 top-1/2 -translate-y-1/4 -rotate-6 w-48 h-64 rounded-2xl overflow-hidden shadow-xl hidden md:block">
                    <img src="https://img.vistarooms.com/gallery/casa-frangipani-951391.jpg" class="w-full h-full object-cover grayscale" alt="Couple enjoying romantic getaway at luxury villa">
                </div>
                <div class="absolute right-0 top-1/2 -translate-y-1/2 rotate-12 w-48 h-64 rounded-2xl overflow-hidden shadow-xl hidden md:block">
                    <img src="https://img.vistarooms.com/gallery/casa-frangipani-9629f7.jpg" class="w-full h-full object-cover grayscale" alt="Guest relaxing in villa living room">
                </div>
            </div>

            <div class="max-w-5xl mx-auto mb-12 text-center">
                <div class="inline-flex items-center gap-3 px-6 py-3 bg-brown-dark/5 rounded-full">
                    <img src="https://demo.hestiavillas.in/google.png" alt="Google Reviews" class="h-5">
                    <span class="text-brown-dark font-heading font-bold">4.5/5</span>
                    <span class="text-brown-dark/60">from 47 reviews</span>
                </div>
            </div>

            <div class="max-w-6xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 bg-brown-dark/5 rounded-2xl animate-on-scroll">
                    <div class="flex gap-1 mb-4 text-terracotta">
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                    </div>
                    <h5 class="font-heading font-bold mb-2 text-brown-dark">Aditya Doshi</h5>
                    <p class="text-sm text-brown-dark/60 mb-3">The caretakers are really nice. Very prompt and kind service. The Indian food especially is very tasty, even for kids. The pool area is very relaxing. 5 rooms are big and have luxurious bathrooms. Plenty of parking.</p>
                    <p class="text-xs text-brown-dark/40">few months ago • Stay • Food • Service • Amenities</p>
                </div>

                <div class="p-6 bg-brown-dark/5 rounded-2xl animate-on-scroll">
                    <div class="flex gap-1 mb-4 text-terracotta">
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                    </div>
                    <h5 class="font-heading font-bold mb-2 text-brown-dark">Amol Sakharkar</h5>
                    <p class="text-sm text-brown-dark/60 mb-3">The Manager and Staff were very polite and helpful. The property was great.</p>
                    <p class="text-xs text-brown-dark/40">few months ago • Stay • Service</p>
                </div>

                <div class="p-6 bg-brown-dark/5 rounded-2xl animate-on-scroll">
                    <div class="flex gap-1 mb-4 text-terracotta">
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                    </div>
                    <h5 class="font-heading font-bold mb-2 text-brown-dark">Sweta Das</h5>
                    <p class="text-sm text-brown-dark/60 mb-3">Beautiful villa. The staff is so helpful and even go out of their way to help you — food is a big plus. It's a great place to just wind down.</p>
                    <p class="text-xs text-brown-dark/40">few months ago • Stay • Food • Service • View</p>
                </div>

                <div class="p-6 bg-brown-dark/5 rounded-2xl animate-on-scroll">
                    <div class="flex gap-1 mb-4 text-terracotta">
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                    </div>
                    <h5 class="font-heading font-bold mb-2 text-brown-dark">Vaishali Dixit</h5>
                    <p class="text-sm text-brown-dark/60 mb-3">Our stay at Casa Frangipani was nothing short of amazing. The villa is spacious, beautifully furnished, and the staff ensured every need was met. Truly an unforgettable experience!</p>
                    <p class="text-xs text-brown-dark/40">1 year ago • Stay • Service • View • Amenities</p>
                </div>

                <div class="p-6 bg-brown-dark/5 rounded-2xl animate-on-scroll">
                    <div class="flex gap-1 mb-4 text-terracotta">
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                    </div>
                    <h5 class="font-heading font-bold mb-2 text-brown-dark">Sejal Loomba</h5>
                    <p class="text-sm text-brown-dark/60 mb-3">This house is truly beautiful and thoughtfully appointed. It was incredibly clean, and the team went above and beyond with their efficiency and kindness.</p>
                    <p class="text-xs text-brown-dark/40">few months ago • Food • Service • View • Amenities</p>
                </div>

                <div class="p-6 bg-brown-dark/5 rounded-2xl animate-on-scroll">
                    <div class="flex gap-1 mb-4 text-terracotta">
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                        <i data-lucide="star" class="size-4 fill-terracotta"></i>
                    </div>
                    <h5 class="font-heading font-bold mb-2 text-brown-dark">Sushmit Guha</h5>
                    <p class="text-sm text-brown-dark/60 mb-3">We stayed this Independence Day weekend and it was nothing short of magical. Amazing villa, neatly maintained, huge pool and an above-par service team made our stay memorable for years to come.</p>
                    <p class="text-xs text-brown-dark/40">few months ago • Stay • Food • Service • Amenities</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="https://www.google.com/search?sca_esv=ae1e161c6b0f2947&hl=en-IN&gl=in&sxsrf=ANbL-n5fWei2sTOzltCC_YOQKdwQE8ahMw:1769710825335&si=AL3DRZEsmMGCryMMFSHJ3StBhOdZ2-6yYkXd_doETEE1OR-qOdtWRbU-w05lsUvcniPUTUdjOKXUFv8zGeIDBW0uMPQ6BC161K7biPCOKsOq_WHQpT6K46uGP8qK7pVfaZiyhc7elrB6XtBm1X9cSWizgmFEOdsWF3B9oyT3I_awXZ1JAcUCbxk%3D&q=Hestia+Villas+%E2%80%93+Casa+Frangipani,+Alibag+Reviews&sa=X&ved=2ahUKEwicquXIrrGSAxWFkq8BHd0wAMgQ0bkNegQIJxAH&biw=1536&bih=695&dpr=1.25&aic=0" target="_blank" class="inline-flex items-center gap-2 text-brown-dark border-b border-brown-dark pb-1 hover:text-terracotta hover:border-terracotta transition-colors">
                    Read all Google Reviews
                    <i data-lucide="external-link" class="size-4"></i>
                </a>
            </div>
        </section>

        <!-- Ideal For Section -->
        <section class="py-32 px-6 md:px-10 bg-cream border-t border-brown-dark/5">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end 
            mb-16 md:mb-24 gap-6 md:gap-8 animate-on-scroll">

    <!-- Left: Heading -->
    <div class="space-y-3 text-center md:text-left max-w-xl">
        <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-brown-dark/40">
            Perfect For
        </p>

        <h2 class="font-heading font-bold tracking-tight text-brown-dark
                   text-3xl sm:text-4xl md:text-5xl lg:text-6xl leading-[1.1]">
            Crafted for Every Occasion
        </h2>
    </div>

    <!-- Right: Description -->
    <p class="text-sm md:text-base text-brown-dark/60 max-w-sm leading-relaxed
              text-center md:text-right">
        Whether celebrating, reconnecting, or collaborating, Casa Frangipani adapts
        effortlessly to your needs with personalized services.
    </p>

</div>


                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="group relative aspect-video rounded-2xl overflow-hidden bg-brown-dark/10 cursor-pointer">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_133b50765-1769318194008.png" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="Family enjoying pool time at luxury villa in Alibaug">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-white/60 mb-2">01</span>
                            <h3 class="text-2xl font-heading font-bold mb-3">Family Retreats</h3>
                            <p class="text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-500 leading-relaxed">Kids' pool toys, board games, Netflix access, safe gated environment, and family-friendly outdoor spaces.</p>
                        </div>
                    </div>
                    <div class="group relative aspect-video rounded-2xl overflow-hidden bg-brown-dark/10 cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1563782043-62aeffcf5093" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="Romantic dinner setup on villa deck for couples">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-white/60 mb-2">02</span>
                            <h3 class="text-2xl font-heading font-bold mb-3">Romantic Getaways</h3>
                            <p class="text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-500 leading-relaxed">Private dinner setup, rose petals, champagne on arrival (₹5,000 add-on), couples spa arrangements available.</p>
                        </div>
                    </div>
                    <div class="group relative aspect-video rounded-2xl overflow-hidden bg-brown-dark/10 cursor-pointer">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1efa8c9a1-1769536965141.png" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="Corporate team meeting in villa living area">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-white/60 mb-2">03</span>
                            <h3 class="text-2xl font-heading font-bold mb-3">Corporate Offsites</h3>
                            <p class="text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-500 leading-relaxed">Projector + screen, conference table setup, high-speed WiFi, catering partners, team-building space.</p>
                        </div>
                    </div>
                    <div class="group relative aspect-video rounded-2xl overflow-hidden bg-brown-dark/10 cursor-pointer">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_172b6b9da-1767942355283.png" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="Birthday celebration setup by pool at luxury villa">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-white/60 mb-2">04</span>
                            <h3 class="text-2xl font-heading font-bold mb-3">Celebrations</h3>
                            <p class="text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-500 leading-relaxed">Birthday/anniversary decoration services, cake arrangements, DJ setup available, party-friendly layout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Youtub Videos-->
        <section id="villa-videos" class="bg-cream  pb-20 px-6 md:px-10">
    <div class="max-w-6xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-14 md:mb-20">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold tracking-tight text-brown-dark">
                Experience the Villa
            </h2>
            <p class="mt-4 text-brown-dark/50 max-w-xl mx-auto">
                Step inside the villa through immersive video walkthroughs.
            </p>
        </div>

        <!-- Videos -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16">

            <!-- Video 1 -->
            <div>
                <div class="relative aspect-video rounded-3xl overflow-hidden bg-brown-dark/10 shadow-lg">
                    <iframe
                        class="absolute inset-0 w-full h-full"
                        src="https://www.youtube.com/embed/7o8EefaLJlk"
                        title="Villa Walkthrough Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="mt-6">
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-brown-dark">
                        Complete Villa Walkthrough
                    </h3>
                    <p class="mt-2 text-sm text-brown-dark/60 leading-relaxed">
                        A full walkthrough showcasing the villa’s layout, amenities, and living spaces.
                    </p>
                </div>
            </div>

            <!-- Video 2 -->
            <div>
                <div class="relative aspect-video rounded-3xl overflow-hidden bg-brown-dark/10 shadow-lg">
                    <iframe
                        class="absolute inset-0 w-full h-full"
                        src="https://www.youtube.com/embed/5UWhkCCDRwU"
                        title="Villa Experience Highlights"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="mt-6">
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-brown-dark">
                        Moments & Experiences
                    </h3>
                    <p class="mt-2 text-sm text-brown-dark/60 leading-relaxed">
                        Capturing the atmosphere, comfort, and memorable moments during a stay.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Location Section -->
<section id="location" class="bg-white py-20 md:py-32 px-6 md:px-10">
    <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-16 md:mb-24 animate-on-scroll">
            <span class="text-xs uppercase tracking-[0.35em] text-brown-dark/40 font-medium block mb-4">
                Location
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold tracking-tight text-brown-dark mb-6">
                Perfectly Placed in Alibaug
            </h2>
            <p class="text-brown-dark/60 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
                Located in Alibaug, Casa Frangipani offers easy access to beaches, cafés,
                and local experiences while maintaining a calm residential ambiance.
                Just 2–3 hours from Mumbai, it’s perfect for spontaneous trips and planned holidays.
            </p>
        </div>

        <!-- Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-14 lg:gap-20 items-start">

            <!-- LEFT: INFO -->
            <div class="lg:col-span-5 space-y-4 animate-on-scroll order-2 lg:order-1">

                <!-- Card -->
                <div class="bg-cream rounded-2xl p-5 md:p-6 transition hover:shadow-md">
                    <div class="flex gap-4 items-start">
                        <div class="w-10 h-10 rounded-lg bg-terracotta/15 flex items-center justify-center shrink-0">
                            <i data-lucide="car" class="size-5 text-terracotta"></i>
                        </div>
                        <div>
                            <h3 class="text-base md:text-lg font-heading font-semibold text-brown-dark mb-1">
                                By Road from Mumbai
                            </h3>
                            <p class="text-brown-dark/60 text-sm leading-snug">
                                Approx. 2.5 hours (140 km) via NH66 and Pen–Khopoli Road.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-cream rounded-2xl p-5 md:p-6 transition hover:shadow-md">
                    <div class="flex gap-4 items-start">
                        <div class="w-10 h-10 rounded-lg bg-terracotta/15 flex items-center justify-center shrink-0">
                            <i data-lucide="ship" class="size-5 text-terracotta"></i>
                        </div>
                        <div>
                            <h3 class="text-base md:text-lg font-heading font-semibold text-brown-dark mb-1">
                                Ferry Option
                            </h3>
                            <p class="text-brown-dark/60 text-sm leading-snug">
                                Ferry from Gateway of India to Mandwa Jetty (1 hour),
                                followed by a 10-minute drive.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-cream rounded-2xl p-5 md:p-6 transition hover:shadow-md">
    <div class="flex gap-4 items-start">
        <div class="w-10 h-10 rounded-lg bg-terracotta/15 flex items-center justify-center shrink-0">
            <i data-lucide="waves" class="size-5 text-terracotta"></i>
        </div>
        <div>
            <h3 class="text-base md:text-lg font-heading font-semibold text-brown-dark mb-2">
                Nearby Beaches
            </h3>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 text-xs bg-white/60 rounded-full text-brown-dark/70">Kihim · 10 min</span>
                <span class="px-3 py-1 text-xs bg-white/60 rounded-full text-brown-dark/70">Awas · 15 min</span>
                <span class="px-3 py-1 text-xs bg-white/60 rounded-full text-brown-dark/70">Alibaug · 20 min</span>
                <span class="px-3 py-1 text-xs bg-white/60 rounded-full text-brown-dark/70">Kashid · 45 min</span>
            </div>
        </div>
    </div>
</div>


                <!-- Card -->
                <div class="bg-cream rounded-2xl p-5 md:p-6 transition hover:shadow-md">
    <div class="flex gap-4 items-start">
        <div class="w-10 h-10 rounded-lg bg-terracotta/15 flex items-center justify-center shrink-0">
            <i data-lucide="coffee" class="size-5 text-terracotta"></i>
        </div>
        <div>
            <h3 class="text-base md:text-lg font-heading font-semibold text-brown-dark mb-2">
                Dining & Attractions
            </h3>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 text-xs bg-white/60 rounded-full text-brown-dark/70">Sanman · Seafood</span>
                <span class="px-3 py-1 text-xs bg-white/60 rounded-full text-brown-dark/70">Boardwalk Café</span>
                <span class="px-3 py-1 text-xs bg-white/60 rounded-full text-brown-dark/70">Alibaug Fort</span>
                <span class="px-3 py-1 text-xs bg-white/60 rounded-full text-brown-dark/70">Kolaba Fort</span>
            </div>
        </div>
    </div>
</div>


                <!-- CTA -->
                <div class="pt-6">
                    <a href="https://www.google.com/maps/dir//18.6298,72.8777"
                       target="_blank"
                       class="inline-flex items-center gap-3 px-8 py-4 bg-brown-dark text-white rounded-full font-medium hover:bg-brown-dark/90 transition">
                        <i data-lucide="map-pin" class="size-5"></i>
                        Get Directions
                    </a>
                </div>

            </div>

            <!-- RIGHT: MAP (UNCHANGED) -->
            <div class="lg:col-span-7 animate-on-scroll order-1 lg:order-2">
                <div class="relative aspect-video rounded-3xl overflow-hidden shadow-xl">
                    <iframe
                        class="absolute inset-0 w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.3892498035643!2d72.87403629678954!3d18.780798600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d7d573f95589%3A0x5f4413d8627101a3!2sHestia%20Villas%20%E2%80%93%20Casa%20Frangipani%2C%20Alibag!5e0!3m2!1sen!2sin!4v1769708322420!5m2!1sen!2sin"
                        style="border:0;"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>



       <!-- Booking Form Section -->
<section id="booking" class="py-28 md:py-36 px-6 md:px-10 bg-brown-dark text-white relative overflow-hidden">
    <div class="max-w-4xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-14 animate-on-scroll">
            <span class="text-xs uppercase tracking-[0.35em] text-white/50 font-medium block mb-4">
                Reservations
            </span>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold tracking-tight mb-6">
                Plan Your Stay
            </h2>

            <p class="text-white/70 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
                A private luxury villa with limited availability to preserve comfort and
                personalized service. Book early to secure your preferred dates.
            </p>
        </div>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4  animate-on-scroll">
           
            <a href="https://wa.me/919881149629?text=Hi%2C%20I%27m%20interested%20in%20booking%20Casa%20Frangipani"
               target="_blank"
               class="inline-flex items-center gap-3 px-8 py-4 border border-white/30 text-white rounded-full font-medium hover:bg-white/10 transition">
                 <i data-lucide="message-circle"
                               class="text-white size-5 group-hover:translate-x-1 transition-transform"></i>  WhatsApp for Booking
            </a>
        </div>
<p class="text-center text-sm md:text-sm font-heading font-bold text-white/50 my-6 select-none">
    OR
</p>

        <!-- Form -->
        <div id="booking-form" class="animate-on-scroll">
            <livewire:booking-form />
        </div>

        <!-- Trust Line -->
        <p class="text-center text-white/40 text-sm mt-10">
            We typically respond within 2 hours · Your details are kept private
        </p>

    </div>
</section>

    </main>


 <!-- GALLERY LIGHTBOX -->
<div id="gallery-lightbox"
     class="fixed inset-0 z-[999] bg-black/90 backdrop-blur-sm hidden">

    <button id="close-gallery"
        class="absolute top-6 right-6 text-white/80 hover:text-white text-3xl leading-none">
        &times;
    </button>

    <button id="prev-image"
        class="absolute left-6 top-1/2 -translate-y-1/2 text-white/70 hover:text-white text-4xl">
        ‹
    </button>

    <button id="next-image"
        class="absolute right-6 top-1/2 -translate-y-1/2 text-white/70 hover:text-white text-4xl">
        ›
    </button>

    <div class="w-full h-full flex items-center justify-center px-6">
        <img id="lightbox-image"
             class="max-h-[85vh] max-w-full rounded-xl shadow-2xl transition-all duration-500">
    </div>
</div>
   

{{-- ================= FOOTER ================= --}}
<footer class="py-6 md:py-6 px-6 md:px-12 border-t border-brown-dark/15 bg-gradient-to-b from-cream to-cream/80">
    <div class="max-w-7xl mx-auto flex items-center justify-center">
        <p class="text-brown-dark/40 text-center text-xs md:text-sm">
            © {{ now()->year }} Casa Frangipani. All rights reserved.
        </p>
    </div>
</footer>


@endsection

@push('scripts')
<script>
    const nav = document.getElementById('main-nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('bg-brown-dark/80','backdrop-blur-xl','border-b','border-white/10');
        } else {
            nav.classList.remove('bg-brown-dark/80','backdrop-blur-xl','border-b','border-white/10');
        }
    });

    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    // Toggle mobile menu open/close and lock body scroll while open
    mobileMenuBtn?.addEventListener('click', () => {
        if (!mobileMenu) return;
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
            document.body.style.overflow = '';
        }
    });

    // Close button behavior
    mobileMenuClose?.addEventListener('click', () => {
        if (!mobileMenu) return;
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('flex');
        document.body.style.overflow = '';
    });

    // Close mobile menu when clicking on navigation links AND smooth-scroll to section
    if (mobileMenu) {
        const mobileMenuLinks = mobileMenu.querySelectorAll('a[href^="#"]');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (!href || !href.startsWith('#')) return;
                e.preventDefault();
                // close menu first
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                document.body.style.overflow = '';
                // then smooth-scroll to target after a short delay so the menu close animation can run
                const target = document.querySelector(href);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        try { history.pushState(null, '', href); } catch(_){}
                    }, 120);
                }
            });
        });
    }

    document.getElementById('booking-form')?.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Thank you! We will contact you shortly.');
        e.target.reset();
    });

    // Gallery Tab Switcher (matches Rocket reference)
    const galleryTabs = document.querySelectorAll('.gallery-tab');
    const mainGalleryImage = document.getElementById('main-gallery-image');
    const galleryTitle = document.getElementById('gallery-title');
    const galleryDesc = document.getElementById('gallery-desc');
    const gallerySleeps = document.getElementById('gallery-sleeps');
    const gallerySize = document.getElementById('gallery-size');
    const galleryView = document.getElementById('gallery-view');

    // Gallery interactivity + mobile support
    const galleryArray = Array.from(galleryTabs);
    function activateGalleryTab(tab){
        galleryTabs.forEach(t => { t.classList.add('opacity-30'); t.classList.remove('active'); });
        tab.classList.remove('opacity-30'); tab.classList.add('active');

        const data = tab.dataset;
        if (mainGalleryImage) {
            mainGalleryImage.style.opacity = '0';
            setTimeout(() => {
                mainGalleryImage.src = data.image;
                mainGalleryImage.alt = `${data.room} at Casa Frangipani luxury villa - ${data.desc}`;
                if (galleryTitle) galleryTitle.textContent = data.room;
                if (galleryDesc) galleryDesc.textContent = data.desc;
                if (gallerySleeps) gallerySleeps.textContent = data.sleeps;
                if (gallerySize) gallerySize.textContent = data.size;
                if (galleryView) galleryView.textContent = data.view;
                // mobile fields
                const mTitle = document.getElementById('gallery-title-mobile');
                const mDesc = document.getElementById('gallery-desc-mobile');
                const mSleeps = document.getElementById('gallery-sleeps-mobile');
                const mSize = document.getElementById('gallery-size-mobile');
                const mView = document.getElementById('gallery-view-mobile');
                if (mTitle) mTitle.textContent = data.room;
                if (mDesc) mDesc.textContent = data.desc;
                if (mSleeps) mSleeps.textContent = data.sleeps;
                if (mSize) mSize.textContent = data.size;
                if (mView) mView.textContent = data.view;

                mainGalleryImage.onload = () => { mainGalleryImage.style.opacity = '1'; };
                setTimeout(() => { mainGalleryImage.style.opacity = '1'; }, 100);
            }, 250);
        }
    }

    galleryTabs.forEach(tab => {
        tab.addEventListener('click', () => activateGalleryTab(tab));
    });

    // Enable swipe on main image container (mobile)
    (function(){
        const container = document.getElementById('main-gallery-image-container');
        if (!container) return;
        let startX = 0, dist = 0;
        container.addEventListener('touchstart', function(e){ startX = e.touches[0].clientX; });
        container.addEventListener('touchmove', function(e){ dist = e.touches[0].clientX - startX; });
        container.addEventListener('touchend', function(){
            if (Math.abs(dist) < 40) return; // not a swipe
            const activeIndex = galleryArray.findIndex(t => t.classList.contains('active'));
            if (dist < 0){ // swipe left -> next
                const next = galleryArray[(activeIndex + 1) % galleryArray.length]; activateGalleryTab(next);
            } else { // swipe right -> prev
                const prev = galleryArray[(activeIndex -1 + galleryArray.length) % galleryArray.length]; activateGalleryTab(prev);
            }
            dist = 0; startX = 0;
        });
    })();

    // Intersection Observer for slide/cinematic reveals (hero elements)
    const observerOptions = { root: null, rootMargin: '0px', threshold: 0.05 };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe a broad set of animation utility classes used in the template
    document.querySelectorAll('.animate-on-scroll, .animate-slide-up, .animate-fade-in-up, .animate-cinematic, .animate-shimmer, .animate-width-expand').forEach(el => {
        observer.observe(el);
    });

    // Responsive gallery helper styles (mobile horizontal tabs) and Flatpickr date range -> populate Livewire form inputs (targets .date-range-picker)
    (function(){
        // Inject small responsive gallery CSS for mobile UX
        const galleryStyles = document.createElement('style');
        galleryStyles.textContent = `
            @media (max-width: 1024px) {
                #gallery-list{ display:flex; gap:1rem; overflow-x:auto; -webkit-overflow-scrolling:touch; padding-bottom:0.5rem; }
                #gallery-list .gallery-tab{ min-width:70%; flex:0 0 auto; background:transparent; border-radius:12px; padding:12px; box-sizing:border-box; }
                #gallery-list .gallery-tab h4{ font-size:1.05rem; }
                #main-gallery-image-container{ scroll-snap-align:center; }
            }
            @media (max-width:640px){
                #main-gallery-image{ object-position:center; }
            }
        `;
        document.head.appendChild(galleryStyles);


        function initPickers(){
            if (typeof flatpickr === 'undefined') return;

            document.querySelectorAll('.date-range-picker').forEach(function(el){
                // prevent double-init
                if (el.__flatpickrInitialized) return;
                el.__flatpickrInitialized = true;

                const setHiddenDates = (startStr, endStr) => {
                    const form = el.closest('form');
                    let inputIn = form ? form.querySelector('#check_in_hidden') : null;
                    let inputOut = form ? form.querySelector('#check_out_hidden') : null;
                    if (!inputIn) inputIn = document.getElementById('check_in_hidden');
                    if (!inputOut) inputOut = document.getElementById('check_out_hidden');

                    if (inputIn){ inputIn.value = startStr; inputIn.dispatchEvent(new Event('input', { bubbles: true })); }
                    if (inputOut){ inputOut.value = endStr; inputOut.dispatchEvent(new Event('input', { bubbles: true })); }

                    // update optional visible display helpers (if present)
                    const dispIn = document.getElementById('display_check_in');
                    const dispOut = document.getElementById('display_check_out');
                    function fmt(d){ if (!d) return ''; const dt = new Date(d); if (isNaN(dt)) return d; return dt.toLocaleDateString(undefined, { month: 'short', day: 'numeric' }); }
                    if (dispIn) dispIn.textContent = fmt(startStr);
                    if (dispOut) dispOut.textContent = fmt(endStr);
                }

                const fp = flatpickr(el, {
                    mode: 'range',
                    dateFormat: 'Y-m-d',
                    allowInput: true,
                    onChange: function(selectedDates, dateStr, instance){
                        const start = selectedDates[0] ?? null;
                        const end = selectedDates[1] ?? null;
                        const startStr = start ? instance.formatDate(start, 'Y-m-d') : '';
                        const endStr = end ? instance.formatDate(end, 'Y-m-d') : '';
                        setHiddenDates(startStr, endStr);
                    },
                    onClose: function(selectedDates, dateStr, instance){
                        // ensure hidden inputs set on close
                        const start = selectedDates[0] ?? null;
                        const end = selectedDates[1] ?? null;
                        const startStr = start ? instance.formatDate(start, 'Y-m-d') : '';
                        const endStr = end ? instance.formatDate(end, 'Y-m-d') : '';
                        setHiddenDates(startStr, endStr);
                    },
                    onValueUpdate: function(selectedDates, dateStr, instance){
                        // handle manual input changes
                        if (dateStr && dateStr.indexOf('—') !== -1) {
                            const parts = dateStr.split('—').map(s => s.trim());
                            setHiddenDates(parts[0] || '', parts[1] || '');
                        }
                    }
                });

                // attach fp reference and fallback trigger
                el._flatpickr = fp;

                // Fallback: open picker on click if not visible/initialized yet
                el.addEventListener('click', function(){
                    if (el._flatpickr) el._flatpickr.open();
                });

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
            document.addEventListener('livewire:update', function(){
                if (window.lucide) lucide.createIcons();
                setTimeout(initPickers, 50);
            });

            // Also run immediately once flatpickr exists
            setTimeout(initPickers, 50);
        }, 8000);
    })();
</script>



<!-- villa gallery popup -->

<script>
(function () {

    const galleryImages = [
  "https://img.vistarooms.com/gallery/casa-frangipani-657c43.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-2c9b15.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-483f65.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-9e5e0c.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-72d47e.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-a74712.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-7cef0e.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-73232f.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-8df5a1.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-6be961.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-845caa.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-2fd0ab.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-e90014.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-e08efc.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-877335.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-951391.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-179756.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-3b392f.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-38ce71.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-c43908.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-5cb0e2.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-0c3c0b.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-7b6ecf.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-03d218.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-445e24.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-2df609.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-a8d0fb.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-9629f7.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-16d491.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-77b6eb.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-46409e.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-71bb7f.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-5f41a0.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-6de412.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-bc6010.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-2c729c.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-624272.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-7045aa.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-2cafa4.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-cd9529.jpg",
  "https://img.vistarooms.com/gallery/casa-frangipani-54d2da.jpg",
  "https://img.vistarooms.com/website_assets/brand_of_the_year.webp",
  "https://img.vistarooms.com/website_assets/trust_factor_15.jpg",
  "https://img.vistarooms.com/website_assets/sv_certified_partner.webp"
];

    let currentIndex = 0;

    const lightbox = document.getElementById("gallery-lightbox");
    const lightboxImg = document.getElementById("lightbox-image");

    document.getElementById("open-gallery-lightbox").addEventListener("click", () => {
        currentIndex = 0;
        lightboxImg.src = galleryImages[currentIndex];
        lightbox.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    });

    document.getElementById("close-gallery").addEventListener("click", closeLightbox);

    document.getElementById("next-image").addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        updateImage();
    });

    document.getElementById("prev-image").addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        updateImage();
    });

    function updateImage() {
        lightboxImg.classList.add("opacity-0");
        setTimeout(() => {
            lightboxImg.src = galleryImages[currentIndex];
            lightboxImg.classList.remove("opacity-0");
        }, 200);
    }

    function closeLightbox() {
        lightbox.classList.add("hidden");
        document.body.style.overflow = "";
    }

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowRight") document.getElementById("next-image").click();
        if (e.key === "ArrowLeft") document.getElementById("prev-image").click();
    });

})();
</script>


@endpush
