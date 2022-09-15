<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(["success"=>true,
                                "data"=> Bootcamp::all()],200);
        echo "aqui se van a mostrar todos los bootcamps";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return Bootcamp::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(["success"=>true,
        "data"=>Bootcamp::find($id) ],200);
        echo"aqui se va a mostrar el bootcamp cuyo 
             $id";
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
        //selecionar un bootcamp
       $b = Bootcamp::find($id);
       //actualizarlo
       $b->update($request->all());
       //enviar 
       return response()->json([ 
        "success"=>true,
        "data"=> $b
       ] , 200);

       echo "sirve para actualizar un bootcamp cuyo id es $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c= Bootcamp::find($id);
        $c->delete();
        return response()->json([ 
            "success"=>true,
            "data"=> $c
           ] , 200);
    echo "aqui se eliminara el bootcamp cuyo id es $id";
    }
}
