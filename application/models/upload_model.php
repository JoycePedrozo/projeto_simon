<?php
class Upload_model extends CI_Model{
 
    public function File_upload($data){
        $qry=$this->db->insert('table_name', $data);
        if($qry){
            echo"File Upload Sucess";
        }else{
            echo "Upload Error";
        }
        
    }
     
}
