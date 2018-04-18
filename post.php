

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css1.css"/>
 	<link rel ="stylesheet" href ="css3.css"/>
 	<style>
 	textarea{
 		    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
 	}
 	.btn1{
 		width:30%;
 	}
 	</style>
</head>
<body style="background-color:lightgrey">
<h3>Please Choose a File and click Submit</h3>

<form enctype="multipart/form-data" action=
"file_insert.php" method="post">
<h3>What is in your mind:</h3><br/>
<textarea name="message"  rows="10" cols="50"></textarea><br/>
<h3>Upload a photo:</h3><br/>
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<input name="userfile" type="file" /><br/>
<center><button type="submit"  class="btn1 btn button_shadow"> submit</button></center>
</form>
</head>
</body>
</html>


