@extends ('layouts.admin')
@section ('contenido')

   <div class="row">
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
         <h3>Listado de Estudiantes</h3>
           
       </div>
   </div>
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
          <tr class="success">
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Opciones</th>
          </tr>
                 @foreach ($respuesta as $r)
                  @if ($r->tipo_estudiante === 1)
                   <tr>
                     <td>{{$r->id}}</td>
                     <td>{{$r->nombre}}</td>
                     <td>{{$r->email}}</td>
                     <td>
                     <?php
                      $id=$r->id;
                      $perfil=$r->foto;
                      echo '<img src="http://apiro.proyectosuniversitarios.com/public/img/foto/'.$id.'/'.$perfil.'" height="80px" width="100px">';    
                      ?>
                     </td>
                     <td>
                      <a href="#"><button class="btn btn-info">Editar</button></a>
                      <a href="#" data-target="#modal-delete-4" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                     </td>
                   </tr>
                   @endif
                   @endforeach 
        </table>
      </div>
       
     </div>
   </div>
  
 @push('scripts')
<script>

</script>
@endpush     


  

@endsection
