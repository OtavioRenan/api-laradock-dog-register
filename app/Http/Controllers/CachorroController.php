<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cachorro;
use App\Http\Resources\CachorroResource;

class CachorroController extends Controller
{
    function index()
    {
        return CachorroResource::collection(Cachorro::all());
    }

    function find($id)
    {
        return new CachorroResource(Cachorro::find($id));
    }

    function create(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'dono' => ['required', 'string', 'max:255'],
            'nascimento' => ['required', 'date'],
            'tipo' => ['required', 'numeric'],                                   
        ]);

        return Cachorro::create($request->all());
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'dono' => ['required', 'string', 'max:255'],
            'nascimento' => ['required', 'date'],
            'tipo' => ['required', 'numeric'],                                   
        ]);

        $cao = Cachorro::find($id);

        if($cao){
            $cao->nome = $request->input('nome');
            $cao->dono = $request->input('dono');
            $cao->nascimento = $request->input('nascimento');
            $cao->tipo = $request->input('tipo');
            $cao->save();
            return $cao;
        }
    }

    function delete($id)
    {
        $cao = Cachorro::find($id);

        if($cao){            
            $cao->delete();
            return redirect('api/cachorro/');
        }
    }
}
