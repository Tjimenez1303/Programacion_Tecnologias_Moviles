<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     * Para ver todo
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return json_encode($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     * Para crear un campo de la tabla
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product -> name = $request -> name;
        $product -> save();
    }

    /**
     * Display the specified resource.
     * Para ver un solo campo de la tabla
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return ($product);
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
     * Para actualizar un campo de la tabla
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            // Agrega aquí las reglas de validación para otros campos que desees validar
        ]);

        // Encuentra el producto que deseas actualizar
        $product = Product::findOrFail($id);

        // Actualiza los campos con los datos del formulario
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        // Actualiza otros campos según sea necesario

        // Guarda los cambios en la base de datos
        $product->save();

        // Redirecciona a la página o ruta que desees después de la actualización
        return redirect()->route('productos.index')->with('success', 'El producto ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Encuentra el producto que deseas eliminar
        $product = Product::findOrFail($id);

        // Elimina el producto de la base de datos
        $product->delete();

        // Redirecciona a la página o ruta que desees después de la eliminación
        return redirect()->route('productos.index')->with('success', 'El producto ha sido eliminado correctamente');
    }
}
