<?php

class Professor_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    public function cadastrar_professor(){
        
        $data['nome_professor'] = $this->input->post('nome_professor');
        $data['email_professor'] = $this->input->post('email_professor');
        $data['senha_professor'] = md5($this->input->post('senha_professor'));
        
        return $this->db->insert('usuario_professor',$data);
        
//        if($this->db->insert('usuario_professor',$data)){
//            redirect('professor');
//        }
        
    }
    
    public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 10000;
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('up'))
                {
                    
                    var_dump($this->upload->display_errors(), $_FILE);
                    return false;
//                        $this->load->view('upload_form', $error);;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        return $this->upload->data();
                }
        }
    
    
     public function cadastrarRAM()
	{
		$data['nome_p'] = $this->input->post('nome_p');
                $data['curso_p'] = $this->input->post('curso_p');
                $data['email_p'] = $this->input->post('email_p');
                $data['periodo_p'] = $this->input->post('periodo_p');
                $data['disciplina_p'] = $this->input->post('disciplina_p');
                $data['vagas'] = $this->input->post('vagas');
                $data['justificativas'] = $this->input->post('justificativas');
                $data['assunto'] = $this->input->post('assunto');
               
                if($this->do_upload()){
                    $upload = $this->do_upload();
                    $data['file_name'] = "/Uploads/".$upload['file_name'];

                }
           
                return $this->db->insert('requerimento_abertura',$data);
                    
	}
    
    public function cadastrarREM()
	{
		$data['nome_m'] = $this->input->post('nome_m');
                $data['matricula_m'] = $this->input->post('matricula_m');
                $data['curso_mr'] = $this->input->post('curso_mr');
                $data['disciplina_m'] = $this->input->post('disciplina_m');
                $data['local_m'] = $this->input->post('local_m');
                $data['hora_atend_m'] = $this->input->post('hora_atend_m');
                $data['professor_o'] = $this->input->post('professor_o');
                $data['avaliacao_m'] = $this->input->post('avaliacao_m');
                $data['numeros_aprox_m'] = $this->input->post('numeros_aprox_m');
                $data['questao_a'] = $this->input->post('questao_a');
                $data['questao_b'] = $this->input->post('questao_b');
                $data['questao_c'] = $this->input->post('questao_c');
                $data['questao_d'] = $this->input->post('questao_d');
                $data['questao_e'] = $this->input->post('questao_e');
                $data['questao_f'] = $this->input->post('questao_f');
                $data['questao_g'] = $this->input->post('questao_g');
                $data['questao_h'] = $this->input->post('questao_h');
                $data['questao_i'] = $this->input->post('questao_i');
                $data['questao_j'] = $this->input->post('questao_j');
                $data['questao_k'] = $this->input->post('questao_k');
                $data['questao_l'] = $this->input->post('questao_l');
                $data['questao_m'] = $this->input->post('questao_m');
                $data['questao_n'] = $this->input->post('questao_n');
                $data['sugestoes_m'] = $this->input->post('sugestoes_m');
           
                return $this->db->insert('relatorio_final',$data);
                
                
	}
        
        public function cadastrarFAM()
	{   
                
                
		$data['nome_f'] = $this->input->post('nome_f');
                $data['curso_f'] = $this->input->post('curso_f');
                $data['matricula_f'] = $this->input->post('matricula_f');
                $data['prof_responsavel_f'] = $this->input->post('prof_responsavel_f');
                $this->db->insert('formulario_acompanhamento',$data);
                $id = $this->db->insert_id();

                
                
                $datav['data_ac'] = $this->input->post('data_ac');
                $datav['turno'] = $this->input->post('turno');
                $datav['atividade_ac'] = $this->input->post('atividade_ac');
                
                for($i = 0; $i < count($datav['data_ac']); $i++){
                    $data2['data_ac'] =  $datav['data_ac'][$i];
                    $data2['turno'] =  $datav['turno'][$i];
                    $data2['atividade_ac'] =  $datav['atividade_ac'][$i];
                    $data2['formulario_id']  =   $id;
                    $this->db->insert('atividades',$data2);
                }
               
                
           
                    
	}
     
}
