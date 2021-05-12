<!DOCTYPE html>
<html lang="ja">
<head>
	<title>Digidence</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" >
	<meta property="og:title" content="Digidence">
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta name="description" content=""/>
    <meta property="og:description" content=""/>
	<meta property="og:image" content="">

	<link rel="stylesheet" href="/digidence/public/style.css">
	<link rel="shortcut icon" type="image/png" href="/public/images/favicon.png"/>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>
<body id="js-top">
	<!-- <div class="loader-overlay" id="js-loader-overlay"></div>
	<?php include 'partials/header.php'; ?>
	<?php include 'partials/menu.php'; ?> -->
	<main>
		<?php
			$request = $_SERVER['REQUEST_URI'];
			switch ($request) {
			    case '/digidence/':
		        	require __DIR__ . '/views/index.php';
			        break;
			    default:
			    	echo 'Page not found.';
			        http_response_code(404);
			        // require __DIR__ . '/views/404.php';
			        break;
		    }
	    ?>
	</main>
	<!-- <?php include 'partials/footer.php'; ?> -->
	<script type="text/javascript" src="/digidence/public/app.js"></script>
</body>
</html>