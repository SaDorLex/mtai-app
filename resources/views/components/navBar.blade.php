@section('css')
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
@endsection

<div class="primaryBar">
    <div class="textPrimaryBar">
        Bienvenido, #CARGO#
    </div>
    <div class="buttons">
        <div class="configPrimaryBar">
            <span class="material-symbols-outlined">settings</span>
        </div>
        <div class="closeSesionPrimaryBar">
            <button onclick="window.location.href = '{{ route('logout') }}' " type="submit">Cerrar Sesión</button>
        </div>
    </div>
</div>
<div class="navBar">
    <div class="navBarButtons">
        <div class="barButton" onclick="window.location.href = '{{ route('dashboard') }}' "> 
            <span class="material-symbols-outlined">home</span>
            <a>Inicio</a>
        </div>
        <div class="barButton" onclick="window.location.href = '{{ route('miembros') }}' ">
            <span class="material-symbols-outlined">boy</span>
            <a>Miembros</a>
        </div>
        <div class="barButton menu">
            <span class="material-symbols-outlined">flag</span>
            <a>Reportes</a>
            <ul>
                <li>
                    <div class="barButton desplegable" onclick="window.location.href = '{{ route('reportesDiarios') }}' ">
                        <span class="material-symbols-outlined">done_outline</span>
                        <a>Reportes Diarios</a>
                    </div>
                </li>
                <li>
                    <div class="barButton desplegable">
                        <span class="material-symbols-outlined">checklist</span>
                        <a>Reportes Semanales</a>
                    </div>
                </li>
                <li>
                    <div class="barButton desplegable" onclick="window.location.href = '{{ route('reportesMensuales') }}' ">
                        <span class="material-symbols-outlined">calendar_today</span>
                        <a>Reportes Mensuales</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="barButton" onclick="window.location.href = '{{ route('cargos') }}' ">
            <span class="material-symbols-outlined">supervisor_account</span>
            <a>Cargos</a>
        </div>
    </div>
</div>