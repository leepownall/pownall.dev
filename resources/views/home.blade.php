<x-layouts.app>
    <x-slot:meta>
        <meta name="description" content="A PHP Developer from the West Midlands. I specialise in Laravel and focus on writing clean, maintainable, and testable code.">
        <meta name="twitter:card" content="A PHP Developer from the West Midlands. I specialise in Laravel and focus on writing clean, maintainable, and testable code." />
        <meta name="twitter:site" content="@leepownall" />
        <meta name="twitter:creator" content="@leepownall" />
        <meta property="og:url" content="https://pownall.dev" />
        <meta property="og:title" content="Lee Pownall" />
        <meta property="og:description" content="A PHP Developer from the West Midlands. I specialise in Laravel and focus on writing clean, maintainable, and testable code." />
        <meta property="og:image" content="https://pownall.dev/images/lee-pownall.png" />
    </x-slot:meta>
    <div class="flex flex-col space-y-6 sm:space-y-8 mt-6 px-4 pb-4 sm:px-8 mx-auto max-w-prose text-zinc-800 leading-relaxed hyphens-auto">
        <div>
            <x-h1>Lee Pownall</x-h1>
            <p class="mt-4">
                PHP Developer from the West Midlands. I specialise in Laravel and focus on writing clean, maintainable, and testable code. I also like Livewire, Alpine.js, Tailwind CSS, Vue & Interia.
            </p>
        </div>
        <div>
            <x-h2>Stuff I've made</x-h2>
            <x-list>
                <li>
                    <x-link href="https://fridaymix.xyz">fridaymix</x-link> - App to find duplicate songs and display at what point we are in the playlist for works weekly collaborative
                    playlist. Built on Laravel, Livewire, Alpine.js and Tailwind CSS. Source code available on <x-link href="https://github.com/leepownall/fridaymix">GitHub</x-link>.
                </li>
                <li>
                    <x-link href="https://github.com/leepownall/read-time">readtime</x-link> - Small package to display read times of content.
                </li>
            </x-list>
        </div>
        <div>
            <x-h2>Things I've written</x-h2>
            <x-list>
                <li>
                    <x-link href="https://jump24.co.uk/journal/laravel-blade-components" external>Laravel Blade Components</x-link>
                </li>
                <li>
                    <x-link href="post/prefix-laravel-passport-routes">Prefix Laravel Passport Routes</x-link>
                </li>
                <li>
                    <x-link href="post/testing-laravel-rule-objects">Testing Laravel Rule Objects</x-link>
                </li>
            </x-list>
        </div>
        <nav class="flex justify-center sm:justify-start">
            <ul class="flex flex-row flex-wrap space-x-2">
                <li><x-link href="https://twitter.com/leepownall" external>Twitter</x-link></li>
                <li>•</li>
                <li><x-link href="https://twitter.com/leepownall" external>GitHub</x-link></li>
                <li>•</li>
                <li><x-link href="https://www.linkedin.com/in/lee-pownall" external>LinkedIn</x-link></li>
                <li>•</li>
                <li><x-link href="mailto:lee@pownall.uk" external>Email</x-link></li>
            </ul>
        </nav>
    </div>
</x-layouts.app>
