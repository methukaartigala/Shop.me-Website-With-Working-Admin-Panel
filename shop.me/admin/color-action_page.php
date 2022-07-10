
<?php
require_once '../db.php';


$id = "1";
$color = $_POST["color"];



$sql = "UPDATE colour SET Ccode='$color' WHERE id=$id";

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
header('Refresh: 5;url=http://localhost/shop.me/admin');
?>
