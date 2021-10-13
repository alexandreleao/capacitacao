<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function userAction(Request $request)
    {
        
        $user = User::paginate(5);
        

        return response()->Json($user);
    }

    public function show($id)
    {
        $user = User::findOrfail($id);

        return response()->json($user);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'contato_id' => 'sometimes|exists:contatos,id'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }


        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->contato_id = $request->input('contato_id', null);

        if(!$user->save() ){
            return response()->json(['message' => 'Impossível cadastrar usuário']);
        }

        return response()->json($user);
        
    }

    public function update(Request $request)
    {
        

        $user = User::findOrfail($request->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        if($user->save()){
            return response()->json($user);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrfail($id);
        if($user->delete()){
            return response()->json($user);
        }
    }
}
