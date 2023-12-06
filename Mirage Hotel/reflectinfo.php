<!DOCTYPE html>
<html>
<head>
    <title>Table with database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
    
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Adults</th>
        <th>Children</th>
        <th>Checkin</th>
        <th>Checkout</th>
        <th>Preference</th>
        <th>Comment</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "hotel");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT name, email, phone, adults, children, checkin, checkout, Preference, comment FROM book";
    $result = $conn->query($sql);
    if ($result) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>"
                . $row["phone"] . "</td><td>" . $row["adults"] . "</td><td>"
                . $row["children"] . "</td><td>" . $row["checkin"] . "</td><td>"
                . $row["checkout"] . "</td><td>" . $row["Preference"] . "</td><td>" . $row["comment"] . "</td></tr>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
    ?>
</table>
</body>
</html>