<x-layouts.app>
    <x-slot:meta>
        <meta name="description" content="{{ $post->description }}">
        <meta name="twitter:card" content="{{ $post->description }}" />
        <meta name="twitter:site" content="@leepownall" />
        <meta name="twitter:creator" content="@leepownall" />
        <meta property="og:url" content="https://pownall.dev/posts/{{ $post->slug }}" />
        <meta property="og:title" content="{{ $post->title }}" />
        <meta property="og:description" content="{{ $post->description }}" />
    </x-slot:meta>
    <article class="mt-6 sm:mt-9 px-2 sm:px-8 max-w-6xl">
        <header class="flex flex-col">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                {{ $post->title }}
            </h1>
            <time
                dateTime="{{ $post->date }}"
                class="mt-2 text-zinc-400 dark:text-zinc-500"
            >
                <span>{{ $post->date }}</span>
            </time>
            <a href="/" class="mt-4 prose">← Back</a>
        </header>
        <main class="mt-4">
            <x-markdown theme="github-dark" class="prose max-w-none">
                {!! $post->content !!}}
            </x-markdown>
        </main>
    </article>
</x-layouts.app>
