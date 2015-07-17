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
                $count=0;
                foreach($xml->channel->item as $story)
                {
                    if($count==3){
                        break;
                    }
                        echo '<a href="' . $story->link . '"></a><br />'; 
                        echo '<p>' . $story->description . '</p><br /><br />';
                        $count++;
                }

        }//end index


}//end Rss