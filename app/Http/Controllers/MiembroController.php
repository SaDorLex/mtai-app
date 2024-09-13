<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use app\Models\Miembro;
use Exception;

class MiembroController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request -> validate([
                'nombre' => 'required|string|max:20',
                'ap_p' => 'required|string|max:20',
                'ap_m' => 'required|string|max:20',
                'edad' => 'required|integer',
                'dni' => 'required|string|max:8',
                'genero' => 'required|string',
                'local' => 'required|string',
                'telefono' => 'required|string|max:9',
                'correo' => 'required|email',
                'categoria' => 'required|string',
                'modulo' => 'required|string',
                'seminario' => 'required|string',
                'fecha_nac' => 'required|string',
                'ondas_d' => 'required|string',
                'input-file' => 'required|image|mimes:jpeg,png,jpg|max:4096',
            ]);

            if($request->hasFile('foto')){
                $file = $request->file('foto');
                $archivo = $request->input('dni');
                $fileName = $archivo . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/fotos',$fileName);

                $usuario = substr($request->input('nombre'),0,3) . $request->input('ap_p');;
                $password = Hash::make($request->input('dni'));

                Miembro::create([
                    'nombre' => $request->nombre,
                    'ap_p' => $request->ap_p,
                    'ap_m' => $request->ap_m,
                    'edad' => $request->edad,
                    'dni' => $request->dni,
                    'genero' => $request->genero,
                    'local' => $request->local,
                    'telefono' => $request->telefono,
                    'correo' => $request->correo,
                    'categoria' => $request->categoria,
                    'modulo' => $request->modulo,
                    'seminario' => $request->seminario,
                    'fecha_nac' =>$request->fecha_nac,
                    'ondas_d' => $request->ondas_d,
                    'usuario' => $usuario,
                    'password' => $password,
                    'foto' => $path,
                ]);

                return redirect()->route('miembros')->with('success', 'Miembro guardado con éxito');
            }
        } catch(Exception $e){
            return redirect()->route('agregarMiembro')->withErrors('No se pudo guardar' . $e->getMessage());
        }
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
