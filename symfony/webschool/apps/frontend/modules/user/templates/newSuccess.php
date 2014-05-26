<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Registrera konto');

slot('styles', use_stylesheet('Registration.css'));

slot('navigation', get_partial('global/unauthenticatedNavigation'));

echo'<div id="pagecontent" class="small-10 large-6 small-centered columns">
		<h1>Registrera dig</h1>
		<div class="row">
			<form class="small-12 columns" method="post" action="' . url_for('@register_new_user') . '">
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

if ($form['password']->hasError())
{
	echo					$form['password']->renderLabel('Lösenord', array('class'=>'error'));
	echo					$form['password']->render(array('maxlength' => '8', 'class'=>'error'));
}
else
{
	echo					$form['password']->renderLabel('Lösenord');
	echo					$form['password']->render(array('maxlength' => '8'));
}

echo					'</div>
						<div class="small-12 large-6 columns">';

if ($form['passwordAgain']->hasError())
{
	echo					$form['passwordAgain']->renderlabel('Repereta lösenord', array('class'=>'error'));
	echo					$form['passwordAgain']->render(array('maxlength'=>'8', 'class'=>'error'));
}
else
{
	echo					$form['passwordAgain']->renderlabel('Repereta lösenord');
	echo					$form['passwordAgain']->render(array('maxlength' => '8'));
}

echo					'</div>
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
	echo					$form->renderHiddenFields();
}	
else
{			
	echo 					$form['email']->renderLabel('Epost');
	echo 					$form['email']->render(array());
	echo					$form->renderHiddenFields();
}

echo 					'</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<input id="sendButton" class="button tiny expand radius left" type="submit" value="Ok" />
						</div>
					</div>
				</fieldset>
			</form>
		</div>	
	</div>';