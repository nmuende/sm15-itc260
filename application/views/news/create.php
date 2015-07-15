<?php
//views/news/create.php
<<<<<<< HEAD
$this->load->view($this->config->item('theme') . 'header');
=======
>>>>>>> 4bd33ec... Adds News create controller and ability to add news items and shreds of rss lurking
?>
<h2><?php echo $title ?></h2>

<!--1st dynamic piece:-->
<?php echo validation_errors(); ?>

<!--2nd dynamic piece: when you hit submit it will go to the news controller and create-->
<?php echo form_open('news/create') ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

<<<<<<< HEAD
</form>
<?php
$this->load->view($this->config->item('theme') . 'footer');
?>
=======
</form>
>>>>>>> 4bd33ec... Adds News create controller and ability to add news items and shreds of rss lurking
