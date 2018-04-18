<?php

 include('session.php');
  // do some validation here to ensure id is safe
  $id = $_GET['id'];
  $link = mysql_connect("localhost", "root", "@Ammananna9@");
  mysql_select_db("project");
  $user = $_SESSION['login_user'];
  $sql = "SELECT photo FROM user WHERE user_id='$id';";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['photo'];
?>
