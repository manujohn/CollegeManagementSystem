<html>
<head>
<title>student</title>
</head>
<body>
<div align="center" style="background-color:lightblue;">
<h1>MITS</h1>
</div>
<form action="" method="post">
<div align="center" style="background-color:lightgrey;">
<h2>
<input type="submit" name="profile" value="Profile">
<input type="submit" name="mark" value="Mark">
<input type="submit" name="advisor" value="Advisor">

<a href="../">
Logout
</a>
</h2>
</div>
</form>
</body>
</html>
<br>
<br>
<br>
<div align="center">
<?php
	session_start();
	$conn = new mysqli("localhost", "user", "user","db");
	if ($conn->connect_error) {
    die("Connection failed");
	} 
	$username = $_SESSION['username']; 
	
	if(isset($_POST['profile']))
		{
		$result = mysqli_query($conn, "SELECT * FROM student
		WHERE username IN ('$username') ");
		while ($row = mysqli_fetch_array($result))
			{
			echo "<h3>PROFILE</h3>";
			echo "<br>";
			echo "ID Number : ".$row['idno']."<br>"."Username  : ".$row['username']."<br>"."First Name : ".$row['firstname']."<br>"."Last Name : ".
			$row['lastname']."<br>"."Department : ".$row['dept']."<br>"."Semester : ".$row['sem']."<br>"."Address : ".$row['addr'];
			}
			$result = mysqli_query($conn, "SELECT * FROM atten
		WHERE username IN ('$username') ");
			while ($row = mysqli_fetch_array($result))
			{
			echo "<br>Attendence : ".$row['atten'];
			}
		}
	else if(isset($_POST['mark']))
		{
			echo "<h3>MARK</h3>";
			echo "<h4>1st Internal</h4>";
			$result = mysqli_query($conn, "SELECT * FROM inta
		WHERE username IN ('$username')");
		while ($row = mysqli_fetch_array($result))
			{
			echo "<br>";
			echo "Subject 1 : ".$row['m1']."<br>"."Subject 2 : ".$row['m2']."<br>"."Subject 3 : ".$row['m3']."<br>"."Subject 4 : ".$row['m4']."<br>"."Subject 5 : ".$row['m5']."<br>"."Subject 6 : ".$row['m6'];
			}
			$result = mysqli_query($conn, "SELECT * FROM intb
		WHERE username IN ('$username')");
		echo "<br>";
		echo "<br>";
		echo "<h4>2nd Internal</h4>";
		while ($row = mysqli_fetch_array($result))
			{
			echo "Subject 1 : ".$row['m1']."<br>"."Subject 2 : ".$row['m2']."<br>"."Subject 3 : ".$row['m3']."<br>"."Subject 4 : ".$row['m4']."<br>"."Subject 5 : ".$row['m5']."<br>"."Subject 6 : ".$row['m6'];
			}
			$result = mysqli_query($conn, "SELECT * FROM intf
		WHERE username IN ('$username')");
		echo "<br>";
		echo "<br>";
		echo "<h4>Final Internal</h4>";
		while ($row = mysqli_fetch_array($result))
			{
			echo "Subject 1 : ".$row['m1']."<br>"."Subject 2 : ".$row['m2']."<br>"."Subject 3 : ".$row['m3']."<br>"."Subject 4 : ".$row['m4']."<br>"."Subject 5 : ".$row['m5']."<br>"."Subject 6 : ".$row['m6']."<br>"."Lab 1 : ".$row['m7']."<br>"."Lab 2 : ".$row['m8'];
			}
		}	
	else if(isset($_POST['advisor']))
		{
		$sem =$_SESSION['sem'];
		$dept=$_SESSION['dept'];
		$result = mysqli_query($conn, "SELECT * FROM advisor
		WHERE sem IN ('$sem') AND dept IN ('$dept') ");
		while ($row = mysqli_fetch_array($result))
			{
			echo "<h3>ADVISOR</h3>";
			echo "<br>";
			$tusername=$row['username'];
			echo "ID Number : ".$row['idno']."<br>"."Phone Number : ".$row['phoneno'];
			echo "<br>";
			$resul = mysqli_query($conn, "SELECT * FROM teacher
			WHERE username IN ('$tusername') ");
			while ($ro = mysqli_fetch_array($resul))
				{
				echo "First Name : ".$ro['firstname']."<br>"."Last Name : ".
				$ro['lastname']."<br>"."Department : ".$ro['dept'];
				}
			}
		}	
	else
		{
		$result = mysqli_query($conn, "SELECT * FROM student
		WHERE username IN ('$username') ");
		while ($row = mysqli_fetch_array($result))
			{
			$_SESSION['dept']=$row['dept'];
			$_SESSION['sem']=$row['sem'];
			echo "<h3>PROFILE</h3>";
			echo "<br>";
			echo "ID Number : ".$row['idno']."<br>"."Username  : ".$row['username']."<br>"."First Name : ".$row['firstname']."<br>"."Last Name : ".
			$row['lastname']."<br>"."Department : ".$row['dept']."<br>"."Semester : ".$row['sem']."<br>"."Address : ".$row['addr'];
			}
			$result = mysqli_query($conn, "SELECT * FROM atten
		WHERE username IN ('$username') ");
			while ($row = mysqli_fetch_array($result))
			{
			echo "<br>Attendence : ".$row['atten'];
			}
			$result = mysqli_query($conn, "SELECT * FROM event");
			echo "<h3>Events</h3>";
		while ($row = mysqli_fetch_array($result))
		{
			echo "Event Name :"."&nbsp;&nbsp;".$row['ename']."&nbsp;&nbsp;&nbsp;&nbsp;"."Event date :"."&nbsp;&nbsp;".$row['edate']."<br>";
		}
		}
mysqli_close($conn);	

?>
</div>
