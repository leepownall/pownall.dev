@props([
    'href',
    'external' => false,
])

<span>
    <a href="{{ $href }}" class="text-blue-700 no-underline hover:underline" @if($external) target="_blank" @endif>{{ $slot }}</a>@if($external)@endif
</span>
