<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Startsida');

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

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