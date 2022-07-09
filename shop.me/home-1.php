<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop.me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require_once 'db.php';

$sql = "SELECT id, img, alt FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $img = $row["img"];
    $alt = $row["alt"];
  }
} else {
  echo "0 results";
}


$sql = "SELECT id, h1, p FROM texts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $h1 = $row["h1"];
    $p = $row["p"];
  }
} else {
  echo "0 results";
}


$sql = "SELECT id, nav1, nav1link, nav2, nav2link, nav3, nav3link, nav4, nav4link, nav5, nav5link FROM navbar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $nav1 = $row["nav1"];
    $nav1link = $row["nav1link"];

    $nav2 = $row["nav2"];
    $nav2link = $row["nav2link"];

    $nav3 = $row["nav3"];
    $nav3link = $row["nav3link"];

    $nav4 = $row["nav4"];
    $nav4link = $row["nav4link"];

    $nav5 = $row["nav5"];
    $nav5link = $row["nav5link"];
  }
} else {
  echo "0 results";
}

$sql = "SELECT id, Ccode FROM colour";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $code = $row["Ccode"];
 
  }
} else {
  echo "0 results";
}


$conn->close();

?>



    
</body>
</html>

