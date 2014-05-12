<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - ' . $lesson->getTitle());

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

// Echos the lesson content
echo    '<article id="pagecontent" class="small-12 large-8 large-centered columns">
			<h2>' . $lesson->getTitle() . '</h2>'
			. $lesson->getText() .
			'<a href="' . url_for('show_test', $lesson) . '" class="button">Till Quizet</a>
		</article>';