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
    <div class="mt-6 px-4 sm:px-8 pb-4 mx-auto max-w-prose">
        <header class="flex flex-col border-b border-gray-150 pb-4">
            <div class="flex space-x-2 items-center mt-4">
                <x-link href="/">← Home</x-link>
            </div>
            <x-h2 class="mt-4">
                {{ $post->title }}
            </x-h2>
            <ul class="flex space-x-2 items-center mt-4">
                <li>
                    <time dateTime="{{ $post->date }}">
                        <span>{{ $post->date->format('l jS F Y') }}</span>
                    </time>
                </li>
                <li>•</li>
                <li>{{ $readTime }}</li>
            </ul>
        </header>
        <article class="mt-4 prose prose-pre:bg-white prose-pre:text-black max-w-none hyphens-auto">
            {!! $content !!}
        </article>
    </div>
</x-layouts.app>
