<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?= \App\Basic::init()->asset('css/bootstrap.min.css') ?>">
	<!-- script src="<?= \App\Basic::init()->asset('js/turbolinks.js') ?>" data-turbolinks-eval="false" defer></script -->
	<script src="<?= \App\Basic::init()->asset('js/App.js?242243') ?>" data-turbolinks-eval="false" defer></script>
</head>
<body class="bg-light">
	<header class="navbar bg-white shadow ">
		<div class="container">
			<a href="<?= \App\Config::init()->get("APP_URL") ?>" class="navbar-brand"><?= $title ?></a>
		</div>
	</header>
	<main class="pt-2">
		<?= $view  ?>
	</main>
</body>
</html>
