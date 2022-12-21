<?php

namespace App\Http\Controllers;

use App\Models\Detail_order;
use Illuminate\Http\Request;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $ord = new Detail_order();
        $ord -> cantidad = $request -> cantidad;
        $ord -> precio_unitario = $request -> precio_unitario;
        $ord -> precio_total = $request -> precio_total;
        $ord -> save();

        return response()->json([
            'message' => 'success',
            'info' => 'order detail creado',
            'order_detail' => $ord,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_order $detail_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_order $detail_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_order $detail_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_order $detail_order)
    {
        //
    }
}
