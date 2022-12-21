<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProducerController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:productores.index')->only('index');
        $this->middleware('can:productores.create')->only('create','store');
        $this->middleware('can:productores.edit')->only('edit','update');
        $this->middleware('can:productores.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producers=Producer::simplePaginate(20);
        return view('layouts.producers.index', compact('producers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.producers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Producer=new Producer();
        $Producer->nombre_prod =$request->nombre_prod;
        $Producer->apellido_prod =$request->apellido_prod;
        $Producer->cedula_prod =$request->cedula_prod;
        $Producer->identificacion_comercial =$request->identificacion_comercial;
        $Producer->razon_social =$request->razon_social;
        $Producer->email_prod =$request->email_prod;
        $Producer->password =$request->password;
        $Producer->telefono_prod =$request->telefono_prod;
        $Producer->direccion =$request->direccion;
        $Producer->save();
        return redirect()->route('productores.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function edit(Producer $producer,$id)
    {
        $producer=Producer::findOrFail($id);
        return view('layouts.producers.edit',['producer'=>$producer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producer $producer,$id)
    {
        $producer=Producer::findOrFail($id);
        $producer->identificacion_comercial =$request->identificacion_comercial;
        $producer->razon_social =$request->razon_social;
        $producer->email_prod =$request->email_prod;
        $producer->password =$request->password;
        $producer->telefono_prod =$request->telefono_prod;
        $producer->direccion =$request->direccion;
        $producer->save();
        return redirect()->route('productores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producer $producer,$id)
    {
        $producer=Producer::findOrFail($id);
        $producer->delete();
        return redirect()->route('productores.index');
    }
}
