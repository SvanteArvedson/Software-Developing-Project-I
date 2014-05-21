<?php

// $lessons is a parameter coming from the template

$linksToLessons = '<li class="has-dropdown">
						<a>Lektioner</a>
						<ul class="dropdown">';
// Add links to lessons
foreach ($lessons as $lesson) {
	$linksToLessons .=    	'<li class="has-dropdown">
								<a>' . $lesson->getTitle() . '</a>
								<ul class="dropdown">
									<li>
										<a href="' . url_for('show_lesson', $lesson) . '">Lektion</a>  
									</li>
									<li>
										<a href="' . url_for('show_quiz', $lesson) . '">Quiz</a>
									</li>
								</ul>
							</li>';
}
$linksToLessons .= 		'</ul>
					</li>';

echo $linksToLessons .  
	'<li>
		<a href="' . url_for('@show_quiz_result') . '">Mina resultat</a>
	</li>' . 
	'<li class="has-dropdown">
		<a>Mitt konto</a>
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
	</li>';