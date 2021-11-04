<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Todo;
use Symfony\Contracts\Service\Attribute\Required;

class ApiController extends Controller
{


    public function createTodo(Request $request)
    {
        // Validando dados
        $validator = Validator::make($request->all(),[
            'title' => 'required|min:3'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Não foi possível cadastar sua tarefa',
                'errors' => $validator->errors()
            ],422);
        }
        
        $title = $request->input('title');
        //Criando o registro
        $todo = new Todo();
        $todo->title = $title;
        $todo->save();

        return response()->json(['cadastrado com sucesso!'], 200);
        
    }

    public function readAllTodos()
    {
        //
    }

    public function readTodo()
    {
        //
    }

    public function updateTodo()
    {
        //
    }

    public function deleteTodo()
    {
        //
    }
}
