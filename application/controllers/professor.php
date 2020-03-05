<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('upload_model');
        $this->load->database();
    }

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('professor/login_professor');
        }
    }
    
    public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 10000;
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file_name'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
    
    public function file_upload(){
        $config['upload_path'] = '.Uploads';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_name');
        $file_name=$this->upload->data();
        $data=array('file_name' => $file_name['file_name']);
        $this->upload_model->File_upload($data);
    }
    public function index($indice = null) {
        
        $this->verificar_sessao();
        $this->db->select('*');
        $data['requerimento_da_abertura'] = $this->db->get('requerimento_abertura')->result();
        $data['relatorios_final'] = $this->db->get('relatorio_final')->result();
        $data['formularios_acompanhamento'] = $this->db->get('formulario_acompanhamento')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu_professor');
        if ($indice == 1) {
            $data['msg'] = "Criado com sucesso.";
            $this->load->view('template/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possivel criar";
            $this->load->view('template/msg_erro', $data);
        }
        $this->load->view('view_home_professor');
        $this->load->view('template/html_footer');
    }

    public function cadastro_professor() {
        $this->load->view('cadastro_professor');
    }

    public function cadastrar_professor() {
        $this->load->model('professor_model', 'professor');
        if ($this->professor->cadastrar_professor()) {
            redirect('professor');
        }
    }

    public function login_professor() {
        $this->load->view('login_view_professor');
    }

    public function logar_professor() {
        $email = $this->input->post('email_professor');
        $senha = md5($this->input->post('senha_professor'));
        $this->db->where('senha_professor', $senha);
        $this->db->where('email_professor', $email);
        $this->db->where('status', 0);
        $data['usuario_professor'] = $this->db->get('usuario_professor')->result();
        if (count($data['usuario_professor']) == 1) {
            $dados['nome_professor'] = $data['usuario_professor'][0]->nome_professor;
            $dados['email_professor'] = $data['usuario_professor'][0]->email_professor;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);
            redirect('professor');
        } else {
            redirect('professor/login_professor');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('professor/login_professor');
    }

    public function cadastrarRA() {
        $this->verificar_sessao();
        $dados['cursos'] = $this->db->get('curso')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu_professor');

        $this->load->view('cadastrar_requerimentoabertura', $dados);
        $this->load->view('template/html_footer');
    }

    public function cadastrarRAM() {
        $this->verificar_sessao();
        $this->load->model('professor_model', 'professor');
        if ($this->professor->cadastrarRAM()) {
            redirect('professor/1');
        } else {
            redirect('professor/2');
        }
    }

    public function cadastrarRE() {
        $this->verificar_sessao();
        $dados['cursos'] = $this->db->get('curso')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu_professor');

        $this->load->view('cadastrar_relatorio', $dados);
        $this->load->view('template/html_footer');
    }

    public function cadastrarREM() {
        $this->verificar_sessao();
        $this->load->model('professor_model', 'professor');
        if ($this->professor->cadastrarREM()) {
            redirect('professor/1');
        } else {
            redirect('professor/2');
        }
    }

    public function cadastrarFA() {
        $this->verificar_sessao();
        $dados['cursos'] = $this->db->get('curso')->result();
        $dados['atividade'] = $this->db->get('atividades')->result();
        $this->load->view('template/html_header');
        $this->load->view('template/menu_professor');

        $this->load->view('cadastrar_formulario', $dados);
        $this->load->view('template/html_footer');
    }

    public function cadastrarFAM() {
        $this->verificar_sessao();
        $this->load->model('professor_model', 'professor');
        if ($this->professor->cadastrarFAM()) {
            redirect('professor/1');
        } else {
            redirect('professor/1');
        }
    }

}
