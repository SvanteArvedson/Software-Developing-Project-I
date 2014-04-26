<?php
	// Adds content to the slots in "/../../templates/layout.php"
	slot('title', 'Musikhistoria - Startsida');
	
	slot('topBarMeny', '<li>
					<a href="#">Forum</a>

				</li>
				<li class="has-dropdown show-for-small">
					<a href="#">Lektioner</a>
					<ul class="dropdown">
						<li>
							<a href="#">Lektion 1</a>
						</li>
						<li>
							<a href="#">Lektion 2</a>
						</li>
						<li>
							<a href="#">Lektion 3</a>
						</li>
					</ul>
				</li>');
?>

<div id="pagecontent" class="small-12 large-9 columns">
	<h2>Välkommen <?php echo $user; ?> </h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Quisque quis nisi a ante cursus egestas vitae facilisis
		libero.
	</p>
</div>
<aside id="sideNav" class="large-3 columns hide-for-small">
	<ul class="side-nav panel">
		<li>
			<a href="#">Lektion 1</a>
		</li>
		<li>
			<a href="#">Lektion 2</a>
		</li>
		<li>
			<a href="#">Lektion 3</a>
		</li>
	</ul>
</aside>