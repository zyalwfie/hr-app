@props(['currentPage'])

@php
    $baseClass =
        'focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700';
    $current = $currentPage ? 'page' : false;
@endphp

<li>
    <a {{ $attributes->class([$baseClass, 'bg-gray-100' => $currentPage])->merge(['href' => $href]) }} aria-current="{{ $current }}">
        {{ $slot }}
    </a>
</li>
