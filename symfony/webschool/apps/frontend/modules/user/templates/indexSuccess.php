<?php
// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Musikhistoria - Startsida');

slot('topBarMeny', 
		'<li>
			<a href="#">Forum</a>
		</li>
		<li class="has-dropdown show-for-small">
			<a href="#">Lektioner</a>
			<ul class="dropdown">
				<li>
					<a href="#">Lektion 1</a>
				</li>
				<li>
					<a href="#">Lektion 2</a>
				</li>
				<li>
					<a href="#">Lektion 3</a>
				</li>
			</ul>
		</li>');
?>

<div id="pagecontent" class="small-12 large-9 columns">
	<h2>
		<?php
			if ($sf_user->isAuthenticated())
			{
				echo 'Välkommen ' . $sf_user->getAttribute('username') . '!';	
			}
			else 
			{
				echo 'Välkommen!';
			}
		?>
	</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Quisque quis nisi a ante cursus egestas vitae facilisis
		libero.
	</p>
	
	<div class="row">
		
		<?php
			if ($sf_user->isAuthenticated()) // If user is logged in, this log out button is echoed
			{
				echo '<form class="small-12 large-3 columns" method="POST" action="' . url_for('@homepage') . '">
						<div class="row">
							<input id="logOutButton" class="button tiny" type="submit" value="Logga ut" />
						</div>
					</form>';
			}
			else // If user is not logged in, this log in form is echoed
			{
				echo '<form class="small-12 columns" method="POST" action="' . url_for('@homepage') . '">
						<fieldset>
							<legend>
								Logga in:
							</legend>';
							
				if ($loginfailed != null)
				{
					echo '<p class="error">' . $loginfailed . '<p>';
				}		
							
				echo		'<div class="row">
								<div class="small-12 large-5 columns">';
				
				if ($form['user'] -> hasError())
				{
					echo $form['user'] -> renderLabel('Användarnamn', array('class' => 'error'));
					echo $form['user'] -> render(array('autofocus' => 'autofocus', 'class' => 'error'));
					echo "<small class='error'>" . $form['user']->getError() . "</small>";
				}
				else
				{
					echo $form['user'] -> renderLabel('Användarnamn');
					echo $form['user'] -> render(array('autofocus' => 'autofocus'));
				}
				
				echo '</div>
					<div class="small-12 large-5 columns">';
					
				if ($form['pass'] -> hasError())
				{
					echo $form['pass'] -> renderLabel('Lösenord', array('class' => 'error'));
					echo $form['pass'] -> render(array('class' => 'error'));
					echo "<small class='error'>" . $form['pass']->getError() . "</small>";
				}
				else
				{
					echo $form['pass'] -> renderLabel('Lösenord');
					echo $form['pass'] -> render();
				}
			
				echo '</div>
					<div class="small-12 large-2 columns">';
					
				echo $form -> renderHiddenFields();
				
				echo 				'<input id="logInButton" class="button tiny" type="submit" value="Logga in" />
								</div>
							</div>
						</fieldset>
					</form>';
			}
		?>
	</div>	
</div>
<aside id="sideNav" class="large-3 columns hide-for-small">
	<ul class="side-nav panel">
		<li>
			<a href="#">Lektion 1</a>
		</li>
		<li>
			<a href="#">Lektion 2</a>
		</li>
		<li>
			<a href="#">Lektion 3</a>
		</li>
	</ul>
</aside>