<div class="cargo">
    <span class="material-symbols-outlined">delete</span>
    <div class="imgCargo">
        <img src="{{ asset('storage/' . $cargo->miembro->foto) }}">
    </div>
    <div class="persCargo">
        {{ $cargo->miembro->nombre . ' ' . $cargo->miembro->ap_p . ' ' . $cargo->miembro->ap_m }}
    </div>
    <div class="descCargo">
        {{ $cargo->cargo . ' ' . ($cargo->descripcion ? ' de ' . $cargo->descripcion : '') }} 
    </div>
</div>