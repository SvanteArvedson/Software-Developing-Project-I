<p>Hej världen!</p>

<form method="post" action="<?php echo url_for('content/update'); ?>">
	<label for="name">Vad heter du?</label>
	<input type="text" name="name" id="name" />
	<input type="submit" value="Svara" />

	<?php echo link_to('Jag vill vara anonym', 'content/update?name=anonymus'); ?>
</form>