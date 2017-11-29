@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detalles catástrofes
                </div>
                 <div class="panel-body">
                    @foreach ($cat as $ct)
                            <label>Catastofre: {{$ct->catastrophe_name}} </label>
                            <br/>
                            <label>Tipo:  {{$ct->type_catastrophe->description}}</label>
                             <br/>
                            <label>Fecha de creación:  {{$ct->created_at}}</label>
                             <br/>
                            <label>Progreso:  {{$ct->catastrophe_progress}}%</label>
                            @endforeach
                            <div class="progress ">

                                <?php $restante = 100 - $ct->catastrophe_progress;?>
                                <div class="progress-bar  progress-bar-striped progress-bar-animated" style="width: {{$ct->catastrophe_progress}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$ct->catastrophe_progress}}%</div>

                             <div class="progress-bar progress-bar-danger" style="width: {{$restante}}%">
                             </div>  
                       </div>
                            <br/>
                           

    <div>
         <a href="{{route('centroAcopio')}}"  class="btn btn-success">Nuevo Centro de acopio</a>    

    </div><br>
    <div>
        <a href="{{route('agregarVol')}}"  class="btn btn-warning">Nueva Convocatoria Voluntarios</a>    
    </div>
    <br>
    <div>

         <a href="{{route('agregarEvento')}}"  class="btn btn-danger">Nueva Evento a Beneficio</a>    
           
    </div>
    <br>
    <div>
                <a href="{{route('crearDonacion')}}"  class="btn btn-info">Nuevas Donaciones</a>    


    </div>
    <br>
                            <table class="table table-bordered table-striped">
                        <thead>
                            <th>    Medida      </th>
                            <th> Fecha de creación</th>
                            <th> Fecha de expiración</th>
                            <th>    Progreso   </th>
                            <th> Status  </th>
                            <th>    Ver mas  </th>

                        </thead>

                         <tbody>
                        <tr>

                        @foreach($medidas_acopio as $m)
                          

                         <td>
                           Centro de acopio
                         </td>
                          
                             <td>{{$m->start_date}}</td>
                             <td>{{$m->finish_date}}</td>
                             <td>{{$m->progress_percent}}</td>
                             <td>{{$m->status_measure}}</td>
                       
                            <td width="15%"><a href="#Voluntarios"  data-toggle='modal' class="btn btn-primary">Ver detalles</a>
                            </td>
                            
                         </tr>
                          @endforeach
                            </td>


                     </tbody>
                 </table>

           
     </div>
                   
                </div>
            </div>

        </div>
</div>


</div>




<div class="modal fade  " id="Centro_Acopio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 
   <div  class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="" ass="modal-title" id="myModalLabel">Detalles medida</h5>
        </div>
   
        <div class="modal-body">
           <form method="post" action="">
                     <div>
                 <button href="" data-toggle='modal' class="btn btn-danger">Bloquear Medida</button>    
                  <button href="" data-toggle='modal' class="btn btn-success">Validar</button>
                </div>
                <br>
                <label>Status: </label>
                <br>
                <label>Dirección centro de acopio: </label>
                <table class="table table-bordered table-striped">
                        <thead>
                            <th>Categoria</th>
                            <th>Articulo</th>
                            <th>Cantidades Actuales</th>
                            <th>Cantidades Pedidas</th>
                            <th>Progreso</th>
                        </thead>
                         <tbody>
                     </tbody>
                 </table>
           
           </form>
        </div>
     </div>  
     </div> 

     </div>   


<div class="modal fade  " id="Voluntarios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 
   <div  class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="" ass="modal-title" id="myModalLabel">Detalles medida</h5>
        </div>
   
        <div class="modal-body">
           <form method="post" action="">
                <div>
                 <button href="" data-toggle='modal' class="btn btn-danger">Bloquear Medida</button>    
                  <button href="" data-toggle='modal' class="btn btn-success">Validar</button> 
                  
                </div>
                <br>
                <div>
                <label>Status: </label><br>
                <label> Dirección</label><br>
                <label> Horas de Trabajo </label><br>
                <label> Descripción </label><br>
                <label>Cantidad de Voluntarios Requeridos: </label><br>
                 <label>Cantidad de Voluntarios Actuales: </label><br>
                 <label> Habilidad Requerida : </label><br>
                 
                </div> 
                 <br>
                          <p>Lista de Postulantes </p>
                <table class="table table-bordered table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Run</th>
                        </thead>
                         <tbody>
                     </tbody>
                 </table>
           
           </form>
        </div>
     </div>  
     </div> 
     </div>  



<div class="modal fade  " id="Evento" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 
   <div  class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="" ass="modal-title" id="myModalLabel">Detalles medida</h5>
        </div>
   
        <div class="modal-body">
           <form method="post" action="">
                <div>
                 <button href="" data-toggle='modal' class="btn btn-danger">Bloquear Medida</button>    
                  <button href="" data-toggle='modal' class="btn btn-success">Validar</button> 
                  
                </div>
                <br>
                <div>
                <label>Status: </label><br>
                <label> Dirección</label><br>
                <label> Descripcion Eventos</label><br>
                </div> 
                 <br>
                          <p>Lista de Actividades </p>
                <table class="table table-bordered table-striped">
                        <thead>
                            <th>Descripcion</th>
                        </thead>
                         <tbody>
                     </tbody>
                 </table>
           
           </form>
        </div>
     </div>  
     </div> 
     </div>  



 <div class="modal fade  " id="Donaciones" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 
   <div  class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="" ass="modal-title" id="myModalLabel">Detalles medida</h5>
        </div>
   
        <div class="modal-body">
           <form method="post" action="">
                <div>
                 <button href="" data-toggle='modal' class="btn btn-danger">Bloquear Medida</button>    
                  <button href="" data-toggle='modal' class="btn btn-success">Validar</button> 
                  
                </div>
                <br>
                <div>
                <label>Status: </label><br>
                <label> Meta: </label><br>
               <label> Actual: </label>
                 <br>
                          <p>Lista de Gastos a Cubrir</p>
                <table class="table table-bordered table-striped">
                        <thead>
                            <th>Articulo</th>
                            <th> Cantidad</th>
                            <th> Costo </th>
                        </thead>
                         <tbody>
                     </tbody>
                 </table>
           
           </form>
        </div>
     </div>  
     </div> 
     </div>  



@endsection
