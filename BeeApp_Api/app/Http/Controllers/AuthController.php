<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Token;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
       
    public function register(RegisterRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        if (Auth::attempt($request->only('email','password'))) {
            return response()->json([
                'message'=>'Usuario creado',
                'token'=>$request->user()->createToken($request->email)->plainTextToken,
            ]);
        }
        
    }

    public function login(LoginRequest $request){
        // ! negamos el Auth si los datos no coinciden, devolviendo un msg no esta autorizado
        if (!Auth::attempt($request-> only('email', 'password'))) {
            return response()->json([
                'message'=> 'Datos incorrectos',
                'success'=> false
        ], 200);
        }

        //verifico si el usuario tiene un token  creado, si es asi procedo a eliminar 
        //procedo a crear un nuevo token 

        $userToken = Token::where('name', $request-> email)->first();
        if ($userToken){
            $userToken->delete();
        }

        return response()->json([
            'success' => true,
            'token' => $request -> user()->createToken($request->email)->plainTextToken,
        ], 200);

    }

    public function logout(Request $request){
        $request-> user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'cerraste sesion exitosamente'
        ],400);
    }

/*public function lista(){
    $users = User::all();

    return response()->json([
        'message' => 'success',
        'info' => 'Lista de usuarios',
        'categoria' => $users,

    ],200);


}

public function user()
{
    $user = User::all();
    
    return response()->json($user->user());
}*/
   
}
