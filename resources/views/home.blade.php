<x-layouts.app>
    <x-container class="mt-6 sm:mt-9">
        <div class="max-w-4xl">
            <div class="text-4xl sm:text-5xl font-extrabold inline-block">
              <h1 class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                Lee Pownall
              </h1>
            </div>
            <div class="mt-6 sm:mt-10">
                <livewire:introduction />
            </div>
            <div class="mt-6 sm:mt-10 flex justify-center sm:justify-start">
                <ul class="flex flex-row flex-wrap space-x-2">
                    <li><a class="text-zinc-600 hover:underline" href="https://twitter.com/leepownall" target="_blank">Twitter</a></li>
                    <li>•</li>
                    <li><a class="text-zinc-600 hover:underline" href="https://github.com/leepownall" target="_blank">GitHub</a></li>
                    <li>•</li>
                    <li><a class="text-zinc-600 hover:underline" href="https://www.linkedin.com/in/lee-pownall" target="_blank">LinkedIn</a></li>
                    <li>•</li>
                    <li><a class="text-zinc-600 hover:underline" href="mailto:lee@pownall.uk">Email</a></li>
                    <li>•</li>
                    <li><a class="text-zinc-600 hover:underline" href="{{ route('previous-introductions') }}">Previous introductions</a></li>
                </ul>
            </div>
        </div>
    </x-container>
</x-layouts.app>
