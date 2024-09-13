<div class="btnReportes" >
            <div class="buttonReporte" onclick="window.location.href = '{{ route('reportesDiarios') }}' ">
                <span class="material-symbols-outlined">done_outline</span>
                <a>Reportes Diarios</a>
            </div>
            <div class="buttonReporte">
                <span class="material-symbols-outlined">checklist</span>
                <a>Reportes Semanales</a>
            </div>
            <div class="buttonReporte" onclick="window.location.href = '{{ route('reportesMensuales') }}' ">
                <span class="material-symbols-outlined">calendar_today</span>
                <a>Reportes Mensuales</a>
            </div>
</div>