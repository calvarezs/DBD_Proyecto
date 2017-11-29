@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="responsive">
                        <tr>
                            <td>    ID      </td>
                            <td>    Nombre  </td>
                            <td>    Apellido  </td>
                            <td>    Email   </td>
                            <td>    Fono  </td>
                        </tr>
                         @foreach ($usuarios as $usuario)
                         <tr>
                            <td>{{$usuario->id}} </td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->surname}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->phone}}</td>
                         </tr>
                         @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
