<html>
<head>
<title>login</title>
</head>
<body>
<div align="center" style="background-color:lightblue;">
<h1>MITS</h1>
</div>
<div align="center" style="background-color:lightgrey;">
<h1>Login</h1>
</div>
<br>
<form action="verify.php" method="post" >
<div align="center" >
Username: <input type="text" name="username" value=""><br>
<br>
Password: <input type="password" name="password" value=""><br>
<br>
<input type="submit" value="Login">
<?php 
if(isset($_GET['error']))
{
echo $_GET['error'];
} 
?>
</div>
</form>
</body>
</html>