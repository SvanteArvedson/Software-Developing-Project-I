<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<title>
			<?php include_slot('title'); ?>
		</title>
		<?php include_javascripts(); ?>
    	<?php include_stylesheets(); ?>
	</head>
	<body>
		<div id="container">
			<div class="contain-to-grid">
				<nav class="top-bar">
					<ul class="title-area">
						<li>
							<a href="<?php echo url_for('@homepage'); ?>" id="backToHome">Startsidan</a>
						</li>
						<li class="toggle-topbar menu-icon">
							<a href="#"><span></span></a>
						</li>
					</ul>
					<section class="top-bar-section">
						<ul class="right">
							<?php include_slot('navigation'); ?>
						</ul>
					</section>
				</nav>
			</div>
			<div id="content">
				<header id="header" class="row">
					<h1 id="pagetitle">Musikhistoria</h1>
				</header>
				<div id="main" class="row">
					
					<?php echo $sf_content ?>
				
				</div>
			</div>
			<div id="push">
			</div>
		</div>
		<footer id="pagefoot" class="row">
			<p>
				&copy; Svante Arvedson
			</p>
		</footer>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>