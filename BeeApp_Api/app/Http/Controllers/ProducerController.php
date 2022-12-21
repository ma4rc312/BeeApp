<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producers = Producer::all();

        return response()->json([
            'message' => 'success',
            'info' => 'Listado de apicultores',
            'producto' => $producers,

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
       $validaciones =  request()->validate([
        'nombre_prod' => 'required',
        'apellido_prod'  => 'required',
        'cedula_prod' => 'required',
        'identificacion_comercial' => 'required',
        'razon_social'  => 'required',
        'email_prod'  => 'required',
        //'password ' => 'required|min:6',
        'telefono_prod' => 'required',
        //'direccion ' => 'required',
]);
    if (isset($validaciones)) {

        $producer =  new Producer() ;
        $producer -> nombre_prod = $request -> nombre_prod;
        $producer -> apellido_prod = $request -> apellido_prod;
        $producer -> cedula_prod = $request -> cedula_prod;
        $producer -> identificacion_comercial = $request -> identificacion_comercial;
        $producer -> razon_social = $request -> razon_social;
        $producer -> email_prod = $request -> email_prod;
        $producer -> password = $request -> password;
        $producer -> telefono_prod= $request -> telefono_prod;
        $producer -> direccion = $request -> direccion;
        $producer -> save();

        return response()->json([
            'message' => 'success',
            'info' => 'Apicultor registrado exitosamnete',
            'productor' => $producer,
        ],201);
        
    }else {
       return response()->json([
        'message' => 'Error',
        'info' => 'Complete todos los campos',
       ]);
    }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function show(Producer $producer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function edit(Producer $producer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producer = Producer::find($id);
        $producer -> nombre_prod = $request -> nombre_prod;
        $producer -> apellido_prod = $request -> apellido_prod;
        $producer -> cedula_prod = $request -> cedula_prod;
        $producer -> identificacion_comercial = $request -> identificacion_comercial;
        $producer -> razon_social = $request -> razon_social;
        $producer -> email_prod = $request -> email_prod;
        $producer -> password = $request -> password;
        $producer -> telefono_prod= $request -> telefono_prod;
        $producer -> direccion = $request -> direccion;
        $producer -> save();

        return response()->json([
            'message' => 'success',
            'info' => 'Datos del apicultor actualizados',
            'productor' => $producer,
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producer $producer)
    {
        $producer->delete();

        return response()->json([
            'success' => true,
            'messaje'=> 'Datos del apicultor eliminados',
        ],200);
    }
}
