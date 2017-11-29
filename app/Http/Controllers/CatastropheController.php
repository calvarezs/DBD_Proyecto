<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrophe;
use App\TypeCatastrophe;
use App\Measure;
use App\CatastropheCommune;
use App\Region;
use App\Province;
use App\Commune;
class CatastropheController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $cats  = Catastrophe::with('type_catastrophe')->get();
        $type = TypeCatastrophe::all(); 

        $regions =  Catastrophe::with('communes.commune','communes.commune.provinces','communes.commune.provinces.regions')->get();
          $regions =   Catastrophe::with('communes.commune')->get();
        $regionall = Region::all();
        $provinces = Province::all();
        $communes =  Commune::all();


        return view('catastrophe',compact('cats','type','regions', 'regionall', 'provinces','communes'));
    }

  
 public function agregar(Request $i){
        return view ('centroAcopio',compact('i'));
 }

   
  public function index_detalle(Request $i)
    {
        //TypeCatastrophe::all();
        $id = $i->get('idc');
        $cat =Catastrophe::with('type_catastrophe')->where('id', '=', $id)->get();



        $medidas_acopio = Measure::with('collection_centers')->where('catastrophe_id','=',$id)->get();


        $medidas_voluntarios =Measure::with('volunteers')->where('catastrophe_id','=',$id)->get();

        /*$types = TypeCatastrophe::all()->sortBy('id'); */ 


        return view('detalles' ,compact('cat','medidas_acopio','medidas_voluntarios'));
}

 

    public function store(Request $request){

        $validator = Validator::make($request->all(),
            [
            'catastrophe_name' => 'required|string|min:3|max:255',
            'catastrophe_progress' => 'required|integer|max:20',
            'type_catastrophe_id' => 'required|integer', 
            ],
        [
            'required' => 'Este campo es requerido',
            'string' => 'Debe usar caracteres',
            'min' => 'Cantidad menor a la permitida',
            'max' => 'Cantidad mayor a la permitida',
            'integer' => 'Debe ser un valor numérico'
        ]
            );
        if($validator->fails())
        {
            return redirect()->route('catastrophe.create')
                                    ->withErrors($validator)
                                    ->withInput();
        }
  //añadir elementos en base de datos aca

        return redirect()->route('catastrofes.index')->with('success', true)->with('message','Catastrofe creada exitosamente');
    }

    public function create()
    {   
        //
        $cats = Catastrophe::all();
        $tipos = TypeCatastrophe::all();
        $id_u = Auth::user()->id;
        return view('catastrophe.create', compact('cats','tipos','id_u'));
    }

    public function new_catastrophe(Request $i){
        $catastrophe = new Catastrophe();
        $catastrophe->catastrophe_name = $i->name;
        $catastrophe->catastrophe_progress = 0;
        $catastrophe->type_catastrophe_id = $i->type;
        $catastrophe->save();


        $commune = new CatastropheCommune();
        $commune->catastrophe_id=$catastrophe->id;
        $commune->commune_id = $i->Comuna;
        $commune->save();
        return redirect()->route('agregarVol');
    }

    public function show($id)
    {   
        $cat = Catastrophe::find($id);
        return view('catastrophe.show', compact('cat'));
    }

    public function edit($id)
    {
        $cat = Catastrophe::find($id);
        $tipos = TypeCatastrophe::all();
        $id_u = Auth::user()->id;
        return view('catastrofes.edit', compact('cat','tipos','id_u'));
    }
 
}
