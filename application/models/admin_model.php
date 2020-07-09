<?php
class admin_model extends CI_Model {
		public function __construct(){
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
        public function AddArticle($title,$body1,$body2,$img1,$img2,$category,$slug){
            $data = array(
                            'user_id' => '0',    
                            'category' => $category,
                            'likes' => '0',
                            'title' => $title,
                            'slug' => $slug,
                            'body' => $body1,
                            'body1' => $body2,
                            'post_image' => $img1,
                            'post_image1' => $img2
                         );
            $this->db->insert('posts', $data);
            return 1;
        }
                
}