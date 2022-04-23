<?php
include ("connection.php");
error_reporting(0);
$query ="SELECT * FROM citizens";
$data =mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0)
	
{
	?>
	<p><b><h3>Citizens Table</table></h3></b></p>
	<table>
	
	     <tr>
		       <th> Name    </th>
			   <th> NID <---> </th>
			   <th> Gender <---></th>
			   <th> Age <---> </th>
			   <th> Marital Status <---> </th>
			   <th> Spouse ID <---> </th>
			   <th>  prof_ID<---> </th>
		 </tr>
   

    <?php
     while($result =mysqli_fetch_assoc($data))
	 {
           echo"<tr>
                    <td>".$result['Name']."</td>
                    <td>".$result['NID']."</td>
					
					<td>".$result['Gender']."</td>
					<td>".$result['Age']."</td>
					<td>".$result['Maritial_status']."</td>
					<td>".$result['Spouse_ID']."</td>
					<td>".$result['prof_ID']."</td>
  					
					
				</tr>";
	 }
}
else
{
    echo "no record found";
}
?>
</table>

<p><b><h3>Professions Table</table></h3></b></p>
<?php
$query ="SELECT * FROM registered_proffessions";
$data =mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0)
	
{
	?>
	<table>
	
	     <tr>
			   <th> Profession <---> </th>

			   <th> Prof ID <---></th>
			   <th> Grade <---> </th>
			   <th> Work Place <---> </th>
			   <th> Address <---> </th>
		 </tr>
   

    <?php
     while($result =mysqli_fetch_assoc($data))
	 {
           echo"<tr>
                    <td>".$result['prof']."</td>
					<td>".$result['prof_ID']."</td>
					<td>".$result['Grade']."</td>
					<td>".$result['Work_place']."</td>
					<td>".$result['Address']."</td>
				</tr>";
	 }
}
else
{
    echo "no record found";
}
?>
</table>
<p><b><h3>Address Table</table></h3></b></p>
<?php
$query ="SELECT * FROM Address";
$data =mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0)
	
{
	?>
	<table>
	
	     <tr>
			   <th> NID <---> </th>

			   <th> Area <---></th>
			   <th> Block <---> </th>
			   <th> House Number <---> </th>
			   <th> Cell Number <---> </th>
		 </tr>
   

    <?php
     while($result =mysqli_fetch_assoc($data))
	 {
           echo"<tr>
                    <td>".$result['NID']."</td>
					<td>".$result['Area']."</td>
					<td>".$result['Block']."</td>
					<td>".$result['House_number']."</td>
					<td>".$result['Cell_number']."</td>
				</tr>";
	 }
}
else
{
    echo "no record found";
}
?>
</table>