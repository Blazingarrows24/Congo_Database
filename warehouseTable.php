<!DOCTYPE HTML>  
<html>
    <body style="text-align: center;">
            <p style="text-align: center;"><b>Table of Contents</b></p>
                    <a href="employeeTable.php"><input type=button value="Employees" style="width: 100px"></a>
                <br>
                    <a href="productTable.php"><input type=button value="Products" style="width: 100px"></a>
                <br>
                    <a href="customersTable.php"><input type=button value="Customers" style="width: 100px"></a>
                <br>
                    <a href="purchasesTable.php"><input type=button value="Purchases" style="width: 100px"></a> 
                <br>
                    <a href="reviewsTable.php"><input type=button value="Reviews" style="width: 100px"></a>
    </body>
    <p>
        <center><?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "congo";

        $conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);

        $sql = "SELECT * FROM warehouse";
        $result = $conn -> query($sql);
        if($result->num_rows > 0) {
        echo "<table border='1' width='1000' cellspacing='1'>
                <tr>
                <b>
                    <th>WarehouseID</th>
                    <th>Phone</th>
                    <th>Address</th>
                </b>
                </tr>";
        }
        while ($row = $result -> fetch_assoc()){
            echo '<tr>
                    <td> '.$row['WarehouseID'].' </td>
                    <td> '.$row['Phone'].' </td>
                    <td> '.$row['Address'].' </td>
                </tr>';
        }
        ?></center>
    </p>
    <p>
        <a href="InsertWarehouse.php"><input type=button value="Insert" style="width: 100px"></a>
        <a href="deleteWarehouse.php"><input type=button value="Delete" style="width: 100px"></a>
    </p>
</html>