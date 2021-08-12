<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Oracoes;
use Illuminate\Http\Request;

class OracoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oracoes = Oracoes::all();
        return view('website.index', compact('oracoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255|string',
            'email' => 'required',
            'pquem' => 'required',
            'intencao' => 'required',
            'solicitacao' => 'required',
            'acept' => 'required',            
        ]);
        if($validated): 
            $oracoes = Oracoes::create($validated);
            if($oracoes): 
                return redirect()->route('oracoes.index');
            else: 
                return redirect()->back();
            endif;
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oracao = Oracoes::find($id);
        $diffdays = $this->calcularDias($oracao->created_at->format('Y-m-d'));
        return view('website.show', compact('oracao', 'diffdays'));
    }

    public function calcularDias($criado)
    {
        $now = Carbon::now();
        $value = $now->diffInDays($criado);
        
        return $value;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oracao = Oracoes::find($id);
        return view('website.edit', compact('oracao'));
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
        $validated = $request->validate([
            'nome' => 'required|max:255|string',
            'email' => 'required',
            'pquem' => 'required',
            'intencao' => 'required',
            'solicitacao' => 'required',
            'acept' => 'required',            
        ]);
        if($validated): 
            $oracoes = Oracoes::find($id);
            $oracoes->update($validated);

            return redirect()->back();

        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oracao = Oracoes::find($id);
        $oracao->delete();
        return redirect()->route('oracoes.index');
    }
}
