@extends('templates.home')
@section('content')
    <main class="container m-auto">
        <div class="w-full h-screen flex justify-center items-center flex-col">
            <h2 class="font-semibold text-4xl">Bienvenido a Home</h2>
            <br>
            <div>
                <a class="text-blue-600 text-xl" href="{{ URL . '/login' }}">Ir a login</a>
        </div>
    </main>
@endsection
