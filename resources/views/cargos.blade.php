<!DOCTYPE html>
<html>
    <head>
        <title>Cargos Actuales</title>
        <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styleCargos.css') }}" rel="stylesheet"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <x-navBar>
        </x-navBar>
        <div class="title">
            Cargos Actuales
        </div>
        <div class="btnAgregarCargo">
            Agregar Cargo
        </div>
        <div class="contCargos">
            <div class="cargo">
                <span class="material-symbols-outlined">delete</span>
                <div class="imgCargo">
                    <img src="{{ asset('img\Sample_User_Icon.png') }}">
                </div>
                <div class="persCargo">
                    Ricardo Valente Eche Espinoza
                </div>
                <div class="descCargo">
                    Taicho
                </div>
            </div>
        </div>
        <div class="contCargos">
            <div class="cargo">
                <span class="material-symbols-outlined">delete</span>
                <div class="imgCargo">
                    <img src="{{ asset('img\Sample_User_Icon.png') }}">
                </div>
                <div class="persCargo">
                    Irving Zavaleta Loja
                </div>
                <div class="descCargo">
                    Fukutaicho de Varones Oficiales
                </div>
            </div>
            <div class="cargo">
                <span class="material-symbols-outlined">delete</span>
                <div class="imgCargo">
                    <img src="{{ asset('img\Sample_User_Icon.png') }}">
                </div>
                <div class="persCargo">
                    Luz Irene Tello Delgado
                </div>
                <div class="descCargo">
                    Fukutaicho de Damas Oficiales
                </div>
            </div>
            <div class="cargo">
                <span class="material-symbols-outlined">delete</span>
                <div class="imgCargo">
                    <img src="{{ asset('img\Sample_User_Icon.png') }}">
                </div>
                <div class="persCargo">
                    Joaquin Rodrigo Tello Delgado
                </div>
                <div class="descCargo">
                    Fukutaicho de Jun Tai In y Shonembu
                </div>
            </div>
            <div class="cargo">
                <span class="material-symbols-outlined">delete</span>
                <div class="imgCargo">
                    <img src="{{ asset('img\Sample_User_Icon.png') }}">
                </div>
                <div class="persCargo">
                    Jair Jesus Rivadeneira Chinchay
                </div>
                <div class="descCargo">
                    Fukutaicho de Áreas
                </div>
            </div>
        </div>
        <script src="cargos.js"></script>
    </body>
</html>