<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;
use App\Marca;
use App\TipoCarro;


class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("carro-index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model=Marca::all();
        $tipocar=TipoCarro::all();
        return view("carro-registrar",["model"=>$model,'tipocar'=>$tipocar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['placa'=>'required', 'modelo'=>'required', 'color'=>'required','tipo'=>'required','marca'=>"required"]);

        $model= new Carro;
        $model->placa=$request->placa;
        $model->modelo=$request->modelo;
        $model->color=$request->color;
        $model->tipo=$request->tipo;
        $model->marca=$request->marca;

        $model->save();

        return  redirect()->action('CarroController@verCarro');



    }

    public function verCarro(){

        $model=Carro::all();
        $marca=Marca::all();
        $tipocar=TipoCarro::all();

        return view('carro-ver',["model"=>$model,"marca"=>$marca,'tipocar'=>$tipocar]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
