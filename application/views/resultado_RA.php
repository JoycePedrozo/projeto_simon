 
<div class="content-wrapper">

    <div class="box box-danger">
        <div class="box-header">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div class="col-md-10">
                    <h1 class="page-header">Listagem de Requerimentos de Aberturas da Monitoria</h1>
                </div>
                <div class="col-md-12" style="padding-bottom: 10px">
                    <form action="<?= base_url() ?>home/pesquisar/" method="POST">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="busca" placeholder="Pesquisar usuário" required>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success btn-block">pesquisar</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <tr>
                            <th>nome</th>
                            <th>curso</th>
                            <th>disciplina</th>
                            <th>vagas</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php foreach ($resultado_RA as $req_abertura) {
                            ?>
                            <tr>
                                <td><?= $req_abertura->nome_p; ?></td>
                                <td><?= $req_abertura->nome_curso; ?></td>
                                <td><?= $req_abertura->disciplina_p; ?></td>
                                <td><?= $req_abertura->vagas; ?></td>
                                <td><a href="<?= base_url('Home/anexos/' . $req_abertura->id_p) ?>" class="btn btn-primary btn-group">Anexos</a>
                                    <a href="<?= base_url('Home/visualizar/' . $req_abertura->id_p) ?>" class="btn btn-success btn-group">Vizualizar</a>
                                    <a href="<?= base_url('Home/excluir/' . $req_abertura->id_p) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover esse Requerimento?')">Deletar</a></td>
                            </tr>
                            <div class="col-md-4">
                            </div>
                        <?php } ?>
                        <a href="<?= base_url('Home/download/') ?>" class="btn btn-primary btn-group">Download da tabela</a>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
