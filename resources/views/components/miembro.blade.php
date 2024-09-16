<div class="miembro">
        <div class="etqMiembro">
            <div class="nameMiembro">
                {{ $miembro->ap_p . ' ' . $miembro->ap_m . ' ' . $miembro->nombre }}
            </div>
            <div id="button-desplegar" class="btnMiembro">
                <span id="arrow_down" class="material-symbols-outlined">arrow_drop_down</span>
            </div>
        </div>
        <div class="infoMiembro">
            <div class="imgMiembro">
                <img src="{{ asset('storage/' . $miembro->foto) }}">
            </div>
            <div class="datosMiembro">
                <div class="datosRow">
                    <div class="dato">
                        <a class="bold">Edad:</a>
                        <a>{{ $miembro->edad }}</a>
                    </div>
                    <div class="dato">
                        <a class="bold">DNI:</a>
                        <a>{{ $miembro->dni }}</a>
                    </div>
                </div>
                <div class="datosRow">
                    <div class="dato">
                        <a class="bold">Local:</a>
                        <a>{{ $miembro->local }}</a>
                    </div>
                    <div class="dato">
                        <a class="bold">Teléfono:</a>
                        <a>{{ $miembro->telefono }}</a>
                    </div>
                </div>
                <div class="datosRow">
                    <div>
                        <a class="bold">Correo:</a>
                        <a>{{ $miembro->correo }}</a>
                    </div>
                </div>
                <div class="datosRow">
                    <div class="dato">
                        <a class="bold">Género:</a>
                        <a>{{ $miembro->genero }}</a>
                    </div>
                    <div class="dato">
                        <a class="bold">Categoría:</a>
                        <a>{{ $miembro->categoria }}</a>
                    </div>
                </div>
                <div class="datosRow">
                    <div class="dato">
                        <a class="bold">Módulo:</a>
                        <a>{{ $miembro->modulo }}</a>
                    </div>
                    <div class="dato">
                        <a class="bold">Seminario:</a>
                        <a>{{ $miembro->seminario }}</a>
                    </div>
                </div>
                <div class="datosRow">
                    <div>
                        <a class="bold">Ondas Divinas:</a>
                        <a>{{ $miembro->ondas_d }}</a>
                    </div>
                </div>
                <div class="datosRow">
                    <div class="dato">
                        <a class="bold">Usuario:</a>
                        <a>{{ $miembro->usuario }}</a>
                    </div>
                </div>
                <div class="buttonRow">
                    <div class="btnModificar">
                        Modificar
                    </div>
                    <div class="btnEliminar">
                        Eliminar
                    </div>
                </div>
            </div>
        </div>
    </div>