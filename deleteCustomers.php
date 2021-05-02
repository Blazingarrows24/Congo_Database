<html>
<body style="text-align:center">
    <h1>Warning, Deleting a customer will also delete corresponding Reviews and Purchases</h1>
<center><?php

$cID=NULL;
if (!empty($_GET['CustomerID'])) {
$cID = $_GET['CustomerID'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "congo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sqldelete2 = "DELETE FROM reviews WHERE CustomerID='$cID'";
$delete2 = $conn->query($sqldelete2);
$sqldelete3 = "DELETE FROM purchases WHERE CustomerID='$cID'";
$delete3 = $conn->query($sqldelete3);
$sqldelete = "DELETE FROM customers WHERE CustomerID='$cID'";
$delete = $conn->query($sqldelete);

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table border='1' width='1000' cellspacing='1'>
		<tr>
	   	<th>CustomerID</th>
	   	<th>Name</th>
	    	<th>Address</th>
	    	<th>CardNo</th>
	   	<th>Email</th>
		<th>Password</th>
	</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>
		<td>'.$row['CustomerID'].'</td>
		<td>'.$row['Name'].'</td>
		<td>'.$row['Address'].'</td>
		<td>'.$row['CardNo'].'</td>
		<td>'.$row['Email'].'</td>
		<td>'.$row['Password'].'</td>
		<td> <a href="deleteCustomers.php?CustomerID='.$row['CustomerID'].'&mode=delete">Delete </a></td>
	      </tr>';
}
 echo "</table>";

?></center>
    <a href="customersTable.php"><input type=button value="< Back" style="width: 75px"></a>
</body>
</html>