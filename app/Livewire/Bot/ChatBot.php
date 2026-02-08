<?php

namespace App\Livewire\Bot;

use Livewire\Component;
use App\Models\BotEnquiry;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ChatBot extends Component
{
    public array $flow;
    public string $currentStep;
    public array $messages = [];
    public string $input = '';

    public bool $open = true;
    public bool $botTyping = false;
    public ?string $errorMessage = null;

    public array $answers = [];

    public function mount(): void
    {
        $this->flow = config('bot.flow');
        $this->currentStep = array_key_first($this->flow);

        $this->pushBotMessage($this->flow[$this->currentStep]['message']);
    }

    /* ---------------- Messages ---------------- */

    protected function pushBotMessage(string $text): void
    {
        $this->messages[] = [
            'role' => 'bot',
            'text' => str_replace(':name', $this->answers['name'] ?? '', $text),
        ];

        $this->dispatch('scroll-chat');
    }

    protected function pushUserMessage(string $text): void
    {
        $this->messages[] = [
            'role' => 'user',
            'text' => $text,
        ];

        $this->dispatch('scroll-chat');
    }

    /* ---------------- Core Flow ---------------- */

    public function submit(): void
    {
        $step = $this->flow[$this->currentStep];
        $this->errorMessage = null;

        // Allow skipping nullable fields (email)
        if (
            empty($this->input)
            && isset($step['rules'], $step['field'])
            && str_contains($step['rules'], 'nullable')
        ) {
            $this->answers[$step['field']] = null;
            $this->goNext($step);
            return;
        }

        // Validate only if rules exist
        if (isset($step['rules'])) {
            try {
                $this->validate([
                    'input' => $step['rules'],
                ], [
                    'input.required' => 'This field is required.',
                    'input.email' => 'Please enter a valid email.',
                    'input.regex' => 'Please enter a valid phone number.',
                    'input.after' => 'Check-out must be after check-in.',
                ]);
            } catch (ValidationException $e) {
                $this->errorMessage = $e->validator->errors()->first();
                return;
            }
        }

        $this->pushUserMessage($this->input);

        if (isset($step['field'])) {
            $this->answers[$step['field']] = $this->input;
        }

        $this->input = '';
        $this->goNext($step);
    }

    public function selectOption(string $option): void
    {
        $step = $this->flow[$this->currentStep];

        $this->pushUserMessage($option);
        $this->answers[$step['field']] = $option;

        $this->goNext($step);
    }

    protected function goNext(array $step): void
    {
        $this->pushBotMessage($this->acknowledgement());

        if (($step['next'] ?? null) === null) {
            $this->finalize();
            return;
        }

        $this->currentStep = $step['next'];
        $this->simulateBotReply();
    }

    protected function simulateBotReply(): void
    {
        $this->botTyping = true;
        $this->dispatch('botReply');
    }

    public function botReply(): void
    {
        $this->botTyping = false;
        $this->pushBotMessage($this->flow[$this->currentStep]['message']);
    }

    /* ---------------- Final Submit ---------------- */

    protected function finalize(): void
    {
        $enquiry = BotEnquiry::create([
            'name'         => $this->answers['name'] ?? null,
            'phone'        => $this->answers['phone'] ?? null,
            'email'        => $this->answers['email'] ?? null,
            'check_in'     => $this->answers['check_in_date'] ?? null,
            'check_out'    => $this->answers['check_out_date'] ?? null,
            'guests'       => $this->answers['guests'] ?? null,
            'budget_range' => $this->answers['budget'] ?? null,
            'occasion'     => $this->answers['occasion'] ?? null,
            'bot_payload'  => $this->messages,
        ]);

        Mail::to('mayureshmhatre49@gmail.com')
            ->send(new \App\Mail\EnquiryReceived($enquiry));

        $this->pushBotMessage(
            '✅ Done! Our team will contact you shortly on WhatsApp.'
        );
    }

    /* ---------------- UX Helpers ---------------- */

    public function getProgressProperty(): int
    {
        $steps = collect($this->flow)
            ->filter(fn ($step) => isset($step['field']))
            ->keys()
            ->values();

        $currentIndex = $steps->search($this->currentStep);

        return $currentIndex === false
            ? 100
            : intval((($currentIndex + 1) / $steps->count()) * 100);
    }

    protected function acknowledgement(): string
    {
        return collect([
            'Got it 👍',
            'Perfect.',
            'Nice choice.',
            'Sounds good.',
        ])->random();
    }

    protected $listeners = ['botReply'];

    public function render()
    {
        return view('livewire.bot.chat-bot', [
            'step' => $this->flow[$this->currentStep],
            'progress' => $this->progress,
        ]);
    }
}
