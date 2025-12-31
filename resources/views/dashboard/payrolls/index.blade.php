<x-dashboard-layout>
    @push('head_css')
        <style>
            .toast-progress {
                position: absolute;
                bottom: 0;
                left: 0;
                height: 3px;
                width: 100%;
                background: linear-gradient(to right, #3b82f6, #60a5fa);
                animation: toast-progress linear forwards;
            }

            .toastify.toast-with-progress .toast-progress {
                animation-duration: 5.25s;
            }

            @keyframes toast-progress {
                from {
                    transform: scaleX(1);
                    transform-origin: left;
                }

                to {
                    transform: scaleX(0);
                    transform-origin: left;
                }
            }
        </style>
    @endpush

    <x-slot:title>
        Dashboard | Payrolls
    </x-slot:title>

    <!-- Table Section -->
    <div>
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="inline-block min-w-full p-1.5 align-middle">
                    <div
                        class="shadow-2xs overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-neutral-700 dark:bg-neutral-900">
                        <!-- Header -->
                        <div
                            class="grid gap-3 border-b border-gray-200 px-6 py-4 md:flex md:items-center md:justify-between dark:border-neutral-700">
                            <!-- Input -->
                            <div class="sm:col-span-1">
                                <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <input type="text" id="hs-as-table-product-review-search"
                                        name="hs-as-table-product-review-search"
                                        class="block w-full rounded-lg border-gray-200 px-3 py-2 ps-11 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        placeholder="Search">
                                    <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-4">
                                        <svg class="size-4 text-gray-400 dark:text-neutral-500"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="sm:col-span-2 md:grow">
                                <div class="flex justify-end gap-x-2">
                                    <a href="{{ route('payrolls.create') }}"
                                        class="focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-plus-icon lucide-plus">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Create new payroll
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        @if ($payrolls->isNotEmpty())
                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead class="bg-gray-50 dark:bg-neutral-800">
                                    <tr>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Employee
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Salary
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Bonuses
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Deductions
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Net Salary
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Pay Date
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-end"></th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($payrolls as $payroll)
                                        <tr>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <div class="flex items-center gap-x-3">
                                                        <img class="size-9.5 inline-block rounded-full"
                                                            src="https://placehold.net/avatar-3.svg" alt="Avatar">
                                                        <div class="grow">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $payroll->employee->fullname }}</span>
                                                            <span
                                                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ $payroll->employee->email }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="text-sm text-gray-600 dark:text-neutral-400">{{ $payroll->formattedSalary }}</span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="text-sm text-gray-600 dark:text-neutral-400">{{ $payroll->formattedBonuses }}</span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span class="text-sm text-gray-600 dark:text-neutral-400">
                                                        {{ $payroll->formattedDeductions }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="text-sm text-gray-600 dark:text-neutral-400">{{ $payroll->formattedNetSalary }}</span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="text-sm text-gray-600 dark:text-neutral-400">{{ $payroll->pay_date->format('d F, Y') }}</span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="flex justify-end px-6 py-1.5">
                                                    <div
                                                        class="shadow-2xs group inline-flex items-center divide-x divide-gray-300 rounded-lg border border-gray-300 bg-white transition-all dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-700">
                                                        <div class="hs-tooltip inline-block">
                                                            <a class="hs-tooltip-toggle shadow-2xs focus:outline-hidden inline-flex items-center justify-center gap-x-2 rounded-s-md bg-white px-2 py-1.5 text-sm font-semibold text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                                href="#">
                                                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                    <path
                                                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                </svg>
                                                                <span
                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible shadow-2xs invisible absolute z-10 inline-block rounded-md bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 transition-opacity dark:bg-neutral-700"
                                                                    role="tooltip">
                                                                    Download PDF
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                                                            <button id="hs-table-dropdown-1" type="button"
                                                                class="hs-dropdown-toggle shadow-2xs focus:outline-hidden inline-flex items-center justify-center gap-x-2 rounded-e-md bg-white px-2 py-1.5 text-sm font-semibold text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown">
                                                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 mt-2 hidden min-w-40 divide-y divide-gray-200 rounded-lg bg-white p-2 opacity-0 shadow-2xl transition-[opacity,margin] dark:divide-neutral-700 dark:border dark:border-neutral-700 dark:bg-neutral-800"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="hs-table-dropdown-1">
                                                                <div class="py-2 first:pt-0 last:pb-0">
                                                                    <span
                                                                        class="block px-3 py-2 text-xs font-medium uppercase text-gray-400 dark:text-neutral-600">
                                                                        Options
                                                                    </span>
                                                                    <button type="button"
                                                                        class="focus:outline-hidden flex w-full cursor-pointer items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                                        aria-haspopup="dialog" aria-expanded="false"
                                                                        aria-controls="preview-invoice"
                                                                        data-hs-overlay="#preview-invoice">
                                                                        <svg class="size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-eye-icon lucide-eye">
                                                                            <path
                                                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                                                            <circle cx="12" cy="12"
                                                                                r="3" />
                                                                        </svg>
                                                                        Preview
                                                                    </button>
                                                                    <a class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                                        href="{{ route('payrolls.edit', $payroll->id) }}">
                                                                        <svg class="size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-pencil-icon lucide-pencil">
                                                                            <path
                                                                                d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                                            <path d="m15 5 4 4" />
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                    <form class="block"
                                                                        action="{{ route('payrolls.destroy', $payroll->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit"
                                                                            class="focus:outline-hidden flex w-full cursor-pointer items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                            <svg class="size-4"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="lucide lucide-trash-icon lucide-trash">
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
                                                                                <path d="M3 6h18" />
                                                                                <path
                                                                                    d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                                            </svg>
                                                                            Delete
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                                <div class="py-2 first:pt-0 last:pb-0">
                                                                    <span
                                                                        class="block px-3 py-2 text-xs font-medium uppercase text-gray-400 dark:text-neutral-600">
                                                                        Download options
                                                                    </span>
                                                                    <a class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                                        href="#">
                                                                        <svg class="size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                                                            <path
                                                                                d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                                                        </svg>
                                                                        Print
                                                                    </a>
                                                                    <a class="focus:outline-hidden flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                                        href="#">
                                                                        <svg class="size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                                            <path
                                                                                d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                                                        </svg>
                                                                        .PDF
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table -->
                        @else
                            <div
                                class="min-h-100 mx-auto flex w-full max-w-sm flex-col items-center justify-center px-6 py-4">
                                <div
                                    class="flex size-11 items-center justify-center rounded-lg bg-gray-100 dark:bg-neutral-800">
                                    <svg class="size-6 shrink-0 text-gray-600 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-banknote-x-icon lucide-banknote-x">
                                        <path d="M13 18H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5" />
                                        <path d="m17 17 5 5" />
                                        <path d="M18 12h.01" />
                                        <path d="m22 17-5 5" />
                                        <path d="M6 12h.01" />
                                        <circle cx="12" cy="12" r="2" />
                                    </svg>
                                </div>

                                <h2 class="mt-5 font-semibold text-gray-800 dark:text-white">
                                    No payroll available
                                </h2>
                                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                                    Show information {{ session('role') === 'Manager' ? 'the employee' : 'of your' }} payroll.
                                </p>

                                <div class="mt-5 flex flex-col gap-2 sm:flex-row">
                                    <a href="{{ route('payrolls.create') }}"
                                        class="focus:outline-hidden inline-flex items-center justify-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Create a new payroll
                                    </a>
                                </div>
                            </div>
                        @endif

                        <!-- Footer -->
                        <div
                            class="grid gap-3 border-t border-gray-200 px-6 py-4 md:flex md:items-center md:justify-between dark:border-neutral-700">
                            <div class="max-w-sm space-y-3">
                                <select
                                    class="block w-full rounded-lg border-gray-200 px-3 py-2 pe-9 text-sm focus:border-blue-500 focus:ring-blue-500 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400">
                                    <option selected>5</option>
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button"
                                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                        Prev
                                    </button>

                                    <button type="button"
                                        class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                        Next
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
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

    {{-- Modal Preview Invoice --}}
    <div id="preview-invoice"
        class="hs-overlay z-80 pointer-events-none fixed start-0 top-0 hidden size-full overflow-y-auto overflow-x-hidden"
        role="dialog" tabindex="-1" aria-labelledby="preview-invoice-label">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 m-3 mt-0 h-[calc(100%-56px)] opacity-0 transition-all ease-out sm:mx-auto sm:w-full lg:max-w-lg">
            <div
                class="shadow-2xs pointer-events-auto flex max-h-full flex-col overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-neutral-800 dark:bg-neutral-900 dark:shadow-neutral-700/70">
                <div
                    class="relative min-h-32 overflow-hidden rounded-t-xl bg-gray-900 text-center dark:bg-neutral-950">
                    <!-- Close Button -->
                    <div class="absolute end-2 top-2">
                        <button type="button"
                            class="focus:outline-hidden inline-flex size-8 items-center justify-center gap-x-2 rounded-full border border-transparent bg-white/10 text-white hover:bg-white/20 focus:bg-white/20 disabled:pointer-events-none disabled:opacity-50"
                            aria-label="Close" data-hs-overlay="#preview-invoice">
                            <span class="sr-only">Close</span>
                            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                    <!-- End Close Button -->

                    <!-- SVG Background Element -->
                    <figure class="absolute inset-x-0 bottom-0 -mb-px">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            viewBox="0 0 1920 100.1">
                            <path fill="currentColor" class="fill-white dark:fill-neutral-800"
                                d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </figure>
                    <!-- End SVG Background Element -->
                </div>
                <div class="relative z-10 -mt-12">
                    <!-- Icon -->
                    <span
                        class="size-15.5 shadow-2xs mx-auto flex items-center justify-center rounded-full border border-gray-200 bg-white text-gray-700 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400">
                        <svg class="size-6 shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                            <path
                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                    <!-- End Icon -->
                </div>

                <!-- Body -->
                <div class="overflow-y-auto p-4 sm:p-7">
                    <div class="text-center">
                        <h3 id="hs-ai-modal-label" class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Invoice of Employee
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Invoice #123
                        </p>
                    </div>

                    <!-- Grid -->
                    <div class="mt-5 grid grid-cols-2 gap-5 sm:mt-10 sm:grid-cols-2">
                        <div class="text-center">
                            <span class="block text-xs uppercase text-gray-500 dark:text-neutral-500">Amount
                                paid:</span>
                            <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">$316.8</span>
                        </div>
                        <!-- End Col -->

                        <div class="text-center">
                            <span class="block text-xs uppercase text-gray-500 dark:text-neutral-500">Date paid:</span>
                            <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">April 22,
                                2020</span>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 sm:mt-10">
                        <h4 class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Summary</h4>

                        <ul class="mt-3 flex flex-col">
                            <li
                                class="-mt-px inline-flex items-center gap-x-2 border border-gray-200 px-4 py-3 text-sm text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex w-full items-center justify-between">
                                    <span>Payment to Front</span>
                                    <span>$264.00</span>
                                </div>
                            </li>
                            <li
                                class="-mt-px inline-flex items-center gap-x-2 border border-gray-200 px-4 py-3 text-sm text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex w-full items-center justify-between">
                                    <span>Tax fee</span>
                                    <span>$52.8</span>
                                </div>
                            </li>
                            <li
                                class="-mt-px inline-flex items-center gap-x-2 border border-gray-200 bg-gray-50 px-4 py-3 text-sm font-semibold text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200">
                                <div class="flex w-full items-center justify-between">
                                    <span>Amount paid</span>
                                    <span>$316.8</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Button -->
                    <div class="mt-5 flex justify-end gap-x-2">
                        <a class="shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="#">
                            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="7 10 12 15 17 10" />
                                <line x1="12" x2="12" y1="15" y2="3" />
                            </svg>
                            Invoice PDF
                        </a>
                        <a class="focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50"
                            href="#">
                            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9" />
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                                <rect width="12" height="8" x="6" y="14" />
                            </svg>
                            Print
                        </a>
                    </div>
                    <!-- End Buttons -->

                    <div class="mt-5 sm:mt-10">
                        <p class="text-sm text-gray-500 dark:text-neutral-500">If you have any questions, please
                            contact admin at <a
                                class="focus:outline-hidden inline-flex items-center gap-x-1.5 font-medium text-blue-600 decoration-2 hover:underline focus:underline dark:text-blue-500"
                                href="#">human.resources@gmail.com</a> or call at <a
                                class="focus:outline-hidden inline-flex items-center gap-x-1.5 font-medium text-blue-600 decoration-2 hover:underline focus:underline dark:text-blue-500"
                                href="tel:+1898345492">+62 82147321636</a></p>
                    </div>
                </div>
                <!-- End Body -->
            </div>
        </div>
    </div>
    {{-- End Modal Preview Invoice --}}

    @if (session('success'))
        @push('foot_js')
            <script>
                window.__toastSuccessMessage = @json(session('success'));
            </script>
        @endpush
    @endif
    @if (session('restoreable_id'))
        @push('foot_js')
            <script>
                window.__restorableId = @json(session('restoreable_id'));
            </script>
        @endpush
    @endif
    @push('foot_js')
        <script>
            function tostifyCustomClose(el) {
                el.closest('.toastify').querySelector('.toast-close').click();
            }

            window.addEventListener('load', () => {
                if (!window.__toastSuccessMessage) return;

                const toastMarkup1 = `
                    <div class="relative max-w-xs rounded-xl border border-gray-200 bg-white shadow-lg dark:border-neutral-700 dark:bg-neutral-800 overflow-hidden"
                        role="alert" tabindex="-1" aria-labelledby="hs-toast-restore-label">
                        <div class="flex p-4">
                            <div class="shrink-0">
                                <button onclick="tostifyCustomClose(this)" type="button"
                                    class="focus:outline-hidden absolute end-3 top-3 inline-flex size-5 shrink-0 items-center justify-center rounded-lg text-gray-800 opacity-50 hover:opacity-100 focus:opacity-100 dark:text-white"
                                    aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="ms-2 me-5">
                                <h3 id="hs-toast-restore-label" class="text-sm font-medium text-gray-800 dark:text-white">
                                    Successfully deleted payroll
                                </h3>
                                <div class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                    You can restore by click undo below.
                                </div>
                                <form action="/dashboard/payrolls/${window.__restorableId}/restore" method="post" class="mt-3">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PATCH">
                                    <button type="submit"
                                        class="focus:outline-hidden text-sm font-medium text-blue-600 decoration-2 hover:underline focus:underline dark:text-blue-500 cursor-pointer">
                                        Undo
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="toast-progress"></div>
                    </div>
                `;

                const toastMarkup2 = `
                    <div class="flex items-center gap-4 p-4">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p class="text-sm text-gray-700 dark:text-neutral-400">${window.__toastSuccessMessage}</p>
                        <div class="ms-auto">
                            <button onclick="tostifyCustomClose(this)" type="button" class="inline-flex shrink-0 justify-center items-center size-5 rounded-lg text-gray-800 opacity-50 hover:opacity-100 focus:outline-hidden focus:opacity-100 dark:text-white" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                            </button>
                        </div>
                    </div>
                `;

                Toastify({
                    text: window.__restorableId ? toastMarkup1 : toastMarkup2,
                    className: `
                    hs-toastify-on:opacity-100 opacity-0 fixed -top-10 end-10 z-90 transition-all duration-300 min-w-max w-72 bg-white text-sm text-gray-700 border border-gray-200 rounded-xl shadow-lg [&>.toast-close]:hidden dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 ${window.__restorableId ? 'toast-with-progress' : ''}
                    `,
                    duration: window.__restorableId ? 5000 : 3000,
                    close: true,
                    escapeMarkup: false
                }).showToast();
            });
        </script>
    @endpush
</x-dashboard-layout>
