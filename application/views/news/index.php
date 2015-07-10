<?php
//views/news/index.php
<<<<<<< HEAD
									//'theme' referencing custom_config
$this->load->view($this->config->item('theme') . 'header');
=======
>>>>>>> 29987db... Adds News model and controller
?>
<h2><?php echo $title ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title'] ?></h3>
        <div class="main">
                <?php echo $news_item['text'] ?>
        </div>
        <p><a href="<?php echo $news_item['slug'] ?>">View article</a></p>

<<<<<<< HEAD
<?php endforeach ?>

<?php 
$this->load->view($this->config->item('theme') . 'footer');
?>
=======
<?php endforeach ?>
>>>>>>> 29987db... Adds News model and controller
