<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //Returnamos (mostramos) los usuarios en formato JSON
        return json_encode($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Crear nuevo usuario
        $user = new User();
        $user -> name = $request -> name;
        $user -> last_name = $request -> last_name;
        $user -> document_type = $request -> document_type;
        $user -> document_number = $request -> document_number;
        $user -> address = $request -> address;
        $user -> phone_number = $request -> phone_number;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $user -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Muestra un solo usuario

        // Buscar el usuario en la base de datos
        $user = User::find($id);


        //Returnamos (mostramos) los usuarios en formato JSON
        return json_encode($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Actualizar un usuario

        // Buscar el usuario en la base de datos
        $user = User::find($id);


        $user -> name = $request -> name;
        $user -> last_name = $request -> last_name;
        $user -> document_type = $request -> document_type;
        $user -> document_number = $request -> document_number;
        $user -> address = $request -> address;
        $user -> phone_number = $request -> phone_number;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $user -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Buscar el usuario en la base de datos
        $user = User::find($id);

        // Borramos el usuario con el id
        $user -> delete();

        return 'El elemento se ha eliminado';
    }
}