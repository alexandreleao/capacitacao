<?php

namespace App\Http\Controllers;
use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContatoController extends Controller
{
    public function index()
    {
        $contato = Contato::paginate(5);

        return response()->json($contato);
    }


    public function show($id)
    {
        $contato = Contato::findOrfail($id);

        return response()->json($contato);
    }


    public function store(Request $request)
    {
        $contato = new Contato;
        $contato->name = $request->input('name');
        $contato->email = $request->input('email');
        $contato->phone = $request->input('phone');
        $contato->endereco = $request->input('endereco');

        if($contato->save() ){
            return response()->json($contato);
        }
    }


}
