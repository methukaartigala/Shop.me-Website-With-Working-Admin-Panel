<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Change the image-logo</h3>

<a href="admin/upload.html">Upload images first</a>

<div>
  <form action="action_page.php" method="GET">
    <label for="fname">ID</label>
    <input type="text" name="id" placeholder="id">

    <label for="fname">Image</label>
    <input type="text" name="img" placeholder="img">

    <label for="fname">Alt</label>
    <input type="text" name="alt" placeholder="alt">


    




  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
