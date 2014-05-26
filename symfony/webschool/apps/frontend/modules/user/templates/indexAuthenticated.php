<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Startsida');

slot('styles', null);

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

// Page main content
echo '<div id="pagecontent" class="small-10 small-centered columns">
		<div class="small-12 large-7 columns">
			<h1>
				' . $name . '	
			</h1>
			<p>
				' . $name . ' inloggad.
			</p>
		</div>
		<div class="large-5 columns hide-for-small">'
			. image_tag('Quantz.jpg', 'id="pictureLarge" alt_title="Flöjtkonsert vid Fredrik den stores hov. En oljemålning av konstnären Adolph Menze. På målningen finns både Fredrik den stores flöjtlärare Johann Joachim Quantz och Carl Philip Emanuel Bach med."') .
		'</div>
	</div>';