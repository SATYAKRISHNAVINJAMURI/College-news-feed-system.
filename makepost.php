<?php
include('session.php');
$post = $_POST['post'];
$date = date("Y-m-d H:i:s");
$user = $_SESSION['login_user'];
$query = mysqli_query($db,"SELECT user_id FROM user WHERE user_name =". "'$user'".";") or die("couldn't");
   
   $row1 = mysqli_fetch_array($query) or die("cannot");
 	$userid = $row1['user_id'];
$query=" INSERT INTO ttimeline(user_id,text,date_of_upload) VALUES("."'$userid'".","."'$post'".","."'$date'".");";
mysqli_query($db,$query) or die("can't");
header("location:welcome.php");

?>