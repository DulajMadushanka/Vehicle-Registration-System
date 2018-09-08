<html>
<head>
<title>
Home Page
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="http://localhost/Register/index.php/Login_Controller/home">Vehicle System</a>
    <a class="navbar-brand"><?php	echo '<h5 style="color:white;margin-left:590px;margin-top:10px;">Hi '.$this->session->userdata('username').'</h5>'; ?></a>
    <a class="navbar-brand" href="http://localhost/Register/index.php/Login_Controller/logout">Logout</a>


  </nav>
<div class="container"><br>
 <div class="jumbotron" style="height:400px;border-style: solid;border-width:4px;">

  <h1 style="text-align:center;color:black;" ><b>Vehicle Mangement System</b></h1><br>

<!--  <div style="width:150px;height:100px; border-style: solid;border-width: 1px;background-color:#3362ff;border-radius: 15px">



      <<a style="margin-left: 20px;padding-top: 50px;color:black;" role="button" href="http://localhost/Register/index.php/VehicleReg_Controller/register"><i class="fa fa-plus"></i><b>Register</b></a></span>

  </div>-->

  <div class="card" style="width: 18rem;height:200px;border-style: solid;border-width: 1px;background-color:#3362ff;border-radius: 15px">

  <div class="card-body">
    <h3 class="card-title" style="text-align:center;color:black;"><b>Register Vehicle</b></h3><br>

    <a style="margin-left:78px" href="http://localhost/Register/index.php/VehicleReg_Controller/register" class="btn btn-primary">Register</a>
  </div>
</div>
<div class="card" style="width: 18rem;margin-left:330px;margin-top:-200px;height:200px;border-style: solid;border-width: 1px;background-color:#3362ff;border-radius: 15px" >

<div class="card-body">
  <h3 class="card-title" style="text-align:center;color:black;"><b>Show Vehicle</b></h3><br>

  <a style="margin-left:90px" href="http://localhost/Register/index.php/VehicleShow_Controller/showVehicle" class="btn btn-primary">Show</a>
</div>
</div>










</div>
</div>



</body>

</html>
