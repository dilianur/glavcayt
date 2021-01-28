<!DOCTYPE html>
<html lang="ru">
<head>
	<?php $website_title = "PHP блог"; 
	require 'phpinclude/head.php';
	?>
	
</head>
<body>
	
	<?php require 'phpinclude/header.php'; ?>
	<main class="container mt-5">
		<div class="row">
			<div class="col-md-8 mb-3">
				Основная часть сайта
			</div>
			<?php require 'phpinclude/aside.php'; ?>
		</div>
	</main>

	<?php require 'phpinclude/footer.php'; ?>
		
	
	
</body>
</html>