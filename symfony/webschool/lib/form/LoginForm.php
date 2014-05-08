<?php

class LoginForm extends sfForm 
{
	/**
	 * Configure the login form
	 */
	public function configure()
	{
		$this -> setWidgets(array(
			'username' => new sfWidgetFormInput(),
			'password' => new sfWidgetFormInputPassword(),
		));
		
		$this -> widgetSchema->setNameFormat('login[%s]');
		
		$this -> setValidators(array(
			'username' => new sfValidatorString(
					array('max_length' => 25, 'required' => true, 'trim' => true), 
					array('required' => '<em>Användarnamn</em> får ej lämnas tomt', 
						'max_length' => '<em>Användarnamn</em> får vara max %max_length% tecken')),
			'password' => new sfValidatorString(
					array('max_length' => 8, 'min_length' => 8), 
					array('required' => '<em>Lösenord</em> får ej lämnas tomt', 
						'max_length' => '<em>Lösenord</em> måste vara %max_length% tecken', 
						'min_length' => '<em>Lösenord</em> måste vara %min_length% tecken'))
		));
	}
}
