<x-dashboard-layout>
    @push('head_css')
        <style>
            .toast-progress {
                position: absolute;
                bottom: 0;
                left: 0;
                height: 3px;
                width: 100%;
                background: linear-gradient(to right, #3b82f6, #60a5fa);
                animation: toast-progress linear forwards;
            }

            .toastify.toast-with-progress .toast-progress {
                animation-duration: 5.25s;
            }

            @keyframes toast-progress {
                from {
                    transform: scaleX(1);
                    transform-origin: left;
                }

                to {
                    transform: scaleX(0);
                    transform-origin: left;
                }
            }
        </style>
    @endpush

    <x-slot:title>
        Dashboard | Tasks
    </x-slot:title>

    <!-- Table Section -->
    <div>
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="inline-block min-w-full p-1.5 align-middle">
                    <div
                        class="shadow-2xs overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-neutral-700 dark:bg-neutral-900">
                        <!-- Header -->
                        <div class="grid gap-6 border-b border-gray-200 px-6 py-4 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Tasks
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Handle employee task.
                                </p>
                            </div>

                            <div class="grid gap-3 md:flex md:items-center md:justify-between">
                                <div class="sm:col-span-1">
                                    <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <input type="text" id="hs-as-table-product-review-search"
                                            name="hs-as-table-product-review-search"
                                            class="block w-full rounded-lg border-gray-200 px-3 py-2 ps-11 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            placeholder="Search">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-4">
                                            <svg class="size-4 text-gray-400 dark:text-neutral-500"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <div class="hs-dropdown relative inline-block [--placement:bottom-right]"
                                            data-hs-dropdown-auto-close="inside">
                                            <button id="hs-as-table-table-filter-dropdown" type="button"
                                                class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                <svg class="size-3.5 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M3 6h18" />
                                                    <path d="M7 12h10" />
                                                    <path d="M10 18h4" />
                                                </svg>
                                                Filter
                                                <span
                                                    class="border-s border-gray-200 ps-2 text-xs font-semibold text-blue-600 dark:border-neutral-700 dark:text-blue-500">
                                                    1
                                                </span>
                                            </button>
                                            <div class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 mt-2 hidden min-w-48 divide-y divide-gray-200 rounded-lg bg-white opacity-0 shadow-md transition-[opacity,margin] dark:divide-neutral-700 dark:border dark:border-neutral-700 dark:bg-neutral-800"
                                                role="menu" aria-orientation="vertical"
                                                aria-labelledby="hs-as-table-table-filter-dropdown">
                                                <div class="divide-y divide-gray-200 dark:divide-neutral-700">
                                                    <label for="hs-as-filters-dropdown-all" class="flex px-3 py-2.5">
                                                        <input type="checkbox"
                                                            class="mt-0.5 shrink-0 rounded-sm border-gray-300 text-blue-600 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-600 dark:bg-neutral-900 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800"
                                                            id="hs-as-filters-dropdown-all" checked>
                                                        <span
                                                            class="ms-3 text-sm text-gray-800 dark:text-neutral-200">All</span>
                                                    </label>
                                                    <label for="hs-as-filters-dropdown-paid" class="flex px-3 py-2.5">
                                                        <input type="checkbox"
                                                            class="mt-0.5 shrink-0 rounded-sm border-gray-300 text-blue-600 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-600 dark:bg-neutral-900 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800"
                                                            id="hs-as-filters-dropdown-paid">
                                                        <span
                                                            class="ms-3 text-sm text-gray-800 dark:text-neutral-200">Paid</span>
                                                    </label>
                                                    <label for="hs-as-filters-dropdown-pending"
                                                        class="flex px-3 py-2.5">
                                                        <input type="checkbox"
                                                            class="mt-0.5 shrink-0 rounded-sm border-gray-300 text-blue-600 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-600 dark:bg-neutral-900 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800"
                                                            id="hs-as-filters-dropdown-pending">
                                                        <span
                                                            class="ms-3 text-sm text-gray-800 dark:text-neutral-200">Pending</span>
                                                    </label>
                                                    <label for="hs-as-filters-dropdown-declined"
                                                        class="flex px-3 py-2.5">
                                                        <input type="checkbox"
                                                            class="mt-0.5 shrink-0 rounded-sm border-gray-300 text-blue-600 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-600 dark:bg-neutral-900 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800"
                                                            id="hs-as-filters-dropdown-declined">
                                                        <span
                                                            class="ms-3 text-sm text-gray-800 dark:text-neutral-200">Declined</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50"
                                            href="{{ route('tasks.create') }}">
                                            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                                <path d="M12 5v14" />
                                            </svg>
                                            New task
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        @if ($tasks->isNotEmpty())
                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead
                                    class="divide-y divide-gray-200 bg-gray-50 dark:divide-neutral-700 dark:bg-neutral-800">
                                    <tr>
                                        <th scope="col"
                                            class="border-s border-gray-200 px-6 py-3 text-start dark:border-neutral-700">
                                            <span
                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                Title
                                            </span>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <span
                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                Employee
                                            </span>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <span
                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                Due Date
                                            </span>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <span
                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                Status
                                            </span>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-end"></th>

                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td class="h-px w-auto whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $task->title }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="h-px w-auto whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $task->employee->fullname }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="h-px w-auto whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $task->due_date->format('l, d M Y') }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="h-px w-auto whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <x-mark-status :status="$task->status" />
                                                </div>
                                            </td>

                                            <td class="size-px whitespace-nowrap">
                                                <div class="flex justify-end px-6 py-1.5">
                                                    <div
                                                        class="shadow-2xs group inline-flex items-center divide-x divide-gray-300 rounded-lg border border-gray-300 bg-white transition-all dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-700">
                                                        <div class="hs-tooltip inline-block">
                                                            <a class="hs-tooltip-toggle shadow-2xs focus:outline-hidden inline-flex items-center justify-center gap-x-2 rounded-s-md bg-white px-2 py-1.5 text-sm font-semibold text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                                href="{{ route('tasks.show', $task->id) }}">
                                                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="lucide lucide-view-icon lucide-view">
                                                                    <path
                                                                        d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                                                                    <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                                                                    <circle cx="12" cy="12" r="1" />
                                                                    <path
                                                                        d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
                                                                </svg>
                                                                <span
                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible shadow-2xs invisible absolute z-10 inline-block rounded-md bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 transition-opacity dark:bg-neutral-700"
                                                                    role="tooltip">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                                                            <button id="hs-table-dropdown-1" type="button"
                                                                class="hs-dropdown-toggle shadow-2xs focus:outline-hidden inline-flex items-center justify-center gap-x-2 rounded-e-md bg-white px-2 py-1.5 text-sm font-semibold text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 cursor-pointer"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown">
                                                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 mt-2 hidden min-w-40 divide-y divide-gray-200 rounded-lg bg-white p-2 opacity-0 shadow-2xl transition-[opacity,margin] dark:divide-neutral-700 dark:border dark:border-neutral-700 dark:bg-neutral-800"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="hs-table-dropdown-1">
                                                                <div class="py-2 first:pt-0 last:pb-0">
                                                                    <span
                                                                        class="block px-3 py-2 text-xs font-medium uppercase text-gray-400 dark:text-neutral-600">
                                                                        Options
                                                                    </span>
                                                                    @if (session('role') === 'Manager')
                                                                        @if ($task->status === 'complete')
                                                                            <form
                                                                                action="{{ route('tasks.pending', $task->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <button type="submit"
                                                                                    class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                                    <svg class="size-4"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="lucide lucide-clipboard-clock-icon lucide-clipboard-clock">
                                                                                        <path d="M16 14v2.2l1.6 1" />
                                                                                        <path
                                                                                            d="M16 4h2a2 2 0 0 1 2 2v.832" />
                                                                                        <path
                                                                                            d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2" />
                                                                                        <circle cx="16"
                                                                                            cy="16" r="6" />
                                                                                        <rect x="8" y="2"
                                                                                            width="8"
                                                                                            height="4"
                                                                                            rx="1" />
                                                                                    </svg>
                                                                                    Mark as pending
                                                                                </button>
                                                                            </form>
                                                                            <form
                                                                                action="{{ route('tasks.progress', $task->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <button type="submit"
                                                                                    class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                                    <svg class="size-4"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="lucide lucide-loader-circle-icon lucide-loader-circle">
                                                                                        <path
                                                                                            d="M21 12a9 9 0 1 1-6.219-8.56" />
                                                                                    </svg>
                                                                                    Mark as progress
                                                                                </button>
                                                                            </form>
                                                                        @elseif ($task->status === 'pending')
                                                                            <form
                                                                                action="{{ route('tasks.progress', $task->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <button type="submit"
                                                                                    class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                                    <svg class="size-4"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="lucide lucide-loader-circle-icon lucide-loader-circle">
                                                                                        <path
                                                                                            d="M21 12a9 9 0 1 1-6.219-8.56" />
                                                                                    </svg>
                                                                                    Mark as progress
                                                                                </button>
                                                                            </form>
                                                                            <form
                                                                                action="{{ route('tasks.complete', $task->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <button type="submit"
                                                                                    class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                                    <svg class="size-4"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="lucide lucide-check-check-icon lucide-check-check">
                                                                                        <path d="M18 6 7 17l-5-5" />
                                                                                        <path
                                                                                            d="m22 10-7.5 7.5L13 16" />
                                                                                    </svg>
                                                                                    Mark as complete
                                                                                </button>
                                                                            </form>
                                                                        @else
                                                                            <form
                                                                                action="{{ route('tasks.pending', $task->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <button type="submit"
                                                                                    class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                                    <svg class="size-4"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="lucide lucide-clipboard-clock-icon lucide-clipboard-clock">
                                                                                        <path d="M16 14v2.2l1.6 1" />
                                                                                        <path
                                                                                            d="M16 4h2a2 2 0 0 1 2 2v.832" />
                                                                                        <path
                                                                                            d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2" />
                                                                                        <circle cx="16"
                                                                                            cy="16" r="6" />
                                                                                        <rect x="8" y="2"
                                                                                            width="8"
                                                                                            height="4"
                                                                                            rx="1" />
                                                                                    </svg>
                                                                                    Mark as pending
                                                                                </button>
                                                                            </form>
                                                                            <form
                                                                                action="{{ route('tasks.complete', $task->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <button type="submit"
                                                                                    class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                                    <svg class="size-4"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="lucide lucide-check-check-icon lucide-check-check">
                                                                                        <path d="M18 6 7 17l-5-5" />
                                                                                        <path
                                                                                            d="m22 10-7.5 7.5L13 16" />
                                                                                    </svg>
                                                                                    Mark as complete
                                                                                </button>
                                                                            </form>
                                                                        @endif
                                                                    @endif
                                                                    <a class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                                        href="{{ route('tasks.edit', $task->id) }}">
                                                                        <svg class="size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-file-pen-line-icon lucide-file-pen-line">
                                                                            <path
                                                                                d="m18.226 5.226-2.52-2.52A2.4 2.4 0 0 0 14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.351" />
                                                                            <path
                                                                                d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                                                            <path d="M8 18h1" />
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                    <form class="w-full"
                                                                        action="{{ route('tasks.destroy', $task->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="focus:outline-hidden flex w-full cursor-pointer items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                            <svg class="size-4"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="lucide lucide-trash-icon lucide-trash">
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
                                                                                <path d="M3 6h18" />
                                                                                <path
                                                                                    d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                                            </svg>
                                                                            Delete
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table -->
                        @else
                            <div
                                class="min-h-100 mx-auto flex w-full max-w-sm flex-col items-center justify-center px-6 py-4">
                                <div
                                    class="flex size-11 items-center justify-center rounded-lg bg-gray-100 dark:bg-neutral-800">
                                    <svg class="size-6 shrink-0 text-gray-600 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-book-x-icon lucide-book-x">
                                        <path d="m14.5 7-5 5" />
                                        <path
                                            d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                                        <path d="m9.5 7 5 5" />
                                    </svg>
                                </div>

                                <h2 class="mt-5 font-semibold text-gray-800 dark:text-white">
                                    No tasks available
                                </h2>
                                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                                    Show information the employee task.
                                </p>

                                <div class="mt-5 flex flex-col gap-2 sm:flex-row">
                                    <a href="{{ route('tasks.create') }}"
                                        class="focus:outline-hidden inline-flex items-center justify-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Create a new task
                                    </a>
                                </div>
                            </div>
                        @endif

                        <!-- Footer -->
                        <div
                            class="grid gap-3 border-t border-gray-200 px-6 py-4 md:flex md:items-center md:justify-between dark:border-neutral-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    <span class="font-semibold text-gray-800 dark:text-neutral-200">9</span> results
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button"
                                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                        Prev
                                    </button>

                                    <button type="button"
                                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                        Next
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->

    @if (session('success'))
        @push('foot_js')
            <script>
                window.__toastSuccessMessage = @json(session('success'));
            </script>
        @endpush
    @endif
    @if (session('restoreable_task_id'))
        @push('foot_js')
            <script>
                window.__restorableTaskId = @json(session('restoreable_task_id'));
            </script>
        @endpush
    @endif
    @push('foot_js')
        <script>
            function tostifyCustomClose(el) {
                el.closest('.toastify').querySelector('.toast-close').click();
            }

            window.addEventListener('load', () => {
                if (!window.__toastSuccessMessage) return;

                const toastMarkup1 = `
                    <div class="relative max-w-xs rounded-xl border border-gray-200 bg-white shadow-lg dark:border-neutral-700 dark:bg-neutral-800 overflow-hidden"
                        role="alert" tabindex="-1" aria-labelledby="hs-toast-restore-label">
                        <div class="flex p-4">
                            <div class="shrink-0">
                                <button onclick="tostifyCustomClose(this)" type="button"
                                    class="focus:outline-hidden absolute end-3 top-3 inline-flex size-5 shrink-0 items-center justify-center rounded-lg text-gray-800 opacity-50 hover:opacity-100 focus:opacity-100 dark:text-white"
                                    aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="ms-2 me-5">
                                <h3 id="hs-toast-restore-label" class="text-sm font-medium text-gray-800 dark:text-white">
                                    Successfully deleted task data
                                </h3>
                                <div class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                    You can restore the data by click undo below.
                                </div>
                                <form action="/dashboard/tasks/${window.__restorableTaskId}/restore" method="post" class="mt-3">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PATCH">
                                    <button type="submit"
                                        class="focus:outline-hidden text-sm font-medium text-blue-600 decoration-2 hover:underline focus:underline dark:text-blue-500 cursor-pointer">
                                        Undo
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="toast-progress"></div>
                    </div>
                `;

                const toastMarkup2 = `
                    <div class="flex items-center gap-4 p-4">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p class="text-sm text-gray-700 dark:text-neutral-400">${window.__toastSuccessMessage}</p>
                        <div class="ms-auto">
                            <button onclick="tostifyCustomClose(this)" type="button" class="inline-flex shrink-0 justify-center items-center size-5 rounded-lg text-gray-800 opacity-50 hover:opacity-100 focus:outline-hidden focus:opacity-100 dark:text-white" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                            </button>
                        </div>
                    </div>
                `;

                Toastify({
                    text: window.__restorableTaskId ? toastMarkup1 : toastMarkup2,
                    className: `
                    hs-toastify-on:opacity-100 opacity-0 fixed -top-10 end-10 z-90 transition-all duration-300 w-72 bg-white text-sm text-gray-700 border border-gray-200 rounded-xl shadow-lg [&>.toast-close]:hidden dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 ${window.__restorableTaskId ? 'toast-with-progress' : ''}
                    `,
                    duration: window.__restorableTaskId ? 5000 : 3000,
                    close: true,
                    escapeMarkup: false
                }).showToast();
            });
        </script>
    @endpush
</x-dashboard-layout>
