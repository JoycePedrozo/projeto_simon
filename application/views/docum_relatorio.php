 
<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 main">
                    <div class="col-md-10">
                        <h1 class="page-header">Documento de Relatório Final da Monitoria</h1>
                    </div>
                    <div class="col-md-12 main">
                        <?php foreach ($relatorios_final as $rel_final) {
                            ?>

                            <h4>
                                1)Dados do Monitor:<br>
                                Nome:&nbsp;<?= $rel_final->nome_m; ?><br>
                                Matrícula:&nbsp;<?= $rel_final->matricula_m; ?><br>
                                Curso:&nbsp;<?= $rel_final->nome_curso; ?><br>
                                Disciplina:&nbsp;<?= $rel_final->disciplina_m; ?><br>
                                Local de Atendimento:&nbsp;<?= $rel_final->local_m; ?><br>
                                Hora de Atendimento:&nbsp;<?= $rel_final->hora_atend_m; ?><br>
                                Professor Orientador:&nbsp;<?= $rel_final->professor_o; ?><br><br>

                                2)Avaliação de desempenho do monitor:(Neste item, o professor da disciplina
                                deve indicar, sucintamente,o desempenho e aprendizado do monitor.)&nbsp;<?= $rel_final->avaliacao_m; ?><br><br>

                                3)Número Aproximado de Alunos Atendidos:&nbsp;<?= $rel_final->numeros_aprox_m; ?><br><br>

                                4)Avaliação da Prática de Monitoria:<br>
                                a)O tempo dedicado à monitoria:&nbsp; <?= $rel_final->questao_a; ?><br>
                                b)O espaço físico para a execulão da monitoria:&nbsp; <?= $rel_final->questao_b; ?><br>
                                c)O aproveitamento por parte dos alunos:&nbsp; <?= $rel_final->questao_c; ?><br>
                                d)A sua capacitação para assumir as atribuições:&nbsp; <?= $rel_final->questao_d; ?><br>
                                e)A sua assiduidade como monitor:&nbsp; <?= $rel_final->questao_e; ?><br>
                                f)A realização das atividades previstasno plano:&nbsp; <?= $rel_final->questao_f; ?><br>
                                g)A sua integração com os alunos:&nbsp; <?= $rel_final->questao_g; ?><br>
                                h)A sua estratégia de atendimento aos alunos:&nbsp; <?= $rel_final->questao_h; ?><br>
                                i)A sua estratégia para os conhecimentos atualizações:&nbsp; <?= $rel_final->questao_i; ?><br>
                                j)A atividade de orientação:&nbsp; <?= $rel_final->questao_j; ?><br>
                                k)O tempo dedicado à orientação:&nbsp; <?= $rel_final->questao_k; ?><br>
                                l)O espaço físico para a execução da orientação:&nbsp; <?= $rel_final->questao_l; ?><br>
                                m)O plano de atividades definido pelo orientador:&nbsp; <?= $rel_final->questao_m; ?><br>
                                n)A aplicabilidade da orientação na sua atividade de monitor:&nbsp; <?= $rel_final->questao_n; ?><br><br>

                                5)Sugestões para a Melhoria das Atividades de Monitoria:&nbsp; <?= $rel_final->sugestoes_m; ?><br><br>

                                Vitória de Santo Antão &nbsp; <?= $rel_final->data_m; ?><br>
                            </h4>
                            <br><br><br><br><br><br><br><br><br><br><br>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
