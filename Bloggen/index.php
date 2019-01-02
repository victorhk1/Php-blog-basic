<?php
   // Starta session, kom åt loginfil till databas, sätter variabler för inlog
      session_start();
      require('connect.php');
      $link_loggedin = 'post.php';
      $link_notloggedin = 'forwardsite.php';
      $link_logout ='logout.php';
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Blog</title>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css" />
   </head>
   <body>
      <!-- Första delen av webbplatsen - headern -->
      <div class="header">
         <h2>Victors Blogg</h2>
      </div>
      <?php
         // Kollar om personen är inloggad eller inte, tillåter person att posta mer eller inte
         if (isset($_SESSION['isloggedin'])) {
            echo "<a href='".$link_loggedin."'>Posta mer</a> <br>";
            echo "<a href='".$link_logout."'>Logout</a> <br>";
            } else {
                  echo "<a href='".$link_notloggedin."'>Logga in dig</a>";
            }
         
         ?>
      <?php
         // Skriver ut innehållet från blogg
         $sql = $db->prepare("SELECT * FROM Blogpost ORDER BY BlogPost_id");
         $query = $sql->execute();
         foreach ($sql as $row) {
            $id = $row['BlogPost_id'];
            $title = $row['Title'];
            $content = $row['Content'];
            $create_date = $row['Create_Date'];
         
         ?>
      <?php
         //Skriver ut innehållet från blog och sätter in det i div:tagsen
            echo '<div class ="row">';
            echo '<div class ="leftcolumn">';
            echo '<div class ="card">';
            echo "<h1>{$title}</h1><br>";
           echo "<p>{$content}</p><br>";
            //Array som skrivet ut datum, postnummer - gjord för att ha med array
            $post_information = array("$create_date", "$id");
            echo "Datum: " . $post_information[0] . "<br>". "Blogginlägg nummer: " . $post_information[1];
            echo '</div>';
            echo '</div>';
            echo '</div>';
               }
         ?>
      <!-- Footern på webbplatsen -->
      <div class="footer">
         <h2>Victors Blogg</h2>
         <p> Att notera vissa inlägg tog borts med del_post filen, därför börjar inläggen inte från nr 1.</p>
         <p> Det senaste bloginlägget som skrevs var nr 37. Nästa kommer då bli nr 38.</p>
      </div>
   </body>
</html>
