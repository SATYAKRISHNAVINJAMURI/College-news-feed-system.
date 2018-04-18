<?php
include('session.php');
  $user_check = $_SESSION['login_user'];
  $db=mysqli_connect("localhost","root","@Ammananna9@","project");
  $newpwd = $_POST['newpwd'];
   $pwd = $_POST['pwd'];
   $renewpwd = $_POST['renewpwd'];
   $uname = $_POST['uname'];
  $pname = $_POST['pname'];
    $query = mysqli_query($db,"SELECT password FROM user WHERE user_name = '$user_check'");
     $row1 = mysqli_fetch_array($query) or die(mysql_error());
  		if($pwd == $row['password']){
          
          if($newpwd == "" && $renewpwd ==""&& $uname ==""&&$pname==""){
               echo "<script language =\"JavaScript\">\n";
               echo "alert('Enter changes');\n";
              echo "window.location ='editprofile.html'";
              echo "</script>";
          }
          else{
            if($newpwd!="" && $renewpwd !=""){
              if($newpwd == $renewpwd){
                     mysqli_query($db,"UPDATE user SET password = '$newpwd' WHERE user_name = '$user_check'") or die("couldn't updat");
                       echo "<script language =\"JavaScript\">\n";
               echo "alert('Successfully changed password');\n";
              echo "window.location ='editprofile.html'";
              echo "</script>";
               }
            else{
              echo "<script language =\"JavaScript\">\n";
               echo "alert('Password doesn't match');\n";
              echo "window.location ='editprofile.html'";
              echo "</script>";
            }
          }
          if($pname != ""){
                mysqli_query($db,"UPDATE user SET profile_name = '$pname' WHERE user_name = '$user_check'") or die("couldn't update");
                       echo "<script language =\"JavaScript\">\n";
               echo "alert('Successfully changed Profile name');\n";
              echo "window.location ='editprofile.html'";
              echo "</script>";
          }
          if($uname != ""){
               mysqli_query($db,"UPDATE user SET user_name = '$uname' WHERE user_name = '$user_check'") or die("couldn't updat");
                       echo "<script language =\"JavaScript\">\n";
               echo "alert('Successfully changed User name');\n";
              echo "window.location ='editprofile.html'";
              echo "</script>";
                    header("location:logout.php");
          }
          
              
          }


      }
  		else{
  			echo "<script language =\"JavaScript\">\n";
        echo "alert('Wrong Password');\n";
        echo "window.location ='editprofile.html'";
        echo "</script>";
  		}
mysqli_close($db);
 ?>