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

<div class="container" style="margin-top: 10%;">
      
      <h1>Login<small style="font-size:15px">/<?php echo anchor(['url' => 'User/register'], 'Register' , 'style="text-decoration: none;"'); ?></small></h1>
      <?php if($msg = $this->session->flashdata('user_msg')):
        $msg_class = $this->session->flashdata('user_class')

       ?>
        <div class="row">
          <div class="col col-6">
            <div class="alert <?php echo $msg_class;  ?>">
                <?php echo $msg; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if($error = $this->session->flashdata('Login_Failed')): ?>
        <div class="row">
          <div class="col col-6">
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php echo br(1); ?>
      <?php echo form_open('User/Authication'); ?>
    
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
      <?php echo form_submit(['type' => 'submit' ,'name' => 'submit' , 'value' => 'Login' , 'class' => 'btn btn-outline-success' ]); ?>
      <?php echo form_reset(['type' => 'reset' ,'name' => 'reset' , 'value' => 'reset' , 'class' => 'btn btn-outline-primary' ]); ?>
      
      
  
</div>



<?php include('footer.php'); ?>
