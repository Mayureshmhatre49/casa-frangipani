<form id="bookingFormHero"
      wire:submit.prevent="submit"
      class="space-y-4 bg-black/40 p-4 md:p-5 rounded-2xl shadow-lg">

    @csrf

    {{-- ===================== DATES ===================== --}}
    <div>
        <label class="block text-[10px] text-stone-400 mb-1 uppercase tracking-wide">
            Dates
        </label>

        <input
            id="formDateRange"
            name="date_range"
            readonly
            placeholder="Check-in — Check-out"
            class="date-range-picker w-full rounded-lg px-3 py-2.5
                   bg-black/60 border border-white/10
                   text-white text-sm"
            value="{{ old('date_range') }}"
        />

        <input type="hidden" id="check_in_hidden" name="check_in" wire:model.defer="check_in">
        <input type="hidden" id="check_out_hidden" name="check_out" wire:model.defer="check_out">

        <div class="flex justify-between text-[10px] text-stone-400 mt-1">
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
            @error('check_in') <span class="text-red-400 text-[10px]">{{ $message }}</span> @enderror
            @error('check_out') <span class="text-red-400 text-[10px]">{{ $message }}</span> @enderror
        </div>
    </div>

    {{-- ===================== NAME + PHONE ===================== --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div>
            <label class="block text-[10px] text-stone-400 mb-1 uppercase tracking-wide">
                Full Name
            </label>
            <input type="text"
                   name="name"
                   wire:model.defer="name"
                   placeholder="Your name"
                   class="w-full rounded-lg px-3 py-2.5
                          bg-black/60 border border-white/10
                          text-white text-sm">
            @error('name') <span class="text-red-400 text-[10px]">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-[10px] text-stone-400 mb-1 uppercase tracking-wide">
                Phone
            </label>
            <input type="tel"
                   name="phone"
                   wire:model.defer="phone"
                   placeholder="Phone number"
                   class="w-full rounded-lg px-3 py-2.5
                          bg-black/60 border border-white/10
                          text-white text-sm">
            @error('phone') <span class="text-red-400 text-[10px]">{{ $message }}</span> @enderror
        </div>
    </div>

    {{-- ===================== EMAIL + GUEST COUNT ===================== --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div>
            <label class="block text-[10px] text-stone-400 mb-1 uppercase tracking-wide">
                Email (optional)
            </label>
            <input type="email"
                   name="email"
                   wire:model.defer="email"
                   placeholder="you@example.com"
                   class="w-full rounded-lg px-3 py-2.5
                          bg-black/60 border border-white/10
                          text-white text-sm">
        </div>

        <div>
            <label class="block text-[10px] text-stone-400 mb-1 uppercase tracking-wide">
                Guests
            </label>
            <input type="number"
                   min="1"
                   name="guest_count"
                   wire:model.defer="guest_count"
                   class="w-full rounded-lg px-3 py-2.5
                          bg-black/60 border border-white/10
                          text-white text-sm">
            @error('guest_count') <span class="text-red-400 text-[10px]">{{ $message }}</span> @enderror
        </div>
    </div>

    {{-- ===================== SPECIAL REQUEST ===================== --}}
    <div>
        <label class="block text-[10px] text-stone-400 mb-1 uppercase tracking-wide">
            Special Requests
        </label>

        <textarea
            name="customer_notes"
            rows="2"
            wire:model.defer="customer_notes"
            placeholder="Celebrations, food preferences, questions…"
            class="w-full rounded-lg px-3 py-2.5
                   bg-black/60 border border-white/10
                   text-white text-sm resize-none
                   focus:border-[#D4AF37] focus:ring-1 focus:ring-[#D4AF37]/30"></textarea>
    </div>

    {{-- ===================== SUBMIT ===================== --}}
    <button type="submit"
            wire:loading.attr="disabled"
            class="w-full bg-[#D4AF37] text-black
                   py-2.5 rounded-lg
                   text-sm font-semibold
                   transition hover:brightness-105">

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

    <p class="text-[11px] text-gray-400 text-center">
        We typically respond within 2 hours
    </p>

</form>
