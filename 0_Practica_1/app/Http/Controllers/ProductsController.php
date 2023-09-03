<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Asociamos el modelo al controlador
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Traigame todo lo de Productos
        $products = Product :: all();
        //Para ver que me está devolviendo
        return($products);
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
        //
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
     * Remove the specified resource from storage. Para borrar un registro necesito el id
     * por eso le envío el id
     */
    public function destroy(string $id)
    {
        //
    }
    /**
     * Función para enviar o crear productos a mi base de datos.
     */
    //public function store(Request $request) //Se coloca $request porque se va a enviar una solicitud
    //{
        //$producto = name = $request-> Tomas;
        //$producto = price = $request->456000;
    //}
}
