<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mascota;
use App\Cliente;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewsMascota.index', [
            'Mascotas' => Mascota::all()
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
        return view('viewsMascota.create',[
            'Clientes' => $cliente
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
            'nombre'=>'required|min:3|max:20',
            'edad'=>'required|integer',
            'especie'=>'required|min:3|max:20',
            'genero'=>'required|min:3|max:20',
            'cliente_id'=>'required',
        ]);
        $mascota = new Mascota();
        $mascota->nombre = $validData['nombre'];
        $mascota->edad = $validData['edad'];
        $mascota->especie = $validData['especie'];
        $mascota->genero = $validData['genero'];        
        $mascota->cliente_id = $validData['cliente_id'];
        $mascota->save();
        return redirect('mascotas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = Mascota::findOrFail($id);
        return view('viewsMascota.show',[
            'Mascotas' => $mascota,
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
        $cliente = Cliente::all();
        $mascota = Mascota::findOrFail($id);
        return view('viewsMascota.edit',[
            'Mascotas' => $mascota,
            'Clientes' => $cliente
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
            'nombre'=>'required|min:3|max:20',
            'edad'=>'required|integer',
            'especie'=>'required|min:3|max:20',
            'genero'=>'required|min:3|max:20',
            'cliente_id'=>'required',
        ]);
        $mascota = Mascota::findOrFail($id);
        $mascota->nombre = $validData['nombre'];
        $mascota->edad = $validData['edad'];
        $mascota->especie = $validData['especie'];
        $mascota->genero = $validData['genero'];        
        $mascota->cliente_id = $validData['cliente_id'];
        $mascota->save();
        return redirect('mascotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascota = Mascota::findOrFail($id);
        $mascota -> delete();
        return redirect('mascotas');
    }
}
