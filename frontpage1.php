<?php
$con = mysqli_connect('localhost' , 'root' , '');

	if(!$con)
	{
		echo 'Not Connected to server';
	}
	$temp = mysqli_select_db($con,'signinfo');
	if(!$temp)
	{
		echo 'Database not selected';
		echo '</br>';
	}

	$Name = $_POST['Name'];
	 $Username= $_POST['Username'];
	$Password = $_POST['Password'];
	$EmailAddress = $_POST['EmailAddress'];
	$Gender=$_POST['gender'];
	$Birthday=$_POST['bday']; 

     $sql= "insert into signup(Name,UserName,Password,EmailAddress,gender,bday) values('$Name','$Username','$Password','$EmailAddress','$Gender','$Birthday')"; 

?>
<! DOCTYPE.html>
<html>
<head>
<script>
function validateForm()
{
  var y=document.forms["myForm"]["Username"].value;
  if(y == "")
  {
    alert("Username must be filled");
    return false;
  }
  var z=document.forms["myForm"]["Password"].value;
  if(z == "")
  {
    alert("Password must be filled");
    return false;
  }
}
</script>
<style>
p.box 
{
    background-color: black;
    float: left;
    width: 150px;
    height: 60px;
    align: center; 
}
div.title 
{
  background-color: white;
  float: left;
  align: center;
  padding: 5px;
  height: 140px;
  width: 1200px;
 }
div.right
{
  background-color: #999f8e;
  float: left;
  align: center;
  padding: 10px;
  height: 400px;
  width: 180px;
 }
div.center
{
  background-color:#d2d8c7;
  float: left;
  align: center;
  padding: 10px;
  height: 400px;
  width: 757px;
}
div.left
{
  background-color: #999f8e;
  float: left;
  align: center;
  height: 400px;
  width:230px;
}
div.bottom
{
  background-color: black;
  float: left;
  align: center;
  padding: 10px;
  height:80px;
  width: 1200px;
	border-style: inset;
}
</style>
</head>
<body bgcolor="#999f8e" alink="white" vlink="white">
<pre>
<font face="cambria" size="1">
<div class="title">
<font color="black" >
<img src="train.jpg" height=100 width=150 align="left"><img src="indrail.png" height=120 width=150 align="right">
<u><b><p style="font-size:30px; text-align:center;">INDIAN RAILWAYS AND TOURISM</p></b></u>
</div>
<div class="right">
<font size="4" color="white">
<p class="box" style="font-size:20px; text-align:center;"><b><a href="tourism.html">Tourism</a></b></p>
<br><br><br><br><br><br><br><p class="box" style="font-size:20px; text-align:center;"><b><a href="hotellist.html">Hotels</a></b></p></br>
</font>
</div>
<div class="center">

<fieldset style="width:40%;">
  <legend><B>LOGIN</B></legend>
  <b><u><h3>Required field</h3></u></b><font color="red">*</font>
  <br>
<form name="myForm" action="sample.html" onsubmit="return validateForm()" method="post">
<table>
<tr>
<td>
<b>Username</b><font color="red">*</font> : &emsp;</td>
<td><input type="text" name="Username" style="border:1px; border-style: inset;" >
</td></tr>
<tr><td>
<b>Password</b><font color="red">*</font> : &emsp;</td>
<td><input type="password" name="Password" style="border:1px; border-style: inset;">
</td></tr>
<tr>
<td>
<p id="demo">
<input type="submit" value="Login"> 
</p></td>
<td>
<p id="demo">
<input type="reset" value="Reset">
</p></td></tr>
</table>
</fieldset>
<h3><b>Don't have an account?</b> <a href="sign.html">signup</a></h3>
</form>
</div>
<div class="left">
<img src="tomato.jpg" height="60%" width="100%"></img>
<img src="coc.jpg" height="40%" width="100%"></img>
</div>
<div class="bottom">

	<center><img src="rupay.png" height="60px" width="60px">     <img src="safe.png" height="60px" width="60px">      <img src="mastercard.png" height="60px" width="60px">    <img src="verisign.png" height="60px" width="60px"></center>
  <font color="white" face="cambria" size="5" align="center"><b>                                                                                            </b>
</font>
</div>
</font>
</pre>
</body>
</html>