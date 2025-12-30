<x-dashboard-layout>
    @push('scripts')
        @vite('resources/js/range-date-picker.js')
    @endpush

    <x-slot:title>
        Dashboard | Leave Request - Create
    </x-slot:title>

    <!-- Card Section -->
    <div>
        <!-- Card -->
        <div class="shadow-xs rounded-xl border border-gray-200 bg-white p-4 sm:p-7 dark:bg-neutral-800">
            <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                    Creat employee leave request
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Make an new employee create request.
                </p>
            </div>

            <form action="{{ route('leave-requests.store') }}" method="post">
                @csrf
                <!-- Grid -->
                <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">

                    <div class="sm:col-span-3">
                        <label for="employee" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Employee
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <select name="employee_id" id="employee"
                                class="@error('employee_id') border-red-500 pe-11 @enderror block w-full rounded-lg border-gray-200 px-4 py-2 pe-9 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected="">Choose employee</option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}"
                                        {{ old('employee_id') == $employee->id ? 'selected' : '' }}>
                                        {{ $employee->fullname }}</option>
                                @endforeach
                            </select>
                            @error('employee_id')
                                <div class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-10">
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
                        @error('employee_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="range_date" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Range Date
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input id="range_date" type="text" name="range_date"
                                value="{{ old('range_date') }}"
                                class="date-range shadow-2xs @error('range_date') border-red-500 @enderror pe-13 block w-full rounded-lg border-gray-200 px-3 py-1.5 checked:border-blue-500 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="When employee present time">
                            @error('range_date')
                                <div class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-11">
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
                            <div class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-3">
                                <svg class="size-4 shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-calendar-fold-icon lucide-calendar-fold">
                                    <path
                                        d="M3 20a2 2 0 0 0 2 2h10a2.4 2.4 0 0 0 1.706-.706l3.588-3.588A2.4 2.4 0 0 0 21 16V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2z" />
                                    <path d="M15 22v-5a1 1 0 0 1 1-1h5" />
                                    <path d="M8 2v4" />
                                    <path d="M16 2v4" />
                                    <path d="M3 10h18" />
                                </svg>
                            </div>
                        </div>
                        @error('range_date')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="leave_type"
                            class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Leave Type
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <select name="leave_type" id="leave_type"
                                class="@error('leave_type') border-red-500 pe-11 @enderror block w-full rounded-lg border-gray-200 px-4 py-2 pe-9 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected="">Choose leave type</option>
                                <option value="sick leave"
                                    {{ old('leave_type') == 'sick leave' ? 'selected' : '' }}>
                                    Sick Leave</option>
                                <option value="vacation"
                                    {{ old('maternity leave') == 'maternity leave' ? 'selected' : '' }}>
                                    Maternity Leave</option>
                                <option value="vacation"
                                    {{ old('leave_type') == 'vacation' ? 'selected' : '' }}>
                                    Vacation</option>
                            </select>
                            @error('leave_type')
                                <div class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-10">
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
                        @error('leave_type')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->

                <div class="mt-5 flex justify-end gap-x-2">
                    <a href="{{ route('leave-requests.index') }}"
                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                        Cancel
                    </a>
                    <button type="submit"
                        class="focus:outline-hidden inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                        Create leave request
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-dashboard-layout>
