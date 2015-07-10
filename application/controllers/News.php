<?php
//News.php
class News extends CI_Controller {

        public function __construct()
        {
<<<<<<< HEAD
                //this echos across the controller
                parent::__construct();
                $this->load->model('news_model');
                                        //'banner' references custom_config. 2nd parameter is what it should be
                $this->config->set_item('banner', 'News Banner');
=======
                parent::__construct();
                $this->load->model('news_model');
>>>>>>> 29987db... Adds News model and controller
        }//end construct

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'News archive';

<<<<<<< HEAD
                //$this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                //$this->load->view('templates/footer');
=======
                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
>>>>>>> 29987db... Adds News model and controller
        }//end index

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

<<<<<<< HEAD
                //$this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                //$this->load->view('templates/footer');
        }//end view

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a news item';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'text', 'required');

            if ($this->form_validation->run() === FALSE)
            {//data not submitted
                //$this->load->view('templates/header', $data);
                $this->load->view('news/create', $data);//added $data in case there is data to pass to create
                //$this->load->view('templates/footer', $data);//added $data in case there is data to pass to footer

            }
            else
            {//process data
                $success = $this->news_model->set_news();
                
                if($success){
                        $success = "News successfully entered!";
                } else {
                        $success = "News was not entered!";
                }
                
                $data['success'] = $success;

                $this->load->view('templates/header', $data);
                $this->load->view('news/feedback', $data);
                $this->load->view('templates/footer', $data);//added $data in case there is data to pass to footer
            }
        }//end create

=======
                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }//end view
>>>>>>> 29987db... Adds News model and controller
}//end News