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
                    <a href="warehouseTable.php"><input type=button value="Warehouses" style="width: 100px"></a>
    </body>
    <p>
        <center><?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "congo";

        $conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);

        $sql = "SELECT * FROM reviews";
        $result = $conn -> query($sql);
        if($result->num_rows > 0) {
        echo "<table border='1' width='500' cellspacing='1'>
                <tr>
                <b>
                    <th>CustomerID</th>
                    <th>ProductID</th>
                    <th>Stars</th>
                    <th>Date</th>
                </b>
                </tr>";
        }
        while ($row = $result -> fetch_assoc()){
            echo '<tr>
                    <td> '.$row['CustomerID'].' </td>
                    <td> '.$row['ProductID'].' </td>
                    <td> '.$row['Stars'].' </td>
                    <td> '.$row['Date'].' </td>
                </tr>';
        }
        ?></center>
    </p>
    <p>
        <a href="InsertReviews.php"><input type=button value="Insert" style="width: 100px"></a>
    </p>
</html>