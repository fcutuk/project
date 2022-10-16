<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracast Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-background text-gray-900 text-sm border-gray">
<header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
    <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
    <div class="flex items-center mt-2 md:mt-0">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <div class="flex items-center space-x-4">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                {{ __('Log out') }}
                            </a>
                        </form>

                        <livewire:comment-notifications />
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        @auth
            <a href="#">
                <img src="{{ auth()->user()->getAvatar() }}" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        @endauth
    </div>
</header>

<main class="container mx-auto max-w-custom flex border-gray">

    <div class="w-70 mr-5">
        <div class="bg-white border-2 border-blue rounded-xl mt-16">
            <div class="text-center px-6 py-2 pt-6">
                <h3 class="font-semibold text-base">Add and idea</h3>
                <p class="text-xs mt-4">Please let us know what you would like and we'll take a look over!</p>
            </div>

            <form action="#" method="POST" class="space-y-4 px-4 py-2">
                <input type="text" class="w-full bg-gray border-none text-sm rounded-xl mt-2 placeholder-gray-200 px-4 py-2" placeholder="Your Idea">

                <div>
                    <select name="category_add" id="category_add" class="w-full bg-gray rounded-xl text-sm border-none px-4 py-2">
                        <option value="Category One" >Category One</option>
                        <option value="Category Two">Category Two</option>
                        <option value="Category Three">Category Three</option>
                        <option value="Category Four">Category Four</option>
                    </select>
                </div>
                <textarea name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray rounded-xl placeholder-gray-200 text-sm px-4 py-2  border-none" placeholder="Describe your idea"></textarea>
                <div class="flex items-center justify-between space-x-3">
                    <button
                        type="button"
                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray font-semibold rounded-xl ">


                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="w-175">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas(87)</a> </li>
                <li><a href="#" class="text-gray transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (6)</a> </li>
                <li><a href="#" class="text-gray transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In progress(1)</a> </li>
            </ul>

            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="text-gray transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented(10)</a> </li>
                <li><a href="#" class="text-gray transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed(55)</a> </li>
            </ul>

        </nav>
        <div class="mt-8">
            {{$slot}}
        </div>
    </div>
</main>
<livewire:scripts />
</body>
</html>
