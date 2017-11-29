@extends('layouts.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de catástrofes</div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th> Catastofre</th>
                            <th> id     </th>
                            <th>  Progreso   </th>
                            <th> Ver mas    </th>
                        </thead>
                        <tbody>
                         <tr>
                         @foreach ($catastrofes as $c)
                             <td>{{$c->catastrophe_name}} </td>
                             <td>{{$c->type_catastrophe_id}}</td>
                             <td>{{$c->cattastrophe_progress}}</td>
                             <td width="15%">  <button type="button" id="Crear" class="btn btn-primary">
                                                <span class="fa fa-plus"></span> 
                                                </button></td>

                         </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
   
    <div id="ModalCrear" class="modal fade" role="dialog" style="overflow-y: scroll;"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> 
                    <h4 class="modal-tittle">Centros de acopio</h4> 
                </div> 
                <form class="form-horizontal" role="form" id="form-crear">
                    <div class="modal-body"> 
                        <div class="row form-group col-md-12">
                            <label for="crear_nombre" class="control-label col-sm-2 col-xs-12">Centros de acopio: </label>
                            <div class="col-sm-6 col-xs-10 selectContainer">
                                <select id="crear_nombre" name="crear_nombre" class="form-control" style="width: 100%;">
                                        <option value="0">Seleccione...</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->address}}">{{$category->address}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2 col-xs-2">
                                <button type="button" class="btn btn-primary" id="agregar_nombres">
                                    <span class="fa fa-plus"></span>
                                    <span class="hidden-xs"> Bienes requeridos</span> 
                                </button>
                            </div>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span>
                            <span class="hidden-xs"> Cerrar</span> 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="ModalAgregarNombre" class="modal fade" role="dialog"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> 
                    <h4 class="modal-tittle">Bienes</h4>
                </div> 
                <form class="form-horizontal" role="form" id="form-agregar">
                    <div class="modal-body"> 
                        <table class="table table-bordered table-striped">
                        <thead>
                            <th> Bien</th>
                            <th> Cantidad </th>
                            <th>  Clasificación  </th>
                        </thead>
                        <tbody>
                         <tr>
                         @foreach ($articulos as $bien)
                             <td>{{$bien->article_name}} </td>
                             <td>{{$bien->amount}}</td>
                             <td>{{$bien->description}}</td>
                         </tr>
                         @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Cerrar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection