<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'message' => 'success',
            'info' => 'Lista de productos',
            'producto' => $products,

        ],200);
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
        $product = new Product() ;
        $product -> nombre_producto = $request -> nombre_producto;
        $product -> descripcion_producto = $request -> descripcion_producto;
        //$product -> imagen_producto = $request -> imagen_producto;
        
        $product -> cantidad_producto = $request -> cantidad_producto;
        $product -> fecha_producto = $request -> fecha_producto;
        $product -> precio = $request -> precio;
        $product -> fecha_ven_producto= $request -> fecha_ven_producto;
        $product -> estado_producto = $request -> estado_producto;
        $product -> categoria_id = $request -> categoria_id;
        //$file = $request->image->store('public/product');
        $file = $request->file('imagen_producto')->store('public/img');
        $product->imagen_producto = $file;
        $product -> save();

        return response()->json([
            'message' => 'success',
            'info'=> 'producto creado',
            'categoria' => $product,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return response()->json([
            'message' => 'success',
            'info' => 'busqueda exitosa',
            'producto_find' => $product

        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product =  Product::find($id);
        $product -> nombre_producto = $request -> nombre_producto;
        $product -> descripcion_producto = $request -> descripcion_producto;
        //$product -> imagen_producto = $request -> imagen_producto;

        $file = $request->file('image')->store('public/img');
        $product->imagen_producto = $file;

        $product -> cantidad_producto = $request -> cantidad_producto;
        $product -> fecha_producto = $request -> fecha_producto;
        $product -> precio = $request -> precio;
        $product -> fecha_ven_producto= $request -> fecha_ven_producto;
        $product -> estado_producto = $request -> estado_producto;
        $product -> categoria_id = $request -> categoria_id;
        $product -> save();

        return response()->json([
            'message' => 'success',
            'info'=> 'producto actualizado',
            'categoria' => $product,
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'success' => true,
            'messaje'=> 'producto eliminado',
        ],200);
    }
}
