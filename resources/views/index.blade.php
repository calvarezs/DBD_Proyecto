


    @extends('layouts.app')

@section('content')

         
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('Donar_Bienes') }}">Donar bienes</a></li>
                        <li><a href="{{ route('Voluntariado') }}">Voluntariado</a></li>
                        <li><a href="{{ route('Evento_Beneficio') }}">Eventos</a></li>
                        <li><a href="{{ route('Donar_Dinero') }}">Donaciones</a></li>
                      
                    </ul>
                </div>
<style type="text/css">
    
</style>
<div class="col-md-12" id="respuesta2">
<div class="col-md-6" style="background-image: url('images/back.jpg'); background-size: 100% 100%; height: 575px; background-repeat: no-repeat; float: left;">
<div style="position: absolute; left: 15%;">
    <font color="white" style=" font-family: 'arial black'; font-size: 36pt;"> <p><b>PASA A LA ACCIÓN</b></p></font>
</div>
    
</div>
    <div  class="col-md-6" id="map" style="  height: 575px; float: right;"></div>
     <div>
    <script>
  
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: -33.0506309, lng: -71.6461538}
  });

  setMarkers(map);
}

// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
var beaches = [
  ['Tsunami', -33.0506309,-71.6461538, 4],
  ['Incendio', -33.0345578,-71.6458943, 5],
  ['Huracan', -34.0555578, -71.6455943, 3],
  ['Terremoto', -33.0455578, -71.6466943, 2],
  ['Tornado', -33.0395578, -71.6469943, 1]
];

function setMarkers(map) {
  // Adds markers to the map.

  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.

  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.
  var image = {
    url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32)
  };
  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
  var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: 'poly'
  };
  for (var i = 0; i < beaches.length; i++) {
    var beach = beaches[i];
    var marker = new google.maps.Marker({
      position: {lat: beach[1], lng: beach[2]},
      map: map,
      icon: image,
      shape: shape,
      title: beach[0],
      zIndex: beach[3]
    });
  }
}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHCKqM2Jq9NNMcflqz2xOTa49utDWGBvM
&callback=initMap">
    </script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script type="text/javascript">
  
  $(document).ready(function () {

      $("#donar").click(function(){
         
       var url = '/../resources/donar.php';
        
         $.ajax({
           type: "POST",
           url: url,
           data: $("#").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
             
             $("#respuesta2").html(data);
          }

        });
    return false;

       });
      $("#voluntariado").click(function(){
         
         var url = ;
          $.ajax({
           type: "POST",
           url: url,
           data: $("#").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
             
             $("#respuesta2").html(data);
          }

        });
    return false;

       });
      $("#").click(function(){
         
   
         var url = ;
          $.ajax({
           type: "POST",
           url: url,
           data: $("#formdesc").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
             
             $("#").html(data);
          }

        });
    return false;

       });
      $("#").click(function(){
         
        var url = ;
         $.ajax({
           type: "POST",
           url: url,
           data: $("#formdesc").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
             
             $("#").html(data);
          }

        });
    return false;
        

       });
  
    });

</script>
@endsection


