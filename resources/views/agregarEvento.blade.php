@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Ingresar Evento
                </div>
                 <div class="panel-body">
                 
        
        

        <div  class="col-lg-3"> 
         <label>Fecha Comienzo</label> <br>
         <input type="date" name="dato" class = "form-control">     
        </div>

        <div  class="col-lg-3"> 
         <label>Fecha Termino</label> <br>
         <input type="date" name="dato" class = "form-control">
        </div>

    
        <div class="col-lg-3">
            <label>Dirección Evento</label>
                <input type="text" name ="direccion" class="form-control">

              <label> Actividades </label>
                <br>
                  <textarea rows="4" cols="70   ">

                 </textarea>
        </div>


              
                </div>
                <a href=""  class="btn btn-success">agregar</a>
            </div>  
        </div> 
    </div>
</div> 
  

@endsection
