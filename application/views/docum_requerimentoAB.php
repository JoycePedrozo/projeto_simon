 
<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div class="col-md-12 main">
                    <div class="col-md-10">
                        <h1 class="page-header">Documento de Requerimentos de Aberturas da Monitoria</h1>
                    </div>
                    <div class="col-md-12 main">
                        <?php foreach ($requerimento_da_abertura as $req_abertura) {
                            ?>

                            <h4>Pelo presente requerimento de Abertura de Monitoria, o (a) professor (a) 
                                <?= $req_abertura->nome_p; ?><br> vinculado ao curso <?= $req_abertura->nome_curso; ?> da UNIFACOL - Centro Universitário FACOL,
                                Email: <?= $req_abertura->email_p; ?>, solicita a abertura de Monitoria no periodo <?= $req_abertura->periodo_p; ?> para a
                                disciplina de <?= $req_abertura->disciplina_p; ?> requerendo <?= $req_abertura->vagas; ?> vagas. O (a)
                                professor (a) declara, para os fins que se fizerem necessário, a abertura de monitoria segundo a justificativa que segue abaixo:
                                <?= $req_abertura->justificativas; ?>
                            </h4><br><br>
                            <h4>A) Questões(1ºFase)
                                -ENVIADO A PROVA SEGUNDO O MODELO EM ANEXO.<br>
                                B) Assunto para segunda fase:<?= $req_abertura->assunto; ?>
                            </h4><br><br>
                            <h4>Nestes termos, o (a) afirma estar ciente dos Regulamentos da Instituição que regem os procedimentos a serem seguidos para a criação 
                                de Monitoria na referida disciplina.
                            </h4><br><br>
                            <h4>Vitória de Santo Antão, <?= $req_abertura->data; ?></h4>
                            <br><br><br><br><br><br><br><br><br><br><br>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
