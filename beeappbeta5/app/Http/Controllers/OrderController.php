<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Detail_order;
use App\Models\Client;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::simplePaginate(20);
        return view('layouts.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detail_orders=Detail_order::all();
        $clients=Client::all();
        return view('layouts.orders.create',compact('detail_orders','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Order=new Order;
        $Order->usuario_id =$request->usuario_id;
        $Order->detalle_pedido_id =$request->detalle_pedido_id;
        $Order->fecha_pedido =$request->fecha_pedido;
        $Order->estado_pedido =$request->estado_pedido;
        $Order->valor_total =$request->valor_total;
        $Order->save();
        return redirect()->route('pedido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order,$id)
    {
        $detail_orders=Detail_order::all();
        $clients=Client::all();
        $order=Order::findOrFail($id);
        return view('layouts.orders.edit',compact('detail_orders','clients'),['order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order,$id)
    {
        $order=Order::findOrFail($id);
        $order->usuario_id =$request->usuario_id;
        $order->detalle_pedido_id =$request->detalle_pedido_id;
        $order->fecha_pedido =$request->fecha_pedido;
        $order->estado_pedido =$request->estado_pedido;
        $order->valor_total =$request->valor_total;
        $order->save();
        return redirect()->route('pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order,$id)
    {
        $order=Order::findOrFail($id);
        $order->delete();
        return redirect()->route('pedido.index');
    }
}
