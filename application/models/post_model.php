<?php
class Post_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_post($slug = FALSE)
		{
        	if ($slug === FALSE)
        		{
                	$query = $this->db->get('posts');
                	return $query->result_array();
        		}

        	$query = $this->db->get_where('posts', array('slug' => $slug));
       		return $query->row_array();
		}
        public function get_category($category){
            $query = $this->db->get_where('posts',array('category' => $category));
            return $query->result_array();
        }
        public function isvalidate($username,$password){
            $q = $this->db->where(['username'=>$username,'password'=>$password])->get('users');
            if($q->num_rows() === 1){
                return [$q->row()->id,$q->row()->firstname,$q->row()->profilephoto];
            }
            else{
                return False;
            }
        }
        public function isRegistervalidate($username){
            $q = $this->db->where(['username'=>$username])->get('users');
            if($q->num_rows() === 1){
                return $q->row()->id;
            }
            else{
                return False;
            }
        }
        public function InsertUserData($firstname,$lastname,$username,$password,$file){
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'username' => $username,
                'password' => $password,
                'profilephoto' => $file
            );
            $datas = array($firstname,$lastname,$username,$password,$file);
            $this->db->insert('users', $data);
            return $datas;
        }
        public function forumShow(){
            $query = $this->db->get_where('forum');
            return $query->result_array();
        }
        public function isPresent($question){
            $query = $this->db->where(['Questions'=>$question])->get('forum');
            if($query->num_rows() === 1){
                return True;
            }
            else{
                return False;
            }
        }
        public function InsertQues($question){
            $ques = array(
                'Questions' => $question
            );
            $quess = array($question);
            $this->db->insert('forum', $ques);
            return $quess;
        }
}
