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
        $array = ['error' => ''];

        $array['list'] = Todo::all();
        
        return $array;
    }

    public function readTodo($id)
    {
        $array =['error' => ''];
  
         $todo = Todo::find($id);
       
         if($todo){
             $array['todo'] = $todo;
         } else {
            $array['error'] = 'A tarefa '.$id. 'não existe';
         }

         return $array;;


    }

    public function updateTodo(Request $request, $id)
    {
        $array =['error' => ''];

        $rules = [
            'title' => 'min:3',
            'done' => 'boolean'
        ];
        
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails() ){
            $array['error'] = $validator->messages();
            return $array;
        }

        $title = $request->input('title');
        $done  = $request->input('done');


        $todo = Todo::find($id);
        if($todo){

            if($todo){
                $todo->title = $title;
            }
            if($done !== NULL){
                $todo->done = $done;
            }

             $todo->save();
       
            } else {
            $array['error'] = 'Tarefa ' .$id. 'Não existe, logo, não pode ser atualizado.';
            }
        
        return $array;

    }

        public function deleteTodo($id)
        {
            $array = ['error' => ''];

            $todo = Todo::find($id);
            $todo->delete();

            return $array;
        }
}
