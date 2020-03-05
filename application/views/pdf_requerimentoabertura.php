<style>
    table {
  border-collapse: collapse;
  width: 50em;
  border: 1px solid #666;
}
thead {
  /*background: #ccc url(https://www.devfuria.com.br/html-css/tabelas/bar.gif) repeat-x left center;*/
  border-top: 1px solid #a5a5a5;
  border-bottom: 1px solid #a5a5a5;
}
/*tr:hover {
  background-color:#3d80df;
  color: #fff;
}*/
/*thead tr:hover {
  background-color: transparent;
  color: inherit;
}*/
/*tr:nth-child(even) {
    background-color: #edf5ff;
}*/
th {
  font-weight: normal;
  text-align: left;
}
th, td {
  padding: 0.1em 1em;
}
</style> 
<div class="content-wrapper">

    <div class="box box-danger">
        <div class="box-header">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header">Requerimento de Abertura da Monitoria</h1>
                <div class="col-md-12">
                    
                    <table class="table table-striped table-bordered">
                        <tr>

                            <th><h4>Nome:</h4></th>
                            <th><h4>Curso:</h4></th>
                            <th><h4>Disciplina:</h4></th>
                            <th><h4>Vagas:</h4></th>
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
                               
                            </tr>
                            
                        
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
