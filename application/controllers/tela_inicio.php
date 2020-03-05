<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tela_inicio extends CI_Controller {

    
    public function index() {
        
        $this->load->view('tela');
        
    }
    public function administrador (){
        $this->load->view('login_view');
    }

    public function professor (){
        $this->load->view('login_view_professor');
    }
    public function aluno (){
        $this->load->view('login_view_aluno');
    }

}
