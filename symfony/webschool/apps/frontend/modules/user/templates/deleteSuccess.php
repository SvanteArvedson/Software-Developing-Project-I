<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Radera konto');

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

echo'<div id="pagecontent" class="small-12 large-6 large-centered columns">
		<h2>
			Radera konto
		</h2>
		<div class="row">
			<form class="small-12 columns" method="post" action="' . url_for('@delete_user_account') . '">
				<fieldset>
					<div class="row">
						<div class="small-12 columns">';
			
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

echo 					'</div>
						<div class="small-12 large-6 columns submitDeleteInstructions">
							<div class="panel instructions">
								<p>
									Ange ditt lösenord för att radera ditt konto
								</p>
							</div>
						</div>
						<div class="small-12 large-6 columns submitDeletePassword">';

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
						<div class="small-12 columns">';

echo						'<a id="cancelLink" class="button tiny left" href="' . url_for('@homepage') . '" >Avbryt</a>
							<input id="deleteButton" class="button tiny right" type="submit" value="Ok" />
						</div>
					</div>
				</fieldset>
			</form>
		</div>	
	</div>';