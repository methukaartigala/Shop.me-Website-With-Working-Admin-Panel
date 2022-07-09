
<?php
require_once '../db.php';





$id = "1";
$h1 = $_POST["h1"];
$p = $_POST["p"];



$sql = "UPDATE texts SET h1='$h1',p='$p' WHERE id=$id";

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
header('Refresh: 5;url=http://localhost/shop.me/admin/text-edit.php');
?>