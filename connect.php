<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn= mysqli_connect('localhost', 'root', '', 'test1') or die("Connection Failed:" .mysqli_connect_error()); 
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bloodg'])) {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone= $_POST['phone'];
            $bloodg= $_POST['bloodg'];

        $sql= "INSERT INTO users (name, email, phone, bloodg) VALUES ('$name', '$email', '$phone', '$bloodg')";

        $query = mysqli_query($conn, $sql);
        if($query) {
            echo 'Entry Successfull';
            }
        else{
            echo 'Error Occurred';
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<body>
    <a href="details.php"><button>View All Registered Donors For the Camp</button></a>
</body>
</html>