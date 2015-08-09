<?php
//News_model.php
class Rss_model extends CI_Model {

	public function get_rss($slug = FALSE)
	{
        if($slug == FALSE){
            $request = "https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&output=rss";
            $response = file_get_contents($request);
            $xml = simplexml_load_string($response);
            return $xml;
        }
        else {
            switch($slug){
                case "tech":
                    $url="https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&topic=tc&output=rss";
                break;

                case "science":
                    $url="https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&topic=scn&output=rss";
                break;

                case "business";
                    $url="https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&topic=b&output=rss";
                break;

                default:
                    $url="https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&output=rss";
            }
            $request = $url;
            $response = file_get_contents($request);
            $xml = simplexml_load_string($response);
            return $xml;
        }
	}//end get_rss
}//end Rss_model