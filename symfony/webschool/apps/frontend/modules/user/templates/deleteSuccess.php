<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Radera konto');

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
		Radera konto
	</h2>
	
	<div class="row">
		
		<?php
			echo '<form class="small-12 large-6 columns" method="post" action="' . url_for('@delete_user_account') . '">
					<fieldset>
						<div class="row">
							<div class="small-12 columns">';
			
			if (!empty($errorMessage)) 
			{
				echo			'<p class="error">' . $errorMessage . '</p>';
			}

			echo 			'</div>
							<div class="small-12 large-6 columns">
								<p>Ange ditt lösenord för att radera ditt konto.</p>
							</div>
							<div class="small-12 large-6 columns">';


			if ($form['pass']->hasError())
			{
				echo 			$form['pass']->renderLabel('Lösenord', array('class'=>'error'));
				echo 			$form['pass']->render(array('autofocus' => 'autofocus', 'maxlength' => '8', 'class'=>'error'));
				echo			"<small class='error'>" . $form['pass']->getError() . "</small>";
			}
			else
			{
				echo 			$form['pass']->renderLabel('Lösenord');
				echo 			$form['pass']->render(array('autofocus' => 'autofocus', 'maxlength' => '8'));

			}
			
			echo 			'</div>
							<div class="small-12 columns">';
			
			echo				'<a id="cancelLink" class="button tiny left" href="' . url_for('@homepage') . '" >Avbryt</a>
								<input id="deleteButton" class="button tiny right" type="submit" value="Ok" />
							</div>
						</div>
					</fieldset>
				</form>';			
		?>
		
	</div>	
</div>