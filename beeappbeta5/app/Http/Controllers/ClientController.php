<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

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
        $roles = Role::all();
        return view('layouts.clients.create', compact('roles'));
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
        $nombreDoc=null;
        if ($request->hasFile('nit_us')) {
            $nit_us = $request->file('nit_us');
            $nombreDoc = $nit_us->hashName();
            $nit_us->move('pdf2', $nombreDoc, 'local');
            $Client->nit_us = $nombreDoc;
        }
        $nombreDocumento=null;
        if ($request->hasFile('identificacion_us')) {
            $identificacion_us = $request->file('identificacion_us');
            $nombreDocumento = $identificacion_us->hashName();
            $identificacion_us->move('pdf', $nombreDocumento, 'local');
            $Client->identificacion_us = $nombreDocumento;
        }
        $Client->telefono_us =$request->telefono_us;
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
        $client->nit_us =$request->nit_us;
        $client->identificacion_us =$request->identificacion_us;
        $client->telefono_us =$request->telefono_us;
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
