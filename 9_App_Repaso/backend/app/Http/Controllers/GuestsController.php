<?php

namespace App\Http\Controllers;

// Importamos el modelo Guest
use App\Models\Guest;

// Importamos Carbon para trabajar con fechas
use Carbon\Carbon;

use Illuminate\Http\Request;

class GuestsController extends Controller
{
    /**
     * Mostrar todos los invitados en la vista Home.
     */
    public function index()
    {
        // Obtener todos los invitados
        $guests = Guest::all();

        // Retornamos una vista con todos los invitados
        return view('home', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Crear un invitado.
     */
    public function store(Request $request)
    {
        // Creamos un nuevo invitado
        $guests = new Guest();

        // Obtenemos los datos del formulario
        $guests->name = $request->name;
        $guests->last_name = $request->last_name;
        $guests->age = $request->age;
        $guests->companions = $request->companions;
        $guests->hour = Carbon::now();

        // Guardamos el invitado
        $guests->save();

        // Retornamos un mensaje al Frontend
        return ('Guardado exitosamente');

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
