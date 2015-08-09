<?php
//views/news/view.php
$this->load->view($this->config->item('theme') . 'header'); ?>

<?php echo $rss_item ->description;  ?>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>