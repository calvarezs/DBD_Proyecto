@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Ingresar Centros de Acopio
                </div>
                 <div class="panel-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
        <br>

        <div  class="col-lg-3"> 
         <label>Fecha Comienzo</label> <br>
         <input type="date" name="dato" class = "form-control">     
        </div>

        <div  class="col-lg-3"> 
         <label>Fecha Termino</label> <br>
         <input type="date" name="dato" class = "form-control">
        </div>

        <div class="col-lg-3">
            <label>Meta</label>
                <input type="number" name ="direccion" class="form-control">

             <button href="#1" data-toggle='modal' class="btn btn-danger">Agregar gasto</button>  


        <table class="table table-bordered table-striped">
                        <thead>
                          
                            <th>Articulo</th>
                            <th>Cantidades </th>
                            <th>Descripción</th>
                        </thead>
                         <tbody>
                     </tbody>
                 </table>     
        </div>
                  <a   class="btn btn-success">agregar</a>
                </div>
              
                </div>
            </div>  
        </div> 
    </div>
</div> 
  
<div class="modal fade  " id="1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 
   <div  class="modal-dialog modal-xs" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="" ass="modal-title" id="myModalLabel">Detalles medida</h5>
        </div>
   

        <div class="modal-body">
           <form method="post" action="">    
        </select>
          <label> Producto </label>
            <select class="form-control" style="width: 250px;" name='type' required><option Value="">--Seleccione--</option>        
        </select>
        <label> Cantidad articulos </label>       
                    <input class="form-control" type="number" name="name" placeholder="Cantidad de articulos" style="width: 250px;" required>
        <label> Descripción </label>
        <input class="form-control" type="Text" name="name" placeholder="Cantidad de articulos" style="width: 250px;" required>
        </div>

        <a href=""  class="btn btn-success">agregar</a>
     </div>  
     </div> 

     </div>   

@endsection
