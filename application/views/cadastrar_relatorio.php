<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12">
                <h1 class="page-header">Criar Relatório Final da Avaliação</h1>
            </div>

            <div class="container">   
                <div class="col-md-10">
                    <form action="<?= base_url() ?>professor/cadastrarREM" method="POST">

                        <h4>1) Dados do Monitor</h4>
                        <hr>
                        <div class="form-group">
                            <label for="nome_m">Digite seu nome completo:</label>
                            <input type="text" class="form-control" name="nome_m" id="nome_monitor" required>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="matricula_m">Digite sua matricula: </label>
                                    <input type="text" class="form-control" name="matricula_m" id="matricula_monitor" maxlength="11" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="curso_m">Escolha um Curso: </label>
                                <select id="curso_mr" class="form-control" name="curso_mr" required>
                                    <option value="0"> --- </option>
                                    <?php foreach ($cursos as $curso) { ?>
                                        <option value="<?= $curso->idCurso ?>"> <?= $curso->nomeCurso; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disciplina_m">Escolha a disciplina: </label>
                                    <input type="text" class="form-control" name="disciplina_m" id="disciplina_m" required>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="local_m">Local de Atendimento: </label>
                                    <input type="text" class="form-control" name="local_m" id="local_m" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="hora_atend_m">Horario de Atendimento do Monitor: </label>
                                    <input type="text" class="form-control" name="hora_atend_m" id="hora_atend_m" required>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="professor_o">Professor Orientador: </label>
                                    <input type="text" class="form-control" name="professor_o" id="professor_o" required>
                                </div>
                            </div>

                        </div>

                        <h4><br>2) Avaliação do Desempenho do Monitor:</h4>

                        <div class="form-group">
                                  <!--<input type="text" class="form-control" >-->
                            <textarea class="form-control" rows="5" for="avaliacao_m" name="avaliacao_m" id="avaliacao_m" required></textarea>

                        </div>

                        <h4><br>3) Número Aproximado de Alunos Atendidos:</h4>

                        <div class="form-group">

                            <input type="text" class="form-control" for="numeros_aprox_m" name="numeros_aprox_m" id="numeros_aprox_m" required>
                        </div>

                        <h4><br>4) Avaliação da Prática de Monitoria:</h4>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="questao_a">a) O tempo dedicado à monitoria: </label>
                                <div class="radio">

                                    <label>
                                        <input type="radio" class="flat" name="questao_a" id="a_muito_bom" value="MUITO BOM" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_a" id="a_bom" value="BOM" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_a" id="a_medio" value="MEDIO" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_a" id="a_ruim" value="RUIM" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_a" id="a_muito_ruim" value="MUITO RUIM" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_b">b) O espaço físico para a execução da monitoria: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_b" id="b_muito_bom" value="MUITO BOM" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_b" id="b_bom" value="BOM" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_b" id="b_medio" value="MEDIO" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_b" id="b_ruim" value="RUIM" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_b" id="b_muito_ruim" value="MUITO RUIM" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_c">c) O aproveitamento por parte dos alunos: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_c" id="c_muito_bom" value="MUITO BOM" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_c" id="c_bom" value="BOM"  required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_c" id="c_medio" value="MEDIO"   required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_c" id="c_ruim" value="RUIM" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_c" id="c_muito_ruim" value="MUITO RUIM" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_d">d) A sua capacitação para assumir as atribuições: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_d" id="d_muito_bom" value="MUITO BOM" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_d" id="d_bom" value="BOM" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_d" id="d_medio" value="MEDIO" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_d" id="d_ruim" value="RUIM" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_d" id="d_muito_ruim" value="MUITO RUIM" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_e">e) A sua assiduidade como monitor: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_e" id="e_muito_bom" value="MUITO BOM" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_e" id="e_bom" value="BOM" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_e" id="e_medio" value="MEDIO" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_e" id="e_ruim" value="RUIM" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_e" id="e_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_f">f) A realização das atividades previstas no plano: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_f" id="f_muito_bom" value="MUITO BOM" method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_f" id="f_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_f" id="f_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_f" id="f_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_f" id="f_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_g">g) A sua integração com os alunos: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_g" id="g_muito_bom" value="MUITO BOM" method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_g" id="g_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_g" id="g_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_g" id="g_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_g" id="g_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_h">h) A sua estratégia de atendimento aos alunos: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_h" id="h_muito_bom" value="MUITO BOM" method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_h" id="h_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_h" id="h_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_h" id="h_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_h" id="h_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_i">i) A sua estratégia para os conhecimentos atualizados: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_i" id="i_muito_bom" value="MUITO BOM" method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_i" id="i_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_i" id="i_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_i" id="i_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_i" id="i_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_j">j) A atividade de orientação: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_j" id="j_muito_bom" value="MUITO BOM" method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_j" id="j_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_j" id="j_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_j" id="j_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_j" id="j_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_k">k) O tempo dedicado à orientação: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_k" id="k_muito_bom" value="MUITO BOM"  method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_k" id="k_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_k" id="k_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_k" id="k_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_k" id="k_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_l">l) O espaço físico para a execução da orientação: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_l" id="l_muito_bom" value="MUITO BOM" method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_l" id="l_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_l" id="l_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_l" id="l_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_l" id="l_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_m">m) O plano de atividades definido pelo orientador: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_m" id="m_muito_bom" value="MUITO BOM" method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_m" id="m_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_m" id="m_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_m" id="m_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_m" id="m_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="questao_n">n) A aplicação da orientação na sua atividade de monitor: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="questao_n" id="n_muito_bom" value="MUITO BOM" method="POST" required> Muito Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_n" id="n_bom" value="BOM" method="POST" required> Bom &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_n" id="n_medio" value="MEDIO" method="POST" required> Médio &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_n" id="n_ruim" value="RUIM" method="POST" required> Ruim &nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" class="flat" name="questao_n" id="n_muito_ruim" value="MUITO RUIM" method="POST" required> Muito Ruim &nbsp;
                                    </label>

                                </div>
                            </div>

                            <h4><br>5) Sugestões para a Melhoria das Atividades de Monitoria:</h4>

                            <div class="form-group">
                                      <!--<input type="text" class="form-control" >-->
                                <textarea class="form-control" rows="5" for="sugestoes_m" name="sugestoes_m" id="sugestoes_m" method="POST" required></textarea>

                            </div>

                        </div>

                        <!--              <div class="form-group">
                                                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                                          <div class="col-md-9 col-sm-9 col-xs-12">
                                                          
                                                          </div>
                                                        </div>-->

                        <div style="text-align: right">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
