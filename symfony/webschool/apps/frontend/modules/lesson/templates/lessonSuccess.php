<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - ' . $lesson->getTitle());

slot('styles', use_stylesheet('Lesson.css'));

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

// Echos the lesson content
echo    '<article id="pagecontent" class="small-10 large-8 small-centered columns">
			<h1>' . $lesson->getTitle() . '</h1>'
			. $lesson->getText() .
			'<a href="' . url_for('show_quiz', $lesson) . '" id="quizButton" class="button expand radius">Till Quizet</a>
		</article>';