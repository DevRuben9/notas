<?php
use Ruben\Notas\models\Note;

$notes = Note::getAll();

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home</title>
	<link rel="stylesheet" href="src/views/resources/main.css"/>
</head>
<body>

	<?php require 'resources/navbar.php'; ?>
	
	<div class="container">
		<h1>Home</h1>
		<div class="messageContainer">
			<div class="messages">
			<?php foreach ($notes as $note) { ?>
				<a href="?view=view&id=<?php echo $note->getUUID(); ?>">
					<div class="notePreview">
						<div class="title"><?php echo $note->getTitle(); ?></div>
					</div>
				</a>
			<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>