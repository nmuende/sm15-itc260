<?php
//views/rss/index.php
									//'theme' referencing custom_config
$this->load->view($this->config->item('theme') . 'header');?>

<h2><?php echo $title ?></h2>

<div class="main">
	<p><a href="<?php echo site_url('rss/view/science'); ?>">View Science RSS Feed</a></p>
	<p><a href="<?php echo site_url('rss/view/tech'); ?>">View Tech RSS Feed</a></p>
	<p><a href="<?php echo site_url('rss/view/business'); ?>">View Business RSS Feed</a></p>

</div>


<?php $this->load->view($this->config->item('theme') . 'footer');