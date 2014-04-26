<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form class="small-12 columns" method="POST" action="<?php echo url_for('/Individuellt-mjukvaruutvecklingsprojekt/symfony/webschool/web/frontend_dev.php/user/login'); ?>">
	<fieldset>
		<legend>
			Logga in:
		</legend>
		<div class="row">
			<div class="small-12 large-5 columns">
				<?php echo $form['user']->renderLabel(); ?>
				<?php echo $form['user']->render(array('autofocus' => 'autofocus')); ?>
			</div>
			<div class="small-12 large-5 columns">
				<?php echo $form['pass']->renderLabel(); ?>
				<?php echo $form['pass']->render(); ?>
			</div>
			<div class="small-12 large-2 columns">
				<input id="logInButton" class="button tiny" type="submit" value="Logga in" />
			</div>
		</div>
	</fieldset>
</form>