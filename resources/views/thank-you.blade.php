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

            <a href="https://wa.me/918010234802?text=Hi%20%F0%9F%91%8B%0A%0AI%E2%80%99m%20interested%20in%20*Casa%20Frangipani*%20%E2%80%93%20a%20private%206%20BHK%20luxury%20villa%20in%20Alibaug.%0A%0AI%20understand%20that%20*villa%20rentals%20start%20from%20%E2%82%B945%2C000%20for%20a%20weekend*.%0A%0APlease%20share%20availability%20and%20exact%20pricing%20for%20my%20dates.%0A%0A*My%20details%3A*%0A%E2%80%A2%20Preferred%20check-in%20date%3A%0A%E2%80%A2%20Number%20of%20guests%3A%0A%E2%80%A2%20Number%20of%20nights%3A%0A%E2%80%A2%20Occasion%20(if%20any)%3A%0A%E2%80%A2%20Contact%20number%3A%0A%0ALooking%20forward%20to%20your%20response.%20Thanks!"
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
