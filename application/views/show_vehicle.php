<html>
<head>
<title>
Show Vehicle
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js</script>
</head>

<body>
  <nav class="navbar navbar-dark bg-primary">

        <a class="navbar-brand" href="http://localhost/Register/index.php/Login_Controller/home">Home</a>
        <a class="navbar-brand" href="http://localhost/Register/index.php/VehicleReg_Controller/register">Register Vehicle</a>
        <a style="margin-left:590px;" class="navbar-brand" href="http://localhost/Register/index.php/VehicleReg_Controller/register">Logout</a>



  </nav>






<br>
<div class="container">
   <div class="jumbotron" style="border-style: solid;border-width:4px;">
  <h1 style="text-align:center;color:black;"><b>Browse Vehicle Details</b></h1><br>
  <div class="form-group">
    <label for="vehicle_model" style=black""><b>Model</b></label>
    <select style="border-width:2px;border-color: black" class="form-control" name="model" id="vehicle_model" onclick="myFunction()">
      <option id="empty">All</option>
      <?php
        if($fetch_data->num_rows() > 0){
          foreach ($fetch_data->result() as $row)
          {
          ?>
              <option style="color:black;" ><?php echo $row->brand; ?></option>
          <?php
          }
        }
        else {
        ?>
        <option>No Data Found</option>
        <?php
        }
        ?>

    </select>
  </div><br><br>

  <table class="table table-bordered table-striped" id="myTable">

      <tr style="border-style: solid;border-width:1px;border-color:black;background-color:#6e6f70;">
        <th style="colour:black;border-style: solid;border-width:1px;border-color:black;">Register No</th>
        <th style="color:black;border-style: solid;border-width:1px;border-color:black;">Brand</th>
        <th style="color:black;border-style: solid;border-width:1px;border-color:black;">Model</th>
        <th style="color:black;border-style: solid;border-width:1px;border-color:black;">Colour</th>
        <th style="colour:black;border-style: solid;border-width:1px;border-color:black;">Engine No</th>
        <th style="color:black;border-style: solid;border-width:1px;border-color:black;">Chasis No</th>
      </tr>

        <?php
          if($fetch_data->num_rows() > 0){
            foreach ($fetch_data->result() as $row)
            {
            ?>
            <tr style="border-style: solid;border-width:1px;border-color:black;">
                <td style="color:black;border-style: solid;border-width:1px;border-color:black;"><?php echo $row->register_no; ?></td>
                <td style="color:black;border-style: solid;border-width:1px;border-color:black;"><?php echo $row->brand; ?></td>
                <td style="color:black;border-style: solid;border-width:1px;border-color:black;"><?php echo $row->model; ?></td>
                <td style="color:black;border-style: solid;border-width:1px;border-color:black;"><?php echo $row->colour; ?></td>
                <td style="color:black;border-style: solid;border-width:1px;border-color:black;"><?php echo $row->engine_no; ?></td>
                <td style="color:black;border-style: solid;border-width:1px;border-color:black;"><?php echo $row->chasis_no; ?></td>
            </tr>
            <?php
            }
          }
          else {
          ?>
          <td>No Data Found</td>
          <?php
          }
          ?>


    </tbody>
  </table>


</div>
</div>


<script>
function myFunction() {

  var input, filter, table, tr, td, i;
  input = document.getElementById("vehicle_model");
  filter = input.value;
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  if(filter=="All"){

    for (i = 0; i < tr.length; i++) {

          tr[i].style.display = "";


    }
  }
  else{
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        if (td.innerHTML.indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }


}
</script>

</body>

</html>
