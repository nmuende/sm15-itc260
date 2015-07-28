<?php
//Rss.php
class Rss extends CI_Controller {

        public function index()
        {
                $data['rss']=$this->rss_model->get_rss();
                $data['title']='Rss Feed';

                $this->load->view('rss/index', $data);
        }//end index

        public function view($slug = NULL){
            $data['rss_feed'] = $this->rss_model->get_rss($slug);

            if(empty($data['rss_feed'])){
                show_404();
                echo "No rss feed chosen";
            }

            $data['title']=$data['rss_item']['title'];

            $this->load->view('rss/view',$data);
        }//end view

}//end Rss