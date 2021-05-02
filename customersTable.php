<!DOCTYPE HTML>  
<html>
    <body style="text-align: center;">
            <p style="text-align: center;"><b>Table of Contents</b></p>
                    <a href="employeeTable.php"><input type=button value="Employees" style="width: 100px"></a>
                <br>
                    <a href="productTable.php"><input type=button value="Products" style="width: 100px"></a>
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

        $sql = "SELECT * FROM customers";
        $result = $conn -> query($sql);
        if($result->num_rows > 0) {
            echo "<table border='1' width='1000' cellspacing='1'>
                <tr>
                <b>
                    <th>CustomerID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>CardNo</th>
                    <th>email</th>
                    <th>Password</th>
                    <th style='border: solid 1px black;'>Edit</th>
                </b>
                </tr>";
        }

        while ($row = $result -> fetch_assoc()){
            echo '<tr>
                    <td> '.$row['CustomerID'].' </td>
                    <td> '.$row['Name'].' </td>
                    <td> '.$row['Address'].' </td>
                    <td> '.$row['CardNo'].' </td>
                    <td> '.$row['Email'].' </td>
                    <td> '.$row['Password'].' </td>
                    <td style="border: solid 1px black;"> <a href="editCustomers.php?cID='.$row['CustomerID'].'">Update </a></td>
                </tr>';
        }
        ?></center>
    </p>
    <p>
        <a href="InsertCustomers.php"><input type=button value="Insert" style="width: 100px"></a>
        <a href="deleteCustomers.php"><input type=button value="Delete" style="width: 100px"></a>
    </p>
</html>