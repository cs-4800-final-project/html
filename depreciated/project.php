<?php
$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, password, created_at FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - User Name: " . $row["username"]. " " . $row["password"]. " " . $row["created_at"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
