<x-dashboard-layout>
    <x-slot name="title">
        Dashboard | Employees
    </x-slot>

    <!-- Table Section -->
    <div>
        <!-- Card -->
        <div class="flex flex-col">
            <div
                class="overflow-x-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 [&::-webkit-scrollbar]:h-2">
                <div class="inline-block min-w-full align-middle">
                    <div
                        class="shadow-2xs overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-neutral-700 dark:bg-neutral-800">
                        <!-- Header -->
                        <div
                            class="grid gap-3 border-b border-gray-200 px-6 py-4 md:flex md:items-center md:justify-between dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Employees
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Add employess, edit and more.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50"
                                        href="#">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Add employee
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>
                                    <th scope="col" class="py-3 pe-6 ps-6 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                Name
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                Position
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                Status
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                Hire Date
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-end"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @foreach ($employees as $employee)
                                <tr>
                                    <td class="whitespace-nowrap">
                                        <div class="py-3 pe-6 ps-6">
                                            <div class="flex items-center gap-x-3">
                                                <img class="size-9.5 inline-block rounded-full"
                                                    src="https://placehold.net/avatar-3.svg" alt="Avatar">
                                                <div class="grow">
                                                    <span
                                                        class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $employee->fullname }}</span>
                                                    <span
                                                        class="block text-sm text-gray-500 dark:text-neutral-500">{{ $employee->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="h-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $employee->department->name }}</span>
                                            <span
                                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ $employee->role->title }}</span>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <x-mark-status :status="$employee->status" />
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $employee->hire_date->format('j M, Y') }}</span>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="px-6 py-1.5">
                                            <a class="focus:outline-hidden inline-flex items-center gap-x-1 text-sm font-medium text-blue-600 decoration-2 hover:underline focus:underline dark:text-blue-500"
                                                href="{{ route('employees.edit', $employee->id) }}">
                                                View
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="grid gap-3 border-t border-gray-200 px-6 py-4 md:flex md:items-center md:justify-between dark:border-neutral-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span> results
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button"
                                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-2 py-1.5 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                        Prev
                                    </button>

                                    <button type="button"
                                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-2 py-1.5 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        Next
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
</x-dashboard-layout>
