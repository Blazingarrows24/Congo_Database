<html>
<body style="text-align: center">
<?php

echo '<h2>Insert into Purchases Table</h2>';

if(isset($_POST['inserttb'])){ //things to do, once the "submit" key is hit

	$cID=$_POST['CustomerID'];
	$pID = $_POST['ProductID'];
	$Date = $_POST['Date'];


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname  = "congo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO purchases VALUES ('$cID','$pID','$Date')";
	$result = $conn->query($sql);

	if($result) 
	{
	echo "Records inserted successfully";
	}
};

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<a href="PurchasesTable.php"><input type=button value="< Back" style="width: 75px"></a>
    <br>
<br>
Records were only inserted successfully when you see 'Records inserted Successfully'. 
<br>
CustomerID and ProductID must match existing.
<br>
<br>

CustomerID : <input type="INT" name="CustomerID"/> 
<br/> <br/>
ProductID : <input type="INT" name="ProductID"/>
<br/> <br/>
Date : <input type ="DATE" name ="Date"/>
<br/> <br/>
<input type ="submit" value="Insert" name="inserttb"/>
</form>