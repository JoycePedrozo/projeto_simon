 
<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 main">
                    <div class="col-md-10">
                        <h1 class="page-header">Documento de Formulario de Acompanhamento da Monitoria</h1>
                    </div>
                </div>
                <div class="col-md-12 main">
                    
                    <table>
                        
                    </table>
                    
                        <h4>Nome:<?= $formularios_acompanhamento[0]->nome_f; ?><br>
                            Matricula: <?= $formularios_acompanhamento[0]->matricula_f; ?><br>
                            Curso: <?= $formularios_acompanhamento[0]->nome_curso; ?><br>
                            Professor Responsável: <?= $formularios_acompanhamento[0]->prof_responsavel_f; ?></h4>


                    <br><br>
                    
                        
                        <table class="table table-striped">
                            <tr>

                                <th>DATA</th>
                                <th>TURNO</th>
                                <th>ATIVIDADES</th>
                              
                            </tr>
                            <?php foreach ($formularios_acompanhamento as $form_acompanhamento) { ?>
                                <tr>

                                    <td><?=date('d/m/Y',strtotime( $form_acompanhamento->data_ac));?></td>
                                    <td><?= $form_acompanhamento->turno; ?></td>
                                    <td><?= $form_acompanhamento->atividade_ac; ?></td>
                                
                                    
                                   
                                    

                                </tr>
                            <?php } ?>
                        </table>
                        
                </div>


            </div>
        </div>
    </div>
</div>
