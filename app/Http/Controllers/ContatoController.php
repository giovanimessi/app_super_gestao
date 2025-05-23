<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\SiteContato;
use \App\MotivoContato;
class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contatos(Request $request)
    {
        
     
       $motivos_contatos = MotivoContato::all();


        return view('site.contatos',compact('motivos_contatos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $regras = [
            'nome' => 'required|min:3|max:100|unique:site_contatos',
            'telefone'=> 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback =  [
            'email.email' => 'O email informado nao e valido.',
          
            'required' => 'O campo :attribute deve ser preenchido'
        ];
        //validade dados
        $request->validate(
            $regras,$feedback
        );

         // $titulo = 'Contatos';

       //$dados = $request->all();

      /* $contato = new SiteContato();
       $contato->nome = $request->input('nome');
       $contato->telefone = $request->input('telefone');
       $contato->email = $request->input('email');
       $contato->motivo_contato = $request->input('motivo_contato');
       $contato->mensagem = $request->input('mensagem');

      // dd($contato->getAttributes());
      $contato->save();*/
 
       SiteContato::create($request->all());

       return redirect()->route('site.index');
       //return view('site.contatos');
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
    public function edit($id)
    {
        //
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
