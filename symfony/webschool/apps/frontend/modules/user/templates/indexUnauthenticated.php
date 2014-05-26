<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Startsida');

slot('styles', use_stylesheet('Login.css'));

slot('navigation', get_partial('global/unauthenticatedNavigation'));

echo '<div id="pagecontent" class="small-10 small-centered columns">
		<div class="small-12 large-7 columns">
			<h1>Välkommen!</h1>
			<p>
				På Ensemble Coloris Webbskola kan du studera och upptäcka musik av västvärldens största kompositörer.
			</p>
			<p>
				Skapa ett konto och ta del av våra lektioner, testa dig själv och diskutera på vårt forum.
			</p>
		</div>
		<div class="large-5 columns hide-for-small">'
			. image_tag('Quantz.jpg', 'id="pictureLarge" alt_title="Flöjtkonsert vid Fredrik den stores hov. En oljemålning av konstnären Adolph Menze. På målningen finns både Fredrik den stores flöjtlärare Johann Joachim Quantz och Carl Philip Emanuel Bach med."') .
		'</div>';

echo    '<div class="row">
			<form class="small-12 columns" method="post" action="' . url_for('@homepage') . '">
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

if ($form['username'] -> hasError())
{
	echo 						$form['username'] -> renderLabel('Användarnamn', array('class' => 'error'));
	echo 						$form['username'] -> render(array('autofocus' => 'autofocus', 'class' => 'error', 'maxlength' => '25'));
}
else
{
	echo    					$form['username'] -> renderLabel('Användarnamn');
	echo    					$form['username'] -> render(array('autofocus' => 'autofocus', 'maxlength' => '25'));
}

echo 						'</div>
							<div class="small-12 large-5 columns">';
	
if ($form['password'] -> hasError())
{
	echo 						$form['password'] -> renderLabel('Lösenord', array('class' => 'error'));
	echo 						$form['password'] -> render(array('class' => 'error', 'maxlength' => '8'));
	echo 						$form -> renderHiddenFields();
}
else
{
	echo 						$form['password'] -> renderLabel('Lösenord');
	echo 						$form['password'] -> render(array('maxlength' => '8'));
	echo 						$form -> renderHiddenFields();
}

echo 						'</div>
							<div class="small-12 columns show-for-small">
								<p id="formTextSmall">
									Inget konto?<br />
									<a href="' . url_for('@register_new_user') . '" title="Till registreringen">Registrera dig här.</a>
								</p>
							</div>
							<div class="small-12 large-2 columns">
								<input id="logInButton" class="button expand radius tiny" type="submit" value="Logga in" />
							</div>
							<div class="small-12 columns hide-for-small">
								<p id="formTextLarge">
									Inget konto?<br />
									<a href="' . url_for('@register_new_user') . '" title="Till registreringen">Registrera dig här.</a>
								</p>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>';
