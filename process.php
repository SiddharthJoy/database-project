<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT Password FROM admin where UserName = '$username' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($password == $row["Password"]){
            echo "Logged in Successfully!". "<br>";
            header('location: button.html');
        }
        else  header('location: false.html');
   }
} 
else {
    echo header('location: false.html');
}