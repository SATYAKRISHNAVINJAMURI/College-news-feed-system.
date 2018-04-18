<?php
	include 'session.php';
   $user_check = $_POST['user'];
  	$query = mysqli_query($db,"SELECT * FROM `user` WHERE `profile_name` LIKE '%{$user_check}%'");
   
   $row1 = mysqli_fetch_array($query) or die(mysql_error());
  	$user_id = $row1['user_id'];
  	$query = mysqli_query($db,"SELECT * FROM student WHERE student_id = '$user_id'") or die("Couldn't execute");
      
    $count = mysqli_num_rows($query);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      		$row = mysqli_fetch_array($query) or die(mysql_error());
      }
  	else{
  		$query = mysqli_query($db,"SELECT * FROM teacher WHERE lecturer_id = '$user_id'") or die("couldn't execute");
  		$row = mysqli_fetch_array($query) or die(mysql_error());
  	}
?>

<!DOCTYPE HTML>
	<HTML>
		<HEAD>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="css2.css"/>
			<title> profile </title>
			<style>
			img {
  	 			 border-radius: 100%;
			}
			</style>
		</HEAD>
		<body style="background-color:lightgrey">
			<center><form action ="search.php" method="POST">
				<input type="name" name = "user" placeholder="serch by profile name"/>
			</form></center>
			<h2><u>PROFILE DETAILS:</u><h2/>
				<?php
			echo "<img style=\"border-radius:100%;\"  src=\"getpic.php?id=".$user_id."\""."width = \"175\" height = \"200\" alt=\"image\"/><br/>";
			?>
			<strong><font color="red">Profile Name:</font>&nbsp &nbsp <font style="text-transform: uppercase;" > <?php echo $row1['profile_name'] ?></font><br/>
				 <font color="red">User Name:</font>&nbsp &nbsp <?php echo $row1['user_name'] ?>
			</strong>
			<hr/>
			<h2><u>ABOUT YOU:</u><h2/>
			<strong>
			<font color="red">Name:</font>&nbsp &nbsp<font style="text-transform: uppercase;" >  <?php echo $row['first_name'].$row['last_name'] ?></font><br/>
			<font style="text-transform: uppercase;" color="red">id:</font>&nbsp &nbsp<font style="text-transform: uppercase;" > <?php echo $row1['user_id'] ?></font><br/>
			<font color="red">Date Of Birth:</font>&nbsp &nbsp <?php echo $row['dob'] ?><br/>
			<font color="red">Mobile:</font> &nbsp &nbsp<?php echo $row['mobile'] ?><br/>
			<font color="red">Email:</font> &nbsp &nbsp<font style="text-transform: lowercase;" ><?php echo $row['email'] ?></font><br/>
			<font color="red">Blood Group:</font> &nbsp &nbsp<?php echo $row['blood_group'] ?><br/>
			<?php
			if($count == 1){
			echo '<font color="red">Year:</font> &nbsp &nbsp'.$row['year'].'<br/>';
			echo '<font color="red">Stream:</font> &nbsp &nbsp'.$row['STREAM'].'<br/>';
			echo '<font color="red">Guardian Name:</font> &nbsp &nbsp'.$row['guardian_name'].'<br/>';
			echo '<font color="red">Enrolled Subjects:</font> &nbsp &nbsp'.$row['enrolled subject'].'<br/>';
			}
			else{
			echo '<font color="red">Stream:</font> &nbsp &nbsp'.$row['blood_group'].'<br/>';
			echo '<font color="red">Department Name:</font> &nbsp &nbsp'.$row['dept_name'].'<br/>';
			echo '<font color="red">Designation:</font> &nbsp &nbsp'.$row['designation'].'<br/>';
			}
			echo '<font color="red">Address:</font> &nbsp &nbsp'.$row['address'].'<br/>';
			?>
			


			</strong>
			<center><dev>
 			&nbsp &nbsp<button class="button button_shadow"  onclick="location.href='profile.php'" >Back</button>
 		</dev> </center>
 

		</body>
	</HTML>

