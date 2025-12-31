<x-dashboard-layout>
    @push('head_css')
        <style>
            .hs-leaflet.leaflet-touch .leaflet-control-layers,
            .hs-leaflet.leaflet-touch .leaflet-bar {
                border-width: 0px;
            }

            .hs-leaflet.leaflet-touch .leaflet-bar a {
                line-height: 1.5;
                background-color: rgba(255, 255, 255, .8);
                box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            }

            .hs-leaflet.leaflet-touch .leaflet-bar a:first-child,
            .hs-leaflet.leaflet-touch .leaflet-bar a:last-child {
                border-radius: 8px;
            }

            .hs-leaflet .leaflet-control-zoom-in,
            .hs-leaflet .leaflet-control-zoom-out {
                font-weight: 400;
                font-size: 18px;
                color: #1f2937;
                text-indent: 0px;
            }

            .hs-leaflet .leaflet-bar {
                display: flex;
                flex-direction: column;
                gap: 6px;
            }

            .hs-leaflet .leaflet-bar a {
                border-width: 0;
            }

            .hs-leaflet .leaflet-bar a:hover,
            .hs-leaflet .leaflet-bar a:focus {
                background-color: #e5e7eb;
            }

            .hs-leaflet .leaflet-popup-content-wrapper,
            .hs-leaflet .leaflet-popup-tip {
                box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            }

            .hs-leaflet .leaflet-popup-tip {
                border-radius: 4px;
            }

            .hs-leaflet.leaflet-container a.leaflet-popup-close-button {
                top: -10px;
                right: -10px;
                border-radius: 9999px;
                background-color: #f3f4f6;
                color: #1f2937;
                font-size: 14px;
                line-height: 1.6;
            }

            .hs-leaflet.leaflet-container a.leaflet-popup-close-button:hover {
                background-color: #f3f4f6;
            }

            .hs-leaflet-unstyled-popover .leaflet-popup-content-wrapper {
                display: flex;
            }

            .hs-leaflet-unstyled-popover .leaflet-popup-content {
                padding: 0;
                margin: 0;
                background: none;
                line-height: normal;
                border-radius: 0;
                font-size: inherit;
                min-height: auto;
            }
        </style>
    @endpush
    @push('scripts')
        @vite('resources/js/maps.js')
    @endpush

    <x-slot:title>
        Dashboard | Attendance | Check In
    </x-slot:title>

    <!-- Card Section -->
    <div>
        <!-- Card -->
        <div class="shadow-xs rounded-xl border border-gray-200 bg-white p-4 sm:p-7 dark:bg-neutral-800">
            <div class="mb-8 flex items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                        Employee Attendance
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                        Please fill in the form below to record your attendance today.
                    </p>
                </div>
                <div id="allow-present"
                    class="hidden rounded-lg border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-800 dark:border-emerald-900 dark:bg-emerald-800/10 dark:text-emerald-500 max-w-152 min-w-152"
                    role="alert" tabindex="-1" aria-labelledby="hs-with-description-label">
                    <div class="flex">
                        <div class="shrink-0">
                            <svg class="mt-0.5 size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check-big-icon lucide-circle-check-big">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                                <path d="m9 11 3 3L22 4" />
                            </svg>
                        </div>
                        <div class="ms-4">
                            <h3 id="hs-with-description-label" class="text-sm font-semibold">
                                Location verified
                            </h3>
                            <div class="mt-1 text-sm text-emerald-700">
                                You are within the office area. You can proceed to submit your attendance.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="not-allowed-present"
                    class="hidden rounded-lg border border-yellow-200 bg-yellow-50 p-4 text-sm text-yellow-800 dark:border-yellow-900 dark:bg-yellow-800/10 dark:text-yellow-500 max-w-152 min-w-152"
                    role="alert" tabindex="-1" aria-labelledby="hs-with-description-label">
                    <div class="flex">
                        <div class="shrink-0">
                            <svg class="mt-0.5 size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z">
                                </path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                        </div>
                        <div class="ms-4">
                            <h3 id="hs-with-description-label" class="text-sm font-semibold">
                                Outside office area
                            </h3>
                            <div class="mt-1 text-sm text-yellow-700">
                                Your current location is outside the allowed office radius. Attendance submission is not
                                available at this location.
                            </div>
                        </div>
                    </div>
                </div>
                @error ('location')
                    <div
                        class="hidden rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-800 dark:border-red-900 dark:bg-red-800/10 dark:text-red-500 max-w-152 min-w-152"
                        role="alert" tabindex="-1" aria-labelledby="hs-with-description-label">
                        <div class="flex">
                            <div class="shrink-0">
                                <svg class="mt-0.5 size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z">
                                    </path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 17h.01"></path>
                                </svg>
                            </div>
                            <div class="ms-4">
                                <h3 id="hs-with-description-label" class="text-sm font-semibold">
                                    {{ $message }}
                                </h3>
                                <div class="mt-1 text-sm text-red-700">
                                    Your current location is outside the allowed office radius. Attendance submission is not
                                    available at this location.
                                </div>
                            </div>
                        </div>
                    </div>
                @enderror
            </div>

            <form action="{{ route('presences.store') }}" method="post">
                @csrf
                <!-- Grid -->
                <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">

                    <div class="sm:col-span-3">
                        <label for="latitude" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Latitude
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input type="text" name="latitude" id="latitude"
                                class="block w-full rounded-lg border-gray-200 px-4 py-2 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Latitude is set automatically" readonly>
                            @error('latitude')
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
                        @error('latitude')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="longitude" class="mt-2.5 inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Longitude
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="relative">
                            <input type="text" name="longitude" id="longitude"
                                class="block w-full rounded-lg border-gray-200 px-4 py-2 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 sm:text-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Longitude is set automatically" readonly>
                            @error('longitude')
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
                        @error('longitude')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->

                <div id="hs-pin-leaflet" class="h-100 hs-leaflet z-10 mt-6 rounded-lg"></div>

                <div class="mt-5 flex justify-end gap-x-2">
                    <a href="{{ route('presences.index') }}"
                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                        Back to list
                    </a>
                    <button type="submit" disabled id="submit"
                        class="focus:outline-hidden inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                        Submit attendance
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-dashboard-layout>
