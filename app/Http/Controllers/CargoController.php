<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use Illuminate\Support\Facades\Log;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('Ingreso a la funcion');
        
        $request->validate([
            'cargo' => 'require|string',
            'descripcion' => 'require|string',
            'id_miembro' => 'require|integer',
        ]);

        Log::info('Paso la validación');

        Cargo::create([
            'cargo' => $request->cargo,
            'descripcion' => $request->descripcion,
            'id_miembro' => $request->id_miembro,
        ]);

        Log::info('Paso la creación');

        return redirect()->route('cargos')->with('success', 'Cargo creado y asignado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
