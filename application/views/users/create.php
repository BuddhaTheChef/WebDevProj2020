<?php
//application/views/news/create.php

$this->load->view($this->config->item('theme') . 'header');

?>
<h2><?=$title?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/create'); ?>

      <fieldset>
    <legend>Enter User Below</legend>
    <div class="form-group">
      <label for="title">First Name</label>
      <input type="text" name="FirstName" class="form-control" id="text" placeholder="First Name" required="required">
    </div>
    <div class="form-group">
      <label for="title">Last Name</label>
      <input type="text" name="LastName" class="form-control" id="text" placeholder="Last Name" required="required">
    </div>
    <div class="form-group">
      <label for="title">Email</label>
      <input type="email" name="Email" class="form-control" id="text" placeholder="Email" required="required">
    </div>       
    <div class="form-group">
      <label for="text">Bio</label>
      <textarea class="form-control" id="Bio" name="Bio" rows="3" placeholder="Bio"></textarea>
    </div>
    <div class="form-group">
      <label for="text">Username</label>
      <textarea class="form-control" id="Username" name="Username" rows="1" placeholder="Username"></textarea>
    </div>
    <div class="form-group">
      <label for="text">Password</label>
      <input type="password" class="form-control" id="Password" name="Password" rows="1" placeholder="Password"/>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>


</form>

<?php
$this->load->view($this->config->item('theme') . 'footer');
?>