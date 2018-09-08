<html>
<head>
<title>
Login
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background-color: #3473db;">

<div class="container"><br><br><br>
   <div class="jumbotron" style="border-style: solid;border-width:5px;">

<form method="post" id="login" action="<?php echo base_url()?>/index.php/Login_Controller/login_validation">
    <h1 style="text-align:center;color:black;"><b>Vehicle Mangement System</b></h1><br>
    <?php if($this->session->flashdata("error")) {?>
    <div class="alert alert-danger" role="alert" style="text-align:center">
      <?php
        echo '<label class="text-danger" >'.$this->session->flashdata ("error").'</label>';
      ?>
    </div>
    <?php } ?>
  <div class="form-group">
    <label for="username" style="color:black">User Name</label>
    <input style="border-width:2px;border-color: black" type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username') ?>" placeholder="Enter email">
    <span class="text-danger"><?php echo form_error('username'); ?></span>
  </div>
<div class="form-group">
    <label for="password" style="color:black">Password</label>
    <input style="border-width:2px;border-color: black" type="password" class="form-control" name="password" id="password" placeholder="Password">
    <span class="text-danger"><?php echo form_error('password'); ?></span>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
  <button type="button" class="btn btn-primary" onclick="login_reset()">Reset</button>


</form>
</div>
</div>

<script>
function login_reset() {
    document.getElementById("login").reset();
}
</script>

</body>

</html>
