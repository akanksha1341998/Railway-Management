
<html>
<head>

<title>portal</title>

</head>

<body style="margin: 0px; padding: 0px; font-family: 'Trebuchet MS',verdana;">

<table width="100%" style="height: 100%;" cellpadding="10" cellspacing="0" border="0">
<tr>

<!-- ============ HEADER SECTION ============== -->
<td width="20%" height="15%" bgcolor="white"><img src="train.jpg" height=100 width=150> </td>
<td width="60%" height="15%"> <h1> <center>Welcome to the Portal</center></h1> </td> 
<td width="20%" valign="top" bgcolor="white"><img src="indrail.png" height=120 width=150 align="right">
</td></tr
<tr>
<td height="5%" width="20%" bgcolor="black"></td>
<td height="5%" width="60%" bgcolor="black"><marquee direction="left"><font color="white">Hello User!</font></marquee></td>
<td width="20%" valign="top" bgcolor="black" align="right"><font color="white"><a href="frontpage1.html">Log Out</a></font>
</td></tr>
<tr>
<!-- ============ LEFT COLUMN (MENU) ============== -->
<td width="20%" valign="top" bgcolor="#999f8e">
<center><u><font color="red">Terms and Conditions</u></font></center>
An individual can book only up to six passengers on one requisition form provided all passengers are for the same destination and for the same train.
</td>

<!-- ============ RIGHT COLUMN (CONTENT) ============== -->
<td width="60%" valign="top" bgcolor="#d2d8c7">

<h2><center>TRAIN SCHEDULE</center></h2><center>
<?php


$con = mysqli_connect('localhost' , 'root' , '');

	if(!$con)
	{
		echo 'Not Connected to server';
	}
	$temp = mysqli_select_db($con,'destination');
	if(!$temp)
	{
		echo 'Database not selected';
		echo '</br>' ;
	}

	$Source = $_POST['Source'];
         $Destination = $_POST['Destination'];
	
	if($Destination== "Ahmedabad")
	{	
		$query = "SELECT * FROM ahmedabad";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>

	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	    <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
	
        </tr>';

        

}

echo '
</table>';
	}
	else if($Destination=="Bhopal")
	{
		$query = "SELECT * FROM bhopal";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	  <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
	
        </tr>';

        

}

echo '
</table>';
	}
	else if($Destination=="Chennai")
	{
		$query = "SELECT * FROM chennai";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	    <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
	
        </tr>';

        

}

echo '
</table>';
	}
	else if($Destination=="Delhi")
	{
		$query = "SELECT * FROM delhi";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	    <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
        </tr>';

        

}

echo '
</table>';
	}
	else if($Destination=="Guwahati")
	{
		$query = "SELECT * FROM guwahati";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	    <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
        </tr>';

        

}

echo '
</table>';
	}
	else if($Destination=="Hyderabad")
	{
		$query = "SELECT * FROM hyderabad";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	   <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
	
        </tr>';

        

}

echo '
</table>';
	} 
	else if($Destination=="Jaipur")
	{
		$query = "SELECT * FROM jaipur";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	   <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
	
        </tr>';

        

}

echo '
</table>';
	}
	else if($Destination=="Kochin")
		{
			$query = "SELECT * FROM kochi";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	    <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
	
        </tr>';

        

}

echo '
</table>';
	}
		else if($Destination=="Kolkata")
		{
			$query = "SELECT * FROM kolkata";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	    <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
	
        </tr>';

        

}

echo '
</table>';
	}
	else if($Destination=="Mumbai")
	{
		$query = "SELECT * FROM mumbai";
		mysqli_query($con, $query) or die('Error querying database.');

		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		echo '<table border>
    		<tr>
        <th>Tno</th>
        <th>Tname</th>
	<th>Arrival time</th>
	<th>Reach time</th>
	<th>1AC</th>
	<th>2AC</th>
	<th>Sleeper</th>
	
    </tr>';

		while ($row = mysqli_fetch_array($result)) {
    		echo '
       	 <tr>
            <td>'.$row['Tno'].' </td>
            <td>'.$row['Tname'].'</td>
		<td>'.$row['Artime'].'</td>
		 <td>'.$row['Rtime'].'</td>
	    <td><a href="1A.html">'.$row['1A'].'</a></td>
	<td><a href="2A.html">'.$row['2A'].'</a></td>
	<td><a href="Sl.html">'.$row['Sl'].'</a></td>
	
        </tr>';

        

}

echo '
</table>';
	}
		
?>

</td><td width="20%"  bgcolor="#999f8e">
<center><u><font color="red">Terms and Conditions</u></font></center>
 01-12-2012,any one of the passenger booked on a PNR for undertaking journey in any class will have to produce any one of the 5 prescribed proofs of identity in original) during the journey failing which all  the passengers booked on that ticket will be treated as traveling  without ticket and charged accordingly. (ref. Railway Board letter no.2011/TG-I/20/P/ID dated 01-11-2012)
<ol>
<li>Voter Photo identity card issued by Election Commision of India.</li>

<li>Passport</li>

<li>PAN Card issued by Income Tax Department.</li>

<li>Driving Licence issued by RTO.</li>
<li>Unique Identification Card "Aadhaar". </li></ol>
</td>
</tr>
<tr>
?>
<td colspan="3" bgcolor='white'></td>

</tr>
</table>
</body>

<html>

