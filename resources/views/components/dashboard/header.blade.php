<header
    class="z-48 lg:ps-65 sticky inset-x-0 top-0 flex w-full flex-wrap border-b border-gray-200 bg-white py-2.5 text-sm md:flex-nowrap md:justify-start dark:border-neutral-700 dark:bg-neutral-800">
    <nav class="mx-auto flex w-full basis-full items-center px-4 sm:px-6">
        <div class="me-5 flex items-center lg:me-0 lg:hidden">
            <!-- Logo -->
            <a class="focus:outline-hidden inline-block flex-none rounded-md text-xl font-semibold focus:opacity-80"
                href="{{ route('dashboard') }}" aria-label="Preline">
                Human Resource.
            </a>
            <!-- End Logo -->
        </div>

        <div class="ms-auto flex w-full items-center justify-end">
            <div class="flex flex-row items-center justify-end gap-1">
                <!-- Dropdown -->
                <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                    <button id="hs-dropdown-account" type="button"
                        class="size-9.5 focus:outline-hidden inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent text-sm font-semibold text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:text-white cursor-pointer"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <img class="size-9.5 shrink-0 rounded-full" src="https://placehold.net/avatar-3.svg"
                            alt="Avatar">
                    </button>

                    <div class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 mt-2 hidden min-w-60 rounded-lg bg-white opacity-0 shadow-md transition-[opacity,margin] before:absolute before:-top-4 before:start-0 before:h-4 before:w-full after:absolute after:-bottom-4 after:start-0 after:h-4 after:w-full dark:divide-neutral-700 dark:border dark:border-neutral-700 dark:bg-neutral-800"
                        role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                        <div class="rounded-t-lg bg-gray-100 px-5 py-3 dark:bg-neutral-700">
                            <p class="text-sm text-gray-500 dark:text-neutral-500">Signed in as</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">{{ Auth::user()->email }}
                            </p>
                        </div>
                        <div class="space-y-0.5 p-1.5">
                            <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                href="{{ route('profile.edit') }}">
                                <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-user-round-pen-icon lucide-user-round-pen">
                                    <path d="M2 21a8 8 0 0 1 10.821-7.487" />
                                    <path
                                        d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                    <circle cx="10" cy="8" r="5" />
                                </svg>
                                Profile
                            </a>
                            <form action="{{ route('logout') }}" method="post" class="w-full">
                                @csrf
                                <button type="submit" class="w-full focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300 cursor-pointer">
                                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-log-out-icon lucide-log-out">
                                        <path d="m16 17 5-5-5-5" />
                                        <path d="M21 12H9" />
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Dropdown -->
            </div>
        </div>
    </nav>
</header>
