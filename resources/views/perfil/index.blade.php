
@extends('layouts.app')


@section('titulo')

Editar Perfil: {{ auth()->user()->username }}

@endsection






@section('contenido')

 <div class="md:flex md:justify-center">
    <div class="md:w-1/2 bg-white shadow p-6">
        <form action="{{route('perfil.store')}}" class="mt-10 md:mt-0" enctype="multipart/form-data" method="POST">
           @csrf

            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                    username
                </label>

                <input type="text" name="username" id="username" placeholder="Nombre de Usuario" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                 value="{{ auth()->user()->username }}" >

                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm  p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>

                <input type="email" name="email" id="email" placeholder="Tu Correo" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                 value="{{ auth()->user()->email }}" >

                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm  p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">
                    Imagen Perfil
                </label>

                <input type="file" name="imagen" id="imagen"  class="border p-3 w-full rounded-lg"
                 value=""
                 accept=".jpeg, .png, .jpg">


            </div>

            <input type="submit" value="Guardar Cambios" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white  rounded-lg">

        </form>

    </div>

 </div>

@endsection
