<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - ' . $lesson->getTitle());

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

// Echos the lesson content
echo    '<div id="pagecontent" class="small-12 large-8 large-centered columns">
			<form class="quiz">
				<h2>' . $lesson->getTitle() . '</h2>
				<div class="panel instructions">
					<p>
						Svara på alla frågorna, klicka sedan på <em>Skicka</em>.
					</p>
				</div>
				<div class="row">';
					
// Echo the questions
$count = 1;
while (!empty($form['question'.$count]))
{
    echo			$form['question'.$count]->render();

	$count += 1;	
}

echo    			'<div class="row">
						<input id="sendQuizButton" type="submit" value="Skicka" class="button" />
					</div>
				</div>
	    	</form>
	    </div>';
