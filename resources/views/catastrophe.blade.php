@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8  col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de catástrofes

                </div>

                 <div class="panel-body col-lg-8">
                    
                        <table class="table table-bordered table-striped">
                                <thead>
                                    <th>    Catastofre      </th>
                                    <th>    Tipo  </th>
                                    <th> Región</th>
                                    <th> Provincia</th>
                                    <th> Comuna</th>
                                    <th>  Fecha  </th>
                                    <th>    Progreso   </th>
                                    <th>    Ver mas  </th>

                                </thead>
                                <tbody>
                                 <tr>


                                @foreach ($regions as $rg)
                                 
                                     <td>->{{$rg->catastrophe_name}} </td>
                                     <td>{{$rg->type_catastrophe->description}}</td>
                                     
                                      
                                     <td> @foreach ($rg->communes as $rg1)
                                    ------
                                   <label>{{$rg1->commune->provinces->regions->region_name}}
                                </label>
                                @endforeach
                                  </td>

            
                                     <td>
                                    
                                         
                                @foreach ($rg->communes as $rg1)
                                -------
                                <label>{{$rg1->commune->provinces->province_name}}
                                </label> 
                                 @endforeach 
                                
                                    </td>
                                   

                                       <td>
                                        @foreach ($rg->communes as $rg1)
                                       --------
                                       <label> 
                                        {{$rg1->commune->commune_name}}
                                        @endforeach </label>
                                        </td>
                                     <td>{{$rg->created_at}}</td>
                                     <td>{{$rg->catastrophe_progress}}</td>

                                     <td width="15%"> 
                                        <form class="form-horizontal" method="POST" action="{{ route('detalles') }}">
                                    {{ csrf_field() }}
                                     

                                     <input type="hidden" name="idc" value="{{$rg->id}}"><button type="submit" class="btn btn-primary">Ver mas</button> </form>
                                    </td>  
                                 </tr>
                                 
                                 @endforeach
                         </tbody>
                        </table>
                </div>
            </div>
        </div>

        <div style="float: left; position: relative;">
         <button href="#agregar" data-toggle='modal' class="btn btn-success">AGREGAR</button>
         </div>
 
</div>
</div>




<div class="modal fade  " id="agregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 
   <div  class="modal-dialog modal-sm" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="" ass="modal-title" id="myModalLabel">Editando datos de empresa </h5>
        </div>
              
        <div class="modal-body">
       

            <form method="post" action="{{route('create_c')}}">
                {{csrf_field()}}
                <label>Nombre: </label>
              
                    <input class="form-control" type="text" name="name" placeholder="Nombre catástrofe" style="width: 250px;" required>
                    <label>Tipo: </label>
                    <select class="form-control" style="width: 250px;" name='type' required>
                        <option Value="">--Seleccione--</option>
                         @foreach ($type as $tp)
                         <option value="{{$tp->id}}">{{$tp->description}}</option>
                         @endforeach
                        
                    </select>

                    <label>Región: </label>
              
                    <select class="form-control" style="width: 250px;" name='Region' id='region' required>
                        <option Value="">--Seleccione--</option>
                         @foreach ($regionall as $rga)
                         <option value="{{$rga->id}}">{{$rga->region_name}}</option>
                         @endforeach
                        
                    </select>

                    <label>Provincia: </label>
              
                  <select class="form-control" style="width: 250px;" name='Provincia' id='provincia' required="">
                        <option Value="">--Seleccione--</option>
                           @foreach ($provinces as $pv)
                         <option value="{{$pv->id}}">{{$pv->province_name}}</option>
                         @endforeach
                        
                    </select>

                    <label>Comuna: </label>
              <select class="form-control" style="width: 250px;" name='Comuna' id='comuna' required="">
                        <option Value="">--Seleccione--</option>
                           @foreach ($communes as $cm)
                         <option value="{{$cm->id}}">{{$cm->commune_name}}</option>
                         @endforeach
                        
                    </select>
                    <br>
                <center><input type="submit" name="procesar" class="btn btn-primary" value="Agregar"></center>
              
            </form>
          </div>
        
        <div class="modal-footer">
            
        </div>
        </div>
        </div>
        </div>

@endsection
