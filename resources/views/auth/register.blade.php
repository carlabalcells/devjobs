@extends('layouts.app')

@section('title')
    Sign up for DevJobs
@endsection

@section('content')
    
    <div class="container mx-auto max-w-screen-md">
        <div class="flex flex-wrap justify-center">
            <div class="md:w-1/2 order-2 md:order-1">
                <div class="w-full max-w-sm">
                    <div class="flex flex-col break-words bg-white border shadow-md mt-20">
                        <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                            {{ __('Register') }}
                        </div>
                        
                            <form class="py-10 px-5" action="{{ route('register')}}" method="POST">
                                @csrf
                                <div class="flex flex-wrap mb-6">
                                    <label for="name" class="block text-gray-700 text-sm mb-2"> {{ __('Name') }} </label>
                                    <input id="name" name="name" type="text" novalidate placeholder="Your name" 
                                        class="p-3 bg-gray-200 rounded form-input w-full @error('name') border-red-500 @enderror" value={{ old('name') }}>
                                        @error('name')
                                            <p class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"> {{ $message }} </p>
                                        @enderror
                                </div>                                
                
                                <div class="flex flex-wrap mb-6">
                                    <label for="email" class="block text-gray-700 text-sm mb-2"> {{ __('E-Mail') }} </label>
                                    <input id="email" name="email" type="text" novalidate placeholder="Your registration email" 
                                        class="p-3 bg-gray-200 rounded form-input w-full @error('email') border-red-500 @enderror" value={{ old('email') }}>
                                    @error('email')
                                        <p class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"> {{ $message }} </p>
                                    @enderror
                                </div>
                
                                <div class="flex flex-wrap mb-6">
                                    <label for="password" class="block text-gray-700 text-sm mb-2"> {{ __('Password') }} </label>
                                    <input id="password" name="password" type="password" novalidate placeholder="Your registration password" 
                                        class="p-3 bg-gray-200 rounded form-input w-full @error('password') border-red-500 @enderror">
                                    @error('password')
                                        <p class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"> {{ $message }} </p>
                                    @enderror
                                </div>
                
                                <div class="flex flex-wrap mb-6">
                                    <label for="password_confirmation" class="block text-gray-700 text-sm mb-2"> {{ __('Repeat Password') }} </label>
                                    <input id="password_confirmation" name="password_confirmation" type="password" novalidate placeholder="Repeat your password" 
                                         class="p-3 bg-gray-200 rounded form-input w-full @error('password_confirmation') border-red-500 @enderror">
                                    @error('password_confirmation')
                                        <p class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"> {{ $message }} </p>
                                    @enderror
                                </div>
                
                                <div class="flex flex-wrap">
                                    <button type="submit" 
                                        class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase">
                                         {{ __('Register') }} 
                                    </button>             
                                </div>
                
                            </form>
                        
                    </div>
                </div>
            </div>
            
            <div class="md:w-1/2 order-1 md:order-2 text-center flex flex-col justify-center px-10 mt-10">
                <h1 class="text-teal-500 text-3xl " > ¿Eres reclutador? </h1>
                <p class="text-xl mt-5 leading-7">Crea una cuenta totalmente gratis y comienza a publicar hasta 10 vacantes</p>
            </div>  
        </div>     
    </div>

@endsection