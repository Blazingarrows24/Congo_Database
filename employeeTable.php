<!DOCTYPE HTML>  
<html>
    <body style="text-align: center;">
            <p style="text-align: center;"><b>Table of Contents</b></p>
                    <a href="productTable.php"><input type=button value="Products" style="width: 100px"></a>
                <br>
                    <a href="customersTable.php"><input type=button value="Customers" style="width: 100px"></a>
                <br>
                    <a href="purchasesTable.php"><input type=button value="Purchases" style="width: 100px"></a>
                <br>
                    <a href="warehouseTable.php"><input type=button value="Warehouses" style="width: 100px"></a>
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

        $sql = "SELECT * FROM employee";
        $result = $conn -> query($sql);
        if($result->num_rows > 0) {
        echo "<table border='1' width='1000' cellspacing='1'>
                <tr>
                <b>
                    <th>employeeID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>DOB</th>
                    <th>SSN</th>
                    <th>Wage</th>
	    <th>WarehouseID</th>
                    <th style='border: solid 1px black;'>Edit</th>
                </b>
                </tr>";
        }
        while ($row = $result -> fetch_assoc()){
            echo '<tr>
                    <td> '.$row['EmployeeID'].' </td>
                    <td> '.$row['Name'].' </td>
                    <td> '.$row['Position'].' </td>
                    <td> '.$row['DOB'].' </td>
                    <td> '.$row['SSN'].' </td>
                    <td> '.$row['Wage'].' </td>
                    <td> '.$row['WarehouseID'].' </td>
                    <td style="border: solid 1px black;"> <a href="editEmployee.php?eID='.$row['EmployeeID'].'">Update </a></td>
                </tr>';
        }
        ?></center>
    </p>
    <p>
        <a href="InsertEmployee.php"><input type=button value="Insert" style="width: 100px"></a>
        <a href="deleteEmployee.php"><input type=button value="Delete" style="width: 100px"></a>
    </p>
</html>