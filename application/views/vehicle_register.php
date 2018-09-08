<html>
<head>
<title>
Register Vehicle
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="http://localhost/Register/index.php/Login_Controller/home">Home</a>
        <a class="navbar-brand" href="http://localhost/Register/index.php/VehicleShow_Controller/showVehicle">Show Vehicle</a>
    <a style="margin-left:590px;" class="navbar-brand" href="http://localhost/Register/index.php/VehicleReg_Controller/register">Logout</a>
  </nav>
<div class="container"><br>
   <div class="jumbotron" style="border-style: solid;border-width:5px;width:830px;margin-left:-70px">
  <h1 style="text-align:center;color:black;"><b>Vehicle Registration</b></h1><br>
<form method="post" id="register" action="<?php echo base_url()?>/index.php/VehicleReg_Controller/form_validation">
  <?php
      if($this->uri->segment(2) == "inserted"){
        echo '<p style="text-align:center;font-size:20pt;" class = "text-success">Data Inserted</p>';
      }
   ?>

   <div class="row">
     <div class="col">
       <label for="register_no" style="color:black">Register No: </label>
       <input style="border-width:2px;border-color: black;" type="text" class="form-control" name="register_no" id="register_no" value="<?php echo set_value ('register_no') ?>" placeholder="Enter Register No">
       <span class="text-danger"><?php echo form_error('register_no'); ?></span>

     </div>
     <div class="col">
        <label for="brand" style="color:black">Brand: </label>
       <select style="border-width:2px;border-color: black" class="form-control" name="brand" id="vehicle_model" onclick="myFunction()">
         <option value="volvo" style="color:black;"></option>
         <option value="Toyota" style="color:black;">Toyota</option>
         <option value="Bence" style="color:black;">Bence</option>
         <option value="BMW" style="color:black;">BMW</option>
         <option value="Suzuki" style="color:black;">Suzuki</option>
         <option value="volvo" style="color:black;">Mitsubishi</option>
         <option value="volvo" style="color:black;">Prado</option>
       </select>


     </div>
   </div><br>







   <div class="row">
       <div class="col">
         <label for="model" style="color:black">Model: </label>
         <input style="border-width:2px;border-color: black" type="text" class="form-control" name="model" id="model" value="<?php echo set_value ('model') ?>" placeholder="Enter Model">
         <span class="text-danger"><?php echo form_error('model'); ?></span>
       </div>
       <div class="col">
         <label for="colour" style="color:black">Colour: </label>
         <input style="border-width:2px;border-color: black" type="text" class="form-control" name="colour" id="colour" value="<?php echo set_value ('colour') ?>" placeholder="Enter Colour">
         <span class="text-danger"><?php echo form_error('colour'); ?></span>
       </div>
     </div><br>


     <div class="row">
    <div class="col">
      <label for="engine_no" style="color:black">Engine No: </label>
      <input style="border-width:2px;border-color: black" type="text" class="form-control" name="engine_no" id="engine_no" value="<?php echo set_value ('engine_no') ?>" placeholder="Enter Engin No">
      <span class="text-danger"><?php echo form_error('engine_no'); ?></span>
    </div>
    <div class="col">
      <label for="chasis_no" style="color:black">Chasis No: </label>
      <input style="border-width:2px;border-color: black" type="text" class="form-control" name="chasis_no" id="chasis_no" value="<?php echo set_value ('chasis_no') ?>" placeholder="Enter Chasis No">
      <span class="text-danger"><?php echo form_error('chasis_no'); ?></span>
    </div>
  </div><br><br>
  <div class="row">
  <div class="col-md-9">
  </div>
  <div class="col-md-3">
  <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
  <button type="button" class="btn btn-primary" onclick="register_reset()">Reset</button>
</div>
</div>
</form>
</div>
</div>


<form>

</form>




<script>
function register_reset() {
    document.getElementById("register").reset();
}
</script>
</body>

</html>
