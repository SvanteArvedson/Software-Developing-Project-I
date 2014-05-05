<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Startsida');

slot('navigation',
	'<li>
		<a href="' . url_for('@register_new_user') . '">Registrera konto</a>
	</li>');

echo '<div id="pagecontent" class="small-12 columns">
		<h2> 
			Välkommen!
		</h2>';

echo    '<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Quisque quis nisi a ante cursus egestas vitae facilisis
			libero.
		</p>';

echo    '<div class="row">
			<form class="small-12 large-8 large-centered large-centered columns" method="post" action="' . url_for('@homepage') . '">
					<fieldset>
						<legend>
							Logga in:
						</legend>';
						
							
if (!empty($errorMessage) || $form->hasErrors())
{
	echo 				'<div data-alert class="alert-box error">
							<ul class="error-list square">';

	if (!empty($errorMessage)) 
	{
		echo    				'<li>'
									. $errorMessage .
								'</li>';
	}
	$errors = $form->getErrorSchema()->getErrors();
	foreach ($errors as $error)
	{
		echo				'<li>'
								. $error .
							'</li>';
	}
								
	echo					'</ul>
							<a href="#" class="close">&times;</a>
						</div>';
}
			
echo					'<div class="row">
							<div class="small-12 large-5 columns">';

if ($form['user'] -> hasError())
{
	echo 						$form['user'] -> renderLabel('Användarnamn', array('class' => 'error'));
	echo 						$form['user'] -> render(array('autofocus' => 'autofocus', 'class' => 'error', 'maxlength' => '25'));
}
else
{
	echo    					$form['user'] -> renderLabel('Användarnamn');
	echo    					$form['user'] -> render(array('autofocus' => 'autofocus', 'maxlength' => '25'));
}

echo 						'</div>
							<div class="small-12 large-5 columns">';
	
if ($form['pass'] -> hasError())
{
	echo 						$form['pass'] -> renderLabel('Lösenord', array('class' => 'error'));
	echo 						$form['pass'] -> render(array('class' => 'error', 'maxlength' => '8'));
}
else
{
	echo 						$form['pass'] -> renderLabel('Lösenord');
	echo 						$form['pass'] -> render(array('maxlength' => '8'));
}

echo 						'</div>
							<div class="small-12 large-2 columns">';
	
echo 							$form -> renderHiddenFields();

echo 							'<input id="logInButton" class="button tiny right" type="submit" value="Logga in" />
							</div>
						</div>
						<p>Är du inte registrerad ännu? <a href="' . url_for('@register_new_user') . '" title="Till registreringen">Registrera dig här.</a></p>
					</fieldset>
				</form>
			</div>
		</div>';
