@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 roundend-lg shadow-lg">

    <h1 class="text-3xl text-center pt-23 font-bold">Registro</h1>

    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" name="name" id="name" required>

        @error('email')
        <p class="border border-red-500 rounded-md bg-red-500 w-full text-white-600 p-2 my-2">* Error</p>
        @enderror

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Apellido" name="surname" id="surname">


        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" name="email" id="email" required>

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" name="password" id="password" required>

       <!--  <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password_confirmation" name="password_confirmation" id="password_confirmation"> -->

        @error('password')
        <p class="border border-red-500 rounded-md bg-red-500 w-full text-white-600 p-2 my-2">* Error</p>
        @enderror

        <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Telefono" name="phone" id="telefono">

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Pais" name="country" id="pais">

        <!--<p class="border border-red-500 rounded-md bg-red-500 w-full text-white-600 p-2 my-2">* Error</p>-->

        <button type="submit" class="rounded-md bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-600">Enviar</button>

    </form>

</div>

@endsection