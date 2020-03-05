<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <!--<link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dist/css/inicio.css" media="screen" />
  <title>SIMON | Ínicio</title>
</head>
<body>
    <div id="container" align="center">
    		<!--<img href="<?= base_url(); ?>assets/dist/css/inicio.css">-->
                <img src="<?= base_url(); ?>assets/dist/img/logofinal.png" class="mx-auto d-block" style="width:50%"> 
                 <!--<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/inicio.css" src="<?= base_url(); ?>assets/dist/img/logofinal.png" width="250">-->
                  <!--<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/img/logofinal.png" width="250">-->
    </div>
    <div class="btn-group" align="center">
 		
                <a href="<?= base_url('tela_inicio/administrador/') ?>" id="adm" style="width:90" class="btn btn-primary btn-group">Administrador</a>
                <a href="<?= base_url('tela_inicio/professor/') ?>" id="prof" style="width:90" class="btn btn-primary btn-group">Professor</a>
                <a href="<?= base_url('tela_inicio/aluno/') ?>" id="al" style="width:90" class="btn btn-primary btn-group">Aluno</a>
<!--  		<button id="adm" class="btn btn-primary"  style="width:90">Administrador</button>
                <button id="prof" class="btn btn-primary" style="width:90">Professor</button>
  		<button id="al" class="btn btn-primary" style="width:90">Aluno</button>-->
	</div>
</body>
</html>