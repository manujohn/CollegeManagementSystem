<?php
$conn = new mysqli("localhost", "user", "user","db");
if ($conn->connect_error) {
    die("Connection failed");
} 
$username = $_POST['username']; 
$password = $_POST['password'];
$result = mysqli_query($conn, "SELECT * FROM profile
    WHERE username IN ('$username') AND password IN ('$password')");

while ($row = mysqli_fetch_array($result))
{
	session_start();
	
    $_SESSION['idno'] = $row['idno']; 
    $_SESSION['username'] = $row['username'];
    $_SESSION['pos'] = $row['pos'];

if($_SESSION['pos'] == 'admin')
{
	header("Location: admin/");

}
else if($_SESSION['pos'] == 'tchr')
{
	header("Location: teacher/");

}
else
{
	header("Location: student/");

}
mysqli_close($conn);
exit;
}
$error="Invalid login!";
header("Location: index.php?error=".$error);
mysqli_close($conn);
exit;
?>