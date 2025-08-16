
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QrBook Registro</title>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
</head>
<style>
  body 
  {
    background-image: url('<?php echo base_url(); ?>assets/img/fondo.webp');
  }
</style>
<body class="hold-transition register-page">
<br>
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img src="<?php echo base_url(); ?>/assets/img/logo.png" heigth="20" width="50%" align="center">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registro de nuevo usuario</p>
      <form action="<?php echo base_url(); ?>InicioC/RegistroC/Registrar" method="post" id="registro" >
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombre" name="nombre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Apellidos" name="apellidos">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="DNI" name="dni">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" id="contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Repetir contraseña" name="r_contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
      </form>
      <br>
      <p class="mb-0">
        <a href="<?php echo base_url(); ?>LoginC" class="btn btn-primary btn-block">Login</a>
      </p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  <br>
</div>
<!-- /.register-box -->  
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script>
$(function () {
  $('#registro').validate({
    rules: {
      nombre: {
        required: true
      },
      apellidos: {
        required: true
      },
      dni: {
        required: true,
        remote: 
        {
            url: "<?php echo base_url(); ?>InicioC/RegistroC/ComprobarAutenticidad",
            type: "post",
        },
      },
      usuario: {
        required: true
      },
      contraseña: {
        required: true,
      },
      r_contraseña: {
        required: true,
        equalTo: "#contraseña",
      }
    },
    messages: {
      nombre: {
        required: "Completa el campo vacio",
      },
      apellidos: {
        required: "Completa el campo vacio",
      },
      dni: {
        required: "Completa el campo vacio",
        remote: "El usuario ya existe"
      },
      usuario: {
        required: "Completa el campo vacio",
      },
      contraseña: {
        required: "Completa el campo vacio",
      },
      r_contraseña: {
        required: "Completa el campo vacio",
        equalTo: "Las contraseñas no coinciden"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
