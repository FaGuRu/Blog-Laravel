<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name,$nickname = null){
        $name = ucfirst($name); //Colocamos la primera letra del nombre en mayuscula

        if($nickname){
            return view('welcome.apodo',compact('name','nickname'));
        }else{
            return view('welcome.name',compact('name'));
        }
    }
}
