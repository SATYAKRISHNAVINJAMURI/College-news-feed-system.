<?php
  include('session.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>timeline</title>
<meta charset="utf-8"/>
<style>

body { height: 100%; padding: 0; margin: 0; }

#div1 {
       background: white;
       background-position:fixed;
       position:fixed;
       left:0px;
       width: 20%; height: 620px; float: left; 
       }
#div2 { 
       background: lightgrey;
       width: 50%; height: relative; position:absolute; 
       left:250px;
       }
#div3 { 
       background: white;
       position:fixed;
       right:0px;
       width: 200px; height: 620px; float: right; 
       }
/*#div4 { background: #444; }*/
</style>
<link rel="stylesheet" href="css3.css"/>
<link rel="stylesheet" href="css2.css"/>
</head>

<body style="background-color:lightgrey">

<div id="div1" >
  <nav>
 <center><img src="getimage.php" alt="profile image" width="175" height="175" style="border-radius:100%;"></center>
 <center><p style="font-size:20px"><?php echo $row['profile_name']; ?></p></center>
  <ul>
 <li> <button onclick="location.href='profile.php'" class="btn button_shadow">Profile</button></li>
<li>  <button onclick="location.href='https://docs.google.com/forms/d/1txGxQeV9jtyvbjrDY-tpIuWB6k96OdzvVdEEUol2tl8/edit'" class="btn button_shadow"> Enroll</button></li>
   <li> <button onclick="location.href='post.php'"class="btn button_shadow">Create Post</button></li>
   <li>  <button onclick="location.href='logout.php'" class="btn button_shadow">LOGOUT</button></li>
<li> <button onclick="location.href='aboutus.php'" class="btn button_shadow">About US</button></li>
 <li><button onclick="location.href='askus.php'" class="btn button_shadow">Ask US</button></li>
  </ul>
</nav>  
</div>
<div id="div2">
<p align="center">
</p>
<?php
  $user_check = $_SESSION['login_user'];
  $con=mysqli_connect("localhost","root","@Ammananna9@","project");
  $result = mysqli_query($con,"SELECT * from ttimeline join user on ttimeline.user_id = user.user_id ORDER BY date_of_upload DESC LIMIT 30;") or die ("ERROR:".mysql_error());
    while($row = mysqli_fetch_array($result)){
  echo  "<center><h3>".$row['profile_name'] . '</center></h3>';
  echo "<center><u><strong><font color=\"red\">Post:</font></u><br/><p>&nbsp &nbsp &nbsp &nbsp".$row['text'].'<br/></strong></p></center>';
    $number = $row ['post_id'];
    echo "<center><img src=\"get.php?id=".$number."\""."width = \"500\" height = \"400\" alt=\"iimage\"/></center>";

  }

mysqli_close($con);
 ?>
</div>
<div id="div3">
<h2> Advertisements</h2>

</div>
</body>

</html>
