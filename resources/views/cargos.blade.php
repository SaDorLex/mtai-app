<!DOCTYPE html>
<html>
    <head>
        <title>Cargos Actuales</title>
        <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styleCargos.css') }}" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <x-navBar>
        </x-navBar>
        <div class="vntAgregarCargo hidden" id="vntAgregarCargo">
            <form id="cargosForm" action="{{ route('crearCargo') }}" method="POST">
                @csrf
                <div class="formTitle">
                    Agregar Cargo
                </div>
                <div class="formInput">
                    <select onclick="vefCargo()" id="cargo" name="cargo">
                        <option value="Taicho">Taicho</option>
                        <option value="=Fukutaicho">Fukutaicho</option>
                        <option value="Shotaicho">Shotaicho</option>
                        <option value="Fukushotaicho">Fukushotaicho</option>
                        <option value="Buntaicho">Buntaicho</option>
                    </select>
                    <input id="inputDesc" name="descripcion" type="text" placeholder="Descripción" value=" " disabled>
                </div>
                <div class="formSelectMiembro">
                    <a>Selecciona el Miembro:</a>
                    <div class="contSearch">
                        <input type="search" id="buscar">
                        <div class="suggestions" id="listaUsuarios">
                            <ul></ul>
                        </div>
                        <input type="text" id="miembroId" name="id_miembro" style="display: none" required>
                    </div>                    
                </div>
                <div class="formBtns">
                    <div class="btnAdd" onclick="enviarForm()">
                        Añadir
                    </div>
                    <div class="btnCancel" onclick="cerrarFormAgregarCargo()">
                        Cancelar
                    </div>
                </div>
            </form>
        </div>
        <div class="title">
            Cargos Actuales
        </div>
        <div onclick="formAgregarCargo()" class="btnAgregarCargo">
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
        <script>
            var buscarMiembrosURL = '{{ route('buscarMiembro') }}';
        </script>
        <script src="{{ asset('js\cargos.js') }}"></script>
    </body>
</html>