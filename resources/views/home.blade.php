<x-layouts.app>
    <x-container class="mt-9">
        <div class="max-w-2xl">
            <img class="rounded-full h-16 w-16 mb-6" src="images/me.png" />
            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl">
                Web developer, runner & cyclist.
            </h1>
            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">
                I’m Lee, a PHP Developer from the West Midlands. I specialise in
                Laravel and focus on writing clean, maintainable, and testable code.
            </p>
            <div class="mt-6 flex gap-6 bg-grey-500">
                <x-social-link
                    href="https://twitter.com/leepownall"
                    aria-label="Follow on Twitter"
                >
                    <x-icon.twitter />
                </x-social-link>
                <x-social-link
                    href="https://github.com/leepownall"
                    aria-label="Follow on GitHub"
                >
                    <x-icon.github />
                </x-social-link>
                <x-social-link
                    href="https://www.linkedin.com/in/lee-pownall"
                    aria-label="Follow on LinkedIn"
                >
                    <x-icon.linkedin />
                </x-social-link>
                <x-social-link
                    href="mailto:lee@pownall.uk"
                    aria-label="Email me"
                >
                    <x-icon.mail />
                </x-social-link>
            </div>
        </div>
    </x-container>
</x-layouts.app>
