<?php
//views/news/view.php
<<<<<<< HEAD
$this->load->view($this->config->item('theme') . 'header');
?>
<?php
	echo '<h2>'.$news_item['title'].'</h2>';
	echo $news_item['text'];

$this->load->view($this->config->item('theme') . 'footer');
=======
?>
<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
>>>>>>> 29987db... Adds News model and controller
