<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Redigera konto');

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

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
				

if ($form['username']->hasError())
{
	echo					$form['username']->renderLabel('Användarnamn', array('class'=>'error'));
	echo					$form['username']->render(array('maxlength' => '25', 'class'=>'error'));
}
else
{
	echo					$form['username']->renderLabel('Användarnamn');
	echo					$form['username']->render(array('maxlength' => '25'));
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
				
if ($form['passwordOld']->hasError())
{
	echo					$form['passwordOld']->renderlabel('Lösenord', array('class'=>'error'));
	echo					$form['passwordOld']->render(array('maxlength'=>'8', 'class'=>'error'));
}
else
{
	echo					$form['passwordOld']->renderlabel('Lösenord');
	echo					$form['passwordOld']->render(array('maxlength' => '8'));
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
