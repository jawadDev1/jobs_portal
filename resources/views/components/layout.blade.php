<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>first laravel WEbsite</title>
    @vite([ 'resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="h-full">

    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8"
                                src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <x-nav-link :active="request()->is('/')" href="/" 1>Home</x-nav-link>
                                <x-nav-link :active="request()->is('about')" href="/jobs">Jobs</x-nav-link>
                                <x-nav-link :active="request()->is('contact')" href="/contact">Contact</x-nav-link>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @guest
                                <x-nav-link :active="request()->is('register')" href="/register">
                                    Register
                                </x-nav-link>
                                <x-nav-link :active="request()->is('login')" href="/login">
                                    Log In
                                </x-nav-link>
                            @endguest

                            @auth
                                <form action="/logout" method="POST">
                                    @csrf
                                    <x-form-button>Logout</x-form-button>
                                </form>

                            @endauth

                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">

                    <x-nav-link href="/"
                        class=" {{ false ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  block rounded-md  px-3 py-2 text-base font-medium "
                        aria-current="page">Home

                    </x-nav-link>
                    <x-nav-link href="/about"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</x-nav-link>
                    <x-nav-link href="/contact"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</x-nav-link>
                </div>
                <div class="border-t border-gray-700 pt-4 pb-3">
                    <div class="flex items-center px-5">
                        <x-nav-link href="/register">
                            Register
                        </x-nav-link>
                        <x-nav-link href="/login">
                            Log In
                        </x-nav-link>
                    </div>

                </div>
            </div>
        </nav>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                    {{ $heading }}
                </h1>

                <a href="/jobs/create" class="px-6 py-3 border border-gray-300 rounded bg-green-50">Create</a>
            </div>
        </header>
        <main class="bg-gray-900 min-h-screen">
            <div class="mx-auto max-w-7xl  px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
