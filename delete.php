<?php
include ("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Delete Data</title>
  <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 150px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
}
</style>
</head>

</body>
</html>
<body>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">  
  <form id="contact" action="" method="POST">
    <h3><b>Delete Data</b></h3>
    <fieldset>
      <input placeholder="Enter NID" type="Number" name="nid" tabindex="1" required autofocus>
    </fieldset>
     <fieldset>
      <input placeholder="Enter ProfID" type="text"name ="prid" tabindex="4" required>
    </fieldset>
      <button name="submit" type="submit"name ="sub" id="contact-submit" data-submit="...Sending">Delete</button><br>
      <a href="index1.php" class="button">Home</a>
       <a href="view.php" class="button">View Data</a>
    </fieldset>
    <!-- <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p> -->
  </form>

<?php
  $nd = $_POST ['nid'];
  $profid = $_POST ['prid'];

  $query = "Delete from `citizens` where NID = '$nd'";
  $data = mysqli_query($conn ,$query);
  $query = "Delete from `address` where NID = '$nd'";
  $data = mysqli_query($conn ,$query);
  $query = "Delete from `registered_proffessions` where prof_ID = '$profid'";
  $data = mysqli_query($conn ,$query);
?>

</div>
</body>
</html>
