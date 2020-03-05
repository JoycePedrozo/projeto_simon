<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 main">
                    <div class="col-md-10">
                        <h1 class="page-header">Listagem de Requerimentos de Inscrição da Monitoria</h1>
                    </div>

                    <div class="col-md-12" style="padding-bottom: 10px">
                    
                    <form action="<?= base_url('home/pesquisar2/'.@$id_curso) ?>" method="POST">
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
<!--                            <a target="_blank" href="<?= base_url('Home/download/') ?>" class="btn btn-primary btn-group">Download da tabela</a>-->
                </div>
               <div class="col-md-12">
                        <table class="table table-striped">
                            <tr>

                                <th>NOME</th>
                                <th>MATRICULA</th>
                                <th>CURSO</th>
                                <th>DISCIPLINAS</th>
                                <th>AUXILIO</th>
                                <th></th>
                                <th></th>

                            </tr>
                            <?php foreach ($requerimentos_inscricao as $req_inscricao) {
                                ?>
                                <tr>

                                    <td><?= $req_inscricao->nome_a; ?></td>
                                    <td><?= $req_inscricao->matricula_a; ?></td>
                                    <td><?= $req_inscricao->nome_curso; ?></td>
                                    <td><?= $req_inscricao->disciplina1_a; ?>/<?= $req_inscricao->disciplina2_a; ?></td>
                                    
                                    <td><?= $req_inscricao->auxilio_a; ?></td>

                                    <td><a href="<?= base_url('Home/visualizar3/' . $req_inscricao->id_a) ?>" class="btn btn-success btn-group">Vizualizar</a>
                                        <a href="<?= base_url('Home/excluir1/' . $req_inscricao->id_a) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover esse Requerimento?')">Deletar</a></td>

                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>