<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock as ModelStock;
use Illuminate\Http\Request;

class Stock extends Controller
{

    public function index()
    {
        return view('site.lista-estoque')->with('estoque', \App\Models\Stock::all());
    }

    public function create()
    {
        $produtos = Product::all();
        return view('site.criando-estoque')->with('produtos', $produtos);
    }

    public function store(Request $request)
    {
        $stock = new ModelStock;

        $stock->quantidade = $request->input('quantidade');
        $stock->produto = strtok($request->input('produto'), " ");

        $stock->save();

        return redirect('estoque/');
    }

    public function show(Request $request)
    {
        $estoque = ModelStock::findOrFail($request->id);
        $produto = Product::findOrFail($estoque->produto);

        return view('site.visualiza-estoque', [
            'estoque'=> $estoque,
            'produto'=> $produto,
        ]);
    }

    public function edit(Request $request)
    {
        return view('site.editar-estoque',
        [
            'produtos' => Product::all(),
            'estoque' => \App\Models\Stock::findOrFail($request->get('id')),
        ]);
    }

    public function update(Request $request)
    {
        $stock = ModelStock::findOrFail($request->get('id'));

        $stock->produto = strtok($request->produto, " ");
        $stock->quantidade = $request->input('quantidade');

        $stock->update();

        return redirect('/estoque/');
    }

    public function destroy(Request $request)
    {
        ModelStock::findOrFail($request->get('id'))->delete();
        return redirect('/estoque/');
    }
}
