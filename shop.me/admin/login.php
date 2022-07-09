<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('methuka' => '123456');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="utf-8">
<title>Login Page</title>
<link href="./css/style.css" rel="stylesheet">
</head>
<body>
  <style>
    .main-data{
      display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;


    }
    
  @media screen and (max-width: 992px) {
    .main-data{
      display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    transform: scale(0.9);

 
  </style>

<br>
<div class="main-data">
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input style="  transition-duration: 0.3s;
  text-decoration: none;
  color: white;
  font-size: 14px;
  padding: 7px 11px;
  background: #0f7ceb;
  font-family: arial;
  border-radius: 5px;
  border-style: none;cursor: pointer;" name="Submit" type="submit" value="Login" class="Button"></td>
    </tr>
  </table>
</form>

</div>

</body>
</html>