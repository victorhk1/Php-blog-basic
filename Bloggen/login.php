<?php
//starta session, kom åt databas, sätt variabler
session_start();
require('connect.php');

$username = $_POST['loginname'];
$password = $_POST['loginpassword'];

// hämta alla kontona från databasen
$sql = $db->prepare("SELECT * FROM User WHERE UserName = :username");
$query = $sql->execute([":username"=>$username]);
$result =$sql->rowCount();
if ($result ==1){
	foreach ($sql as $row) {
		$name = $row['UserName'];
		$pass = $row['Password'];

		if (md5($password) == $pass){
			// om användarn har loggat in
			$_SESSION['isloggedin'] = true;
			header('Location: post.php');
			exit();
		} else {
			//om användarn skrivit fel lösenord
			echo "Fel inloggningsuppgifter " . "<a href='forwardsite.php'>tillbaka</a>";
		}
	}
}else{
	echo "Du har loggat in " . "<a href='forwardsite.php'>tillbaka</a>";
}


?>
