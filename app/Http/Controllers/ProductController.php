<?php

namespace App\Http\Controllers;

use App\Mail\ProductCreated;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
/*
    public function home()
    {
        $products = Product::all();
        return view('site.home')->with('products', $products);
    }

    public function adm_produtos(){
    }
*/
    public function index()
    {
        $produtos = Product::all();
        return view('site.lista-produtos')->with('produtos', $produtos);
    }

    public function create()
    {
        return redirect('/adm/produtos');
    }

    public function store(Request $request)
    {
        $produto = new Product();

        $produto->name = $request->input('name');
        $produto->flavor = $request->input('flavor');
        $produto->price = $request->input('price');
        $produto->description = $request->input('description');
        $produto->photo = $request->input('photo');

        $produto->save();

        \App\Events\ProductCreated::dispatch($produto);
        return redirect('/produtos');
    }

    public function delete(Request $request)
    {
        $id = $request->get('id');
        Product::findOrFail($id)->delete();
        return redirect('/produtos/');
    }

    public function show(Request $request)
    {
        $products = Product::all();
        $id = $request->get('id');

        foreach ($products as $product){
            if($product->id == $id){
                return view('site.visualiza-produto')->with('produto', $product);
            }
        }

        return 0;
    }


    public function edit(Request $request)
    {
        $produto = Product::findOrFail($request->get('id'));
        return view('site.editar-produto')->with('produto', $produto);
    }


    public function update(Request $request)
    {
        Product::findOrFail($request->get('id'))->update($request->all());
        return redirect('/produtos/');
    }

    public function destroy(Product $product)
    {
        //
    }
}
