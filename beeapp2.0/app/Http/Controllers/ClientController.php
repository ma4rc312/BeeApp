<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::simplePaginate(20);
        return view('layouts.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Client=new Client();
        $Client->nombres_us =$request->nombres_us;
        $Client->apellidos_us =$request->apellidos_us;
        $Client->identificacion_us =$request->identificacion_us;
        $Client->telefono_us =$request->telefono_us;
        $Client->email_us =$request->email_us;
        $Client->password_us =$request->password_us;
        $Client->Direccion =$request->Direccion;
        $Client->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client,$id)
    {
        $client=Client::findOrFail($id);
        return view('layouts.clients.edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client,$id)
    {
        $client=Client::findOrFail($id);
        $client->nombres_us =$request->nombres_us;
        $client->apellidos_us =$request->apellidos_us;
        $client->identificacion_us =$request->identificacion_us;
        $client->telefono_us =$request->telefono_us;
        $client->email_us =$request->email_us;
        $client->password_us =$request->password_us;
        $client->Direccion =$request->Direccion;
        $client->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client,$id)
    {
        $client=Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clientes.index');
    }
}
