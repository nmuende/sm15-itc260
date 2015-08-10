<?php
//views/news/view.php
$this->load->view($this->config->item('theme') . 'header'); ?>


<h2><?php echo $title ?></h2>

<div class="main">

<?php foreach ($rss_item->channel->item as $rss): ?>

        <h3><?php echo $rss->title; ?></h3>
                <?php echo $rss->description; ?>
        <p><a href="<?php echo $rss->link; ?>">View Article</a></p>

<?php endforeach ?>
</div>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>