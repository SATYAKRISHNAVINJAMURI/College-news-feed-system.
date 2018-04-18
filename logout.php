<?php
   session_start();
   
   if(session_destroy()) {
       echo "<script language =\"JavaScript\">\n";
        echo "window.location ='loginpage.html'\n";
        echo "alert('Successfully logged out!');\n";
        echo "</script>";
   }
?>