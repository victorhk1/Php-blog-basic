<?php
// Skapad av Victor Haji Karimian NGWEK16h
// Anslut till databasen
try {
	$db = new PDO('mysql:host=localhost;dbname=s161348', 's161348', '8b89f239');
} catch (PDOException $e) {
	echo $e->getMessage() . '<br>';
}
?>
