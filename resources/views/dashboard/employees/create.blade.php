<x-dashboard-layout>
    @push('scripts')
        @vite(['resources/js/task-form.js'])
    @endpush

    <x-slot:title>
        Dashboard | Employees - Create
    </x-slot:title>

    <!-- Card Section -->
    <div>
        <!-- Card -->
        <div class="shadow-xs rounded-xl border border-gray-200 bg-white p-4 sm:p-7 dark:bg-neutral-800">
            <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                    Create new employee
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Make an employee's new data with form below.
                </p>
            </div>

            <form action="{{ route('employees.store') }}" method="post">
                @csrf
                <!-- Grid -->
                <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
                    <div class="sm:col-span-3">
                        <label class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Profile photo
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="flex items-center gap-5">
                            <img class="inline-block size-16 rounded-full ring-2 ring-white dark:ring-neutral-900"
                                src="https://placehold.net/avatar-3.svg" alt="Avatar">
                            <div class="flex gap-x-2">
                                <div class="hs-tooltip inline-block [--placement:right]">
                                    <button type="button"
                                        class="hs-tooltip-toggle shadow-2xs focus:outline-hidden inline-flex cursor-not-allowed items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                            <polyline points="17 8 12 3 7 8" />
                                            <line x1="12" x2="12" y1="3" y2="15" />
                                        </svg>
                                        Upload photo
                                        <span
                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible shadow-2xs invisible absolute z-10 inline-block rounded-md bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 transition-opacity dark:bg-neutral-700"
                                            role="tooltip">
                                            This feature not available yet.
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="fullname" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Full name
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="sm:flex">
                            <div class="relative w-full">
                                <input id="fullname" type="text" name="first_name" value="{{ old('first_name') }}"
                                    class="shadow-2xs @error('first_name') pe-11 border-red-500 @enderror relative -me-px -mt-px block w-full rounded-t-lg border-gray-200 px-3 py-1.5 checked:border-blue-500 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:ms-0 sm:mt-0 sm:rounded-s-lg sm:rounded-se-none sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="John" value="{{ old('first_name') }}">
                                @error('first_name')
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
                            <input type="text" name="last_name"
                                class="shadow-2xs relative -ms-px -mt-px block w-full rounded-b-lg border-gray-200 px-3 py-1.5 pe-11 checked:border-blue-500 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:mt-0 sm:rounded-e-lg sm:rounded-es-none sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Doe" value="{{ old('last_name') }}">
                        </div>
                        @error('first_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="email" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Email
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                class="shadow-2xs @error('email') border-red-500 @enderror block w-full rounded-lg border-gray-200 px-3 py-1.5 pe-11 checked:border-blue-500 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="johndoe@example.com">
                            @error('email')
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
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <div class="inline-block">
                            <label for="phone_number"
                                class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                                Phone
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">
                                (Optional)
                            </span>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="sm:flex">
                            <input id="phone_number" type="text" name="phone_number"
                                class="@error('phone_number') pe-11 border-red-500 @enderror shadow-2xs relative -ms-px -mt-px block w-full border-gray-200 px-3 py-1.5 pe-11 first:rounded-t-lg last:rounded-b-lg checked:border-blue-500 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:mt-0 sm:py-2 sm:text-sm sm:first:ms-0 sm:first:rounded-s-lg sm:first:rounded-se-none sm:last:rounded-e-lg sm:last:rounded-es-none dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="+x(xxx)xxx-xx-xx" value="{{ old('phone_number') }}">
                            <select
                                class="shadow-2xs relative -ms-px -mt-px block w-full border-gray-200 px-3 py-1.5 pe-9 first:rounded-t-lg last:rounded-b-lg checked:border-blue-500 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:mt-0 sm:w-auto sm:py-2 sm:text-sm sm:first:ms-0 sm:first:rounded-s-lg sm:first:rounded-se-none sm:last:rounded-e-lg sm:last:rounded-es-none dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                name="phone_number_type">
                                <option selected value="mobile"
                                    {{ old('phone_number_type') == 'mobile' ? 'selected' : '' }}>Mobile</option>
                                <option value="home" {{ old('phone_number_type') == 'home' ? 'selected' : '' }}>Home
                                </option>
                                <option value="work" {{ old('phone_number_type') == 'work' ? 'selected' : '' }}>Work
                                </option>
                                <option value="fax" {{ old('phone_number_type') == 'fax' ? 'selected' : '' }}>Fax
                                </option>
                            </select>
                        </div>
                        @error('phone_number')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="birth_date"
                            class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Birth Date
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input id="birth_date" type="text" name="birth_date" value="{{ old('birth_date') }}"
                                class="date shadow-2xs @error('birth_date') border-red-500 @enderror pe-13 block w-full rounded-lg border-gray-200 px-3 py-1.5 checked:border-blue-500 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Define employee birth date">
                            @error('birth_date')
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
                        @error('birth_date')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="hire_date"
                            class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Hire Date
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input id="hire_date" type="text" name="hire_date" value="{{ old('hire_date') }}"
                                class="date @error('hire_date') border-red-500 @enderror shadow-2xs block w-full rounded-lg border-gray-200 px-3 py-1.5 pe-11 checked:border-blue-500 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Define employee hire date">
                            @error('hire_date')
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
                        @error('hire_date')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="hire_date"
                            class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Department
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <!-- Select -->
                        <div class="relative">
                            <select name="department_id"
                                class="@error('department_id') border-red-500 @enderror block w-full rounded-lg border-gray-200 px-3 py-2 pe-9 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected value="">Select employee department</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}"
                                        {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
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
                        </div>
                        <!-- End Select -->
                        @error('department_id')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="status" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Status
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="sm:flex">
                            <label for="active"
                                class="shadow-2xs relative -ms-px -mt-px flex w-full border border-gray-200 px-3 py-2 text-sm first:rounded-t-lg last:rounded-b-lg checked:border-blue-500 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:mt-0 sm:first:ms-0 sm:first:rounded-s-lg sm:first:rounded-se-none sm:last:rounded-e-lg sm:last:rounded-es-none dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <input type="radio" name="status" value="active"
                                    class="mt-0.5 shrink-0 rounded-full border-gray-300 text-blue-600 checked:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800"
                                    id="active" checked>
                                <span class="ms-3 text-gray-500 sm:text-sm dark:text-neutral-400">Active</span>
                            </label>

                            <label for="inactive"
                                class="shadow-2xs relative -ms-px -mt-px flex w-full border border-gray-200 px-3 py-2 text-sm first:rounded-t-lg last:rounded-b-lg checked:border-blue-500 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:mt-0 sm:first:ms-0 sm:first:rounded-s-lg sm:first:rounded-se-none sm:last:rounded-e-lg sm:last:rounded-es-none dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <input type="radio" name="status" value="inactive"
                                    class="mt-0.5 shrink-0 rounded-full border-gray-300 text-blue-600 checked:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800"
                                    id="inactive" {{ old('status') == 'inactive' ? 'checked' : '' }}>
                                <span class="ms-3 text-gray-500 sm:text-sm dark:text-neutral-400">Inactive</span>
                            </label>

                            <label for="other"
                                class="shadow-2xs relative -ms-px -mt-px flex w-full border border-gray-200 px-3 py-2 text-sm first:rounded-t-lg last:rounded-b-lg checked:border-blue-500 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:mt-0 sm:first:ms-0 sm:first:rounded-s-lg sm:first:rounded-se-none sm:last:rounded-e-lg sm:last:rounded-es-none dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <input type="radio" name="status" value="other"
                                    class="mt-0.5 shrink-0 rounded-full border-gray-300 text-blue-600 checked:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800"
                                    id="other" {{ old('status') == 'other' ? 'checked' : '' }}>
                                <span class="ms-3 text-gray-500 sm:text-sm dark:text-neutral-400">Other</span>
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="role" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Role
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <select name="role_id" id="role"
                                class="@error('role_id') border-red-500 @enderror block w-full rounded-lg border-gray-200 px-3 py-2 pe-9 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected value="">Select employee role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role_id')
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
                        </div>
                        @error('role_id')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    {{-- End Col --}}

                    <div class="sm:col-span-3">
                        <label for="salary" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
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
                                    placeholder="xxx,xxx.xx">
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
                        <label for="address" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Address
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <textarea id="address" name="address"
                            class="@error('address') pe-11 border-red-500 @enderror block w-full rounded-lg border-gray-200 px-3 py-1.5 checked:border-blue-500 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            rows="6" placeholder="Type employee address...">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->

                <div class="mt-5 flex justify-end gap-x-2">
                    <a href="{{ route('employees.index') }}"
                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                        Cancel
                    </a>
                    <button type="submit"
                        class="focus:outline-hidden inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                        Create employee
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-dashboard-layout>
