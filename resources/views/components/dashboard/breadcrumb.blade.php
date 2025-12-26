<div
    class="sticky inset-x-0 top-0 z-20 border-y border-gray-200 bg-white px-4 sm:px-6 lg:hidden lg:px-8 dark:border-neutral-700 dark:bg-neutral-800">
    <div class="flex items-center py-2">
        <!-- Navigation Toggle -->
        <button type="button"
            class="focus:outline-hidden flex size-8 items-center justify-center gap-x-2 rounded-lg border border-gray-200 text-gray-800 hover:text-gray-500 focus:text-gray-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
            aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <rect width="18" height="18" x="3" y="3" rx="2" />
                <path d="M15 3v18" />
                <path d="m8 9 3 3-3 3" />
            </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="ms-3 flex items-center whitespace-nowrap">
            @foreach ($breadcrumbs as $index => $crumb)
                <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                    @isset($crumb['route'])
                        <a href="{{ route($crumb['route']) }}" class="hover:underline">
                            {{ $crumb['label'] }}
                        </a>
                    @else
                        <span class="font-semibold" aria-current="page">
                            {{ $crumb['label'] }}
                        </span>
                    @endisset

                    @if (!$loop->last)
                        <svg class="mx-3 size-2.5 shrink-0 text-gray-400 dark:text-neutral-500" viewBox="0 0 16 16"
                            fill="none">
                            <path d="M5 1L11 8L5 15" stroke="currentColor" stroke-width="2" />
                        </svg>
                    @endif
                </li>
            @endforeach
        </ol>
        <!-- End Breadcrumb -->
    </div>
</div>
