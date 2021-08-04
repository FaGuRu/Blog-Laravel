<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(request()->has('empty')){
            $users = [];
        }else{
            $users = [
                'Fabricio','Christian','Felipe','Henning',
            ];
        }


        return view('users', [
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]); //Arreglo asociativo
    }

    public function show($id)
    {
        return view('user_detail',compact('id'));
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
