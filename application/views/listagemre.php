<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-10">
                        <h1 class="page-header">Listagem de Relatorios Finais da Monitoria</h1>
                </div>
                <div class="col-md-12" style="padding-bottom: 10px">
                    
                    <form action="<?= base_url('home/pesquisar3/'.@$id_curso) ?>" method="POST">
                      <div class="row">
                            <div class="col-md-10">
                                <label for="pesquisar"></label>
                                <input type="text" class="form-control" name="pesquisar" id="pesquisar" placeholder="Pesquisar usuário">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success btn-block">pesquisar</button>
                            </div>
                      </div>
                    </form>
                     
                    <br>
                <script src="<?= base_url(); ?>assets/build/js/custom.min.js"></script>
                </div>
               <div class="col-md-12">


                        <table class="table table-striped">
                            <tr>

                                <th>NOME</th>
                                <th>MATRICULA</th>
                                <th>CURSO</th>
                                <th>DISCIPLINA</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php foreach ($relatorios_final as $rel_final) { ?>

                                <tr>

                                    <td><?= $rel_final->nome_m; ?></td>
                                    <td><?= $rel_final->matricula_m; ?></td>
                                    <td><?= $rel_final->nome_curso; ?></td>
                                    <td><?= $rel_final->disciplina_m; ?></td>


                                    <td><a href="<?= base_url('Home/visualizar2/' . $rel_final->id_r) ?>" class="btn btn-success btn-group">Vizualizar</a>
                                        <a href="<?= base_url('Home/excluir2/' . $rel_final->id_r) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover esse Requerimento?')">Deletar</a></td>

                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

