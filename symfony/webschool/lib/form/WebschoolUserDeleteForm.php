<?php

class WebschoolUserDeleteForm extends sfForm 
{
	/**
	 * Configure the delete form
	 */
	public function configure()
	{
		$this -> setWidgets(array(
			'pass' => new sfWidgetFormInputPassword(),
		));
		
		$this -> widgetSchema->setNameFormat('webschool_user_delete[%s]');
		
		$this -> setValidators(array(
			'pass' => new sfValidatorString(
					array('max_length' => 8, 'min_length' => 8), 
					array('required' => '<em>Lösenord</em> får ej lämnas tomt', 
						'max_length' => '<em>Lösenord</em> måste vara %max_length% tecken', 
						'min_length' => '<em>Lösenord</em> måste vara %min_length% tecken'))
		));
	}
}
