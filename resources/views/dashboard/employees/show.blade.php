<x-dashboard-layout>
    <x-slot name="title">
        Dashboard | Employee - Show {{ $employee->fullname }}
    </x-slot>

    <!-- Featured News Blog -->
    <div class="flex flex-col bg-white px-4 pb-4 dark:bg-neutral-800">
        <!-- Header -->
        <div
            class="flex flex-wrap items-center justify-between gap-2 border-b border-dashed border-gray-200 pb-2 dark:border-neutral-700">
            <h2 class="font-medium text-gray-800 dark:text-neutral-200">
                Employee profile
            </h2>

            <a href="{{ route('employees.index') }}"
                class="flex items-center justify-center gap-x-1.5 rounded-lg border border-gray-200 px-2.5 py-1.5 text-[13px] text-gray-800 hover:border-indigo-100 hover:bg-indigo-50 hover:text-indigo-700 focus:border-indigo-100 focus:bg-indigo-50 focus:text-indigo-700 focus:outline-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:border-indigo-500/20 dark:hover:bg-indigo-500/20 dark:hover:text-indigo-400 dark:focus:border-indigo-500/20 dark:focus:bg-indigo-500/20 dark:focus:text-indigo-400">
                <svg class="size-3.5 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left">
                    <path d="m12 19-7-7 7-7" />
                    <path d="M19 12H5" />
                </svg>
                Back to list
            </a>
        </div>
        <!-- End Header -->

        <!-- Featured News Blog -->
        <div
            class="flex flex-col border-b border-gray-200 bg-white pb-4 last:border-b-0 last:pb-0 dark:border-neutral-700 dark:bg-neutral-800">
            <div class="flex flex-col gap-5 pt-4 md:flex-row">
                <div
                    class="aspect-4/2 md:aspect-4/3 relative w-full rounded-lg bg-gray-100 md:max-w-80 dark:bg-neutral-700">
                    <img class="-translate-1/2 absolute left-1/2 top-1/2 size-full rounded-lg object-cover object-center"
                        src="https://placehold.net/avatar-3.svg" alt="Post Image">
                </div>

                <div class="grow">
                    <div class="flex h-full flex-col">
                        <div class="flex flex-col gap-y-4 xl:flex-row xl:items-center xl:justify-between">
                            <div class="order-2 xl:order-1">
                                <p class="text-sm text-gray-500 dark:text-neutral-500">
                                    Employee name:
                                </p>
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    {{ $employee->fullname }}
                                </h3>
                            </div>
                            @session ('success')
                                <div id="dismiss-alert"
                                    class="hs-removing:translate-x-5 hs-removing:opacity-0 bg-white text-sm text-gray-600 rounded-lg p-4 border border-gray-200 order-1"
                                    role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
                                    <div class="flex">
                                        <div class="shrink-0">
                                            <svg class="mt-0.5 size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                                                </path>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <div class="ms-2">
                                            <h3 id="hs-dismiss-button-label" class="text-sm font-medium">
                                                {{ session('success') }}
                                            </h3>
                                        </div>
                                        <div class="ms-auto ps-3">
                                            <div class="-mx-1.5 -my-1.5">
                                                <button type="button"
                                                    class="focus:outline-hidden inline-flex rounded-lg bg-gray-50 p-1.5 text-gray-500 hover:bg-gray-100 focus:bg-gray-100 dark:bg-transparent dark:text-gray-600 dark:hover:bg-gray-800/50 dark:focus:bg-gray-800/50"
                                                    data-hs-remove-element="#dismiss-alert">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M18 6 6 18"></path>
                                                        <path d="m6 6 12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endsession
                        </div>

                        <div class="my-4 grid grid-cols-2 gap-x-2 gap-y-4 xl:grid-cols-3">
                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Position:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-building2-icon lucide-building-2">
                                        <path d="M10 12h4" />
                                        <path d="M10 8h4" />
                                        <path d="M14 21v-3a2 2 0 0 0-4 0v3" />
                                        <path
                                            d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2" />
                                        <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16" />
                                    </svg>

                                    <div class="flex gap-2">
                                        <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            {{ $employee->department->name }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Birth date:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M8 2v4" />
                                        <path d="M16 2v4" />
                                        <path d="M21 17V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11Z" />
                                        <path d="M3 10h18" />
                                        <path d="M15 22v-4a2 2 0 0 1 2-2h4" />
                                    </svg>

                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $employee->birth_date->format('F d, Y') }}
                                    </span>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Salary:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-wallet-icon lucide-wallet">
                                        <path
                                            d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1" />
                                        <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4" />
                                    </svg>

                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $employee->formatted_salary }}
                                    </span>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Role:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-user-lock-icon lucide-user-lock">
                                        <circle cx="10" cy="7" r="4" />
                                        <path d="M10.3 15H7a4 4 0 0 0-4 4v2" />
                                        <path d="M15 15.5V14a2 2 0 0 1 4 0v1.5" />
                                        <rect width="8" height="5" x="13" y="16" rx=".899" />
                                    </svg>
                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $employee->role->title }}
                                    </span>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Hire date:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar-arrow-down-icon lucide-calendar-arrow-down">
                                        <path d="m14 18 4 4 4-4" />
                                        <path d="M16 2v4" />
                                        <path d="M18 14v8" />
                                        <path d="M21 11.354V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7.343" />
                                        <path d="M3 10h18" />
                                        <path d="M8 2v4" />
                                    </svg>

                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $employee->hire_date->format('F d, Y') }}
                                    </span>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Status:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <div class="flex items-center gap-2">
                                        <x-mark-status :status="$employee->status" />
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Address:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <div class="flex items-center gap-2">
                                        <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-map-pin-house-icon lucide-map-pin-house">
                                            <path
                                                d="M15 22a1 1 0 0 1-1-1v-4a1 1 0 0 1 .445-.832l3-2a1 1 0 0 1 1.11 0l3 2A1 1 0 0 1 22 17v4a1 1 0 0 1-1 1z" />
                                            <path
                                                d="M18 10a8 8 0 0 0-16 0c0 4.993 5.539 10.193 7.399 11.799a1 1 0 0 0 .601.2" />
                                            <path d="M18 22v-3" />
                                            <circle cx="10" cy="10" r="3" />
                                        </svg>
                                        <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            {{ $employee->address }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Phone number:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <div class="flex items-center gap-2">
                                        <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-book-user-icon lucide-book-user">
                                            <path d="M15 13a3 3 0 1 0-6 0" />
                                            <path
                                                d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                                            <circle cx="12" cy="8" r="2" />
                                        </svg>
                                        <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            {{ $employee->phone_number }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Email:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <div class="flex items-center gap-2">
                                        <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-mail-icon lucide-mail">
                                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                            <rect x="2" y="4" width="20" height="16" rx="2" />
                                        </svg>
                                        <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            {{ $employee->email }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                        </div>

                        <!-- Footer -->
                        <div class="mt-4 border-t border-gray-200 pt-4 xl:mt-auto dark:border-neutral-700">
                            <div class="flex flex-wrap items-center justify-between gap-1.5">
                                <div>
                                    <a href="{{ route('employees.edit', $employee->id) }}"
                                        class="focus:outline-hidden inline-flex items-center gap-x-0.5 text-[13px] text-indigo-700 underline underline-offset-2 hover:decoration-2 focus:decoration-2 disabled:pointer-events-none disabled:opacity-50 dark:text-indigo-400">
                                        Edit employee
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </a>
                                </div>
                                <!-- End Col -->

                                <a class="flex items-center justify-center gap-x-1.5 rounded-lg border border-transparent px-2.5 py-1.5 text-[13px] text-gray-500 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 focus:outline-none dark:text-neutral-200 dark:hover:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:border-indigo-500/20 dark:focus:bg-neutral-700 dark:focus:text-neutral-200"
                                    href="#">
                                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 16v5" />
                                        <path d="M16 14v7" />
                                        <path d="M20 10v11" />
                                        <path
                                            d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15" />
                                        <path d="M4 18v3" />
                                        <path d="M8 14v7" />
                                    </svg>
                                    Charts
                                </a>
                                <!-- End Col -->
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Featured News Blog -->
    </div>
    <!-- End Featured News Blog -->
</x-dashboard-layout>
