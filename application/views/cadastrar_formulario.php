<?php // echo date("m"); exit; ?>
<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12">
                <h1 class="page-header">Criar Fomulários de Acompanhamento Mensal da Monitoria</h1>
            </div>

            <div class="container">   
                <div class="col-md-10">
                    <form action="<?= base_url() ?>professor/cadastrarFAM" method="POST">
                        <div class="form-group">
                            <label for="nome_f">Digite seu nome completo:</label>
                            <input type="text" class="form-control" name="nome_f" id="nome_f">
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="matricula_f">Digite sua matricula: </label>
                                    <input type="text" class="form-control" name="matricula_f" id="matricula_f">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="curso">Escolha um Curso: </label>
                                    <select id="curso_f" class="form-control" name="curso_f" required>
                                        <option value="0"> --- </option>
                                        <?php foreach ($cursos as $curso) { ?>
                                            <option value="<?= $curso->idCurso ?>"> <?= $curso->nomeCurso; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="prof_responsavel_f">Professor Responsável: </label>
                                    <input type="text" class="form-control" name="prof_responsavel_f" id="prof_responsavel_f">
                                </div>
                            </div>

                        </div>
                      
                       
                      
                        <div class="row">
                        <div class="col-md-4">
                            <label for="data"> Data: </label>
                        </div>
                             <div class="col-md-4">
                            <label for="turno">Turno: </label>
                        </div>
                             <div class="col-md-4">
                            <label for="atividade_ac"> Atividade: </label>
                        </div>
                        </div>
                        
                        
                        <div class="row">
                            

                        <div class="col-md-4">
                            <input class="form-control" style="padding:5px;" name="data_ac[]" type="date" required>
                        </div>
                         <div class="col-md-4">
                            <input class="form-control" style="padding:5px;" name="turno[]" type="text" placeholder="Turno" required>
                         </div>
                         <div class="col-md-4">
                            <input class="form-control"  style="padding:5px;" name="atividade_ac[]" type="text" placeholder="Atividades Desenvolvidas" required>
                         </div>
                        </div>
                              <div class="row" id="teste"> </div>
                            <button type="button" style="padding:5px;" onclick="btn()">Mais Dados</button>
                        
                           
                            
                        <br><br><br>
                        <div style="text-align: right">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                        </div>
                    </form>


                </div>
            </div>

            <script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

            <script>

                          function btn() {

                              $("#teste").append('<div class="col-md-4"> <input class="form-control" style="width:100%; padding:5px;" name="data_ac[]" type="date" required></div><div class="col-md-4"> <input class="form-control" style="width:100%;  padding:5px;" name="turno[]" type="text" placeholder="Turno" required></div></div><div class="col-md-4"> <input class="form-control" style="width:100%;  padding:5px;" name="atividade_ac[]" type="text" placeholder="Atividades Desenvolvidas" required></div>');
                          }

            //    $(window).ready(function(){
            //        $("#teste").append('<div style="color:red;"> teste </div>');
            //    });
            </script>
        </div>
    </div>
</div>

