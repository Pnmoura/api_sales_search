<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Cliente::create($request->all())) {
            die('Cliente criado com sucesso');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Cliente::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Cliente::destroy($id)) {
            die("Cliente $id foi removido do banco");
        }
        die("Nenhum ID foi passado para remoção.");
    }
}
