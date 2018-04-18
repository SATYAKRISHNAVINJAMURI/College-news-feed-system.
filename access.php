<?php


$username=$_POST['username'];
$password=$_POST['password'];

mysql_connect("localhost","root","ammananna");
mysql_select_db("project");

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);



$result=mysql_query("select user_name from user where user_name='$username' and password='$password'") 
or die("failed to query database".mysql_error());
$row=mysql_fetch_array($result);


if($row['username']==$username&& $row['password']==$password){
echo "Login success Welcome".$row['username'];
require_once('welcome.php');
}
else{
require_once('login.php');

}

?>