<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('aluno/login_aluno');
        }
    }

    public function index($indice = null) {
        $this->verificar_sessao();
        $this->db->select('*');
        $data['requerimentos_inscricao'] = $this->db->get('requerimento_inscricao')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu_aluno');
        if ($indice == 1) {
            $data['msg'] = "Requerimento de Inscrição da Monitoria criado com sucesso.";
            $this->load->view('template/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possivel criar o Requerimento de Inscrição da Monitoria";
            $this->load->view('template/msg_erro', $data);
        }
        $this->load->view('view_home_aluno');
        $this->load->view('template/html_footer');
    }

    public function cadastro_aluno() {
        $this->load->view('cadastro_aluno');
    }

    public function cadastrar_aluno() {
//        $this->verificar_sessao();
        $data['nome_aluno'] = $this->input->post('nome_aluno');
        $data['email_aluno'] = $this->input->post('email_aluno');
        $data['senha_aluno'] = md5($this->input->post('senha_aluno'));

        if ($this->db->insert('usuario_aluno', $data)) {
            redirect('aluno');
        }
    }

    public function login_aluno() {
        $this->load->view('login_view_aluno');
    }

    public function logar_aluno() {
        $email = $this->input->post('email_aluno');
        $senha = md5($this->input->post('senha_aluno'));

        $this->db->where('senha_aluno', $senha);
        $this->db->where('email_aluno', $email);
        $this->db->where('status', 0);
        $data['usuario_aluno'] = $this->db->get('usuario_aluno')->result();
        if (count($data['usuario_aluno']) == 1) {
            $dados['nome_aluno'] = $data['usuario_aluno'][0]->nome_aluno;
            $dados['email_aluno'] = $data['usuario_aluno'][0]->email_aluno;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);
            redirect('aluno');
        } else {
            redirect('aluno/login_aluno');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('aluno/login_aluno');
    }

    public function cadastrarRI() {
        $this->verificar_sessao();
        $dados['cursos'] = $this->db->get('curso')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu_aluno');

        $this->load->view('cadastrar_requerimento_insc', $dados);
        $this->load->view('template/html_footer');
    }

    public function cadastrarRIM() {
        $this->verificar_sessao();
        $this->load->model('aluno_model', 'aluno');
        if ($this->aluno->cadastrarRIM()) {
            redirect('aluno/1');
        } else {
            redirect('aluno/2');
        }
    }

}
