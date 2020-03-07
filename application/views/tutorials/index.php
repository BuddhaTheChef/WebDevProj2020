<?php
//application/views/tutorials/index.php

$this->load->view($this->config->item('theme') . 'header');


?>
<h2><?php echo $title; ?></h2>

<?php foreach ($tutorials as $tutorials_item): ?>

        <h3><?php echo $tutorials_item['title']; ?></h3>
        <div class="main">
                <?php echo $tutorials_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('tutorials/'.$tutorials_item['slug']); ?>">View article</a></p>

<?php endforeach; 

$this->load->view($this->config->item('theme') . 'footer');

?>