<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Ensemble Coloris Webbskola - Resultat');

slot('styles', use_stylesheet('Quiz.css'));

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

// Echos the lesson content
echo    '<div id="pagecontent" class="small-10 large-8 small-centered columns">
			<h1>'
				. $lesson->getTitle() . ' - Resultat
			</h1>
			<div class="panel radius">
				<p>'
					. $resultPresentation . 
				'</p>
				<p>
					Dina svar är markerade, om du svarade rätt är markeringen grön, om 
					du svarade fel är markeringen röd.
				</p>	
				<p>
					Du hittar alla dina resultat 
					under "Mina resultat".
				</p>
			</div>';
				
foreach ($form as $key => $field)
{
	echo    '<div class="row">';
	
	echo    	$HTMLfield = $field->render($attributes = array('disabled' => 'disabled'));
	
	echo    '</div>';
}

echo	'</div>';