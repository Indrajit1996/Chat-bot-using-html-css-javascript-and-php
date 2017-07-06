<html>
<head>
	<title> Student Information </title>
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
	table {position:absolute;
		top:30%;
		left:40%;
		border-color:#ad953e;
		color:#ad953e;
	}
	thead {
		font-weight:bolder;
		border-color:#ad953e;
		color:#ad953e;
	}
	</style>
</head>
<body>
	<center><a href='home.html'>ABC INTERNATIONAL SCHOOL</a></center>
	<table border=1>
	<?php
		define('DB_NAME','studentinfo');
		define('DB_USER','root');
		define('DB_PASSWORD','');
		define('DB_HOST','localhost');
	
		$val = 0;
// Create connection
		$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
/*$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */
		$r = "SELECT * FROM list";
		$sql = mysqli_query($con,$r);
		while($row = mysqli_fetch_array($sql))
		{
			if($row['F_name'] == $_POST['fname']&&$row['L_name'] == $_POST['lname'])
			{
				if($val == 0)
				{
					echo("<tr>"."<td>"."ID"."</td>".
						"<td>"."First Name"."</td>".
						"<td>"."Last Name"."</td>".
						"<td>"."Blood Type"."</td>".
						"<td>"."Date of Birth"."</td>".
						"<td>"."Age"."</td>".
						"<td>"."Grade"."</td>"."</tr>");
					echo("<tr>"."<td>".$row['Id']."</td>");
					echo("<td>".$row['F_name']."</td>");
					echo("<td>".$row['L_name']."</td>");
					echo("<td>".$row['Blood_Type']."</td>");
					echo("<td>".$row['Dob']."</td>");
					echo("<td>".$row['Age']."</td>");
					echo("<td>".$row['Grade']."</td>"."</tr>");
					$val = 1;
				}
				else
				{
					echo("<tr>"."<td>".$row['Id']."</td>");
					echo("<td>".$row['F_name']."</td>");
					echo("<td>".$row['L_name']."</td>");
					echo("<td>".$row['Blood_Type']."</td>");
					echo("<td>".$row['Dob']."</td>");
					echo("<td>".$row['Age']."</td>");
					echo("<td>".$row['Grade']."</td>"."</tr>");
					$val = 1;
				}
			}
		}
		echo("</table>");
		if($val == 0)
		{
			echo("<p> Record Not found! </p>");
		}
		
		
		
		
		mysqli_close($con);
?>
	<button onclick="location.href='find.php';" class='buttn'>Find Another Student</button>
</body>
</html>


