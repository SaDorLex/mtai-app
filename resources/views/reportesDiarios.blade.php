<!DOCTYPE html>
<html>
<head>
    <title>Reportes Diarios</title>
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleReporteDiario.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <x-navBar>
    </x-navBar>
    <div class="title">
        Reporte Diario
    </div>
    <form>
        <div class="searcher">
            <div class="filter">
                Categoría:
                <select id="categoria">
                    <option>Oficiales</option>
                    <option>Jun Tai In</option>
                    <option>Shonembu</option>
                </select>
            </div>
            <div class="filter">
                Dia/Fecha:
                <input id="fecha" type="date">
            </div>
            <div class="filter">
                Nombre:
                <input id="nombre" type="text">
            </div>
            <div onclick="SubmitEvent" class="search-button">
                <span class="material-symbols-outlined">search</span>
                <div class="button-text">Buscar</div>
            </div>
        </div>
    </form>
    <div class="members-list">
        <div class="list-title">
            Fecha: ##/##/####
        </div>
        <div class="list">
            <div class="content-member">
                <div class="member">
                    <div class="member-text">
                        Rodas Rosales Oscar Alexis
                    </div>
                    <div id="button-desplegar" class="member-arrow">
                        <span id="arrow" class="material-symbols-outlined">arrow_drop_down</span>
                    </div>
                </div>
                <div class="info">
                    <div class="content-row">
                        <div class="item">
                            <div class="item-text">
                                Cantidad de Okiyome Dados:
                            </div>
                            <div class="item-box">
                                <a>10</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-text">
                                Recibió Okiyome:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="item">
                            <div class="item-text">
                                Práctica de Cambio Personal:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-text">
                                Práctica de Buenas Maneras:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="item">
                            <div class="item-text">
                                Lectura de Enseñanzas:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-text">
                                Reflexión al final del Día:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-member">
                <div class="member">
                    <div class="member-text">
                        Rodas Rosales Oscar Alexis
                    </div>
                    <div id="button-desplegar" class="member-arrow">
                        <span id="arrow" class="material-symbols-outlined">arrow_drop_down</span>
                    </div>
                </div>
                <div class="info">
                    <div class="content-row">
                        <div class="item">
                            <div class="item-text">
                                Cantidad de Okiyome Dados:
                            </div>
                            <div class="item-box">
                                <a>10</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-text">
                                Recibió Okiyome:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="item">
                            <div class="item-text">
                                Práctica de Cambio Personal:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-text">
                                Práctica de Buenas Maneras:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="item">
                            <div class="item-text">
                                Lectura de Enseñanzas:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-text">
                                Reflexión al final del Día:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/Reporte.js') }}"></script>
</body>
</html>