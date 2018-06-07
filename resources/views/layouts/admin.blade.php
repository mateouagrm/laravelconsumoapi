<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uber |www.Uber</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  
    <!-- Theme style -->
     <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
     <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
   
    <!------ Include the above in your HEAD tag ---------->
    


  </head>
  <body  >


  <nav class="navbar navbar-inverse top-nav">
      <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <ul>
      <li><a href="#" class="menu-icon" id="btn-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
      <li><a href="#" class="brand-logo"><img src="https://lh3.googleusercontent.com/-N4NB2F966TU/WM7V1KYusRI/AAAAAAAADsM/QUIsUhwEVAgj1-fK8mqzAqDiDwEKlKc7QCL0B/w185-d-h40-p-rw/logo.png"></a></li>      
      </ul>
    </div>
          
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-left">      
      <form class="navbar-form navbar-left">
      <div class="input-group">        
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
    <input type="text" class="form-control" placeholder="Search">
      </div>
    </form> 
    </ul>
         
    <ul class="navbar-right">
      <li><a href="#" class="profil"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADso/ZGTVC0LVk1cFReheTbZzpGa2aawWyV8QACL0B/w140-d-h148-p-rw/profile-pic.jpg" class="img-responsive img-circle" height="80px" width="80px"></a> {{ Auth::user()->nombre }}</li>
    </ul>
    </div>
    </div>
 </nav>  
   
<div class="container-fluid">
 <div class="side-navbar" id="sideNav">
  <div class="side-nave-iner">
    <ul>
     <li class="side-li"><a href="{{URL::action('PrincipalController@index')}}"><i class="fa fa-home" aria-hidden="true"></i> <span class="removeText">Home</span></a></li>
     @if(Auth::user()->tipo_administrador === 1)
     <li class="side-li"><a href="{{URL::action('UsuarioController@clienteget')}}"><i class="fa fa-user" aria-hidden="true"></i> <span class="removeText">Registro Estudiante</span></a></li>
     @endif
     <li class="side-li"><a href="{{URL::action('UsuarioController@listaestudiantes')}}"><i class="fa fa-group" aria-hidden="true"></i><span class="removeText"> Lista Estudiantes</span></a></li>
     <li class="side-li"><a href="{{URL::action('UsuarioController@listachoferes')}}"><i class="fa fa-group" aria-hidden="true"></i><span class="removeText"> Lista Choferes</span></a></li>
     <li class="side-li"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="removeText"> Registro Chofer</span></a></li>
     <li class="side-li"><a href="{{URL::action('UsuarioController@getregistrarrutas')}}"><i class="fa fa-cog" aria-hidden="true"></i><span class="removeText"> Registrar Ruta</span></a></li>
     <li class="side-li"><a href="#"><i class="fa fa-bell" aria-hidden="true"></i><span class="removeText"> Cuenta</span></a></li>
     <li class="side-li"><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i><span class="removeText"> Salir</span></a></li>
    </ul>
   </div>
  </div>
 </div>

<div class="container">
 
    @yield('contenido')
   

</div>

     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      @stack('scripts')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
    <script src="{{asset('js/mi.js')}}"></script>

  </body>
</html>
