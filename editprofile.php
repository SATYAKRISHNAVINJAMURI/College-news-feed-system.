<?php
include('session.php');
?>
<!DOCTYPE HTML>
 <html> 
 <head>
 	<link rel="stylesheet" href="css1.css"/>
 	<link rel ="stylesheet" href ="css3.css"/>
 	<title> Edit Profile </title>
 	<meta charset="utf-8"/>
 	<style>
form{
 	padding-left:400px;
 	padding-right:400px;

}
button{
	background-color: green;
}
 </style>
 </head>
<body style="background-color:lightgrey">
<title>Edit Profile</title>
<strong><h1><center>
Indian Institute Of Information Technology,Kurnool</center></h1></srong>
<center><form action ="change.php" method ="POST">

<font color="red">Old Password:</font>
<input type="password" placeholder="Enter Old password(Required)"name="pwd"><br><br>
  <font color="red">New Username:</font>
  <input type="text" placeholder="Enter New Username(Optional)" name="uname"><br><br>
  <font color="red">New password:</font>
  <input type="password" placeholder="Enter New password(Optional)" name="newpwd"><br><br>
  <font color="red"> Re-enter new password:</font>
  <input type="password" placeholder="ReEnter New password(Optional)" name="renewpwd"><br><br> 
<font color="red">New Profile Name:</font>
<input type="text" placeholder="Enter New Profile Name(Optional)" name="pname"><br><br> 
<button class="button_shadow" type="submit" value="POST" >submit </button>


</form>
</center>
</body>
</html>
