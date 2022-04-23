<?php
include ("connection.php");
error_reporting(0);
?>

<html>
<head>
  <title>Login</title>
  <style>
  .button {
  background-color: #4CCF50;
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

<body>
  <link rel="stylesheet" type="text/css" href="style.css">
	<div class="container"> 
	   <form id="contact" action="process.php" method="POST">
	 	  <h3><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Admin Login</b></h3>
	     <fieldset>
      			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="user" placeholder="username"/>
    	     </fieldset>
	      <fieldset>
	     		 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="pass" placeholder="password"/>
	      </fieldset>
	      
	      <button type="submit"name ="sub" id="contact-submit" data-submit="...Sending">login</button>
	    </form>
      </div>
</body>
</html>
