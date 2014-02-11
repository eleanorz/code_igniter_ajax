<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<h1>My Posts</h1>

	Add a note:
	<form action="posts/create" method="post">
		<input type="hidden" name="action" value="add_note">
		<textarea name="text" id="" cols="20" rows="5" placeholder="What are you thinking?"></textarea>
		<input type="submit" value="update status">		
	</form>

	<?php 
		if (isset($notes))
		{
			foreach ($notes as $note)
			{
				echo "<div id='note'>";
				echo $note['created_at'];
				echo $note['message'];
				echo "</div>";
			};
		}
	?>
</body>
</html>