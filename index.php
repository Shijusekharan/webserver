<?php
// Database configuration
$host = "projectteam2";
$username = "root";
$password = "";
$dbname = "shdb";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch employee details
$sql = "SELECT EmployeeID, FirstName, LastName, Email, HireDate, Salary FROM Employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Employee List</h1>

<?php
// Check if there are results
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Hire Date</th><th>Salary</th></tr>";

    // Output data for each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["EmployeeID"] . "</td>
                <td>" . $row["FirstName"] . "</td>
                <td>" . $row["LastName"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["HireDate"] . "</td>
                <td>$" . number_format($row["Salary"], 2) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No employees found.</p>";
}

// Close the connection
$conn->close();
?>

</body>
</html>
