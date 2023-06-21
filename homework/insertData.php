
<?php
include "dbconnect.php";
error_reporting(0);

$_POSTname=$_POST['f_name'];
$designation=$_POST['f_designation'];
$phone=$_POST['f_phone'];
$dob=$_POST['f_dob'];

$sql = "INSERT INTO teacher (id, name,designation,phone,dob) 
		VALUES (NULL, '$name', '$designation', '$phone','$dob')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

