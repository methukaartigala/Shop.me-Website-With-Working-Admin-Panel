
<?php
require_once '../db.php';


$id = "1";
$nav1 = $_POST["nav1"];
$nav1link =$_POST["nav1link"];
$nav2 = $_POST["nav2"];
$nav2link =$_POST["nav2link"];

$nav3 = $_POST["nav3"];
$nav3link =$_POST["nav3link"];

$nav4 = $_POST["nav4"];
$nav4link =$_POST["nav4link"];

$nav5 = $_POST["nav5"];
$nav5link =$_POST["nav5link"];

$sql = "UPDATE navbar SET nav1='$nav1',nav1link='$nav1link',nav2='$nav2',nav2link='$nav2link',nav3='$nav3',nav3link='$nav3link',nav4='$nav4',nav4link='$nav4link',nav5='$nav5',nav5link='$nav5link' WHERE id=$id";

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
header('Refresh: 5;url=http://localhost/shop.me/admin/');
?>
