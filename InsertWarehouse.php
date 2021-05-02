<html>
<body style="text-align: center">
<?php

echo '<h2>Insert into Warehouse Table</h2>';

if(isset($_POST['inserttb'])){ //things to do, once the "submit" key is hit

	$wID=$_POST['WarehouseID'];
	$Address = $_POST['Address'];
	$Phone = $_POST['Phone'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname  = "congo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO Warehouse VALUES ('$wID','$Address','$Phone')";
	$result = $conn->query($sql);

	if($result) 
	{
	echo "Records inserted successfully";
	}
};

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<a href="warehouseTable.php"><input type=button value="< Back" style="width: 75px"></a>
<br>
Records were only inserted successfully when you see 'Records inserted Successfully.'
<br>
<br>
<br>

WarehouseID : <input type="INT" name="WarehouseID"/> 
<br/> <br/>
Address : <input type="text" name="Address"/>
<br/> <br/>
Phone : <input type ="INT" name ="Phone"/>
<br/> <br/>
<input type ="submit" value="Insert" name="inserttb"/>
</form>