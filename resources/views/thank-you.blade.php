@extends('layouts.app')

@section('title', 'Thank You | Casa Frangipani')

@section('content')
<section class="min-h-screen flex items-center justify-center
                bg-brown-dark text-white px-6">

    <div class="max-w-xl w-full text-center space-y-6">

        <div class="w-16 h-16 mx-auto
                    rounded-full bg-[#D4AF37]
                    flex items-center justify-center">
            <i data-lucide="check" class="w-7 h-7 text-brown-dark"></i>
        </div>

        <h1 class="text-3xl md:text-4xl font-heading font-bold">
            Thank You for Your Enquiry
        </h1>

        <p class="text-white/70 leading-relaxed">
            We’ve received your booking request for Casa Frangipani.
            Our team will review availability and get back to you shortly.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">

            <a href="/casa-frangipani-luxury-villa-rental-alibaug"
               class="px-6 py-3 rounded-full
                      bg-white text-brown-dark
                      font-medium hover:bg-white/90 transition">
                Back to Home
            </a>

            <a href="https://wa.me/919881149629"
               target="_blank"
               class="px-6 py-3 rounded-full
                      border border-white/30
                      text-white hover:bg-white/10 transition">
                WhatsApp Us
            </a>

        </div>

        <p class="text-xs text-white/40 pt-4">
            We usually respond within 2 hours
        </p>

    </div>
</section>
@endsection
