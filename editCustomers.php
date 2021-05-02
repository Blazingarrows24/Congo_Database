<center><?php
$resultupdate=NULL;
$cID=NULL;
if (!empty($_GET['cID'])){
$cID = $_GET['cID'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "congo";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $dbname);

$resultupdate=NULL;
if(isset($_POST['updatebtn']))
{
	$sql_update= "UPDATE customers SET CustomerID='$_POST[customertb]', Name='$_POST[nametb]', Address='$_POST[addresstb]', CardNo='$_POST[cardnotb]', Email='$_POST[emailtb]', Password='$_POST[passwordtb]' WHERE CustomerID='$cID'";

	$resultupdate = $conn->query($sql_update);

	if($resultupdate) 
		{
		echo "Records updated successfully";
		}
}

$sql = "SELECT * FROM customers WHERE CustomerID='$cID'";
$resultupdate = $conn->query($sql);
?></center>

<form action="" method="post">
<center><?php
if($resultupdate->num_rows > 0){
 echo "<table style='border: solid 1px black;'>
	<tr>
	    <th>CustomerID</th>
	    <th>Name</th>
	    <th>Address</th>
	    <th>CardNo</th>
	    <th>Email</th>
	    <th>Password</th>
	</tr>";
}

while ($row = $resultupdate -> fetch_assoc()){//fetch the attributes to put in the designated textboxes
	echo '<tr>
		<td><input type="INT" name="customertb" value="'.$row['CustomerID'].'" readonly/></td>
		<td><input type="text" name="nametb" value="'.$row['Name'].'"/></td>
		<td><input type="text" name="addresstb" value="'.$row['Address'].'"/></td>
		<td><input type="INT" name="cardnotb" value="'.$row['CardNo'].'"/></td>
		<td><input type="text" name="emailtb" value="'.$row['Email'].'"/></td>
		<td><input type="text" name="passwordtb" value="'.$row['Password'].'"/></td>
	      <tr>';
}
 echo "</table>";

?></center>
    
    <p style="text-align:center">
        <a href="customersTable.php"><input type=button value="< Back" style="width: 75px"></a>
        <input type="submit" value="Update" name="updatebtn"/>
    </p>


</form>
