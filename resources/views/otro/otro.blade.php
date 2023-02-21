@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">

<x-flash/>
<!--Codigo php en Blade-->
@php

//print_r($datos);

@endphp
<!--Fin codigo php en Blade-->





</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->