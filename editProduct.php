<h1 style="text-align:center">Warning, If updating WarehouseID, it must match an existing WarehouseID</h1>
<center><?php
$pID = null;
$resultupdate=null;
if (!empty($_GET['pID'])){
$pID = $_GET['pID'];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "congo";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['updatebtn']))
{
	$sql_update= "UPDATE product SET ProductID='$_POST[producttb]', Name='$_POST[nametb]', Price='$_POST[pricetb]', Quantity='$_POST[quantitytb]', WarehouseID='$_POST[warehousetb]' WHERE ProductID='$pID'";

	$resultupdate = $conn->query($sql_update);

	if($resultupdate) //if the update is done successfully
		{
		echo "Records updated successfully";
		}
}

//when the page is loaded (also after the update is effective), the information of the selected (updated) record is loaded
$sql = "SELECT * FROM product WHERE ProductID='$pID'";
$resultupdate = $conn->query($sql);
?></center>

<form action="" method="post">
<center><?php
if($resultupdate->num_rows > 0){
 echo "<table style='border: solid 1px black;'>
	<tr>
	    <th>ProductID</th>
	    <th>Name</th>
	    <th>Price</th>
	    <th>Quantity</th>
	    <th>WarehouseID</th>
	</tr>";
}

while ($row = $resultupdate -> fetch_assoc()){//fetch the attributes to put in the designated textboxes
	echo '<tr>
		<td><input type="text" name="producttb" value="'.$row['ProductID'].'" readonly/></td>
		<td><input type="text" name="nametb" value="'.$row['Name'].'"/></td>
		<td><input type="text" name="pricetb" value="'.$row['Price'].'"/></td>
		<td><input type="text" name="quantitytb" value="'.$row['Quantity'].'"/></td>
		<td><input type="text" name="warehousetb" value="'.$row['WarehouseID'].'"/></td>
	      <tr>';
}
 echo "</table>";

?></center>
    <p style="text-align:center">
        <a href="productTable.php"><input type=button value="< Back" style="width: 75px"></a>
        <input type="submit" value="Update" name="updatebtn"/>
    </p>
    

</form>
