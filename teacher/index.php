<html>
<head>
<title>teacher</title>
</head>
<body>
<div align="center" style="background-color:lightblue;">
<h1>MITS</h1>
</div>
<form action="" method="post" >
<div align="center" style="background-color:lightgrey;">
<h2>
<input type="submit" name="profile" value="Profile">
<input type="submit" name="mark" value="Mark">
<input type="submit" name="search" value="Search">

<a href="../">
Logout
</a>
</h1>
</div>
</form>
</body>
</html>
<br>
<br>
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
		$result = mysqli_query($conn, "SELECT * FROM teacher
		WHERE username IN ('$username') ");
		while ($row = mysqli_fetch_array($result))
			{
			echo "<h3>PROFILE</h3>";
			echo "<br>";
			echo "ID Number : ".$row['idno']."<br>"."Username  : ".$row['username']."<br>"."First Name : ".$row['firstname']."<br>"."Last Name : ".
			$row['lastname']."<br>"."Department : ".$row['dept']."<br>"."Join Date : ".$row['joindate']."<br>"."Qulification : ".$row['quali'];
			}
		}
	else if(isset($_POST['mark']))
		{
				echo "<h3>1st Internal</h3>";
			echo "<form action=\"\" method=\"post\" >";
			echo "Student id: <input type=\"text\" name=\"idno\" value=\"\"> <br> <br>&nbsp;";
		echo "Subject Id: <input type=\"text\" name=\"mida\" value=\"\">&nbsp;";
		echo "Mark: <input type=\"text\" name=\"marka\" value=\"\">&nbsp;";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form><br>";
		echo "<h3>2nd Internal</h3>";
			echo "<form action=\"\" method=\"post\" >";
			echo "Student id: <input type=\"text\" name=\"idno\" value=\"\"> <br><br>";
		echo "Subject Id: <input type=\"text\" name=\"midb\" value=\"\">&nbsp;";
		echo "Mark: <input type=\"text\" name=\"markb\" value=\"\">&nbsp;";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form><br>";
		echo "<h3>Attendence</h3>";
			echo "<form action=\"\" method=\"post\" >";
			echo "Student Id: <input type=\"text\" name=\"idno\" value=\"\"> &nbsp;";
		echo "Attendence: <input type=\"text\" name=\"atten\" value=\"\">&nbsp;";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form>";
		}	
	else if(isset($_POST['search']))
		{
		echo "<form action=\"\" method=\"post\" >";
		echo "Student id: <input type=\"text\" name=\"idnoa\" value=\"\">";
		echo "<input type=\"submit\" value=\"Search\">";
		echo  "</form>";	
		}
	else
		{
		if(isset($_POST['idnoa']))
			{
		$idno =$_POST['idnoa'];
		$result = mysqli_query($conn, "SELECT * FROM student
		WHERE idno =$idno ");
		while ($row = mysqli_fetch_array($result))
				{
			echo "<h3>STUDENT PROFILE</h3>";
			echo "<br>";
			echo "ID Number : ".$row['idno']."<br>"."Username  : ".$row['username']."<br>"."First Name : ".$row['firstname']."<br>"."Last Name : ".
			$row['lastname']."<br>"."Department : ".$row['dept']."<br>"."Semester : ".$row['sem']."<br>"."Address : ".$row['addr'];
				}
				echo "<h3>MARK</h3>";
			echo "<h4>1st Internal</h4>";
			$result = mysqli_query($conn, "SELECT * FROM inta
		WHERE idno=$idno");
		while ($row = mysqli_fetch_array($result))
			{
			echo "<br>";
			echo "Subject 1 : ".$row['m1']."<br>"."Subject 2 : ".$row['m2']."<br>"."Subject 3 : ".$row['m3']."<br>"."Subject 4 : ".$row['m4']."<br>"."Subject 5 : ".$row['m5']."<br>"."Subject 6 : ".$row['m6'];
			}
			$result = mysqli_query($conn, "SELECT * FROM intb
		WHERE idno=$idno");
		echo "<br>";
		echo "<br>";
		echo "<h4>2nd Internal</h4>";
		while ($row = mysqli_fetch_array($result))
			{
			echo "Subject 1 : ".$row['m1']."<br>"."Subject 2 : ".$row['m2']."<br>"."Subject 3 : ".$row['m3']."<br>"."Subject 4 : ".$row['m4']."<br>"."Subject 5 : ".$row['m5']."<br>"."Subject 6 : ".$row['m6'];
			}
			$result = mysqli_query($conn, "SELECT * FROM intf
		WHERE idno=$idno");
		echo "<br>";
		echo "<br>";
		echo "<h4>Final Internal</h4>";
		while ($row = mysqli_fetch_array($result))
			{
			echo "Subject 1 : ".$row['m1']."<br>"."Subject 2 : ".$row['m2']."<br>"."Subject 3 : ".$row['m3']."<br>"."Subject 4 : ".$row['m4']."<br>"."Subject 5 : ".$row['m5']."<br>"."Subject 6 : ".$row['m6']."<br>"."Lab 1 : ".$row['m7']."<br>"."Lab 2 : ".$row['m8'];
			}
			}
			
			else if(isset($_POST['mida']))
			{
				$mid=$_POST['mida'];
				$mark=$_POST['marka'];
				$idno=$_POST['idno'];
				$result = mysqli_query($conn, "SELECT * FROM inta
		WHERE idno=$idno");
			while ($row = mysqli_fetch_array($result))
			{
				mysqli_query($conn, "update inta set $mid=$mark where idno=$idno");
			}
			if (empty($result))
			{
			mysqli_query($conn, "insert into inta(idno,$mid) values('$idno','$mark')");
			}
			echo "Completed";
			}
			else if(isset($_POST['midb']))
			{
				$mid=$_POST['midb'];
				$mark=$_POST['markb'];
				$idno=$_POST['idno'];
				$result = mysqli_query($conn, "SELECT * FROM intb
		WHERE idno=$idno");
			while ($row = mysqli_fetch_array($result))
			{
				mysqli_query($conn, "update intb set $mid=$mark where idno=$idno");
			}
			if (empty($result))
			{
			mysqli_query($conn, "insert into intb(idno,$mid) values('$idno','$mark')");
			}
						echo "Completed";

			}
			else if(isset($_POST['atten']))
			{
				$atten=$_POST['atten'];
				$idno=$_POST['idno'];
				$result = mysqli_query($conn, "SELECT * FROM atten
		WHERE idno=$idno");
		while ($row = mysqli_fetch_array($result))
			{
				mysqli_query($conn, "update atten set atten=$atten where idno=$idno");
			}
			echo "Completed";
			}
				else
				{
		$result = mysqli_query($conn, "SELECT * FROM teacher
		WHERE username IN ('$username') ");
		while ($row = mysqli_fetch_array($result))
			{
			echo "<h3>PROFILE</h3>";
			echo "<br>";
			echo "ID Number : ".$row['idno']."<br>"."Username  : ".$row['username']."<br>"."First Name : ".$row['firstname']."<br>"."Last Name : ".
			$row['lastname']."<br>"."Department : ".$row['dept']."<br>"."Join Date : ".$row['joindate']."<br>"."Qulification : ".$row['quali'];
			}
			$result = mysqli_query($conn, "SELECT * FROM event");
			echo "<h3>Events</h3>";
		while ($row = mysqli_fetch_array($result))
		{
			echo "Event Name :"."&nbsp;&nbsp;".$row['ename']."&nbsp;&nbsp;&nbsp;&nbsp;"."Event date :"."&nbsp;&nbsp;".$row['edate']."<br>";
		}
			
				}
		}
mysqli_close($conn);	
?>
</div>