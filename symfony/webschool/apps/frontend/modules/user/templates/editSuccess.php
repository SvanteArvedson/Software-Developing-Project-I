<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Redigera konto');

slot('navigation', 
	'<li class="has-dropdown">
		<a>Konto</a>
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
	</li>');

echo '<div id="pagecontent" class="small-12 large-6 large-centered columns">
		<h2>
			Redigera konto
		</h2>
		<div class="row">
			<form class="small-12 columns" method="post" action="' . url_for('@edit_user_account') . '">
				<fieldset>
					<div class="row">
						<div class="small-12 columns">';

if (!empty($errorMessage) || $form->hasErrors())
{
	echo 					'<div data-alert class="alert-box error">
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
							</div>';
}			
											
echo					'</div>
						<div class="small-12  large-6 columns">';

if ($form['name']->hasError())
{
	echo 					$form['name']->renderLabel('Namn', array('class'=>'error'));
	echo 					$form['name']->render(array('autofocus' => 'autofocus', 'maxlength' => '40', 'class'=>'error'));
}
else
{
	echo 					$form['name']->renderLabel('Namn');
	echo 					$form['name']->render(array('autofocus' => 'autofocus', 'maxlength' => '40'));

}

echo 					'</div>
						<div class="small-12 large-6 columns">';
				

if ($form['user']->hasError())
{
	echo					$form['user']->renderLabel('Användarnamn', array('class'=>'error'));
	echo					$form['user']->render(array('maxlength' => '25', 'class'=>'error'));
}
else
{
	echo					$form['user']->renderLabel('Användarnamn');
	echo					$form['user']->render(array('maxlength' => '25'));
}


echo 					'</div>
						<div class="small-12 columns">';

if ($form['email']->hasError())
{
	echo 					$form['email']->renderLabel('Epost', array('class'=>'error'));
	echo 					$form['email']->render(array('class'=>'error'));
}	
else
{			
	echo 					$form['email']->renderLabel('Epost');
	echo 					$form['email']->render(array());
}

echo 					'</div>
						<div class="small-12 large-6 columns submitInstructions">
							<div class="panel instructions">
								<p>
									Ange ditt lösenord för att spara ändringarna
								</p>
							</div>
						</div>
						<div class="small-12 large-6 columns submitPassword">';
				
if ($form['passOld']->hasError())
{
	echo					$form['passOld']->renderlabel('Lösenord', array('class'=>'error'));
	echo					$form['passOld']->render(array('maxlength'=>'8', 'class'=>'error'));
}
else
{
	echo					$form['passOld']->renderlabel('Lösenord');
	echo					$form['passOld']->render(array('maxlength' => '8'));
}

echo 					'</div>
						<div class="small-12 columns">';

echo						$form->renderHiddenFields();

echo						'<a id="cancelLink" class="button tiny left" href="' . url_for('@homepage') . '" >Avbryt</a>
							<input id="saveButton" class="button tiny right" type="submit" value="Ok" />
						</div>
					</div>
				</fieldset>
			</form>	
		</div>
	</div>';
