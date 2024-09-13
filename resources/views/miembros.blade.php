<!DOCTYPE html>
<html lang="es">
<head>
    <title>Miembros</title>
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleMiembros.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <x-navBar>
    </x-navBar>
    <div class="filtros">
        <div id="w-filtros" class="bg-filtros">
            <div class="cont-filtros">
                <div class="close-button">
                    <div id="btn-cerrar" class="btn-close">
                        <span class="material-symbols-outlined">close</span>
                    </div>
                </div>
                <div class="title">
                    Filtros
                </div>
                <form>
                    <div class="filter-content">
                        <div class="filter-column">
                            <div class="item-title">
                                Categoría
                            </div>
                            <div class="item-option">
                                <input id="cat-0" type="checkbox" checked>
                                <a>Todos</a>
                            </div>
                            <div class="item-option">
                                <input id="cat-1" type="checkbox">
                                <a>Oficiales</a>
                            </div>
                            <div class="item-option">
                                <input id="cat-2" type="checkbox">
                                <a>Jun Tai In</a>
                            </div>
                            <div class="item-option">
                                <input id="cat-3" type="checkbox">
                                <a>Shonembu</a>
                            </div>
                        </div>
                        <div class="filter-column">
                            <div class="item-title">
                                Módulo
                            </div>
                            <div class="item-option">
                                <input id="mod-0" type="checkbox" checked>
                                <a>Todos</a>
                            </div>
                            <div class="item-option">
                                <input id="mod-1" type="checkbox">
                                <a>Módulo 1</a>
                            </div>
                            <div class="item-option">
                                <input id="mod-2" type="checkbox">
                                <a>Módulo 2</a>
                            </div>
                            <div class="item-option">
                                <input id="mod-3" type="checkbox">
                                <a>Plus</a>
                            </div>
                            <div class="item-option">
                                <input id="mod-4" type="checkbox">
                                <a>Ninguno</a>
                            </div>
                        </div>
                        <div class="filter-column">
                            <div class="item-title">
                                Seminario
                            </div>
                            <div class="item-option">
                                <input id="sem-0" type="checkbox" checked>
                                <a>Todos</a>
                            </div>
                            <div class="item-option">
                                <input id="sem-1" type="checkbox">
                                <a>Inicial</a>
                            </div>
                            <div class="item-option">
                                <input id="sem-2" type="checkbox">
                                <a>Intermedio</a>
                            </div>
                            <div class="item-option">
                                <input id="sem-3" type="checkbox">
                                <a>Superior</a>
                            </div>
                        </div>
                        <div class="filter-column">
                            <div class="item-title">
                                Local
                            </div>
                            <div class="item-option">
                                <input id="loc-0" type="checkbox" checked>
                                <a>Todos</a>
                            </div>
                            <div class="item-option">
                                <input id="loc-1" type="checkbox">
                                <a>Chiclayo</a>
                            </div>
                            <div class="item-option">
                                <input id="loc-2" type="checkbox">
                                <a>Piura</a>
                            </div>
                            <div class="item-option">
                                <input id="loc-3" type="checkbox">
                                <a>Jaén</a>
                            </div>
                            <div class="item-option">
                                <input id="loc-4" type="checkbox">
                                <a>Chachapoyas</a>
                            </div>
                        </div>
                        <div class="filter-column">
                            <div class="item-title">
                                Género
                            </div>
                            <div class="item-option">
                                <input id="gen-0" type="checkbox" checked>
                                <a>Todos</a>
                            </div>
                            <div class="item-option">
                                <input id="gen-1" type="checkbox">
                                <a>Masculino</a>
                            </div>
                            <div class="item-option">
                                <input id="gen-2" type="checkbox">
                                <a>Femenino</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <div class="title">
            Listado de Miembros
        </div>
        <form>
            <div class="searcher">
                <div id="filtros" class="search-button">
                    <span class="material-symbols-outlined">filter_alt</span>
                    <div class="button-text">Filtros</div>
                </div>
                <div class="filter">
                    Nombre:
                    <input id="nombre" type="text">
                </div>
                <div onclick="SubmitEvent" class="search-button">
                    <span class="material-symbols-outlined">search</span>
                    <div class="button-text">Buscar</div>
                </div>
                <div onclick="window.location.href = '{{ route('agregarMiembro') }}' " class="search-button">
                    <span class="material-symbols-outlined">add</span>
                    <div class="button-text">Agregar</div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/miembros.js') }}"></script>
</body>
</html>