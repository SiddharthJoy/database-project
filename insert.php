<?php
include ("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Insert</title>
    <style>

</style>
</head>

</body>
</html>>
<body>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">  
  <form id="contact" action="" method="POST">
    <h3><b>Insert Data</b></h3>
    <fieldset>
      <input placeholder="Name" type="text" name="name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="NID" type="Number"name = "nid" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mobile Number" type="tel"name ="mn" tabindex="3" required>
    </fieldset>
    <fieldset>
      <select name="gn" id="" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
      </select>
    </fieldset>
    <fieldset>
      <input placeholder="Age" type="Number" name = "age" tabindex="4" required>
    </fieldset>
    <fieldset>
        <select name="ms" id="" class="form-control">
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
      </select>
    </fieldset>
    <fieldset>
      <input placeholder="Spouse NID" type="Number" name ="sn" tabindex="4">
    </fieldset>
    <fieldset>
      <H4><b>Address</b></H4>
      <input placeholder="Area" type="text" name ="area" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Block" type="text" name ="bl"tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="House Number" type="Number" name =  "hnum"tabindex="4" required>
    </fieldset>
    <H4><b>Profession</b></H4>
    <fieldset>
      <input placeholder="ProfID" type="text"name ="prid" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Designation" type="text"name = "design"tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Work_place" type="text" name = "wp"tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Grade" type="text" name = "gr"tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Work_Address" type="text" name = "wadd" tabindex="4" required>
    </fieldset>
    <fieldset>
      <button  name="submit" type="submit"name ="sub" id="contact-submit" data-submit="...Sending">Insert</button><br>
      <a href="index1.php" class="button">Home</a>
      <a href="view.php" class="button">View Data</a>
    </fieldset>
    <!-- <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p> -->
  </form>

<?php
    

    
    $nm = $_POST ['name'];
    $nd = $_POST ['nid'];
    $cn = $_POST ['mn'];
    $gen = $_POST ['gn'];
    $ag = $_POST ['age'];
    $mts = $_POST ['ms'];
    $gen = $_POST['gn'];
    $sid = $_POST['sn'];
    $ar = $_POST['area'];
    $blk = $_POST ['bl'];
    $hn = $_POST['hnum'];
    $profid = $_POST ['prid'];
    $dsgn = $_POST ['design'];
    $wpl = $_POST ['wp'];
    $grd = $_POST ['gr'];
    $add = $_POST ['wadd'];
    
//    $query = "INSERT INTO `citizens`VALUES ('$nd','$nm' , '$mts', '$sid', '$dsgn', '$profid', 'gen', 'ag')";


    $query = "INSERT INTO `registered_proffessions`VALUES ('$dsgn','$profid' , '$grd', '$wpl', '$add')";

    $data = mysqli_query($conn ,$query);


    //if($data)
    //{
    //   echo "" . '<h1 style = "color:blue">Data Insterted Successfully in Professions</h1>' . "<br>";
    //}

    $query = "INSERT INTO `address` VALUES ('$nd','$ar' , '$blk', '$hn', '$cn')";

    $data = mysqli_query($conn ,$query);

    //if($data)
    //{
     // echo "" . '<h1 style = "color:blue">Data Insterted Successfully in Address</h1>' . "<br>";
    //}

    $query = "Delete from `citizens` where NID = '0' ";

    $data = mysqli_query($conn ,$query);
    $query = "Delete from `registered_proffessions` where prof_ID = '' ";

    $data = mysqli_query($conn ,$query);
    $query = "Delete from `Address` where NID = '0' ";

    $data = mysqli_query($conn ,$query);

    $query = "INSERT INTO `citizens`VALUES ('$nd','$nm' , '$gen', '$ag', '$mts', '$sid', '$profid')";

    $data = mysqli_query($conn ,$query);

    //if($data)
    //{
    //  echo "" . '<h1 style = "color:blue">Data Insterted Successfully in Citizens</h1>' . "<br>";
    //}
      //echo"Data Inserted Successfully in Professions";
    $data = 0;
   

?>  

</div>
</body>
</html>