<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Categoria;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Categoria::all();
        return view ('novoproduto', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = new Produtos();
        $produtos->nome = $request->input('nomeProduto');
        $produtos->estoque = 1;
        $produtos->preco = $request->input('precoProduto');
        $produtos->categoria_id = $request->input('categoria_id');
        $produtos->save();
        return redirect('/produtos');
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
        $cats = Categoria::all();
        $produtos = Produtos::find($id);
        if (isset($produtos)) {
            return view('editar-produto', compact('cats', 'produtos'));
        }
        return redirect('/produtos');
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
        $produtos = Produtos::find($id);
        if (isset($produtos)) {
            $produtos->nome = $request->input('nomeProduto');
            $produtos->estoque = 1;
            $produtos->preco = str_replace(['R$', '.', ','], ['', '', '.'], $request->input('precoProduto'));
            $produtos->categoria_id = $request->input('categoria_id');
            $produtos->save();
        }
        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produtos = Produtos::find($id);
        if (isset($produtos)) {
            $produtos->delete();
        }
        return redirect('/produtos');
    }
}
