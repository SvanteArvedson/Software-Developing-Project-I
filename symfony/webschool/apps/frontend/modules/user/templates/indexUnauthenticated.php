<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Startsida');

slot('navigation', '');
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
		<?php
			echo 'Välkommen!';
		?>
	</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Quisque quis nisi a ante cursus egestas vitae facilisis
		libero.
	</p>
	
	<div class="row">
		<?php
				echo '<form class="small-12 large-6 columns" method="POST" action="' . url_for('@homepage') . '">
						<fieldset>
							<legend>
								Logga in:
							</legend>
							<p>Är du inte registrerad ännu? <a href="' . url_for('@register_new_user') . '" title="Till registreringen">Registrera dig här.</a></p>';
							
				if ($loginfailed != null)
				{
					echo 	'<p class="error">' . $loginfailed . '<p>';
				}		
							
				echo		'<div class="row">
								<div class="small-12 large-6 columns">';
				
				if ($form['user'] -> hasError())
				{
					echo 			$form['user'] -> renderLabel('Användarnamn', array('class' => 'error'));
					echo 			$form['user'] -> render(array('autofocus' => 'autofocus', 'class' => 'error', 'maxlength' => '25'));
					echo 			"<small class='error'>" . $form['user']->getError() . "</small>";
				}
				else
				{
									echo $form['user'] -> renderLabel('Användarnamn');
									echo $form['user'] -> render(array('autofocus' => 'autofocus', 'maxlength' => '25'));
				}
				
				echo 			'</div>
								<div class="small-12 large-6 columns">';
					
				if ($form['pass'] -> hasError())
				{
					echo 			$form['pass'] -> renderLabel('Lösenord', array('class' => 'error'));
					echo 			$form['pass'] -> render(array('class' => 'error', 'maxlength' => '8'));
					echo 			"<small class='error'>" . $form['pass']->getError() . "</small>";
				}
				else
				{
					echo 			$form['pass'] -> renderLabel('Lösenord');
					echo 			$form['pass'] -> render(array('maxlength' => '8'));
				}
			
				echo 			'</div>
								<div class="small-12 columns">';
					
				echo $form -> renderHiddenFields();
				
				echo 				'<input id="logInButton" class="button tiny right" type="submit" value="Ok" />
								</div>
							</div>
						</fieldset>
					</form>';
		?>
	</div>	
</div>