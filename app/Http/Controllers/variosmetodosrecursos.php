<?php

#CONTROLADOR PARA CRUD

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;

class variosmetodosrecursos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'este es el index';
        //return redirect()->action('holaController');
        //return redirect()->action('UsuarioController@usuariounparametro',
        //['nombre '=> 'bastian carmona']);
        //return redirect('hola');
        $info = info::all();
        //return view('varios')->with('info',$info);
        //return view( 'varios' , ['info'=> $info] ); 
        //return view('varios', compact('info'));  
        //with se utiliza para mandar un msje indivudialmente
        // dd(vasriable que se desesa testear); return con asteroide
        return view('varios.index');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('varios.create');
        /*
        $info = new info;
        $info->nombre='Bastian Carmona';
        $info->descripcion='Alumno en Practica';
        $info->save();
        return 'Datos Guardados Correctamente';

        info::create([
            'nombre' >'Bastian',
            'descripcion' =>'Ingeniero informatico'
        ]);
        return 'Datos Guardados Correctamente';
        */
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('varios.show' , compact('id'));
       /*
        $info = info::findOrfail($id)->first();
        $info->delete();
         return 'El registro'.$id.'ha sido eliminado correctamente';
         */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*
       $info = info::findOrfail($id)->first();

       //$info = info::where('id','=',$id)
       //$info = info::where('id','>',$id)
       $info->nombre ='Matias Huentian';
       $info->descripcion ='Programador y Gerente TI';
       $info->save();
        return 'Datos Actualizados';
*/    
        return view('varios.edit' , compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
