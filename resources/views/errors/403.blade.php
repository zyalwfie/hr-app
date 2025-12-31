<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Insufficient Permissions</title>
</head>

<body class="h-full">
    <main class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-blue-400">403</p>
            <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight sm:text-7xl">Access Restricted
            </h1>
            <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">You don’t have permission to
                access this page.<br />Please contact your administrator if you believe this is a mistake.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                @php
                    $backUrl = url()->previous();
                @endphp
                <a href="{{ $backUrl !== url()->current() ? $backUrl : route('dashboard') }}"
                    class="shadow-xs rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white hover:bg-blue-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">Go back</a>
                <a href="mailto:zyalwfie@gmail.com" class="text-sm font-semibold">Contact support <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </main>
</body>

</html>
