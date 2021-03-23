<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $livros = Livro::get();
        return view('indexlivro', compact('livros'));
    }

    public function criar()
    {
        return view('novolivro');
    }

    public function salvar(Request $request)
    {
        $titulo = $request->post('titulo');
        $genero = $request->post('genero');
        $nacionalidade = $request->post('nacionalidade');
        $autor = $request->post('autor');
        $sinopse = $request->post('sinopse');


        $livro = new Livro;
        $livro->titulo = $titulo;
        $livro->genero = $genero;
        $livro->nacionalidade = $nacionalidade;
        $livro->autor = $autor;
        $livro->sinopse = $sinopse;
        
        $livro->save(); //insert

        return redirect()->to(route('livro.index'));
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
        $livro = Livro::find($id);
        $livro->delete();

        return redirect()->to(route('livro.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $livro = Livro::find($id);
        if ($livro) {
            return view('editarlivro')->with('livro', $livro);
        }else{
            return redirect(route('livro.index'))->with('alert-danger', 'Livro inexistente!');
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
        $livro = Livro::find($id);

        if ($livro) {
            $livro->update([
                'titulo' => $request->titulo,
                'genero' => $request->genero,
                'nacionalidade' => $request->nacionalidade,
                'sinopse' =>$request->sinopse,
                'autor' =>$request->autor,
            ]);
            return redirect(route('livro.index'));
        }else{
            return redirect(route('livro.index'));
        }

    }

}
