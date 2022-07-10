
<?php
require_once '../db.php';


require_once '../home-1.php';
?>




<html>

    <title>Edit Page</title>

    <style>
      body{
        margin-left: 35px;
        margin-right: 35px;
      }
      h1{
        text-align: center;
        justify-content: center;
        margin-left: 35px;
        margin-right: 35px;

      }
    </style>


    <body>
        <h1 style="text-align:center;
        margin:50px;">Nav Bar Editor</h1>
        <hr>

<form action="navtext-edit-process.php" method="POST">
  <label for="nav1">Nav 1</label><br>
  <input type="text" id="nav" name="nav1" value="<?php echo $nav1?>"><br>
  <label for="nav1link">Nav 1 link</label><br>
  <input type="text" id="nav" name="nav1link" value="<?php echo $nav1link?>"><br><br>

  <label for="nav1">Nav 2</label><br>
  <input type="text" id="nav" name="nav2" value="<?php echo $nav2?>"><br>
  <label for="nav1link">Nav 2 link</label><br>
  <input type="text" id="nav" name="nav2link" value="<?php echo $nav2link?>"><br><br>

  <label for="nav1">Nav 3</label><br>
  <input type="text" id="nav" name="nav3" value="<?php echo $nav3?>"><br>
  <label for="nav1link">Nav 3 link</label><br>
  <input type="text" id="nav" name="nav3link" value="<?php echo $nav3link?>"><br><br>

  <label for="nav1">Nav 4</label><br>
  <input type="text" id="nav" name="nav4" value="<?php echo $nav4?>"><br>
  <label for="nav1link">Nav 4 link</label><br>
  <input type="text" id="nav" name="nav4link" value="<?php echo $nav4link?>"><br><br>

  <label for="nav1">Nav 5</label><br>
  <input type="text" id="nav" name="nav5" value="<?php echo $nav5?>"><br>
  <label for="nav1link">Nav 5 link</label><br>
  <input type="text" id="nav" name="nav5link" value="<?php echo $nav5link?>"><br><br>


  <input type="submit" value="Update">
</form> 

<hr>
<h1>Main text Editor</h1>

<form action="main-text-process.php" method="POST">
  <label for="h1">Main text</label><br>
  <input type="text" id="h1" name="h1" value="<?php echo $h1?>"><br>

  <label for="p">Slogan</label><br>
  <input type="text" id="p" name="p" value="<?php echo $p?>"><br><br>
  <input type="submit" value="Update">
</form> 

<hr>
<!-- Changing the background colour -->

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
    <h1>Background colour changer</h1>
<p>Now background colour is <?php echo $code?></p>
    <form action="color-action_page.php" method="POST">
  <label for="favcolor">Select your favorite background color:</label>
  <input type="color" id="favcolor" name="color" value="<?php echo $code?>"><br><br>
  <input type="submit">
</form>





       

    </body>
</html>
