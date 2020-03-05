<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12">
                <h1 class="page-header">Criar Requerimentos de Aberturas da Monitoria</h1>
            </div>

            <div class="container">   
                <div class="col-md-10">
                    <form action="<?= base_url() ?>professor/cadastrarRAM" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nome_p">Digite seu nome completo:</label>
                            <input type="text" class="form-control" id="nome_p" name="nome_p" required>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="curso_p">Escolha um Curso: </label>
                                <select id="curso_p" class="form-control" name="curso_p" required>
                                    <option value="0"> --- </option>
                                    <?php foreach ($cursos as $curso) { ?>
                                        <option value="<?= $curso->idCurso ?>"> <?= $curso->nomeCurso; ?></option>

                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="email_p">Digite seu e-mail: </label>
                                    <input type="email" class="form-control" id="email_p" name="email_p" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="periodo_p">Qual periodo: </label>
                                    <input type="text" class="form-control" id="periodo_p" name="periodo_p" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disciplina_p">Escolha a disciplina: </label>
                                    <input type="text" class="form-control" id="disciplina_p" name="disciplina_p" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="vagas">Quantidade de vagas: </label>
                                    <input type="text" class="form-control" id="vagas" name="vagas" required>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="justificativas">Justifique as sua necessidade de abrir a monitoria:</label><!--
                            <input type="text" class="form-control" id="justificativas">-->
                            <textarea class="form-control" rows="5" id="justificativas" name="justificativas" required></textarea>

                        </div>


                        <div class="form-group">
                            <label for="assunto">Assunto da Segunda Fase: </label>
                            <input type="text" class="form-control" id="assunto" name="assunto"  required>
                        </div>
                       
<!--                        <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <input type="file" name="file">
                        </div>-->
                            <label for="up">Anexar prova aqui: </label>
                            <input type="file" name="up"><br/>
                   

                        <div style="text-align: right">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= base_url(); ?>assets/dist/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/dist/js/bootstrap.js"></script>
<!--<script type="text/javascript">
    $(document).ready(function(){
 
        $('#submit').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>index.php/upload/do_upload',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Image Successful.");
                   }
                 });
            });
         
 
    });
     
</script>-->
