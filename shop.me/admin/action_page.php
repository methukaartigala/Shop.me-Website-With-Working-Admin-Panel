
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["id"];
$img = $_GET["img"];
$alt =$_GET["alt"];

$sql = "UPDATE details SET img='$img',alt='$alt' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
echo "";
echo "";
echo "You will be redirecting in 5 seconds";
$conn->close();
?>

<?php
header('Refresh: 5;url=http://localhost/shop.me/admin/edit.php');
?>

