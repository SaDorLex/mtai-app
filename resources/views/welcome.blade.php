<!DOCTYPE html>
<html>

<head>
    <title>Bienvenidos</title>
    <link href="{{ asset('css/styleInicio.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="imagen">
        <div class="texto">Sistema de Gestión Para<br>Mahikari Tai - Chiclayo</div>
        <img src="{{ asset('img/Inicio.jpg') }}">
    </div>
    <div class="container">
        <div class="titulo-1">Bienvenido,<br>Encargado</div>
        <div class="titulo-2">IDENTIFÍCATE</div>
        <form action="{{ route('ingreso') }}" method="POST">
            @csrf
            <div class="input">
                <span class="material-symbols-outlined">person</span>
                <input id="email" name="email" type="text" placeholder="Usuario" required>
            </div>
            <div class="input">
                <span class="material-symbols-outlined">key</span>
                <input id="password" name="password" type="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="button">Ingresar</button>
        </form>
        <div class="subtitle">
            <a href="#">¿Olvidaste tu Contraseña?</a>
        </div>
    </div>
</body>

</html>
