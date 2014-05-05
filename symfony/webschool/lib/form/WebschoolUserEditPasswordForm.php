<?php

class WebschoolUserEditPasswordForm extends sfForm 
{
	/**
	 * Configure the edit password form
	 */
	public function configure()
	{
		$this -> setWidgets(array(
			'pass' 	 	=> new sfWidgetFormInputPassword(),
      		'passAgain'	=> new sfWidgetFormInputPassword(),
      		'passOld' 	=> new sfWidgetFormInputPassword()
		));
		
		$this -> widgetSchema->setNameFormat('webschool_user_edit_password[%s]');
		
		$this -> setValidators(array(
			'pass' => new sfValidatorString(
					array('max_length' => 8, 'min_length' => 8), 
					array('required' => '<em>Nytt lösenord</em> får ej lämnas tomt', 
						'max_length' => '<em>Nytt lösenord</em> måste vara %max_length% tecken', 
						'min_length' => '<em>Nytt lösenord</em> måste vara %min_length% tecken')),
			'passAgain' => new sfValidatorString(
					array('max_length' => 8, 'min_length' => 8), 
					array('required' => '<em>Repetera nytt lösenord</em> får ej lämnas tomt', 
						'max_length' => '<em>Repetera nytt lösenord</em> måste vara %max_length% tecken', 
						'min_length' => '<em>Repetera nytt lösenord</em> måste vara %min_length% tecken')),
			'passOld' => new sfValidatorString(
					array('max_length' => 8, 'min_length' => 8), 
					array('required' => '<em>Nuvarande lösenord</em> får ej lämnas tomt', 
						'max_length' => '<em>Nuvarande lösenord</em> måste vara %max_length% tecken', 
						'min_length' => '<em>Nuvarande lösenord</em> måste vara %min_length% tecken'))
						
		));
		
		$this->validatorSchema->setPostValidator(
			new sfValidatorSchemaCompare('pass', sfValidatorSchemaCompare::EQUAL, 'passAgain',
				array('throw_global_error' => true),
				array('invalid' => '<em>Nytt lösenord</em> och <em>Repetera nytt lösenord</em> måste vara samma')
			)
		);
	}
}
