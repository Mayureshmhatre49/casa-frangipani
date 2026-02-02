@extends('layouts.app')

@section('title', 'Casa Frangipani – Luxury Private Villa in Alibaug')
@section('meta_description', 'Experience quiet luxury at Casa Frangipani, a fully serviced private pool villa in Alibaug. Ideal for families, celebrations & offsites.')

@section('content')

<main class="overflow-hidden">

<style>
.hero-slide-v2 {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transition: opacity 1.1s ease;
}
.hero-slide-v2.active {
    opacity: 1;
}

/* Dots */
.hero-dot {
    width: 26px;
    height: 4px;
    border-radius: 999px;
    background: rgba(255,255,255,0.4);
    transition: all .4s ease;
}
.hero-dot.active {
    background: #fff;
    width: 38px;
}


</style>

{{-- =====================================================
HERO — EDITORIAL SPLIT
===================================================== --}}
<header class="relative h-screen w-full overflow-hidden">

    {{-- SLIDER --}}
    <div class="absolute inset-0 z-0">

        <div class="hero-slide-v2 active"
             style="background-image:url('http://hestiavillas.in/wp-content/uploads/2026/01/Casa-Frangipani-Alibaug-1.webp')"
             data-title="An Ultra-Luxury 6 BHK Villa"
             data-subtitle="Calm Surroundings · Fully Serviced"
             data-desc="A fully serviced villa experience surrounded by calm, greenery, and effortless comfort.">
        </div>

        <div class="hero-slide-v2"
             style="background-image:url('https://img.vistarooms.com/gallery/casa-frangipani-8b5e9e.jpg')"
             data-title="Private Luxury Pool Villa"
             data-subtitle="Complete Privacy"
             data-desc="A secluded private pool villa designed for peaceful escapes and relaxed weekend getaways near Mumbai.">
        </div>

        <div class="hero-slide-v2"
             style="background-image:url('https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg')"
             data-title="Six Spacious Bedrooms"
             data-subtitle="Ideal for Families & Groups"
             data-desc="Six air-conditioned bedrooms designed for comfort, space, and relaxed living.">
        </div>

        {{-- Soft luxury overlay --}}
        <div class="absolute inset-0 bg-black/15"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
    </div>

    {{-- CONTENT --}}
    <div class="relative z-10 h-full flex items-end">
        <div class="w-full px-6 md:px-12 pb-12 md:pb-20">

            <div class="max-w-md md:max-w-lg
                        bg-white/85 backdrop-blur-xl
                        rounded-[28px]
                        p-6 md:p-8
                        shadow-[0_30px_90px_rgba(0,0,0,0.25)]">

                <span class="text-[10px] uppercase tracking-[0.35em] text-brown-dark/50">
                    Alibaug · Maharashtra
                </span>

                <h1 id="hero-title"
                    class="font-heading font-bold text-brown-dark
                           text-[clamp(1.6rem,4vw,2.6rem)]
                           leading-tight mt-3">
                    An Ultra-Luxury 6 BHK Villa
                </h1>

                <p id="hero-subtitle"
                   class="mt-2 font-serif italic text-brown-dark/70">
                    Calm Surroundings · Fully Serviced
                </p>

                <p id="hero-desc"
                   class="mt-4 text-sm text-brown-dark/60 leading-relaxed">
                    A fully serviced villa experience surrounded by calm, greenery, and effortless comfort.
                </p>

                <div class="mt-6 flex items-center gap-4">
                    <button
                        class="open-booking-modal
                               px-6 py-3 rounded-full
                               bg-brown-dark text-white text-sm font-medium
                               hover:bg-brown-dark/90 transition">
                        Check Availability
                    </button>

                    <a href="#gallery"
                       class="text-sm font-medium text-brown-dark border-b border-brown-dark">
                        View Gallery
                    </a>
                </div>

            </div>

        </div>
    </div>

    {{-- DOT INDICATORS --}}
    <div class="absolute bottom-6 right-6 z-20 flex gap-2">
        <button class="hero-dot active"></button>
        <button class="hero-dot"></button>
        <button class="hero-dot"></button>
    </div>

</header>


<script>
 const heroSlides = document.querySelectorAll('.hero-slide-v2');
const dots = document.querySelectorAll('.hero-dot');

function showSlide(index) {
    heroSlides.forEach(s => s.classList.remove('active'));
    dots.forEach(d => d.classList.remove('active'));

    heroSlides[index].classList.add('active');
    dots[index]?.classList.add('active');

    heroTitle.style.opacity = 0;
    heroSubtitle.style.opacity = 0;
    heroDesc.style.opacity = 0;

    setTimeout(() => {
        heroTitle.textContent = heroSlides[index].dataset.title;
        heroSubtitle.textContent = heroSlides[index].dataset.subtitle;
        heroDesc.textContent = heroSlides[index].dataset.desc;

        heroTitle.style.opacity = 1;
        heroSubtitle.style.opacity = 1;
        heroDesc.style.opacity = 1;
    }, 300);
}

</script>

{{-- =====================================================
SOCIAL PROOF STRIP
===================================================== --}}
<section class="bg-white border-t border-brown-dark/10">
    <div class="max-w-7xl mx-auto px-6 md:px-10 py-6 flex flex-wrap justify-center gap-8 text-sm text-brown-dark/70">
        <span>⭐ 4.5 Google Rating</span>
        <span>👨‍👩‍👧‍👦 200+ Guests Hosted</span>
        <span>🏡 Managed by Hestia Villas</span>
        <span>🔒 Fully Serviced & Private</span>
    </div>
</section>

{{-- =====================================================
VILLA STORY (EDITORIAL)
===================================================== --}}
<section id="story" class="py-20 md:py-32 bg-cream">
    <div class="max-w-6xl mx-auto px-6 md:px-10 grid md:grid-cols-2 gap-14 items-center">

        <h2 class="font-heading font-bold text-brown-dark text-4xl md:text-5xl leading-tight">
            More than a villa,<br>
            it’s a private escape.
        </h2>

        <p class="text-brown-dark/60 text-lg leading-relaxed">
            Casa Frangipani is designed for guests who value space, silence, and
            refined living. Nestled in a peaceful residential pocket of Alibaug,
            the villa blends indoor comfort with open-air freedom — a place where
            mornings are slow and evenings linger.
        </p>

    </div>
</section>

{{-- =====================================================
SIGNATURE EXPERIENCES
===================================================== --}}
<section id="experiences" class="bg-white py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 md:px-10">

        <div class="text-center mb-16">
            <h3 class="font-heading font-bold text-brown-dark text-4xl md:text-5xl">
                Signature Experiences
            </h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <div class="rounded-3xl overflow-hidden bg-cream p-8 space-y-3">
                <h4 class="font-heading font-semibold text-brown-dark text-xl">
                    Private Pool Living
                </h4>
                <p class="text-brown-dark/60 text-sm">
                    Morning swims, quiet afternoons, and sunset lounging —
                    completely your own.
                </p>
            </div>

            <div class="rounded-3xl overflow-hidden bg-cream p-8 space-y-3">
                <h4 class="font-heading font-semibold text-brown-dark text-xl">
                    Fully Serviced Comfort
                </h4>
                <p class="text-brown-dark/60 text-sm">
                    Daily housekeeping, attentive caretakers,
                    and hotel-grade comfort throughout your stay.
                </p>
            </div>

            <div class="rounded-3xl overflow-hidden bg-cream p-8 space-y-3">
                <h4 class="font-heading font-semibold text-brown-dark text-xl">
                    Indoor–Outdoor Flow
                </h4>
                <p class="text-brown-dark/60 text-sm">
                    Seamless movement between living spaces, garden,
                    pool deck, and open lounging areas.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- =====================================================
VILLA HIGHLIGHTS (VISUAL GRID)
===================================================== --}}
<section id="highlights" class="bg-cream py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 md:px-10">

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

            <div class="md:col-span-6 h-96 rounded-3xl bg-brown-dark/10"></div>
            <div class="md:col-span-3 h-96 rounded-3xl bg-brown-dark/10"></div>
            <div class="md:col-span-3 h-96 rounded-3xl bg-brown-dark/10"></div>

            <div class="md:col-span-12 h-80 rounded-3xl bg-brown-dark/10"></div>

        </div>
    </div>
</section>

{{-- =====================================================
GALLERY (REWORKED – KEEP LOGIC)
===================================================== --}}
<section id="gallery" class="bg-white py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 md:px-10">
        {{-- Reuse existing gallery JS / lightbox --}}
    </div>
</section>

{{-- =====================================================
PERFECT FOR
===================================================== --}}
<section id="perfect-for" class="bg-cream py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 md:px-10">

        <div class="text-center mb-16">
            <h3 class="font-heading font-bold text-brown-dark text-4xl md:text-5xl">
                Crafted for Every Occasion
            </h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="bg-white p-10 rounded-3xl">Family Retreats</div>
            <div class="bg-white p-10 rounded-3xl">Celebrations</div>
            <div class="bg-white p-10 rounded-3xl">Corporate Offsites</div>
            <div class="bg-white p-10 rounded-3xl">Romantic Escapes</div>
        </div>

    </div>
</section>

{{-- =====================================================
LOCATION
===================================================== --}}
<section id="location" class="bg-white py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 md:px-10 grid md:grid-cols-2 gap-14 items-center">

        <div class="rounded-3xl overflow-hidden bg-brown-dark/10 h-[420px]">
            {{-- Map iframe --}}
        </div>

        <div class="space-y-4">
            <h3 class="font-heading font-bold text-brown-dark text-4xl">
                Perfectly Placed in Alibaug
            </h3>

            <ul class="text-brown-dark/60 space-y-2">
                <li>• Quiet residential neighborhood</li>
                <li>• 10–20 mins to beaches</li>
                <li>• Easy ferry access from Mumbai</li>
                <li>• Close to cafés & attractions</li>
            </ul>
        </div>

    </div>
</section>

{{-- =====================================================
BOOKING + FAQ (KEEP AS-IS)
===================================================== --}}


</main>

@endsection
