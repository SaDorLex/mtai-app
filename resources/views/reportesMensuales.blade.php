<!DOCTYPE html>
<html>
<head>
    <title>Reportes Mensuales</title>
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleReporteMensual.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <x-navBar>
    </x-navBar>
    <div class="title">
        Reporte Mensual
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
                Mes:
                <input id="fecha" type="month">
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
            Mes de Enero
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
                                Cantidad de Okiyome Recibidos:
                            </div>
                            <div class="item-box">
                                <a>10</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="item-title">
                            Cambio Personal:
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="item">
                                <div class="item-text">
                                    Días Realizado:
                                </div>
                                <div class="item-box">
                                    <a>10</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-text">
                                    Descripción:
                                </div>
                                <div class="item-text-box">
                                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam. Morbi tincidunt augue interdum velit euismod in. Congue eu consequat ac felis donec et odio pellentesque. In mollis nunc sed id semper risus. Facilisis leo vel fringilla est ullamcorper eget nulla. Enim sit amet venenatis urna. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris a diam maecenas sed enim ut sem viverra aliquet. Cursus sit amet dictum sit amet justo donec enim diam. Et tortor at risus viverra adipiscing at in tellus integer. Vulputate odio ut enim blandit volutpat. Sit amet est placerat in egestas. Tristique senectus et netus et. Sed nisi lacus sed viverra tellus in hac habitasse. A arcu cursus vitae congue mauris rhoncus aenean vel. Velit euismod in pellentesque massa.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="item-title">
                            Buenas Maneras:
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="item">
                                <div class="item-text">
                                    Días Realizado:
                                </div>
                                <div class="item-box">
                                    <a>10</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-text">
                                    Descripción:
                                </div>
                                <div class="item-text-box">
                                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam. Morbi tincidunt augue interdum velit euismod in. Congue eu consequat ac felis donec et odio pellentesque. In mollis nunc sed id semper risus. Facilisis leo vel fringilla est ullamcorper eget nulla. Enim sit amet venenatis urna. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris a diam maecenas sed enim ut sem viverra aliquet. Cursus sit amet dictum sit amet justo donec enim diam. Et tortor at risus viverra adipiscing at in tellus integer. Vulputate odio ut enim blandit volutpat. Sit amet est placerat in egestas. Tristique senectus et netus et. Sed nisi lacus sed viverra tellus in hac habitasse. A arcu cursus vitae congue mauris rhoncus aenean vel. Velit euismod in pellentesque massa.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="item-title">
                            Lectura de Enseñanzas:
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="item">
                                <div class="item-text">
                                    Días Realizado:
                                </div>
                                <div class="item-box">
                                    <a>10</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-text">
                                    Descripción:
                                </div>
                                <div class="item-text-box">
                                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam. Morbi tincidunt augue interdum velit euismod in. Congue eu consequat ac felis donec et odio pellentesque. In mollis nunc sed id semper risus. Facilisis leo vel fringilla est ullamcorper eget nulla. Enim sit amet venenatis urna. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris a diam maecenas sed enim ut sem viverra aliquet. Cursus sit amet dictum sit amet justo donec enim diam. Et tortor at risus viverra adipiscing at in tellus integer. Vulputate odio ut enim blandit volutpat. Sit amet est placerat in egestas. Tristique senectus et netus et. Sed nisi lacus sed viverra tellus in hac habitasse. A arcu cursus vitae congue mauris rhoncus aenean vel. Velit euismod in pellentesque massa.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="item">
                            <div class="item-text">
                                Ondas Divinas:
                            </div>
                            <div class="item-box">
                                <a>Febrero</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-text">
                                Asistencia a Ceremonia:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined" style="display: none;">check</span>
                                <span class="material-symbols-outlined">close</span>
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="item-title">
                            Experiencia Mensual:
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="item" style="margin: auto; margin-top: 20px;">
                                <div class="item-text">
                                    Descripción:
                                </div>
                                <div class="item-text-box">
                                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam. Morbi tincidunt augue interdum velit euismod in. Congue eu consequat ac felis donec et odio pellentesque. In mollis nunc sed id semper risus. Facilisis leo vel fringilla est ullamcorper eget nulla. Enim sit amet venenatis urna. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris a diam maecenas sed enim ut sem viverra aliquet. Cursus sit amet dictum sit amet justo donec enim diam. Et tortor at risus viverra adipiscing at in tellus integer. Vulputate odio ut enim blandit volutpat. Sit amet est placerat in egestas. Tristique senectus et netus et. Sed nisi lacus sed viverra tellus in hac habitasse. A arcu cursus vitae congue mauris rhoncus aenean vel. Velit euismod in pellentesque massa.</a>
                                </div>
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
                                Cantidad de Okiyome Recibidos:
                            </div>
                            <div class="item-box">
                                <a>10</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="item-title">
                            Cambio Personal:
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="item">
                                <div class="item-text">
                                    Días Realizado:
                                </div>
                                <div class="item-box">
                                    <a>10</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-text">
                                    Descripción:
                                </div>
                                <div class="item-text-box">
                                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam. Morbi tincidunt augue interdum velit euismod in. Congue eu consequat ac felis donec et odio pellentesque. In mollis nunc sed id semper risus. Facilisis leo vel fringilla est ullamcorper eget nulla. Enim sit amet venenatis urna. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris a diam maecenas sed enim ut sem viverra aliquet. Cursus sit amet dictum sit amet justo donec enim diam. Et tortor at risus viverra adipiscing at in tellus integer. Vulputate odio ut enim blandit volutpat. Sit amet est placerat in egestas. Tristique senectus et netus et. Sed nisi lacus sed viverra tellus in hac habitasse. A arcu cursus vitae congue mauris rhoncus aenean vel. Velit euismod in pellentesque massa.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="item-title">
                            Buenas Maneras:
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="item">
                                <div class="item-text">
                                    Días Realizado:
                                </div>
                                <div class="item-box">
                                    <a>10</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-text">
                                    Descripción:
                                </div>
                                <div class="item-text-box">
                                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam. Morbi tincidunt augue interdum velit euismod in. Congue eu consequat ac felis donec et odio pellentesque. In mollis nunc sed id semper risus. Facilisis leo vel fringilla est ullamcorper eget nulla. Enim sit amet venenatis urna. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris a diam maecenas sed enim ut sem viverra aliquet. Cursus sit amet dictum sit amet justo donec enim diam. Et tortor at risus viverra adipiscing at in tellus integer. Vulputate odio ut enim blandit volutpat. Sit amet est placerat in egestas. Tristique senectus et netus et. Sed nisi lacus sed viverra tellus in hac habitasse. A arcu cursus vitae congue mauris rhoncus aenean vel. Velit euismod in pellentesque massa.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="item-title">
                            Lectura de Enseñanzas:
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="item">
                                <div class="item-text">
                                    Días Realizado:
                                </div>
                                <div class="item-box">
                                    <a>10</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-text">
                                    Descripción:
                                </div>
                                <div class="item-text-box">
                                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam. Morbi tincidunt augue interdum velit euismod in. Congue eu consequat ac felis donec et odio pellentesque. In mollis nunc sed id semper risus. Facilisis leo vel fringilla est ullamcorper eget nulla. Enim sit amet venenatis urna. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris a diam maecenas sed enim ut sem viverra aliquet. Cursus sit amet dictum sit amet justo donec enim diam. Et tortor at risus viverra adipiscing at in tellus integer. Vulputate odio ut enim blandit volutpat. Sit amet est placerat in egestas. Tristique senectus et netus et. Sed nisi lacus sed viverra tellus in hac habitasse. A arcu cursus vitae congue mauris rhoncus aenean vel. Velit euismod in pellentesque massa.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="item">
                            <div class="item-text">
                                Ondas Divinas:
                            </div>
                            <div class="item-box">
                                <a>Febrero</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-text">
                                Asistencia a Ceremonia:
                            </div>
                            <div class="item-box">
                                <span class="material-symbols-outlined">check</span>
                                <span class="material-symbols-outlined" style="display: none;">close</span>
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="item-title">
                            Experiencia Mensual:
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="item" style="margin: auto; margin-top: 20px;">
                                <div class="item-text">
                                    Descripción:
                                </div>
                                <div class="item-text-box">
                                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam. Morbi tincidunt augue interdum velit euismod in. Congue eu consequat ac felis donec et odio pellentesque. In mollis nunc sed id semper risus. Facilisis leo vel fringilla est ullamcorper eget nulla. Enim sit amet venenatis urna. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris a diam maecenas sed enim ut sem viverra aliquet. Cursus sit amet dictum sit amet justo donec enim diam. Et tortor at risus viverra adipiscing at in tellus integer. Vulputate odio ut enim blandit volutpat. Sit amet est placerat in egestas. Tristique senectus et netus et. Sed nisi lacus sed viverra tellus in hac habitasse. A arcu cursus vitae congue mauris rhoncus aenean vel. Velit euismod in pellentesque massa.</a>
                                </div>
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