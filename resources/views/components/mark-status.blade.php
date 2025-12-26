@props(['status'])

@php
    $status = strtolower($status);

    $map = [
        'pending' => [
            'label' => 'Pending',
            'class' => 'bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200',
            'icon' => 'warning',
        ],
        'progress' => [
            'label' => 'Progress',
            'class' => 'bg-slate-100 text-slate-800 dark:bg-slate-900 dark:text-slate-200',
            'icon' => 'loader',
        ],
        'complete' => [
            'label' => 'Complete',
            'class' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
            'icon' => 'check',
        ],
    ];

    $config = $map[$status] ?? [
        'label' => ucfirst($status),
        'class' => 'bg-gray-100 text-gray-800 dark:bg-neutral-800 dark:text-neutral-200',
        'icon' => null,
    ];
@endphp

<div class="px-6 py-2">
    <span class="{{ $config['class'] }} inline-flex items-center gap-1.5 rounded-full px-2 py-0.5 text-xs font-medium">

        @if ($config['icon'] === 'warning')
            <svg class="size-2.5 animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-circle-dot-dashed-icon lucide-circle-dot-dashed">
                <path d="M10.1 2.18a9.93 9.93 0 0 1 3.8 0" />
                <path d="M17.6 3.71a9.95 9.95 0 0 1 2.69 2.7" />
                <path d="M21.82 10.1a9.93 9.93 0 0 1 0 3.8" />
                <path d="M20.29 17.6a9.95 9.95 0 0 1-2.7 2.69" />
                <path d="M13.9 21.82a9.94 9.94 0 0 1-3.8 0" />
                <path d="M6.4 20.29a9.95 9.95 0 0 1-2.69-2.7" />
                <path d="M2.18 13.9a9.93 9.93 0 0 1 0-3.8" />
                <path d="M3.71 6.4a9.95 9.95 0 0 1 2.7-2.69" />
                <circle cx="12" cy="12" r="1" />
            </svg>
        @elseif ($config['icon'] === 'loader')
            <svg class="size-2.5 animate-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-loader-icon lucide-loader">
                <path d="M12 2v4" />
                <path d="m16.2 7.8 2.9-2.9" />
                <path d="M18 12h4" />
                <path d="m16.2 16.2 2.9 2.9" />
                <path d="M12 18v4" />
                <path d="m4.9 19.1 2.9-2.9" />
                <path d="M2 12h4" />
                <path d="m4.9 4.9 2.9 2.9" />
            </svg>
        @elseif ($config['icon'] === 'check')
            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-circle-check-big-icon lucide-circle-check-big">
                <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                <path d="m9 11 3 3L22 4" />
            </svg>
        @endif

        {{ $config['label'] }}
    </span>
</div>
