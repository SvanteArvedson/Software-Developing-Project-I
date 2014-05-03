<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Startsida');

slot('navigation', 
		'<li>
			<a href="#">Forum</a>
		</li>
		<li class="has-dropdown">
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
		</li>
		<li>
			<a href="' . url_for('@edit_user_account') . '">Redigera konto</a>
		</li>
		<li>
			<a href="' . url_for('@delete_user_account') . '">Radera konto</a>
		</li>');
?>

<div id="pagecontent" class="small-12 columns">
	
	<?php
		if ($sf_user->hasFlash('error'))
		{
			echo 	'<div data-alert class="alert-box alert">
						<p>' . $sf_user->getFlash('error') . '</p>
						<a href="#" class="close">&times;</a>
					</div>';
		}
		
		if ($sf_user->hasFlash('message'))
		{
			echo 	'<div data-alert class="alert-box">
						<p>' . $sf_user->getFlash('message') . '</p>
						<a href="#" class="close">&times;</a>
					</div>';
		}
		
		if ($sf_user->hasFlash('success'))
		{
			echo 	'<div data-alert class="alert-box">
						<p>' . $sf_user->getFlash('success') . '</p>
						<a href="#" class="close">&times;</a>
					</div>';
		}
	?>
	
	<h2>
		<?php
			echo 'Välkommen ' . $name . '!';	
		?>
	</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Quisque quis nisi a ante cursus egestas vitae facilisis
		libero.
	</p>
	
	<div class="row">
		<?php
			echo '<form class="small-12 large-3 columns" method="POST" action="' . url_for('@homepage') . '">
					<div class="row">
						<input id="logOutButton" class="button tiny" type="submit" value="Logga ut" />
					</div>
				</form>';
		?>
	</div>	
</div>