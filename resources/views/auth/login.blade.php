@extends('layouts.app')

@section('title')
    Sign in to DevJobs
@endsection

@section('content')

    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border shadow-md mt-20">
                    <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                        {{ __('Login') }}
                    </div>
                    
                    <form class="py-10 px-5" action="{{ route('login')}}" method="POST">
                        @csrf 
                        
                        <div class="flex flex-wrap mb-6" >
                            <label for="email" class="block text-gray-700 text-sm mb-2"> {{ __('E-Mail Address') }}: </label>
                            <input id="email" name="email" type="text" novalidate placeholder="Your registration email" 
                                class="p-3 bg-gray-200 rounded form-input w-full
                                @error('email') border-red-500 @enderror" value={{ old('email') }}>
                                @error('email')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                        </div>                       

                        <div class="flex flex-wrap mb-6" >
                            <label for="password" class="block text-gray-700 text-sm mb-2"> {{ __('Password') }}: </label>
                            <input id="password" name="password" type="password" novalidate placeholder="Your registration password" 
                            class="p-3 bg-gray-200 rounded form-input w-full
                            @error('password') border-red-500 @enderror">
                            @error('password')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"> 
                                    <strong> {{ $message }} </strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="flex flex-wrap mb-6">
                            <input class="mr-2" type="checkbox" name="remember" id="remember"> 
                            <label for="remember" class="block text-gray-700 text-sm mb-2"> 
                                {{ __('Remember Me') }} 
                            </label>   
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" 
                                class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase">
                                 {{ __('Login') }} 
                            </button>
                            
                            @if(Route::has('password.request'))
                                <a class="text-sm text-gray-500 mt-5 text-center w-full" href="{{ route('password.request') }}" > 
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection