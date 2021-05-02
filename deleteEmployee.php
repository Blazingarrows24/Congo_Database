<html>
<body style="text-align: center">
    <p >
        <center><?php

        $eID=NULL;
        if (!empty($_GET['EmployeeID'])) {
        $eID = $_GET['EmployeeID'];
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname  = "congo";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sqldelete = "DELETE FROM employee WHERE EmployeeID='$eID'";
        $delete = $conn->query($sqldelete);


        $sql = "SELECT * FROM employee";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo "<table border='1' width='1000' cellspacing='1'>
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

        while ($row = $result -> fetch_assoc()){
            echo '<tr>
                <td>'.$row['EmployeeID'].'</td>
                <td>'.$row['Name'].'</td>
                <td>'.$row['Position'].'</td>
                <td>'.$row['DOB'].'</td>
                <td>'.$row['SSN'].'</td>
                <td>'.$row['Wage'].'</td>
                <td>'.$row['WarehouseID'].'</td>
                <td> <a href="deleteEmployee.php?EmployeeID='.$row['EmployeeID'].'&mode=delete">Delete </a></td>
                  </tr>';
        }
         echo "</table>";

        ?></center>
    </p>
    <a href="employeeTable.php"><input type=button value="< Back" style="width: 75px"></a>
</body>
    
</html>