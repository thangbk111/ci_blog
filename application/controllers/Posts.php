<?php
    class Posts extends CI_Controller {
        public function index()
        {
            $data['title'] = 'Lastest Posts';
            $data['posts'] = $this->post_model->get_posts();
            $this->load->view('template/header');
            $this->load->view('posts/index',$data);
            $this->load->view('template/footer');
        }

        public function view($slug = NULL)
        {
            $data['post'] = $this->post_model->get_posts($slug);
            if (empty($data['[posts'])) {
                show_404();
            }

             
        }
    }