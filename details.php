<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Ab show karenge details
$sql = "SELECT id, name, email, phone, bloodg FROM users";
$result = $conn->query($sql);

if ($conn) {
 echo "<center><table border='4' cellpadding='20px'>";
 echo "<tr><td>"."<b>ID</b>"."</td><td>"."<b>Name</b>"."</td><td>"."<b>Email</b>"."</td><td>"."<b>Phone</b>"."</td><td>"."<b>Blood Group</b>"."</td></tr>";

 while ($newArray = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 $ii = $newArray['id'];
 $n = $newArray['name'];
 $e = $newArray['email'];
 $p = $newArray['phone'];
 $b = $newArray['bloodg'];
 echo "<tr><td>".$ii."</td><td>".$n."</td><td>".$e."</td><td>".$p."</td><td>".$b."</td></tr>";

 }
 echo "</table></center>";
 } else {
 printf("Could not retrieve records: %s\n", mysqli_error($conn));
 }

$conn->close();
?>

</body>
</html>