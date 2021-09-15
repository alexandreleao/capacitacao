<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conteudo;

class ConteudoController extends Controller
{
    public function index()
    {
        $conteudos = Conteudo::paginate(15);

        return response()->json($conteudos);
    }
}
