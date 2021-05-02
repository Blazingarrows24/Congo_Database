<html>
<body style="text-align: center">
<?php

echo '<h2>Insert into Customer Table</h2>';

if(isset($_POST['inserttb'])){ 

	$cID=$_POST['CustomerID'];
	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$CardNo = $_POST['CardNo'];
	$email = $_POST['email'];
	$Password = $_POST['Password'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname  = "congo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO Customers VALUES ('$cID','$Name','$Address','$CardNo','$email','$Password')";
	$result = $conn->query($sql);

	if($result) 
	{
	echo "Records inserted successfully";
	}
};

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<a href="customersTable.php"><input type=button value="< Back" style="width: 75px"></a>
<br>
<br>
<br>

CustomerID : <input type="INT" name="CustomerID"/> 
<br/> <br/>
Full Name : <input type="text" name="Name"/>
<br/> <br/>
Address : <input type ="text" name ="Address"/>
<br/> <br/>
CardNo : <input type ="INT" name ="CardNo"/>
<br/> <br/>
email : <input type ="text" name ="email"/>
<br/> <br/>
Password : <input type ="text" name ="Password"/>
<br/> <br/>
<input type ="submit" value="Insert" name="inserttb"/>
</form>