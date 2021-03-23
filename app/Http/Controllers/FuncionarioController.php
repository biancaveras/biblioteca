<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $funcionarios = Funcionario::get();
        return view('indexfuncionario', compact('funcionarios'));
    }

    public function criar()
    {
        return view('novofuncionario');
    }

    public function salvar(Request $request)
    {
        $nome = $request->post('nome');
        $cpf = $request->post('cpf');
        $funcao = $request->post('funcao');
        $estado = $request->post('estado');
        $logradouro = $request->post('logradouro');
        $cidade = $request->post('cidade');
        $numero = $request->post('numero');
        $email = $request->post('email');
        $telefone = $request->post('telefone');

        $funcionario = new Funcionario;
        $funcionario->cpf = $cpf;
        $funcionario->funcao = $funcao;
        $funcionario->nome = $nome;
        $funcionario->numero = $numero;
        $funcionario->estado = $estado;
        $funcionario->logradouro = $logradouro;
        $funcionario->cidade = $cidade;
        $funcionario->email = $email;
        $funcionario->telefone = $telefone;
        
        $funcionario->save(); //insert

        return redirect()->to(route('funcionario.index'));
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
        $funcionario = Funcionario::find($id);
        $funcionario->delete();

        return redirect()->to(route('funcionario.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $funcionario = Funcionario::find($id);
        if ($funcionario) {
            return view('editarfuncionario')->with('funcionario', $funcionario);
        }else{
            return redirect(route('funcionario.index'))->with('alert-danger', 'Funcionário inexistente!');
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
        $funcionario = Funcionario::find($id);

        if ($funcionario) {
            $funcionario->update([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'funcao' => $request->funcao,
                'estado' =>$request->estado,
                'logradouro' =>$request->logradouro,
                'cidade' =>$request->cidade,
                'numero' =>$request->numero,
                'email' =>$request->email,
                'telefone' =>$request->telefone,
            ]);
            return redirect(route('funcionario.index'));
        }else{
            return redirect(route('funcionario.index'));
        }

    }

}
