 <?php
//Step1
 $db = mysqli_connect('localhost','root','','form')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 

<?php
//Step2
$query = "SELECT * FROM id";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
echo '<table border>
    <tr>
        <th>UserName</th>
        <th>password</th>
    </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
            <td>'.$row['UserName'].'</td>
            <td>'.$row['password'].'</td>
        </tr>';

}

echo '
</table>';
?>

</body>
</html> 