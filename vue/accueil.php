<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualités</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
</head>
<body>
	<?php require_once 'inc/entete.php'; ?>
	<div id="contenu">
		<?php if (!empty($articles)): ?>
			<?php foreach ($articles as $article): ?>
				<div class="article">
					<h1 ><a class="article_title" href="index.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a></h1>
					<p><?= substr($article->contenu, 0, 300) . '...' ?></p>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<div class="message">Aucun article trouvé !</div>
		<?php endif ?>
	</div>
	<?php 
		require_once 'inc/menu.php'; 
	?>
</body>
</html>