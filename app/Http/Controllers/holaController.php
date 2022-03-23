<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class holaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return 'hola bastian, esta es una ruta simple, invocada con holacontroller';
    }
}
