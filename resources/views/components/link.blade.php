@props([
    'href',
    'external' => false,
])

<span>
    <a href="{{ $href }}" class="text-blue-700 no-underline hover:underline"    @if($external) target="_blank" @endif>{{ $slot }}</a>@if($external)<x-icon.external class="w-4 h-4 inline text-blue-700 pl-0.5" />@endif
</span>
