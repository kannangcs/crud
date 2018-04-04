<?php
class inse extends CI_Model{
    function all(){
   $query= $this->db->query('select * from news');
   return $query->result();
    }
    function inser($data){
        $this->db->insert('news', $data);
    }
    function del($email){
        $this->db->where('email',$email);
        $this->db->delete('news');
    }
    function login($name,$email){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('name',$name);
        $this->db->where('email',$email);
      
        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
          return false;
        }
      

    }
}
?>