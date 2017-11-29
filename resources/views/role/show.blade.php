<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

                    <ul class="list-group">
                    <li class="list-group-item active">ROL N° {{ $rol->id }}</li> 
                    <li class="list-group-item">Nombre: {{ $rol->rol_name }}</li>
		            <li class="list-group-item">Descripción: {{ $rol->rol_description }}</li>
		            <li class="list-group-item">Nivel de acceso del usuario: {{ $rol->type_permission }}</li>               
                    </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{ route('roles.index') }}" class="btn btn-danger pull-right">
            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
            Volver</a>
        </div>
    </div>
</div>