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
                        <option value="Fukutaicho">Fukutaicho</option>
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
            @foreach($taicho as $cargo)
                <x-miembroCargo :cargo="$cargo"/>
            @endforeach
        </div>
        <div class="contCargos">
            @foreach($fukutaicho as $cargo)
                <x-miembroCargo :cargo="$cargo"/>
            @endforeach
        </div>
        <div class="contCargos">
            @foreach($shotaicho as $cargo)
                <x-miembroCargo :cargo="$cargo"/>
            @endforeach
        </div>
        <div class="contCargos">
            @foreach($fukushotaicho as $cargo)
                <x-miembroCargo :cargo="$cargo"/>
            @endforeach
        </div>
        <div class="contCargos">
            @foreach($buntaicho as $cargo)
                <x-miembroCargo :cargo="$cargo"/>
            @endforeach
        </div>
        <script>
            var buscarMiembrosURL = '{{ route('buscarMiembro') }}';
        </script>
        <script src="{{ asset('js\cargos.js') }}"></script>
    </body>
</html>