<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - ' . $lesson->getTitle() . ' - Quiz');

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

// Echos the lesson content
echo    '<div id="pagecontent" class="small-12 large-8 large-centered columns">
			<form class="quiz" method="post" action="' . url_for('process_quiz', $lesson) . '">
				<h2>' . $lesson->getTitle() . ' - Quiz</h2>
				<div class="panel instructions">
					<p>
						Svara på alla frågorna, klicka sedan på <em>Skicka</em>.
					</p>
				</div>
				<div class="row">';
					
foreach ($form as $widget)
{
	echo			$widget->render();
}

echo    			'<div class="row">' .
						$form->renderHiddenFields() .
						'<input id="sendQuizButton" type="submit" value="Skicka" class="button" />
					</div>
				</div>
	    	</form>
	    </div>';
