<?php

namespace App\Http\Controllers;
use App\Collection_center;
use App\Catastrophe;
use App\Article;
use Illuminate\Http\Request;
use App\Measure;
use Illuminate\Support\Facades\Auth;

class CollectionCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catastrofes=Catastrophe::All();
        $categories=Collection_center::All();
        $articulos=Article::All();
        return view('collectionCenter/create',compact('catastrofes','categories','articulos'));
    }


    public function index2(){
        return view('centroAcopio');
    }

    public function agregar(request $i){
             $medida = new Measure();
             $medida->start_date = $i->inicio;
             $medida->finish_date = $i->final;
             $medida->status_measure =0;
             $medida->progress_percent =0 ;
             $medida->user_id = 1;
             $medida->catastrophe_id = 1;
             $medida->save();
             return view ('centroAcopio');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
