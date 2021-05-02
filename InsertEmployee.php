<html>
<body style="text-align: center">
<?php

echo '<h2>Insert into Employee Table</h2>';

if(isset($_POST['inserttb'])){ //things to do, once the "submit" key is hit

	$eID=$_POST['EmployeeID'];
	$Name = $_POST['Name'];
	$Position = $_POST['Position'];
	$DOB = $_POST['DOB'];
	$SSN = $_POST['SSN'];
	$Wage = $_POST['Wage'];
	$wID = $_POST['WarehouseID'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname  = "congo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO Employee VALUES ('$eID','$Name','$Position','$DOB','$SSN','$Wage','$wID')";
	$result = $conn->query($sql);

	if($result) 
	{
	echo "Records inserted successfully";
	}
};

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<a href="employeeTable.php"><input type=button value="< Back" style="width: 75px"></a>
<br>
<br>
<br>

EmployeeID : <input type="INT" name="EmployeeID"/> 
<br/> <br/>
Full Name : <input type="text" name="Name"/>
<br/> <br/>
Position : <input type ="text" name ="Position"/>
<br/> <br/>
DOB : <input type ="date" name ="DOB"/>
<br/> <br/>
SSN : <input type ="INT" name ="SSN"/>
<br/> <br/>
Wage : <input type ="float" name ="Wage"/>
<br/> <br/>
Warehouse ID : <input type ="INT" name ="WarehouseID"/>
<br/> <br/>
<input type ="submit" value="Insert" name="inserttb"/>
</form>