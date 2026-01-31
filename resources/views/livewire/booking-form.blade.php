@php
    $showThanks = $submitted || session()->has('success');
@endphp

@unless($showThanks)

<form id="bookingFormHero"
      action="{{ route('booking.enquire') }}"
      method="POST"
      wire:submit.prevent="submit"
      class="space-y-6 bg-black/40 p-4 md:p-5 rounded-2xl shadow-lg">

    @csrf

    {{-- Success flash --}}
    @if (session()->has('success'))
        <div x-data="{}"
             x-init="setTimeout(()=> $el.remove(),4000)"
             class="p-3 rounded-lg bg-green-600 text-white text-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- ===================== DATES ===================== --}}
    <div>
        <label class="block text-[11px] text-stone-400 mb-1">Dates</label>

        <input id="formDateRange"
               name="date_range"
               readonly
               placeholder="Check-in — Check-out"
               class="date-range-picker rounded-lg p-3 w-full
                      bg-black/60 border border-white/10
                      text-white text-sm"
               value="{{ old('date_range') }}" />

        <input type="hidden" id="check_in_hidden" name="check_in"
               wire:model.defer="check_in"
               value="{{ old('check_in', $check_in ?? '') }}">

        <input type="hidden" id="check_out_hidden" name="check_out"
               wire:model.defer="check_out"
               value="{{ old('check_out', $check_out ?? '') }}">

        <div class="flex justify-between text-[11px] text-stone-400">
            <span>
                In:
                <strong id="display_check_in" class="text-white font-medium">
                    {{ $check_in ? \Carbon\Carbon::parse($check_in)->format('M d') : '—' }}
                </strong>
            </span>
            <span>
                Out:
                <strong id="display_check_out" class="text-white font-medium">
                    {{ $check_out ? \Carbon\Carbon::parse($check_out)->format('M d') : '—' }}
                </strong>
            </span>
        </div>

        <div class="flex gap-3 mt-1">
            @error('check_in') <span class="text-red-400 text-[11px]">{{ $message }}</span> @enderror
            @error('check_out') <span class="text-red-400 text-[11px]">{{ $message }}</span> @enderror
        </div>
    </div>

    {{-- ===================== NAME + PHONE ===================== --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

        <div>
            <label class="block text-[11px] text-stone-400 mb-1">Full Name</label>
            <input type="text"
                   name="name"
                   wire:model.defer="name"
                   placeholder="Your name"
                   class="rounded-lg p-3 w-full
                          bg-black/60 border border-white/10
                          text-white text-sm">
            @error('name')
                <span class="text-red-400 text-[11px]">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label class="block text-[11px] text-stone-400 mb-1">Phone</label>
            <input type="tel"
                   name="phone"
                   wire:model.defer="phone"
                   placeholder="Phone number"
                   class="rounded-lg p-3 w-full
                          bg-black/60 border border-white/10
                          text-white text-sm">
            @error('phone')
                <span class="text-red-400 text-[11px]">{{ $message }}</span>
            @enderror
        </div>

    </div>

    {{-- ===================== EMAIL + GUEST COUNT ===================== --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

        <div>
            <label class="block text-[11px] text-stone-400 mb-1">Email (optional)</label>
            <input type="email"
                   name="email"
                   wire:model.defer="email"
                   placeholder="you@example.com"
                   class="rounded-lg p-3 w-full
                          bg-black/60 border border-white/10
                          text-white text-sm">
        </div>

        <div>
            <label class="block text-[11px] text-stone-400 mb-1">Guests</label>
            <input type="number"
                   min="1"
                   name="guest_count"
                   wire:model.defer="guest_count"
                   class="rounded-lg p-3 w-full
                          bg-black/60 border border-white/10
                          text-white text-sm"
                   value="{{ old('guest_count', $guest_count ?? 2) }}" />
            @error('guest_count')
                <span class="text-red-400 text-[11px]">{{ $message }}</span>
            @enderror
        </div>

    </div>

    {{-- ===================== SPECIAL ENQUIRY (FULL WIDTH) ===================== --}}
    <div>
        <label class="block text-[11px] text-stone-400 mb-1">
            Special Enquiry / Requests
        </label>

        <textarea name="customer_notes"
                  rows="3"
                  wire:model.defer="customer_notes"
                  placeholder="Any special requirements, celebrations, dietary preferences, or questions…"
                  class="rounded-lg p-3 w-full
                         bg-black/60 border border-white/10
                         text-white text-sm resize-none
                         focus:border-[#D4AF37] focus:ring-1 focus:ring-[#D4AF37]/30"></textarea>
    </div>

    {{-- ===================== SUBMIT ===================== --}}
    <div>
        <button type="submit"
                wire:loading.attr="disabled"
                class="w-full bg-[#D4AF37] text-black
                       py-2.5 rounded-lg text-sm font-semibold
                       relative overflow-hidden">

            <span wire:loading.remove>
                Enquire Now
            </span>

            <span wire:loading class="flex items-center justify-center gap-2">
                <svg class="animate-spin h-4 w-4" viewBox="0 0 24 24">
                    <circle class="opacity-25"
                            cx="12" cy="12" r="10"
                            stroke="currentColor"
                            stroke-width="4"
                            fill="none"></circle>
                    <path class="opacity-75"
                          fill="currentColor"
                          d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>
                Processing…
            </span>

        </button>
    </div>

    <p class="text-xs text-gray-400 text-center">
        Instant response
    </p>

</form>

@else

{{-- ===================== THANK YOU STATE ===================== --}}
<div class="space-y-4 p-6 text-center">

    <div class="inline-flex items-center justify-center
                w-16 h-16 mx-auto
                rounded-full bg-[#D4AF37]
                text-black text-2xl font-bold">
        <i data-lucide="check" class="w-6 h-6"></i>
    </div>

    <h3 class="text-2xl font-fraunces text-white">
        Thank you — Booking Received
    </h3>

    <p class="text-stone-300 text-sm">
        We’ve received your request and will contact you shortly.
    </p>

    <div class="flex flex-col md:flex-row
                items-center justify-center
                gap-4 mt-4">

        <a href="#"
           wire:click.prevent="resetForm"
           class="px-4 py-2 bg-white/5 border border-white/10
                  rounded-lg text-sm text-white hover:bg-white/10">
            Make another enquiry
        </a>

        <a href="https://wa.me/919881149629?text=Hi%2C%20I%27m%20interested%20in%20booking%20Casa%20Frangipani"
           target="_blank"
           class="flex items-center gap-2
                  border border-white/30 text-white
                  px-4 py-2 rounded-lg text-sm font-semibold
                  hover:border-[#D4AF37]
                  hover:bg-white/10 transition">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            WhatsApp Enquiry
        </a>

    </div>

</div>

@endunless
