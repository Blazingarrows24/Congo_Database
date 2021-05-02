<html>
<body style="text-align:center">
    <h1>Warning, Deleting a product will also delete corresponding Reviews and Purchases</h1>
<center><?php

$pID=NULL;
if (!empty($_GET['ProductID'])) {
$pID = $_GET['ProductID'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "congo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sqldelete2 = "DELETE FROM reviews WHERE ProductID='$pID'";
$delete2 = $conn->query($sqldelete2);
$sqldelete3 = "DELETE FROM purchases WHERE ProductID='$pID'";
$delete3 = $conn->query($sqldelete3);
$sqldelete = "DELETE FROM product WHERE ProductID='$pID'";
$delete = $conn->query($sqldelete);


$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table border='1' width='1000' cellspacing='1'>
		<tr>
	   	<th>ProductID</th>
	   	<th>Name</th>
	    	<th>Price</th>
	    	<th>Quantity</th>
	   	<th>WarehouseID</th>
	</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>
		<td>'.$row['ProductID'].'</td>
		<td>'.$row['Name'].'</td>
		<td>'.$row['Price'].'</td>
		<td>'.$row['Quantity'].'</td>
		<td>'.$row['WarehouseID'].'</td>
		<td> <a href="deleteProduct.php?ProductID='.$row['ProductID'].'&mode=delete">Delete </a></td>
	      </tr>';
}
 echo "</table>";
?></center>
    <a href="productTable.php"><input type=button value="< Back" style="width: 75px"></a>
</body>
</html>