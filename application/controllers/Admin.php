<?php
class Admin extends My_controller {

        // public function __construct(){
        //     // parent::__construct();
        //     if(! $this->session->userdata('id'))
        //                 return redirect('admin/login');
        // }

       public function login(){
            if($this->session->userdata('id')){
                return redirect('admin/index');
            }
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username','UserName','required'); //parameters are name of the login forms
            $this->form_validation->set_rules('password','PassWord','required|min_length[5]|max_length[25]');
            $this->form_validation->set_error_delimiters("<div class = 'text-uppercase'> ","</div>"); //This div property will be applied to all input field.
            if($this->form_validation->run()){
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $this->load->model('admin_model');
                $id = $this->admin_model->isvalidate($username,$password);
                if($id[0]){
                    $this->load->library('session');
                    $this->session->set_userdata('id',$id[0]);
                    $this->session->set_userdata('firstname',$id[1]);
                    $this->session->set_userdata('profilephoto',$id[2]);
                    $data['title'] = 'index';
                    $this->load->view('templates/headers',$data);
                    return redirect('admin/index');
                    $this->load->view('templates/footers');
                }else{
                    return redirect('admin/login');
                }
            }else{
                $data['title'] = 'login';
                $this->load->view('templates/headers',$data);
                $this->load->view('admin/login');
                $this->load->view('templates/footers');
            }
       }
       public function logout(){
            echo 'logout';
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('firstname');
            return redirect('admin/login');
       }
       public function index(){
            if(! $this->session->userdata('id'))
                return redirect('admin/login');
            $data['title'] = 'Dashboard';
            $this->load->view('templates/headers',$data);
            $this->load->view('admin/index');
            $this->load->view('templates/footers');
       }
       public function add(){
            if(! $this->session->userdata('id'))
                return redirect('admin/login');
            $title = $this->input->post('title');
            $body1 = $this->input->post('body1');
            $body2 = $this->input->post('body2');
            $img1 = $this->input->post('img1');
            $img2 = $this->input->post('img2');
            $category = $this->input->post('category');
            $replaced = array(' ','!','"','#','$','%','&',"'",'(',')','*','+',',','-','.','/',':',';','<','=','>','?','@','[','\\',',',']','^','_','`','{','|','}','~');
            $slug = str_replace($replaced,'-',htmlspecialchars_decode($title));
            if($title){
                $this->load->model('admin_model');
                $res = $this->admin_model->AddArticle($title,$body1,$body2,$img1,$img2,$category,$slug);
            }
            $data['title'] = 'Add Article';
            $this->load->view('templates/headers',$data);
            $this->load->view('admin/add');
            $this->load->view('templates/footers');
       }
}

 ?>    

