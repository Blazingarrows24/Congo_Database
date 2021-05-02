<html>
<body style="text-align:center">
<h1>Warning, Deleting a Warehouse will set its employees' Warehouse ID to null</h1>
    <br>
<center><?php

$wID = NULL;
if (!empty($_GET['WarehouseID'])) {
$wID = $_GET['WarehouseID'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "congo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sqldelete = "DELETE FROM warehouse WHERE WarehouseID='$wID'";
$delete = $conn->query($sqldelete);

$sql = "SELECT * FROM warehouse";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table border='1' width='1000' cellspacing='1'>
		<tr>
	   	<th>WarehouseID</th>
	   	<th>Address</th>
	    	<th>Phone</th>
	</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>
		<td>'.$row['WarehouseID'].'</td>
		<td>'.$row['Address'].'</td>
		<td>'.$row['Phone'].'</td>
		<td> <a href="deleteWarehouse.php?WarehouseID='.$row['WarehouseID'].'&mode=delete">Delete </a></td>
	      </tr>';
}
 echo "</table>";

?></center>
    <a href="warehouseTable.php"><input type=button value="< Back" style="width: 75px"></a>
</body>
</html>