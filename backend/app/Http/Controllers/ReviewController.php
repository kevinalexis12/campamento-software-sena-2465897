<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(["success"=>true,
                                "data"=> Review::all()],200);
        echo "aqui se van a mostrar todos las Reviews";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return Review::create($request->all());
        
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
        "data"=>Review::find($id) ],200);
        echo"aqui se va a mostrar la review cuyo 
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
       $b = Review::find($id);
       //actualizarlo
       $b->update($request->all());
       //enviar 
       return response()->json([ 
        "success"=>true,
        "data"=> $b
       ] , 200);

       echo "sirve para actualizar una reviews cuyo id es $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c= Review::find($id);
        $c->delete();
        return response()->json([ 
            "success"=>true,
            "data"=> $c
           ] , 200);
    echo "aqui se eliminara el Reviews cuyo id es $id";
    }
}
