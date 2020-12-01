<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bartos extends Controller
{
    public function validar(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if($user === 'OrtizJohana' && $pass === "12345"){
            $url = "formulario.good";
        }else{
            $url = "formulario.bad";
        }

        return view($url, []);
    }

    public function login(){
        return view('formulario.formulario');
    }
}
