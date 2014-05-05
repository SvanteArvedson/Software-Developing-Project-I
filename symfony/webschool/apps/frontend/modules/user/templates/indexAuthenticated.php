<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Startsida');

slot('navigation', 
	'<li class="has-dropdown">
		<a>Konto</a>
		<ul class="dropdown">
			<li>
				<a href="' . url_for('@edit_user_account') . '">Redigera konto</a>
			</li>
			<li>
				<a href="' . url_for('@edit_user_password') . '">Ändra lösenord</a>
			</li>
			<li>
				<a href="' . url_for('@delete_user_account') . '">Radera konto</a>
			</li>
		</ul>
	</li>
	<li class="has-form">
		<form method="post" action="' . url_for('@homepage') . '">
			<input id="logOutButton" class="button tiny right" type="submit" value="Logga ut" />
		</form>
	</li>');

// Page main content
echo '<div id="pagecontent" class="small-12 columns">
		<h2>
			Välkommen ' . $name . '!	
		</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Quisque quis nisi a ante cursus egestas vitae facilisis
			libero.
		</p>
	</div>';