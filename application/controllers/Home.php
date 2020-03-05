<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {
        
    public function verificar_sessao(){
    if($this->session->userdata('logado') == false){
        redirect('home/login');
    }
    }
//    
    public function index() {
        $this->verificar_sessao();
        $this->load->view('template/html_header');
        $this->load->view('template/menu');
        $this->load->view('view_home');
        $this->load->view('template/html_footer');
        
    }
    public function cadastro(){
        $this->load->view('cadastro');
    }
    
    public function cadastrar(){
        $data['nome'] = $this->input->post('nome');
        $data['email'] = $this->input->post('email');
        $data['senha'] = md5($this->input->post('senha'));
        
        if($this->db->insert('usuario',$data)){
            redirect('home');
        }
        
    }
    public function login(){
        $this->load->view('login_view');
    }
    public function logar(){
        $email = $this->input->post('email');
        $senha = md5($this->input->post('senha'));
    
        $this->db->where('senha',$senha);
        $this->db->where('email',$email);
        $this->db->where('status',0);
        $data['usuario'] = $this->db->get('usuario')->result();
        if(count($data['usuario'])==1){
            $dados['nome'] = $data['usuario'][0]->nome;
            $dados['email'] = $data['usuario'][0]->email;
            $dados['logado']= true;
            $this->session->set_userdata($dados);
            redirect('home');
        }else{
            redirect('home/login');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home/login');
    }


    

    public function listagemRA($indice = null) {
        $this->verificar_sessao();
        $this->db->select('id_p, nome_p, disciplina_p, curso_pr, curso.nomeCurso as nome_curso, vagas,file_name');
        $this->db->join('curso', 'idCurso = curso_p');
        $this->db->where('curso_p', $indice);
        $this->db->order_by("nome_curso");
                $this->db->order_by("nome_p");

//        $this->load->model('busca_model');
//        $data['requerimento_da_abertura'] = $this->busca_model->nomes_requerimento_ab();
        $dados['requerimento_da_abertura'] = $this->db->get('requerimento_abertura ')->result();
        $dados['id_curso'] = $indice;
        $this->load->view('template/html_header');
        $this->load->view('template/menu');


        $this->load->view('listagemra', $dados);
        $this->load->view('template/html_footer');
    }
//        public function resultado(){
//        $dados['listagem _RA'] = $this->db->get('requerimento_abertura ')->result();
//    }

    public function listagemRI($indice = null) {
        $this->verificar_sessao();
        $this->db->select('id_a, nome_a, matricula_a, curso_a, curso.nomeCurso as nome_curso, disciplina1_a, disciplina2_a, afirmacao, auxilio_a');
        $this->db->join('curso', 'idCurso = curso_al');
        $this->db->where('curso_al', $indice);
        $this->db->order_by("nome_curso");
                $this->db->order_by("nome_a");

        $dados['requerimentos_inscricao'] = $this->db->get('requerimento_inscricao')->result();
        $dados['id_curso'] = $indice;
        $this->load->view('template/html_header');
        $this->load->view('template/menu');

        

        $this->load->view('listagem_ri', $dados);
        $this->load->view('template/html_footer');
    }

    public function listagemRE($indice = null) {
        $this->verificar_sessao();
        $this->db->select('id_r, nome_m, matricula_m, curso_m, curso.nomeCurso as nome_curso, disciplina_m');
        $this->db->join('curso', 'idCurso = curso_mr');
        $this->db->where('curso_mr', $indice);
        $this->db->order_by("nome_curso");
                $this->db->order_by("nome_m");

        $dados['relatorios_final'] = $this->db->get('relatorio_final')->result();
        $dados['id_curso'] = $indice;
        $this->load->view('template/html_header');
        $this->load->view('template/menu');

        

        $this->load->view('listagemre', $dados);
        $this->load->view('template/html_footer');
    }

    public function listagemFA($indice = null) {
        $this->verificar_sessao();
        $this->db->select('id_f, nome_f, matricula_f, curso_fr, curso.nomeCurso as nome_curso, prof_responsavel_f,');
        $this->db->join('curso', 'idCurso = curso_f');
//        $this->db->join('atividades', 'id_f = formulario_id');
        $this->db->where('curso_f', $indice);
        $this->db->order_by("nome_curso");
                $this->db->order_by("nome_f");

        $dados['formularios_acompanhamento'] = $this->db->get('formulario_acompanhamento')->result();
        $dados['id_curso'] = $indice;
//        var_dump($dados); exit;
        $this->load->view('template/html_header');
        $this->load->view('template/menu');

        
        $this->load->view('listagemfa', $dados);
        $this->load->view('template/html_footer');
    }

    public function excluir($id = null) {
        $this->verificar_sessao();
        $this->db->where('id_p', $id);
        if ($this->db->delete('requerimento_abertura')) {
            redirect('Home/listagemRA/1');
        } else {
            redirect('Home/listagemRA/2');
        }
    }

    public function excluir1($id = null) {
        $this->verificar_sessao();
        $this->db->where('id_a', $id);
        if ($this->db->delete('requerimento_inscricao')) {
            redirect('Home/listagemRI/1');
        } else {
            redirect('Home/listagemRI/2');
        }
    }

    public function excluir2($id = null) {
        $this->verificar_sessao();
        $this->db->where('id_r', $id);
        if ($this->db->delete('relatorio_final')) {
            redirect('Home/listagemRE/1');
        } else {
            redirect('Home/listagemRE/2');
        }
    }

    public function excluir3($id = null) {
        $this->verificar_sessao();
        $this->db->where('id_f', $id);
        if ($this->db->delete('formulario_acompanhamento')) {
            redirect('Home/listagemFA/1');
        } else {
            redirect('Home/listagemFA/2');
        }
    }

    public function visualizar($id = null) {
        $this->verificar_sessao();
        $this->db->select(' id_p, nome_p, curso_pr, curso.nomeCurso as nome_curso,email_p, periodo_p, disciplina_p,  vagas, justificativas, assunto, data');
        $this->db->join('curso', 'idCurso = curso_p');

        $this->db->where('id_p', $id);
        $dados['requerimento_da_abertura'] = $this->db->get('requerimento_abertura ')->result();

        $this->load->view('template/html_header');
        $this->load->view('template/menu');


        $this->load->view('docum_requerimentoAB', $dados);
        $this->load->view('template/html_footer');
    }

    public function visualizar2($id = null) {
        $this->verificar_sessao();
        $this->db->select(' id_r, nome_m, matricula_m, curso_m, curso.nomeCurso as nome_curso, disciplina_m, local_m, hora_atend_m,  professor_o, avaliacao_m, numeros_aprox_m, questao_a, questao_b,questao_c, questao_d, questao_e, questao_f, questao_g, questao_h, questao_i, questao_j, questao_k, questao_l, questao_m, questao_n, sugestoes_m, data_m ');
        $this->db->join('curso', 'idCurso = curso_mr');

        $this->db->where('id_r', $id);
        $dados['relatorios_final'] = $this->db->get('relatorio_final ')->result();

        $this->load->view('template/html_header');
        $this->load->view('template/menu');


        $this->load->view('docum_relatorio', $dados);
        $this->load->view('template/html_footer');
    }
    
    public function visualizar3($id = null) {
        $this->verificar_sessao();
        $this->db->select(' id_a, nome_a, telefone_a, email_a, periodo_a, curso_a, curso.nomeCurso as nome_curso, matricula_a, disciplina1_a, disciplina2_a, auxilio_a, data_a ');
        $this->db->join('curso', 'idCurso = curso_al');

        $this->db->where('id_a', $id);
        $dados['requerimentos_inscricao'] = $this->db->get('requerimento_inscricao')->result();

        $this->load->view('template/html_header');
        $this->load->view('template/menu');


        $this->load->view('docum_requerimentoIN', $dados);
        $this->load->view('template/html_footer');
    }
    
    public function visualizar4($id = null) {
        $this->verificar_sessao();
        
        $this->db->select('id_f, nome_f, matricula_f, curso_fr, curso.nomeCurso as nome_curso, prof_responsavel_f, atividades.data_ac, atividades.turno, atividades.atividade_ac');
        $this->db->join('curso', 'curso.idCurso = curso_f');
        $this->db->join('atividades', 'id_f = atividades.formulario_id');;
//        $this->db->where('curso_f', $id);
        
        $this->db->where('id_f', $id);
        
        $dados['formularios_acompanhamento'] = $this->db->get('formulario_acompanhamento')->result();
//        var_dump($dados['formularios_acompanhamento']); die();
        $this->load->view('template/html_header');
        $this->load->view('template/menu');


        $this->load->view('docum_formulario', $dados);
        $this->load->view('template/html_footer');
    }
    
    public function download($indice = null) {
        $this->verificar_sessao();
        $this->db->select(' id_p, nome_p, curso_pr, curso.nomeCurso as nome_curso,email_p, periodo_p, disciplina_p,  vagas, justificativas, assunto, data');
        $this->db->join('curso', 'idCurso = curso_p');
        if($indice){
        $this->db->where('curso_p', $indice);
        }
        $this->db->order_by("nome_curso");
                $this->db->order_by("nome_p");

//        $this->db->where('id_p', @$id);
        $dados['requerimento_da_abertura'] = $this->db->get('requerimento_abertura ')->result_object();
//        var_dump($dados); die();

        $mpdf = new \Mpdf\Mpdf();
        $dados = $this->load->view('pdf_requerimentoabertura' , $dados,true);
        $mpdf->WriteHTML($dados);
       $mpdf->Output(); // opens in browser;;;
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
    }
    
    
    public function pesquisar($indice=null){

//        $this->load->model('home_model','home');
//        $dados['requerimento_Da_abertura'] = $this->home->get_requerimento_abertura_like();;
        $termo = $this->input->post('pesquisar');
        $this->db->select('id_p, nome_p, disciplina_p, curso_pr, curso.nomeCurso as nome_curso, vagas,file_name');
        $this->db->join('curso', 'idCurso = curso_p');
        $this->db->where('curso_p', $indice);
        $this->db->like('nome_p', $termo);
        $dados['requerimento_da_abertura'] = $this->db->get('requerimento_abertura')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu');
        $this->load->view('listagemra', $dados);
        $this->load->view('template/html_footer');
    }
    public function pesquisar2($indice=null){

//        $this->load->model('home_model','home');
//        $dados['requerimento_Da_abertura'] = $this->home->get_requerimento_abertura_like();;
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
//        $this->db->select(' id_a, nome_a, telefone_a, email_a, periodo_a, curso_a, curso.nomeCurso as nome_curso, matricula_a, disciplina1_a, disciplina2_a, auxilio_a, data_a ');
        $this->db->select('curso.nomeCurso as nome_curso');
        $this->db->join('curso', 'idCurso = curso_al');
        $this->db->where('curso_al', $indice);
        $this->db->like('nome_a', $termo);
        $dados['requerimentos_inscricao'] = $this->db->get('requerimento_inscricao')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu');
        $this->load->view('listagem_ri', $dados);
        $this->load->view('template/html_footer');
    }
    
    public function pesquisar3($indice=null){

//        $this->load->model('home_model','home');
//        $dados['requerimento_Da_abertura'] = $this->home->get_requerimento_abertura_like();;
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->select('curso.nomeCurso as nome_curso');
        $this->db->join('curso', 'idCurso = curso_mr');

        $this->db->where('curso_mr', $indice);
    
        
        $this->db->like('nome_m', $termo);
        $dados['relatorios_final'] = $this->db->get('relatorio_final')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu');
        $this->load->view('listagemre', $dados);
        $this->load->view('template/html_footer');
    }
    
    public function pesquisar4($indice=null){

//        $this->load->model('home_model','home');
//        $dados['requerimento_Da_abertura'] = $this->home->get_requerimento_abertura_like();;
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->select('curso.nomeCurso as nome_curso');
        $this->db->join('curso', 'idCurso = curso_f');

        $this->db->where('curso_f', $indice);
        
        
        $this->db->like('nome_f', $termo);
        $dados['formularios_acompanhamento'] = $this->db->get('formulario_acompanhamento')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu');
        $this->load->view('listagemfa', $dados);
        $this->load->view('template/html_footer');
    }

}

