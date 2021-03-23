<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Funcionario;
use App\Models\Emprestimo;
use App\Models\Cliente;
use Illuminate\Support\Facades\Gate;
use App\Providers\RouteServiceProvider;

class EmprestimoController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emprestimos = Emprestimo::all();

        return view('welcome')->with('emprestimos', $emprestimos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function criar()
    {   
        if(Gate::allows('super-user')){
            $funcionarios = Funcionario::all();
            $clientes = Cliente::all();
            $livros = Livro::all();
            return view('novoemprestimo')->with('funcionarios', $funcionarios)->with('clientes', $clientes)->with('livros', $livros);
        }else{
            return redirect()->to(route('emprestimo.index'));
        }
    }

    public function salvar(Request $request)
    {
        if(Gate::allows('super-user')){
            $dt_inicio = $request->post('dt_inicio');
            $dt_fim = $request->post('dt_fim');
            $cliente = $request->post('cliente');
            $funcionario = $request->post('funcionario');
            $livro = $request->post('livro');


            $emprestimo = new Emprestimo;
            $emprestimo->dt_inicio = $dt_inicio;
            $emprestimo->dt_fim = $dt_fim;
            $emprestimo->cliente_id = $cliente;
            $emprestimo->funcionario_id = $funcionario;
            $emprestimo->livro_id = $livro;

            $emprestimo->save(); //insert

            return redirect()->to(route('emprestimo.index'));
        }else{
            return redirect()->to(route('emprestimo.index'));
        }
    }

     /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
     public function excluir($id)
     {
        if(Gate::allows('super-user')){
        // delete
            $emprestimo = Emprestimo::find($id);
            $emprestimo->delete();

            return redirect()->to(route('emprestimo.index'));
        }else{
            return redirect()->to(route('emprestimo.index'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        if(Gate::allows('super-user')){
            $emprestimo = Emprestimo::find($id);
            $funcionarios = Funcionario::all();
            $clientes = Cliente::all();
            $livros = Livro::all();
            if ($emprestimo) {
                return view('editaremprestimo')->with('funcionarios', $funcionarios)->with('clientes', $clientes)->with('livros', $livros)->with('emprestimo', $emprestimo);
            }else{
                return redirect(route('emprestimo.index'))->with('alert-danger', 'Empréstimo inexistente!');
            }
        }else{
            return redirect()->to(route('emprestimo.index'));
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
        if(Gate::allows('super-user')){
            $emprestimo = Emprestimo::find($id);

            if ($emprestimo) {
                $emprestimo->update([
                    'dt_inicio' => $request->dt_inicio,
                    'dt_fim' => $request->dt_fim,
                    'cliente_id' =>$request->cliente_id,
                    'funcionario_id' =>$request->funcionario_id,
                    'livro_id' =>$request->livro_id,
                ]);
                return redirect(route('emprestimo.index'));
            }else{
                return "erro";
            }
        }else{
            return redirect()->to(route('emprestimo.index'));
        }

    }
}
