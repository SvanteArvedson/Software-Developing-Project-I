<?php

echo '<!DOCTYPE html>
	<html lang="sv">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width; initial-scale=1.0">
			<title>'; 
				include_slot('title'); // Title goes here
echo		'</title>';
			include_javascripts();
		  	include_stylesheets();
echo	'</head>
		<body>
			<div id="container">
				<nav class="top-bar">
					<ul class="title-area">
						<li>
							<a href="' . url_for('@homepage') . '" id="backToHome">Startsidan</a>
						</li>
						<li class="toggle-topbar menu-icon">
							<a href="#"><span>Meny</span></a>
						</li>
					</ul>
					<section class="top-bar-section">
						<ul class="right">';
							include_slot('navigation');
echo					'</ul>
					</section>
				</nav>
				<div id="content">
					<header id="header" class="row">
						<h1 id="pagetitle">Musikhistoria</h1>
					</header>
					<div id="main" class="row">';

if ($sf_user->hasFlash('error'))
{
	echo 				'<div data-alert class="alert-box message alert">
							<p>' . $sf_user->getFlash('error') . '</p>
							<a href="#" class="close">&times;</a>
						</div>';
}

if ($sf_user->hasFlash('message'))
{
	echo 				'<div data-alert class="alert-box message">
							<p>' . $sf_user->getFlash('message') . '</p>
							<a href="#" class="close">&times;</a>
						</div>';
}

if ($sf_user->hasFlash('success'))
{
	echo 				'<div data-alert class="alert-box message success">
							<p>' . $sf_user->getFlash('success') . '</p>
							<a href="#" class="close">&times;</a>
						</div>';
}

echo 					$sf_content; // Page main content goes here
					
echo			'</div>
			</div>
			<div id="push">
			</div>
		</div>
		<footer id="pagefoot">
			<p>
				&copy; Svante Arvedson
			</p>
		</footer>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>';