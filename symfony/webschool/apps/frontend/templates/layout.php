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
			include_slot('styles'); // Page-specific styles
echo	'</head>
		<body>
			<div id="container">
				<div class="contain-to-grid">
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
				</div>
				<div id="content">
					<header id="header1" class="row show-for-small">
						<a href="' . url_for('@homepage') . '">'
							. image_tag('Titel-mobil', 'alt="Ensemble Coloris Webbskola"') .
						'</a>	
					</header>
					<header id="header2" class="row hide-for-small">
						<a href="' . url_for('@homepage') . '">'
							. image_tag('Titel-desktop', 'alt="Ensemble Coloris Webbskola"') .	
						'</a>	
					</header>
					<div id="main" class="row">';

if ($sf_user->hasFlash('error'))
{
	echo 				'<div class="small-10 small-centered columns">
							<div data-alert class="columns alert-box message alert">
								<p>' . $sf_user->getFlash('error') . '</p>
								<a href="#" class="close">&times;</a>
							</div>
						</div>';
}

if ($sf_user->hasFlash('message'))
{
	echo 				'<div class="small-10 small-centered columns">
							<div data-alert class="columns alert-box message">
								<p>' . $sf_user->getFlash('message') . '</p>
								<a href="#" class="close">&times;</a>
							</div>
						</div>';
}

if ($sf_user->hasFlash('success'))
{
	echo 				'<div class="small-10 small-centered columns">
							<div data-alert class="alert-box message success">
								<p>' . $sf_user->getFlash('success') . '</p>
								<a href="#" class="close">&times;</a>
							</div>
						</div>';
}

echo 					$sf_content; // Page main content goes here
					
echo			'</div>
			</div>
			<div id="push">
			</div>
		</div>
		<footer id="pagefoot1" class="row show-for-small">'
			. image_tag('Sidfot-mobil', 'alt="© Ensemble Colori"') .	
		'</footer>
		<footer id="pagefoot2" class="row hide-for-small">'
			. image_tag('Sidfot-desktop', 'alt="© Ensemble Colori"') .	
		'</footer>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>';