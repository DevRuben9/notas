<?php 
use Ruben\Notas\models\Note;

if ($_POST) {
	// update note
	$title = isset($_POST['title']) ? $_POST['title'] : '';
	$content = isset($_POST['content']) ? $_POST['content'] : '';
	$uuid = $_POST['id'];
	
	$note = Note::get($uuid);
	$note->setTitle($title);
	$note->setContent($content);

	$note->update();

}else if (isset($_GET['id'])) {
	$note = Note::get($_GET['id']);
} else {
	header('Location: http://localhost/portafolio%20php/Notas/?view=home');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>view</title>
	<link rel="stylesheet" href="src/views/resources/main.css"/>
</head>
<body>
	<?php require 'resources/navbar.php'; ?>
	<div class="container">
		<h3>view</h3>
		<form action="?view=view&id=<?= $note->getUUID(); ?>" method="POST">
			<div class="formText1">
				<label for="">Titulo</label>
				<input type="text" name="title" placeholder="Title ..." value="<?= $note->getTitle(); ?>">
			</div>
			<input type="hidden" name="id" value="<?= $note->getUUID(); ?>">
			<div class="formText1">
				<label for="">Mensaje</label>
				<textarea name="content" id="" cols="30" rows="10"><?= $note->getContent(); ?></textarea>
			</div>
			<button type="submit">Update Note</button>
		</form>
	</div>
</body>
</html>