 
<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-12 main">
                <div class="col-md-10">
                    <h1 class="page-header">Documento de Requerimentos da Inscrição da Monitoria</h1>
                </div>
                <div class="col-md-12 main">
                    <?php foreach ($requerimentos_inscricao as $req_inscricao) {
                        ?>

                        <h4>Pelo presente requerimento de Inscrição na Monitoria Científica, o (a) aluno(A)
                          <?= $req_inscricao->nome_a; ?> telefone: <?= $req_inscricao->telefone_a; ?> 
                          email(s): <?= $req_inscricao->email_a; ?> cursando o <?= $req_inscricao->periodo_a; ?> 
                          periodo do <?= $req_inscricao->nome_curso; ?> da UNIFACOL - Centro Universitário FACOL, 
                          solicita participar do processo de seleção para as disciplinas de <?= $req_inscricao->disciplina1_a; ?> /<?= $req_inscricao->disciplina2_a; ?>.
                          Nestes termos, o (a) aluno (a) afirma estar ciente dos Regulamentos da Instituição que 
                          regem os procedimentos a serem seguidos para a participar do processo de Monitoria na 
                          referida disciplina.<br><br>
                          
                          Possui algum auxilio financeiro? <?= $req_inscricao->auxilio_a; ?> <br><br><br>
                          
                          Vitória de Santo Antão, <?= $req_inscricao->data_a; ?>
                          
                          
                        </h4>
                        
                        <br><br><br><br><br><br><br><br><br><br><br>

                    
                <?php } ?>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
