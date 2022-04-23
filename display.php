<?php
include ("connection.php");
error_reporting(0);

$nd = $_POST ['nid'];

echo "".'<link rel="stylesheet" type="text/css" href="display.css">';

  $sql = "SELECT * FROM `citizens` NATURAL JOIN registered_proffessions NATURAL JOIN `address`where nid = '$nd'";
  $result = mysqli_query($conn ,$sql);

  

if (mysqli_num_rows($result) > 0) {
     echo  "<table>
    <thead>
    <tr>
      <th>Information</th><th></th>
    </tr>
    </thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>Name</td><td>".$row["Name"]."</td></tr>
              <tr><td>Gender</td><td>".$row["Gender"]."</td></tr>
              <tr><td>Age</td><td>".$row["Age"]."</td></tr>
              <tr><td>Marital Status</td><td>".$row["Maritial_status"]."</td></tr>";
        if($row["Maritial_status"]=="Married"){
          $spouse = $row["Spouse_ID"];
          $sql1 = "select name from `citizens` where `NID` = '$spouse' ";
          $result1 = mysqli_query($conn ,$sql1);
          if (mysqli_num_rows($result1) > 0) {
            while($row1 = $result1->fetch_assoc()) {
              echo "<tr><td>Spouse Name</td><td>".$row1["name"]."</td></tr>";
            }
          }
        }
         echo " <tr><td>Location</td><td>".$row["Area"]."</td></tr>
                 <tr><td>Block</td><td>".$row["Block"]."</td></tr>
                  <tr><td>House Number</td><td>".$row["House_number"]."</td></tr>
                   <tr><td>Contact</td><td>+880".$row["Cell_number"]."</td></tr>
               <tr><td>Profession</td><td>".$row["prof"]."</td></tr>
               <tr><td>Grade</td><td>".$row["Grade"]."</td></tr>
               <tr><td>Work Place</td><td>".$row["Work_place"]."</td></tr>
                <tr><td>Work Address</td><td>".$row["Address"]."</td></tr>";



    }
    echo "</table>";
} else {
    echo "<h1>Record Not Found!";
}
?> 
