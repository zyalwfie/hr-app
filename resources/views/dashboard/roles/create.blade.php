<x-dashboard-layout>
    <x-slot:title>
        Dashboard | Roles - Create
    </x-slot:title>

    <!-- Card Section -->
    <div>
        <!-- Card -->
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm sm:p-7 dark:bg-neutral-900">
            <form action="{{ route('roles.store') }}" method="post">
                @csrf
                <div
                    class="grid gap-2 py-8 pt-0 last:pb-0 sm:grid-cols-12 sm:gap-4">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Create new role
                        </h2>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="name"
                            class="mt-2.5 inline-block text-sm font-medium text-gray-500 dark:text-neutral-500">
                            Name
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input id="title" type="text" name="title" value="{{ old('title') }}"
                                class="@error('title') pe-11 border-red-500 @enderror shadow-2xs block w-full rounded-lg border-gray-200 px-3 py-1.5 pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Role title">
                            @error('title')
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
                        @error('title')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
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
                        <textarea id="description" name="description"
                            class="@error('description') border-red-500 @enderror block w-full rounded-lg border-gray-200 px-3 py-1.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:py-2 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            rows="6" placeholder="Add description of department">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600" id="hs-validation-name-error-helper">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->
                </div>
                <div class="flex items-center justify-end gap-2">
                    <a href="{{ route('roles.index') }}"
                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        Cancel
                    </a>
                    <button type="submit"
                        class="focus:outline-hidden inline-flex min-w-max cursor-pointer items-center justify-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                        Create department
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-dashboard-layout>
