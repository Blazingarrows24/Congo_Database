<h1 style="text-align:center">Warning, If updating WarehouseID, it must match an existing WarehouseID</h1>
<center><?php
$eID = null;
$resultupdate=null;
if (!empty($_GET['eID'])){
$eID = $_GET['eID'];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "congo";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['updatebtn']))
{
	$sql_update= "UPDATE employee SET EmployeeID='$_POST[eIDtb]', Name='$_POST[nametb]', Position='$_POST[postb]', DOB='$_POST[dobtb]', SSN='$_POST[ssntb]', Wage='$_POST[wagetb]',WarehouseID='$_POST[warehousetb]' WHERE EmployeeID='$eID'";

	$resultupdate = $conn->query($sql_update);

	if($resultupdate) //if the update is done successfully
		{
		echo "Records updated successfully";
		}
}

//when the page is loaded (also after the update is effective), the information of the selected (updated) record is loaded
$sql = "SELECT * FROM employee WHERE EmployeeID='$eID'";
$resultupdate = $conn->query($sql);
?></center>

<form action="" method="post">
<center><?php
if($resultupdate->num_rows > 0){
 echo "<table style='border: solid 1px black;'>
	<tr>
	    <th>EmployeeID</th>
	    <th>Name</th>
	    <th>Position</th>
	    <th>DOB</th>
	    <th>SSN</th>
	    <th>Wage</th>
	    <th>WarehouseID</th>
	</tr>";
}

while ($row = $resultupdate -> fetch_assoc()){//fetch the attributes to put in the designated textboxes
	echo '<tr>
		<td><input type="text" name="eIDtb" value="'.$row['EmployeeID'].'" readonly/></td>
		<td><input type="text" name="nametb" value="'.$row['Name'].'"/></td>
		<td><input type="text" name="postb" value="'.$row['Position'].'"/></td>
		<td><input type="date" name="dobtb" value="'.$row['DOB'].'"/></td>
		<td><input type="text" name="ssntb" value="'.$row['SSN'].'"/></td>
		<td><input type="text" name="wagetb" value="'.$row['Wage'].'"/></td>
        <td><input type="text" name="warehousetb" value="'.$row['WarehouseID'].'"/></td>
	      <tr>';
}
 echo "</table>";

?></center>
    <p style="text-align:center">
        <a href="employeeTable.php"><input type=button value="< Back" style="width: 75px"></a>
        <input type="submit" value="Update" name="updatebtn"/>
    </p>
    

</form>
