<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>DevJobs - @yield('titulo') </title>     
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
        <script src="{{ asset('js/app.js') }}" defer></script>     
    </head>

    <body class="bg-gray-200 min-h-screen leading-none">
        <div id="app">            
            <nav class="bg-gray-800 shadow-md py-2">
                <div class="flex items-center justify-around"> 
                    <a class="text-2xl text-white" href="{{ url('/') }}"> 
                        {{ config('app.name', 'DevJobs') }}
                    </a>
                            
                    <nav class="flex-1 text-right">
                        @guest
                            <a href="{{ route('login') }}" class="text-white no-underline hover:underline hover:text-gray-300 p-3">
                                {{ __('Login') }}
                            </a>
                           
                                <a href="{{ route('register') }}" class="text-white no-underline hover:underline hover:text-gray-300 p-3">
                                    {{ __('Register') }}
                                </a>
                           
                        @else
                            <span class="text-gray-300 text-sm pr-4"> {{ auth()->user()->name }} </span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-white no-underline hover:underline hover:text-gray-300 p-3" > Logout </button>
                            </form>
                           
                        @endguest
                    </div>
                </nav>
                
                      
        </div>

        <div class="bg-gray-700">
            <nav class="container mx-auto flex space-x-1 "> 
                @yield('navegation')
            </nav>
        </div>

        <main class="py-4">
            @yield('content')

        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
            DevStagram - All rights reserved 
            {{ now()->year }}
        </footer>
    </body>
</html>
