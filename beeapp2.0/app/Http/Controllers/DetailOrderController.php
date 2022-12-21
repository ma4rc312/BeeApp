<?php

namespace App\Http\Controllers;

use App\Models\Detail_order;
use App\Models\Product;
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
        $detail_orders=Detail_order::simplePaginate(20);
        return view('layouts.detail_orders.index', compact('detail_orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::all();
        return view('layouts.detail_orders.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Detail_order=new Detail_order;
        $Detail_order->producto_id =$request->producto_id;
        $Detail_order->cantidad =$request->cantidad;
        $Detail_order->precio_unitario =$request->precio_unitario;
        $Detail_order->precio_total =$request->precio_total;
        $Detail_order->save();
        return redirect()->route('detallePedido.index');
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
    public function edit(Detail_order $detail_order,$id)
    {
        $products=Product::all();
        $detail_order=Detail_order::findOrFail($id);
        return view('layouts.detail_orders.edit',compact('products'),['detail_order'=>$detail_order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_order $detail_order,$id)
    {
        $detail_order=Detail_order::findOrFail($id);
        $detail_order->producto_id =$request->producto_id;
        $detail_order->cantidad =$request->cantidad;
        $detail_order->precio_unitario =$request->precio_unitario;
        $detail_order->precio_total =$request->precio_total;
        $detail_order->save();
        return redirect()->route('detallePedido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_order $detail_order,$id)
    {
        $detail_order=Detail_order::findOrFail($id);
        $detail_order->delete();
        return redirect()->route('detallePedido.index');
    }
}
