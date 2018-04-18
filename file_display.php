<?php
 include "file_constants.php";
 // just so we know it is broken
 error_reporting(E_ALL);
     //connect to the db
     $link = mysql_connect("$host", "$user", "$pass")
     or die("Could not connect: " . mysql_error());

     // select our database
     mysql_select_db("$db") or die(mysql_error());

     // get the image from the db
     $sql = "SELECT photo FROM ttimeline;";

     // the result of the query
     echo $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());

     // set the header for the image
     header("Content-type: image/jpg");
     echo mysql_result($result, 0);

     // close the db link
     mysql_close($link);
?>