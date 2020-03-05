 <script src="assets/build/js/custom.min.js"></script>
<div class="content-wrapper">

    <div class="box">
        <div class="box-header">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-10">
                    <h1 class="page-header">Listagem de Requerimentos de Aberturas da Monitoria</h1>
                </div>
                
                <div class="col-md-12" style="padding-bottom: 10px">
                    
                    <form action="<?= base_url('home/pesquisar/'.@$id_curso) ?>" method="POST">
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
                            <a target="_blank" href="<?= base_url('Home/download/') ?>" class="btn btn-primary btn-group">Download da tabela</a>
                </div>
               <div class="col-md-12">
                    
                    <table class="table table-striped table-bordered">
                        <tr>

                            <th>nome</th>
                            <th>curso</th>
                            <th>disciplina</th>
                            <th>vagas</th>
                            <th></th>
                            <th></th>
                           

                        </tr>
                        <?php foreach ($requerimento_da_abertura as $req_abertura) {
                            ?>
                            <tr>

                                <td><?= $req_abertura->nome_p; ?></td>
                                <td><?= $req_abertura->nome_curso; ?></td>
                                <td><?= $req_abertura->disciplina_p; ?></td>
                                <td><?= $req_abertura->vagas; ?></td>
                                <td><a target="_blank" href="<?= base_url($req_abertura->file_name) ?>" class="btn btn-primary btn-group">Anexos</a>
                                    <a href="<?= base_url('Home/visualizar/' . $req_abertura->id_p) ?>" class="btn btn-success btn-group">Vizualizar</a>
                                    <a href="<?= base_url('Home/excluir/' . $req_abertura->id_p) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover esse Requerimento?')">Deletar</a></td>

                            </tr>
                            
                            <div class="col-md-4">
                        
                            </div>
                        <?php } ?>
                            
                    </table>
                </div>
                <br><br><br><br><br><br><br>
            </div>
            
        </div>
    </div>
</div>
