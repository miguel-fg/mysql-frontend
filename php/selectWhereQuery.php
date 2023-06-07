<!doctype html>
<html>
<head>
    <title>Display Records of a table</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <?php
    $servername = "localhost";
    $dbname = "RoomDB";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p style='color:green'>Connection Was Successful</p>";
    } catch (PDOException $err) {
        echo "<p style='color:red'> Connection Failed: " . $err->getMessage() . "</p>\r\n";
    }

    try {
        $sql = "SELECT * FROM Room WHERE Capacity >= '$_POST[minCap]'";

        $stmnt = $conn->prepare($sql);

        $stmnt->execute();

        $row = $stmnt->fetch();
        if ($row) {      // if there is any result from the query
            echo '<table>';
            echo '<tr> <th>Building</th> <th>Floor</th> <th>Room No</th> <th>Capacity</th></tr>';
            do {
                echo "<tr><td>$row[Building]</td><td>$row[Floor]</td><td>$row[RoomNo]</td><td>$row[Capacity]</td></tr>";
            } while ($row = $stmnt->fetch());     // fetches another row from the query result, until we reach to the end of the result
            echo '</table>';
        } else {
            echo "<p> No Record Found!</p>";
        }
    } catch (PDOException $err) {
        echo "<p style='color:red'>Record Retrieval Failed: " . $err->getMessage() . "</p>\r\n";
    }
    // Close the connection
    unset($conn);

    echo "<a href='../index.html'>Back to the Homepage</a>";

    ?>
</body>

</html>