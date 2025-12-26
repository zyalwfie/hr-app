<x-dashboard-layout>
    <x-slot name="title">
        Dashboard | Tasks - Detail, {{ $task->title }}
    </x-slot>

    <!-- Featured News Blog -->
    <div class="flex flex-col bg-white p-4 dark:bg-neutral-800">
        <!-- Header -->
        <div
            class="flex flex-wrap items-center justify-between gap-2 border-b border-dashed border-gray-200 pb-2 dark:border-neutral-700">
            <h2 class="font-medium text-gray-800 dark:text-neutral-200">
                Detail task
            </h2>

            <a href="{{ route('tasks.index') }}"
                class="flex cursor-pointer items-center justify-center gap-x-1.5 rounded-lg border border-gray-200 px-2.5 py-1.5 text-[13px] text-gray-800 hover:border-indigo-100 hover:bg-indigo-50 hover:text-indigo-700 focus:border-indigo-100 focus:bg-indigo-50 focus:text-indigo-700 focus:outline-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:border-indigo-500/20 dark:hover:bg-indigo-500/20 dark:hover:text-indigo-400 dark:focus:border-indigo-500/20 dark:focus:bg-indigo-500/20 dark:focus:text-indigo-400">
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
                    <img class="absolute inset-0 size-full rounded-lg object-cover object-center"
                        src="https://placehold.net/7.png" alt="Post Image">
                </div>

                <div class="grow">
                    <div class="flex h-full flex-col">
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Post title:
                        </p>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            {{ $task->title }}
                        </h3>

                        <div class="mt-4 grid grid-cols-2 gap-x-2 gap-y-4 xl:grid-cols-3">
                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Due date:
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
                                        {{ $task->due_date->format('F d, Y') }}
                                    </span>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Employee:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <svg class="size-4 shrink-0 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11.5 15H7a4 4 0 0 0-4 4v2" />
                                        <path
                                            d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                        <circle cx="10" cy="7" r="4" />
                                    </svg>

                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $task->employee->fullname }}
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
                                    <x-mark-status :status="$task->status" />
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex flex-col gap-y-1">
                                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                                    Description:
                                </span>

                                <div class="flex items-center gap-x-1.5">
                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $task->description }}
                                    </span>
                                </div>
                            </div>
                            <!-- End Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Featured News Blog -->
    </div>
    <!-- End Featured News Blog -->
</x-dashboard-layout>
