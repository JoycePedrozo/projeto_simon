<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMON | Cadastro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/iCheck/square/blue.css">

 
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <img src="<?= base_url(); ?>assets/dist/img/logofinal.png" class="mx-auto d-block" style="width:50%"> 
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Cadastrar novo Professor</p>

    <form action="<?= base_url()?>professor/cadastrar_professor/" method="post">
      <div class="form-group has-feedback">
          <label for="nome_professor">Nome:</label>
        <input type="text" class="form-control" name="nome_professor" id="nome_professor" placeholder="Digite seu nome completo" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
       
      <div class="form-group has-feedback">
          <label for="email_professor">E-mail:</label>
        <input type="email" class="form-control" name="email_professor" id="email_professor" placeholder="Digite seu E-mail" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <label for="senha_professor">Senha:</label>
          <input type="password" class="form-control" name="senha_professor" id="senha_professor" placeholder="Digite sua senha" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
<!--      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>-->
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

    <a href="<?= base_url(); ?>professor/login_professor" class="text-center">Eu já estou cadastrado</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
