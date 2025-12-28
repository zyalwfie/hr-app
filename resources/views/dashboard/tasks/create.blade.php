<x-dashboard-layout>
    @push('scripts')
        @vite('resources/js/date-picker.js')
    @endpush

    <x-slot:title>
        Dashboard | Tasks - Create new task
    </x-slot:title>

    <!-- Card Section -->
    <div>
        <!-- Card -->
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow sm:p-7 dark:bg-neutral-900">
            <form action="{{ route('tasks.store') }}" method="post">
                @csrf
                <!-- Section -->
                <div
                    class="grid gap-2 border-gray-200 pb-8 first:border-transparent first:pt-0 last:pb-0 sm:grid-cols-12 sm:gap-4 dark:border-neutral-700 dark:first:border-transparent">
                    <div class="flex items-center justify-between sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Create a new task
                        </h2>
                        <a href="{{ route('tasks.index') }}"
                            class="flex cursor-pointer items-center justify-center gap-x-1.5 rounded-lg border border-gray-200 px-2.5 py-1.5 text-[13px] text-gray-800 hover:border-indigo-100 hover:bg-indigo-50 hover:text-indigo-700 focus:border-indigo-100 focus:bg-indigo-50 focus:text-indigo-700 focus:outline-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:border-indigo-500/20 dark:hover:bg-indigo-500/20 dark:hover:text-indigo-400 dark:focus:border-indigo-500/20 dark:focus:bg-indigo-500/20 dark:focus:text-indigo-400">
                            <svg class="size-3.5 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-left-icon lucide-arrow-left">
                                <path d="m12 19-7-7 7-7" />
                                <path d="M19 12H5" />
                            </svg>
                            Back to list
                        </a>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="title"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Title
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative w-full">
                            <input name="title" value="{{ old('title') }}" id="title" type="text"
                                class="shadow-2xs @error('title') border-red-500 @enderror block w-full rounded-lg border-gray-200 px-3 py-1.5 pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Task title">
                            @error('title')
                                <div class="pointer-events-none absolute inset-y-0 end-3 flex items-center">
                                    <svg class="size-4 shrink-0 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('title')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <div class="inline-block">
                            <label for="description"
                                class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                                Description
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative w-full">
                            <textarea name="description" id="description"
                                class="@error('description') border-red-500 @enderror block w-full rounded-lg border-gray-200 px-3 py-1.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="6" placeholder="Add description for detail task.">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="pointer-events-none absolute bottom-3 end-3 flex items-center">
                                    <svg class="size-4 shrink-0 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('description')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="assigned_to"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Employee
                        </label>
                    </div>

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <select name="assigned_to" id="assigned_to"
                                class="@error('assigned_to') border-red-500 @enderror shadow-2xs block w-full rounded-lg border-gray-200 px-3 py-1.5 pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected value="">Select an employee</option>
                                @foreach ($employees as $employee)
                                    <option {{ old('assigned_to') == $employee->id ? 'selected' : '' }}
                                        value="{{ $employee->id }}">
                                        {{ $employee->fullname }}
                                    </option>
                                @endforeach
                            </select>
                            @error('assigned_to')
                                <div class="pointer-events-none absolute inset-y-0 end-10 flex items-center">
                                    <svg class="size-4 shrink-0 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('assigned_to')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="due_date"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Due Date
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input name="due_date" value="{{ old('due_date') }}" id="due_date" type="text"
                                class="@error('due_date') border-red-500 @enderror date shadow-2xs block w-full rounded-lg border-gray-200 px-3 py-1.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Pick due date">
                            <div class="absolute right-3 top-1/2 -translate-y-1/2">
                                <svg class="size-4 text-neutral-500" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar">
                                    <path d="M8 2v4" />
                                    <path d="M16 2v4" />
                                    <rect width="18" height="18" x="3" y="4" rx="2" />
                                    <path d="M3 10h18" />
                                </svg>
                            </div>
                            @error('due_date')
                                <div class="pointer-events-none absolute inset-y-0 end-10 flex items-center">
                                    <svg class="size-4 shrink-0 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('due_date')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="status"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Status
                        </label>
                    </div>

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <select name="status" id="status"
                                class="@error('status') border-red-500 @enderror shadow-2xs block w-full rounded-lg border-gray-200 px-3 py-1.5 pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected value="">Select a status</option>
                                <option value="pending" {{ old('status') === 'pending' ? 'selected' : '' }}>
                                    Pending
                                </option>

                                <option value="progress" {{ old('status') === 'progress' ? 'selected' : '' }}>
                                    Progress
                                </option>
                            </select>
                            @error('status')
                                <div class="pointer-events-none absolute inset-y-0 end-10 flex items-center">
                                    <svg class="size-4 shrink-0 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('status')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>
                <!-- End Section -->

                <div class="flex items-center justify-end gap-4">
                    <button type="submit"
                        class="focus:outline-hidden inline-flex cursor-pointer items-center justify-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-3 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                        Create task
                    </button>
                    <button type="reset"
                        class="shadow-2xs focus:outline-hidden inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        Reset data
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-dashboard-layout>
