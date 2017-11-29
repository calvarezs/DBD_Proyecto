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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de catástrofes</div>

                <div class="panel-body">
                    <table class="responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>    Catástofre      </th>
                            <th>    Tipo  </th>
                            <th>    Progreso   </th>
                            <th>    Acción  </th>
                        </thead>
                         @foreach ($catastrophes as $catast)
                         <tbody>
                         <tr>
                            <td>{{$catast->catastrophe_name}} </td>
                            <td>{{$catast->type_catastrophe->description}}</td>
                            <td>{{$catast->catastrophe_progress}}</td>
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
                    <h4 class="modal-tittle">Donaciones</h4> 
                </div> 
                <form class="form-horizontal" role="form" id="form-crear">
                    <div class="modal-body"> 
                         <table class="table table-bordered table-striped">
                        <thead>
                            <th> Meta</th>
                            <th> Recaudado </th>
                        </thead>
                        <tbody>
                         <tr>
                         @foreach ($money as $m)
                             <td>{{$m->total_amount}} </td>
                             <td> 0 </td>
                         </tr>
                         @endforeach
                        </tbody>
                    </table>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span>
                            <span class="hidden-xs"> Cerrar</span> 
                        </button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection