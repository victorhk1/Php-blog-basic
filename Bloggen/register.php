<?php
// Kom åt databas, sätter variabler
require('connect.php');
$username = $_POST['registername'];
$password = $_POST['registerpassword'];
$cryptedpassword = md5($password);

// Skicka in username/password/ip/datum till databasen

$sql = $db->prepare("INSERT INTO User (UserName, Password) VALUES (:username, :password)");
$query = $sql->execute(array(
	":username"=>$username,
	":password"=>$cryptedpassword
));

// Redirect:a användaren till nån skitsida efter att de loggat in
header('Location: forwardsite.php');
exit();

?>
