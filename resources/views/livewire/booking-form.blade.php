<form wire:submit.prevent="submit" class="space-y-4 bg-black/40 p-6 rounded-2xl shadow-lg">

    @if (session()->has('success'))
        <div x-data="{}" x-init="setTimeout(()=> $el.remove(),4000)" class="p-3 rounded-lg bg-green-600 text-white text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div>
        <label class="block text-xs text-stone-400 mb-1">Dates</label>
        <input id="formDateRange" class="date-range-picker rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" placeholder="Select check-in — check-out" readonly />
        <input type="hidden" id="check_in_hidden" wire:model.defer="check_in">
        <input type="hidden" id="check_out_hidden" wire:model.defer="check_out">
        <div class="flex gap-3 mt-2">
            @error('check_in') <div class="text-red-400 text-xs">{{ $message }}</div> @enderror
            @error('check_out') <div class="text-red-400 text-xs">{{ $message }}</div> @enderror
        </div>
    </div>

    <div>
        <label class="block text-xs text-stone-400 mb-1">Guests</label>
        <input type="number" wire:model.defer="guest_count" min="1" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" />
        @error('guest_count') <div class="text-red-400 text-xs mt-1">{{ $message }}</div> @enderror
    </div>

    <div class="grid grid-cols-1 gap-3">
        <div>
            <label class="block text-xs text-stone-400 mb-1">Full name</label>
            <input type="text" wire:model.defer="name" placeholder="Your Name" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white">
            @error('name') <div class="text-red-400 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block text-xs text-stone-400 mb-1">Phone</label>
            <input type="tel" wire:model.defer="phone" placeholder="Phone Number" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white">
            @error('phone') <div class="text-red-400 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block text-xs text-stone-400 mb-1">Email (optional)</label>
            <input type="email" wire:model.defer="email" placeholder="you@example.com" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white">
            @error('email') <div class="text-red-400 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block text-xs text-stone-400 mb-1">Special requests</label>
            <textarea wire:model.defer="customer_notes" rows="3" class="rounded-lg p-3 w-full bg-black/60 border border-white/10 text-white" placeholder="Any special requirements..."></textarea>
        </div>
    </div>

    <div class="mt-2">
        <button type="submit" wire:loading.attr="disabled" class="w-full bg-[#D4AF37] text-black py-3 rounded-xl font-semibold relative overflow-hidden">
            <span wire:loading.remove>Book Now</span>
            <span wire:loading class="flex items-center justify-center gap-2">
                <svg class="animate-spin h-4 w-4" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg>
                Processing...
            </span>
        </button>
    </div>

    <p class="text-xs text-gray-400 text-center mt-2">No payment required • Instant response</p>

</form>
