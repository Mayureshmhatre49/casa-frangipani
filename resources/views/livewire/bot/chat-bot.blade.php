<div class="fixed bottom-6 right-6 z-50">

    <button
        wire:click="$toggle('open')"
        class="bg-black text-white w-14 h-14 rounded-full shadow-xl flex items-center justify-center text-xl">
        💬
    </button>

    @if($open)
        <div class="mt-3 w-96 bg-white rounded-2xl shadow-2xl overflow-hidden">

            <div class="bg-black text-white px-4 py-3 font-medium">
                Hestia Assistant
            </div>

            {{-- Progress Bar --}}
            <div class="px-4 py-2">
                <div class="w-full bg-gray-200 rounded-full h-1">
                    <div class="bg-black h-1 transition-all duration-500"
                         style="width: {{ $progress }}%"></div>
                </div>
            </div>

            {{-- Messages --}}
            <div
                x-data
                x-on:scroll-chat.window="$nextTick(() => $el.scrollTop = $el.scrollHeight)"
                class="p-4 space-y-3 max-h-[420px] overflow-y-auto text-sm"
            >
                @foreach($messages as $message)
                    <div class="flex {{ $message['role'] === 'user' ? 'justify-end' : 'justify-start' }}">
                        <div class="px-4 py-2 rounded-2xl max-w-[75%]
                            {{ $message['role'] === 'user'
                                ? 'bg-black text-white'
                                : 'bg-gray-100 text-gray-900' }}">
                            {{ $message['text'] }}
                        </div>
                    </div>
                @endforeach

                @if($botTyping)
                    <div class="text-xs text-gray-400 animate-pulse">typing…</div>
                @endif

                @if($errorMessage)
                    <div class="text-xs text-red-600">⚠ {{ $errorMessage }}</div>
                @endif
            </div>

            {{-- Input --}}
            <div class="border-t p-3">
                @if(isset($step['options']))
                    <div class="grid gap-2">
                        @foreach($step['options'] as $option)
                            <button
                                wire:click="selectOption('{{ $option }}')"
                                class="border rounded-xl px-4 py-2 hover:bg-gray-100">
                                {{ $option }}
                            </button>
                        @endforeach
                    </div>
                @else
                    <form wire:submit.prevent="submit" class="flex gap-2">
                        <input
    wire:model.defer="input"
    type="{{ $step['type'] ?? 'text' }}"
    class="flex-1 border rounded-xl px-4 py-2"
    placeholder="
        @if(($step['field'] ?? '') === 'name')
            Enter name
        @elseif(($step['field'] ?? '') === 'phone')
            10-digit mobile number
        @elseif(($step['field'] ?? '') === 'email')
            Email address (optional)
        @else
            Type here…
        @endif
    "
    @disabled($botTyping)
>

                        <button class="bg-black text-white px-4 rounded-xl">➤</button>
                    </form>
                @endif
            </div>
        </div>
    @endif
</div>
