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
        <div class="contCargos">
            <div class="cargo">
                <div class="cargoImg">
                    <img src="{{ asset('img/Sample_User_Icon.png') }}">
                </div>
                <div class="cargoInfo">
                    <div class="cargoTitle">
                        Taicho
                    </div>
                    <div class="cargoName">
                        Nombre
                    </div>
                </div>
            </div>
        </div>
        <div class="contCargos">
            <div class="cargo">
                <div class="cargoImg">
                    <img src="{{ asset('img/Sample_User_Icon.png') }}">
                </div>
                <div class="cargoInfo">
                    <div class="cargoTitle">
                        Fukutaicho
                    </div>
                    <div class="cargoName">
                        Nombre
                    </div>
                </div>
            </div>
            <div class="cargo">
                <div class="cargoImg">
                    <img src="{{ asset('img/Sample_User_Icon.png') }}">
                </div>
                <div class="cargoInfo">
                    <div class="cargoTitle">
                        Fukutaicho
                    </div>
                    <div class="cargoName">
                        Nombre
                    </div>
                </div>
            </div>
            <div class="cargo">
                <div class="cargoImg">
                    <img src="{{ asset('img/Sample_User_Icon.png') }}">
                </div>
                <div class="cargoInfo">
                    <div class="cargoTitle">
                        Fukutaicho
                    </div>
                    <div class="cargoName">
                        Nombre
                    </div>
                </div>
            </div>
            <div class="cargo">
                <div class="cargoImg">
                    <img src="{{ asset('img/Sample_User_Icon.png') }}">
                </div>
                <div class="cargoInfo">
                    <div class="cargoTitle">
                        Fukutaicho
                    </div>
                    <div class="cargoName">
                        Nombre
                    </div>
                </div>
            </div>
        </div>
        <script src="cargos.js"></script>
    </body>
</html>