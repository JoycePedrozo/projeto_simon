<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
            <div class="col-md-12">
                <h1 class="page-header">Criar Requerimento de Inscrição da Monitoria</h1>
            </div>

            <div class="container">   
                <div class="col-md-10">
                    <form action="<?= base_url() ?>aluno/cadastrarRIM" method="POST">
                        <div class="form-group">
                            <label for="nome_a">Digite seu nome completo:</label>
                            <input type="text" class="form-control" name="nome_a" id="nome_a" placeholder="Digite seu nome" required>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="telefone_a">Digite seu telefone: </label>
                                    <input type="text" class="form-control" name="telefone_a" id="telefone_a" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="email_a">Digite seu e-mail: </label>
                                <input type="email" class="form-control" id="email_a" name="email_a" required>
                            </div>
                            <div class="col-md-3">
                                <label for="curso_al">Escolha um curso: </label>
                                <select id="curso_al" class="form-control" name="curso_al" required>
                                    <option value="0"> --- </option>
                                    <?php foreach ($cursos as $curso) { ?>
                                        <option value="<?= $curso->idCurso ?>"> <?= $curso->nomeCurso; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="periodo_a">Qual o periodo: </label>
                                    <input type="text" class="form-control" name="periodo_a" id="periodo_a" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disciplina1_a">Escolha uma Disciplina ou duas: </label>
                                    <input type="text" class="form-control" name="disciplina1_a" id="disciplina1_a" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disciplina2_a">Disciplina 2: </label>
                                    <input type="text" class="form-control" name="disciplina2_a" id="disciplina2_a">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="matricula_a">Digite sua matricula: </label>
                                    <input type="text" class="form-control" name="matricula_a"  id="matricula_a" required>
                                </div>
                            </div>  

                        </div> 

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="auxilio_a">Possui algum auxilio financeiro? </label>
                                    <div class="radio">

                                            <Input type = 'Radio' Name ='auxilio_a' value= 'sim' id="enable">Sim <br>
                                            <Input type = 'Radio' Name ='auxilio_a' value= 'não' id="disable">Não <br>
                                               

                                        
                                    </div>
                                     Se Sim qual: <input type="text" name="auxilio_a" id="auxilio_a"> 
                                </div>
                            </div>
                        </div>



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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>