<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>

<!-- Här skrivs uppgifter in i en form -->
<h1>REGISTERFORM</h1>
<form action="register.php" method="POST">
<table>
  <tr>
    <td>username</td>
    <td><input type="text" name="registername"></td>
  </tr>
  <tr>
    <td>password</td>
    <td><input type="password" name="registerpassword"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="registersubmit" value="register"></td>
  </tr>
</table>
</form>

<!-- Här skrivs uppgifter in i en form -->
<h1>Loginform</h1>
<form action="login.php" method="POST">
<table>
	<tr>
		<td>username</td>
		<td><input type="text" name="loginname"></td>
	</tr>
	<tr>
		<td>password</td>
		<td><input type="password" name="loginpassword"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="loginsubmit" value="login"></td>
	</tr>

</table>
</form>

<!-- Text -->
<p> Att notera: Ett användarkonto har skapats där ingenting är i fyllt
		i varken Username - Password.
	 	Eftersom jag inte har gjort en funktion för att ta bort användare.
 		Finns det kvar.
</p>

</body>
</html>
