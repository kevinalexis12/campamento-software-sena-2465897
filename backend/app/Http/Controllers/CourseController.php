<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(["success"=>true,
                                "data"=> Course::all()],200);
        echo "aqui se van a mostrar todos los cursos";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return Course::create($request->all());
        
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
        "data"=>Course::find($id) ],200);
        echo"aqui se va a mostrar el curso cuyo 
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
       $b = Course::find($id);
       //actualizarlo
       $b->update($request->all());
       //enviar 
       return response()->json([ 
        "success"=>true,
        "data"=> $b
       ] , 200);

       echo "sirve para actualizar un curso cuyo id es $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c= Course::find($id);
        $c->delete();
        return response()->json([ 
            "success"=>true,
            "data"=> $c
           ] , 200);
    echo "aqui se eliminara el curso cuyo id es $id";
    }
}
