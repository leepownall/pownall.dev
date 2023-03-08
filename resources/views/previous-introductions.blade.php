<x-layouts.app>
    <x-container class="my-6 sm:my-9">
        <div class="max-w-4xl">
            <div>
                <a
                    href="/"
                    class="w-full sm:w-auto rounded-full bg-sky-400 py-2 px-3.5 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600 disabled:bg-gradient-to-b"
                >
                    Back
                </a>
            </div>
            <div class="mt-6 flex flex-col space-y-8">
                @foreach($introductions as $introduction)
                    <div>
                        <p class="text-lg sm:text-xl leading-8 text-zinc-700">
                            {{ $introduction->content }}
                        </p>
                        <span class="mt-1 sm:mt-2 text-zinc-500 block">Generated {{ $introduction->created_at->diffForHumans() }}.</span>
                    </div>
                @endforeach
            </div>
        </div>
    </x-container>
</x-layouts.app>
