<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photography |www.eventos </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/logo-deventos_web.jpg')}}">
    <link rel="shortcut icon" href="{{asset('img/logo-deventos_web.jpg')}}">
   
  
  </head>
  <style type="text/css">
  

.in-page {
    min-height: 520px;
}

.main {
    position: relative;
}

a {
    color: #1b5a7c;
}

a:hover, a:focus {
    color: #1b5a7c;
}

.btn-cyan {
    background-color: #1b5a7c;
    color: #fff;
}

.btn-cyan:hover {
    color: #fff;
    opacity: 0.9;
}

.form-control:focus {
    border-color: #1b5a7c;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(24, 204, 162, 0.6);
    outline: 0 none;
}

.min-height {
    min-height: 380px;
}

.login-screen {
    background-image: url(https://www.squiz.net/__public/Systems/Perspective/FileCache/1-32000/465/prop/header-bg-image.jpg?t=1472431690);
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
}

.login-screen:before {
    content: "";
    background: rgba(0,0,0, 0.5);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.login-center {
    text-align: center;
}

.login {
    width: 320px;
    color: #fff;
}

.login .login-form {
    text-align: center;
}

.login label {
    color: #fff;
}

.login-form .input-group .form-control {
    background: none;
    height: 44px;
    color: #ddd;
}

.login-form .input-group .input-group-addon {
    background: none;
}

.login-form .input-group .input-group-addon .glyphicon {
    color: #1b5a7c;
}

.login-form .input-group .form-control::-moz-placeholder {
    color: #fff;
    opacity: 0.3;
}

.login .sign-btn input.btn {
    background: #1b5a7c;
    border-color: #1b5a7c;
    color: #fff;
    width: 180px;
}

.login .sign-btn a {
    text-decoration: none;
}

.login .checkbox {
    margin-top: 20px;
    margin-bottom: 20px;
}

.login .forgot {
    display: inline-block;
    margin: 30px 0;
}

  </style>
<body class="main">

<div class="login-screen"></div>
    <div class="login-center">
        <div class="container min-height" style="margin-top: 80px;">
          <div class="row">
                <div class="col-xs-4 col-md-offset-8">
                    <div class="login" id="card">
                      <div class="front signin_form"> 
                        @include('cliente.message1')
                        <p>Login</p>
                          <form class="login-form" action="login" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="email" class="form-control" placeholder="escribe tu correo" name="email" required>
                                      <span class="input-group-addon">
                                          <i class="fa fa-user" style="color: #1b5a7c;"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" class="form-control" placeholder="escribe tu contraseñas" name="password" required>
                                      <span class="input-group-addon">
                                          <i class="fa fa-lock" style="color: #1b5a7c;"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox">recordar contraseña?.</label>
                              </div>
                              
                              <div class="form-group sign-btn">
                                  <input type="submit" class="btn" value="Login">
                                  <p><a href="#" class="forgot"></a></p>
                                  <p><strong>quiere registrarse?</strong><br><a href="#" id="flip-btn" class="signup signup_link"><strong>Regístrate para una nueva cuenta</strong></a></p>
                              </div>
                          </form>
                        </div>
                        <div class="back signup_form" style="opacity: 0;"> 
                          <p>Regístrese para su nueva cuenta</p>
                          <form class="login-form" action="register" method="post"  enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="text" class="form-control" placeholder="nombre" name="nombre" required>
                                      <span class="input-group-addon">
                                          <i class="fa fa-user" style="color: #1b5a7c;"></i>
                                      </span>
                                  </div>
                              </div>
                               <div class="form-group">
                                  <div class="input-group">
                                      <input type="text" class="form-control" placeholder="apellido" name="apellido" required>
                                      <span class="input-group-addon">
                                          <i class="fa fa-user" style="color: #1b5a7c;"></i>
                                      </span>
                                  </div>
                              </div>
                               <div class="form-group">
                                  <div class="input-group">
                                      <input type="number" class="form-control" placeholder="telefono" name="telefono" required>
                                      <span class="input-group-addon">
                                          <i class="fa fa-pencil" style="color: #1b5a7c;"></i>
                                      </span>
                                  </div>
                              </div>
                                <div class="form-group">
                                  <div class="input-group">
                                      <input type="email" class="form-control" placeholder="Email" name="email" required>
                                      <span class="input-group-addon">
                                          <i class="fa fa-envelope" style="color: #1b5a7c;"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" class="form-control" placeholder="contraseña" name="password" required>
                                      <span class="input-group-addon">
                                          <i class="fa fa-lock" style="color: #1b5a7c;"></i>
                                      </span>
                                  </div>
                              </div>
                              <p>Seleciona una foto tuya para poder encontrarte</p>
                    
                              <div class="form-group" >
                                  <div class="input-group">
                                  <div style="padding-left: 20%;">
                                     <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" id="i"  alt="avatar"  
                                  style=" width: 160px; height: 160px;" >
                                  </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="file" id="f" class="form-control" name="perfil" value="selecciona una foto" required>
                                      <span class="input-group-addon">
                                          <i class="fa fa-camera" style="color: #1b5a7c;"></i>
                                      </span>
                                  </div>
                              </div>
                            
                              
                              <div class="form-group sign-btn">
                                  <input type="submit" class="btn" value="Regístrate">
                                  <br><br>
                                  <p>Ya tienes Cuenta? <a href="#" id="unflip-btn" class="signup"><strong>Login</strong></a></p>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>
    

    
     <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    @stack('scripts')

   
   <script type="text/javascript" >
     
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

 
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>
    
    </body>
</html>
