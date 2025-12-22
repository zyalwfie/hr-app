<div id="hs-application-sidebar"
    class="hs-overlay hs-overlay-open:translate-x-0 w-65 z-60 fixed inset-y-0 start-0 hidden h-full -translate-x-full transform border-e border-gray-200 bg-white transition-all duration-300 [--auto-close:lg] lg:bottom-0 lg:end-auto lg:block lg:translate-x-0 dark:border-neutral-700 dark:bg-neutral-800"
    role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex h-full max-h-full flex-col">
        <div class="flex items-center px-6 pt-4">
            <!-- Logo -->
            <a class="focus:outline-hidden inline-block flex-none rounded-xl text-xl font-semibold focus:opacity-80"
                href="{{ route('admin.dashboard.index') }}" aria-label="Preline">
                <h1>Human Resources.</h1>
            </a>
            <!-- End Logo -->
        </div>

        <!-- Content -->
        <div
            class="h-full overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 [&::-webkit-scrollbar-track]:bg-gray-100 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 [&::-webkit-scrollbar]:w-2">
            <nav class="hs-accordion-group flex w-full flex-col flex-wrap p-3" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-1">
                    <li>
                        <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg bg-gray-100 px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            href="#">
                            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            Dashboard
                        </a>
                    </li>

                    {{-- Accordion Item --}}
                    {{-- <li class="hs-accordion" id="users-accordion">
                        <button type="button"
                            class="hs-accordion-toggle focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-start text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            aria-expanded="true" aria-controls="users-accordion-child">
                            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            Users

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="users-accordion-child"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="users-accordion">
                            <ul class="hs-accordion-group space-y-1 ps-8 pt-1" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="users-accordion-sub-1">
                                    <button type="button"
                                        class="hs-accordion-toggle focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-start text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        aria-expanded="true" aria-controls="users-accordion-sub-1-child">
                                        Sub Menu 1

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="users-accordion-sub-1-child"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        role="region" aria-labelledby="users-accordion-sub-1">
                                        <ul class="space-y-1 pt-1">
                                            <li>
                                                <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="users-accordion-sub-2">
                                    <button type="button"
                                        class="hs-accordion-toggle focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-start text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        aria-expanded="true" aria-controls="users-accordion-sub-2-child">
                                        Sub Menu 2

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="users-accordion-sub-2-child"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        role="region" aria-labelledby="users-accordion-sub-2">
                                        <ul class="space-y-1 pt-1">
                                            <li>
                                                <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li> --}}

                    <li>
                        <a class="focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check-icon lucide-clipboard-check size-4 shrink-0"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="m9 14 2 2 4-4"/></svg>
                            Task
                        </a>
                    </li>
                    <li>
                        <a class="focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-round-icon lucide-users-round size-4 shrink-0"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                            Employee
                        </a>
                    </li>
                    <li>
                        <a class="focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-lock-icon lucide-user-lock size-4 shrink-0"><circle cx="10" cy="7" r="4"/><path d="M10.3 15H7a4 4 0 0 0-4 4v2"/><path d="M15 15.5V14a2 2 0 0 1 4 0v1.5"/><rect width="8" height="5" x="13" y="16" rx=".899"/></svg>
                            Role
                        </a>
                    </li>
                    <li>
                        <a class="focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check2-icon lucide-calendar-check-2 size-4 shrink-0"><path d="M8 2v4"/><path d="M16 2v4"/><path d="M21 14V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8"/><path d="M3 10h18"/><path d="m16 20 2 2 4-4"/></svg>
                            Presence
                        </a>
                    </li>
                    <li>
                        <a class="focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-banknote-arrow-up-icon lucide-banknote-arrow-up size-4 shrink-0"><path d="M12 18H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5"/><path d="M18 12h.01"/><path d="M19 22v-6"/><path d="m22 19-3-3-3 3"/><path d="M6 12h.01"/><circle cx="12" cy="12" r="2"/></svg>
                            Payroll
                        </a>
                    </li>
                    <li>
                        <a class="focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-off-icon lucide-calendar-off size-4 shrink-0"><path d="M4.2 4.2A2 2 0 0 0 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 1.82-1.18"/><path d="M21 15.5V6a2 2 0 0 0-2-2H9.5"/><path d="M16 2v4"/><path d="M3 10h7"/><path d="M21 10h-5.5"/><path d="m2 2 20 20"/></svg>
                            Leave Request
                        </a>
                    </li>
                    <li>
                        <a class="focus:outline-hidden flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out size-4 shrink-0"><path d="m16 17 5-5-5-5"/><path d="M21 12H9"/><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/></svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Content -->
    </div>
</div>
