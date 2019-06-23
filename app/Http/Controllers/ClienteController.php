<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewsCliente.index', [
            'Clientes' => Cliente::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewsCliente.create');
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
            'nombre'=>'required|min:3|max:18',
            'apellido'=>'required|min:3|max:18',
            'correo'=>'required|min:3|max:30',
            'telefono'=>'required|integer',
            'ciudad'=>'required|min:3|max:18',
            'calle'=>'required|min:3|max:25',
        ]);
        $cliente = new Cliente();
        $cliente->nombre = $validData['nombre'];
        $cliente->apellido = $validData['apellido'];
        $cliente->correo = $validData['correo'];
        $cliente->telefono = $validData['telefono'];
        $cliente->ciudad = $validData['ciudad'];
        $cliente->calle = $validData['calle'];
        $cliente->save();
        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('viewsCliente.show',[
            'Clientes' => $cliente,
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
        $cliente = Cliente::findOrFail($id);
        return view('viewsCliente.edit',[
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
            'nombre'=>'required|min:3|max:18',
            'apellido'=>'required|min:3|max:18',
            'correo'=>'required|min:3|max:30',
            'telefono'=>'required|integer',
            'ciudad'=>'required|min:3|max:18',
            'calle'=>'required|min:3|max:25',
        ]);
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $validData['nombre'];
        $cliente->apellido = $validData['apellido'];
        $cliente->correo = $validData['correo'];
        $cliente->telefono = $validData['telefono'];
        $cliente->ciudad = $validData['ciudad'];
        $cliente->calle = $validData['calle'];
        $cliente->save();
        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente -> delete();
        return redirect('clientes');
    }
}
