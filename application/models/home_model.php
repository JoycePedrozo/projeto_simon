<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Controller {

    public function verificar_sessao() {
//        if ($this->session->userdata('logado') == false) {
//            redirect('home/login_aluno');
//        }
    }
    function get_requerimento_abertura(){
        $this->db->select('*');
        return $this->db->get('requerimento_abertura')->result();
    }
    function get_requerimento_abertura_like(){
        
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('nome_p', $termo);
        return $this->db->get('requerimento_abertura')->result();
    }
}

