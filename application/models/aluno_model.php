<?php

class Aluno_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
   
    
     public function cadastrarRIM()
	{
		$data['nome_a'] = $this->input->post('nome_a');
                $data['telefone_a'] = $this->input->post('telefone_a');
                $data['email_a'] = $this->input->post('email_a');
                $data['periodo_a'] = $this->input->post('periodo_a');
                $data['curso_al'] = $this->input->post('curso_al');
                $data['matricula_a'] = $this->input->post('matricula_a');
                $data['disciplina1_a'] = $this->input->post('disciplina1_a');
                $data['disciplina2_a'] = $this->input->post('disciplina2_a');
                $data['auxilio_a'] = $this->input->post('auxilio_a');
                
  
                return $this->db->insert('requerimento_inscricao',$data);
                
                
	}
//    
//    public function cadastrarREM()
//	{
//		$data['nome_m'] = $this->input->post('nome_m');
//                $data['matricula_m'] = $this->input->post('matricula_m');
//                $data['curso_mr'] = $this->input->post('curso_mr');
//                $data['disciplina_m'] = $this->input->post('disciplina_m');
//                $data['local_m'] = $this->input->post('local_m');
//                $data['hora_atend_m'] = $this->input->post('hora_atend_m');
//                $data['professor_o'] = $this->input->post('professor_o');
//                $data['avaliacao_m'] = $this->input->post('avaliacao_m');
//                $data['numeros_aprox_m'] = $this->input->post('numeros_aprox_m');
//                $data['questao_a'] = $this->input->post('questao_a');
//                $data['questao_b'] = $this->input->post('questao_b');
//                $data['questao_c'] = $this->input->post('questao_c');
//                $data['questao_d'] = $this->input->post('questao_d');
//                $data['questao_e'] = $this->input->post('questao_e');
//                $data['questao_f'] = $this->input->post('questao_f');
//                $data['questao_g'] = $this->input->post('questao_g');
//                $data['questao_h'] = $this->input->post('questao_h');
//                $data['questao_i'] = $this->input->post('questao_i');
//                $data['questao_j'] = $this->input->post('questao_j');
//                $data['questao_k'] = $this->input->post('questao_k');
//                $data['questao_l'] = $this->input->post('questao_l');
//                $data['questao_m'] = $this->input->post('questao_m');
//                $data['questao_n'] = $this->input->post('questao_n');
//                $data['sugestoes_m'] = $this->input->post('sugestoes_m');
//           
//                return $this->db->insert('relatorio_final',$data);
//                
//                
//	}
}
