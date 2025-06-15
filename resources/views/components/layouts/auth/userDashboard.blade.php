<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white antialiased dark:bg-gradient-to-b dark:from-neutral-950 dark:to-neutral-900">

    <!-- Top Navbar -->
    <header class="bg-white dark:bg-neutral-900 shadow-md">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
            <div class="flex flex-wrap items-center justify-between gap-4 py-4">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <x-app-logo-icon class="h-8 w-8 text-black dark:text-white" />
                    <span class="text-lg font-semibold text-black dark:text-white">
                        {{ config('app.name', 'Laravel') }}
                    </span>
                </a>
                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center gap-6 ml-6">
                    <a href="" class="text-gray-700 dark:text-gray-300 hover:underline">Profile</a>
                    <a href="" class="text-gray-700 dark:text-gray-300 hover:underline">Place Order</a>
                    <a href="" class="text-gray-700 dark:text-gray-300 hover:underline">Order History</a>
                    <a href="" class="text-gray-700 dark:text-gray-300 hover:underline">Wallet</a>
                    <a href="" class="text-gray-700 dark:text-gray-300 hover:underline">Loyalty</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main class="p-6 md:p-10">
        {{ $slot }}
    </main>

    @fluxScripts
</body>

</html>
