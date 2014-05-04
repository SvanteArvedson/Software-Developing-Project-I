<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Redigera konto');

slot('navigation', 
		'<li>
			<a href="' . url_for('@edit_user_account') . '">Redigera konto</a>
		</li>
		<li>
			<a href="' . url_for('@edit_user_password') . '">Ändra lösenord</a>
		</li>
		<li>
			<a href="' . url_for('@delete_user_account') . '">Radera konto</a>
		</li>');
?>

<div id="pagecontent" class="small-12 columns">
	<?php
		if ($sf_user->hasFlash('error'))
		{
			echo 	'<div data-alert class="alert-box alert">
						<p>' . $sf_user->getFlash('error') . '</p>
						<a href="#" class="close">&times;</a>
					</div>';
		}
		
		if ($sf_user->hasFlash('message'))
		{
			echo 	'<div data-alert class="alert-box">
						<p>' . $sf_user->getFlash('message') . '</p>
						<a href="#" class="close">&times;</a>
					</div>';
		}
		
		if ($sf_user->hasFlash('success'))
		{
			echo 	'<div data-alert class="alert-box">
						<p>' . $sf_user->getFlash('success') . '</p>
						<a href="#" class="close">&times;</a>
					</div>';
		}
	?>
	
	<h2>
		Redigera konto
	</h2>
	
	<div class="row">
		<?php
			echo '<form class="small-12 large-6 columns" method="post" action="' . url_for('@edit_user_account') . '">
					<fieldset>
						<div class="row">
							<div class="small-12 columns">';
			
			if (!empty($errorMessage)) 
			{
				echo			'<p class="error">' . $errorMessage . '</p>';
			}
			
			if ($form->hasGlobalErrors())
			{
				$errors = $form->getGlobalErrors();
				foreach ($errors as $error)
				{
					echo		'<p class="error">' . $error . '</p>';
				}
			}				
			
			if ($form['name']->hasError())
			{
				echo 			$form['name']->renderLabel('Namn', array('class'=>'error'));
				echo 			$form['name']->render(array('autofocus' => 'autofocus', 'maxlength' => '40', 'class'=>'error'));
				echo			"<small class='error'>" . $form['name']->getError() . "</small>";
			}
			else
			{
				echo 			$form['name']->renderLabel('Namn');
				echo 			$form['name']->render(array('autofocus' => 'autofocus', 'maxlength' => '40'));

			}
			
			echo 			'</div>
							<div class="small-12 columns">';
			
			if ($form['email']->hasError())
			{
				echo 			$form['email']->renderLabel('Epost', array('class'=>'error'));
				echo 			$form['email']->render(array('class'=>'error'));
				echo			"<small class='error'>" . $form['email']->getError() . "</small>";
			}	
			else
			{			
				echo 			$form['email']->renderLabel('Epost');
				echo 			$form['email']->render(array());
			}
			
			echo 			'</div>
							<div class="small-12 columns">';
							
			if ($form['user']->hasError())
			{
				echo			$form['user']->renderLabel('Användarnamn', array('class'=>'error'));
				echo			$form['user']->render(array('maxlength' => '25', 'class'=>'error'));
				echo			"<small class='error'>" . $form['user']->getError() . "</small>";
			}
			else
			{
				echo			$form['user']->renderLabel('Användarnamn');
				echo			$form['user']->render(array('maxlength' => '25'));
			}
			
			echo 			'</div>
							<div class="small-12 large-6 columns">
								<p>Ange ditt nuvarande lösenord innan du sparar ändrngarna.</p>
							</div>
							<div class="small-12 large-6 columns">';
							
			if ($form['passOld']->hasError())
			{
				echo			$form['passOld']->renderlabel('Nuvarande lösenord', array('class'=>'error'));
				echo			$form['passOld']->render(array('maxlength'=>'8', 'class'=>'error'));
				echo			"<small class='error'>" . $form['passOld']->getError() . "</small>";
			}
			else
			{
				echo			$form['passOld']->renderlabel('Nuvarande lösenord');
				echo			$form['passOld']->render(array('maxlength' => '8'));
			}
			
			echo 			'</div>
							<div class="small-12 columns">';
			
			echo				$form->renderHiddenFields();
			
			echo				'<a id="cancelLink" class="button tiny left" href="' . url_for('@homepage') . '" >Avbryt</a>
								<input id="saveButton" class="button tiny right" type="submit" value="Ok" />
							</div>
						</div>
					</fieldset>
				</form>';
		?>	
	</div>	
</div>