@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">
<h3> <small style="font-size: 12px;">login_middleware.blade.php</small></h3>

<!--Codigo php en Blade-->
@php

//print_r($datos);

@endphp
<!--Fin codigo php en Blade-->

<h2>No tienes permiso para entrar en esta página</h2>




</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->