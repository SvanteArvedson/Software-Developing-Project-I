<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Mina resultat');

slot('styles', use_stylesheet('Results.css'));

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

echo    '<div id="pagecontent" class="small-10 small-centered columns">
			<h1 id="resultHeader">
				Mina resultat
			</h1>';

if (count($UserResult->getLessonResults()) < 1)
{
	echo    	'<p>
					Inga lektioner
				</p>';
}			
else
{
	echo    '<ul class="small-block-grid-1 large-block-grid-3">';
			
	foreach ($UserResult->getLessonResults() as $lessonResult)
	{
		echo    '<li>
					<table>
						<caption>'
							. $lessonResult->getLessonTitle() .
						'</caption>
						<thead>
							<tr>
								<th>Datum</th>
								<th>Poäng</th>
							</tr>
						</thead>
						<tbody>';
		
		if (count($lessonResult->getResults()) < 1)
		{
			echo    		'<tr>
								<td colspan="2">Inga resultat</td>
							</tr>';
		}
		else
		{
			foreach ($lessonResult->getResults() as $result)
			{
				echo    	'<tr>
								<td>' . $result->getCreatedAt() . '</td>
								<td>' . $result->getScore() . '/' . $result->getMaxscore() . '</td>
							</tr>';
			}
		}
		
		echo    		'</tbody>
					</table>
				</li>';
	}
			
	echo    '</ul>';
}

echo	'</div>';