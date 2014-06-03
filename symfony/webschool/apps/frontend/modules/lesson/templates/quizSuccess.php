<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Ensemble Coloris Webbskola - ' . $lesson->getTitle() . ' - Quiz');

slot('styles', use_stylesheet('Quiz.css'));

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

// Echos the lesson content
echo    '<div id="pagecontent" class="small-10 large-8 small-centered columns">
			<h1>'
				. $lesson->getTitle() . ' - Quiz
			</h1>
			<form class="quiz" method="post" action="' . url_for('process_quiz', $lesson) . '">
				<div class="panel radius">
					<p>
						Svara på alla frågorna, klicka sedan på <em>Skicka</em>.
					</p>
				</div>';
					
foreach ($form as $widget)
{
	echo    	'<div class="row">';
	
	echo			$widget->render();
	
	echo    	'</div>';
}

echo    		$form->renderHiddenFields();
echo			'<input id="sendButton" type="submit" value="Skicka" class="button radius expand" />
	    	</form>
	    </div>';
