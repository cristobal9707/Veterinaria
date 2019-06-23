<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;
use App\Cliente;
use App\Farmaco;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewsReceta.index', [
            'Recetas' => Receta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = Cliente::all();
        $farmaco = Farmaco::all();
        return view('viewsReceta.create', [
            'Clientes' => $cliente,
            'Farmacos' => $farmaco
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'cantidad'=>'required|integer',
            'comentario'=>'required',
            'cliente_id'=>'required',
            'farmaco_id'=>'required',
        ]);
        $receta = new Receta();
        $receta->cantidad = $validData['cantidad'];
        $receta->comentario = $validData['comentario'];
        $receta->cliente_id = $validData['cliente_id'];
        $receta->farmaco_id = $validData['farmaco_id'];
        $receta->save();
        return redirect('recetas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receta = Receta::findOrFail($id);
        return view('viewsReceta.show',[
            'Recetas' => $receta,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receta = Receta::findOrFail($id);
        $cliente = Cliente::all();
        $farmaco = Farmaco::all();
        return view('viewsReceta.edit',[
            'Recetas' => $receta,
            'Clientes' => $cliente,
            'Farmacos' => $farmaco
        ]);
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
        $validData = $request->validate([
            'cantidad'=>'required|integer',
            'comentario'=>'required',
            'cliente_id'=>'required',
            'farmaco_id'=>'required',
        ]);
        $receta = Receta::findOrFail($id);
        $receta->cantidad = $validData['cantidad'];
        $receta->comentario = $validData['comentario'];
        $receta->cliente_id = $validData['cliente_id'];
        $receta->farmaco_id = $validData['farmaco_id'];
        $receta->save();
        return redirect('recetas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receta = Receta::findOrFail($id);
        $receta -> delete();
        return redirect('recetas');
    }
}
