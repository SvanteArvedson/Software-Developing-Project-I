<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Radera konto');

slot('styles', use_stylesheet('Delete.css'));

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

echo'<div id="pagecontent" class="small-12 large-6 small-centered columns">
		<h1>
			Radera konto
		</h1>
		<div class="row">
			<form class="small-12 columns" method="post" action="' . url_for('@delete_user_account') . '">
				<fieldset>
					<legend>
						Fyll i:
					</legend>';
			
if (!empty($errorMessage) || $form->hasErrors())
{
	echo 			'<div class="row">
						<div class="small-12 columns">
							<div data-alert class="alert-box error">
								<ul class="error-list square">';

	if (!empty($errorMessage)) 
	{
		echo    					'<li>'
										. $errorMessage .
									'</li>';
	}
	$errors = $form->getErrorSchema()->getErrors();
	foreach ($errors as $error)
	{
		echo					'<li>'
									. $error .
								'</li>';
	}
								
	echo						'</ul>
								<a href="#" class="close">&times;</a>
							</div>
						</div>
					</div>';
}

echo 				'<div class="row">
						<div class="small-12 large-6 columns">
							<div class="panel radius">
								<p>
									Ange ditt lösenord för att radera kontot
								</p>
							</div>
						</div>
						<div class="small-12 large-6 columns">';

if ($form['password']->hasError())
{
	echo 					$form['password']->renderLabel('Lösenord', array('class'=>'error'));
	echo 					$form['password']->render(array('autofocus' => 'autofocus', 'maxlength' => '8', 'class'=>'error'));
}
else
{
	echo 					$form['password']->renderLabel('Lösenord');
	echo 					$form['password']->render(array('autofocus' => 'autofocus', 'maxlength' => '8'));
}

echo 					'</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<input id="deleteButton" class="button tiny expand radius left" type="submit" value="Ok" />
						</div>
					</div>
				</fieldset>
			</form>
		</div>	
	</div>';