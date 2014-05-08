<?php

class UserDeleteForm extends sfForm 
{
	/**
	 * Configure the delete form
	 */
	public function configure()
	{
		$this -> setWidgets(array(
			'password' => new sfWidgetFormInputPassword(),
		));
		
		$this -> widgetSchema->setNameFormat('user_delete[%s]');
		
		$this -> setValidators(array(
			'password' => new sfValidatorString(
					array('max_length' => 8, 'min_length' => 8), 
					array('required' => '<em>Lösenord</em> får ej lämnas tomt', 
						'max_length' => '<em>Lösenord</em> måste vara %max_length% tecken', 
						'min_length' => '<em>Lösenord</em> måste vara %min_length% tecken'))
		));
	}
}
