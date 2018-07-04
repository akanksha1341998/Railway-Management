<?php
$con = mysqli_connect('localhost' , 'root' , '');

	if(!$con)
	{
		echo 'Not Connected to server';
	}
	$temp = mysqli_select_db($con,'form');
	if(!$temp)
	{
		echo 'Database not selected';
		echo '</br>';
	}

	$Name = $_POST['UserName'];
	$Password = $_POST['password']; 
		
	$sql= "insert into id(UserName,password) values('$Name','$Password')";
	
		$temp1=mysqli_query($con,$sql);
	if(!$temp1)
	{ 
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	} 


?>