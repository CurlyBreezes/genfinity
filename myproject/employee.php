<?php
include 'connection.php';
if (isset($_POST['submit'])){
  $fname =$_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];

  $sql="INSERT INTO employee(fname, mname, lname)values('$fname', '$mname','$lname')";
  $result=mysqli_query($conn,$sql);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jezelle</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body class="bg-secondary pt-5">
    <div class="mx-auto p-2" style="width: 450px;">
          
      <form class="mx-auto p-5 shadow-lg" style="background-color: #80ffaa;border-radius: 20px;" method="post">
        <h3 class="text-center">Hello, Employee!</h3>
        <div>
          <span for="fname">First name:</span><br>
          <input type="text" class="form-control border-success" placeholder ="enter first name" id="fname" name="fname"><br>
        </div>
        <div>
          <span for="mname">Middle name:</span><br>
          <input type="text" class="form-control border-success" placeholder ="enter middle name" id="mname" name="mname"><br>
        </div>
        <div class= "mb-2">
          <span for="lname">Last name:</span><br>
          <input type="text" class="form-control border-success" placeholder ="enter last name" id="lname" name="lname">
        </div>
        <div class="d-grid gap-2 col-4 mx-auto">
          <button type="submit" class="btn btn-success" name="submit">Submit</button> 
        </div>
        
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>