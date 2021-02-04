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
        try{
            return view('clientes.create');
        }catch (\Exception $e){
            flash('Não foi possivel acessar o cadastro de clientes. Por favor, tente mais tarde');
            return redirect()->route('index');

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request){
        try{
            $data = $request->all();

            $cliente = \App\Models\Cliente::create($data);

            flash('Cliente adicionado com Sucesso')->success();
            return redirect()->route('index');
        }catch (\Exception $e) {

            flash('Não foi possivel adicionar este cliente. Por favor, tente mais tarde');
            return redirect()->route('index');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente){
        try{
            $cliente = $this->cliente->findOrFail($cliente);

            return view('clientes.edit', compact('cliente'));
        }catch (\Exception $e) {
            flash('Cliente não localizado');
            return redirect()->route('index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $cliente){
        try{
            $data = $request->all();

            $cliente = $this->cliente->find($cliente);
            $cliente->update($data);

            flash('Cliente atualizada com Sucesso')->success();
            return redirect()->route('index');
        }catch (\Exception $e){
            flash('Não foi possivel cadastrar. Por favor, tente mais tarde');
            return redirect()->route('index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente){
        try{
            $cliente = $this->cliente->find($cliente);
            $cliente->delete();

            flash('Cliente removido com Sucesso')->success();
            return redirect()->route('index');
        }catch (\Exception $e){
            flash('Não foi possivel remover este cliente. Por favor, tente mais tarde');
            return redirect()->route('index');
        }
    }
}
