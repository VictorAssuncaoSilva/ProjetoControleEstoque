<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstoqueRequest;
use App\Http\Requests\UpdateEstoqueRequest;
#use App\Http\Request;
use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estoque = Estoque::all();

        return view('estoque.index', [

            'estoque' => $estoque,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estoque.create', [
            'estoque' => new Estoque,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEstoqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estoque = new Estoque;
        $estoque->item = $request->item;
        $estoque->tamanho = $request->tamanho;
        $estoque->quantidade = $request->quantidade;
        $estoque->save();

        return redirect('/estoque');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estoque = Estoque::where('id', $id)->first();

        return view('estoque.show', [
            'estoque' => $estoque,
        ]);

    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function edit(Estoque $estoque)
    {
        return view('estoque.edit', [
            'estoque' => $estoque,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstoqueRequest  $request
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estoque $estoque)
    {
        
        $estoque->item = $request->item;
        $estoque->tamanho = $request->tamanho;
        $estoque->quantidade = $request->quantidade;
        $estoque->save();

        return redirect('/estoque');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estoque $estoque)
    {
        $estoque->delete();
        return redirect('/estoque');
    }
}
