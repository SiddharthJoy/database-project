<?php
include ("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Update</title>
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
</html>>
<body>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">  
  <form id="contact" action="" method="POST">
    <h3><b>Update for NID</b></h3>
    <fieldset>
      <input placeholder="NID" type="Number"name ="nid" tabindex="3" required>
    </fieldset>
    <p><h2>Data to Update</h2></p>
    <fieldset>
      <input placeholder="Mobile Number" type="Number"name ="mn" tabindex="3">
    </fieldset>
    <fieldset>
      <input placeholder="Age" type="Number" name = "age" tabindex="4">
    </fieldset>
    <fieldset>
       <select name="ms" id="" class="form-control" placeholder="Marital Status">
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
       </select>
    </fieldset>
    <fieldset>
      <input placeholder="Spouse NID" type="Number" name ="sn" tabindex="4">
    </fieldset>
    <fieldset>
      <H4><b>Address</b></H4>
      <input placeholder="Area" type="text" name ="area" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Block" type="text" name ="bl"tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="House Number" type="Number" name =  "hnum"tabindex="4">
    </fieldset>
    <H4><b>Profession</b></H4>
    <fieldset>
      <input placeholder="Designation" type="text"name = "design"tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Work_place" type="text" name = "wp"tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Work_Address" type="text" name = "wadd"tabindex="4">
    </fieldset>
    <fieldset>
      <button name="Update" type="submit"name ="sub" id="contact-submit" data-submit="...Sending">Update</button><br>
      <a href="index1.php" class="button">Home</a>
       <a href="view.php" class="button">View Data</a>
    </fieldset>
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


    echo "$mts";

    if($cn){
      echo "$cn";
       $query = "UPDATE `address` SET  `Cell_number` = '$cn' WHERE `NID` = '$nd'";
       $data = mysqli_query($conn ,$query);     
    }
    if($ag){
      echo "$ag";
      $query = "UPDATE `citizens` SET `Age` = '$ag' WHERE `NID` = '$nd' ";
      $data = mysqli_query($conn ,$query);
    }
    if($mts){
      echo "$mts";
      $query = "UPDATE `citizens` SET `Maritial_status` = '$mts' WHERE `NID` = '$nd' ";
      $data = mysqli_query($conn ,$query);
    }
    if($sid){
      echo "$sid";
      $query = "UPDATE `citizens` SET `Spouse_ID` = '$sid' WHERE `NID` = '$nd' ";
      $data = mysqli_query($conn ,$query);
    }
    if($ar){
      echo "$ar";
      $query = "UPDATE `address` SET `Area` = '$ar' WHERE `NID` = '$nd' ";
      $data = mysqli_query($conn ,$query);
    }
    if($blk){
      echo "$blk";
      $query = "UPDATE `address` SET `Block` = '$blk' WHERE `NID` = '$nd' ";
      $data = mysqli_query($conn ,$query);
    }
    if($hn){
      echo "$hn";
      $query = "UPDATE `address` SET `House_number` = '$hn' WHERE `NID` = '$nd' ";
      $data = mysqli_query($conn ,$query);
    }
    // if($profid){
    //   echo "$profid";
    //   $query = "UPDATE `registered_proffessions` SET `prof_ID` = '$profid' WHERE `NID` = '$nd' ";
    //   $data = mysqli_query($conn ,$query);
    // }
    if($dsgn){
      echo "$profid";
      $query = "UPDATE `registered_proffessions` SET `prof` = '$dsgn' WHERE `prof_ID` = (select prof_ID from citizens where NID = '$nd') ";
      $data = mysqli_query($conn ,$query);
    }
    if($wpl){
      echo "$wpl";
      $query = "UPDATE `registered_proffessions` SET `Work_place` = '$wpl' WHERE `prof_ID` = (select prof_ID from citizens where NID = '$nd') ";
      $data = mysqli_query($conn ,$query);
    }
    if($add){
      echo "$add";
      $query = "UPDATE `registered_proffessions` SET `Address` = '$add' WHERE `prof_ID` = (select prof_ID from citizens where NID = '$nd') ";
      $data = mysqli_query($conn ,$query);
    }
?>  

</div>
</body>
</html>