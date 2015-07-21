<?php
//News_model.php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }//end constructor

		public function get_news($slug = FALSE)
		{
		        if ($slug === FALSE)
		        {
		                $query = $this->db->get('news');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('news', array('slug' => $slug));
		        return $query->row_array();
		}//end get_news

<<<<<<< HEAD
		public function set_news()
		{
		    $this->load->helper('url');

		    $slug = url_title($this->input->post('title'), 'dash', TRUE);

		    $data = array(
		    	//' ' has to match what's in the database
		        'title' => $this->input->post('title'),
		        'slug' => $slug,
		        'text' => $this->input->post('text')
		    );

		    return $this->db->insert('news', $data);
		}//end set_news


=======
>>>>>>> 29987db... Adds News model and controller
}//end News_model