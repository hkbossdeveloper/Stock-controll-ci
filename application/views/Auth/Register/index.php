<?php include('header.php'); ?>
    
  

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Stocko's</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container" style="margin-top: 5%;margin-bottom: 5%">
      <h1>Register<small style="font-size:15px">/<?php echo anchor(['url' => 'User/login'], 'Login' , 'style="text-decoration: none;"'); ?></small></h1>
      <?php echo br(2); ?>
      <?php echo form_open('User/Registration'); ?>
      <div class="form-group">
      <label for="">Email</label>
      <?php echo form_input(['type' => 'email', 'name' => 'useremail', 'class' => 'form-control', 'placeholder' => 'Enter Email' ,'value' => set_value('useremail') ]); ?>
      <?php echo form_error('useremail'); ?>
      </div>
      <div class="form-group">
      <label for="">User Name</label>
      <?php echo form_input(['type' => 'text', 'name' => 'username', 'class' => 'form-control', 'placeholder' => 'Enter User Name' ,'value' => set_value('username') ]); ?>
      <?php echo form_error('username'); ?>
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <?php echo form_password(['type' => 'password', 'name' => 'userpassword', 'placeholder' => 'Enter Your Password','class'=> 'form-control', 'value' => set_value('userpassword')]); ?>
      <?php echo form_error('userpassword'); ?>
      </div>
      <div class="form-group">
      <label for="">Good Name</label>
      <?php echo form_input(['type' => 'text', 'name' => 'goodname', 'class' => 'form-control', 'placeholder' => 'Enter Good Name' ,'value' => set_value('goodname') ]); ?>
      <?php echo form_error('goodname'); ?>
      </div>
      
      
      <div class="form-group">
      <label for="">Cell Number</label>
      <?php echo form_input(['type' => 'text', 'name' => 'usercell', 'class' => 'form-control', 'placeholder' => 'Enter Cell Number' ,'value' => set_value('usercell') ]); ?>
      <?php echo form_error('usercell'); ?>
      </div>
       <div class="form-group">
      <label for="">Address</label>
      <?php echo form_textarea([ 'name' => 'useradd', 'class' => 'form-control', 'placeholder' => 'Enter Address' ,'value' => set_value('useradd')]); ?>
       <?php echo form_error('useradd'); ?>
      </div>
       <div class="form-group">
      <label for="">City</label>
      <?php
      $options = array(
        '0'       => 'Select City',
        '1'       => 'Karachi',
        '2'        => 'Lahore',
        '3'     => 'Islamabad',
        '4'         => 'Sindh',
      );

    echo form_dropdown(['name' => 'Cites' , 'options' => $options ,'class' => 'form-control']);

?>  <?php echo form_error('Cites'); ?>
<?php echo form_hidden('status', '1'); ?>
      </div>
      <?php echo form_submit(['type' => 'submit'  , 'value' => 'Register' , 'class' => 'btn btn-outline-success' ]); ?>
      <?php echo form_reset(['type' => 'reset' ,'name' => 'reset' , 'value' => 'Reset' , 'class' => 'btn btn-outline-primary' ]); ?>
      
      
  
</div>



<?php include('footer.php'); ?>
