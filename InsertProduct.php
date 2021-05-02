<html>
<body style="text-align: center">
<?php

echo '<h2>Insert into Product Table</h2>';

if(isset($_POST['inserttb'])){ //things to do, once the "submit" key is hit

	$pID=$_POST['ProductID'];
	$Name = $_POST['Name'];
	$Price = $_POST['Price'];
	$Quantity = $_POST['Quantity'];
	$wID = $_POST['WarehouseID'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname  = "congo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO Product VALUES ('$pID','$Name','$Price','$Quantity','$wID')";
	$result = $conn->query($sql);

	if($result) 
	{
	echo "Records inserted successfully";
	}
};

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<a href="productTable.php"><input type=button value="< Back" style="width: 75px"></a>
<br>
Records were only inserted successfully when you see 'Records inserted Successfully.'
<br>
<br>
<br>

ProductID : <input type="INT" name="ProductID"/> 
<br/> <br/>
Name : <input type="text" name="Name"/>
<br/> <br/>
Price : <input type =float" name ="Price"/>
<br/> <br/>
Quantity : <input type =INT" name ="Quantity"/>
<br/> <br/>
WarehouseID : <input type ="INT" name ="WarehouseID"/>
<br/> <br/>
<input type ="submit" value="Insert" name="inserttb"/>
</form>