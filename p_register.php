<!Doctype html>
<html>
<head>
	<title>Register</title>
	<script type="text/javascript">
	function validate()
	{
		if(document.getElementById("ppass").value!=document.getElementById("cword").value)
		{
			alert("password not match");
			return false;
		}
		return true;
	}
	</script>
</head>
<body>
<form method="POST" action="p1.php">
Username:<input type="text" name="username" required>
Password:<input type="Password" id="ppass" name="pword" required>
Confirm Password:<input type="Password" id="cword">
<input type="submit" onclick="validate()" value="Register">

<a href="p2.php"><input type="submit" value="Login"></a>
</form>
</body>
</html>