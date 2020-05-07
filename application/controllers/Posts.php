<?php
class Posts extends My_controller {

        public function home()
        {
                $data['posts'] = $this->post_model->get_post();
                $data['title'] = 'NewsX';

                $this->load->view('templates/header', $data);
                $this->load->view('posts/home', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
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
}

    