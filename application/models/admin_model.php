<?php
class admin_model extends CI_Model {
		public function __construct()
        {
                $this->load->database();
        }
        public function isvalidate($username,$password){
        	$q = $this->db->where(['username'=>$username,'password'=>$password])->get('admin');
        	if($q->num_rows() === 1){
        		return [$q->row()->id,$q->row()->firstname,$q->row()->profilephoto];
        	}
        	else{
        		return False;
        	}
        }
}