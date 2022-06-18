<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-900 text-white">
    <nav class="container mx-auto flex items-center justify-between px-4 py-6 border-b border-gray-800">
        <div class="flex items-center">
            <a href="/"> <img src="https://internetcomputer.org/img/IC_logo_horizontal.svg"
                    class="w-60 mt-2 flex-none"></a>
            <ul class="flex ml-16 space-x-8">
                <li><a href="#" class="hover:text-gray-400">Games</a></li>
                <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
            </ul>
        </div>
        <div class="flex items-center">
            <div class="relative">
                <input type="text"
                    class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline w-64 px-3 pl-8 py-1"
                    placeholder="Search....">
                <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg class="fill-current w-4 text-gray-400" viewBox="0 0 20 20">
                        <path
                            d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </nav>
    </header>
    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered By <a class="underline hover:text-gray-400"> IntexaTech</a>
        </div>
    </footer>
</body>

</html>
