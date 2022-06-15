@extends('layouts.app');

@section('navegation')
    @include('ui.adminnav')
@endsection


@section('content')
    
    <h1 class="text-2xl text-center mt-10" > Nueva Vacante </h1>
    <form class="max-w-lg mx-auto my-10">
        @csrf

        <div class="mb-5">
            <label for="titulo" class="block text-gray-700 text-sm mb-2">Titulo Vacante </label>
            <input id="titulo" name="titulo" type="text" novalidate placeholder="" 
                class="p-3 bg-gray-200 rounded form-input w-full @error('titulo') border-red-500 @enderror" value={{ old('titulo') }}>
                
                @error('titulo')
                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm">
                        <strong> {{ $message }} </strong>
                    </span>
                @enderror

            {{ $categorias }}

            <button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 p-3 focus:outline-none 
                   focus:shadow-outline uppercase">
                   Publicar Vacante
            </button>
        </div>

    </form>
    

@endsection