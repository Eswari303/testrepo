 <?php
echo " welcome";
$servername = "localhost";
$username = "root";
$password = "Pass@123";
$dbname = "eswaridb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email FROM authors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Hello ". $row["name"]. " your Email is: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
