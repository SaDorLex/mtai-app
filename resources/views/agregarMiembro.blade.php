<!DOCTYPE html>
<html>
<head>
    <title>Registro de Nuevo Mahikari Tai</title>
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleRegistroMiembro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cropper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    @if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
        <strong class="font-medium">Errores:</strong>
        <ul class="list-disc pl-5 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <x-navBar>
    </x-navBar>
    <div class="contenedor">
        <div class="titulo">
            Registrar Nuevo Mahikari-Tai
        </div>
        <form action="{{ route('crearMiembro') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="formulario">
                <div class="form-img">
                    <div class="container">
                        <div class="group">
                            <img src="{{ asset('img/user.png') }}" class="crop-image" id="crop-image">
                        </div>
                    </div>
                </div>
                <div class="form-datos">
                    <div class="datos-row">
                        <input name="nombre" placeholder="Nombres" required>
                        <input name="ap_p" placeholder="Apellido Paterno" required>
                        <input name="ap_m" placeholder="Apellido Materno" required>
                    </div>
                    <div class="datos-row">
                        <input name="dni" placeholder="DNI" required>
                        <input name="telefono" placeholder="Teléfono" required>
                    </div>
                    <div class="datos-row">
                        <input name="edad" type="number" placeholder="Edad" required>
                        <input name="correo" type="email" placeholder="Correo" required>
                    </div>
                    <div class="datos-row combo-boxes">
                        <select name="categoria" required>
                            <option disabled selected hidden>Categoría</option>
                            <option value="Oficiales">Oficiales</option>
                            <option value="Jun Tai In">Jun Tai In</option>
                            <option value="Shonembu">Shonembu</option>
                        </select>
                        <select name="genero" required>
                            <option disabled selected hidden>Género</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                        <select name="seminario" required>
                            <option disabled selected hidden>Seminario</option>
                            <option value="Inicial">Inicial</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Superior">Superior</option>
                        </select>
                    </div>
                    <div class="datos-row combo-boxes">
                        <select name="modulo" required>
                            <option disabled selected hidden>Módulo</option>
                            <option value="Ninguno">Ninguno</option>
                            <option value="Módulo 1">Módulo 1</option>
                            <option value="Módulo 2">Módulo 2</option>
                            <option value="Módulo Plus">Módulo Plus</option>
                        </select>
                        <select name="local" required>
                            <option disabled selected hidden>Local</option>
                            <option value="Chiclayo">Chiclayo</option>
                            <option value="Piura">Piura</option>
                            <option value="Jaén">Jaén</option>
                            <option value="Chachapoyas">Chachapoyas</option>
                        </select>
                    </div>
                    <div class="datos-row dates">
                        <p>Fecha de Nacimiento:</p>
                        <input name="fecha_nac" type="date" required>
                        <p>Ondas Divinas:</p>
                        <input name="ondas_d" type="month" required>
                    </div>
                    <div class="datos-row">
                        <input type="file" accept=".jpg, .png, .jpeg" name="input-file" id="input-file" required>
                        <div class="custom-button" id="custom-button">Seleccionar Archivo</div>
                    </div>
                    <div class="datos-row">
                        <button type="submit" class="btn-registrar">Registrar</button>
                        <button onclick="window.location.href = '{{ route('miembros') }}' " class="btn-cancelar">Cancelar</button>
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