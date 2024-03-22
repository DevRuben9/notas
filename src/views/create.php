<?php 

use Ruben\Notas\models\Note;

if(count($_POST) > 0){
	$title = isset($_POST['title']) ?? '';
	$content = isset($_POST['content']) ?? '';
	$note = new Note($title, $content);
	$note->save();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create new note</title>
	<link rel="stylesheet" href="src/views/resources/main.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
	<?php require 'resources/navbar.php'; ?>
	<div class="container">
		<h1>Crear Notas</h1>
		<form action="?view=create" method="POST">
			<div class="formText1">
				<label for="">Titulo</label>
				<input type="text" name="title" placeholder="Title ...">
			</div>
			<div class="formText2">
				<label for="">Mensaje</label>
				<textarea name="content" id="" cols="30" rows="10"></textarea>
			</div>
			<button type="submit">Create Note</button>
		</form>
	</div>
</body>
</html>