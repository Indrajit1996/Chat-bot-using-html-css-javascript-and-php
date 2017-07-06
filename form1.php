<html>
<head>
	<title>Confirmation</title>
	<style type="text/css">
    a {font-size: 120px;
        font-weight: bolder;
        font-style: normal;
        color:#ad953e}
	body {background-color: black}
	p {position:absolute;
		top:40%;
		left:35%;
		font-weight: bold;
        color : #ad953e;
		font-size:50px;

	}
	.buttn {position:absolute;
	top:60%;
	left:43.5%;
	background-color: #ad953e;
    border: none;
    color: black;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 9px 5px;
    cursor: pointer;
    font-weight: bolder}
	.buttn:hover {
              background-color: #1793d6; /* Green */
              color: white;
          }
	</style>
</head>
<body>
	<center><a href='home.html'>ABC INTERNATIONAL SCHOOL</a></center>
	<div>
		<center><p>RECORD HAS BEEN ADDED</p></center>
	</div>
	<center><button onclick="location.href='home.html';" class='buttn'>Return To Homepage</button></center>
	

</body>
</html>






















<?php
		define('DB_NAME','studentinfo');
		define('DB_USER','root');
		define('DB_PASSWORD','');
		define('DB_HOST','localhost');
	


// Create connection
		$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
/*$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */
		
		
		$Fname = $_POST['FName'];
		$Lname = $_POST['LName'];
		$Btype = $_POST['btype'];
		$dob = $_POST['dob'];
		$age = $_POST['Age'];
		$grade = $_POST['grade'];
		
		$sql = "INSERT INTO list (F_name,L_name,Blood_Type,Dob,Age,Grade) VALUES ('$Fname','$Lname','$Btype','$dob','$age','$grade')";
		$r = mysqli_query($con,$sql);
		/*if($r)
		{
		echo("SUCCESS");
		}
		else
		{
			echo(mysqli_error($con));
		}*/
		
		
		mysqli_close($con);
?>

