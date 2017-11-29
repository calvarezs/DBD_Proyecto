@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Voluntariados</div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th> Catastofre    </th>
                            <th> Medida		   </th>
                            <th> Fecha Inicio  </th>
                            <th> Fecha Término </th>
                            <th> Cupos		   </th>
                            <th> Inscribirse   </th>
                        </thead>
                        <tbody>
                        	@foreach($volunteers as $volunter)
                        		<td>{{$volunter->measures->catastrophe_id}}</td>
                        		<td>{{$volunter->measure_id}}</td>
                        		<td>{{$volunter->measures->start_date}}</td>
                        		<td>{{$volunter->measures->finish_date}}</td>
                        		<td>{{$volunter->required_amount}}</td>
                        		<td><a class="btn btn-large	 btn-info" href="{{url('')}}">Inscribirse</a></td>
                        	@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection