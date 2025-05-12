<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        

        return view('app.fornecedor.index');
    }


    public function listar(Request $request)
    
    {

     
        //filtro
         $fornecedor  = Fornecedor::Where('nome','like','%'.$request->input('nome').'%')
         ->Where('site', 'like', '%'.$request->input('site').'%')
         ->Where('uf', 'like', '%'.$request->input('uf').'%')
         ->Where('email', 'like', '%'.$request->input('email').'%')->get();

          
        
        return view('app.fornecedor.listar', compact('fornecedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        $msg = '';
 
       if($request->input('_token') != ''){
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' =>  'required',
                'uf'  =>   'required|min:2|max:2',
                'email' => 'email'

            ];
            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no minimo 3 caracteres',
                'nome.max' => 'O campo nome deve no maximo  50 caracteres',
                'uf.min' => 'O campo uf deve ter no minimo 2 caracteres',
                'uf.max' => 'O campo uf deve no maximo  2 caracteres',
                'email.email' => 'O campo e-mail nao foi preenchido corretamente'
                
            ];
            $request->validate($regras,$feedback);

           $fornecedor = new Fornecedor();
           $fornecedor->create($request->all());

           $msg = "Cadastro realizado com sucesso";
        }
        
        return view('app.fornecedor.adicionar', compact('msg'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //
        $fornecedor = Fornecedor::find($id);

      


       return view('app.fornecedor.editar',compact('fornecedor'));
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
        //

       dd($id, $request->all());
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
