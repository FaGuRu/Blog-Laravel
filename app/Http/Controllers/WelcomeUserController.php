<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name,$nickname = null){
        $name = ucfirst($name); //Colocamos la primera letra del nombre en mayuscula

        if($nickname){
            return "Biemvenido {$name}, tu apodo es {$nickname}";
        }else{
            return "Biemvenido {$name}, no cuentas conun apodo";
        }
    }
}
