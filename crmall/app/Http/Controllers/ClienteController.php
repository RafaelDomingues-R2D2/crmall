<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Http;

class ClienteController extends Controller{

    private $cliente;

    public function __construct (Cliente $cliente){
        $this->cliente = $cliente;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $clientes = $this->cliente->paginate(10);

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request){
        $data = $request->all();

        $cliente = \App\Models\Cliente::create($data);

        flash('Cliente adicionado com Sucesso')->success();
        return redirect()->route('index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente){
        $cliente = $this->cliente->findOrFail($cliente);

        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $cliente){
        $data = $request->all();

        $cliente = $this->cliente->find($cliente);
        $cliente->update($data);

        flash('Cliente atualizada com Sucesso')->success();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente){
        $cliente = $this->cliente->find($cliente);
        $cliente->delete();

        flash('Cliente removido com Sucesso')->success();
        return redirect()->route('index');
    }
}
