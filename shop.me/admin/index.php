<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=0">

</head>
<style>
	.logout {
    transition-duration: 0.3s;
    text-decoration: none;
    color: white;
    font-size: 14px;
    padding: 7px 11px;
    background: #0f7ceb;
    font-family: arial;
    border-radius: 5px;
}
</style>
<body>

<div style="padding-top: 10px ; position: absolute;
    top: 38px;
    right: 38px;">
	<a class="logout" href="logout.php">Logout</a>


	</div>

<div style="padding-top: 20px ;">
<?php require_once 'colour-text_edit.php';?>

</div>

</body>
</html>


