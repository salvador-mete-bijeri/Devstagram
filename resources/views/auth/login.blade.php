@extends('layouts.app')


@section('titulo')
Inicia Sesion en Devstagram
@endsection


@section('contenido')

<div class="md:flex md:justify-center  md:gap-10 md:items-center  " >

    <div class="md:w-6/12 "p-5>
       <img src="{{asset('img/login.jpg')}}" alt="Imagen de login de usuarios">

    </div>

    <div class="md:w-6/12 bg-white rounded-lg shadow-xl p-6">
       <form method="POST" action="{{ROUTE('login')}}" novalidate>

        @csrf


        @if (session('mensaje'))
        <p class="bg-red-500 text-white my-2 rounded-lg text-sm  p-2 text-center">{{ session('mensaje') }}</p>
        @endif
        <div class="mb-5">
            <label for="email"  class="mb-2 block uppercase text-gray-500 font-bold">
               Email
            </label>

            <input type="email" name="email" id="email" placeholder="Tu Email" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"  value="{{ old('email')}}">
            @error('email')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm  p-2 text-center">{{$message}}</p>
        @enderror
        </div>

        <div class="mb-5">
            <label for="password"  class="mb-2 block uppercase text-gray-500 font-bold">
               Password
            </label>

            <input type="password" name="password" id="password" placeholder="Tu Password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
            @error('password')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm  p-2 text-center">{{$message}}</p>
        @enderror
        </div>

        <div class="mb-5">
            <input type="checkbox" name="remember" id=""><label for=""  class=" text-gray-500 text-sm" >Mantener mi Sesion Abierta</label>
        </div>

        <input type="submit" value="Iniciar Sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white  rounded-lg">
       </form>

    </div>

</div>

@endsection
