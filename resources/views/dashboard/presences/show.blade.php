<x-dashboard-layout>
    <x-slot name="title">
        Dashboard | Presence - Show {{ $presence->employee->fullname }}
    </x-slot>

    <!-- Featured News Blog -->
    <div class="flex flex-col bg-white px-4 pb-4 dark:bg-neutral-800">
        <!-- Header -->
        <div
            class="flex flex-wrap items-center justify-between gap-2 border-b border-dashed border-gray-200 pb-2 dark:border-neutral-700">
            <h2 class="font-medium text-gray-800 dark:text-neutral-200">
                Employee presence detail
            </h2>

            <a href="{{ route('presences.index') }}"
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
                                    {{ $presence->employee->fullname }}
                                </h3>
                            </div>
                            @session('success')
                                <div id="dismiss-alert"
                                    class="hs-removing:translate-x-5 hs-removing:opacity-0 order-1 rounded-lg border border-gray-200 bg-white p-4 text-sm text-gray-600"
                                    role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
                                    <div class="flex items-center w-72 min-w-max">
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
                                    Check in:
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
                                        {{ $presence->check_in->format('M d, Y | H:i \\W\\I\\T\\A') }}
                                    </span>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Check out:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar-arrow-up-icon lucide-calendar-arrow-up">
                                        <path d="m14 18 4-4 4 4" />
                                        <path d="M16 2v4" />
                                        <path d="M18 22v-8" />
                                        <path d="M21 11.343V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h9" />
                                        <path d="M3 10h18" />
                                        <path d="M8 2v4" />
                                    </svg>

                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $presence->check_out->format('M d, Y | H:i \\W\\I\\T\\A') }}
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
                                        <x-mark-status :status="$presence->status" />
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Present date:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar-check2-icon lucide-calendar-check-2">
                                        <path d="M8 2v4" />
                                        <path d="M16 2v4" />
                                        <path d="M21 14V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" />
                                        <path d="M3 10h18" />
                                        <path d="m16 20 2 2 4-4" />
                                    </svg>

                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $presence->date->format('F d, Y') }}
                                    </span>
                                </div>
                            </div>
                            <!-- End Item -->
                        </div>

                        <!-- Footer -->
                        <div class="border-t border-gray-200 pt-4 xl:mt-auto dark:border-neutral-700">
                            <div class="flex flex-wrap items-center justify-between gap-1.5">
                                <div>
                                    <a href="{{ route('presences.edit', $presence->id) }}"
                                        class="focus:outline-hidden inline-flex items-center gap-x-0.5 text-[13px] text-indigo-700 underline underline-offset-2 hover:decoration-2 focus:decoration-2 disabled:pointer-events-none disabled:opacity-50 dark:text-indigo-400">
                                        Edit presence
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </a>
                                </div>
                                <!-- End Col -->

                                <div class="flex items-center gap-2">
                                    <a class="flex items-center justify-center gap-x-1.5 rounded-lg border border-transparent px-2.5 py-1.5 text-[13px] text-gray-500 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 focus:outline-none dark:text-neutral-200 dark:hover:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:border-indigo-500/20 dark:focus:bg-neutral-700 dark:focus:text-neutral-200"
                                        href="#">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
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
                                    <form action="{{ route('presences.destroy', $presence->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="shadow-2xs focus:outline-hidden inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-2.5 py-1.5 text-sm font-medium text-red-500 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-trash-icon lucide-trash">
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
                                                <path d="M3 6h18" />
                                                <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
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
