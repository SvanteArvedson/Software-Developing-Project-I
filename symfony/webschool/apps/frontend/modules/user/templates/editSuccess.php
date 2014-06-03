<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Ensemble Coloris Webbskola - Redigera konto');

slot('styles', use_stylesheet('Edit.css'));

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

echo '<div id="pagecontent" class="small-10 large-6 small-centered columns">
		<h1>
			Redigera konto
		</h1>
		<div class="row">
			<form class="small-12 columns" method="post" action="' . url_for('@edit_user_account') . '">
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
						<div class="small-12  large-6 columns">';

if ($form['username']->hasError())
{
	echo					$form['username']->renderLabel('Användarnamn', array('class'=>'error'));
	echo					$form['username']->render(array('autofocus' => 'autofocus', 'maxlength' => '25', 'class'=>'error'));
}
else
{
	echo					$form['username']->renderLabel('Användarnamn');
	echo					$form['username']->render(array('autofocus' => 'autofocus', 'maxlength' => '25'));
}

echo 					'</div>
					</div>
					<div class="row">
						<div class="small-12 large-6 columns">';

if ($form['name']->hasError())
{
	echo 					$form['name']->renderLabel('Namn', array('class'=>'error'));
	echo 					$form['name']->render(array('maxlength' => '40', 'class'=>'error'));
}
else
{
	echo 					$form['name']->renderLabel('Namn');
	echo 					$form['name']->render(array('maxlength' => '40'));
}

echo 					'</div>
					</div>
					<div class="row">
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
					</div>
					<div class="row">
						<div class="small-12 large-6 columns">
							<div class="panel radius">
								<p>
									Ange ditt lösenord för att spara ändringarna
								</p>
							</div>
						</div>
						<div class="small-12 large-6 columns">';
				
if ($form['passwordOld']->hasError())
{
	echo					$form['passwordOld']->renderlabel('Lösenord', array('class'=>'error'));
	echo					$form['passwordOld']->render(array('maxlength'=>'8', 'class'=>'error'));
	echo					$form->renderHiddenFields();
}
else
{
	echo					$form['passwordOld']->renderlabel('Lösenord');
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
