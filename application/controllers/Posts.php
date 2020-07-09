<?php
class Posts extends My_controller {
        public function home()
        {
            if(! $this->session->userdata('ids'))
                        return redirect('posts/login');
            $data['posts'] = $this->post_model->get_post();
            $data['title'] = 'NewsX';
            $this->load->view('templates/header', $data);
            $this->load->view('posts/home', $data);
            $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
            if(! $this->session->userdata('ids'))
                        return redirect('posts/login');
            $data['posts_item'] = $this->post_model->get_post($slug);
            if (empty($data['posts_item']))
            {
                 show_404();
            }
            $data['title'] = $data['posts_item']['title'];
            $this->load->view('templates/header', $data);
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }
        public function category($category = NULL){
            if(! $this->session->userdata('ids'))
                        return redirect('posts/login');
            $data['category_item'] = $this->post_model->get_category($category);
            if (empty($data['category_item']))
            {
                 show_404();
            }
            $data['title'] = 'Category';
            $this->load->view('templates/header', $data);
            $this->load->view('posts/category', $data);
            $this->load->view('templates/footer');
        }
        public function forum(){
            $question = $this->input->post('question');
            $this->load->model('post_model');
            $notnew = $this->post_model->isPresent($question);
            if($notnew){
                $data['title'] = 'Forum';
                $data['status'] = 'Question is already present';
                $data['forum_item'] = $this->post_model->forumShow();
                $this->load->view('templates/header', $data);
                $this->load->view('posts/forum', $data);
                $this->load->view('templates/footer');
            }
            elseif($question){
                $insertQuestion = $this->post_model->InsertQues($question);
                $data['title'] = 'Forum';
                $data['forum_item'] = $this->post_model->forumShow();
                $data['status'] = 'Question Recorded.We will get back to you soon.';
                $this->load->view('templates/header',$data);
                $this->load->view('posts/forum',$data);
                $this->load->view('templates/footer');
            }
            else{
                $data['title'] = 'Forum';
                $data['status'] = 'Welcome!!';
                $data['forum_item'] = $this->post_model->forumShow();
                $this->load->view('templates/header', $data);
                $this->load->view('posts/forum', $data);
                $this->load->view('templates/footer');
            }
        }
        public function login(){
            if($this->session->userdata('ids')){
                return redirect('posts/home');
            }
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name','UserName','required'); //parameters are name of the login forms
            $this->form_validation->set_rules('pass','PassWord','required|min_length[5]|max_length[25]');
            $this->form_validation->set_error_delimiters("<div class = 'text-uppercase'> ","</div>");
            if($this->form_validation->run()){
                $user = $this->input->post('name');
                $pass = $this->input->post('pass');
                $this->load->model('post_model');
                $id = $this->post_model->isvalidate($user,$pass);
                if($id[0]){
                    $this->load->library('session');
                    $this->session->set_userdata('ids',$id[0]);
                    $this->session->set_userdata('firstnames',$id[1]);
                    $this->session->set_userdata('profilephotos',$id[2]);
                    $data['title'] = 'NewsX';
                    $this->load->view('templates/header',$data);
                    return redirect('posts/home');
                    $this->load->view('templates/footer');
                }else{
                    return redirect('posts/login');
                }
            }
            else{
                $data['title'] = 'login';
                $this->load->view('templates/headers',$data);
                $this->load->view('posts/login');
                $this->load->view('templates/footers');
            }
        }
        public function logout(){
            echo 'logout';
            $this->session->unset_userdata('ids');
            $this->session->unset_userdata('firstnames');
            return redirect('posts/login');
        }
        public function register(){
            if($this->session->userdata('ids')){
                return redirect('posts/home');
            }
            $this->load->library('form_validation');
            $this->form_validation->set_rules('first','FirstName','required');
            $this->form_validation->set_rules('last','LastName','required');
            $this->form_validation->set_rules('usernamed','UserName','required'); //parameters are name of the login forms
            $this->form_validation->set_rules('passedword','PassWord','required|min_length[5]|max_length[25]');
            $this->form_validation->set_rules('file','File','required');
            $this->form_validation->set_error_delimiters("<div class = 'text-uppercase'> ","</div>");
            if($this->form_validation->run()){
                $first = $this->input->post('first');
                $last = $this->input->post('last');
                $users = $this->input->post('usernamed');
                $passes = $this->input->post('passedword');
                $file = $this->input->post('file');
                $this->load->model('post_model');
                
                $idd = $this->post_model->isRegistervalidate($users);
                if($idd){
                    return redirect('posts/register');
                }else{
                    $idds = $this->post_model->InsertUserData($first,$last,$users,$passes,$file);
                    $this->load->library('session');
                    $this->session->set_userdata('ids','1');
                    $this->session->set_userdata('firstnames',$idds[0]);
                    $this->session->set_userdata('profilephotos',$idds[4]);
                    $data['title'] = 'NewsX';
                    $this->load->view('templates/header',$data);
                    return redirect('posts/home');
                    $this->load->view('templates/footer');
                }
            }
            else{
            $data['title'] = 'Register';
            $this->load->view('templates/headers',$data);
            $this->load->view('posts/register');
            $this->load->view('templates/footers');
            }
            
        }
}

    