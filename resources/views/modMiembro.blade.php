<!DOCTYPE html>
<html>
<head>
    <title>Actualización de Datos</title>
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleRegistroMiembro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cropper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <x-navBar>
    </x-navBar>
    <div class="contenedor">
        <div class="titulo">
            Actualización de Datos
        </div>
        <form action="{{ route('actMiembro') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="formulario">
                <div class="form-img">
                    <div class="container">
                        <div class="group">
                            <img src="{{ asset('storage/' . $miembro->foto) }}" class="crop-image" id="crop-image">
                        </div>
                    </div>
                </div>
                <div class="form-datos">
                    <div class="datos-row">
                        <input name="id" style="display:none" value="{{ $miembro->id }}">
                        <input name="nombre" placeholder="Nombres" value="{{ $miembro->nombre }}" required>
                        <input name="ap_p" placeholder="Apellido Paterno" value="{{ $miembro->ap_p }}" required>
                        <input name="ap_m" placeholder="Apellido Materno" value="{{ $miembro->ap_m }}" required>
                    </div>
                    <div class="datos-row">
                        <input name="dni" placeholder="DNI" value="{{ $miembro->dni }}" required>
                        <input name="telefono" placeholder="Teléfono" value="{{ $miembro->telefono }}" required>
                    </div>
                    <div class="datos-row">
                        <input name="edad" type="number" placeholder="Edad" value="{{ $miembro->edad }}" required>
                        <input name="correo" type="email" placeholder="Correo" value="{{ $miembro->correo }}" required>
                    </div>
                    <div class="datos-row combo-boxes">
                        <select name="categoria" required>
                            <option value="Oficiales" {{ old('genero', $miembro->categoria) == 'Oficiales' ? 'selected' : '' }}>Oficiales</option>
                            <option value="Jun Tai In" {{ old('genero', $miembro->categoria) == 'Jun Tai In' ? 'selected' : '' }}>Jun Tai In</option>
                            <option value="Shonembu" {{ old('genero', $miembro->categoria) == 'Shonembu' ? 'selected' : '' }}>Shonembu</option>
                        </select>
                        <select name="genero" required>
                            <option value="M" {{ old('genero', $miembro->genero) == 'M' ? 'selected' : '' }}>Masculino</option>
                            <option value="F" {{ old('genero', $miembro->genero) == 'F' ? 'selected' : '' }}>Femenino</option>
                        </select>
                        <select name="seminario" required>
                            <option value="Inicial" {{ old('genero', $miembro->seminario) == 'Incial' ? 'selected' : '' }}>Inicial</option>
                            <option value="Intermedio" {{ old('genero', $miembro->seminario) == 'Intermedio' ? 'selected' : '' }}>Intermedio</option>
                            <option value="Superior" {{ old('genero', $miembro->seminario) == 'Superior' ? 'selected' : '' }}>Superior</option>
                        </select>
                    </div>
                    <div class="datos-row combo-boxes">
                        <select name="modulo" required>
                            <option value="Ninguno" {{ old('genero', $miembro->modulo) == 'Ninguno' ? 'selected' : '' }}>Ninguno</option>
                            <option value="Módulo 1" {{ old('genero', $miembro->modulo) == 'Módulo 1' ? 'selected' : '' }}>Módulo 1</option>
                            <option value="Módulo 2" {{ old('genero', $miembro->modulo) == 'Módulo 2' ? 'selected' : '' }}>Módulo 2</option>
                            <option value="Módulo Plus" {{ old('genero', $miembro->modulo) == 'Módulo Plus' ? 'selected' : '' }}>Módulo Plus</option>
                        </select>
                        <select name="local" required>
                            <option value="Chiclayo" {{ old('genero', $miembro->local) == 'Chiclayo' ? 'selected' : '' }}>Chiclayo</option>
                            <option value="Piura" {{ old('genero', $miembro->local) == 'Piura' ? 'selected' : '' }}>Piura</option>
                            <option value="Jaén" {{ old('genero', $miembro->local) == 'Jaén' ? 'selected' : '' }}>Jaén</option>
                            <option value="Chachapoyas" {{ old('genero', $miembro->local) == 'Chachapoyas' ? 'selected' : '' }}>Chachapoyas</option>
                        </select>
                    </div>
                    <div class="datos-row dates">
                        <p>Fecha de Nacimiento:</p>
                        <input name="fecha_nac" type="date" value="{{ $miembro->fecha_nac }}" required>
                        <p>Ondas Divinas:</p>
                        <input name="ondas_d" type="month" value="{{ $miembro->ondas_d }}" required>
                    </div>
                    <div class="datos-row">
                        <input type="file" accept=".jpg, .png, .jpeg" name="input-file" id="input-file">
                        <div class="custom-button" id="custom-button">Seleccionar Archivo</div>
                    </div>
                    <div class="datos-row">
                        <button type="submit" class="btn-registrar">Actualizar</button>
                        <button type="button" onclick="window.location.href = '{{ route('miembros') }}' " class="btn-cancelar">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <p>RECORTA LA FOTO</p>
            </div>
            <div class="modal-body">
                <div class="content-imagen-cropper">
                    <img src="" alt="" class="img-cropper" id="img-cropper">
                </div>
                <div class="content-imagen-sample">
                    <div src="" alt="" class="img-sample" id="img-croppered"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn primary" id="cut">Recortar</button>
                <button class="btn secundary" id="close">Cancelar</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/FormularioRegistro.js') }}"></script>
    <script src="{{ asset('js/cropper.js') }}"></script>
</body>
</html>