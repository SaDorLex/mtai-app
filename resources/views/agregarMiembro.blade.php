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
    <x-navBar>
    </x-navBar>
    <div class="contenedor">
        <div class="titulo">
            Registrar Nuevo Mahikari-Tai
        </div>
        <form>
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
                        <input placeholder="Nombres" required>
                        <input placeholder="Apellido Paterno" required>
                        <input placeholder="Apellido Materno" required>
                    </div>
                    <div class="datos-row">
                        <input placeholder="DNI" required>
                        <input placeholder="Teléfono" required>
                    </div>
                    <div class="datos-row">
                        <input type="number" placeholder="Edad" required>
                        <input type="email" placeholder="Correo" required>
                    </div>
                    <div class="datos-row combo-boxes">
                        <select required>
                            <option disabled selected hidden>Categoría</option>
                            <option>Oficiales</option>
                            <option>Jun Tai In</option>
                            <option>Shonembu</option>
                        </select>
                        <select required>
                            <option disabled selected hidden>Género</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                        <select required>
                            <option disabled selected hidden>Seminario</option>
                            <option>Inicial</option>
                            <option>Intermedio</option>
                            <option>Superior</option>
                        </select>
                    </div>
                    <div class="datos-row combo-boxes">
                        <select required>
                            <option disabled selected hidden>Módulo</option>
                            <option>Ninguno</option>
                            <option>Módulo 1</option>
                            <option>Módulo 2</option>
                            <option>Módulo Plus</option>
                        </select>
                        <select required>
                            <option disabled selected hidden>Local</option>
                            <option>Chiclayo</option>
                            <option>Piura</option>
                            <option>Jaén</option>
                            <option>Chachapoyas</option>
                        </select>
                    </div>
                    <div class="datos-row dates">
                        <p>Fecha de Nacimiento:</p>
                        <input type="date" required>
                        <p>Ondas Divinas:</p>
                        <input type="month" required>
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