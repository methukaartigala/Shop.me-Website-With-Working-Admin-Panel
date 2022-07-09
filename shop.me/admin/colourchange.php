
<html>
    <title>Change background colour</title>


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
    <style>
        body {
        background-color: <?php echo $code?>;
        }
    </style>

<body>
    <h1>Now background colour is <?php echo $code?></h1>
    <form action="color-action_page.php" method="POST">
  <label for="favcolor">Select your favorite background color:</label>
  <input type="color" id="favcolor" name="color" value="<?php echo $code?>"><br><br>
  <input type="submit">
</form>


    

    

</body>


</html>