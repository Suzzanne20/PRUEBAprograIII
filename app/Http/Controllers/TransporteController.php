<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
   
    public function index1()
    {
        $datos = Transporte::all();
        return view('inicio', compact('datos'));


    }

 
    public function create1()
    {
        //
        return view ('agg');
    }

    public function store1(Request $request)
    {
        $transporte = new Transporte(); 
        $transporte -> nombre = $request->post('nombre');
        $transporte -> razon_social = $request->post('razon_social');
        $transporte -> save();

        return redirect() -> route("transporte.index") -> with("success", "Se ah registrado");
    }

    public function show1(Transporte $transporte)
    {
        return view('eliminar', compact('transporte'));
    }

    public function edit1(Transporte $transporte)
    {
        $transporte = Transporte::find($id);
        return view('actualizar', compact('transporte'));

    }

    public function update1(Request $request, Transporte $transporte)
    {
        $transporte = Transporte::find($id);
        $transporte -> nombre = $request->post('nombre');
        $transporte -> razon_social = $request->post('razon_social');
        $transporte -> save();

        return redirect() -> route("transporte.index") -> with("success", "Se ah Actualizado!");
    }

    public function destroy1(Transporte $transporte)
    {
        $transporte = Transporte::find($id);
        $transporte->delete();
        return redirect()->route("transporte.index")->with("success", "Eliminado");
    }
}