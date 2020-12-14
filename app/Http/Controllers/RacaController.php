<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raca;

class RacaController extends Controller
{
    function index()
    {
        return Raca::all();
    }

    function find($id)
    {
        return Raca::find($id);
    }

    function create(Request $request)
    {
        $request->validate([        
            'descricao' => ['required', 'string', 'max:255'],            
            'slug' => ['required', 'string', 'max:255'],
        ]);

        return Raca::create($request->all());
    }

    function update(Request $request, $id)
    {        
        $request->validate([        
            'descricao' => ['required', 'string', 'max:255'],            
            'slug' => ['required', 'string', 'max:255'],
        ]);

        $raca = Raca::find($id);
        if($raca){            
            $raca->descricao = $request->input('descricao');
            $raca->slug = $request->input('slug');
            $raca->save();
            return $raca;
        }
    }

    function delete($id)
    {
        $raca = Raca::find($id);
        if($raca){
            $raca->delete();
            return redirect('api/raca');
        }
    }
}
