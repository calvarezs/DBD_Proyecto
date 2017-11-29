@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Ingresar Voluntariados
                </div>
               <form method="post" action="{{route('addV')}}">  
            <div>
                <div  class="col-lg-3"> 
         <label>Fecha Comienzo</label> <br>
         <input type="date" name="inicio" class = "form-control">     
        </div>

        <div  class="col-lg-3"> 
         <label>Fecha Termino</label> <br>
         <input type="date" name="final" class = "form-control">
        </div>
    
                <label> Dirección</label><br>
               <input type="text" name ="direccion" class="form-control">
                <label> Horas de Trabajo </label><br>
            <input type="number" name ="horas" class="form-control">
        <br>
                <label> Descripción </label>
             <input type="text" name ="descripcion" class="form-control">
        <br>   

                <label>Cantidad de Voluntarios Requeridos: </label><br>
                
            <input type="number" name ="cantidad" class="form-control">
        
        
           
                </div> 
                 <br>

<center><input type="submit" name="procesar" class="btn btn-primary" value="Agregar"></center>

</form>
                 <div class="panel-body">
                </div>  
            </div> 
        </div>
    </div>
</div> 


  

@endsection
