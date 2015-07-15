<?php
//Rss.php
class Rss extends CI_Controller {

        public function index()
        {
                //$request = "http://rss.news.yahoo.com/rss/software";
                $request = "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=w&output=rss";
                //$request = "https://www.google.com/search?hl=en&gl=us&tbm=nws&authuser=0&q=washington&oq=washington&gs_l=news-cc.3..43j0l9j43i53.9735.10710.0.10969.10.4.0.6.6.0.160.544.0j4.4.0...0.0...1ac.1.RYoNrtf4pxs";
                $response = file_get_contents($request);
                $xml = simplexml_load_string($response);
                print '<h1>' . $xml->channel->title . '</h1>';
                foreach($xml->channel->item as $story)
                {
                    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
                    echo '<p>' . $story->description . '</p><br /><br />';
                }
                //$data['news'] = $this->news_model->get_news();
                //$data['title'] = 'News archive';

                //$this->load->view('templates/header', $data);
                //$this->load->view('news/index', $data);
                //$this->load->view('templates/footer');
        }//end index


}//end Rss