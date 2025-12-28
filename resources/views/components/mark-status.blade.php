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
        'active' => [
            'label' => 'Active',
            'class' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-900 dark:text-emerald-200',
            'icon' => 'check',
        ],
        'inactive' => [
            'label' => 'Inactive',
            'class' => 'bg-stone-100 text-stone-800 dark:bg-stone-900 dark:text-stone-200',
            'icon' => 'inactive',
        ],
        'present' => [
            'label' => 'Present',
            'class' => 'bg-teal-100 text-teal-800 dark:bg-teal-900 dark:text-teal-200',
            'icon' => 'present',
        ],
        'absence' => [
            'label' => 'Absence',
            'class' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200',
            'icon' => 'absence',
        ],
        'leave' => [
            'label' => 'Leave',
            'class' => 'bg-amber-100 text-amber-800 dark:bg-amber-900 dark:text-amber-200',
            'icon' => 'leave',
        ],
    ];

    $config = $map[$status] ?? [
        'label' => ucfirst($status),
        'class' => 'bg-zinc-100 text-zinc-800 dark:bg-neutral-800 dark:text-neutral-200',
        'icon' => null,
    ];
@endphp

<span class="{{ $config['class'] }} inline-flex items-center gap-1.5 rounded-full px-2 py-0.5 text-xs font-medium">

    @if ($config['icon'] === 'warning')
        <svg class="size-3 animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
        <svg class="size-3 animate-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-circle-check-big-icon lucide-circle-check-big">
            <path d="M21.801 10A10 10 0 1 1 17 3.335" />
            <path d="m9 11 3 3L22 4" />
        </svg>
    @elseif ($config['icon'] === 'present')
        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-calendar-check2-icon lucide-calendar-check-2">
            <path d="M8 2v4" />
            <path d="M16 2v4" />
            <path d="M21 14V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" />
            <path d="M3 10h18" />
            <path d="m16 20 2 2 4-4" />
        </svg>
    @elseif ($config['icon'] === 'absence')
        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-calendar-x2-icon lucide-calendar-x-2">
            <path d="M8 2v4" />
            <path d="M16 2v4" />
            <path d="M21 13V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" />
            <path d="M3 10h18" />
            <path d="m17 22 5-5" />
            <path d="m17 17 5 5" />
        </svg>
    @elseif ($config['icon'] === 'leave')
        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-calendar-off-icon lucide-calendar-off">
            <path d="M4.2 4.2A2 2 0 0 0 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 1.82-1.18" />
            <path d="M21 15.5V6a2 2 0 0 0-2-2H9.5" />
            <path d="M16 2v4" />
            <path d="M3 10h7" />
            <path d="M21 10h-5.5" />
            <path d="m2 2 20 20" />
        </svg>
    @elseif ($config['icon'] === 'inactive')
        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-circle-alert-icon lucide-circle-alert">
            <circle cx="12" cy="12" r="10" />
            <line x1="12" x2="12" y1="8" y2="12" />
            <line x1="12" x2="12.01" y1="16" y2="16" />
        </svg>
    @else
        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-calendar-x-icon lucide-calendar-x">
            <path d="M8 2v4" />
            <path d="M16 2v4" />
            <rect width="18" height="18" x="3" y="4" rx="2" />
            <path d="M3 10h18" />
            <path d="m14 14-4 4" />
            <path d="m10 14 4 4" />
        </svg>
    @endif

    {{ $config['label'] }}
</span>
