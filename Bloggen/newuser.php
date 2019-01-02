<html>
<head></head>
<body>
<?
$servername = "localhost";
$username = "s161348";
$password = "8b89f239";
$dbname = "s161348";

$newusername = "admin";
$newuserpassword = "adminpassword";

try {
	$db = new PDO('mysql:host=localhost;dbname=s161348', 's161348', '8b89f239');
} catch (PDOException $e) {
	echo $e->getMessage() . '<br>';
}

	$sql =
	"INSERT INTO User (UserName, Password)
	VALUES ('".$newusername."', '".$newuserpassword."')";

	$conn->exec($sql);
	echo "New user created successfully";
}

catch(PDOException $e){
echo "Exception: " . $e->getMessage();
    }

?>
</body>
</html>


