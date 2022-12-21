<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Producer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:productos.index')->only('index');
        $this->middleware('can:productos.create')->only('create','store');
        $this->middleware('can:productos.edit')->only('edit','update');
        $this->middleware('can:productos.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::simplePaginate(20);
        return view('layouts.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producers=Producer::all();
        $categories=Category::all();
        return view('layouts.products.create',compact('producers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaciones=request()->validate([
            'productor_id'=>'required',
            'categoria_id'=>'required',
            'nombre_producto'=>'required',
            'descripcion_producto'=>'required',
            'imagen_producto'=>'required',
            'cantidad_producto'=>'required',
            'precio'=>'required',
            'fecha_producto'=>'required',
            'fecha_ven_producto'=>'required',
            'estado_producto'=>'required',
        ]);
        if(isset($validaciones)){
            $Product=new Product();
            $Product->productor_id =$request->productor_id;
            $Product->categoria_id =$request->categoria_id;
            $Product->nombre_producto =$request->nombre_producto;
            $Product->descripcion_producto =$request->descripcion_producto;
           // if($request->hasFile('imagen_producto')){
           //      $Product->imagen_producto=$request->file('imagen_producto')->move('public');
           //  }
            $imagen_producto = $request->file('imagen_producto');
            $imagen_producto->move('img', $imagen_producto->getClientOriginalName());
            $Product->imagen_producto = $imagen_producto->getClientOriginalName();
            
           // $file = request()->file('imagen_producto')->store('public');                  
          //$Product->imagen_producto = $file->getClientOriginalName();
            $Product->precio = $request->precio;
            $Product->cantidad_producto =$request->cantidad_producto;
            $Product->fecha_producto =$request->fecha_producto;
            $Product->fecha_ven_producto =$request->fecha_ven_producto;
            $Product->estado_producto =$request->estado_producto;
            $Product->save();
            return redirect()->route('productos.index');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $producers=Producer::all();
        $categories=Category::all();
        $product=Product::findOrFail($id);
        return view('layouts.products.edit',compact('producers','categories'),['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $validaciones=request()->validate([
            'productor_id'=>'required',
            'categoria_id'=>'required',
            'nombre_producto'=>'required',
            'descripcion_producto'=>'required',
            'cantidad_producto'=>'required',
            'fecha_producto'=>'required',
            'fecha_ven_producto'=>'required',
            'estado_producto'=>'required',
        ]);
        if(isset($validaciones)){
            $product->productor_id =$request->productor_id;
            $product->categoria_id =$request->categoria_id;
            $product->nombre_producto =$request->nombre_producto;
            $product->descripcion_producto =$request->descripcion_producto;

            if (isset($request->imagen_producto)) {
                $image_path=public_path().'/img/'.$product->imagen_producto;
                unlink($image_path);
                $imagen_producto=$request->file('imagen_producto');
                $imagen_producto->move('img',$imagen_producto->getClientOriginalName());
                $product->imagen_producto=$imagen_producto->getClientOriginalName();
            }else{
                $product->imagen_producto = $product->imagen_producto;
            }
            $product->cantidad_producto =$request->cantidad_producto;
            $product->fecha_producto =$request->fecha_producto;
            $product->fecha_ven_producto =$request->fecha_ven_producto;
            $product->estado_producto =$request->estado_producto;
            $product->save();
            return redirect()->route('productos.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('productos.index');
    }
}
