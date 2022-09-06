<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstoqueRequest;
use App\Http\Requests\UpdateEstoqueRequest;
#use App\Http\Request;
use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Http\Requests\EstoqueRequest;

class EstoqueController extends Controller
{
    


    public function index()
    {
        $estoque = Estoque::all();

        return view('estoque.index', [

            'estoque' => $estoque,

        ]);
    }

    


    public function create()
    {
        return view('estoque.create', [
            'estoque' => new Estoque,
        ]);
    }

    


    public function store(EstoqueRequest $request)
    {
        $validated = $request->validated();

        $estoque = Estoque::create($validated);

        request()->session()->flash('alert-success', 'Um novo Item foi adicionado ao estoque!');

        return redirect('/estoque');
    }

    


    public function show($id)
    {
        $estoque = Estoque::where('id', $id)->first();

        return view('estoque.show', [
            'estoque' => $estoque,
        ]);

    }
    

    

    public function edit(Estoque $estoque)
    {
        return view('estoque.edit', [
            'estoque' => $estoque,
        ]);
    }

    


    public function update(EstoqueRequest $request, Estoque $estoque)
    {
        $validated = $request->validated();

        $estoque->update($validated);

        request()->session()->flash('alert-success', 'Item atualizado com sucesso');

        return redirect("/estoque");
    }

    


    public function destroy(Estoque $estoque)
    {
        $estoque->delete();

        request()->session()->flash('alert-info', 'Item deletado do estoque com sucesso.');

        return redirect('/estoque');
    }
}
