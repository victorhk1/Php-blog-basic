<?php
//Kom åt databasen, starta session, sätt rätt tidzon
	session_start();
	require('connect.php');
	date_default_timezone_set('Europe/Stockholm');
//kollar ifall användaren är inloggad
	if (!isset($_SESSION['isloggedin'])){
		if ($_SESSION['isloggedin'] !=true){
		header('Location: post.php');
		exit();
		}
		header('Location: post.php');
		exit();
	}
?>

<?php

		// Kolla om användaren tryckt på post knappen
		if (isset($_POST['post'])) {
			// Lagra från input, title, content, date kolla om session är där
			$title = $_POST['title'];
			$content = $_POST['content'];
			$create_date = date('Y-m-d H:i:s');
			$user_id =$_SESSION ['isloggedin'];

			// När allting har verifierats, skicka in inlägget till databasen
				$sql = "INSERT INTO Blogpost (Title,Content, Create_Date, User_id) VALUES (:title, :content, :date, :user_id)";
				$query = $db->prepare($sql);
				$result = $query->execute([
				  ":title" => $title,
				  ":content" => $content,
               ":date" => $create_date,
				  ":user_id" => $user_id,
						]
					);
			}
	?>


<!DOCTYPE html>

<html>
<head>
<title>Blog Post</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />

</head>

<body>

<!--- Add blog post --->
<h1>Skriv ett nytt inlägg</h1>
<form action="post.php" method="post" enctype="multipart/form-data">
 <input placeholder="Title" name="title" type ="text" autofocus size="50"><br /><br />
 <textarea placeholder="Context" name="content" rows="30" cols="70"></textarea></br />
 <input name= "post" type ="submit" value= "Post"></form>
 <br>

 <a href='index.php' target='_blank'>Tillbaka till framsidan för att se ditt inlägg</a> <br><br>
 <a href='logout.php' target='_blank'>Logga ut</a> <br>


</body>
</html>



