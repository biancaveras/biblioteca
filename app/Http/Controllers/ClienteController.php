<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $clientes = Cliente::get();
        return view('indexcliente', compact('clientes'));
    }

    public function criar()
    {
        return view('novocliente');
    }

    public function salvar(Request $request)
    {
        $nome = $request->post('nome');
        $cpf = $request->post('cpf');
        $estado = $request->post('estado');
        $logradouro = $request->post('logradouro');
        $cidade = $request->post('cidade');
        $numero = $request->post('numero');
        $email = $request->post('email');
        $telefone = $request->post('telefone');

        $cliente = new Cliente;
        $cliente->cpf = $cpf;
        $cliente->nome = $nome;
        $cliente->numero = $numero;
        $cliente->estado = $estado;
        $cliente->logradouro = $logradouro;
        $cliente->cidade = $cidade;
        $cliente->email = $email;
        $cliente->telefone = $telefone;
        
        $cliente->save(); //insert

        return redirect()->to(route('cliente.index'));
    }

     /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function excluir($id)
    {
        // delete
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->to(route('cliente.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            return view('editarcliente')->with('cliente', $cliente);
        }else{
            return redirect(route('cliente.index'))->with('alert-danger', 'Cliente inexistente!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        if ($cliente) {
            $cliente->update([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'estado' =>$request->estado,
                'logradouro' =>$request->logradouro,
                'cidade' =>$request->cidade,
                'numero' =>$request->numero,
                'email' =>$request->email,
                'telefone' =>$request->telefone,
            ]);
            return redirect(route('cliente.index'));
        }else{
            return redirect(route('cliente.index'));
        }

    }

}
