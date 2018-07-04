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
	
if(isset($_POST["name"], $_POST["password"])) 
    {     

        $name = $_POST["Username"]; 
        $password = $_POST["Password"]; 

        $result1 = mysqli_query("SELECT UserName, Password FROM signup WHERE username = '".$name."' AND  password = '".$password."'");

        if(mysqli_num_rows($result1) > 0 )
        { header("location: sample.html");
            $_SESSION["logged_in"] = true; 
		 
            $_SESSION["naam"] = $name; 
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}
?>



<!-- $email = $_POST["Username"];
$pass = $_POST["Password"];
		


$result = mysqli_query("SELECT UserName,Password FROM signup WHERE UserName = $email");

$row = mysqli_fetch_array($result);

if($row["UserName"]==$email && $row["Password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?> -->




// <?php

// Grab User submitted information
//$email = $_POST["Username"];
//$pass = $_POST["Password"];

// Connect to the database
//$con = mysqli_connect("localhost","root","");
// Make sure we connected successfully
//if(! $con)
//{//  die('Connection Failed'.mysqli_error());//}

// Select the database to use
//mysqli_select_db("signinfo",$con);

//$result = mysqli_query("SELECT UserName, Password FROM signup WHERE UserName = $email");

//$row = mysqli_fetch_array($result);

//if($row["UserName"]==$email && $row["Password"]==$pass)
  //  echo"You are a validated user.";
//else{
  //  echo"Sorry, your credentials are not valid, Please try again."; }
//?> 