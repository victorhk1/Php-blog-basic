<?php
//Starta session, först den, skicka till index.php
session_start();
session_destroy();
header('Location: index.php');
exit();

?>
