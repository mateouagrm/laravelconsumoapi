@extends ('layouts.admin')
@section ('contenido')

 <style type="text/css">
  

    .othertop{margin-top:10px;}

</style>
 <br><br><br><br><br>
   <div class="container">

<div class="row">
<div class="col-md-8 ">
@include('mensajelogin')
<form class="form-horizontal" action="estudiante" method="post"  enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<fieldset>

<!-- Form Name -->
<legend>Registro de Estudiante</legend>

<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">nombre</label>  
  <div class="col-md-4">
   <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name (Full name)" name="nombre" type="text" placeholder="nombre" class="form-control input-md" required>
      </div>
  </div>
</div>
 
 <div class="form-group">
  <label class="col-md-4 control-label" for="email">email</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-envelope-o"></i>
       </div>
    <input id="Email Address" name="email" type="email" placeholder="email" class="form-control input-md" required>
      </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password">password</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-lock"></i>
       </div>
    <input id="Email Address" name="password" type="password" placeholder="password" class="form-control input-md" required>
      </div>
  </div>
</div>


<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="foto">foto</label>
  <div class="col-md-4">
    <input  id="f" name="foto" class="input-file" type="file" required>
  </div>
</div>

  <div class="form-group">
      <div class="col-md-4">
      <input type="submit" class="btn btn-primary" value="Regístrar">
      </div>
   </div>

</fieldset>
</form>
</div>
 

   <div class="form-group" >
    <div class="input-group">
       <div style="padding-left: 20%;">
        <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" id="i"  alt="avatar"  
          style=" width: 200px; height: 200px;" >
      </div>
    </div>
   </div>

</div>
   </div>
  
 @push('scripts')
<script>
    $('#f').on('change',function(ev){
           var f =ev.target.files[0];
           var fr = new FileReader();
           fr.onload = function(ev2){
            console.dir(ev2);
             $('#i').attr('src',ev2.target.result);
           };
           fr.readAsDataURL(f);
          
    });
</script>
@endpush     


  

@endsection
