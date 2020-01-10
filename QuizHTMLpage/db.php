<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "quizgame";

// Create connection to server and database
$conn = new mysqli($servername, $username, $password, $dbname);
// If unabale to connect
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve data from specific table
$sql = "SELECT
score, username
FROM
game";

$result = $conn->query($sql);

// Check if retrieved data is greater than 0 rows
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // Output data of each row into a HTML table
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ett"]."</td></tr>";
    }
    echo "</table>";
    // Notify user that rtrieved data is empty
} else {
    echo "0 results";
}
// Close connection
$conn->close();
?>