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
        // Tráigase solamente los usuarios que tengan el campo de visible en true
        $users = User::where('visible',true)->get();

        // Hago un return de una vista (users.index) || ["users" =>$users] -> Le envío los usuarios a esa vista
        return view("users.index", ["users" => $users]);
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
        $user = new User();
        $user -> name = $request -> name;
        $user -> last_name = $request -> last_name;
        $user -> phone_number = $request -> phone_number;
        $user -> email = $request -> email;
        $user -> role_id  = $request -> role_id;
        $user -> password = bcrypt($request -> password);
        $user -> save();
        // Hago un return para que vuelva al método de index de arriba para que imprima los usuarios nuevos (todos)
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. Consultar los datos del usuario y los voy a mostrar
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Encontramos el usuario por id
        $user = User::find($id);

        // Returnamos la vista users.edit y le enviamos el usuario por id con user
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage. Donde s actuliza el campo
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user -> name = $request -> name;
        $user -> last_name = $request -> last_name;
        $user -> phone_number = $request -> phone_number;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> save();
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Encontramos el usuario por id
        $user = User::find($id);
        // Cambiamos el campo de visible a false para no mostrarlo en la tabla
        $user -> visible =  false;
        $user -> save();

        // Vuelve y muestra los usuarios
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente!');
    }
}
