@section('css')
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
@endsection

<div class="primaryBar">
    <div class="textPrimaryBar">
        Bienvenido,
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
        <div class="barButton" onclick="window.location.href = '{{ route('reportes') }}' ">
            <span class="material-symbols-outlined">flag</span>
            <a>Reportes</a>
        </div>
        <div class="barButton" onclick="window.location.href = '{{ route('cargos') }}' ">
            <span class="material-symbols-outlined">supervisor_account</span>
            <a>Cargos</a>
        </div>
    </div>
</div>