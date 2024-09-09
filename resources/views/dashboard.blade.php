<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenido</title>
        <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet"> 
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <x-navBar>
        </x-navBar>
        <div class="contentStatistics">
            <div class="statistics">
                <div class="statisticsTitle">
                    <a>Miembros</a>
                </div>
                <div class="porcentajes">
                    <canvas id="myPieChart" width="300" height="300"></canvas>
                    <a>87</a>
                </div>
                <div class="colorCategoria oficiales">
                    <div class="square bg-oficiales"></div>
                    <a>Oficiales: 30</a>
                </div>
                <div class="colorCategoria jun">
                    <div class="square bg-jun"></div>
                    <a>Jun Tai In: 30</a>
                </div>
                <div class="colorCategoria shonembu">
                    <div class="square bg-shonembu"></div>
                    <a>Shonembu: 30</a>
                </div>
            </div>
            <div class="statistics">
                <div class="statisticsTitle">
                    <a>Reportes</a>
                </div>
                <div class="porcentajes">
                    <canvas id="mySecondChart" width="300" height="300"></canvas>
                    <a>50</a>
                </div>
                <div class="colorCategoria oficiales">
                    <div class="square bg-oficiales"></div>
                    <a>Oficiales: 20</a>
                </div>
                <div class="colorCategoria jun">
                    <div class="square bg-jun"></div>
                    <a>Jun Tai In: 20</a>
                </div>
                <div class="colorCategoria shonembu">
                    <div class="square bg-shonembu"></div>
                    <a>Shonembu: 10</a>
                </div>
                <div class="colorCategoria noEnviado">
                    <div class="square bg-noEnviado"></div>
                    <a>No enviados: 27</a>
                </div>
            </div>
            <div class="statistics">
                <div class="statisticsTitle">
                    <a>Mes Actual: Julio</a>
                </div>
                <div class="conteo">
                    <div>
                        Okiyomes Dados:
                    </div>
                    <div class="cantOk">
                        100
                    </div>
                </div>
                <div class="conteo">
                    <div>
                        Okiyomes Recibidos:
                    </div>
                    <div class="cantOk">
                        100
                    </div>
                </div>
                <div class="conteo">
                    Miembro Más Activo:
                </div>
                <div class="conteo">
                    Oscar Alexis Rodas Rosales
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>