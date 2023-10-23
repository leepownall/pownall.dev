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
    <article class="mt-6 sm:mt-9 px-4 sm:px-8 pb-4 max-w-5xl text-black">
        <header class="flex flex-col border-b border-gray-150 pb-4">
            <h1 class="text-3xl font-bold tracking-tight sm:text-5xl">
                {{ $post->title }}
            </h1>
            <div class="flex space-x-2 items-center mt-4 text-lg">
                <a href="/" class="text-blue-700 hover:underline">← Back</a>
                <span>•</span>
                <time dateTime="{{ $post->date }}">
                    <span>{{ $post->date->format('l jS F Y') }}</span>
                </time>
            </div>
        </header>
        <main class="mt-4">
            <x-markdown theme="slack-dark" class="prose max-w-none text-lg text-black cms-content">
                {!! $post->content !!}}
            </x-markdown>
        </main>
    </article>
</x-layouts.app>
