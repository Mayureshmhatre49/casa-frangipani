@php $showThanks = $submitted || session()->has('success'); @endphp

@unless($showThanks)
<form id="bookingFormHero" action="{{ route('booking.enquire') }}" method="POST" wire:submit.prevent="submit" class="space-y-4 bg-black/40 p-6 rounded-2xl shadow-lg">
    @csrf

    @if (session()->has('success'))
        <div x-data="{}" x-init="setTimeout(()=> $el.remove(),4000)" class="p-3 rounded-lg bg-green-600 text-white text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div>
        <label class="block text-xs text-stone-400 mb-1">Dates</label>
        <input id="formDateRange" name="date_range" class="date-range-picker rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" placeholder="Select check-in — check-out" readonly value="{{ old('date_range') }}" />
        <input type="hidden" id="check_in_hidden" name="check_in" wire:model.defer="check_in" value="{{ old('check_in', $check_in ?? '') }}">
        <input type="hidden" id="check_out_hidden" name="check_out" wire:model.defer="check_out" value="{{ old('check_out', $check_out ?? '') }}">

        <div class="mt-2 flex gap-4 text-xs text-stone-300">
            <div class="flex flex-col">
                <span class="text-[10px] text-stone-400 uppercase">Check-in</span>
                <span id="display_check_in" class="font-medium">{{ $check_in ? \Carbon\Carbon::parse($check_in)->format('M d') : '' }}</span>
            </div>
            <div class="flex flex-col">
                <span class="text-[10px] text-stone-400 uppercase">Check-out</span>
                <span id="display_check_out" class="font-medium">{{ $check_out ? \Carbon\Carbon::parse($check_out)->format('M d') : '' }}</span>
            </div>
        </div>

        <div class="flex gap-3 mt-2">
            @error('check_in') <div class="text-red-400 text-xs">{{ $message }}</div> @enderror
            @error('check_out') <div class="text-red-400 text-xs">{{ $message }}</div> @enderror
        </div>
    </div>

    <div>
        <label class="block text-xs text-stone-400 mb-1">Guests</label>
        <input type="number" name="guest_count" wire:model.defer="guest_count" min="1" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" value="{{ old('guest_count', $guest_count ?? 2) }}" />
        @error('guest_count') <div class="text-red-400 text-xs mt-1">{{ $message }}</div> @enderror
    </div>

    <div class="grid grid-cols-1 gap-3">
        <div>
            <label class="block text-xs text-stone-400 mb-1">Full name</label>
            <input type="text" name="name" wire:model.defer="name" placeholder="Your Name" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" value="{{ old('name', $name ?? '') }}">
            @error('name') <div class="text-red-400 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block text-xs text-stone-400 mb-1">Phone</label>
            <input type="tel" name="phone" wire:model.defer="phone" placeholder="Phone Number" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" value="{{ old('phone', $phone ?? '') }}">
            @error('phone') <div class="text-red-400 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block text-xs text-stone-400 mb-1">Email (optional)</label>
            <input type="email" name="email" wire:model.defer="email" placeholder="you@example.com" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" value="{{ old('email', $email ?? '') }}">
            @error('email') <div class="text-red-400 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block text-xs text-stone-400 mb-1">Special requests</label>
            <textarea name="customer_notes" wire:model.defer="customer_notes" rows="3" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" placeholder="Any special requirements...">{{ old('customer_notes', $customer_notes ?? '') }}</textarea>
        </div>
    </div>

    <div class="mt-2">
        <button type="submit" wire:loading.attr="disabled" class="w-full bg-[#D4AF37] text-black py-3 rounded-xl font-semibold relative overflow-hidden">
            <span wire:loading.remove>Enquire Now</span>
            <span wire:loading class="flex items-center justify-center gap-2">
                <svg class="animate-spin h-4 w-4" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg>
                Processing...
            </span>
        </button>
    </div>

    <p class="text-xs text-gray-400 text-center mt-2">Instant response</p>

</form>
@else

<div class="space-y-4 p-6 text-center">
    <div class="inline-flex items-center justify-center w-20 h-20 mx-auto rounded-full bg-[#D4AF37] text-black text-3xl font-bold mb-4">
        <i data-lucide="check" class="w-6 h-6"></i>
    </div>
    <h3 class="text-2xl font-fraunces text-white">Thank you — Booking Received</h3>
    <p class="text-stone-300">We have received your request and will contact you shortly to confirm availability and next steps.</p>
    <div class="flex items-center justify-center gap-4 mt-4">
        <a href="#" wire:click.prevent="resetForm" class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg text-sm text-white hover:bg-white/10">Make another enquiry</a>
        <a href="https://wa.me/919881149629" target="_blank" class="group relative overflow-hidden flex items-center gap-1 border-2 border-white/30 text-white px-4 py-2 rounded-lg font-semibold text-sm hover:bg-white/10 hover:border-[#D4AF37] transition-all duration-300 backdrop-blur-md transform hover:scale-105 hover:-translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="message-circle" aria-hidden="true" class="lucide lucide-message-circle w-4 h-4"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"></path></svg>
                        <span>WhatsApp Enquiry</span>
                    </a>
    </div>
</div>

@endunless
