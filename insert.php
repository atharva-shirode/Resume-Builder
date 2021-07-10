<?php
session_start();

include_once 'config.php';
if(isset($_POST['save']))
{	 
	$username=$_SESSION['username'];
	 $name = $_POST['name'];
	 $contactno = $_POST['contactno'];
	 $addr = $_POST['addr'];
	 $ssc = $_POST['ssc'];
	 $hsc = $_POST['hsc'];
	 $deg = $_POST['deg'];
	 $skills = $_POST['skills'];
	 $por = $_POST['por'];
	 $exp = $_POST['exp'];
	 
	 $sql = "INSERT INTO information (username,name,contactno,addr,ssc,hsc,deg,skills,por,exp)
	 VALUES ('$username','$name','$contactno','$addr','$ssc','$hsc','$deg','$skills','$por','$exp') ";

	 if (mysqli_query($link, $sql)) {
		header("location: fetch.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($link);
	 }
	 mysqli_close($link);
}

if(isset($_POST['view']))
{
	header("location: fetch.php");
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>insert</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px; 
                background: url(reg.jpg) no-repeat center center fixed;
                background-size: cover;
               color: white;
            }
        .wrapper{ width: 350px; padding: 20px; }

        .center {
           margin: auto;
           margin-top: 10%;
          border: 1px solid #73AD21;
          padding: 10px;
			}

			input{
				padding: 8px;
				width: 300px;

			}
			.st{
				width: 70px;
			}
			label{
				color: white;
			}

			
    </style>
</head>
  <body>
  	<div class="wrapper center">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
		<label>Name:</label> <br>
		<input type="text" name="name">
		<br>
		<label>Contact NO:</label> <br>
		<input type="text" name="contactno">
		<br>
		<label>Address:</label> <br>
		<input type="text" name="addr">
		<br>
		<label><h3>Qualification Details</h3></label>
		<br>
		<label>SSC:</label> <br>
		<input type="text" name="ssc">
		<br>
		<label>HSC:</label> <br>
		<input type="text" name="hsc">
		<br>
		<label>Degree (CGPA):</label> <br>
		<input type="text" name="deg">
		<br>
		<label><h4>About You</h4></label>
		<br>
		<label>Skills:</label> <br>
		<input type="text" name="skills">
		<br>
		<label>Position of Resp:</label> <br>
		<input type="text" name="por">
		<br>
		 <label>Experience:</label> <br>
		<input type="text" name="exp">
		<br>
		<br>
		<input type="submit" name="save" value="submit" class="btn btn-primary  st">
		<input type="submit" name="view" value="view" class="btn btn-primary st">
	</form>

	</div>
  </body>
</html>