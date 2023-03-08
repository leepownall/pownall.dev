<div class="flex flex-col space-y-4">
    <p class="text-lg sm:text-xl leading-8 text-zinc-700">
        <span wire:loading>Generating an introduction...</span>
        <span wire:loading.remove>{{ $content }}</span>
    </p>
    <div>
        @if($rateLimitHit)
            <button
                type="button"
                class="w-full sm:w-auto rounded-full bg-sky-400 py-1.5 px-3 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600 disabled:bg-gradient-to-b"
            >
                Rate Limit Hit
            </button>
        @else
            <button
                wire:click="generate"
                wire:loading.remove
                type="button"
                class="w-full sm:w-auto rounded-full bg-sky-400 py-2 px-3.5 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600 disabled:bg-gradient-to-b"
            >
                Regenerate introduction
            </button>
        @endif
    </div>
</div>
