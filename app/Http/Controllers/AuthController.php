<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function create(Request $request)
    {
        $array = ['error' => ''];

        //1ª Validação
       
         $rules =[
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
         ];
         $validator = Validator::make($request->all(), $rules);

         if($validator->fails()){
             $array['error'] = $validator->messages();
             return $array;
         }

         $email = $request->input('email');
         $password = $request->input('password');
        //Criando novo usuário
         $newUser = new User();
         $newUser->email = $email;
         $newUser->password = password_hash($password, PASSWORD_DEFAULT);
         $newUser->token = '';
         $newUser->save();


        return $array;
    }


    public function login(Request $request)
    {
        $array = ['error' => ''];

        $creds = $request->only('email', 'password');

        if(Auth::attempt($creds)){

            $user = User::where('email', $creds['email'])->first();
            $item = time().rand(0,999);
            $token = $user->createToken($item)->plainTextToken; //1|7XW9JyhyS0LI8nLeAsWv9a4BNh3AjZhfsPOqngGk

            $array['token'] = $token;
            //$array['success'] = false;
            //$array['message'] = 'Bemvindo miseravii';

        } else {
            $array['error'] = 'E-mail e /ou senha incorretos';
        }

        return $array;
    }
}
