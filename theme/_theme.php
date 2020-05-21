<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= url("/theme/style.css")  ?>">
</head>
<body>

	<nav class="main_nav">
		<?php 
			if ($v->section("sidebar")):
				echo $v->section("sidebar");
			else:
		?>
			<a title="" href="<?php echo url(); ?>">Home</a>
			<a title="" href="<?php echo url('contato'); ?>">Contato</a>
			<a title="" href="<?php echo url('teste'); ?>">Teste</a>
		<?php
			endif;
		?>
	</nav>

	<main class="main_content">
		<?=$v->section('content')?>
	</main>

	<footer class="main_footer">
		<?= SITE; ?> -  Todos os direitos reservados
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<?= $v->section("scripts") ?>

</body>
</html>

