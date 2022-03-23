<?php

namespace App\Http\Controllers\usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function user($nombre)
    {
        return 'Usuario  '.$nombre;
    }

    public function user1($id)
    {
        return 'Usuario '.$id;
    }

    public function user2($id,$nombre)
    {
        return 'Usuario '.$id.' y el nombre es '.$nombre;
    }

}   
