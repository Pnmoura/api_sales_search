<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Venda::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Venda::create($request->all())) {
            die('Venda criada com sucesso');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Venda::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = Venda::findOrFail($id);

        $produto->update($request->all());

        return $produto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Venda::destroy($id)){
            die("Venda $id foi removida do banco");
        }
        die("Nenhuma ID de venda foi passado para remoção");
    }
}
