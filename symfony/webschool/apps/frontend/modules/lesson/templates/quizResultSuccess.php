<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Resultat');

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

// Echos the lesson content
echo    '<div id="pagecontent" class="small-12 large-8 large-centered columns">
			<h2>' . $lesson->getTitle() . ' - Resultat</h2>
			<div class="panel instructions">
				<p>'
					. $resultPresentation . 
				'</p>
				<p>
					Du hittar alla dina resultat under Konto -> Mina resultat.
				</p>
				
			</div>
			<div class="row">';
				
foreach ($form as $key => $field)
{
	echo    		$HTMLfield = $field->render($attributes = array('disabled' => 'disabled'));
}

echo		'</div>
		</div>';