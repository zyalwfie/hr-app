<x-dashboard-layout>
    @push('scripts')
        @vite('resources/js/date-picker.js')
    @endpush

    <x-slot:title>
        Dashboard | Payrolls - Edit, {{ $payroll->employee->fullname }}
    </x-slot:title>

    <div>
        <!-- Card -->
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm sm:p-7 dark:bg-neutral-900">
            <form action="{{ route('payrolls.update', $payroll->id) }}" method="post">
                @csrf
                @method('put')
                <div class="grid gap-2 py-8 pt-0 last:pb-0 sm:grid-cols-12 sm:gap-4">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Edit payroll
                        </h2>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="employee_id"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Employee
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <select name="employee_id" id="employee_id"
                                class="block w-full rounded-lg border-gray-200 px-4 py-2 pe-9 text-sm">
                                <option value="">Select employee</option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}" data-salary="{{ $employee->salary }}"
                                        {{ old('employee_id', $payroll->employee->id) == $employee->id ? 'selected' : '' }}>
                                        {{ $employee->fullname }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="salary"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Salary
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <label for="salary" class="sr-only">Multiple add-on</label>
                        <div class="flex rounded-lg">
                            <div
                                class="inline-flex min-w-fit items-center rounded-s-md border border-e-0 border-gray-200 bg-gray-50 px-4 dark:border-neutral-600 dark:bg-neutral-700">
                                <span class="text-sm text-gray-500 dark:text-neutral-400">Rp</span>
                            </div>
                            <div class="relative w-full">
                                <input type="text" id="salary" name="salary" value="{{ old('salary') }}"
                                    class="@error('salary') border-red-500 @enderror block w-full rounded-lg rounded-s-none border-gray-200 px-4 py-2 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="xxx,xxx.xx" readonly="">
                                @error('salary')
                                    <div class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-3">
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
                        </div>
                        @error('salary')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    {{-- End Col --}}

                    <div class="sm:col-span-3">
                        <label for="bonuses"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Bonuses
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <label for="bonuses" class="sr-only">Multiple add-on</label>
                        <div class="flex rounded-lg">
                            <div
                                class="inline-flex min-w-fit items-center rounded-s-md border border-e-0 border-gray-200 bg-gray-50 px-4 dark:border-neutral-600 dark:bg-neutral-700">
                                <span class="text-sm text-gray-500 dark:text-neutral-400">Rp</span>
                            </div>
                            <div class="relative w-full">
                                <input type="text" id="bonuses" name="bonuses" value="{{ old('bonuses', $payroll->bonuses) }}"
                                    class="@error('bonuses') border-red-500 @enderror block w-full rounded-lg rounded-s-none border-gray-200 px-4 py-2 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="xxx,xxx.xx">
                                @error('bonuses')
                                    <div class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-3">
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
                        </div>
                        @error('bonuses')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    {{-- End Col --}}

                    <div class="sm:col-span-3">
                        <label for="deductions"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Deductions
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <label for="deductions" class="sr-only">Multiple add-on</label>
                        <div class="flex rounded-lg">
                            <div
                                class="inline-flex min-w-fit items-center rounded-s-md border border-e-0 border-gray-200 bg-gray-50 px-4 dark:border-neutral-600 dark:bg-neutral-700">
                                <span class="text-sm text-gray-500 dark:text-neutral-400">Rp</span>
                            </div>
                            <div class="relative w-full">
                                <input type="text" id="deductions" name="deductions"
                                    value="{{ old('deductions', $payroll->deductions) }}"
                                    class="@error('deductions') border-red-500 @enderror block w-full rounded-lg rounded-s-none border-gray-200 px-4 py-2 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="xxx,xxx.xx">
                                @error('deductions')
                                    <div class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-3">
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
                        </div>
                        @error('deductions')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    {{-- End Col --}}

                    <div class="sm:col-span-3">
                        <div class="inline-block">
                            <label for="pay_date"
                                class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                                Pay Date
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input type="text" name="pay_date" id="pay_date"
                                class="@error('pay_date') border-red-500 pe-11 @enderror date block w-full rounded-lg border-gray-200 px-4 py-2 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Define pay date" value="{{ old('pay_date', $payroll->pay_date) }}">
                            @error('paydate')
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
                            <div
                                class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-3 text-gray-500">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar-icon lucide-calendar">
                                    <path d="M8 2v4" />
                                    <path d="M16 2v4" />
                                    <rect width="18" height="18" x="3" y="4" rx="2" />
                                    <path d="M3 10h18" />
                                </svg>
                            </div>
                        </div>
                        @error('pay_date')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->
                </div>
                <div class="flex items-center justify-end gap-2">
                    <a href="{{ route('payrolls.index') }}"
                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        Cancel
                    </a>
                    <button type="submit"
                        class="focus:outline-hidden inline-flex min-w-max cursor-pointer items-center justify-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                        Create payroll
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>

    @push('foot_js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const employeeSelect = document.getElementById('employee_id');
                const salaryInput = document.getElementById('salary');

                function syncSalaryWithEmployee() {
                    const selectedOption = employeeSelect.options[employeeSelect.selectedIndex];
                    salaryInput.value = selectedOption?.dataset.salary ?? '';
                }

                syncSalaryWithEmployee();

                employeeSelect.addEventListener('change', syncSalaryWithEmployee);
            });
        </script>
    @endpush

</x-dashboard-layout>
