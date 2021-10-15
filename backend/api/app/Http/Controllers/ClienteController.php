<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use JWTAuth;

class ClienteController extends Controller
{
    public function signup(Request $request){
      /* return Cliente::create($request->all());*/
      $data=$request->all();
      $data['clave']=Hash::make($data['clave']);
      $cliente=Cliente::create($data);
      $token=JWTAuth::fromUser($cliente);
      return array('token'=>$token);

    }
    public function showAll(){
        return Cliente::All();
    }
    public function login(Request $request){
        $correo=$request->input('correo');
        $clave=$request->input('clave');
        $cliente=Cliente::select('clave')->where('correo',$correo)->first();
        return $cliente;
    }
}
