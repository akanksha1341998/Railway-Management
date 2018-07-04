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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td><a href="login.php">'.$row['1A'].'</a></td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
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
	    <td>'.$row['1A'].'</td>
	<td>'.$row['2A'].'</td>
	<td>'.$row['Sl'].'</td>
	
        </tr>';

        

}

echo '
</table>';
	}
		
?>