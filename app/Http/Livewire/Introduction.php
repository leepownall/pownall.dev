<?php

namespace App\Http\Livewire;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;
use OpenAI\Exceptions\ErrorException;
use OpenAI\Exceptions\TransporterException;
use OpenAI\Exceptions\UnserializableResponse;
use OpenAI\Laravel\Facades\OpenAI;

class Introduction extends Component
{
    const MAX_ATTEMPTS = 20;

    use WithRateLimiting;

    public $content = '';

    public $rateLimitHit = false;

    public function mount()
    {
        $this->content = \App\Models\Introduction::query()
            ->latest()
            ->value('content');

        $this->rateLimitHit = RateLimiter::tooManyAttempts($this->getRateLimitKey('generate'), maxAttempts: self::MAX_ATTEMPTS);
    }

    public function render()
    {
        return view('livewire.introduction');
    }

    public function generate(): void
    {
        try {
            $this->rateLimit(maxAttempts: self::MAX_ATTEMPTS, method: 'generate');

            $response = OpenAI::chat()
                ->create([
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        [
                            'role' => 'assistant',
                            'content' => $this->prompt(),
                        ],
                    ],
                ])
                ->toArray();
        } catch (TooManyRequestsException $exception) {
            $this->rateLimitHit = true;

            return;
        } catch (TransporterException|UnserializableResponse|ErrorException $exception) {
            $this->content = 'Something went wrong generating an introduction, sorry about that.';

            return;
        }

        $this->content = Arr::get(
            $response,
            'choices.0.message.content',
            'Something went wrong generating an introduction, sorry about that.'
        );

        \App\Models\Introduction::create([
            'content' => $this->content,
        ]);
    }

    private function prompt(): string
    {
        return 'Expand on this sentence using a friendly tone in a first person narrative. Do not ask for contact. Do not mention gender. Make the response under 400 characters. "PHP Developer from the West Midlands. I specialise in Laravel and focus on writing clean, maintainable, and testable code."';
    }
}
