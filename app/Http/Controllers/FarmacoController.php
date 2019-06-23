<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmaco;

class FarmacoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewsFarmaco.index', [
            'Farmacos' => Farmaco::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewsFarmaco.create');
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
            'nombre'=>'required|min:3|max:30',
            'categoria'=>'required',
            'comprimido'=>'required|integer',
            'contenido_neto'=>'required|integer',
            'precio'=>'required|integer',
        ]);
        $farmaco = new Farmaco();
        $farmaco->nombre = $validData['nombre'];
        $farmaco->categoria = $validData['categoria'];
        $farmaco->comprimido = $validData['comprimido'];
        $farmaco->contenido_neto = $validData['contenido_neto'];
        $farmaco->precio = $validData['precio'];
        $farmaco->save();
        return redirect('farmacos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $farmaco = Farmaco::findOrFail($id);
        return view('viewsFarmaco.show',[
            'Farmacos' => $farmaco,
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
        $farmaco = Farmaco::findOrFail($id);
        return view('viewsFarmaco.edit',[
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
            'nombre'=>'required|min:3|max:30',
            'categoria'=>'required',
            'comprimido'=>'required|integer',
            'contenido_neto'=>'required|integer',
            'precio'=>'required|integer',
        ]);
        $farmaco = Farmaco::findOrFail($id);
        $farmaco->nombre = $validData['nombre'];
        $farmaco->categoria = $validData['categoria'];
        $farmaco->comprimido = $validData['comprimido'];
        $farmaco->contenido_neto = $validData['contenido_neto'];
        $farmaco->precio = $validData['precio'];
        $farmaco->save();
        return redirect('farmacos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $farmaco = Farmaco::findOrFail($id);
        $farmaco -> delete();
        return redirect('farmacos');
    }
}
