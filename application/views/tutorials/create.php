<?php
//application/views/tutorials/create.php

$this->load->view($this->config->item('theme') . 'header');

?>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('tutorials/create'); ?>

<fieldset>
    <legend>Enter News Item Below</legend>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="text" placeholder="Tutorial">
    </div>
        <div class="form-group">
      <label for="text">Content</label>
      <textarea class="form-control" id="text" name="text" rows="3" placeholder="Tutorials"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>

</form>

<?php
$this->load->view($this->config->item('theme') . 'footer');
?>