<?php

namespace App\Http\Controllers;

use App\Models\Camion;

use Illuminate\Http\Request;

class CamionController extends Controller
{

    public function index2()
    {
        $datosCamion = Camion::all();
        return view('listCamion', compact('datosCamion'));
    }

 
    public function create2()
    {
        return view ('aggCamion');
    }


    public function store2(Request $request)
    {
        //
    }


    public function show2(string $id)
    {
        //
    }

    public function edit2(string $id)
    {
        //
    }


    public function update2(Request $request, string $id)
    {
        //
    }


    public function destroy2(string $id)
    {
        //
    }
}
