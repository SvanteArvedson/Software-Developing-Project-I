<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Ensemble Coloris Webbskola - Ändra lösenord');

slot('styles', use_stylesheet('Editpassword.css'));

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));
	
echo'<div id="pagecontent" class="small-10 large-6 small-centered columns">
		<h1>
			Ändra lösenord
		</h1>
		<div class="row">
			<form class="small-12 columns" method="post" action="' . url_for('@edit_user_password') . '">
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

echo				'<div class="row">
						<div class="small-12 large-6 columns">';


if ($form['password']->hasError())
{
	echo					$form['password']->renderLabel('Nytt lösenord', array('class'=>'error'));
	echo					$form['password']->render(array('autofocus' => 'autofocus', 'maxlength' => '8', 'class'=>'error'));
}
else
{
	echo					$form['password']->renderLabel('Nytt lösenord');
	echo					$form['password']->render(array('autofocus' => 'autofocus', 'maxlength' => '8'));
}

echo					'</div>
						<div class="small-12 large-6 columns">';

if ($form['passwordAgain']->hasError())
{
	echo					$form['passwordAgain']->renderlabel('Repereta nytt lösenord', array('class'=>'error'));
	echo					$form['passwordAgain']->render(array('maxlength'=>'8', 'class'=>'error'));
}
else
{
	echo					$form['passwordAgain']->renderlabel('Repereta nytt lösenord');
	echo					$form['passwordAgain']->render(array('maxlength' => '8'));
}

echo 					'</div>
					</div>
					<div class="row">
						<div class="small-12 large-6 columns">
							<div class="panel radius">
								<p>
									Ange ditt nuvarande lösenord innan du sparar ändrngarna
								</p>
							</div>	
						</div>
						<div class="small-12 large-6 columns">';
				
if ($form['passwordOld']->hasError())
{
	echo					$form['passwordOld']->renderlabel('Nuvarande lösenord', array('class'=>'error'));
	echo					$form['passwordOld']->render(array('maxlength'=>'8', 'class'=>'error'));
	echo					$form->renderHiddenFields();
}
else
{
	echo					$form['passwordOld']->renderlabel('Nuvarande lösenord');
	echo					$form['passwordOld']->render(array('maxlength' => '8'));
	echo					$form->renderHiddenFields();
}

echo 					'</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<input id="saveButton" class="button tiny expand radius left" type="submit" value="Ok" />
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>';	