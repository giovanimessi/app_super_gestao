<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Unidade;
use  App\ProdutoDetalhe;
use Illuminate\Http\Request;
use Validator;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // dd(session()->all());
        $produtos = Produto::paginate(10);
/*
        foreach($produtos as $Key => $produto){
           
            
            $prod = ProdutoDetalhe::where('produto_id',$produto->id)->first();
        
              if(isset($prod)){
               

                $produtos[ $Key]['comprimento'] = $prod->comprimento;
                $produtos[$Key]['largura'] = $prod->largura;
                $produtos[$Key]['altura'] = $prod->altura;


              }
 
        }*/

      

        return view('app.produto.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $unidade = Unidade::all();


        return view('app.produto.create', compact('unidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        /*$produto = new Produto();
       $nome = $request->get('nome');
       $descricao = $request->get('descricao');

       $nome = strtoupper($nome);

       $produto->nome = $nome;
       $produto->descricao = $descricao;
       $produto->save();*/

        $regras = [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:200',
            'peso' => 'required|integer',
            'unidade_id' => 'required|exists:unidades,id'
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome deve ter no minimo 3 caracteres',
            'nome.max' => 'Campo nome deve ter no maxino 100 caracteres',
            'descricao.min' => 'Ocampo descricao deve ter no minimo 3 caracteres',
            'descricao.max' => 'Campo descricao deve ter no maxino 100 caracteres',
            'peso.integer'  => 'O campo peso deve ser um numero inteiro',
            'unidade_id.exists' => 'A unidade de medida informada nao existe'

        ];

        $request->validate($regras, $feedback);


        Produto::create($request->all());
        return redirect()->route('app.produtos.index')
            ->with('success', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {

        return view('app.produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
        $unidade = Unidade::all();

        return view('app.produto.editar', compact('produto', 'unidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'peso' => 'required|numeric',
            'unidade_id' => 'required|exists:unidades,id',
        ]);

        $produto->update($request->only(['nome', 'descricao', 'peso', 'unidade_id']));

        return redirect()->route('app.produtos.show', compact('produto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()
            ->route('app.produtos.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}
