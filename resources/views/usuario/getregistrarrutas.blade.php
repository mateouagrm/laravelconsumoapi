@extends ('layouts.admin')
@section ('contenido')
 
    <style>
      #map {
        height: 500px;
        width: 100%;
       }
      .othertop{margin-top:10px;}
    </style>
 
 
   <div class="container">
<div class="row">
<div class="col-md-8 ">
@include('mensajelogin')
<form class="form-horizontal" action="ruta" method="post"  enctype="multipart/form-data" id="f1" name="f1">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<fieldset>

<!-- Form Name -->
<legend>Registro de Ruta</legend>

<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label" for="costo">costo</label>  
  <div class="col-md-4">
   <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-money">
        </i>
       </div>
       <input id="Name (Full name)" name="costo" type="number" placeholder="costo" class="form-control input-md" required>
      </div>
  </div>
</div>
 
<div class="form-group">
  <label class="col-md-4 control-label" for="auto">auto</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-automobile"></i>
       </div>
          <select name="id_auto" class="form-control" required>
          @foreach($auto as $autos)
          @if ($autos->id_chofer === Auth::user()->id)
            <option value="{{$autos->id}}">
            {{$autos->placa}}
             </option>
          @endif
          @endforeach 
          </select>
      </div>
  </div>
</div>

 <div class="form-group">
  <label class="col-md-4 control-label" for="salida">salida</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-hourglass-half"></i>
       </div>
    <input id="Email Address" name="salida" type="datetime-local" class="form-control input-md" required>
      </div>
  </div>
</div>
 
 <div id="coordenadas">
   <input type="hidden" name="gps">
 </div>
  <div class="form-group">
      <div class="col-md-4">
      <input type="submit" class="btn btn-primary" value="Regístrar">
      </div>
   </div>

</fieldset>
</form>
</div>
 

</div>
   </div>



 <h3 style="text-align: center">Traza tu ruta  <button style="background: #428bca; color: white;" onclick="agregar()">agregar ruta</button><p id="listo"></p></h3>
 
    <div id="map"></div>
   <br>
 @push('scripts')

<script>
     // This example creates an interactive map which constructs a polyline based on
      // user clicks. Note that the polyline only appears once its path property
      // contains two LatLng coordinates.

      var poly;
      var map;
      var coor=[];

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: -17.784326, lng: -63.183952}  // Center the map on Chicago, USA.
        });

        poly = new google.maps.Polyline({
          strokeColor: '#000000',
          strokeOpacity: 1.0,
          strokeWeight: 3
        });
        poly.setMap(map);

        // Add a listener for the click event
        map.addListener('click', addLatLng);
        map.addListener('rightclick', addLatLngDoble);
        
      }

      // Handles click events on a map, and adds a new point to the Polyline.
      function addLatLng(event) {
        var path = poly.getPath();

        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear.
        path.push(event.latLng);
       // alert(event.latLng);
       // coor=event.latLng;
        //alert(event.latLng);
        coor.push(event.latLng.lat());
        coor.push(event.latLng.lng());
        //alert(coor);
      }

    function addLatLngDoble(event) {
        var path = poly.getPath();

        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear.
        path.push(event.latLng);
       // alert(event.latLng);
       // coor=event.latLng;
        //alert(event.latLng);
        coor.push(event.latLng.lat());
        coor.push(event.latLng.lng());
        //alert(coor);
        
        // Add a new marker at the new plotted point on the polyline.
       var marker = new google.maps.Marker({
          position: event.latLng,
          title: 'Partida',
          map: map
        });
      }

 /*   function reafirmar() {
     var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center:  {lat: -17.784326, lng: -63.183952}
        });

      alert(coor.length);
      var flightPlanCoordinates = [];
      var j=0;
      for (var i = 0; i < coor.length; i=i+2) {
          flightPlanCoordinates[j]= {lat: coor[i], lng: coor[i+1]};
          j++;
      }
      var flightPlanCoordinates = [
          {lat: 37.772, lng: -122.214},
          {lat: 21.291, lng: -157.821},
          {lat: -18.142, lng: 178.431},
          {lat: -27.467, lng: 153.027}
        ];
       var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        flightPath.setMap(map);
      } */


    function agregar() {
    document.f1.gps.value = coor;
   
       escribir = document.getElementById("listo");
       escribir.style.backgroundColor="#2AB8A0";
       escribir.style.border="3px #229C88 solid";
       escribir.innerHTML = "agregado";
      } 



</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCucN7KjIJiSw4cFnmYrkwll3E4hzex4o&callback=initMap"
    async defer></script>
@endpush         


  

@endsection
