<?php
//Step1
 $db = mysqli_connect('localhost','root','','destination')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>

<?php
//Step2
$query = "SELECT Tno,Tname,Artime,Rtime,1A,2A,Sl FROM chennai";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
echo '<table border>
    <tr>
        <th>TrainNumber</th>
        <th>TrainNameame</th>
		<th>Arrivaltimeivaltime</th>
		<th>Reachtime</th>
		<th>1AC</th>
		<th>2AC</th>
		<th>Sleeper</th>
    </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
            <td>'.$row['Tno'].'</td>
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
?>

</body>
</html>