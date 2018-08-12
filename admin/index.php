<html>
<head>
<title>admin</title>
</head>
<body>
<div align="center" style="background-color:lightblue;">
<h1>MITS</h1>
</div>
<form action="" method="post" >
<div align="center" style="background-color:lightgrey;">
<h2>
<input type="submit" name="tchr" value="Teacher">
<input type="submit" name="stu" value="Student">
<input type="submit" name="eve" value="Events">

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
<div align="center">
<?php
	session_start();
	$conn = new mysqli("localhost", "user", "user","db");
	if ($conn->connect_error) {
    die("Connection failed");
	} 
	$username = $_SESSION['username']; 
	
	if(isset($_POST['tchr']))
		{
					echo "<h3>Add Teacher</h3>";
		echo "<form action=\"\" method=\"post\" >";
		echo "User Name: <input type=\"text\" name=\"uname\" value=\"\">&nbsp;";
		echo "First Name: <input type=\"text\" name=\"fname\" value=\"\">&nbsp;<br><br>";
		echo "Last Name: <input type=\"text\" name=\"lname\" value=\"\">&nbsp;";
		echo "Department: <input type=\"text\" name=\"dept\" value=\"\">&nbsp;<br><br>";
		echo "ID No: <input type=\"text\" name=\"idno\" value=\"\">&nbsp;";
		echo "Qulification: <input type=\"text\" name=\"quli\" value=\"\">&nbsp;<br><br>";
		echo "Postition: <input type=\"text\" name=\"pos\" value=\"\">&nbsp;";
		echo "Join Date: <input type=\"text\" name=\"jdate\" value=\"\">&nbsp;<br><br>";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form>";
			echo "<br><h3>Remove Teacher</h3>";
			echo "<form action=\"\" method=\"post\" >";
		echo "Teacher ID: <input type=\"text\" name=\"idno\" value=\"\">&nbsp;";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form>";
		
		}
	else if(isset($_POST['stu']))
		{
					echo "<h3>Add Student</h3>";
		echo "<form action=\"\" method=\"post\" >";
		echo "User Name: <input type=\"text\" name=\"uname\" value=\"\">&nbsp;";
		echo "First Name: <input type=\"text\" name=\"fname\" value=\"\">&nbsp;<br><br>";
		echo "Last Name: <input type=\"text\" name=\"lname\" value=\"\">&nbsp;";
		echo "Department: <input type=\"text\" name=\"dept\" value=\"\">&nbsp;<br><br>";
		echo "ID No: <input type=\"text\" name=\"idno\" value=\"\">&nbsp;";
		echo "Sem: <input type=\"text\" name=\"sem\" value=\"\">&nbsp;<br><br>";
		echo "Address: <input type=\"text\" name=\"addr\" value=\"\">&nbsp;";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form>";
			echo "<br><h3>Remove Student</h3>";
			echo "<form action=\"\" method=\"post\" >";
		echo "Student ID: <input type=\"text\" name=\"idno\" value=\"\">&nbsp;";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form>";
		
		}	
	else if(isset($_POST['eve']))
		{
			echo "<h3>Add Event</h3>";
		echo "<form action=\"\" method=\"post\" >";
		echo "Event ID: <input type=\"text\" name=\"eid\" value=\"\">&nbsp;";
		echo "Event Name: <input type=\"text\" name=\"ename\" value=\"\">&nbsp;";
		echo "Event Date: <input type=\"text\" name=\"edate\" value=\"\">&nbsp;";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form>";
			echo "<br><h3>Remove Event</h3>";
			echo "<form action=\"\" method=\"post\" >";
		echo "Event ID: <input type=\"text\" name=\"eid\" value=\"\">&nbsp;";
		echo "<input type=\"submit\" value=\"Submit\">";
		echo  "</form>";
			
		}
		
?>
</div>
