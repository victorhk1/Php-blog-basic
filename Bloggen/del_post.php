<?php
// Starta session, kom åt data bas
// Används för att ta bort inlägg
  session_start();
  require('connect.php');
    // SQL ta bort i databas
    $sql = "DELETE FROM Blogpost WHERE BlogPost_id=12";
    // Använd exec , inget återvänder
    $db->exec($sql);
    echo "Record deleted successfully";
$conn = null;



?>
