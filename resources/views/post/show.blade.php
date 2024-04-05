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
    <div class="flex flex-col border-b border-gray-150 pb-4">
        <x-h2>
            {{ $post->title }}
        </x-h2>
        <ul class="flex space-x-2 items-center mt-2">
            <li>
                <time dateTime="{{ $post->date }}">
                    <span>{{ $post->date->format('l jS F Y') }}</span>
                </time>
            </li>
            <li>•</li>
            <li>{{ $readTime }} read</li>
        </ul>
    </div>
    <article class="mt-4 prose prose-pre:bg-white prose-pre:text-black max-w-none hyphens-auto">
        {!! $content !!}
    </article>
</x-layouts.app>
